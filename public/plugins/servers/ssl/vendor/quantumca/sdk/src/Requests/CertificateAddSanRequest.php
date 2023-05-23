<?php

namespace QuantumCA\Sdk\Requests;

/**
 * 添加DCV接口
 *
 * @property string $quantum_id 必传,下单时返回的id
 * @property integer $san 需要添加的san个数
 *
 * @link https://www.digital-sign.com.cn/api/cert-add-san
 */
class CertificateAddSanRequest extends AbstractRequest
{
}
