<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\BOT\Models;

use AlibabaCloud\Tea\Model;

class BaiGoodsPointIdentificationResult extends Model
{
    // 鉴定点大项名称
    /**
     * @example 内包装
     *
     * @var string
     */
    public $pointName;

    // 鉴定点子项名称
    /**
     * @example 顶部
     *
     * @var string
     */
    public $subPointName;

    // 单点鉴定结果
    // REAL：鉴定为真
    // FAKE：鉴定为假
    // UNABLE_IDENTIFY：无法鉴定
    /**
     * @example REAL
     *
     * @var string
     */
    public $result;

    // 鉴定分数
    /**
     * @example 0.92
     *
     * @var string
     */
    public $grade;

    // 用户侧的鉴定点point_id，直接将用户传入的user_point_id返回
    /**
     * @example 100
     *
     * @var string
     */
    public $userPointId;

    // 鉴定评价
    /**
     * @example 完全同一，趋于同一，不同一
     *
     * @var string
     */
    public $appraiseMessage;

    // 鉴定点图片资源定位符
    /**
     * @example
     *
     * @var BaiResourceLocation
     */
    public $resourceLocation;
    protected $_name = [
        'pointName'        => 'point_name',
        'subPointName'     => 'sub_point_name',
        'result'           => 'result',
        'grade'            => 'grade',
        'userPointId'      => 'user_point_id',
        'appraiseMessage'  => 'appraise_message',
        'resourceLocation' => 'resource_location',
    ];

    public function validate()
    {
        Model::validateRequired('pointName', $this->pointName, true);
        Model::validateRequired('subPointName', $this->subPointName, true);
        Model::validateRequired('result', $this->result, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pointName) {
            $res['point_name'] = $this->pointName;
        }
        if (null !== $this->subPointName) {
            $res['sub_point_name'] = $this->subPointName;
        }
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }
        if (null !== $this->grade) {
            $res['grade'] = $this->grade;
        }
        if (null !== $this->userPointId) {
            $res['user_point_id'] = $this->userPointId;
        }
        if (null !== $this->appraiseMessage) {
            $res['appraise_message'] = $this->appraiseMessage;
        }
        if (null !== $this->resourceLocation) {
            $res['resource_location'] = null !== $this->resourceLocation ? $this->resourceLocation->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BaiGoodsPointIdentificationResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['point_name'])) {
            $model->pointName = $map['point_name'];
        }
        if (isset($map['sub_point_name'])) {
            $model->subPointName = $map['sub_point_name'];
        }
        if (isset($map['result'])) {
            $model->result = $map['result'];
        }
        if (isset($map['grade'])) {
            $model->grade = $map['grade'];
        }
        if (isset($map['user_point_id'])) {
            $model->userPointId = $map['user_point_id'];
        }
        if (isset($map['appraise_message'])) {
            $model->appraiseMessage = $map['appraise_message'];
        }
        if (isset($map['resource_location'])) {
            $model->resourceLocation = BaiResourceLocation::fromMap($map['resource_location']);
        }

        return $model;
    }
}
