<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class AddLiveStreamVideoRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'customerId' => 'CustomerId',
        'streamName' => 'StreamName',
        'domainName' => 'DomainName',
        'appName' => 'AppName',
        'transcodeGroupId' => 'TranscodeGroupId',
        'resourceInfo' => 'ResourceInfo',
        'fileUrl' => 'FileUrl',
        'startTime' => 'StartTime',
        'endTime' => 'EndTime',
        'title' => 'Title',
        'tags' => 'Tags',
    ];
    public function validate() {
        Model::validateRequired('customerId', $this->customerId, true);
        Model::validateRequired('streamName', $this->streamName, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('appName', $this->appName, true);
        Model::validateRequired('fileUrl', $this->fileUrl, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['CustomerId'] = $this->customerId;
        $res['StreamName'] = $this->streamName;
        $res['DomainName'] = $this->domainName;
        $res['AppName'] = $this->appName;
        $res['TranscodeGroupId'] = $this->transcodeGroupId;
        $res['ResourceInfo'] = $this->resourceInfo;
        $res['FileUrl'] = $this->fileUrl;
        $res['StartTime'] = $this->startTime;
        $res['EndTime'] = $this->endTime;
        $res['Title'] = $this->title;
        $res['Tags'] = $this->tags;
        return $res;
    }
    /**
     * @param array $map
     * @return AddLiveStreamVideoRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ResourceOwnerAccount'])){
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['CustomerId'])){
            $model->customerId = $map['CustomerId'];
        }
        if(isset($map['StreamName'])){
            $model->streamName = $map['StreamName'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['AppName'])){
            $model->appName = $map['AppName'];
        }
        if(isset($map['TranscodeGroupId'])){
            $model->transcodeGroupId = $map['TranscodeGroupId'];
        }
        if(isset($map['ResourceInfo'])){
            $model->resourceInfo = $map['ResourceInfo'];
        }
        if(isset($map['FileUrl'])){
            $model->fileUrl = $map['FileUrl'];
        }
        if(isset($map['StartTime'])){
            $model->startTime = $map['StartTime'];
        }
        if(isset($map['EndTime'])){
            $model->endTime = $map['EndTime'];
        }
        if(isset($map['Title'])){
            $model->title = $map['Title'];
        }
        if(isset($map['Tags'])){
            $model->tags = $map['Tags'];
        }
        return $model;
    }
    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description resourceOwnerId
     * @var integer
     */
    public $resourceOwnerId;

    /**
     * @description customerId
     * @var integer
     */
    public $customerId;

    /**
     * @description streamName
     * @var string
     */
    public $streamName;

    /**
     * @description domainName
     * @var string
     */
    public $domainName;

    /**
     * @description appName
     * @var string
     */
    public $appName;

    /**
     * @description transcodeGroupId
     * @var string
     */
    public $transcodeGroupId;

    /**
     * @description resourceInfo
     * @var string
     */
    public $resourceInfo;

    /**
     * @description fileUrl
     * @var string
     */
    public $fileUrl;

    /**
     * @description startTime
     * @var string
     */
    public $startTime;

    /**
     * @description endTime
     * @var string
     */
    public $endTime;

    /**
     * @description title
     * @var string
     */
    public $title;

    /**
     * @description tags
     * @var string
     */
    public $tags;

}
