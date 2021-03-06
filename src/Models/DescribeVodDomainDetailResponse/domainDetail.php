<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainDetailResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\domainDetail\sources;

class domainDetail extends Model {
    protected $_name = [
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'domainStatus' => 'DomainStatus',
        'cname' => 'Cname',
        'domainName' => 'DomainName',
        'description' => 'Description',
        'SSLProtocol' => 'SSLProtocol',
        'SSLPub' => 'SSLPub',
        'scope' => 'Scope',
        'certName' => 'CertName',
        'resourceGroupId' => 'ResourceGroupId',
        'weight' => 'Weight',
        'sources' => 'Sources',
    ];
    public function validate() {
        Model::validateRequired('gmtCreated', $this->gmtCreated, true);
        Model::validateRequired('gmtModified', $this->gmtModified, true);
        Model::validateRequired('domainStatus', $this->domainStatus, true);
        Model::validateRequired('cname', $this->cname, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('SSLProtocol', $this->SSLProtocol, true);
        Model::validateRequired('SSLPub', $this->SSLPub, true);
        Model::validateRequired('scope', $this->scope, true);
        Model::validateRequired('certName', $this->certName, true);
        Model::validateRequired('resourceGroupId', $this->resourceGroupId, true);
        Model::validateRequired('weight', $this->weight, true);
        Model::validateRequired('sources', $this->sources, true);
    }
    public function toMap() {
        $res = [];
        $res['GmtCreated'] = $this->gmtCreated;
        $res['GmtModified'] = $this->gmtModified;
        $res['DomainStatus'] = $this->domainStatus;
        $res['Cname'] = $this->cname;
        $res['DomainName'] = $this->domainName;
        $res['Description'] = $this->description;
        $res['SSLProtocol'] = $this->SSLProtocol;
        $res['SSLPub'] = $this->SSLPub;
        $res['Scope'] = $this->scope;
        $res['CertName'] = $this->certName;
        $res['ResourceGroupId'] = $this->resourceGroupId;
        $res['Weight'] = $this->weight;
        $res['Sources'] = null !== $this->sources ? $this->sources->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return domainDetail
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['GmtCreated'])){
            $model->gmtCreated = $map['GmtCreated'];
        }
        if(isset($map['GmtModified'])){
            $model->gmtModified = $map['GmtModified'];
        }
        if(isset($map['DomainStatus'])){
            $model->domainStatus = $map['DomainStatus'];
        }
        if(isset($map['Cname'])){
            $model->cname = $map['Cname'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['SSLProtocol'])){
            $model->SSLProtocol = $map['SSLProtocol'];
        }
        if(isset($map['SSLPub'])){
            $model->SSLPub = $map['SSLPub'];
        }
        if(isset($map['Scope'])){
            $model->scope = $map['Scope'];
        }
        if(isset($map['CertName'])){
            $model->certName = $map['CertName'];
        }
        if(isset($map['ResourceGroupId'])){
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if(isset($map['Weight'])){
            $model->weight = $map['Weight'];
        }
        if(isset($map['Sources'])){
            $model->sources = sources::fromMap($map['Sources']);
        }
        return $model;
    }
    /**
     * @description gmtCreated
     * @var string
     */
    public $gmtCreated;

    /**
     * @description gmtModified
     * @var string
     */
    public $gmtModified;

    /**
     * @description domainStatus
     * @var string
     */
    public $domainStatus;

    /**
     * @description cname
     * @var string
     */
    public $cname;

    /**
     * @description domainName
     * @var string
     */
    public $domainName;

    /**
     * @description remark
     * @var string
     */
    public $description;

    /**
     * @description sslProtocol
     * @var string
     */
    public $SSLProtocol;

    /**
     * @description sslPub
     * @var string
     */
    public $SSLPub;

    /**
     * @description scope
     * @var string
     */
    public $scope;

    /**
     * @description certName
     * @var string
     */
    public $certName;

    /**
     * @description resourceGroupId
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description weight
     * @var string
     */
    public $weight;

    /**
     * @description sources
     * @var domainDetail.sources
     */
    public $sources;

}
