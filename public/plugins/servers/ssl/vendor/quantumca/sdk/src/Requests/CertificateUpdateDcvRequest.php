<?php

namespace QuantumCA\Sdk\Requests;

/**
 * 更改DCV接口请求
 *
 * @property string $quantum_id 必传,下单时返回的id
 * @property string $domain 必传,域名
 * @property string $type 必传,验证类型:dns/http/https/email
 * @property string $value 当 type=email 时候必传,邮箱地址
 *
 * @link https://www.digital-sign.com.cn/api/cert-update-dcv
 */
class CertificateUpdateDcvRequest extends AbstractRequest
{
}
