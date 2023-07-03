<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\BOT\Models;

use AlibabaCloud\Tea\Model;

class QueryCollectorJtfluxRequest extends Model
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

    // 查询类型，支持LOCATION, TRACE,  ALARM三类
    /**
     * @var string
     */
    public $queryType;

    // 查询模式，支持抽样SAMPLE和分页PAGE两类，query_type不是LOCATION时必填
    /**
     * @var string
     */
    public $queryMode;

    // 场景码
    /**
     * @var string
     */
    public $scene;

    // 部标设备可信平台唯一ID列表
    /**
     * @var int[]
     */
    public $trustiotDeviceIdList;

    // 开始时间，查询TRACE,  ALARM时必填
    /**
     * @var int
     */
    public $startTime;

    // 结束时间，查询TRACE,  ALARM时必填
    /**
     * @var int
     */
    public $endTime;

    // 查询ALARM的类型，默认查全部类型，包括ALARM_BASIC,ALARM_ADAS ,ALARM_DSM,ALARM_ACCELEROMETER四类
    /**
     * @var string[]
     */
    public $alarmTypes;

    // 页码
    /**
     * @var int
     */
    public $pageIndex;

    // 单页数量
    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'authToken'            => 'auth_token',
        'productInstanceId'    => 'product_instance_id',
        'queryType'            => 'query_type',
        'queryMode'            => 'query_mode',
        'scene'                => 'scene',
        'trustiotDeviceIdList' => 'trustiot_device_id_list',
        'startTime'            => 'start_time',
        'endTime'              => 'end_time',
        'alarmTypes'           => 'alarm_types',
        'pageIndex'            => 'page_index',
        'pageSize'             => 'page_size',
    ];

    public function validate()
    {
        Model::validateRequired('queryType', $this->queryType, true);
        Model::validateRequired('scene', $this->scene, true);
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
        if (null !== $this->queryType) {
            $res['query_type'] = $this->queryType;
        }
        if (null !== $this->queryMode) {
            $res['query_mode'] = $this->queryMode;
        }
        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
        }
        if (null !== $this->trustiotDeviceIdList) {
            $res['trustiot_device_id_list'] = $this->trustiotDeviceIdList;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->alarmTypes) {
            $res['alarm_types'] = $this->alarmTypes;
        }
        if (null !== $this->pageIndex) {
            $res['page_index'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCollectorJtfluxRequest
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
        if (isset($map['query_type'])) {
            $model->queryType = $map['query_type'];
        }
        if (isset($map['query_mode'])) {
            $model->queryMode = $map['query_mode'];
        }
        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }
        if (isset($map['trustiot_device_id_list'])) {
            if (!empty($map['trustiot_device_id_list'])) {
                $model->trustiotDeviceIdList = $map['trustiot_device_id_list'];
            }
        }
        if (isset($map['start_time'])) {
            $model->startTime = $map['start_time'];
        }
        if (isset($map['end_time'])) {
            $model->endTime = $map['end_time'];
        }
        if (isset($map['alarm_types'])) {
            if (!empty($map['alarm_types'])) {
                $model->alarmTypes = $map['alarm_types'];
            }
        }
        if (isset($map['page_index'])) {
            $model->pageIndex = $map['page_index'];
        }
        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }

        return $model;
    }
}
