<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetImageInfoResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\imageInfo\mezzanine;

class imageInfo extends Model {
    protected $_name = [
        'imageId' => 'ImageId',
        'title' => 'Title',
        'creationTime' => 'CreationTime',
        'imageType' => 'ImageType',
        'tags' => 'Tags',
        'URL' => 'URL',
        'cateId' => 'CateId',
        'cateName' => 'CateName',
        'description' => 'Description',
        'storageLocation' => 'StorageLocation',
        'regionId' => 'RegionId',
        'modificationTime' => 'ModificationTime',
        'mezzanine' => 'Mezzanine',
    ];
    public function validate() {
        Model::validateRequired('imageId', $this->imageId, true);
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('imageType', $this->imageType, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('URL', $this->URL, true);
        Model::validateRequired('cateId', $this->cateId, true);
        Model::validateRequired('cateName', $this->cateName, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('storageLocation', $this->storageLocation, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('modificationTime', $this->modificationTime, true);
        Model::validateRequired('mezzanine', $this->mezzanine, true);
    }
    public function toMap() {
        $res = [];
        $res['ImageId'] = $this->imageId;
        $res['Title'] = $this->title;
        $res['CreationTime'] = $this->creationTime;
        $res['ImageType'] = $this->imageType;
        $res['Tags'] = $this->tags;
        $res['URL'] = $this->URL;
        $res['CateId'] = $this->cateId;
        $res['CateName'] = $this->cateName;
        $res['Description'] = $this->description;
        $res['StorageLocation'] = $this->storageLocation;
        $res['RegionId'] = $this->regionId;
        $res['ModificationTime'] = $this->modificationTime;
        $res['Mezzanine'] = null !== $this->mezzanine ? $this->mezzanine->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return imageInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ImageId'])){
            $model->imageId = $map['ImageId'];
        }
        if(isset($map['Title'])){
            $model->title = $map['Title'];
        }
        if(isset($map['CreationTime'])){
            $model->creationTime = $map['CreationTime'];
        }
        if(isset($map['ImageType'])){
            $model->imageType = $map['ImageType'];
        }
        if(isset($map['Tags'])){
            $model->tags = $map['Tags'];
        }
        if(isset($map['URL'])){
            $model->URL = $map['URL'];
        }
        if(isset($map['CateId'])){
            $model->cateId = $map['CateId'];
        }
        if(isset($map['CateName'])){
            $model->cateName = $map['CateName'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['StorageLocation'])){
            $model->storageLocation = $map['StorageLocation'];
        }
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['ModificationTime'])){
            $model->modificationTime = $map['ModificationTime'];
        }
        if(isset($map['Mezzanine'])){
            $model->mezzanine = mezzanine::fromMap($map['Mezzanine']);
        }
        return $model;
    }
    /**
     * @description mediaId
     * @var string
     */
    public $imageId;

    /**
     * @description title
     * @var string
     */
    public $title;

    /**
     * @description createTime
     * @var string
     */
    public $creationTime;

    /**
     * @description imageType
     * @var string
     */
    public $imageType;

    /**
     * @description tags
     * @var string
     */
    public $tags;

    /**
     * @description url
     * @var string
     */
    public $URL;

    /**
     * @description cateId
     * @var integer
     */
    public $cateId;

    /**
     * @description cateName
     * @var string
     */
    public $cateName;

    /**
     * @description desc
     * @var string
     */
    public $description;

    /**
     * @description storageLocation
     * @var string
     */
    public $storageLocation;

    /**
     * @description regionId
     * @var string
     */
    public $regionId;

    /**
     * @description modifyTime
     * @var string
     */
    public $modificationTime;

    /**
     * @description mezzanineDTO
     * @var imageInfo.mezzanine
     */
    public $mezzanine;

}
