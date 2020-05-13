<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\ListCompanionresourceInfoResponse\companionResourceInfos;

use AlibabaCloud\Tea\Model;

class companionResourceInfo extends Model {
    protected $_name = [
        'companionResourceId' => 'CompanionResourceId',
        'companionResourceType' => 'CompanionResourceType',
        'creationTime' => 'CreationTime',
        'mediaFileUrl' => 'MediaFileUrl',
        'resourceName' => 'ResourceName',
        'resourceTags' => 'ResourceTags',
        'companionResourceConfig' => 'CompanionResourceConfig',
    ];
    public function validate() {
        Model::validateRequired('companionResourceId', $this->companionResourceId, true);
        Model::validateRequired('companionResourceType', $this->companionResourceType, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('mediaFileUrl', $this->mediaFileUrl, true);
        Model::validateRequired('resourceName', $this->resourceName, true);
        Model::validateRequired('resourceTags', $this->resourceTags, true);
        Model::validateRequired('companionResourceConfig', $this->companionResourceConfig, true);
    }
    public function toMap() {
        $res = [];
        $res['CompanionResourceId'] = $this->companionResourceId;
        $res['CompanionResourceType'] = $this->companionResourceType;
        $res['CreationTime'] = $this->creationTime;
        $res['MediaFileUrl'] = $this->mediaFileUrl;
        $res['ResourceName'] = $this->resourceName;
        $res['ResourceTags'] = $this->resourceTags;
        $res['CompanionResourceConfig'] = $this->companionResourceConfig;
        return $res;
    }
    /**
     * @param array $map
     * @return companionResourceInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CompanionResourceId'])){
            $model->companionResourceId = $map['CompanionResourceId'];
        }
        if(isset($map['CompanionResourceType'])){
            $model->companionResourceType = $map['CompanionResourceType'];
        }
        if(isset($map['CreationTime'])){
            $model->creationTime = $map['CreationTime'];
        }
        if(isset($map['MediaFileUrl'])){
            $model->mediaFileUrl = $map['MediaFileUrl'];
        }
        if(isset($map['ResourceName'])){
            $model->resourceName = $map['ResourceName'];
        }
        if(isset($map['ResourceTags'])){
            $model->resourceTags = $map['ResourceTags'];
        }
        if(isset($map['CompanionResourceConfig'])){
            $model->companionResourceConfig = $map['CompanionResourceConfig'];
        }
        return $model;
    }
    /**
     * @description companionResourceId
     * @var string
     */
    public $companionResourceId;

    /**
     * @description companionResourceType
     * @var string
     */
    public $companionResourceType;

    /**
     * @description creationTime
     * @var string
     */
    public $creationTime;

    /**
     * @description mediaFileUrl
     * @var string
     */
    public $mediaFileUrl;

    /**
     * @description resourceName
     * @var string
     */
    public $resourceName;

    /**
     * @description resourceTags
     * @var string
     */
    public $resourceTags;

    /**
     * @description companionResourceConfig
     * @var string
     */
    public $companionResourceConfig;

}
