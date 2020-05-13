<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainCnameResponse\cnameDatas;

use AlibabaCloud\Tea\Model;

class data extends Model {
    protected $_name = [
        'domain' => 'Domain',
        'cname' => 'Cname',
        'status' => 'Status',
    ];
    public function validate() {
        Model::validateRequired('domain', $this->domain, true);
        Model::validateRequired('cname', $this->cname, true);
        Model::validateRequired('status', $this->status, true);
    }
    public function toMap() {
        $res = [];
        $res['Domain'] = $this->domain;
        $res['Cname'] = $this->cname;
        $res['Status'] = $this->status;
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Domain'])){
            $model->domain = $map['Domain'];
        }
        if(isset($map['Cname'])){
            $model->cname = $map['Cname'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        return $model;
    }
    /**
     * @description domain
     * @var string
     */
    public $domain;

    /**
     * @description cname
     * @var string
     */
    public $cname;

    /**
     * @description status
     * @var integer
     */
    public $status;

}
