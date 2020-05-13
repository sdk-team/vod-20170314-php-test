<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetUploadProgressResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetUploadProgressResponse\uploadProgress\uploadProgressList;

class uploadProgress extends Model {
    protected $_name = [
        'uploadProgressList' => 'UploadProgressList',
    ];
    public function validate() {
        Model::validateRequired('uploadProgressList', $this->uploadProgressList, true);
    }
    public function toMap() {
        $res = [];
        $res['UploadProgressList'] = [];
        if(null !== $this->uploadProgressList && is_array($this->uploadProgressList)){
            $n = 0;
            foreach($this->uploadProgressList as $item){
                $res['UploadProgressList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return uploadProgress
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['UploadProgressList'])){
            if(!empty($map['UploadProgressList'])){
                $model->uploadProgressList = [];
                $n = 0;
                foreach($map['UploadProgressList'] as $item) {
                    $model->uploadProgressList[$n++] = null !== $item ? uploadProgressList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description uploadProgressList
     * @var array
     */
    public $uploadProgressList;

}
