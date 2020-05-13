<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetMaterialResponse\material;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMaterialResponse\material\snapshots;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMaterialResponse\material\tiles;

class GetMaterialResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'material' => 'Material',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('material', $this->material, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Material'] = null !== $this->material ? $this->material->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetMaterialResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Material'])){
            $model->material = material::fromMap($map['Material']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.material
     * @var GetMaterialResponse.material
     */
    public $material;

}
