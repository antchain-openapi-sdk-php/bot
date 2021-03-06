<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\BOT\Models;

use AlibabaCloud\Tea\Model;

class SyncLabelTransferrawRequest extends Model
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

    // 场景码
    //
    /**
     * @var string
     */
    public $scene;

    // 收集标签数据
    /**
     * @var CollectLabelRawContent[]
     */
    public $collectLabelRawContentList;

    // 业务号
    /**
     * @var string
     */
    public $nonce;
    protected $_name = [
        'authToken'                  => 'auth_token',
        'productInstanceId'          => 'product_instance_id',
        'scene'                      => 'scene',
        'collectLabelRawContentList' => 'collect_label_raw_content_list',
        'nonce'                      => 'nonce',
    ];

    public function validate()
    {
        Model::validateRequired('scene', $this->scene, true);
        Model::validateRequired('collectLabelRawContentList', $this->collectLabelRawContentList, true);
        Model::validateRequired('nonce', $this->nonce, true);
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
        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
        }
        if (null !== $this->collectLabelRawContentList) {
            $res['collect_label_raw_content_list'] = [];
            if (null !== $this->collectLabelRawContentList && \is_array($this->collectLabelRawContentList)) {
                $n = 0;
                foreach ($this->collectLabelRawContentList as $item) {
                    $res['collect_label_raw_content_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nonce) {
            $res['nonce'] = $this->nonce;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SyncLabelTransferrawRequest
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
        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }
        if (isset($map['collect_label_raw_content_list'])) {
            if (!empty($map['collect_label_raw_content_list'])) {
                $model->collectLabelRawContentList = [];
                $n                                 = 0;
                foreach ($map['collect_label_raw_content_list'] as $item) {
                    $model->collectLabelRawContentList[$n++] = null !== $item ? CollectLabelRawContent::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['nonce'])) {
            $model->nonce = $map['nonce'];
        }

        return $model;
    }
}
