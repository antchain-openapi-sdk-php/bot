<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\BOT\Models;

use AlibabaCloud\Tea\Model;

class VerifyIotbasicIdentifyRequest extends Model
{
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $productInstanceId;

    // 设备did
    /**
     * @var string
     */
    public $deviceDid;

    // 设备认证参数
    /**
     * @var string
     */
    public $verifyParam;

    // 设备签名，用设备pri_key 进行签名
    /**
     * @var string
     */
    public $deviceSignature;
    protected $_name = [
        'authToken'         => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'deviceDid'         => 'device_did',
        'verifyParam'       => 'verify_param',
        'deviceSignature'   => 'device_signature',
    ];

    public function validate()
    {
        Model::validateRequired('deviceDid', $this->deviceDid, true);
        Model::validateRequired('verifyParam', $this->verifyParam, true);
        Model::validateRequired('deviceSignature', $this->deviceSignature, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->productInstanceId) {
            $res['product_instance_id'] = $this->productInstanceId;
        }
        if (null !== $this->deviceDid) {
            $res['device_did'] = $this->deviceDid;
        }
        if (null !== $this->verifyParam) {
            $res['verify_param'] = $this->verifyParam;
        }
        if (null !== $this->deviceSignature) {
            $res['device_signature'] = $this->deviceSignature;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyIotbasicIdentifyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auth_token'])) {
            $model->authToken = $map['auth_token'];
        }
        if (isset($map['product_instance_id'])) {
            $model->productInstanceId = $map['product_instance_id'];
        }
        if (isset($map['device_did'])) {
            $model->deviceDid = $map['device_did'];
        }
        if (isset($map['verify_param'])) {
            $model->verifyParam = $map['verify_param'];
        }
        if (isset($map['device_signature'])) {
            $model->deviceSignature = $map['device_signature'];
        }

        return $model;
    }
}
