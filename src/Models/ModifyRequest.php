<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class ModifyRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'securityToken' => 'SecurityToken',
        'product' => 'product',
        'version' => 'version',
        'action' => 'action',
        'regionId' => 'regionId',
        'domain' => 'domain',
        'data' => 'data',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['SecurityToken'] = $this->securityToken;
        $res['product'] = $this->product;
        $res['version'] = $this->version;
        $res['action'] = $this->action;
        $res['regionId'] = $this->regionId;
        $res['domain'] = $this->domain;
        $res['data'] = $this->data;
        return $res;
    }
    /**
     * @param array $map
     * @return ModifyRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['SecurityToken'])){
            $model->securityToken = $map['SecurityToken'];
        }
        if(isset($map['product'])){
            $model->product = $map['product'];
        }
        if(isset($map['version'])){
            $model->version = $map['version'];
        }
        if(isset($map['action'])){
            $model->action = $map['action'];
        }
        if(isset($map['regionId'])){
            $model->regionId = $map['regionId'];
        }
        if(isset($map['domain'])){
            $model->domain = $map['domain'];
        }
        if(isset($map['data'])){
            $model->data = $map['data'];
        }
        return $model;
    }
    /**
     * @description accessKeyId
     * @var string
     */
    public $accessKeyId;

    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description securityToken
     * @var string
     */
    public $securityToken;

    /**
     * @description product
     * @var string
     */
    public $product;

    /**
     * @description version
     * @var string
     */
    public $version;

    /**
     * @description action
     * @var string
     */
    public $action;

    /**
     * @description regionId
     * @var string
     */
    public $regionId;

    /**
     * @description domain
     * @var string
     */
    public $domain;

    /**
     * @description data
     * @var string
     */
    public $data;

}
