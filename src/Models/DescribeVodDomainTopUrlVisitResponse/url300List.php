<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainTopUrlVisitResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainTopUrlVisitResponse\url300List\urlList;

class url300List extends Model {
    protected $_name = [
        'urlList' => 'UrlList',
    ];
    public function validate() {
        Model::validateRequired('urlList', $this->urlList, true);
    }
    public function toMap() {
        $res = [];
        $res['UrlList'] = [];
        if(null !== $this->urlList && is_array($this->urlList)){
            $n = 0;
            foreach($this->urlList as $item){
                $res['UrlList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return url300List
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['UrlList'])){
            if(!empty($map['UrlList'])){
                $model->urlList = [];
                $n = 0;
                foreach($map['UrlList'] as $item) {
                    $model->urlList[$n++] = null !== $item ? urlList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description UrlList
     * @var array
     */
    public $urlList;

}
