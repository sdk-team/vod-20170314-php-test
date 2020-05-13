<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\ListTemplateGroupResponse\templateGroups;

use AlibabaCloud\Tea\Model;

class templateGroup extends Model {
    protected $_name = [
        'groupId' => 'GroupId',
        'defaultGroup' => 'DefaultGroup',
        'status' => 'Status',
        'groupSymbol' => 'GroupSymbol',
        'groupType' => 'GroupType',
        'name' => 'Name',
        'transcodeMode' => 'TranscodeMode',
        'isLocked' => 'IsLocked',
    ];
    public function validate() {
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('defaultGroup', $this->defaultGroup, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('groupSymbol', $this->groupSymbol, true);
        Model::validateRequired('groupType', $this->groupType, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('transcodeMode', $this->transcodeMode, true);
        Model::validateRequired('isLocked', $this->isLocked, true);
    }
    public function toMap() {
        $res = [];
        $res['GroupId'] = $this->groupId;
        $res['DefaultGroup'] = $this->defaultGroup;
        $res['Status'] = $this->status;
        $res['GroupSymbol'] = $this->groupSymbol;
        $res['GroupType'] = $this->groupType;
        $res['Name'] = $this->name;
        $res['TranscodeMode'] = $this->transcodeMode;
        $res['IsLocked'] = $this->isLocked;
        return $res;
    }
    /**
     * @param array $map
     * @return templateGroup
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['GroupId'])){
            $model->groupId = $map['GroupId'];
        }
        if(isset($map['DefaultGroup'])){
            $model->defaultGroup = $map['DefaultGroup'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['GroupSymbol'])){
            $model->groupSymbol = $map['GroupSymbol'];
        }
        if(isset($map['GroupType'])){
            $model->groupType = $map['GroupType'];
        }
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['TranscodeMode'])){
            $model->transcodeMode = $map['TranscodeMode'];
        }
        if(isset($map['IsLocked'])){
            $model->isLocked = $map['IsLocked'];
        }
        return $model;
    }
    /**
     * @description groupId
     * @var string
     */
    public $groupId;

    /**
     * @description defaultGroup
     * @var string
     */
    public $defaultGroup;

    /**
     * @description status
     * @var string
     */
    public $status;

    /**
     * @description groupFlag
     * @var string
     */
    public $groupSymbol;

    /**
     * @description type
     * @var string
     */
    public $groupType;

    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description transcodeMode
     * @var string
     */
    public $transcodeMode;

    /**
     * @description isLocked
     * @var string
     */
    public $isLocked;

}
