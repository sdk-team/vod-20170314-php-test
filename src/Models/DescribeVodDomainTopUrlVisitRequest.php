<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class DescribeVodDomainTopUrlVisitRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'domainName' => 'DomainName',
        'startTime' => 'StartTime',
        'sortBy' => 'SortBy',
        'percent' => 'Percent',
    ];
    public function validate() {
        Model::validateRequired('domainName', $this->domainName, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['DomainName'] = $this->domainName;
        $res['StartTime'] = $this->startTime;
        $res['SortBy'] = $this->sortBy;
        $res['Percent'] = $this->percent;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeVodDomainTopUrlVisitRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['StartTime'])){
            $model->startTime = $map['StartTime'];
        }
        if(isset($map['SortBy'])){
            $model->sortBy = $map['SortBy'];
        }
        if(isset($map['Percent'])){
            $model->percent = $map['Percent'];
        }
        return $model;
    }
    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description domainName
     * @var string
     */
    public $domainName;

    /**
     * @description startTime
     * @var string
     */
    public $startTime;

    /**
     * @description sortBy
     * @var string
     */
    public $sortBy;

    /**
     * @description percent
     * @var string
     */
    public $percent;

}
