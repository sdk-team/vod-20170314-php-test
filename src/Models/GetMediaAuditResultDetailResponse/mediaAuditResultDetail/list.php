<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetMediaAuditResultDetailResponse\mediaAuditResultDetail;

use AlibabaCloud\Tea\Model;

class list_ extends Model {
    protected $_name = [
        'pornLabel' => 'PornLabel',
        'pornScore' => 'PornScore',
        'terrorismLabel' => 'TerrorismLabel',
        'terrorismScore' => 'TerrorismScore',
        'timestamp' => 'Timestamp',
        'url' => 'Url',
    ];
    public function validate() {
        Model::validateRequired('pornLabel', $this->pornLabel, true);
        Model::validateRequired('pornScore', $this->pornScore, true);
        Model::validateRequired('terrorismLabel', $this->terrorismLabel, true);
        Model::validateRequired('terrorismScore', $this->terrorismScore, true);
        Model::validateRequired('timestamp', $this->timestamp, true);
        Model::validateRequired('url', $this->url, true);
    }
    public function toMap() {
        $res = [];
        $res['PornLabel'] = $this->pornLabel;
        $res['PornScore'] = $this->pornScore;
        $res['TerrorismLabel'] = $this->terrorismLabel;
        $res['TerrorismScore'] = $this->terrorismScore;
        $res['Timestamp'] = $this->timestamp;
        $res['Url'] = $this->url;
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
        if(isset($map['Timestamp'])){
            $model->timestamp = $map['Timestamp'];
        }
        if(isset($map['Url'])){
            $model->url = $map['Url'];
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
     * @description timestamp
     * @var string
     */
    public $timestamp;

    /**
     * @description url
     * @var string
     */
    public $url;

}
