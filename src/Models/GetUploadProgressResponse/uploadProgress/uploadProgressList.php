<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetUploadProgressResponse\uploadProgress;

use AlibabaCloud\Tea\Model;

class uploadProgressList extends Model {
    protected $_name = [
        'source' => 'Source',
        'clientId' => 'ClientId',
        'businessType' => 'BusinessType',
        'terminalType' => 'TerminalType',
        'deviceModel' => 'DeviceModel',
        'appVersion' => 'AppVersion',
        'authTimestamp' => 'AuthTimestamp',
        'authInfo' => 'AuthInfo',
        'fileName' => 'FileName',
        'fileSize' => 'FileSize',
        'fileCreateTime' => 'FileCreateTime',
        'fileHash' => 'FileHash',
        'uploadSpeed' => 'UploadSpeed',
        'uploadRatio' => 'UploadRatio',
        'uploadId' => 'UploadId',
        'donePartsCount' => 'DonePartsCount',
        'totalPart' => 'TotalPart',
        'partSize' => 'PartSize',
        'uploadPoint' => 'UploadPoint',
        'uploadAddress' => 'UploadAddress',
        'videoId' => 'VideoId',
    ];
    public function validate() {
        Model::validateRequired('source', $this->source, true);
        Model::validateRequired('clientId', $this->clientId, true);
        Model::validateRequired('businessType', $this->businessType, true);
        Model::validateRequired('terminalType', $this->terminalType, true);
        Model::validateRequired('deviceModel', $this->deviceModel, true);
        Model::validateRequired('appVersion', $this->appVersion, true);
        Model::validateRequired('authTimestamp', $this->authTimestamp, true);
        Model::validateRequired('authInfo', $this->authInfo, true);
        Model::validateRequired('fileName', $this->fileName, true);
        Model::validateRequired('fileSize', $this->fileSize, true);
        Model::validateRequired('fileCreateTime', $this->fileCreateTime, true);
        Model::validateRequired('fileHash', $this->fileHash, true);
        Model::validateRequired('uploadSpeed', $this->uploadSpeed, true);
        Model::validateRequired('uploadRatio', $this->uploadRatio, true);
        Model::validateRequired('uploadId', $this->uploadId, true);
        Model::validateRequired('donePartsCount', $this->donePartsCount, true);
        Model::validateRequired('totalPart', $this->totalPart, true);
        Model::validateRequired('partSize', $this->partSize, true);
        Model::validateRequired('uploadPoint', $this->uploadPoint, true);
        Model::validateRequired('uploadAddress', $this->uploadAddress, true);
        Model::validateRequired('videoId', $this->videoId, true);
    }
    public function toMap() {
        $res = [];
        $res['Source'] = $this->source;
        $res['ClientId'] = $this->clientId;
        $res['BusinessType'] = $this->businessType;
        $res['TerminalType'] = $this->terminalType;
        $res['DeviceModel'] = $this->deviceModel;
        $res['AppVersion'] = $this->appVersion;
        $res['AuthTimestamp'] = $this->authTimestamp;
        $res['AuthInfo'] = $this->authInfo;
        $res['FileName'] = $this->fileName;
        $res['FileSize'] = $this->fileSize;
        $res['FileCreateTime'] = $this->fileCreateTime;
        $res['FileHash'] = $this->fileHash;
        $res['UploadSpeed'] = $this->uploadSpeed;
        $res['UploadRatio'] = $this->uploadRatio;
        $res['UploadId'] = $this->uploadId;
        $res['DonePartsCount'] = $this->donePartsCount;
        $res['TotalPart'] = $this->totalPart;
        $res['PartSize'] = $this->partSize;
        $res['UploadPoint'] = $this->uploadPoint;
        $res['UploadAddress'] = $this->uploadAddress;
        $res['VideoId'] = $this->videoId;
        return $res;
    }
    /**
     * @param array $map
     * @return uploadProgressList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Source'])){
            $model->source = $map['Source'];
        }
        if(isset($map['ClientId'])){
            $model->clientId = $map['ClientId'];
        }
        if(isset($map['BusinessType'])){
            $model->businessType = $map['BusinessType'];
        }
        if(isset($map['TerminalType'])){
            $model->terminalType = $map['TerminalType'];
        }
        if(isset($map['DeviceModel'])){
            $model->deviceModel = $map['DeviceModel'];
        }
        if(isset($map['AppVersion'])){
            $model->appVersion = $map['AppVersion'];
        }
        if(isset($map['AuthTimestamp'])){
            $model->authTimestamp = $map['AuthTimestamp'];
        }
        if(isset($map['AuthInfo'])){
            $model->authInfo = $map['AuthInfo'];
        }
        if(isset($map['FileName'])){
            $model->fileName = $map['FileName'];
        }
        if(isset($map['FileSize'])){
            $model->fileSize = $map['FileSize'];
        }
        if(isset($map['FileCreateTime'])){
            $model->fileCreateTime = $map['FileCreateTime'];
        }
        if(isset($map['FileHash'])){
            $model->fileHash = $map['FileHash'];
        }
        if(isset($map['UploadSpeed'])){
            $model->uploadSpeed = $map['UploadSpeed'];
        }
        if(isset($map['UploadRatio'])){
            $model->uploadRatio = $map['UploadRatio'];
        }
        if(isset($map['UploadId'])){
            $model->uploadId = $map['UploadId'];
        }
        if(isset($map['DonePartsCount'])){
            $model->donePartsCount = $map['DonePartsCount'];
        }
        if(isset($map['TotalPart'])){
            $model->totalPart = $map['TotalPart'];
        }
        if(isset($map['PartSize'])){
            $model->partSize = $map['PartSize'];
        }
        if(isset($map['UploadPoint'])){
            $model->uploadPoint = $map['UploadPoint'];
        }
        if(isset($map['UploadAddress'])){
            $model->uploadAddress = $map['UploadAddress'];
        }
        if(isset($map['VideoId'])){
            $model->videoId = $map['VideoId'];
        }
        return $model;
    }
    /**
     * @description source
     * @var string
     */
    public $source;

    /**
     * @description clientId
     * @var string
     */
    public $clientId;

    /**
     * @description businessType
     * @var string
     */
    public $businessType;

    /**
     * @description terminalType
     * @var string
     */
    public $terminalType;

    /**
     * @description deviceModel
     * @var string
     */
    public $deviceModel;

    /**
     * @description appVersion
     * @var string
     */
    public $appVersion;

    /**
     * @description authTimestamp
     * @var string
     */
    public $authTimestamp;

    /**
     * @description authInfo
     * @var string
     */
    public $authInfo;

    /**
     * @description fileName
     * @var string
     */
    public $fileName;

    /**
     * @description fileSize
     * @var integer
     */
    public $fileSize;

    /**
     * @description fileCreateTime
     * @var string
     */
    public $fileCreateTime;

    /**
     * @description fileHash
     * @var string
     */
    public $fileHash;

    /**
     * @description uploadSpeed
     * @var float
     */
    public $uploadSpeed;

    /**
     * @description uploadRatio
     * @var float
     */
    public $uploadRatio;

    /**
     * @description uploadId
     * @var string
     */
    public $uploadId;

    /**
     * @description donePartsCount
     * @var integer
     */
    public $donePartsCount;

    /**
     * @description totalPart
     * @var string
     */
    public $totalPart;

    /**
     * @description partSize
     * @var integer
     */
    public $partSize;

    /**
     * @description uploadPoint
     * @var string
     */
    public $uploadPoint;

    /**
     * @description uploadAddress
     * @var string
     */
    public $uploadAddress;

    /**
     * @description videoId
     * @var string
     */
    public $videoId;

}
