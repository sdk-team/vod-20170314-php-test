<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetMediaDNAResultResponse\DNAResult;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetMediaDNAResultResponse\DNAResult\videoDNA\fpShotSlices;

class videoDNA extends Model {
    protected $_name = [
        'primaryKey' => 'PrimaryKey',
        'similarity' => 'Similarity',
        'fpShotSlices' => 'FpShotSlices',
    ];
    public function validate() {
        Model::validateRequired('primaryKey', $this->primaryKey, true);
        Model::validateRequired('similarity', $this->similarity, true);
        Model::validateRequired('fpShotSlices', $this->fpShotSlices, true);
    }
    public function toMap() {
        $res = [];
        $res['PrimaryKey'] = $this->primaryKey;
        $res['Similarity'] = $this->similarity;
        $res['FpShotSlices'] = [];
        if(null !== $this->fpShotSlices && is_array($this->fpShotSlices)){
            $n = 0;
            foreach($this->fpShotSlices as $item){
                $res['FpShotSlices'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return videoDNA
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['PrimaryKey'])){
            $model->primaryKey = $map['PrimaryKey'];
        }
        if(isset($map['Similarity'])){
            $model->similarity = $map['Similarity'];
        }
        if(isset($map['FpShotSlices'])){
            if(!empty($map['FpShotSlices'])){
                $model->fpShotSlices = [];
                $n = 0;
                foreach($map['FpShotSlices'] as $item) {
                    $model->fpShotSlices[$n++] = null !== $item ? fpShotSlices::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description primaryKey
     * @var string
     */
    public $primaryKey;

    /**
     * @description similarity
     * @var string
     */
    public $similarity;

    /**
     * @description fpShotSlices
     * @var array
     */
    public $fpShotSlices;

}
