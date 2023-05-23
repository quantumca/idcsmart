<?php

namespace QuantumCA\Sdk\Requests;

/**
 * 重签证书请求
 *
 * @property string $unique_id
 * @property string $quantum_id 必传,下单时返回的id
 * @property string[] $domain_dcv 必传
 * @property string $csr 必传,客户上传的CSR
 * @property integer $renew OV/EV必传,是否为续费订单
 * @property string $organization OV/EV必传,公司名称
 * @property string $organization_unit OV/EV必传,公司部门
 * @property string $registered_address_line1 OV/EV必传,公司注册地址
 * @property string $serial_no OV/EV必传,公司注册号，三证合一
 * @property string $country OV/EV必传,2位国别码，大写
 * @property string $state OV/EV必传,省份
 * @property string $city OV/EV必传,城市
 * @property string $postal_code OV/EV必传,邮编
 * @property string $organization_phone OV/EV必传,组织注册登记电话
 * @property string $date_of_incorporation OV/EV必传,成立日期
 * @property string $contact_name OV/EV必传,联系人
 * @property string $contact_title OV/EV必传,联系人职位
 * @property string $contact_phone OV/EV必传,联系人电话
 * @property string $contact_email 必传,联系人邮箱
 * @property string $notify_url 必传,证书颁发后的通知地址
 *
 * @link https://www.digital-sign.com.cn/api/cert-reissue
 */
class CertificateReissueRequest extends AbstractRequest
{
}
