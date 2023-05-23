<?php

namespace QuantumCA\Sdk\Traits;

/**
 * 签名部分
 *
 * @property string $accessKeyId
 * @property string $accessKeySecret
 */
trait SignTrait
{
    /**
     * 遍历数组, 进行字符串化，并trim
     *
     * @param array $arr
     * @return array
     */
    private function everthingStringize($arr)
    {
        foreach ($arr as $key => $value) {
            if (is_numeric($value)) {
                $arr[$key] = (string) $value;
            } else if (is_array($value)) {
                $arr[$key] = $this->everthingStringize($value);
            } else if (is_string($value)) {
                $arr[$key] = trim($value);
                if ($arr[$key] === '') {
                    $arr[$key] = null;
                }
            }
        }
        return $arr;
    }

    /**
     * 签名方法
     *
     * @param string $resource 资源，一般是访问的路径文件
     * @param array $parameters 参数
     * @param string $accessKeyId
     * @param string $accessKeySecret
     * @return array 带签名的参数
     *
     * @link https://www.digital-sign.com.cn/api/signature-introduce
     */
    public function sign($resource, $parameters, $accessKeyId, $accessKeySecret)
    {
        $defaultTimeZone = date_default_timezone_get();
        if (!$defaultTimeZone) {
            $defaultTimeZone = 'UTC';
        }

        date_default_timezone_set('PRC');

        $parameters['accessKeyId'] = $accessKeyId;

        if (!isset($parameters['nonce'])) {
            $parameters['nonce'] = uniqid();
        }
        if (!isset($parameters['timestamp'])) {
            $parameters['timestamp'] = date('Y-m-d\TH:i:s\Z');
        }

        $parameters = $this->everthingStringize($parameters);

        $this->sortNestedArrayAssoc($parameters);
        date_default_timezone_set($defaultTimeZone);

        $parameters['sign'] = base64_encode(hash_hmac('sha256', $resource . '?' . http_build_query($parameters), $accessKeySecret, true));
        return $parameters;
    }

    /**
     * 递归排序数组
     */
    protected function sortNestedArrayAssoc(&$a)
    {
        if (!is_array($a)) {
            return false;
        }

        ksort($a);
        foreach ($a as $k => $v) {
            $this->sortNestedArrayAssoc($a[$k]);
        }
        return true;
    }
}
