<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\ListAudioConfigResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\ListAudioConfigResponse\configs\config;

class configs extends Model {
    protected $_name = [
        'config' => 'Config',
    ];
    public function validate() {
        Model::validateRequired('config', $this->config, true);
    }
    public function toMap() {
        $res = [];
        $res['Config'] = [];
        if(null !== $this->config && is_array($this->config)){
            $n = 0;
            foreach($this->config as $item){
                $res['Config'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return configs
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Config'])){
            if(!empty($map['Config'])){
                $model->config = [];
                $n = 0;
                foreach($map['Config'] as $item) {
                    $model->config[$n++] = null !== $item ? config::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description Config
     * @var array
     */
    public $config;

}
