<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\BOT\Models;

use AlibabaCloud\Tea\Model;

class SendCollectorDevicebizdataRequest extends Model
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

    // 数据模型Id
    //
    //
    /**
     * @var string
     */
    public $dataModelId;

    // 业务号，防重放
    //
    //
    /**
     * @var string
     */
    public $nonce;

    // 上传数据
    /**
     * @var BizContentGroup[]
     */
    public $content;

    // 场景码，与content中的chainDeviceId至少有一个不为空
    /**
     * @var string
     */
    public $scene;

    // 开启后，接口返回值中包含txHash
    /**
     * @var bool
     */
    public $waitCheckAndHash;
    protected $_name = [
        'authToken'         => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'dataModelId'       => 'data_model_id',
        'nonce'             => 'nonce',
        'content'           => 'content',
        'scene'             => 'scene',
        'waitCheckAndHash'  => 'wait_check_and_hash',
    ];

    public function validate()
    {
        Model::validateRequired('dataModelId', $this->dataModelId, true);
        Model::validateRequired('nonce', $this->nonce, true);
        Model::validateRequired('content', $this->content, true);
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
        if (null !== $this->dataModelId) {
            $res['data_model_id'] = $this->dataModelId;
        }
        if (null !== $this->nonce) {
            $res['nonce'] = $this->nonce;
        }
        if (null !== $this->content) {
            $res['content'] = [];
            if (null !== $this->content && \is_array($this->content)) {
                $n = 0;
                foreach ($this->content as $item) {
                    $res['content'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
        }
        if (null !== $this->waitCheckAndHash) {
            $res['wait_check_and_hash'] = $this->waitCheckAndHash;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendCollectorDevicebizdataRequest
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
        if (isset($map['data_model_id'])) {
            $model->dataModelId = $map['data_model_id'];
        }
        if (isset($map['nonce'])) {
            $model->nonce = $map['nonce'];
        }
        if (isset($map['content'])) {
            if (!empty($map['content'])) {
                $model->content = [];
                $n              = 0;
                foreach ($map['content'] as $item) {
                    $model->content[$n++] = null !== $item ? BizContentGroup::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }
        if (isset($map['wait_check_and_hash'])) {
            $model->waitCheckAndHash = $map['wait_check_and_hash'];
        }

        return $model;
    }
}
