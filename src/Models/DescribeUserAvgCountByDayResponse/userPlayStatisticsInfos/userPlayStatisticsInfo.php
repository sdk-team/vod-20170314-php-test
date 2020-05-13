<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeUserAvgCountByDayResponse\userPlayStatisticsInfos;

use AlibabaCloud\Tea\Model;

class userPlayStatisticsInfo extends Model {
    protected $_name = [
        'date' => 'Date',
        'all' => 'All',
    ];
    public function validate() {
        Model::validateRequired('date', $this->date, true);
        Model::validateRequired('all', $this->all, true);
    }
    public function toMap() {
        $res = [];
        $res['Date'] = $this->date;
        $res['All'] = $this->all;
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
        if(isset($map['All'])){
            $model->all = $map['All'];
        }
        return $model;
    }
    /**
     * @description date
     * @var string
     */
    public $date;

    /**
     * @description all
     * @var string
     */
    public $all;

}
