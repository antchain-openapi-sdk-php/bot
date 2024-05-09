<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\BOT\Models;

use AlibabaCloud\Tea\Model;

class DeleteDevicecorpThingmodelRequest extends Model
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

    // 需要删除的属性标识符列表
    /**
     * @var string[]
     */
    public $propertyIdentifier;

    // 需要删除的服务标识符列表
    /**
     * @var string[]
     */
    public $serviceIdentifier;

    // 需要删除的事件标识符列表
    /**
     * @var string[]
     */
    public $eventIdentifier;
    protected $_name = [
        'authToken'          => 'auth_token',
        'productInstanceId'  => 'product_instance_id',
        'propertyIdentifier' => 'property_identifier',
        'serviceIdentifier'  => 'service_identifier',
        'eventIdentifier'    => 'event_identifier',
    ];

    public function validate()
    {
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
        if (null !== $this->propertyIdentifier) {
            $res['property_identifier'] = $this->propertyIdentifier;
        }
        if (null !== $this->serviceIdentifier) {
            $res['service_identifier'] = $this->serviceIdentifier;
        }
        if (null !== $this->eventIdentifier) {
            $res['event_identifier'] = $this->eventIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDevicecorpThingmodelRequest
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
        if (isset($map['property_identifier'])) {
            if (!empty($map['property_identifier'])) {
                $model->propertyIdentifier = $map['property_identifier'];
            }
        }
        if (isset($map['service_identifier'])) {
            if (!empty($map['service_identifier'])) {
                $model->serviceIdentifier = $map['service_identifier'];
            }
        }
        if (isset($map['event_identifier'])) {
            if (!empty($map['event_identifier'])) {
                $model->eventIdentifier = $map['event_identifier'];
            }
        }

        return $model;
    }
}
