<?php

namespace QuantumCA\Sdk\Resources;

use QuantumCA\Sdk\Requests\CertificateAddSanRequest;
use QuantumCA\Sdk\Requests\CertificateCreateRequest;
use QuantumCA\Sdk\Requests\CertificateDetailRequest;
use QuantumCA\Sdk\Requests\CertificateRefundRequest;
use QuantumCA\Sdk\Requests\CertificateReissueRequest;
use QuantumCA\Sdk\Requests\CertificateUpdateDcvRequest;
use QuantumCA\Sdk\Requests\CertificateValidateDcvRequest;

class Order extends AbstractResource
{
    /**
     * 证书下单接口
     *
     * @param CertificateCreateRequest $certificateCreateRequest
     * @return \QuantumCA\Sdk\Scheme\CertificateDetailScheme
     *
     * @link https://www.digital-sign.com.cn/api/cert-issue
     */
    public function certificateCreate(CertificateCreateRequest $certificateCreateRequest)
    {
        return $this->client->post('certificate/create', $certificateCreateRequest->toArray());
    }


     /**
      * 证书重签接口
      *
      * @param CertificateReissueRequest $certificateReissueRequest
      * @return \QuantumCA\Sdk\Scheme\CertificateDetailScheme
      *
      * @link https://www.digital-sign.com.cn/api/cert-reissue
      */
     public function certificateReissue(CertificateReissueRequest $certificateReissueRequest)
     {
         return $this->client->post('certificate/reissue', $certificateReissueRequest->toArray());
    }

    /**
     * 证书查询接口
     *
     * @param CertificateDetailRequest $certificateDetailRequest
     * @return \QuantumCA\Sdk\Scheme\CertificateDetailScheme
     *
     * @link https://www.digital-sign.com.cn/api/cert-detail
     */
    public function certificateDetail(CertificateDetailRequest $certificateDetailRequest)
    {
        return $this->client->get('certificate/detail', $certificateDetailRequest->toArray());
    }

    /**
     * 证书更新 DCV 接口
     *
     * @param CertificateUpdateDcvRequest $certificateUpdateDcvRequest
     * @return \QuantumCA\Sdk\Scheme\Certificate\DnsDCV[]|\QuantumCA\Sdk\Scheme\Certificate\EmailDCV[]|\QuantumCA\Sdk\Scheme\Certificate\HttpDCV[]|\QuantumCA\Sdk\Scheme\Certificate\HttpsDCV[]
     *
     * @link https://www.digital-sign.com.cn/api/cert-update-dcv
     */
    public function certificateUpdateDcv(CertificateUpdateDcvRequest $certificateUpdateDcvRequest)
    {
        return $this->client->post('certificate/update-dcv', $certificateUpdateDcvRequest->toArray());
    }

    /**
     * 证书提交检查DCV接口
     *
     * @param CertificateValidateDcvRequest $certificateValidateDcvRequest
     * @return \QuantumCA\Sdk\Scheme\CertificateDetailScheme
     *
     * @link https://www.digital-sign.com.cn/api/cert-validate-dcv
     */
    public function certificateValidateDcv(CertificateValidateDcvRequest $certificateValidateDcvRequest)
    {
        return $this->client->post('certificate/validate-dcv', $certificateValidateDcvRequest->toArray());
    }

    /**
     * 添加DCV接口
     *
     * @param CertificateAddSanRequest $certificateAddSanRequest
     * @return \QuantumCA\Sdk\Scheme\CertificateAddSanScheme
     *
     * @link https://www.digital-sign.com.cn/api/cert-add-san
     */
    public function certificateAddSan(CertificateAddSanRequest $certificateAddSanRequest)
    {
        return $this->client->post('certificate/add-san', $certificateAddSanRequest->toArray());
    }

    /**
     * 退款
     *
     * @param CertificateRefundRequest $certificateRefundRequest
     * @return \QuantumCA\Sdk\Scheme\CertificateRefundScheme
     *
     * @link https://www.digital-sign.com.cn/api/cert-refund
     */
    public function certificateRefund(CertificateRefundRequest $certificateRefundRequest)
    {
        return $this->client->post('certificate/refund', $certificateRefundRequest->toArray());
    }
}
