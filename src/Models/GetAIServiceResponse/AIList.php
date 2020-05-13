<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetAIServiceResponse;

use AlibabaCloud\Tea\Model;

class AIList extends Model {
    protected $_name = [
        'type' => 'Type',
        'status' => 'Status',
    ];
    public function validate() {
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('status', $this->status, true);
    }
    public function toMap() {
        $res = [];
        $res['Type'] = $this->type;
        $res['Status'] = $this->status;
        return $res;
    }
    /**
     * @param array $map
     * @return AIList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Type'])){
            $model->type = $map['Type'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        return $model;
    }
    /**
     * @description type
     * @var string
     */
    public $type;

    /**
     * @description status
     * @var string
     */
    public $status;

}
