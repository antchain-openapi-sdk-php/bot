<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\BOT\Models;

use AlibabaCloud\Tea\Model;

class QueryEntityrelationJtdevicebycarResponse extends Model
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

    // 车辆关联的部标设备列表
    /**
     * @var JtDevice[]
     */
    public $deviceList;

    // 所关联车辆实体信息
    /**
     * @var RelatedEntity
     */
    public $carEntity;
    protected $_name = [
        'reqMsgId'   => 'req_msg_id',
        'resultCode' => 'result_code',
        'resultMsg'  => 'result_msg',
        'deviceList' => 'device_list',
        'carEntity'  => 'car_entity',
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
        if (null !== $this->deviceList) {
            $res['device_list'] = [];
            if (null !== $this->deviceList && \is_array($this->deviceList)) {
                $n = 0;
                foreach ($this->deviceList as $item) {
                    $res['device_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->carEntity) {
            $res['car_entity'] = null !== $this->carEntity ? $this->carEntity->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryEntityrelationJtdevicebycarResponse
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
        if (isset($map['device_list'])) {
            if (!empty($map['device_list'])) {
                $model->deviceList = [];
                $n                 = 0;
                foreach ($map['device_list'] as $item) {
                    $model->deviceList[$n++] = null !== $item ? JtDevice::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['car_entity'])) {
            $model->carEntity = RelatedEntity::fromMap($map['car_entity']);
        }

        return $model;
    }
}
