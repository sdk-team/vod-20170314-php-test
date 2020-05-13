<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetAuditResultDetailResponse\AIAuditResultDetail;

use AlibabaCloud\Tea\Model;

class list_ extends Model {
    protected $_name = [
        'pornLabel' => 'PornLabel',
        'pornScore' => 'PornScore',
        'terrorismLabel' => 'TerrorismLabel',
        'terrorismScore' => 'TerrorismScore',
        'index' => 'Index',
        'object' => 'Object',
        'timestamp' => 'Timestamp',
    ];
    public function validate() {
        Model::validateRequired('pornLabel', $this->pornLabel, true);
        Model::validateRequired('pornScore', $this->pornScore, true);
        Model::validateRequired('terrorismLabel', $this->terrorismLabel, true);
        Model::validateRequired('terrorismScore', $this->terrorismScore, true);
        Model::validateRequired('index', $this->index, true);
        Model::validateRequired('object', $this->object, true);
        Model::validateRequired('timestamp', $this->timestamp, true);
    }
    public function toMap() {
        $res = [];
        $res['PornLabel'] = $this->pornLabel;
        $res['PornScore'] = $this->pornScore;
        $res['TerrorismLabel'] = $this->terrorismLabel;
        $res['TerrorismScore'] = $this->terrorismScore;
        $res['Index'] = $this->index;
        $res['Object'] = $this->object;
        $res['Timestamp'] = $this->timestamp;
        return $res;
    }
    /**
     * @param array $map
     * @return list
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['PornLabel'])){
            $model->pornLabel = $map['PornLabel'];
        }
        if(isset($map['PornScore'])){
            $model->pornScore = $map['PornScore'];
        }
        if(isset($map['TerrorismLabel'])){
            $model->terrorismLabel = $map['TerrorismLabel'];
        }
        if(isset($map['TerrorismScore'])){
            $model->terrorismScore = $map['TerrorismScore'];
        }
        if(isset($map['Index'])){
            $model->index = $map['Index'];
        }
        if(isset($map['Object'])){
            $model->object = $map['Object'];
        }
        if(isset($map['Timestamp'])){
            $model->timestamp = $map['Timestamp'];
        }
        return $model;
    }
    /**
     * @description pornLabel
     * @var string
     */
    public $pornLabel;

    /**
     * @description pornScore
     * @var string
     */
    public $pornScore;

    /**
     * @description terrorismLabel
     * @var string
     */
    public $terrorismLabel;

    /**
     * @description terrorismScore
     * @var string
     */
    public $terrorismScore;

    /**
     * @description index
     * @var string
     */
    public $index;

    /**
     * @description object
     * @var string
     */
    public $object;

    /**
     * @description timestamp
     * @var string
     */
    public $timestamp;

}
