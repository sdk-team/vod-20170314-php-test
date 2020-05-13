<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetStorageRegionListResponse\regionList;

use AlibabaCloud\Tea\Model;

class region extends Model {
    protected $_name = [
        'regionID' => 'RegionID',
    ];
    public function validate() {
        Model::validateRequired('regionID', $this->regionID, true);
    }
    public function toMap() {
        $res = [];
        $res['RegionID'] = $this->regionID;
        return $res;
    }
    /**
     * @param array $map
     * @return region
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RegionID'])){
            $model->regionID = $map['RegionID'];
        }
        return $model;
    }
    /**
     * @description regionID
     * @var string
     */
    public $regionID;

}
