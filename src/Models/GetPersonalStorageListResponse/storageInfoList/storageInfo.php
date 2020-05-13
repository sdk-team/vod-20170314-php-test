<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetPersonalStorageListResponse\storageInfoList;

use AlibabaCloud\Tea\Model;

class storageInfo extends Model {
    protected $_name = [
        'location' => 'Location',
        'gmtCreate' => 'GmtCreate',
        'ownerId' => 'OwnerId',
        'storageClass' => 'StorageClass',
        'extranetEndpoint' => 'ExtranetEndpoint',
        'intranetEndpoint' => 'IntranetEndpoint',
        'storageACL' => 'StorageACL',
    ];
    public function validate() {
        Model::validateRequired('location', $this->location, true);
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
        Model::validateRequired('ownerId', $this->ownerId, true);
        Model::validateRequired('storageClass', $this->storageClass, true);
        Model::validateRequired('extranetEndpoint', $this->extranetEndpoint, true);
        Model::validateRequired('intranetEndpoint', $this->intranetEndpoint, true);
        Model::validateRequired('storageACL', $this->storageACL, true);
    }
    public function toMap() {
        $res = [];
        $res['Location'] = $this->location;
        $res['GmtCreate'] = $this->gmtCreate;
        $res['OwnerId'] = $this->ownerId;
        $res['StorageClass'] = $this->storageClass;
        $res['ExtranetEndpoint'] = $this->extranetEndpoint;
        $res['IntranetEndpoint'] = $this->intranetEndpoint;
        $res['StorageACL'] = $this->storageACL;
        return $res;
    }
    /**
     * @param array $map
     * @return storageInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Location'])){
            $model->location = $map['Location'];
        }
        if(isset($map['GmtCreate'])){
            $model->gmtCreate = $map['GmtCreate'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['StorageClass'])){
            $model->storageClass = $map['StorageClass'];
        }
        if(isset($map['ExtranetEndpoint'])){
            $model->extranetEndpoint = $map['ExtranetEndpoint'];
        }
        if(isset($map['IntranetEndpoint'])){
            $model->intranetEndpoint = $map['IntranetEndpoint'];
        }
        if(isset($map['StorageACL'])){
            $model->storageACL = $map['StorageACL'];
        }
        return $model;
    }
    /**
     * @description location
     * @var string
     */
    public $location;

    /**
     * @description gmtCreate
     * @var string
     */
    public $gmtCreate;

    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description storageClass
     * @var string
     */
    public $storageClass;

    /**
     * @description extranetEndpoint
     * @var string
     */
    public $extranetEndpoint;

    /**
     * @description intranetEndpoint
     * @var string
     */
    public $intranetEndpoint;

    /**
     * @description storageACL
     * @var string
     */
    public $storageACL;

}
