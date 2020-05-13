<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetMTSStatisResponse\MTSStatisBySpecList;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\MTSStatisBySpec\MTSStatisDOList;

class MTSStatisBySpec extends Model {
    protected $_name = [
        'specification' => 'Specification',
        'MTSStatisDOList' => 'MTSStatisDOList',
    ];
    public function validate() {
        Model::validateRequired('specification', $this->specification, true);
        Model::validateRequired('MTSStatisDOList', $this->MTSStatisDOList, true);
    }
    public function toMap() {
        $res = [];
        $res['Specification'] = $this->specification;
        $res['MTSStatisDOList'] = null !== $this->MTSStatisDOList ? $this->MTSStatisDOList->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return MTSStatisBySpec
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Specification'])){
            $model->specification = $map['Specification'];
        }
        if(isset($map['MTSStatisDOList'])){
            $model->MTSStatisDOList = MTSStatisDOList::fromMap($map['MTSStatisDOList']);
        }
        return $model;
    }
    /**
     * @description specification
     * @var string
     */
    public $specification;

    /**
     * @description mtsStatisDOs
     * @var MTSStatisBySpec.MTSStatisDOList
     */
    public $MTSStatisDOList;

}
