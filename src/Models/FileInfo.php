<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\BOT\Models;

use AlibabaCloud\Tea\Model;

class FileInfo extends Model {
    protected $_name = [
        'name' => 'name',
        'type' => 'type',
        'url' => 'url',
    ];
    public function validate() {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('url', $this->url, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return FileInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['url'])){
            $model->url = $map['url'];
        }
        return $model;
    }
    // 文件名称
    /**
     * @example 文件名称
     * @var string
     */
    public $name;

    // 文件类型
    /**
     * @example 文件类型
     * @var string
     */
    public $type;

    // oss地址
    /**
     * @example oss地址
     * @var string
     */
    public $url;

}
