<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeUserUvByDayResponse\userPlayStatisticsInfos;

use AlibabaCloud\Tea\Model;

class userPlayStatisticsInfo extends Model {
    protected $_name = [
        'date' => 'Date',
        'android' => 'Android',
        'ios' => 'Ios',
        'h5' => 'H5',
        'flash' => 'Flash',
    ];
    public function validate() {
        Model::validateRequired('date', $this->date, true);
        Model::validateRequired('android', $this->android, true);
        Model::validateRequired('ios', $this->ios, true);
        Model::validateRequired('h5', $this->h5, true);
        Model::validateRequired('flash', $this->flash, true);
    }
    public function toMap() {
        $res = [];
        $res['Date'] = $this->date;
        $res['Android'] = $this->android;
        $res['Ios'] = $this->ios;
        $res['H5'] = $this->h5;
        $res['Flash'] = $this->flash;
        return $res;
    }
    /**
     * @param array $map
     * @return userPlayStatisticsInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Date'])){
            $model->date = $map['Date'];
        }
        if(isset($map['Android'])){
            $model->android = $map['Android'];
        }
        if(isset($map['Ios'])){
            $model->ios = $map['Ios'];
        }
        if(isset($map['H5'])){
            $model->h5 = $map['H5'];
        }
        if(isset($map['Flash'])){
            $model->flash = $map['Flash'];
        }
        return $model;
    }
    /**
     * @description date
     * @var string
     */
    public $date;

    /**
     * @description android
     * @var string
     */
    public $android;

    /**
     * @description ios
     * @var string
     */
    public $ios;

    /**
     * @description h5
     * @var string
     */
    public $h5;

    /**
     * @description flash
     * @var string
     */
    public $flash;

}
