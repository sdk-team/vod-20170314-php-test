<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\GetAppLicenseListResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetAppLicenseListResponse\appLicenseList\appLicense;

class appLicenseList extends Model {
    protected $_name = [
        'appLicense' => 'AppLicense',
    ];
    public function validate() {
        Model::validateRequired('appLicense', $this->appLicense, true);
    }
    public function toMap() {
        $res = [];
        $res['AppLicense'] = [];
        if(null !== $this->appLicense && is_array($this->appLicense)){
            $n = 0;
            foreach($this->appLicense as $item){
                $res['AppLicense'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return appLicenseList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AppLicense'])){
            if(!empty($map['AppLicense'])){
                $model->appLicense = [];
                $n = 0;
                foreach($map['AppLicense'] as $item) {
                    $model->appLicense[$n++] = null !== $item ? appLicense::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description AppLicense
     * @var array
     */
    public $appLicense;

}
