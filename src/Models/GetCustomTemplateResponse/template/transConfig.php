<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetCustomTemplateResponse\template;

use AlibabaCloud\Tea\Model;

class transConfig extends Model {
    protected $_name = [
        'transMode' => 'TransMode',
        'isCheckReso' => 'IsCheckReso',
        'isCheckResoFail' => 'IsCheckResoFail',
        'isCheckVideoBitrate' => 'IsCheckVideoBitrate',
        'isCheckAudioBitrate' => 'IsCheckAudioBitrate',
        'isCheckAudioBitrateFail' => 'isCheckAudioBitrateFail',
        'isCheckVideoBitrateFail' => 'isCheckVideoBitrateFail',
    ];
    public function validate() {
        Model::validateRequired('transMode', $this->transMode, true);
        Model::validateRequired('isCheckReso', $this->isCheckReso, true);
        Model::validateRequired('isCheckResoFail', $this->isCheckResoFail, true);
        Model::validateRequired('isCheckVideoBitrate', $this->isCheckVideoBitrate, true);
        Model::validateRequired('isCheckAudioBitrate', $this->isCheckAudioBitrate, true);
        Model::validateRequired('isCheckAudioBitrateFail', $this->isCheckAudioBitrateFail, true);
        Model::validateRequired('isCheckVideoBitrateFail', $this->isCheckVideoBitrateFail, true);
    }
    public function toMap() {
        $res = [];
        $res['TransMode'] = $this->transMode;
        $res['IsCheckReso'] = $this->isCheckReso;
        $res['IsCheckResoFail'] = $this->isCheckResoFail;
        $res['IsCheckVideoBitrate'] = $this->isCheckVideoBitrate;
        $res['IsCheckAudioBitrate'] = $this->isCheckAudioBitrate;
        $res['isCheckAudioBitrateFail'] = $this->isCheckAudioBitrateFail;
        $res['isCheckVideoBitrateFail'] = $this->isCheckVideoBitrateFail;
        return $res;
    }
    /**
     * @param array $map
     * @return transConfig
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['TransMode'])){
            $model->transMode = $map['TransMode'];
        }
        if(isset($map['IsCheckReso'])){
            $model->isCheckReso = $map['IsCheckReso'];
        }
        if(isset($map['IsCheckResoFail'])){
            $model->isCheckResoFail = $map['IsCheckResoFail'];
        }
        if(isset($map['IsCheckVideoBitrate'])){
            $model->isCheckVideoBitrate = $map['IsCheckVideoBitrate'];
        }
        if(isset($map['IsCheckAudioBitrate'])){
            $model->isCheckAudioBitrate = $map['IsCheckAudioBitrate'];
        }
        if(isset($map['isCheckAudioBitrateFail'])){
            $model->isCheckAudioBitrateFail = $map['isCheckAudioBitrateFail'];
        }
        if(isset($map['isCheckVideoBitrateFail'])){
            $model->isCheckVideoBitrateFail = $map['isCheckVideoBitrateFail'];
        }
        return $model;
    }
    /**
     * @description transMode
     * @var string
     */
    public $transMode;

    /**
     * @description isCheckReso
     * @var string
     */
    public $isCheckReso;

    /**
     * @description isCheckResoFail
     * @var string
     */
    public $isCheckResoFail;

    /**
     * @description isCheckVideoBitrate
     * @var string
     */
    public $isCheckVideoBitrate;

    /**
     * @description isCheckAudioBitrate
     * @var string
     */
    public $isCheckAudioBitrate;

    /**
     * @description isCheckAudioBitrateFail
     * @var string
     */
    public $isCheckAudioBitrateFail;

    /**
     * @description isCheckVideoBitrateFail
     * @var string
     */
    public $isCheckVideoBitrateFail;

}
