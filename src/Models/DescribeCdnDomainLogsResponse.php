<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\DescribeCdnDomainLogsResponse\domainLogModel;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeCdnDomainLogsResponse\domainLogModel\domainLogDetails;

class DescribeCdnDomainLogsResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'total' => 'Total',
        'domainLogModel' => 'DomainLogModel',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('pageNo', $this->pageNo, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('domainLogModel', $this->domainLogModel, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['PageNo'] = $this->pageNo;
        $res['PageSize'] = $this->pageSize;
        $res['Total'] = $this->total;
        $res['DomainLogModel'] = null !== $this->domainLogModel ? $this->domainLogModel->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeCdnDomainLogsResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['PageNo'])){
            $model->pageNo = $map['PageNo'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['Total'])){
            $model->total = $map['Total'];
        }
        if(isset($map['DomainLogModel'])){
            $model->domainLogModel = domainLogModel::fromMap($map['DomainLogModel']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.pageNumber
     * @var integer
     */
    public $pageNo;

    /**
     * @description data.pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description data.totalCount
     * @var integer
     */
    public $total;

    /**
     * @description data.domainLogModel
     * @var DescribeCdnDomainLogsResponse.domainLogModel
     */
    public $domainLogModel;

}
