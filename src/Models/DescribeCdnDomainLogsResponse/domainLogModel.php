<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeCdnDomainLogsResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\domainLogModel\domainLogDetails;

class domainLogModel extends Model {
    protected $_name = [
        'domainName' => 'DomainName',
        'domainLogDetails' => 'DomainLogDetails',
    ];
    public function validate() {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('domainLogDetails', $this->domainLogDetails, true);
    }
    public function toMap() {
        $res = [];
        $res['DomainName'] = $this->domainName;
        $res['DomainLogDetails'] = null !== $this->domainLogDetails ? $this->domainLogDetails->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return domainLogModel
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['DomainLogDetails'])){
            $model->domainLogDetails = domainLogDetails::fromMap($map['DomainLogDetails']);
        }
        return $model;
    }
    /**
     * @description domainName
     * @var string
     */
    public $domainName;

    /**
     * @description domainLogDetails
     * @var domainLogModel.domainLogDetails
     */
    public $domainLogDetails;

}
