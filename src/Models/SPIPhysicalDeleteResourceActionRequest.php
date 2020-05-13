<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class SPIPhysicalDeleteResourceActionRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'securityToken' => 'SecurityToken',
        'pk' => 'Pk',
        'bid' => 'Bid',
        'hid' => 'Hid',
        'country' => 'Country',
        'taskIdentifier' => 'TaskIdentifier',
        'taskExtraData' => 'TaskExtraData',
        'gmtWakeup' => 'GmtWakeup',
        'success' => 'Success',
        'message' => 'Message',
        'level' => 'Level',
        'url' => 'Url',
        'prompt' => 'Prompt',
    ];
    public function validate() {
        Model::validateRequired('pk', $this->pk, true);
        Model::validateRequired('bid', $this->bid, true);
        Model::validateRequired('hid', $this->hid, true);
        Model::validateRequired('country', $this->country, true);
        Model::validateRequired('taskIdentifier', $this->taskIdentifier, true);
        Model::validateRequired('taskExtraData', $this->taskExtraData, true);
        Model::validateRequired('gmtWakeup', $this->gmtWakeup, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['SecurityToken'] = $this->securityToken;
        $res['Pk'] = $this->pk;
        $res['Bid'] = $this->bid;
        $res['Hid'] = $this->hid;
        $res['Country'] = $this->country;
        $res['TaskIdentifier'] = $this->taskIdentifier;
        $res['TaskExtraData'] = $this->taskExtraData;
        $res['GmtWakeup'] = $this->gmtWakeup;
        $res['Success'] = $this->success;
        $res['Message'] = $this->message;
        $res['Level'] = $this->level;
        $res['Url'] = $this->url;
        $res['Prompt'] = $this->prompt;
        return $res;
    }
    /**
     * @param array $map
     * @return SPIPhysicalDeleteResourceActionRequest
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
        if(isset($map['Pk'])){
            $model->pk = $map['Pk'];
        }
        if(isset($map['Bid'])){
            $model->bid = $map['Bid'];
        }
        if(isset($map['Hid'])){
            $model->hid = $map['Hid'];
        }
        if(isset($map['Country'])){
            $model->country = $map['Country'];
        }
        if(isset($map['TaskIdentifier'])){
            $model->taskIdentifier = $map['TaskIdentifier'];
        }
        if(isset($map['TaskExtraData'])){
            $model->taskExtraData = $map['TaskExtraData'];
        }
        if(isset($map['GmtWakeup'])){
            $model->gmtWakeup = $map['GmtWakeup'];
        }
        if(isset($map['Success'])){
            $model->success = $map['Success'];
        }
        if(isset($map['Message'])){
            $model->message = $map['Message'];
        }
        if(isset($map['Level'])){
            $model->level = $map['Level'];
        }
        if(isset($map['Url'])){
            $model->url = $map['Url'];
        }
        if(isset($map['Prompt'])){
            $model->prompt = $map['Prompt'];
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
     * @description pk
     * @var string
     */
    public $pk;

    /**
     * @description bid
     * @var string
     */
    public $bid;

    /**
     * @description hid
     * @var integer
     */
    public $hid;

    /**
     * @description country
     * @var string
     */
    public $country;

    /**
     * @description taskIdentifier
     * @var string
     */
    public $taskIdentifier;

    /**
     * @description taskExtraData
     * @var string
     */
    public $taskExtraData;

    /**
     * @description gmtWakeup
     * @var string
     */
    public $gmtWakeup;

    /**
     * @description success
     * @var bool
     */
    public $success;

    /**
     * @description message
     * @var string
     */
    public $message;

    /**
     * @description level
     * @var integer
     */
    public $level;

    /**
     * @description url
     * @var string
     */
    public $url;

    /**
     * @description prompt
     * @var string
     */
    public $prompt;

}
