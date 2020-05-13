<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainTopUrlVisitResponse\allUrlList;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainTopUrlVisitResponse\url200List;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainTopUrlVisitResponse\url300List;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainTopUrlVisitResponse\url400List;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainTopUrlVisitResponse\url500List;

class DescribeVodDomainTopUrlVisitResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'domainName' => 'DomainName',
        'startTime' => 'StartTime',
        'allUrlList' => 'AllUrlList',
        'url200List' => 'Url200List',
        'url300List' => 'Url300List',
        'url400List' => 'Url400List',
        'url500List' => 'Url500List',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('allUrlList', $this->allUrlList, true);
        Model::validateRequired('url200List', $this->url200List, true);
        Model::validateRequired('url300List', $this->url300List, true);
        Model::validateRequired('url400List', $this->url400List, true);
        Model::validateRequired('url500List', $this->url500List, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DomainName'] = $this->domainName;
        $res['StartTime'] = $this->startTime;
        $res['AllUrlList'] = null !== $this->allUrlList ? $this->allUrlList->toMap() : null;
        $res['Url200List'] = null !== $this->url200List ? $this->url200List->toMap() : null;
        $res['Url300List'] = null !== $this->url300List ? $this->url300List->toMap() : null;
        $res['Url400List'] = null !== $this->url400List ? $this->url400List->toMap() : null;
        $res['Url500List'] = null !== $this->url500List ? $this->url500List->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeVodDomainTopUrlVisitResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['StartTime'])){
            $model->startTime = $map['StartTime'];
        }
        if(isset($map['AllUrlList'])){
            $model->allUrlList = allUrlList::fromMap($map['AllUrlList']);
        }
        if(isset($map['Url200List'])){
            $model->url200List = url200List::fromMap($map['Url200List']);
        }
        if(isset($map['Url300List'])){
            $model->url300List = url300List::fromMap($map['Url300List']);
        }
        if(isset($map['Url400List'])){
            $model->url400List = url400List::fromMap($map['Url400List']);
        }
        if(isset($map['Url500List'])){
            $model->url500List = url500List::fromMap($map['Url500List']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.domainName
     * @var string
     */
    public $domainName;

    /**
     * @description data.startTime
     * @var string
     */
    public $startTime;

    /**
     * @description data.content.all_url_list
     * @var DescribeVodDomainTopUrlVisitResponse.allUrlList
     */
    public $allUrlList;

    /**
     * @description data.content.2xx_url_list
     * @var DescribeVodDomainTopUrlVisitResponse.url200List
     */
    public $url200List;

    /**
     * @description data.content.3xx_url_list
     * @var DescribeVodDomainTopUrlVisitResponse.url300List
     */
    public $url300List;

    /**
     * @description data.content.4xx_url_list
     * @var DescribeVodDomainTopUrlVisitResponse.url400List
     */
    public $url400List;

    /**
     * @description data.content.5xx_url_list
     * @var DescribeVodDomainTopUrlVisitResponse.url500List
     */
    public $url500List;

}
