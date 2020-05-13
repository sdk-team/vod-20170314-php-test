<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetBatchPlayInfoResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetBatchPlayInfoResponse\batchPlayInfoList\playInfoList;

class batchPlayInfoList extends Model {
    protected $_name = [
        'videoId' => 'VideoId',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'httpStatusCode' => 'HttpStatusCode',
        'playInfoList' => 'PlayInfoList',
    ];
    public function validate() {
        Model::validateRequired('videoId', $this->videoId, true);
        Model::validateRequired('errorCode', $this->errorCode, true);
        Model::validateRequired('errorMessage', $this->errorMessage, true);
        Model::validateRequired('httpStatusCode', $this->httpStatusCode, true);
        Model::validateRequired('playInfoList', $this->playInfoList, true);
    }
    public function toMap() {
        $res = [];
        $res['VideoId'] = $this->videoId;
        $res['ErrorCode'] = $this->errorCode;
        $res['ErrorMessage'] = $this->errorMessage;
        $res['HttpStatusCode'] = $this->httpStatusCode;
        $res['PlayInfoList'] = [];
        if(null !== $this->playInfoList && is_array($this->playInfoList)){
            $n = 0;
            foreach($this->playInfoList as $item){
                $res['PlayInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return batchPlayInfoList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['VideoId'])){
            $model->videoId = $map['VideoId'];
        }
        if(isset($map['ErrorCode'])){
            $model->errorCode = $map['ErrorCode'];
        }
        if(isset($map['ErrorMessage'])){
            $model->errorMessage = $map['ErrorMessage'];
        }
        if(isset($map['HttpStatusCode'])){
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if(isset($map['PlayInfoList'])){
            if(!empty($map['PlayInfoList'])){
                $model->playInfoList = [];
                $n = 0;
                foreach($map['PlayInfoList'] as $item) {
                    $model->playInfoList[$n++] = null !== $item ? playInfoList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description videoId
     * @var string
     */
    public $videoId;

    /**
     * @description code
     * @var string
     */
    public $errorCode;

    /**
     * @description message
     * @var string
     */
    public $errorMessage;

    /**
     * @description httpStatusCode
     * @var integer
     */
    public $httpStatusCode;

    /**
     * @description playInfoList
     * @var array
     */
    public $playInfoList;

}
