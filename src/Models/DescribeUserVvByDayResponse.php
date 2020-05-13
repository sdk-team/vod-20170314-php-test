<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\DescribeUserVvByDayResponse\userPlayStatisticsInfos;

class DescribeUserVvByDayResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'userPlayStatisticsInfos' => 'UserPlayStatisticsInfos',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('userPlayStatisticsInfos', $this->userPlayStatisticsInfos, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['UserPlayStatisticsInfos'] = null !== $this->userPlayStatisticsInfos ? $this->userPlayStatisticsInfos->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeUserVvByDayResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['UserPlayStatisticsInfos'])){
            $model->userPlayStatisticsInfos = userPlayStatisticsInfos::fromMap($map['UserPlayStatisticsInfos']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description userPlayStatisticsInfos
     * @var DescribeUserVvByDayResponse.userPlayStatisticsInfos
     */
    public $userPlayStatisticsInfos;

}
