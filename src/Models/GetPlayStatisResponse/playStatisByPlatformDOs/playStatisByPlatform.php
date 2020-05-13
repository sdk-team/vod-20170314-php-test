<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetPlayStatisResponse\playStatisByPlatformDOs;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\playStatisByPlatform\playStatisDOs;

class playStatisByPlatform extends Model {
    protected $_name = [
        'platform' => 'Platform',
        'playStatisDOs' => 'PlayStatisDOs',
    ];
    public function validate() {
        Model::validateRequired('platform', $this->platform, true);
        Model::validateRequired('playStatisDOs', $this->playStatisDOs, true);
    }
    public function toMap() {
        $res = [];
        $res['Platform'] = $this->platform;
        $res['PlayStatisDOs'] = null !== $this->playStatisDOs ? $this->playStatisDOs->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return playStatisByPlatform
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Platform'])){
            $model->platform = $map['Platform'];
        }
        if(isset($map['PlayStatisDOs'])){
            $model->playStatisDOs = playStatisDOs::fromMap($map['PlayStatisDOs']);
        }
        return $model;
    }
    /**
     * @description platform
     * @var string
     */
    public $platform;

    /**
     * @description playStatisDOs
     * @var playStatisByPlatform.playStatisDOs
     */
    public $playStatisDOs;

}
