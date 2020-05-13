<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeUserVvTopByDayResponse\userPlayStatisticsInfos;

use AlibabaCloud\Tea\Model;

class userPlayStatisticsInfo extends Model {
    protected $_name = [
        'count' => 'Count',
        'videoid' => 'Videoid',
        'videoName' => 'VideoName',
    ];
    public function validate() {
        Model::validateRequired('count', $this->count, true);
        Model::validateRequired('videoid', $this->videoid, true);
        Model::validateRequired('videoName', $this->videoName, true);
    }
    public function toMap() {
        $res = [];
        $res['Count'] = $this->count;
        $res['Videoid'] = $this->videoid;
        $res['VideoName'] = $this->videoName;
        return $res;
    }
    /**
     * @param array $map
     * @return userPlayStatisticsInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Count'])){
            $model->count = $map['Count'];
        }
        if(isset($map['Videoid'])){
            $model->videoid = $map['Videoid'];
        }
        if(isset($map['VideoName'])){
            $model->videoName = $map['VideoName'];
        }
        return $model;
    }
    /**
     * @description count
     * @var string
     */
    public $count;

    /**
     * @description videoid
     * @var string
     */
    public $videoid;

    /**
     * @description videoName
     * @var string
     */
    public $videoName;

}
