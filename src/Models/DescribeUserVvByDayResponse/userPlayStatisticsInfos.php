<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeUserVvByDayResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\DescribeUserVvByDayResponse\userPlayStatisticsInfos\userPlayStatisticsInfo;

class userPlayStatisticsInfos extends Model {
    protected $_name = [
        'userPlayStatisticsInfo' => 'UserPlayStatisticsInfo',
    ];
    public function validate() {
        Model::validateRequired('userPlayStatisticsInfo', $this->userPlayStatisticsInfo, true);
    }
    public function toMap() {
        $res = [];
        $res['UserPlayStatisticsInfo'] = [];
        if(null !== $this->userPlayStatisticsInfo && is_array($this->userPlayStatisticsInfo)){
            $n = 0;
            foreach($this->userPlayStatisticsInfo as $item){
                $res['UserPlayStatisticsInfo'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return userPlayStatisticsInfos
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['UserPlayStatisticsInfo'])){
            if(!empty($map['UserPlayStatisticsInfo'])){
                $model->userPlayStatisticsInfo = [];
                $n = 0;
                foreach($map['UserPlayStatisticsInfo'] as $item) {
                    $model->userPlayStatisticsInfo[$n++] = null !== $item ? userPlayStatisticsInfo::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description UserPlayStatisticsInfo
     * @var array
     */
    public $userPlayStatisticsInfo;

}
