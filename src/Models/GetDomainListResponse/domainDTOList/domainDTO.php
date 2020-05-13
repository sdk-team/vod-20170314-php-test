<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetDomainListResponse\domainDTOList;

use AlibabaCloud\Tea\Model;

class domainDTO extends Model {
    protected $_name = [
        'userId' => 'UserId',
        'domainName' => 'DomainName',
        'domainType' => 'DomainType',
        'domainCname' => 'DomainCname',
        'domainStatus' => 'DomainStatus',
        'bucketName' => 'BucketName',
        'bucketEndpoint' => 'BucketEndpoint',
        'defaultPlay' => 'DefaultPlay',
        'sourceLocation' => 'SourceLocation',
    ];
    public function validate() {
        Model::validateRequired('userId', $this->userId, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('domainType', $this->domainType, true);
        Model::validateRequired('domainCname', $this->domainCname, true);
        Model::validateRequired('domainStatus', $this->domainStatus, true);
        Model::validateRequired('bucketName', $this->bucketName, true);
        Model::validateRequired('bucketEndpoint', $this->bucketEndpoint, true);
        Model::validateRequired('defaultPlay', $this->defaultPlay, true);
        Model::validateRequired('sourceLocation', $this->sourceLocation, true);
    }
    public function toMap() {
        $res = [];
        $res['UserId'] = $this->userId;
        $res['DomainName'] = $this->domainName;
        $res['DomainType'] = $this->domainType;
        $res['DomainCname'] = $this->domainCname;
        $res['DomainStatus'] = $this->domainStatus;
        $res['BucketName'] = $this->bucketName;
        $res['BucketEndpoint'] = $this->bucketEndpoint;
        $res['DefaultPlay'] = $this->defaultPlay;
        $res['SourceLocation'] = $this->sourceLocation;
        return $res;
    }
    /**
     * @param array $map
     * @return domainDTO
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['UserId'])){
            $model->userId = $map['UserId'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['DomainType'])){
            $model->domainType = $map['DomainType'];
        }
        if(isset($map['DomainCname'])){
            $model->domainCname = $map['DomainCname'];
        }
        if(isset($map['DomainStatus'])){
            $model->domainStatus = $map['DomainStatus'];
        }
        if(isset($map['BucketName'])){
            $model->bucketName = $map['BucketName'];
        }
        if(isset($map['BucketEndpoint'])){
            $model->bucketEndpoint = $map['BucketEndpoint'];
        }
        if(isset($map['DefaultPlay'])){
            $model->defaultPlay = $map['DefaultPlay'];
        }
        if(isset($map['SourceLocation'])){
            $model->sourceLocation = $map['SourceLocation'];
        }
        return $model;
    }
    /**
     * @description userId
     * @var integer
     */
    public $userId;

    /**
     * @description domainName
     * @var string
     */
    public $domainName;

    /**
     * @description domainType
     * @var string
     */
    public $domainType;

    /**
     * @description domainCname
     * @var string
     */
    public $domainCname;

    /**
     * @description domainStatus
     * @var string
     */
    public $domainStatus;

    /**
     * @description bucketName
     * @var string
     */
    public $bucketName;

    /**
     * @description bucketEndpoint
     * @var string
     */
    public $bucketEndpoint;

    /**
     * @description defaultPlay
     * @var bool
     */
    public $defaultPlay;

    /**
     * @description sourceLocation
     * @var string
     */
    public $sourceLocation;

}
