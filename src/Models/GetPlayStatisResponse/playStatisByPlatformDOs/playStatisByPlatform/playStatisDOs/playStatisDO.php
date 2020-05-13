<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetPlayStatisResponse\playStatisByPlatformDOs\playStatisByPlatform\playStatisDOs;

use AlibabaCloud\Tea\Model;

class playStatisDO extends Model {
    protected $_name = [
        'userId' => 'UserId',
        'platform' => 'Platform',
        'visitView' => 'VisitView',
        'viewTime' => 'ViewTime',
        'statTime' => 'StatTime',
    ];
    public function validate() {
        Model::validateRequired('userId', $this->userId, true);
        Model::validateRequired('platform', $this->platform, true);
        Model::validateRequired('visitView', $this->visitView, true);
        Model::validateRequired('viewTime', $this->viewTime, true);
        Model::validateRequired('statTime', $this->statTime, true);
    }
    public function toMap() {
        $res = [];
        $res['UserId'] = $this->userId;
        $res['Platform'] = $this->platform;
        $res['VisitView'] = $this->visitView;
        $res['ViewTime'] = $this->viewTime;
        $res['StatTime'] = $this->statTime;
        return $res;
    }
    /**
     * @param array $map
     * @return playStatisDO
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['UserId'])){
            $model->userId = $map['UserId'];
        }
        if(isset($map['Platform'])){
            $model->platform = $map['Platform'];
        }
        if(isset($map['VisitView'])){
            $model->visitView = $map['VisitView'];
        }
        if(isset($map['ViewTime'])){
            $model->viewTime = $map['ViewTime'];
        }
        if(isset($map['StatTime'])){
            $model->statTime = $map['StatTime'];
        }
        return $model;
    }
    /**
     * @description userId
     * @var string
     */
    public $userId;

    /**
     * @description platform
     * @var string
     */
    public $platform;

    /**
     * @description visitView
     * @var integer
     */
    public $visitView;

    /**
     * @description viewTime
     * @var integer
     */
    public $viewTime;

    /**
     * @description statTimeStr
     * @var string
     */
    public $statTime;

}
