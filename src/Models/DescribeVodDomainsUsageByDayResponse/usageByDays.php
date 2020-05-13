<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainsUsageByDayResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainsUsageByDayResponse\usageByDays\usageByDay;

class usageByDays extends Model {
    protected $_name = [
        'usageByDay' => 'UsageByDay',
    ];
    public function validate() {
        Model::validateRequired('usageByDay', $this->usageByDay, true);
    }
    public function toMap() {
        $res = [];
        $res['UsageByDay'] = [];
        if(null !== $this->usageByDay && is_array($this->usageByDay)){
            $n = 0;
            foreach($this->usageByDay as $item){
                $res['UsageByDay'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return usageByDays
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['UsageByDay'])){
            if(!empty($map['UsageByDay'])){
                $model->usageByDay = [];
                $n = 0;
                foreach($map['UsageByDay'] as $item) {
                    $model->usageByDay[$n++] = null !== $item ? usageByDay::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description UsageByDay
     * @var array
     */
    public $usageByDay;

}
