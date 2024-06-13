<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\BOT\Models;

use AlibabaCloud\Tea\Model;

class IotbasicDeviceModelFixedAttributeInfo extends Model
{
    // 属性说明
    /**
     * @example name
     *
     * @var string
     */
    public $attributeName;

    // 属性名称
    /**
     * @example value
     *
     * @var string
     */
    public $attributeValue;

    // 数据值类型
    // 字符串：string
    // 数字：long
    /**
     * @example string
     *
     * @var string
     */
    public $dataType;

    // dataType为string时，表示数据长度最小值
    // dataType为long时，表示数据范围最小值
    /**
     * @example
     *
     * @var int
     */
    public $dataRangeMin;

    // dataType为string时，表示数据长度最大值
    // dataType为long时，表示数据范围最大值
    /**
     * @example
     *
     * @var int
     */
    public $dataRangeMax;
    protected $_name = [
        'attributeName'  => 'attribute_name',
        'attributeValue' => 'attribute_value',
        'dataType'       => 'data_type',
        'dataRangeMin'   => 'data_range_min',
        'dataRangeMax'   => 'data_range_max',
    ];

    public function validate()
    {
        Model::validateRequired('attributeName', $this->attributeName, true);
        Model::validateRequired('attributeValue', $this->attributeValue, true);
        Model::validateRequired('dataType', $this->dataType, true);
        Model::validateRequired('dataRangeMin', $this->dataRangeMin, true);
        Model::validateRequired('dataRangeMax', $this->dataRangeMax, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributeName) {
            $res['attribute_name'] = $this->attributeName;
        }
        if (null !== $this->attributeValue) {
            $res['attribute_value'] = $this->attributeValue;
        }
        if (null !== $this->dataType) {
            $res['data_type'] = $this->dataType;
        }
        if (null !== $this->dataRangeMin) {
            $res['data_range_min'] = $this->dataRangeMin;
        }
        if (null !== $this->dataRangeMax) {
            $res['data_range_max'] = $this->dataRangeMax;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IotbasicDeviceModelFixedAttributeInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['attribute_name'])) {
            $model->attributeName = $map['attribute_name'];
        }
        if (isset($map['attribute_value'])) {
            $model->attributeValue = $map['attribute_value'];
        }
        if (isset($map['data_type'])) {
            $model->dataType = $map['data_type'];
        }
        if (isset($map['data_range_min'])) {
            $model->dataRangeMin = $map['data_range_min'];
        }
        if (isset($map['data_range_max'])) {
            $model->dataRangeMax = $map['data_range_max'];
        }

        return $model;
    }
}
