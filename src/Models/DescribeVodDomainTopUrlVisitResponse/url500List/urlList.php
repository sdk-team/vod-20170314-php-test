<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainTopUrlVisitResponse\url500List;

use AlibabaCloud\Tea\Model;

class urlList extends Model {
    protected $_name = [
        'urlDetail' => 'UrlDetail',
        'visitData' => 'VisitData',
        'visitProportion' => 'VisitProportion',
        'flow' => 'Flow',
        'flowProportion' => 'FlowProportion',
    ];
    public function validate() {
        Model::validateRequired('urlDetail', $this->urlDetail, true);
        Model::validateRequired('visitData', $this->visitData, true);
        Model::validateRequired('visitProportion', $this->visitProportion, true);
        Model::validateRequired('flow', $this->flow, true);
        Model::validateRequired('flowProportion', $this->flowProportion, true);
    }
    public function toMap() {
        $res = [];
        $res['UrlDetail'] = $this->urlDetail;
        $res['VisitData'] = $this->visitData;
        $res['VisitProportion'] = $this->visitProportion;
        $res['Flow'] = $this->flow;
        $res['FlowProportion'] = $this->flowProportion;
        return $res;
    }
    /**
     * @param array $map
     * @return urlList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['UrlDetail'])){
            $model->urlDetail = $map['UrlDetail'];
        }
        if(isset($map['VisitData'])){
            $model->visitData = $map['VisitData'];
        }
        if(isset($map['VisitProportion'])){
            $model->visitProportion = $map['VisitProportion'];
        }
        if(isset($map['Flow'])){
            $model->flow = $map['Flow'];
        }
        if(isset($map['FlowProportion'])){
            $model->flowProportion = $map['FlowProportion'];
        }
        return $model;
    }
    /**
     * @description url
     * @var string
     */
    public $urlDetail;

    /**
     * @description pv
     * @var string
     */
    public $visitData;

    /**
     * @description pv_proportion
     * @var float
     */
    public $visitProportion;

    /**
     * @description traf
     * @var string
     */
    public $flow;

    /**
     * @description traf_proportion
     * @var float
     */
    public $flowProportion;

}
