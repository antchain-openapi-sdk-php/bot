<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\BOT\Models;

use AlibabaCloud\Tea\Model;

class AddCertificateResponse extends Model
{
    // 请求唯一ID，用于链路跟踪和问题排查
    /**
     * @var string
     */
    public $reqMsgId;

    // 结果码，一般OK表示调用成功
    /**
     * @var string
     */
    public $resultCode;

    // 异常信息的文本描述
    /**
     * @var string
     */
    public $resultMsg;

    // 原始数据
    /**
     * @var string
     */
    public $rawData;

    // 对raw_data的签名
    /**
     * @var string
     */
    public $platformSignature;

    // 执行结果成功与否
    /**
     * @var bool
     */
    public $success;

    // 错误码
    /**
     * @var int
     */
    public $errorCode;
    protected $_name = [
        'reqMsgId'          => 'req_msg_id',
        'resultCode'        => 'result_code',
        'resultMsg'         => 'result_msg',
        'rawData'           => 'raw_data',
        'platformSignature' => 'platform_signature',
        'success'           => 'success',
        'errorCode'         => 'error_code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reqMsgId) {
            $res['req_msg_id'] = $this->reqMsgId;
        }
        if (null !== $this->resultCode) {
            $res['result_code'] = $this->resultCode;
        }
        if (null !== $this->resultMsg) {
            $res['result_msg'] = $this->resultMsg;
        }
        if (null !== $this->rawData) {
            $res['raw_data'] = $this->rawData;
        }
        if (null !== $this->platformSignature) {
            $res['platform_signature'] = $this->platformSignature;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->errorCode) {
            $res['error_code'] = $this->errorCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCertificateResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['req_msg_id'])) {
            $model->reqMsgId = $map['req_msg_id'];
        }
        if (isset($map['result_code'])) {
            $model->resultCode = $map['result_code'];
        }
        if (isset($map['result_msg'])) {
            $model->resultMsg = $map['result_msg'];
        }
        if (isset($map['raw_data'])) {
            $model->rawData = $map['raw_data'];
        }
        if (isset($map['platform_signature'])) {
            $model->platformSignature = $map['platform_signature'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['error_code'])) {
            $model->errorCode = $map['error_code'];
        }

        return $model;
    }
}
