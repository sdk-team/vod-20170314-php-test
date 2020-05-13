<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetStorageListResponse\storageList;

use AlibabaCloud\Tea\Model;

class storage extends Model {
    protected $_name = [
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'groupId' => 'GroupId',
        'location' => 'Location',
        'type' => 'Type',
        'region' => 'Region',
        'status' => 'Status',
        'storageUsage' => 'StorageUsage',
        'defaultUpload' => 'DefaultUpload',
    ];
    public function validate() {
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
        Model::validateRequired('gmtModified', $this->gmtModified, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('location', $this->location, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('storageUsage', $this->storageUsage, true);
        Model::validateRequired('defaultUpload', $this->defaultUpload, true);
    }
    public function toMap() {
        $res = [];
        $res['GmtCreate'] = $this->gmtCreate;
        $res['GmtModified'] = $this->gmtModified;
        $res['GroupId'] = $this->groupId;
        $res['Location'] = $this->location;
        $res['Type'] = $this->type;
        $res['Region'] = $this->region;
        $res['Status'] = $this->status;
        $res['StorageUsage'] = $this->storageUsage;
        $res['DefaultUpload'] = $this->defaultUpload;
        return $res;
    }
    /**
     * @param array $map
     * @return storage
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['GmtCreate'])){
            $model->gmtCreate = $map['GmtCreate'];
        }
        if(isset($map['GmtModified'])){
            $model->gmtModified = $map['GmtModified'];
        }
        if(isset($map['GroupId'])){
            $model->groupId = $map['GroupId'];
        }
        if(isset($map['Location'])){
            $model->location = $map['Location'];
        }
        if(isset($map['Type'])){
            $model->type = $map['Type'];
        }
        if(isset($map['Region'])){
            $model->region = $map['Region'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['StorageUsage'])){
            $model->storageUsage = $map['StorageUsage'];
        }
        if(isset($map['DefaultUpload'])){
            $model->defaultUpload = $map['DefaultUpload'];
        }
        return $model;
    }
    /**
     * @description utcCreate
     * @var string
     */
    public $gmtCreate;

    /**
     * @description utcModified
     * @var string
     */
    public $gmtModified;

    /**
     * @description groupId
     * @var string
     */
    public $groupId;

    /**
     * @description location
     * @var string
     */
    public $location;

    /**
     * @description type
     * @var integer
     */
    public $type;

    /**
     * @description region
     * @var string
     */
    public $region;

    /**
     * @description status
     * @var integer
     */
    public $status;

    /**
     * @description storageUsage
     * @var integer
     */
    public $storageUsage;

    /**
     * @description defaultUpload
     * @var bool
     */
    public $defaultUpload;

}
