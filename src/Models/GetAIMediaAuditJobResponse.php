<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20170314\Models\GetAIMediaAuditJobResponse\mediaAuditJob;
use AlibabaCloud\SDK\vod\V20170314\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data;
use AlibabaCloud\SDK\vod\V20170314\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data\videoResult;
use AlibabaCloud\SDK\vod\V20170314\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data\videoResult\terrorismResult;
use AlibabaCloud\SDK\vod\V20170314\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data\videoResult\pornResult;

class GetAIMediaAuditJobResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'mediaAuditJob' => 'MediaAuditJob',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('mediaAuditJob', $this->mediaAuditJob, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['MediaAuditJob'] = null !== $this->mediaAuditJob ? $this->mediaAuditJob->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetAIMediaAuditJobResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['MediaAuditJob'])){
            $model->mediaAuditJob = mediaAuditJob::fromMap($map['MediaAuditJob']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.resultDTO
     * @var GetAIMediaAuditJobResponse.mediaAuditJob
     */
    public $mediaAuditJob;

}
