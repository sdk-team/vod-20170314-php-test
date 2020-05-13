<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\CreateUploadMediaFileResponse;

use AlibabaCloud\Tea\Model;

class mediaFileInfo extends Model {
    protected $_name = [
        'mediaFileId' => 'MediaFileId',
        'mediaId' => 'MediaId',
        'userData' => 'UserData',
        'mediaFilePath' => 'MediaFilePath',
        'mediaFileAuth' => 'MediaFileAuth',
        'mediaFileURL' => 'MediaFileURL',
    ];
    public function validate() {
        Model::validateRequired('mediaFileId', $this->mediaFileId, true);
        Model::validateRequired('mediaId', $this->mediaId, true);
        Model::validateRequired('userData', $this->userData, true);
        Model::validateRequired('mediaFilePath', $this->mediaFilePath, true);
        Model::validateRequired('mediaFileAuth', $this->mediaFileAuth, true);
        Model::validateRequired('mediaFileURL', $this->mediaFileURL, true);
    }
    public function toMap() {
        $res = [];
        $res['MediaFileId'] = $this->mediaFileId;
        $res['MediaId'] = $this->mediaId;
        $res['UserData'] = $this->userData;
        $res['MediaFilePath'] = $this->mediaFilePath;
        $res['MediaFileAuth'] = $this->mediaFileAuth;
        $res['MediaFileURL'] = $this->mediaFileURL;
        return $res;
    }
    /**
     * @param array $map
     * @return mediaFileInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['MediaFileId'])){
            $model->mediaFileId = $map['MediaFileId'];
        }
        if(isset($map['MediaId'])){
            $model->mediaId = $map['MediaId'];
        }
        if(isset($map['UserData'])){
            $model->userData = $map['UserData'];
        }
        if(isset($map['MediaFilePath'])){
            $model->mediaFilePath = $map['MediaFilePath'];
        }
        if(isset($map['MediaFileAuth'])){
            $model->mediaFileAuth = $map['MediaFileAuth'];
        }
        if(isset($map['MediaFileURL'])){
            $model->mediaFileURL = $map['MediaFileURL'];
        }
        return $model;
    }
    /**
     * @description mediaFileId
     * @var string
     */
    public $mediaFileId;

    /**
     * @description mediaId
     * @var string
     */
    public $mediaId;

    /**
     * @description userData
     * @var string
     */
    public $userData;

    /**
     * @description mediaFilePath
     * @var string
     */
    public $mediaFilePath;

    /**
     * @description mediaFileAuth
     * @var string
     */
    public $mediaFileAuth;

    /**
     * @description mediaFileURL
     * @var string
     */
    public $mediaFileURL;

}
