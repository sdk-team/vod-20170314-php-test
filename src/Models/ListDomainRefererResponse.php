<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\ListDomainRefererResponse\refererList;

class ListDomainRefererResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'total' => 'Total',
        'allowEmpty' => 'AllowEmpty',
        'refererList' => 'RefererList',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('allowEmpty', $this->allowEmpty, true);
        Model::validateRequired('refererList', $this->refererList, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Total'] = $this->total;
        $res['AllowEmpty'] = $this->allowEmpty;
        $res['RefererList'] = null !== $this->refererList ? $this->refererList->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return ListDomainRefererResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Total'])){
            $model->total = $map['Total'];
        }
        if(isset($map['AllowEmpty'])){
            $model->allowEmpty = $map['AllowEmpty'];
        }
        if(isset($map['RefererList'])){
            $model->refererList = refererList::fromMap($map['RefererList']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.total
     * @var integer
     */
    public $total;

    /**
     * @description data.allowEmpty
     * @var string
     */
    public $allowEmpty;

    /**
     * @description data.refererDtoList
     * @var ListDomainRefererResponse.refererList
     */
    public $refererList;

}
