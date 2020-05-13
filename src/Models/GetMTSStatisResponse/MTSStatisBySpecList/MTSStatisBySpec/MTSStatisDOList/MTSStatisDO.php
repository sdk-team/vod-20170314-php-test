<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetMTSStatisResponse\MTSStatisBySpecList\MTSStatisBySpec\MTSStatisDOList;

use AlibabaCloud\Tea\Model;

class MTSStatisDO extends Model {
    protected $_name = [
        'userId' => 'UserId',
        'specification' => 'Specification',
        'duration' => 'Duration',
        'statTime' => 'StatTime',
        'statTimeUTC' => 'StatTimeUTC',
    ];
    public function validate() {
        Model::validateRequired('userId', $this->userId, true);
        Model::validateRequired('specification', $this->specification, true);
        Model::validateRequired('duration', $this->duration, true);
        Model::validateRequired('statTime', $this->statTime, true);
        Model::validateRequired('statTimeUTC', $this->statTimeUTC, true);
    }
    public function toMap() {
        $res = [];
        $res['UserId'] = $this->userId;
        $res['Specification'] = $this->specification;
        $res['Duration'] = $this->duration;
        $res['StatTime'] = $this->statTime;
        $res['StatTimeUTC'] = $this->statTimeUTC;
        return $res;
    }
    /**
     * @param array $map
     * @return MTSStatisDO
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['UserId'])){
            $model->userId = $map['UserId'];
        }
        if(isset($map['Specification'])){
            $model->specification = $map['Specification'];
        }
        if(isset($map['Duration'])){
            $model->duration = $map['Duration'];
        }
        if(isset($map['StatTime'])){
            $model->statTime = $map['StatTime'];
        }
        if(isset($map['StatTimeUTC'])){
            $model->statTimeUTC = $map['StatTimeUTC'];
        }
        return $model;
    }
    /**
     * @description userId
     * @var string
     */
    public $userId;

    /**
     * @description specification
     * @var string
     */
    public $specification;

    /**
     * @description duration
     * @var integer
     */
    public $duration;

    /**
     * @description statTimeStr
     * @var string
     */
    public $statTime;

    /**
     * @description statTimeUTC
     * @var string
     */
    public $statTimeUTC;

}
