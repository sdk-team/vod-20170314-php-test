<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\UpdateMaterialResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\material\snapshots;
use AlibabaCloud\SDK\vod\V20170314\Models\material\tiles;

class material extends Model {
    protected $_name = [
        'materialId' => 'MaterialId',
        'title' => 'Title',
        'tags' => 'Tags',
        'status' => 'Status',
        'size' => 'Size',
        'duration' => 'Duration',
        'description' => 'Description',
        'customerId' => 'CustomerId',
        'createTime' => 'CreateTime',
        'modifyTime' => 'ModifyTime',
        'coverURL' => 'CoverURL',
        'cateId' => 'CateId',
        'cateName' => 'CateName',
        'source' => 'Source',
        'snapshots' => 'Snapshots',
        'tiles' => 'Tiles',
    ];
    public function validate() {
        Model::validateRequired('materialId', $this->materialId, true);
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateRequired('duration', $this->duration, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('customerId', $this->customerId, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('modifyTime', $this->modifyTime, true);
        Model::validateRequired('coverURL', $this->coverURL, true);
        Model::validateRequired('cateId', $this->cateId, true);
        Model::validateRequired('cateName', $this->cateName, true);
        Model::validateRequired('source', $this->source, true);
        Model::validateRequired('snapshots', $this->snapshots, true);
        Model::validateRequired('tiles', $this->tiles, true);
    }
    public function toMap() {
        $res = [];
        $res['MaterialId'] = $this->materialId;
        $res['Title'] = $this->title;
        $res['Tags'] = $this->tags;
        $res['Status'] = $this->status;
        $res['Size'] = $this->size;
        $res['Duration'] = $this->duration;
        $res['Description'] = $this->description;
        $res['CustomerId'] = $this->customerId;
        $res['CreateTime'] = $this->createTime;
        $res['ModifyTime'] = $this->modifyTime;
        $res['CoverURL'] = $this->coverURL;
        $res['CateId'] = $this->cateId;
        $res['CateName'] = $this->cateName;
        $res['Source'] = $this->source;
        $res['Snapshots'] = null !== $this->snapshots ? $this->snapshots->toMap() : null;
        $res['Tiles'] = null !== $this->tiles ? $this->tiles->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return material
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['MaterialId'])){
            $model->materialId = $map['MaterialId'];
        }
        if(isset($map['Title'])){
            $model->title = $map['Title'];
        }
        if(isset($map['Tags'])){
            $model->tags = $map['Tags'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['Size'])){
            $model->size = $map['Size'];
        }
        if(isset($map['Duration'])){
            $model->duration = $map['Duration'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['CustomerId'])){
            $model->customerId = $map['CustomerId'];
        }
        if(isset($map['CreateTime'])){
            $model->createTime = $map['CreateTime'];
        }
        if(isset($map['ModifyTime'])){
            $model->modifyTime = $map['ModifyTime'];
        }
        if(isset($map['CoverURL'])){
            $model->coverURL = $map['CoverURL'];
        }
        if(isset($map['CateId'])){
            $model->cateId = $map['CateId'];
        }
        if(isset($map['CateName'])){
            $model->cateName = $map['CateName'];
        }
        if(isset($map['Source'])){
            $model->source = $map['Source'];
        }
        if(isset($map['Snapshots'])){
            $model->snapshots = snapshots::fromMap($map['Snapshots']);
        }
        if(isset($map['Tiles'])){
            $model->tiles = tiles::fromMap($map['Tiles']);
        }
        return $model;
    }
    /**
     * @description materialId
     * @var string
     */
    public $materialId;

    /**
     * @description title
     * @var string
     */
    public $title;

    /**
     * @description tags
     * @var string
     */
    public $tags;

    /**
     * @description stateStr
     * @var string
     */
    public $status;

    /**
     * @description fileSize
     * @var integer
     */
    public $size;

    /**
     * @description duration
     * @var float
     */
    public $duration;

    /**
     * @description description
     * @var string
     */
    public $description;

    /**
     * @description userId
     * @var integer
     */
    public $customerId;

    /**
     * @description gmtCreateStr
     * @var string
     */
    public $createTime;

    /**
     * @description gmtModifiedStr
     * @var string
     */
    public $modifyTime;

    /**
     * @description coverUrl
     * @var string
     */
    public $coverURL;

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
     * @description source
     * @var string
     */
    public $source;

    /**
     * @description snapshotList
     * @var material.snapshots
     */
    public $snapshots;

    /**
     * @description tileList
     * @var material.tiles
     */
    public $tiles;

}
