<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodCertificateListResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\certificateListModel\certList;

class certificateListModel extends Model {
    protected $_name = [
        'count' => 'Count',
        'certList' => 'CertList',
    ];
    public function validate() {
        Model::validateRequired('count', $this->count, true);
        Model::validateRequired('certList', $this->certList, true);
    }
    public function toMap() {
        $res = [];
        $res['Count'] = $this->count;
        $res['CertList'] = null !== $this->certList ? $this->certList->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return certificateListModel
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Count'])){
            $model->count = $map['Count'];
        }
        if(isset($map['CertList'])){
            $model->certList = certList::fromMap($map['CertList']);
        }
        return $model;
    }
    /**
     * @description count
     * @var integer
     */
    public $count;

    /**
     * @description certList
     * @var certificateListModel.certList
     */
    public $certList;

}
