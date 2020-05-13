<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetEditingProjectMaterialsResponse\materialList\material;

use AlibabaCloud\Tea\Model;

class tiles extends Model {
    protected $_name = [
        'tile' => 'Tile',
    ];
    public function validate() {
        Model::validateRequired('tile', $this->tile, true);
    }
    public function toMap() {
        $res = [];
        $res['Tile'] = [];
        if(null !== $this->tile){
            $res['Tile'] = $this->tile;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return tiles
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Tile'])){
            if(!empty($map['Tile'])){
                $model->tile = [];
                $model->tile = $map['Tile'];
            }
        }
        return $model;
    }
    /**
     * @description Tile
     * @var array
     */
    public $tile;

}
