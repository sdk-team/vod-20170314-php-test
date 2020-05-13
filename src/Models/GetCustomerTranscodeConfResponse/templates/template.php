<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetCustomerTranscodeConfResponse\templates;

use AlibabaCloud\Tea\Model;

class template extends Model {
    protected $_name = [
        'id' => 'Id',
        'customerId' => 'CustomerId',
        'templateId' => 'TemplateId',
        'mtstemplateId' => 'MtstemplateId',
        'status' => 'Status',
        'name' => 'Name',
        'encrypt' => 'Encrypt',
    ];
    public function validate() {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('customerId', $this->customerId, true);
        Model::validateRequired('templateId', $this->templateId, true);
        Model::validateRequired('mtstemplateId', $this->mtstemplateId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('encrypt', $this->encrypt, true);
    }
    public function toMap() {
        $res = [];
        $res['Id'] = $this->id;
        $res['CustomerId'] = $this->customerId;
        $res['TemplateId'] = $this->templateId;
        $res['MtstemplateId'] = $this->mtstemplateId;
        $res['Status'] = $this->status;
        $res['Name'] = $this->name;
        $res['Encrypt'] = $this->encrypt;
        return $res;
    }
    /**
     * @param array $map
     * @return template
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Id'])){
            $model->id = $map['Id'];
        }
        if(isset($map['CustomerId'])){
            $model->customerId = $map['CustomerId'];
        }
        if(isset($map['TemplateId'])){
            $model->templateId = $map['TemplateId'];
        }
        if(isset($map['MtstemplateId'])){
            $model->mtstemplateId = $map['MtstemplateId'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['Encrypt'])){
            $model->encrypt = $map['Encrypt'];
        }
        return $model;
    }
    /**
     * @description id
     * @var string
     */
    public $id;

    /**
     * @description customerId
     * @var string
     */
    public $customerId;

    /**
     * @description templateId
     * @var string
     */
    public $templateId;

    /**
     * @description mtstemplateId
     * @var string
     */
    public $mtstemplateId;

    /**
     * @description status
     * @var string
     */
    public $status;

    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description encrypt
     * @var string
     */
    public $encrypt;

}
