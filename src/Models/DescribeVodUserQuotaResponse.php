<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

class DescribeVodUserQuotaResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'domainQuota' => 'DomainQuota',
        'refreshUrlQuota' => 'RefreshUrlQuota',
        'refreshDirQuota' => 'RefreshDirQuota',
        'refreshUrlRemain' => 'RefreshUrlRemain',
        'refreshDirRemain' => 'RefreshDirRemain',
        'preloadQuota' => 'PreloadQuota',
        'preloadRemain' => 'PreloadRemain',
        'blockQuota' => 'BlockQuota',
        'blockRemain' => 'BlockRemain',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('domainQuota', $this->domainQuota, true);
        Model::validateRequired('refreshUrlQuota', $this->refreshUrlQuota, true);
        Model::validateRequired('refreshDirQuota', $this->refreshDirQuota, true);
        Model::validateRequired('refreshUrlRemain', $this->refreshUrlRemain, true);
        Model::validateRequired('refreshDirRemain', $this->refreshDirRemain, true);
        Model::validateRequired('preloadQuota', $this->preloadQuota, true);
        Model::validateRequired('preloadRemain', $this->preloadRemain, true);
        Model::validateRequired('blockQuota', $this->blockQuota, true);
        Model::validateRequired('blockRemain', $this->blockRemain, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DomainQuota'] = $this->domainQuota;
        $res['RefreshUrlQuota'] = $this->refreshUrlQuota;
        $res['RefreshDirQuota'] = $this->refreshDirQuota;
        $res['RefreshUrlRemain'] = $this->refreshUrlRemain;
        $res['RefreshDirRemain'] = $this->refreshDirRemain;
        $res['PreloadQuota'] = $this->preloadQuota;
        $res['PreloadRemain'] = $this->preloadRemain;
        $res['BlockQuota'] = $this->blockQuota;
        $res['BlockRemain'] = $this->blockRemain;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeVodUserQuotaResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DomainQuota'])){
            $model->domainQuota = $map['DomainQuota'];
        }
        if(isset($map['RefreshUrlQuota'])){
            $model->refreshUrlQuota = $map['RefreshUrlQuota'];
        }
        if(isset($map['RefreshDirQuota'])){
            $model->refreshDirQuota = $map['RefreshDirQuota'];
        }
        if(isset($map['RefreshUrlRemain'])){
            $model->refreshUrlRemain = $map['RefreshUrlRemain'];
        }
        if(isset($map['RefreshDirRemain'])){
            $model->refreshDirRemain = $map['RefreshDirRemain'];
        }
        if(isset($map['PreloadQuota'])){
            $model->preloadQuota = $map['PreloadQuota'];
        }
        if(isset($map['PreloadRemain'])){
            $model->preloadRemain = $map['PreloadRemain'];
        }
        if(isset($map['BlockQuota'])){
            $model->blockQuota = $map['BlockQuota'];
        }
        if(isset($map['BlockRemain'])){
            $model->blockRemain = $map['BlockRemain'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.maxDomainNum
     * @var integer
     */
    public $domainQuota;

    /**
     * @description data.maxUrlTaskNum
     * @var integer
     */
    public $refreshUrlQuota;

    /**
     * @description data.maxPathTaskNum
     * @var integer
     */
    public $refreshDirQuota;

    /**
     * @description data.leftUrlTaskNum
     * @var integer
     */
    public $refreshUrlRemain;

    /**
     * @description data.leftPathTaskNum
     * @var integer
     */
    public $refreshDirRemain;

    /**
     * @description data.maxPreloadTaskNum
     * @var integer
     */
    public $preloadQuota;

    /**
     * @description data.leftPreloadTaskNum
     * @var integer
     */
    public $preloadRemain;

    /**
     * @description data.maxBlockTaskNum
     * @var integer
     */
    public $blockQuota;

    /**
     * @description data.leftBlockTaskNum
     * @var integer
     */
    public $blockRemain;

}
