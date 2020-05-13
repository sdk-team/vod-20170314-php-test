<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetImageInfoResponse\imageInfo;

use AlibabaCloud\Tea\Model;

class mezzanine extends Model {
    protected $_name = [
        'fileURL' => 'FileURL',
        'originalFileName' => 'OriginalFileName',
        'fileSize' => 'FileSize',
        'width' => 'Width',
        'height' => 'Height',
    ];
    public function validate() {
        Model::validateRequired('fileURL', $this->fileURL, true);
        Model::validateRequired('originalFileName', $this->originalFileName, true);
        Model::validateRequired('fileSize', $this->fileSize, true);
        Model::validateRequired('width', $this->width, true);
        Model::validateRequired('height', $this->height, true);
    }
    public function toMap() {
        $res = [];
        $res['FileURL'] = $this->fileURL;
        $res['OriginalFileName'] = $this->originalFileName;
        $res['FileSize'] = $this->fileSize;
        $res['Width'] = $this->width;
        $res['Height'] = $this->height;
        return $res;
    }
    /**
     * @param array $map
     * @return mezzanine
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['FileURL'])){
            $model->fileURL = $map['FileURL'];
        }
        if(isset($map['OriginalFileName'])){
            $model->originalFileName = $map['OriginalFileName'];
        }
        if(isset($map['FileSize'])){
            $model->fileSize = $map['FileSize'];
        }
        if(isset($map['Width'])){
            $model->width = $map['Width'];
        }
        if(isset($map['Height'])){
            $model->height = $map['Height'];
        }
        return $model;
    }
    /**
     * @description fileUrl
     * @var string
     */
    public $fileURL;

    /**
     * @description originalFileName
     * @var string
     */
    public $originalFileName;

    /**
     * @description fileSize
     * @var integer
     */
    public $fileSize;

    /**
     * @description width
     * @var integer
     */
    public $width;

    /**
     * @description height
     * @var integer
     */
    public $height;

}
