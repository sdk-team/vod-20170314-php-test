<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\UploadMediaByURLResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\UploadMediaByURLResponse\uploadJobs\uploadJob;

class uploadJobs extends Model {
    protected $_name = [
        'uploadJob' => 'UploadJob',
    ];
    public function validate() {
        Model::validateRequired('uploadJob', $this->uploadJob, true);
    }
    public function toMap() {
        $res = [];
        $res['UploadJob'] = [];
        if(null !== $this->uploadJob && is_array($this->uploadJob)){
            $n = 0;
            foreach($this->uploadJob as $item){
                $res['UploadJob'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return uploadJobs
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['UploadJob'])){
            if(!empty($map['UploadJob'])){
                $model->uploadJob = [];
                $n = 0;
                foreach($map['UploadJob'] as $item) {
                    $model->uploadJob[$n++] = null !== $item ? uploadJob::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description UploadJob
     * @var array
     */
    public $uploadJob;

}
