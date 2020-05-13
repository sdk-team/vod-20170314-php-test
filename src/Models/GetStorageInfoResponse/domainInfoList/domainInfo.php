<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetStorageInfoResponse\domainInfoList;

use AlibabaCloud\Tea\Model;

class domainInfo extends Model {
    protected $_name = [
        'domainName' => 'DomainName',
        'domainStatus' => 'DomainStatus',
        'domainCname' => 'DomainCname',
        'defaultPlay' => 'DefaultPlay',
    ];
    public function validate() {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('domainStatus', $this->domainStatus, true);
        Model::validateRequired('domainCname', $this->domainCname, true);
        Model::validateRequired('defaultPlay', $this->defaultPlay, true);
    }
    public function toMap() {
        $res = [];
        $res['DomainName'] = $this->domainName;
        $res['DomainStatus'] = $this->domainStatus;
        $res['DomainCname'] = $this->domainCname;
        $res['DefaultPlay'] = $this->defaultPlay;
        return $res;
    }
    /**
     * @param array $map
     * @return domainInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['DomainStatus'])){
            $model->domainStatus = $map['DomainStatus'];
        }
        if(isset($map['DomainCname'])){
            $model->domainCname = $map['DomainCname'];
        }
        if(isset($map['DefaultPlay'])){
            $model->defaultPlay = $map['DefaultPlay'];
        }
        return $model;
    }
    /**
     * @description domainName
     * @var string
     */
    public $domainName;

    /**
     * @description domainStatus
     * @var string
     */
    public $domainStatus;

    /**
     * @description domainCname
     * @var string
     */
    public $domainCname;

    /**
     * @description defaultPlay
     * @var bool
     */
    public $defaultPlay;

}
