<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class DescribeVodDomainCnameRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'domainName' => 'DomainName',
    ];
    public function validate() {
        Model::validateRequired('domainName', $this->domainName, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['DomainName'] = $this->domainName;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeVodDomainCnameRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
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

}
