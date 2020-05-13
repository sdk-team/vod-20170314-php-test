<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20170314;

use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Endpoint\Endpoint;

use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainISPDataRequest;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainISPDataResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRegionDataRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRegionDataResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainTopReferVisitRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainTopReferVisitResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainTopUrlVisitRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainTopUrlVisitResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodTopDomainsByFlowRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodTopDomainsByFlowResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainPvDataRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainPvDataResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainUvDataRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainUvDataResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetOSSFlowStatisRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetOSSFlowStatisResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAIStatisTypeRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAIStatisTypeResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetAIStatisRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetAIStatisResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SetDefaultAITemplateRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SetDefaultAITemplateResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetDefaultAITemplateRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetDefaultAITemplateResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAITemplateRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAITemplateResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetAITemplateRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetAITemplateResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateAITemplateRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateAITemplateResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteAITemplateRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteAITemplateResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\AddAITemplateRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\AddAITemplateResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMediaAuditResultTimelineRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMediaAuditResultTimelineResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMediaAuditResultDetailRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMediaAuditResultDetailResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMediaAuditResultRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMediaAuditResultResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SubmitAIMediaAuditJobRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SubmitAIMediaAuditJobResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetAIMediaAuditJobRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetAIMediaAuditJobResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DisplayAIAuditSwitchRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DisplayAIAuditSwitchResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribePlayVideoStatisRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribePlayVideoStatisResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\TransferMediaDataRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\TransferMediaDataResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\CreateUploadAttachedMediaRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\CreateUploadAttachedMediaResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetUploadProgressRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetUploadProgressResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateVodTemplateRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateVodTemplateResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SetDefaultVodTemplateRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SetDefaultVodTemplateResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\ListVodTemplateRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\ListVodTemplateResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetVodTemplateRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetVodTemplateResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteVodTemplateRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteVodTemplateResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\AddVodTemplateRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\AddVodTemplateResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMediaDNAResultRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMediaDNAResultResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteMezzaninesRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteMezzaninesResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateImageInfosRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateImageInfosResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainUsageDataRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainUsageDataResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainTrafficDataRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainTrafficDataResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainsUsageByDayRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainsUsageByDayResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainSrcTrafficDataRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainSrcTrafficDataResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainSrcBpsDataRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainSrcBpsDataResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRealTimeTrafficDataRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRealTimeTrafficDataResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRealTimeSrcTrafficDataRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRealTimeSrcTrafficDataResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRealTimeSrcBpsDataRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRealTimeSrcBpsDataResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRealTimeReqHitRateDataRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRealTimeReqHitRateDataResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRealTimeQpsDataRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRealTimeQpsDataResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRealTimeHttpCodeDataRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRealTimeHttpCodeDataResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRealTimeByteHitRateDataRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRealTimeByteHitRateDataResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRealTimeBpsDataRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainRealTimeBpsDataResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainQpsDataRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainQpsDataResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainHttpCodeDataRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainHttpCodeDataResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainHitRateDataRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainHitRateDataResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainBpsDataRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainBpsDataResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetVideoDNAResultRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetVideoDNAResultResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodCertificateDetailRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodCertificateDetailResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteImageRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteImageResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetAuditResultDetailRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetAuditResultDetailResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMediaStreamRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMediaStreamResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\PayOrderCallbackRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\PayOrderCallbackResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\ModifyRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\ModifyResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\CompleteOrderParamRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\CompleteOrderParamResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateTemplateGroupDaemonRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateTemplateGroupDaemonResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\CreateKMSServiceKeyRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\CreateKMSServiceKeyResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SetAuditSecurityIpRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SetAuditSecurityIpResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAuditSecurityIpRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAuditSecurityIpResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetVideoInfosRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetVideoInfosResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\AssumeOssRoleRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\AssumeOssRoleResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateVodDomainRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateVodDomainResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\StopVodDomainRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\StopVodDomainResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\StartVodDomainRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\StartVodDomainResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SetVodDomainCertificateRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SetVodDomainCertificateResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\RefreshVodObjectCachesRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\RefreshVodObjectCachesResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\PreloadVodObjectCachesRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\PreloadVodObjectCachesResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodUserResourcePackageRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodUserResourcePackageResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodUserQuotaRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodUserQuotaResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodUserDomainsRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodUserDomainsResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodServiceRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodServiceResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodRefreshTasksRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodRefreshTasksResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodRefreshQuotaRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodRefreshQuotaResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainDetailRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainDetailResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainConfigsRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainConfigsResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodCertificateListRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodCertificateListResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeUserVodStatusRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeUserVodStatusResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteVodDomainRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteVodDomainResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\AddVodDomainRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\AddVodDomainResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainLogRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainLogResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainCnameRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainCnameResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainCertificateInfoRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeVodDomainCertificateInfoResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\UploadMediaByURLRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\UploadMediaByURLResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetAIServiceRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetAIServiceResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SetAIServiceRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SetAIServiceResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SetL2OssKeyConfigRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SetL2OssKeyConfigResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SetDefaultUploadStorageRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SetDefaultUploadStorageResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SearchMediaRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SearchMediaResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateVideoInfosRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateVideoInfosResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GenerateDownloadSecretKeyRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GenerateDownloadSecretKeyResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\AssumeSlsRoleRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\AssumeSlsRoleResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetPersonalStorageListRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetPersonalStorageListResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetStorageRegionListRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetStorageRegionListResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SetStorageACLRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SetStorageACLResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMessageCallbackEventListRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMessageCallbackEventListResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetStorageInfoRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetStorageInfoResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteStorageRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteStorageResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\AddStorageRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\AddStorageResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetStorageListRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetStorageListResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetThirdPartPlayPolicyRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetThirdPartPlayPolicyResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\AddThirdPartPlayPolicyRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\AddThirdPartPlayPolicyResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\AuthorizeAppLicenseRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\AuthorizeAppLicenseResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetAppLicenseRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetAppLicenseResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateAppLicenseRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateAppLicenseResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\AddAppLicenseRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\AddAppLicenseResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetAppLicenseListRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetAppLicenseListResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SPIPhysicalDeleteResourceActionRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SPIPhysicalDeleteResourceActionResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SPICheckResourceActionRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SPICheckResourceActionResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SPILogicalDeleteResourceActionRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SPILogicalDeleteResourceActionResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SubmitPreprocessJobsRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SubmitPreprocessJobsResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\QueryOrderParamRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\QueryOrderParamResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\AssumeExperienceRoleRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\AssumeExperienceRoleResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\ListSnapshotsRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\ListSnapshotsResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SetDefaultPlayDomainRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SetDefaultPlayDomainResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\EditVideoIndexFileRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\EditVideoIndexFileResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SetCDNDomainServerCertificateRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SetCDNDomainServerCertificateResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SetCDNForceRedirectConfigRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SetCDNForceRedirectConfigResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SubmitTranscodeJobsRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SubmitTranscodeJobsResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetAuditResultRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetAuditResultResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\CreateAuditRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\CreateAuditResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetAuditHistoryRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetAuditHistoryResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\FinishLiveStreamRecordRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\FinishLiveStreamRecordResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\ListLiveRecordVideoRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\ListLiveRecordVideoResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\AddLiveStreamVideoRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\AddLiveStreamVideoResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SetTemplateGroupPropertyRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SetTemplateGroupPropertyResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\QueryUploadInfoRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\QueryUploadInfoResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\FaceRegistrationRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\FaceRegistrationResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAIJobRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAIJobResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SubmitAIJobRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SubmitAIJobResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetImageInfoRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetImageInfoResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateWatermarkInfoRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateWatermarkInfoResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateWatermarkGroupRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateWatermarkGroupResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\ListWatermarkInfoRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\ListWatermarkInfoResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\ListCompanionresourceInfoRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\ListCompanionresourceInfoResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetWatermarkInfoRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetWatermarkInfoResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetWatermarkGroupRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetWatermarkGroupResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetCompanionresourceInfoRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetCompanionresourceInfoResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteWatermarkRelationRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteWatermarkRelationResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteWatermarkInfoRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteWatermarkInfoResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteWatermarkGroupRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteWatermarkGroupResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteCompanionresourceInfoRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteCompanionresourceInfoResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\CreateUploadMediaFileRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\CreateUploadMediaFileResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\AddWatermarkRelationRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\AddWatermarkRelationResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\AddWatermarkInfoRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\AddWatermarkInfoResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\AddWatermarkGroupRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\AddWatermarkGroupResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\AddCompanionresourceInfoRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\AddCompanionresourceInfoResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\OpenVodServiceRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\OpenVodServiceResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SubmitAIVideoCategoryJobRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SubmitAIVideoCategoryJobResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoCategoryJobRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoCategoryJobResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\CreateOrderRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\CreateOrderResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetBatchPlayInfoRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetBatchPlayInfoResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SubmitAIVideoTerrorismRecogJobRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SubmitAIVideoTerrorismRecogJobResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SubmitAIVideoCensorJobRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SubmitAIVideoCensorJobResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoTerrorismRecogJobRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoTerrorismRecogJobResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoCensorJobRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoCensorJobResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteStreamRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteStreamResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SubmitSnapshotJobRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SubmitSnapshotJobResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeDomainFlowDataRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeDomainFlowDataResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeDomainBpsDataRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeDomainBpsDataResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeCdnDomainLogsRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeCdnDomainLogsResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SubmitAIVideoSummaryJobRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SubmitAIVideoSummaryJobResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoSummaryJobRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoSummaryJobResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeUserVvTopByDayRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeUserVvTopByDayResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeUserVvByVideoidRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeUserVvByVideoidResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeUserVvByDayRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeUserVvByDayResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeUserUvByDayRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeUserUvByDayResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeUserTimeRangeByDayRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeUserTimeRangeByDayResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeUserAvgTimeByDayRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeUserAvgTimeByDayResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeUserAvgCountByDayRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DescribeUserAvgCountByDayResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SetDefaultTemplateGroupRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SetDefaultTemplateGroupResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SubmitAIASRJobRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SubmitAIASRJobResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAIASRJobRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAIASRJobResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMezzanineInfoRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMezzanineInfoResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateTemplateGroupRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateTemplateGroupResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateCustomTemplateAndGroupRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateCustomTemplateAndGroupResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateCustomTemplateRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateCustomTemplateResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\ListTemplateGroupRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\ListTemplateGroupResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\ListCustomTemplateRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\ListCustomTemplateResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\InitSystemTemplateGroupRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\InitSystemTemplateGroupResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\InitCustomerWorkFlowRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\InitCustomerWorkFlowResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\InitCustomerWithSystemTemplateAndGroupRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\InitCustomerWithSystemTemplateAndGroupResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetTemplateGroupRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetTemplateGroupResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetCustomTemplateRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetCustomTemplateResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteTemplateGroupRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteTemplateGroupResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteInitCustomTemplateInfoRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteInitCustomTemplateInfoResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteCustomTemplateAndGroupRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteCustomTemplateAndGroupResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteCustomTemplateRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteCustomTemplateResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\AddTemplateGroupRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\AddTemplateGroupResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\AddCustomTemplateAndGroupRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\AddCustomTemplateAndGroupResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\AddCustomTemplateRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\AddCustomTemplateResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SubmitAIVideoPornRecogJobRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SubmitAIVideoPornRecogJobResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoPornRecogJobRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoPornRecogJobResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SubmitAIVideoCoverJobRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SubmitAIVideoCoverJobResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoCoverJobRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAIVideoCoverJobResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteAudioTemplateRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteAudioTemplateResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteAudioConfigRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteAudioConfigResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\AddOriginTemplateRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\AddOriginTemplateResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateMaterialStatusRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateMaterialStatusResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateMaterialRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateMaterialResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateEditingProjectStatusRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateEditingProjectStatusResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateEditingProjectRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateEditingProjectResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SyncMaterialRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SyncMaterialResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SetEditingProjectMaterialsRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SetEditingProjectMaterialsResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SearchMaterialRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SearchMaterialResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SearchEditingProjectRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SearchEditingProjectResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\RefreshUploadMaterialTokenRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\RefreshUploadMaterialTokenResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\ProduceEditingProjectVideoRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\ProduceEditingProjectVideoResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMaterialListRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMaterialListResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMaterialRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMaterialResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetEditingProjectMaterialsRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetEditingProjectMaterialsResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetEditingProjectListRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetEditingProjectListResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetEditingProjectRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetEditingProjectResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteMaterialRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteMaterialResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteEditingProjectRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteEditingProjectResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\CreateUploadMaterialRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\CreateUploadMaterialResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\AddEditingProjectRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\AddEditingProjectResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetCategoriesRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetCategoriesResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateCategoryRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateCategoryResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetAudioTemplateRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetAudioTemplateResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAudioTemplateRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAudioTemplateResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAudioConfigRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAudioConfigResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\RefreshMaterialWorkFlowRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\RefreshMaterialWorkFlowResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateAudioConfigRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateAudioConfigResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateAudioTemplateRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateAudioTemplateResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\AddAudioConfigRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\AddAudioConfigResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\AddAudioTemplateRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\AddAudioTemplateResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateSpecifyCustomerTemplateConfigRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateSpecifyCustomerTemplateConfigResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetPlayInfoRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetPlayInfoResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetVideoConfigRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetVideoConfigResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SetCustomerConfigRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SetCustomerConfigResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetCustomerConfigRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetCustomerConfigResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\CreateUploadImageRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\CreateUploadImageResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateSnapshotRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateSnapshotResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\RefreshWorkFlowRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\RefreshWorkFlowResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\AddPipelineRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\AddPipelineResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetCheckChannelRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetCheckChannelResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SetCheckChannelRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SetCheckChannelResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetPlayStatisRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetPlayStatisResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMTSStatisRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMTSStatisResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\ListDomainRefererRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\ListDomainRefererResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SetMessageCallbackRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SetMessageCallbackResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMessageCallbackRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMessageCallbackResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetVideoPlayInfoForCloudRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetVideoPlayInfoForCloudResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetVideoPlayAuthRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetVideoPlayAuthResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMidYKVidRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMidYKVidResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteMidYKVidRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteMidYKVidResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\AddMidYKVidRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\AddMidYKVidResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateVideoStatusRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateVideoStatusResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateVideoInfoRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateVideoInfoResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SearchVideoRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SearchVideoResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\RefreshUploadVideoRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\RefreshUploadVideoResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetVideoListRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetVideoListResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetVideoInfoRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetVideoInfoResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetCategoryTreeRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetCategoryTreeResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetCategoryListRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetCategoryListResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteVideoTagRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteVideoTagResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteVideoRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteVideoResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\CreateUploadVideoRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\CreateUploadVideoResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\CheckVideoRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\CheckVideoResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\AddVideoTagRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\AddVideoTagResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\AddApiAuthRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\AddApiAuthResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetPlayChannelKeyRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetPlayChannelKeyResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetDomainListRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetDomainListResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetServiceStatusRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetServiceStatusResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\NotifyProduceRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\NotifyProduceResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\NotifyInitResourceRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\NotifyInitResourceResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetPlayChannelListRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetPlayChannelListResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateApiAuthRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateApiAuthResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\UserExistRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\UserExistResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\AddMediaInfoRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\AddMediaInfoResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\AddCategoryRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\AddCategoryResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteCategoryRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteCategoryResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateMediaInfoStatusRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateMediaInfoStatusResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\CategoryTreeRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\CategoryTreeResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\AddMediaTagRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\AddMediaTagResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetCDNStatisSumRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetCDNStatisSumResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetCDNStatisRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetCDNStatisResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteMediaTagRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteMediaTagResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteMediaInfoRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteMediaInfoResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetOSSStatisRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetOSSStatisResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetVideoPlayInfoRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetVideoPlayInfoResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMediaInfoListRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMediaInfoListResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMediaInfoRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetMediaInfoResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SearchMediaInfoRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SearchMediaInfoResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\RefreshUploadTokenRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\RefreshUploadTokenResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAllCategoryRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\ListAllCategoryResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetTotalStatisRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetTotalStatisResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateMediaInfoRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateMediaInfoResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateMediaCategoryRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateMediaCategoryResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateCategoryNameRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateCategoryNameResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\AddWatermarkRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\AddWatermarkResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\AddTranscodeTemplateRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\AddTranscodeTemplateResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\AddSnapshotRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\AddSnapshotResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetCustomerTranscodeConfRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetCustomerTranscodeConfResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteWatermarkRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\DeleteWatermarkResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetWatermarkRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetWatermarkResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetWatermarksRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetWatermarksResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SwitchWatermarkRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SwitchWatermarkResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\GetWatermarkSwitchRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\GetWatermarkSwitchResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\SetDefaultWatermarkRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\SetDefaultWatermarkResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateTranscodeTemplateRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateTranscodeTemplateResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateTranscodeConfRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateTranscodeConfResponse;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateWatermarkRequest;
use AlibabaCloud\SDK\vod\V20170314\Models\UpdateWatermarkResponse;

class vod extends Rpc {
    public function __construct($config){
        parent::__construct($config);
        $this->_endpointRule = "regional";
        $this->_endpointMap = [
            "cn-beijing" => "vod.cn-shanghai.aliyuncs.com",
            "cn-hangzhou" => "vod.cn-shanghai.aliyuncs.com",
            "cn-shenzhen" => "vod.cn-shanghai.aliyuncs.com",
            "ap-northeast-2-pop" => "vod.ap-northeast-1.aliyuncs.com",
            "ap-southeast-2" => "vod.ap-northeast-1.aliyuncs.com",
            "ap-southeast-3" => "vod.ap-northeast-1.aliyuncs.com",
            "cn-beijing-finance-1" => "vod.aliyuncs.com",
            "cn-beijing-finance-pop" => "vod.aliyuncs.com",
            "cn-beijing-gov-1" => "vod.aliyuncs.com",
            "cn-beijing-nu16-b01" => "vod.aliyuncs.com",
            "cn-chengdu" => "vod.aliyuncs.com",
            "cn-edge-1" => "vod.aliyuncs.com",
            "cn-fujian" => "vod.aliyuncs.com",
            "cn-haidian-cm12-c01" => "vod.aliyuncs.com",
            "cn-hangzhou-bj-b01" => "vod.aliyuncs.com",
            "cn-hangzhou-finance" => "vod.aliyuncs.com",
            "cn-hangzhou-internal-prod-1" => "vod.aliyuncs.com",
            "cn-hangzhou-internal-test-1" => "vod.aliyuncs.com",
            "cn-hangzhou-internal-test-2" => "vod.aliyuncs.com",
            "cn-hangzhou-internal-test-3" => "vod.aliyuncs.com",
            "cn-hangzhou-test-306" => "vod.aliyuncs.com",
            "cn-hongkong-finance-pop" => "vod.aliyuncs.com",
            "cn-huhehaote" => "vod.aliyuncs.com",
            "cn-qingdao" => "vod.aliyuncs.com",
            "cn-qingdao-nebula" => "vod.aliyuncs.com",
            "cn-shanghai-et15-b01" => "vod.aliyuncs.com",
            "cn-shanghai-et2-b01" => "vod.aliyuncs.com",
            "cn-shanghai-finance-1" => "vod.aliyuncs.com",
            "cn-shanghai-inner" => "vod.aliyuncs.com",
            "cn-shanghai-internal-test-1" => "vod.aliyuncs.com",
            "cn-shenzhen-finance-1" => "vod.aliyuncs.com",
            "cn-shenzhen-inner" => "vod.aliyuncs.com",
            "cn-shenzhen-st4-d01" => "vod.aliyuncs.com",
            "cn-shenzhen-su18-b01" => "vod.aliyuncs.com",
            "cn-wuhan" => "vod.aliyuncs.com",
            "cn-yushanfang" => "vod.aliyuncs.com",
            "cn-zhangbei-na61-b01" => "vod.aliyuncs.com",
            "cn-zhangjiakou-na62-a01" => "vod.aliyuncs.com",
            "cn-zhengzhou-nebula-1" => "vod.aliyuncs.com",
            "eu-west-1-oxs" => "vod.ap-northeast-1.aliyuncs.com",
            "me-east-1" => "vod.ap-northeast-1.aliyuncs.com",
            "rus-west-1-pop" => "vod.ap-northeast-1.aliyuncs.com",
            "us-east-1" => "vod.ap-northeast-1.aliyuncs.com"
            ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint($this->_productId, $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param DescribeVodDomainISPDataRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainISPDataResponse
     * @throws \Exception
     */
    public function describeVodDomainISPDataWithOptions(DescribeVodDomainISPDataRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainISPDataResponse::fromMap($this->doRequest("DescribeVodDomainISPData", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodDomainISPDataRequest $request
     * @return DescribeVodDomainISPDataResponse
     * @throws \Exception
     */
    public function describeVodDomainISPData(DescribeVodDomainISPDataRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainISPDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainRegionDataRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainRegionDataResponse
     * @throws \Exception
     */
    public function describeVodDomainRegionDataWithOptions(DescribeVodDomainRegionDataRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainRegionDataResponse::fromMap($this->doRequest("DescribeVodDomainRegionData", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodDomainRegionDataRequest $request
     * @return DescribeVodDomainRegionDataResponse
     * @throws \Exception
     */
    public function describeVodDomainRegionData(DescribeVodDomainRegionDataRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainRegionDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainTopReferVisitRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainTopReferVisitResponse
     * @throws \Exception
     */
    public function describeVodDomainTopReferVisitWithOptions(DescribeVodDomainTopReferVisitRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainTopReferVisitResponse::fromMap($this->doRequest("DescribeVodDomainTopReferVisit", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodDomainTopReferVisitRequest $request
     * @return DescribeVodDomainTopReferVisitResponse
     * @throws \Exception
     */
    public function describeVodDomainTopReferVisit(DescribeVodDomainTopReferVisitRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainTopReferVisitWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainTopUrlVisitRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainTopUrlVisitResponse
     * @throws \Exception
     */
    public function describeVodDomainTopUrlVisitWithOptions(DescribeVodDomainTopUrlVisitRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainTopUrlVisitResponse::fromMap($this->doRequest("DescribeVodDomainTopUrlVisit", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodDomainTopUrlVisitRequest $request
     * @return DescribeVodDomainTopUrlVisitResponse
     * @throws \Exception
     */
    public function describeVodDomainTopUrlVisit(DescribeVodDomainTopUrlVisitRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainTopUrlVisitWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodTopDomainsByFlowRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodTopDomainsByFlowResponse
     * @throws \Exception
     */
    public function describeVodTopDomainsByFlowWithOptions(DescribeVodTopDomainsByFlowRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodTopDomainsByFlowResponse::fromMap($this->doRequest("DescribeVodTopDomainsByFlow", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodTopDomainsByFlowRequest $request
     * @return DescribeVodTopDomainsByFlowResponse
     * @throws \Exception
     */
    public function describeVodTopDomainsByFlow(DescribeVodTopDomainsByFlowRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodTopDomainsByFlowWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainPvDataRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainPvDataResponse
     * @throws \Exception
     */
    public function describeVodDomainPvDataWithOptions(DescribeVodDomainPvDataRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainPvDataResponse::fromMap($this->doRequest("DescribeVodDomainPvData", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodDomainPvDataRequest $request
     * @return DescribeVodDomainPvDataResponse
     * @throws \Exception
     */
    public function describeVodDomainPvData(DescribeVodDomainPvDataRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainPvDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainUvDataRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainUvDataResponse
     * @throws \Exception
     */
    public function describeVodDomainUvDataWithOptions(DescribeVodDomainUvDataRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainUvDataResponse::fromMap($this->doRequest("DescribeVodDomainUvData", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodDomainUvDataRequest $request
     * @return DescribeVodDomainUvDataResponse
     * @throws \Exception
     */
    public function describeVodDomainUvData(DescribeVodDomainUvDataRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainUvDataWithOptions($request, $runtime);
    }

    /**
     * @param GetOSSFlowStatisRequest $request
     * @param RuntimeOptions $runtime
     * @return GetOSSFlowStatisResponse
     * @throws \Exception
     */
    public function getOSSFlowStatisWithOptions(GetOSSFlowStatisRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetOSSFlowStatisResponse::fromMap($this->doRequest("GetOSSFlowStatis", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetOSSFlowStatisRequest $request
     * @return GetOSSFlowStatisResponse
     * @throws \Exception
     */
    public function getOSSFlowStatis(GetOSSFlowStatisRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getOSSFlowStatisWithOptions($request, $runtime);
    }

    /**
     * @param ListAIStatisTypeRequest $request
     * @param RuntimeOptions $runtime
     * @return ListAIStatisTypeResponse
     * @throws \Exception
     */
    public function listAIStatisTypeWithOptions(ListAIStatisTypeRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListAIStatisTypeResponse::fromMap($this->doRequest("ListAIStatisType", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param ListAIStatisTypeRequest $request
     * @return ListAIStatisTypeResponse
     * @throws \Exception
     */
    public function listAIStatisType(ListAIStatisTypeRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listAIStatisTypeWithOptions($request, $runtime);
    }

    /**
     * @param GetAIStatisRequest $request
     * @param RuntimeOptions $runtime
     * @return GetAIStatisResponse
     * @throws \Exception
     */
    public function getAIStatisWithOptions(GetAIStatisRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetAIStatisResponse::fromMap($this->doRequest("GetAIStatis", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetAIStatisRequest $request
     * @return GetAIStatisResponse
     * @throws \Exception
     */
    public function getAIStatis(GetAIStatisRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getAIStatisWithOptions($request, $runtime);
    }

    /**
     * @param SetDefaultAITemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return SetDefaultAITemplateResponse
     * @throws \Exception
     */
    public function setDefaultAITemplateWithOptions(SetDefaultAITemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SetDefaultAITemplateResponse::fromMap($this->doRequest("SetDefaultAITemplate", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SetDefaultAITemplateRequest $request
     * @return SetDefaultAITemplateResponse
     * @throws \Exception
     */
    public function setDefaultAITemplate(SetDefaultAITemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->setDefaultAITemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetDefaultAITemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return GetDefaultAITemplateResponse
     * @throws \Exception
     */
    public function getDefaultAITemplateWithOptions(GetDefaultAITemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetDefaultAITemplateResponse::fromMap($this->doRequest("GetDefaultAITemplate", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetDefaultAITemplateRequest $request
     * @return GetDefaultAITemplateResponse
     * @throws \Exception
     */
    public function getDefaultAITemplate(GetDefaultAITemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getDefaultAITemplateWithOptions($request, $runtime);
    }

    /**
     * @param ListAITemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return ListAITemplateResponse
     * @throws \Exception
     */
    public function listAITemplateWithOptions(ListAITemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListAITemplateResponse::fromMap($this->doRequest("ListAITemplate", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param ListAITemplateRequest $request
     * @return ListAITemplateResponse
     * @throws \Exception
     */
    public function listAITemplate(ListAITemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listAITemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetAITemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return GetAITemplateResponse
     * @throws \Exception
     */
    public function getAITemplateWithOptions(GetAITemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetAITemplateResponse::fromMap($this->doRequest("GetAITemplate", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetAITemplateRequest $request
     * @return GetAITemplateResponse
     * @throws \Exception
     */
    public function getAITemplate(GetAITemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getAITemplateWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAITemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateAITemplateResponse
     * @throws \Exception
     */
    public function updateAITemplateWithOptions(UpdateAITemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateAITemplateResponse::fromMap($this->doRequest("UpdateAITemplate", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UpdateAITemplateRequest $request
     * @return UpdateAITemplateResponse
     * @throws \Exception
     */
    public function updateAITemplate(UpdateAITemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateAITemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAITemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteAITemplateResponse
     * @throws \Exception
     */
    public function deleteAITemplateWithOptions(DeleteAITemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteAITemplateResponse::fromMap($this->doRequest("DeleteAITemplate", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DeleteAITemplateRequest $request
     * @return DeleteAITemplateResponse
     * @throws \Exception
     */
    public function deleteAITemplate(DeleteAITemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteAITemplateWithOptions($request, $runtime);
    }

    /**
     * @param AddAITemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return AddAITemplateResponse
     * @throws \Exception
     */
    public function addAITemplateWithOptions(AddAITemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddAITemplateResponse::fromMap($this->doRequest("AddAITemplate", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param AddAITemplateRequest $request
     * @return AddAITemplateResponse
     * @throws \Exception
     */
    public function addAITemplate(AddAITemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addAITemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetMediaAuditResultTimelineRequest $request
     * @param RuntimeOptions $runtime
     * @return GetMediaAuditResultTimelineResponse
     * @throws \Exception
     */
    public function getMediaAuditResultTimelineWithOptions(GetMediaAuditResultTimelineRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetMediaAuditResultTimelineResponse::fromMap($this->doRequest("GetMediaAuditResultTimeline", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetMediaAuditResultTimelineRequest $request
     * @return GetMediaAuditResultTimelineResponse
     * @throws \Exception
     */
    public function getMediaAuditResultTimeline(GetMediaAuditResultTimelineRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getMediaAuditResultTimelineWithOptions($request, $runtime);
    }

    /**
     * @param GetMediaAuditResultDetailRequest $request
     * @param RuntimeOptions $runtime
     * @return GetMediaAuditResultDetailResponse
     * @throws \Exception
     */
    public function getMediaAuditResultDetailWithOptions(GetMediaAuditResultDetailRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetMediaAuditResultDetailResponse::fromMap($this->doRequest("GetMediaAuditResultDetail", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetMediaAuditResultDetailRequest $request
     * @return GetMediaAuditResultDetailResponse
     * @throws \Exception
     */
    public function getMediaAuditResultDetail(GetMediaAuditResultDetailRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getMediaAuditResultDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetMediaAuditResultRequest $request
     * @param RuntimeOptions $runtime
     * @return GetMediaAuditResultResponse
     * @throws \Exception
     */
    public function getMediaAuditResultWithOptions(GetMediaAuditResultRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetMediaAuditResultResponse::fromMap($this->doRequest("GetMediaAuditResult", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetMediaAuditResultRequest $request
     * @return GetMediaAuditResultResponse
     * @throws \Exception
     */
    public function getMediaAuditResult(GetMediaAuditResultRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getMediaAuditResultWithOptions($request, $runtime);
    }

    /**
     * @param SubmitAIMediaAuditJobRequest $request
     * @param RuntimeOptions $runtime
     * @return SubmitAIMediaAuditJobResponse
     * @throws \Exception
     */
    public function submitAIMediaAuditJobWithOptions(SubmitAIMediaAuditJobRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SubmitAIMediaAuditJobResponse::fromMap($this->doRequest("SubmitAIMediaAuditJob", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SubmitAIMediaAuditJobRequest $request
     * @return SubmitAIMediaAuditJobResponse
     * @throws \Exception
     */
    public function submitAIMediaAuditJob(SubmitAIMediaAuditJobRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->submitAIMediaAuditJobWithOptions($request, $runtime);
    }

    /**
     * @param GetAIMediaAuditJobRequest $request
     * @param RuntimeOptions $runtime
     * @return GetAIMediaAuditJobResponse
     * @throws \Exception
     */
    public function getAIMediaAuditJobWithOptions(GetAIMediaAuditJobRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetAIMediaAuditJobResponse::fromMap($this->doRequest("GetAIMediaAuditJob", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetAIMediaAuditJobRequest $request
     * @return GetAIMediaAuditJobResponse
     * @throws \Exception
     */
    public function getAIMediaAuditJob(GetAIMediaAuditJobRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getAIMediaAuditJobWithOptions($request, $runtime);
    }

    /**
     * @param DisplayAIAuditSwitchRequest $request
     * @param RuntimeOptions $runtime
     * @return DisplayAIAuditSwitchResponse
     * @throws \Exception
     */
    public function displayAIAuditSwitchWithOptions(DisplayAIAuditSwitchRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DisplayAIAuditSwitchResponse::fromMap($this->doRequest("DisplayAIAuditSwitch", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DisplayAIAuditSwitchRequest $request
     * @return DisplayAIAuditSwitchResponse
     * @throws \Exception
     */
    public function displayAIAuditSwitch(DisplayAIAuditSwitchRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->displayAIAuditSwitchWithOptions($request, $runtime);
    }

    /**
     * @param DescribePlayVideoStatisRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribePlayVideoStatisResponse
     * @throws \Exception
     */
    public function describePlayVideoStatisWithOptions(DescribePlayVideoStatisRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribePlayVideoStatisResponse::fromMap($this->doRequest("DescribePlayVideoStatis", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribePlayVideoStatisRequest $request
     * @return DescribePlayVideoStatisResponse
     * @throws \Exception
     */
    public function describePlayVideoStatis(DescribePlayVideoStatisRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describePlayVideoStatisWithOptions($request, $runtime);
    }

    /**
     * @param TransferMediaDataRequest $request
     * @param RuntimeOptions $runtime
     * @return TransferMediaDataResponse
     * @throws \Exception
     */
    public function transferMediaDataWithOptions(TransferMediaDataRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return TransferMediaDataResponse::fromMap($this->doRequest("TransferMediaData", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param TransferMediaDataRequest $request
     * @return TransferMediaDataResponse
     * @throws \Exception
     */
    public function transferMediaData(TransferMediaDataRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->transferMediaDataWithOptions($request, $runtime);
    }

    /**
     * @param CreateUploadAttachedMediaRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateUploadAttachedMediaResponse
     * @throws \Exception
     */
    public function createUploadAttachedMediaWithOptions(CreateUploadAttachedMediaRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateUploadAttachedMediaResponse::fromMap($this->doRequest("CreateUploadAttachedMedia", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param CreateUploadAttachedMediaRequest $request
     * @return CreateUploadAttachedMediaResponse
     * @throws \Exception
     */
    public function createUploadAttachedMedia(CreateUploadAttachedMediaRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createUploadAttachedMediaWithOptions($request, $runtime);
    }

    /**
     * @param GetUploadProgressRequest $request
     * @param RuntimeOptions $runtime
     * @return GetUploadProgressResponse
     * @throws \Exception
     */
    public function getUploadProgressWithOptions(GetUploadProgressRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetUploadProgressResponse::fromMap($this->doRequest("GetUploadProgress", "HTTPS", "POST", "2017-03-14", "Anonymous", $request, null, $runtime));
    }

    /**
     * @param GetUploadProgressRequest $request
     * @return GetUploadProgressResponse
     * @throws \Exception
     */
    public function getUploadProgress(GetUploadProgressRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getUploadProgressWithOptions($request, $runtime);
    }

    /**
     * @param UpdateVodTemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateVodTemplateResponse
     * @throws \Exception
     */
    public function updateVodTemplateWithOptions(UpdateVodTemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateVodTemplateResponse::fromMap($this->doRequest("UpdateVodTemplate", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UpdateVodTemplateRequest $request
     * @return UpdateVodTemplateResponse
     * @throws \Exception
     */
    public function updateVodTemplate(UpdateVodTemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateVodTemplateWithOptions($request, $runtime);
    }

    /**
     * @param SetDefaultVodTemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return SetDefaultVodTemplateResponse
     * @throws \Exception
     */
    public function setDefaultVodTemplateWithOptions(SetDefaultVodTemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SetDefaultVodTemplateResponse::fromMap($this->doRequest("SetDefaultVodTemplate", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SetDefaultVodTemplateRequest $request
     * @return SetDefaultVodTemplateResponse
     * @throws \Exception
     */
    public function setDefaultVodTemplate(SetDefaultVodTemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->setDefaultVodTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ListVodTemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return ListVodTemplateResponse
     * @throws \Exception
     */
    public function listVodTemplateWithOptions(ListVodTemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListVodTemplateResponse::fromMap($this->doRequest("ListVodTemplate", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param ListVodTemplateRequest $request
     * @return ListVodTemplateResponse
     * @throws \Exception
     */
    public function listVodTemplate(ListVodTemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listVodTemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetVodTemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return GetVodTemplateResponse
     * @throws \Exception
     */
    public function getVodTemplateWithOptions(GetVodTemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetVodTemplateResponse::fromMap($this->doRequest("GetVodTemplate", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetVodTemplateRequest $request
     * @return GetVodTemplateResponse
     * @throws \Exception
     */
    public function getVodTemplate(GetVodTemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getVodTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVodTemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteVodTemplateResponse
     * @throws \Exception
     */
    public function deleteVodTemplateWithOptions(DeleteVodTemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteVodTemplateResponse::fromMap($this->doRequest("DeleteVodTemplate", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DeleteVodTemplateRequest $request
     * @return DeleteVodTemplateResponse
     * @throws \Exception
     */
    public function deleteVodTemplate(DeleteVodTemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteVodTemplateWithOptions($request, $runtime);
    }

    /**
     * @param AddVodTemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return AddVodTemplateResponse
     * @throws \Exception
     */
    public function addVodTemplateWithOptions(AddVodTemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddVodTemplateResponse::fromMap($this->doRequest("AddVodTemplate", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param AddVodTemplateRequest $request
     * @return AddVodTemplateResponse
     * @throws \Exception
     */
    public function addVodTemplate(AddVodTemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addVodTemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetMediaDNAResultRequest $request
     * @param RuntimeOptions $runtime
     * @return GetMediaDNAResultResponse
     * @throws \Exception
     */
    public function getMediaDNAResultWithOptions(GetMediaDNAResultRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetMediaDNAResultResponse::fromMap($this->doRequest("GetMediaDNAResult", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetMediaDNAResultRequest $request
     * @return GetMediaDNAResultResponse
     * @throws \Exception
     */
    public function getMediaDNAResult(GetMediaDNAResultRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getMediaDNAResultWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMezzaninesRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteMezzaninesResponse
     * @throws \Exception
     */
    public function deleteMezzaninesWithOptions(DeleteMezzaninesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteMezzaninesResponse::fromMap($this->doRequest("DeleteMezzanines", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DeleteMezzaninesRequest $request
     * @return DeleteMezzaninesResponse
     * @throws \Exception
     */
    public function deleteMezzanines(DeleteMezzaninesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteMezzaninesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateImageInfosRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateImageInfosResponse
     * @throws \Exception
     */
    public function updateImageInfosWithOptions(UpdateImageInfosRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateImageInfosResponse::fromMap($this->doRequest("UpdateImageInfos", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UpdateImageInfosRequest $request
     * @return UpdateImageInfosResponse
     * @throws \Exception
     */
    public function updateImageInfos(UpdateImageInfosRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateImageInfosWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainUsageDataRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainUsageDataResponse
     * @throws \Exception
     */
    public function describeVodDomainUsageDataWithOptions(DescribeVodDomainUsageDataRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainUsageDataResponse::fromMap($this->doRequest("DescribeVodDomainUsageData", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodDomainUsageDataRequest $request
     * @return DescribeVodDomainUsageDataResponse
     * @throws \Exception
     */
    public function describeVodDomainUsageData(DescribeVodDomainUsageDataRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainUsageDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainTrafficDataRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainTrafficDataResponse
     * @throws \Exception
     */
    public function describeVodDomainTrafficDataWithOptions(DescribeVodDomainTrafficDataRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainTrafficDataResponse::fromMap($this->doRequest("DescribeVodDomainTrafficData", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodDomainTrafficDataRequest $request
     * @return DescribeVodDomainTrafficDataResponse
     * @throws \Exception
     */
    public function describeVodDomainTrafficData(DescribeVodDomainTrafficDataRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainsUsageByDayRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainsUsageByDayResponse
     * @throws \Exception
     */
    public function describeVodDomainsUsageByDayWithOptions(DescribeVodDomainsUsageByDayRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainsUsageByDayResponse::fromMap($this->doRequest("DescribeVodDomainsUsageByDay", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodDomainsUsageByDayRequest $request
     * @return DescribeVodDomainsUsageByDayResponse
     * @throws \Exception
     */
    public function describeVodDomainsUsageByDay(DescribeVodDomainsUsageByDayRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainsUsageByDayWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainSrcTrafficDataRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainSrcTrafficDataResponse
     * @throws \Exception
     */
    public function describeVodDomainSrcTrafficDataWithOptions(DescribeVodDomainSrcTrafficDataRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainSrcTrafficDataResponse::fromMap($this->doRequest("DescribeVodDomainSrcTrafficData", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodDomainSrcTrafficDataRequest $request
     * @return DescribeVodDomainSrcTrafficDataResponse
     * @throws \Exception
     */
    public function describeVodDomainSrcTrafficData(DescribeVodDomainSrcTrafficDataRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainSrcTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainSrcBpsDataRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainSrcBpsDataResponse
     * @throws \Exception
     */
    public function describeVodDomainSrcBpsDataWithOptions(DescribeVodDomainSrcBpsDataRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainSrcBpsDataResponse::fromMap($this->doRequest("DescribeVodDomainSrcBpsData", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodDomainSrcBpsDataRequest $request
     * @return DescribeVodDomainSrcBpsDataResponse
     * @throws \Exception
     */
    public function describeVodDomainSrcBpsData(DescribeVodDomainSrcBpsDataRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainSrcBpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainRealTimeTrafficDataRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainRealTimeTrafficDataResponse
     * @throws \Exception
     */
    public function describeVodDomainRealTimeTrafficDataWithOptions(DescribeVodDomainRealTimeTrafficDataRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainRealTimeTrafficDataResponse::fromMap($this->doRequest("DescribeVodDomainRealTimeTrafficData", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodDomainRealTimeTrafficDataRequest $request
     * @return DescribeVodDomainRealTimeTrafficDataResponse
     * @throws \Exception
     */
    public function describeVodDomainRealTimeTrafficData(DescribeVodDomainRealTimeTrafficDataRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainRealTimeTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainRealTimeSrcTrafficDataRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainRealTimeSrcTrafficDataResponse
     * @throws \Exception
     */
    public function describeVodDomainRealTimeSrcTrafficDataWithOptions(DescribeVodDomainRealTimeSrcTrafficDataRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainRealTimeSrcTrafficDataResponse::fromMap($this->doRequest("DescribeVodDomainRealTimeSrcTrafficData", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodDomainRealTimeSrcTrafficDataRequest $request
     * @return DescribeVodDomainRealTimeSrcTrafficDataResponse
     * @throws \Exception
     */
    public function describeVodDomainRealTimeSrcTrafficData(DescribeVodDomainRealTimeSrcTrafficDataRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainRealTimeSrcTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainRealTimeSrcBpsDataRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainRealTimeSrcBpsDataResponse
     * @throws \Exception
     */
    public function describeVodDomainRealTimeSrcBpsDataWithOptions(DescribeVodDomainRealTimeSrcBpsDataRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainRealTimeSrcBpsDataResponse::fromMap($this->doRequest("DescribeVodDomainRealTimeSrcBpsData", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodDomainRealTimeSrcBpsDataRequest $request
     * @return DescribeVodDomainRealTimeSrcBpsDataResponse
     * @throws \Exception
     */
    public function describeVodDomainRealTimeSrcBpsData(DescribeVodDomainRealTimeSrcBpsDataRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainRealTimeSrcBpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainRealTimeReqHitRateDataRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainRealTimeReqHitRateDataResponse
     * @throws \Exception
     */
    public function describeVodDomainRealTimeReqHitRateDataWithOptions(DescribeVodDomainRealTimeReqHitRateDataRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainRealTimeReqHitRateDataResponse::fromMap($this->doRequest("DescribeVodDomainRealTimeReqHitRateData", "HTTPS", "GET", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodDomainRealTimeReqHitRateDataRequest $request
     * @return DescribeVodDomainRealTimeReqHitRateDataResponse
     * @throws \Exception
     */
    public function describeVodDomainRealTimeReqHitRateData(DescribeVodDomainRealTimeReqHitRateDataRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainRealTimeReqHitRateDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainRealTimeQpsDataRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainRealTimeQpsDataResponse
     * @throws \Exception
     */
    public function describeVodDomainRealTimeQpsDataWithOptions(DescribeVodDomainRealTimeQpsDataRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainRealTimeQpsDataResponse::fromMap($this->doRequest("DescribeVodDomainRealTimeQpsData", "HTTPS", "GET", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodDomainRealTimeQpsDataRequest $request
     * @return DescribeVodDomainRealTimeQpsDataResponse
     * @throws \Exception
     */
    public function describeVodDomainRealTimeQpsData(DescribeVodDomainRealTimeQpsDataRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainRealTimeQpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainRealTimeHttpCodeDataRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainRealTimeHttpCodeDataResponse
     * @throws \Exception
     */
    public function describeVodDomainRealTimeHttpCodeDataWithOptions(DescribeVodDomainRealTimeHttpCodeDataRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainRealTimeHttpCodeDataResponse::fromMap($this->doRequest("DescribeVodDomainRealTimeHttpCodeData", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodDomainRealTimeHttpCodeDataRequest $request
     * @return DescribeVodDomainRealTimeHttpCodeDataResponse
     * @throws \Exception
     */
    public function describeVodDomainRealTimeHttpCodeData(DescribeVodDomainRealTimeHttpCodeDataRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainRealTimeHttpCodeDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainRealTimeByteHitRateDataRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainRealTimeByteHitRateDataResponse
     * @throws \Exception
     */
    public function describeVodDomainRealTimeByteHitRateDataWithOptions(DescribeVodDomainRealTimeByteHitRateDataRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainRealTimeByteHitRateDataResponse::fromMap($this->doRequest("DescribeVodDomainRealTimeByteHitRateData", "HTTPS", "GET", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodDomainRealTimeByteHitRateDataRequest $request
     * @return DescribeVodDomainRealTimeByteHitRateDataResponse
     * @throws \Exception
     */
    public function describeVodDomainRealTimeByteHitRateData(DescribeVodDomainRealTimeByteHitRateDataRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainRealTimeByteHitRateDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainRealTimeBpsDataRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainRealTimeBpsDataResponse
     * @throws \Exception
     */
    public function describeVodDomainRealTimeBpsDataWithOptions(DescribeVodDomainRealTimeBpsDataRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainRealTimeBpsDataResponse::fromMap($this->doRequest("DescribeVodDomainRealTimeBpsData", "HTTPS", "GET", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodDomainRealTimeBpsDataRequest $request
     * @return DescribeVodDomainRealTimeBpsDataResponse
     * @throws \Exception
     */
    public function describeVodDomainRealTimeBpsData(DescribeVodDomainRealTimeBpsDataRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainRealTimeBpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainQpsDataRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainQpsDataResponse
     * @throws \Exception
     */
    public function describeVodDomainQpsDataWithOptions(DescribeVodDomainQpsDataRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainQpsDataResponse::fromMap($this->doRequest("DescribeVodDomainQpsData", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodDomainQpsDataRequest $request
     * @return DescribeVodDomainQpsDataResponse
     * @throws \Exception
     */
    public function describeVodDomainQpsData(DescribeVodDomainQpsDataRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainQpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainHttpCodeDataRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainHttpCodeDataResponse
     * @throws \Exception
     */
    public function describeVodDomainHttpCodeDataWithOptions(DescribeVodDomainHttpCodeDataRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainHttpCodeDataResponse::fromMap($this->doRequest("DescribeVodDomainHttpCodeData", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodDomainHttpCodeDataRequest $request
     * @return DescribeVodDomainHttpCodeDataResponse
     * @throws \Exception
     */
    public function describeVodDomainHttpCodeData(DescribeVodDomainHttpCodeDataRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainHttpCodeDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainHitRateDataRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainHitRateDataResponse
     * @throws \Exception
     */
    public function describeVodDomainHitRateDataWithOptions(DescribeVodDomainHitRateDataRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainHitRateDataResponse::fromMap($this->doRequest("DescribeVodDomainHitRateData", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodDomainHitRateDataRequest $request
     * @return DescribeVodDomainHitRateDataResponse
     * @throws \Exception
     */
    public function describeVodDomainHitRateData(DescribeVodDomainHitRateDataRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainHitRateDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainBpsDataRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainBpsDataResponse
     * @throws \Exception
     */
    public function describeVodDomainBpsDataWithOptions(DescribeVodDomainBpsDataRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainBpsDataResponse::fromMap($this->doRequest("DescribeVodDomainBpsData", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodDomainBpsDataRequest $request
     * @return DescribeVodDomainBpsDataResponse
     * @throws \Exception
     */
    public function describeVodDomainBpsData(DescribeVodDomainBpsDataRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainBpsDataWithOptions($request, $runtime);
    }

    /**
     * @param GetVideoDNAResultRequest $request
     * @param RuntimeOptions $runtime
     * @return GetVideoDNAResultResponse
     * @throws \Exception
     */
    public function getVideoDNAResultWithOptions(GetVideoDNAResultRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetVideoDNAResultResponse::fromMap($this->doRequest("GetVideoDNAResult", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetVideoDNAResultRequest $request
     * @return GetVideoDNAResultResponse
     * @throws \Exception
     */
    public function getVideoDNAResult(GetVideoDNAResultRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getVideoDNAResultWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodCertificateDetailRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodCertificateDetailResponse
     * @throws \Exception
     */
    public function describeVodCertificateDetailWithOptions(DescribeVodCertificateDetailRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodCertificateDetailResponse::fromMap($this->doRequest("DescribeVodCertificateDetail", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodCertificateDetailRequest $request
     * @return DescribeVodCertificateDetailResponse
     * @throws \Exception
     */
    public function describeVodCertificateDetail(DescribeVodCertificateDetailRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodCertificateDetailWithOptions($request, $runtime);
    }

    /**
     * @param DeleteImageRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteImageResponse
     * @throws \Exception
     */
    public function deleteImageWithOptions(DeleteImageRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteImageResponse::fromMap($this->doRequest("DeleteImage", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DeleteImageRequest $request
     * @return DeleteImageResponse
     * @throws \Exception
     */
    public function deleteImage(DeleteImageRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteImageWithOptions($request, $runtime);
    }

    /**
     * @param GetAuditResultDetailRequest $request
     * @param RuntimeOptions $runtime
     * @return GetAuditResultDetailResponse
     * @throws \Exception
     */
    public function getAuditResultDetailWithOptions(GetAuditResultDetailRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetAuditResultDetailResponse::fromMap($this->doRequest("GetAuditResultDetail", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetAuditResultDetailRequest $request
     * @return GetAuditResultDetailResponse
     * @throws \Exception
     */
    public function getAuditResultDetail(GetAuditResultDetailRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getAuditResultDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetMediaStreamRequest $request
     * @param RuntimeOptions $runtime
     * @return GetMediaStreamResponse
     * @throws \Exception
     */
    public function getMediaStreamWithOptions(GetMediaStreamRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetMediaStreamResponse::fromMap($this->doRequest("GetMediaStream", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetMediaStreamRequest $request
     * @return GetMediaStreamResponse
     * @throws \Exception
     */
    public function getMediaStream(GetMediaStreamRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getMediaStreamWithOptions($request, $runtime);
    }

    /**
     * @param PayOrderCallbackRequest $request
     * @param RuntimeOptions $runtime
     * @return PayOrderCallbackResponse
     * @throws \Exception
     */
    public function payOrderCallbackWithOptions(PayOrderCallbackRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return PayOrderCallbackResponse::fromMap($this->doRequest("PayOrderCallback", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param PayOrderCallbackRequest $request
     * @return PayOrderCallbackResponse
     * @throws \Exception
     */
    public function payOrderCallback(PayOrderCallbackRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->payOrderCallbackWithOptions($request, $runtime);
    }

    /**
     * @param ModifyRequest $request
     * @param RuntimeOptions $runtime
     * @return ModifyResponse
     * @throws \Exception
     */
    public function modifyWithOptions(ModifyRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ModifyResponse::fromMap($this->doRequest("Modify", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param ModifyRequest $request
     * @return ModifyResponse
     * @throws \Exception
     */
    public function modify(ModifyRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->modifyWithOptions($request, $runtime);
    }

    /**
     * @param CompleteOrderParamRequest $request
     * @param RuntimeOptions $runtime
     * @return CompleteOrderParamResponse
     * @throws \Exception
     */
    public function completeOrderParamWithOptions(CompleteOrderParamRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CompleteOrderParamResponse::fromMap($this->doRequest("CompleteOrderParam", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param CompleteOrderParamRequest $request
     * @return CompleteOrderParamResponse
     * @throws \Exception
     */
    public function completeOrderParam(CompleteOrderParamRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->completeOrderParamWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTemplateGroupDaemonRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateTemplateGroupDaemonResponse
     * @throws \Exception
     */
    public function updateTemplateGroupDaemonWithOptions(UpdateTemplateGroupDaemonRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateTemplateGroupDaemonResponse::fromMap($this->doRequest("UpdateTemplateGroupDaemon", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UpdateTemplateGroupDaemonRequest $request
     * @return UpdateTemplateGroupDaemonResponse
     * @throws \Exception
     */
    public function updateTemplateGroupDaemon(UpdateTemplateGroupDaemonRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateTemplateGroupDaemonWithOptions($request, $runtime);
    }

    /**
     * @param CreateKMSServiceKeyRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateKMSServiceKeyResponse
     * @throws \Exception
     */
    public function createKMSServiceKeyWithOptions(CreateKMSServiceKeyRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateKMSServiceKeyResponse::fromMap($this->doRequest("CreateKMSServiceKey", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param CreateKMSServiceKeyRequest $request
     * @return CreateKMSServiceKeyResponse
     * @throws \Exception
     */
    public function createKMSServiceKey(CreateKMSServiceKeyRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createKMSServiceKeyWithOptions($request, $runtime);
    }

    /**
     * @param SetAuditSecurityIpRequest $request
     * @param RuntimeOptions $runtime
     * @return SetAuditSecurityIpResponse
     * @throws \Exception
     */
    public function setAuditSecurityIpWithOptions(SetAuditSecurityIpRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SetAuditSecurityIpResponse::fromMap($this->doRequest("SetAuditSecurityIp", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SetAuditSecurityIpRequest $request
     * @return SetAuditSecurityIpResponse
     * @throws \Exception
     */
    public function setAuditSecurityIp(SetAuditSecurityIpRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->setAuditSecurityIpWithOptions($request, $runtime);
    }

    /**
     * @param ListAuditSecurityIpRequest $request
     * @param RuntimeOptions $runtime
     * @return ListAuditSecurityIpResponse
     * @throws \Exception
     */
    public function listAuditSecurityIpWithOptions(ListAuditSecurityIpRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListAuditSecurityIpResponse::fromMap($this->doRequest("ListAuditSecurityIp", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param ListAuditSecurityIpRequest $request
     * @return ListAuditSecurityIpResponse
     * @throws \Exception
     */
    public function listAuditSecurityIp(ListAuditSecurityIpRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listAuditSecurityIpWithOptions($request, $runtime);
    }

    /**
     * @param GetVideoInfosRequest $request
     * @param RuntimeOptions $runtime
     * @return GetVideoInfosResponse
     * @throws \Exception
     */
    public function getVideoInfosWithOptions(GetVideoInfosRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetVideoInfosResponse::fromMap($this->doRequest("GetVideoInfos", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetVideoInfosRequest $request
     * @return GetVideoInfosResponse
     * @throws \Exception
     */
    public function getVideoInfos(GetVideoInfosRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getVideoInfosWithOptions($request, $runtime);
    }

    /**
     * @param AssumeOssRoleRequest $request
     * @param RuntimeOptions $runtime
     * @return AssumeOssRoleResponse
     * @throws \Exception
     */
    public function assumeOssRoleWithOptions(AssumeOssRoleRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AssumeOssRoleResponse::fromMap($this->doRequest("AssumeOssRole", "HTTPS", "POST", "2017-03-14", "Anonymous", $request, null, $runtime));
    }

    /**
     * @param AssumeOssRoleRequest $request
     * @return AssumeOssRoleResponse
     * @throws \Exception
     */
    public function assumeOssRole(AssumeOssRoleRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->assumeOssRoleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateVodDomainRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateVodDomainResponse
     * @throws \Exception
     */
    public function updateVodDomainWithOptions(UpdateVodDomainRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateVodDomainResponse::fromMap($this->doRequest("UpdateVodDomain", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UpdateVodDomainRequest $request
     * @return UpdateVodDomainResponse
     * @throws \Exception
     */
    public function updateVodDomain(UpdateVodDomainRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateVodDomainWithOptions($request, $runtime);
    }

    /**
     * @param StopVodDomainRequest $request
     * @param RuntimeOptions $runtime
     * @return StopVodDomainResponse
     * @throws \Exception
     */
    public function stopVodDomainWithOptions(StopVodDomainRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return StopVodDomainResponse::fromMap($this->doRequest("StopVodDomain", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param StopVodDomainRequest $request
     * @return StopVodDomainResponse
     * @throws \Exception
     */
    public function stopVodDomain(StopVodDomainRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->stopVodDomainWithOptions($request, $runtime);
    }

    /**
     * @param StartVodDomainRequest $request
     * @param RuntimeOptions $runtime
     * @return StartVodDomainResponse
     * @throws \Exception
     */
    public function startVodDomainWithOptions(StartVodDomainRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return StartVodDomainResponse::fromMap($this->doRequest("StartVodDomain", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param StartVodDomainRequest $request
     * @return StartVodDomainResponse
     * @throws \Exception
     */
    public function startVodDomain(StartVodDomainRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->startVodDomainWithOptions($request, $runtime);
    }

    /**
     * @param SetVodDomainCertificateRequest $request
     * @param RuntimeOptions $runtime
     * @return SetVodDomainCertificateResponse
     * @throws \Exception
     */
    public function setVodDomainCertificateWithOptions(SetVodDomainCertificateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SetVodDomainCertificateResponse::fromMap($this->doRequest("SetVodDomainCertificate", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SetVodDomainCertificateRequest $request
     * @return SetVodDomainCertificateResponse
     * @throws \Exception
     */
    public function setVodDomainCertificate(SetVodDomainCertificateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->setVodDomainCertificateWithOptions($request, $runtime);
    }

    /**
     * @param RefreshVodObjectCachesRequest $request
     * @param RuntimeOptions $runtime
     * @return RefreshVodObjectCachesResponse
     * @throws \Exception
     */
    public function refreshVodObjectCachesWithOptions(RefreshVodObjectCachesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return RefreshVodObjectCachesResponse::fromMap($this->doRequest("RefreshVodObjectCaches", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param RefreshVodObjectCachesRequest $request
     * @return RefreshVodObjectCachesResponse
     * @throws \Exception
     */
    public function refreshVodObjectCaches(RefreshVodObjectCachesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->refreshVodObjectCachesWithOptions($request, $runtime);
    }

    /**
     * @param PreloadVodObjectCachesRequest $request
     * @param RuntimeOptions $runtime
     * @return PreloadVodObjectCachesResponse
     * @throws \Exception
     */
    public function preloadVodObjectCachesWithOptions(PreloadVodObjectCachesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return PreloadVodObjectCachesResponse::fromMap($this->doRequest("PreloadVodObjectCaches", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param PreloadVodObjectCachesRequest $request
     * @return PreloadVodObjectCachesResponse
     * @throws \Exception
     */
    public function preloadVodObjectCaches(PreloadVodObjectCachesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->preloadVodObjectCachesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodUserResourcePackageRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodUserResourcePackageResponse
     * @throws \Exception
     */
    public function describeVodUserResourcePackageWithOptions(DescribeVodUserResourcePackageRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodUserResourcePackageResponse::fromMap($this->doRequest("DescribeVodUserResourcePackage", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodUserResourcePackageRequest $request
     * @return DescribeVodUserResourcePackageResponse
     * @throws \Exception
     */
    public function describeVodUserResourcePackage(DescribeVodUserResourcePackageRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodUserResourcePackageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodUserQuotaRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodUserQuotaResponse
     * @throws \Exception
     */
    public function describeVodUserQuotaWithOptions(DescribeVodUserQuotaRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodUserQuotaResponse::fromMap($this->doRequest("DescribeVodUserQuota", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodUserQuotaRequest $request
     * @return DescribeVodUserQuotaResponse
     * @throws \Exception
     */
    public function describeVodUserQuota(DescribeVodUserQuotaRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodUserQuotaWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodUserDomainsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodUserDomainsResponse
     * @throws \Exception
     */
    public function describeVodUserDomainsWithOptions(DescribeVodUserDomainsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodUserDomainsResponse::fromMap($this->doRequest("DescribeVodUserDomains", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodUserDomainsRequest $request
     * @return DescribeVodUserDomainsResponse
     * @throws \Exception
     */
    public function describeVodUserDomains(DescribeVodUserDomainsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodUserDomainsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodServiceRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodServiceResponse
     * @throws \Exception
     */
    public function describeVodServiceWithOptions(DescribeVodServiceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodServiceResponse::fromMap($this->doRequest("DescribeVodService", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodServiceRequest $request
     * @return DescribeVodServiceResponse
     * @throws \Exception
     */
    public function describeVodService(DescribeVodServiceRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodServiceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodRefreshTasksRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodRefreshTasksResponse
     * @throws \Exception
     */
    public function describeVodRefreshTasksWithOptions(DescribeVodRefreshTasksRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodRefreshTasksResponse::fromMap($this->doRequest("DescribeVodRefreshTasks", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodRefreshTasksRequest $request
     * @return DescribeVodRefreshTasksResponse
     * @throws \Exception
     */
    public function describeVodRefreshTasks(DescribeVodRefreshTasksRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodRefreshTasksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodRefreshQuotaRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodRefreshQuotaResponse
     * @throws \Exception
     */
    public function describeVodRefreshQuotaWithOptions(DescribeVodRefreshQuotaRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodRefreshQuotaResponse::fromMap($this->doRequest("DescribeVodRefreshQuota", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodRefreshQuotaRequest $request
     * @return DescribeVodRefreshQuotaResponse
     * @throws \Exception
     */
    public function describeVodRefreshQuota(DescribeVodRefreshQuotaRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodRefreshQuotaWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainDetailRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainDetailResponse
     * @throws \Exception
     */
    public function describeVodDomainDetailWithOptions(DescribeVodDomainDetailRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainDetailResponse::fromMap($this->doRequest("DescribeVodDomainDetail", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodDomainDetailRequest $request
     * @return DescribeVodDomainDetailResponse
     * @throws \Exception
     */
    public function describeVodDomainDetail(DescribeVodDomainDetailRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainConfigsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainConfigsResponse
     * @throws \Exception
     */
    public function describeVodDomainConfigsWithOptions(DescribeVodDomainConfigsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainConfigsResponse::fromMap($this->doRequest("DescribeVodDomainConfigs", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodDomainConfigsRequest $request
     * @return DescribeVodDomainConfigsResponse
     * @throws \Exception
     */
    public function describeVodDomainConfigs(DescribeVodDomainConfigsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodCertificateListRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodCertificateListResponse
     * @throws \Exception
     */
    public function describeVodCertificateListWithOptions(DescribeVodCertificateListRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodCertificateListResponse::fromMap($this->doRequest("DescribeVodCertificateList", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodCertificateListRequest $request
     * @return DescribeVodCertificateListResponse
     * @throws \Exception
     */
    public function describeVodCertificateList(DescribeVodCertificateListRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodCertificateListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserVodStatusRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeUserVodStatusResponse
     * @throws \Exception
     */
    public function describeUserVodStatusWithOptions(DescribeUserVodStatusRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeUserVodStatusResponse::fromMap($this->doRequest("DescribeUserVodStatus", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeUserVodStatusRequest $request
     * @return DescribeUserVodStatusResponse
     * @throws \Exception
     */
    public function describeUserVodStatus(DescribeUserVodStatusRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeUserVodStatusWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVodDomainRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteVodDomainResponse
     * @throws \Exception
     */
    public function deleteVodDomainWithOptions(DeleteVodDomainRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteVodDomainResponse::fromMap($this->doRequest("DeleteVodDomain", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DeleteVodDomainRequest $request
     * @return DeleteVodDomainResponse
     * @throws \Exception
     */
    public function deleteVodDomain(DeleteVodDomainRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteVodDomainWithOptions($request, $runtime);
    }

    /**
     * @param AddVodDomainRequest $request
     * @param RuntimeOptions $runtime
     * @return AddVodDomainResponse
     * @throws \Exception
     */
    public function addVodDomainWithOptions(AddVodDomainRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddVodDomainResponse::fromMap($this->doRequest("AddVodDomain", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param AddVodDomainRequest $request
     * @return AddVodDomainResponse
     * @throws \Exception
     */
    public function addVodDomain(AddVodDomainRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addVodDomainWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainLogRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainLogResponse
     * @throws \Exception
     */
    public function describeVodDomainLogWithOptions(DescribeVodDomainLogRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainLogResponse::fromMap($this->doRequest("DescribeVodDomainLog", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodDomainLogRequest $request
     * @return DescribeVodDomainLogResponse
     * @throws \Exception
     */
    public function describeVodDomainLog(DescribeVodDomainLogRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainLogWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainCnameRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainCnameResponse
     * @throws \Exception
     */
    public function describeVodDomainCnameWithOptions(DescribeVodDomainCnameRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainCnameResponse::fromMap($this->doRequest("DescribeVodDomainCname", "HTTPS", "GET", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodDomainCnameRequest $request
     * @return DescribeVodDomainCnameResponse
     * @throws \Exception
     */
    public function describeVodDomainCname(DescribeVodDomainCnameRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainCnameWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainCertificateInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainCertificateInfoResponse
     * @throws \Exception
     */
    public function describeVodDomainCertificateInfoWithOptions(DescribeVodDomainCertificateInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainCertificateInfoResponse::fromMap($this->doRequest("DescribeVodDomainCertificateInfo", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodDomainCertificateInfoRequest $request
     * @return DescribeVodDomainCertificateInfoResponse
     * @throws \Exception
     */
    public function describeVodDomainCertificateInfo(DescribeVodDomainCertificateInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainCertificateInfoWithOptions($request, $runtime);
    }

    /**
     * @param UploadMediaByURLRequest $request
     * @param RuntimeOptions $runtime
     * @return UploadMediaByURLResponse
     * @throws \Exception
     */
    public function uploadMediaByURLWithOptions(UploadMediaByURLRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UploadMediaByURLResponse::fromMap($this->doRequest("UploadMediaByURL", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UploadMediaByURLRequest $request
     * @return UploadMediaByURLResponse
     * @throws \Exception
     */
    public function uploadMediaByURL(UploadMediaByURLRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->uploadMediaByURLWithOptions($request, $runtime);
    }

    /**
     * @param GetAIServiceRequest $request
     * @param RuntimeOptions $runtime
     * @return GetAIServiceResponse
     * @throws \Exception
     */
    public function getAIServiceWithOptions(GetAIServiceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetAIServiceResponse::fromMap($this->doRequest("GetAIService", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetAIServiceRequest $request
     * @return GetAIServiceResponse
     * @throws \Exception
     */
    public function getAIService(GetAIServiceRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getAIServiceWithOptions($request, $runtime);
    }

    /**
     * @param SetAIServiceRequest $request
     * @param RuntimeOptions $runtime
     * @return SetAIServiceResponse
     * @throws \Exception
     */
    public function setAIServiceWithOptions(SetAIServiceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SetAIServiceResponse::fromMap($this->doRequest("SetAIService", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SetAIServiceRequest $request
     * @return SetAIServiceResponse
     * @throws \Exception
     */
    public function setAIService(SetAIServiceRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->setAIServiceWithOptions($request, $runtime);
    }

    /**
     * @param SetL2OssKeyConfigRequest $request
     * @param RuntimeOptions $runtime
     * @return SetL2OssKeyConfigResponse
     * @throws \Exception
     */
    public function setL2OssKeyConfigWithOptions(SetL2OssKeyConfigRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SetL2OssKeyConfigResponse::fromMap($this->doRequest("SetL2OssKeyConfig", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SetL2OssKeyConfigRequest $request
     * @return SetL2OssKeyConfigResponse
     * @throws \Exception
     */
    public function setL2OssKeyConfig(SetL2OssKeyConfigRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->setL2OssKeyConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetDefaultUploadStorageRequest $request
     * @param RuntimeOptions $runtime
     * @return SetDefaultUploadStorageResponse
     * @throws \Exception
     */
    public function setDefaultUploadStorageWithOptions(SetDefaultUploadStorageRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SetDefaultUploadStorageResponse::fromMap($this->doRequest("SetDefaultUploadStorage", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SetDefaultUploadStorageRequest $request
     * @return SetDefaultUploadStorageResponse
     * @throws \Exception
     */
    public function setDefaultUploadStorage(SetDefaultUploadStorageRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->setDefaultUploadStorageWithOptions($request, $runtime);
    }

    /**
     * @param SearchMediaRequest $request
     * @param RuntimeOptions $runtime
     * @return SearchMediaResponse
     * @throws \Exception
     */
    public function searchMediaWithOptions(SearchMediaRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SearchMediaResponse::fromMap($this->doRequest("SearchMedia", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SearchMediaRequest $request
     * @return SearchMediaResponse
     * @throws \Exception
     */
    public function searchMedia(SearchMediaRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->searchMediaWithOptions($request, $runtime);
    }

    /**
     * @param UpdateVideoInfosRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateVideoInfosResponse
     * @throws \Exception
     */
    public function updateVideoInfosWithOptions(UpdateVideoInfosRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateVideoInfosResponse::fromMap($this->doRequest("UpdateVideoInfos", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UpdateVideoInfosRequest $request
     * @return UpdateVideoInfosResponse
     * @throws \Exception
     */
    public function updateVideoInfos(UpdateVideoInfosRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateVideoInfosWithOptions($request, $runtime);
    }

    /**
     * @param GenerateDownloadSecretKeyRequest $request
     * @param RuntimeOptions $runtime
     * @return GenerateDownloadSecretKeyResponse
     * @throws \Exception
     */
    public function generateDownloadSecretKeyWithOptions(GenerateDownloadSecretKeyRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GenerateDownloadSecretKeyResponse::fromMap($this->doRequest("GenerateDownloadSecretKey", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GenerateDownloadSecretKeyRequest $request
     * @return GenerateDownloadSecretKeyResponse
     * @throws \Exception
     */
    public function generateDownloadSecretKey(GenerateDownloadSecretKeyRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->generateDownloadSecretKeyWithOptions($request, $runtime);
    }

    /**
     * @param AssumeSlsRoleRequest $request
     * @param RuntimeOptions $runtime
     * @return AssumeSlsRoleResponse
     * @throws \Exception
     */
    public function assumeSlsRoleWithOptions(AssumeSlsRoleRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AssumeSlsRoleResponse::fromMap($this->doRequest("AssumeSlsRole", "HTTPS", "POST", "2017-03-14", "Anonymous", $request, null, $runtime));
    }

    /**
     * @param AssumeSlsRoleRequest $request
     * @return AssumeSlsRoleResponse
     * @throws \Exception
     */
    public function assumeSlsRole(AssumeSlsRoleRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->assumeSlsRoleWithOptions($request, $runtime);
    }

    /**
     * @param GetPersonalStorageListRequest $request
     * @param RuntimeOptions $runtime
     * @return GetPersonalStorageListResponse
     * @throws \Exception
     */
    public function getPersonalStorageListWithOptions(GetPersonalStorageListRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetPersonalStorageListResponse::fromMap($this->doRequest("GetPersonalStorageList", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetPersonalStorageListRequest $request
     * @return GetPersonalStorageListResponse
     * @throws \Exception
     */
    public function getPersonalStorageList(GetPersonalStorageListRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getPersonalStorageListWithOptions($request, $runtime);
    }

    /**
     * @param GetStorageRegionListRequest $request
     * @param RuntimeOptions $runtime
     * @return GetStorageRegionListResponse
     * @throws \Exception
     */
    public function getStorageRegionListWithOptions(GetStorageRegionListRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetStorageRegionListResponse::fromMap($this->doRequest("GetStorageRegionList", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetStorageRegionListRequest $request
     * @return GetStorageRegionListResponse
     * @throws \Exception
     */
    public function getStorageRegionList(GetStorageRegionListRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getStorageRegionListWithOptions($request, $runtime);
    }

    /**
     * @param SetStorageACLRequest $request
     * @param RuntimeOptions $runtime
     * @return SetStorageACLResponse
     * @throws \Exception
     */
    public function setStorageACLWithOptions(SetStorageACLRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SetStorageACLResponse::fromMap($this->doRequest("SetStorageACL", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SetStorageACLRequest $request
     * @return SetStorageACLResponse
     * @throws \Exception
     */
    public function setStorageACL(SetStorageACLRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->setStorageACLWithOptions($request, $runtime);
    }

    /**
     * @param GetMessageCallbackEventListRequest $request
     * @param RuntimeOptions $runtime
     * @return GetMessageCallbackEventListResponse
     * @throws \Exception
     */
    public function getMessageCallbackEventListWithOptions(GetMessageCallbackEventListRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetMessageCallbackEventListResponse::fromMap($this->doRequest("GetMessageCallbackEventList", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetMessageCallbackEventListRequest $request
     * @return GetMessageCallbackEventListResponse
     * @throws \Exception
     */
    public function getMessageCallbackEventList(GetMessageCallbackEventListRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getMessageCallbackEventListWithOptions($request, $runtime);
    }

    /**
     * @param GetStorageInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return GetStorageInfoResponse
     * @throws \Exception
     */
    public function getStorageInfoWithOptions(GetStorageInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetStorageInfoResponse::fromMap($this->doRequest("GetStorageInfo", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetStorageInfoRequest $request
     * @return GetStorageInfoResponse
     * @throws \Exception
     */
    public function getStorageInfo(GetStorageInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getStorageInfoWithOptions($request, $runtime);
    }

    /**
     * @param DeleteStorageRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteStorageResponse
     * @throws \Exception
     */
    public function deleteStorageWithOptions(DeleteStorageRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteStorageResponse::fromMap($this->doRequest("DeleteStorage", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DeleteStorageRequest $request
     * @return DeleteStorageResponse
     * @throws \Exception
     */
    public function deleteStorage(DeleteStorageRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteStorageWithOptions($request, $runtime);
    }

    /**
     * @param AddStorageRequest $request
     * @param RuntimeOptions $runtime
     * @return AddStorageResponse
     * @throws \Exception
     */
    public function addStorageWithOptions(AddStorageRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddStorageResponse::fromMap($this->doRequest("AddStorage", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param AddStorageRequest $request
     * @return AddStorageResponse
     * @throws \Exception
     */
    public function addStorage(AddStorageRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addStorageWithOptions($request, $runtime);
    }

    /**
     * @param GetStorageListRequest $request
     * @param RuntimeOptions $runtime
     * @return GetStorageListResponse
     * @throws \Exception
     */
    public function getStorageListWithOptions(GetStorageListRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetStorageListResponse::fromMap($this->doRequest("GetStorageList", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetStorageListRequest $request
     * @return GetStorageListResponse
     * @throws \Exception
     */
    public function getStorageList(GetStorageListRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getStorageListWithOptions($request, $runtime);
    }

    /**
     * @param GetThirdPartPlayPolicyRequest $request
     * @param RuntimeOptions $runtime
     * @return GetThirdPartPlayPolicyResponse
     * @throws \Exception
     */
    public function getThirdPartPlayPolicyWithOptions(GetThirdPartPlayPolicyRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetThirdPartPlayPolicyResponse::fromMap($this->doRequest("GetThirdPartPlayPolicy", "HTTPS", "POST", "2017-03-14", "Anonymous", $request, null, $runtime));
    }

    /**
     * @param GetThirdPartPlayPolicyRequest $request
     * @return GetThirdPartPlayPolicyResponse
     * @throws \Exception
     */
    public function getThirdPartPlayPolicy(GetThirdPartPlayPolicyRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getThirdPartPlayPolicyWithOptions($request, $runtime);
    }

    /**
     * @param AddThirdPartPlayPolicyRequest $request
     * @param RuntimeOptions $runtime
     * @return AddThirdPartPlayPolicyResponse
     * @throws \Exception
     */
    public function addThirdPartPlayPolicyWithOptions(AddThirdPartPlayPolicyRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddThirdPartPlayPolicyResponse::fromMap($this->doRequest("AddThirdPartPlayPolicy", "HTTPS", "POST", "2017-03-14", "Anonymous", $request, null, $runtime));
    }

    /**
     * @param AddThirdPartPlayPolicyRequest $request
     * @return AddThirdPartPlayPolicyResponse
     * @throws \Exception
     */
    public function addThirdPartPlayPolicy(AddThirdPartPlayPolicyRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addThirdPartPlayPolicyWithOptions($request, $runtime);
    }

    /**
     * @param AuthorizeAppLicenseRequest $request
     * @param RuntimeOptions $runtime
     * @return AuthorizeAppLicenseResponse
     * @throws \Exception
     */
    public function authorizeAppLicenseWithOptions(AuthorizeAppLicenseRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AuthorizeAppLicenseResponse::fromMap($this->doRequest("AuthorizeAppLicense", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param AuthorizeAppLicenseRequest $request
     * @return AuthorizeAppLicenseResponse
     * @throws \Exception
     */
    public function authorizeAppLicense(AuthorizeAppLicenseRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->authorizeAppLicenseWithOptions($request, $runtime);
    }

    /**
     * @param GetAppLicenseRequest $request
     * @param RuntimeOptions $runtime
     * @return GetAppLicenseResponse
     * @throws \Exception
     */
    public function getAppLicenseWithOptions(GetAppLicenseRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetAppLicenseResponse::fromMap($this->doRequest("GetAppLicense", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetAppLicenseRequest $request
     * @return GetAppLicenseResponse
     * @throws \Exception
     */
    public function getAppLicense(GetAppLicenseRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getAppLicenseWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAppLicenseRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateAppLicenseResponse
     * @throws \Exception
     */
    public function updateAppLicenseWithOptions(UpdateAppLicenseRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateAppLicenseResponse::fromMap($this->doRequest("UpdateAppLicense", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UpdateAppLicenseRequest $request
     * @return UpdateAppLicenseResponse
     * @throws \Exception
     */
    public function updateAppLicense(UpdateAppLicenseRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateAppLicenseWithOptions($request, $runtime);
    }

    /**
     * @param AddAppLicenseRequest $request
     * @param RuntimeOptions $runtime
     * @return AddAppLicenseResponse
     * @throws \Exception
     */
    public function addAppLicenseWithOptions(AddAppLicenseRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddAppLicenseResponse::fromMap($this->doRequest("AddAppLicense", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param AddAppLicenseRequest $request
     * @return AddAppLicenseResponse
     * @throws \Exception
     */
    public function addAppLicense(AddAppLicenseRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addAppLicenseWithOptions($request, $runtime);
    }

    /**
     * @param GetAppLicenseListRequest $request
     * @param RuntimeOptions $runtime
     * @return GetAppLicenseListResponse
     * @throws \Exception
     */
    public function getAppLicenseListWithOptions(GetAppLicenseListRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetAppLicenseListResponse::fromMap($this->doRequest("GetAppLicenseList", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetAppLicenseListRequest $request
     * @return GetAppLicenseListResponse
     * @throws \Exception
     */
    public function getAppLicenseList(GetAppLicenseListRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getAppLicenseListWithOptions($request, $runtime);
    }

    /**
     * @param SPIPhysicalDeleteResourceActionRequest $request
     * @param RuntimeOptions $runtime
     * @return SPIPhysicalDeleteResourceActionResponse
     * @throws \Exception
     */
    public function SPIPhysicalDeleteResourceActionWithOptions(SPIPhysicalDeleteResourceActionRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SPIPhysicalDeleteResourceActionResponse::fromMap($this->doRequest("SPIPhysicalDeleteResourceAction", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SPIPhysicalDeleteResourceActionRequest $request
     * @return SPIPhysicalDeleteResourceActionResponse
     * @throws \Exception
     */
    public function SPIPhysicalDeleteResourceAction(SPIPhysicalDeleteResourceActionRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->SPIPhysicalDeleteResourceActionWithOptions($request, $runtime);
    }

    /**
     * @param SPICheckResourceActionRequest $request
     * @param RuntimeOptions $runtime
     * @return SPICheckResourceActionResponse
     * @throws \Exception
     */
    public function SPICheckResourceActionWithOptions(SPICheckResourceActionRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SPICheckResourceActionResponse::fromMap($this->doRequest("SPICheckResourceAction", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SPICheckResourceActionRequest $request
     * @return SPICheckResourceActionResponse
     * @throws \Exception
     */
    public function SPICheckResourceAction(SPICheckResourceActionRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->SPICheckResourceActionWithOptions($request, $runtime);
    }

    /**
     * @param SPILogicalDeleteResourceActionRequest $request
     * @param RuntimeOptions $runtime
     * @return SPILogicalDeleteResourceActionResponse
     * @throws \Exception
     */
    public function SPILogicalDeleteResourceActionWithOptions(SPILogicalDeleteResourceActionRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SPILogicalDeleteResourceActionResponse::fromMap($this->doRequest("SPILogicalDeleteResourceAction", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SPILogicalDeleteResourceActionRequest $request
     * @return SPILogicalDeleteResourceActionResponse
     * @throws \Exception
     */
    public function SPILogicalDeleteResourceAction(SPILogicalDeleteResourceActionRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->SPILogicalDeleteResourceActionWithOptions($request, $runtime);
    }

    /**
     * @param SubmitPreprocessJobsRequest $request
     * @param RuntimeOptions $runtime
     * @return SubmitPreprocessJobsResponse
     * @throws \Exception
     */
    public function submitPreprocessJobsWithOptions(SubmitPreprocessJobsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SubmitPreprocessJobsResponse::fromMap($this->doRequest("SubmitPreprocessJobs", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SubmitPreprocessJobsRequest $request
     * @return SubmitPreprocessJobsResponse
     * @throws \Exception
     */
    public function submitPreprocessJobs(SubmitPreprocessJobsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->submitPreprocessJobsWithOptions($request, $runtime);
    }

    /**
     * @param QueryOrderParamRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryOrderParamResponse
     * @throws \Exception
     */
    public function queryOrderParamWithOptions(QueryOrderParamRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryOrderParamResponse::fromMap($this->doRequest("QueryOrderParam", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param QueryOrderParamRequest $request
     * @return QueryOrderParamResponse
     * @throws \Exception
     */
    public function queryOrderParam(QueryOrderParamRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryOrderParamWithOptions($request, $runtime);
    }

    /**
     * @param AssumeExperienceRoleRequest $request
     * @param RuntimeOptions $runtime
     * @return AssumeExperienceRoleResponse
     * @throws \Exception
     */
    public function assumeExperienceRoleWithOptions(AssumeExperienceRoleRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AssumeExperienceRoleResponse::fromMap($this->doRequest("AssumeExperienceRole", "HTTPS", "POST", "2017-03-14", "Anonymous", $request, null, $runtime));
    }

    /**
     * @param AssumeExperienceRoleRequest $request
     * @return AssumeExperienceRoleResponse
     * @throws \Exception
     */
    public function assumeExperienceRole(AssumeExperienceRoleRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->assumeExperienceRoleWithOptions($request, $runtime);
    }

    /**
     * @param ListSnapshotsRequest $request
     * @param RuntimeOptions $runtime
     * @return ListSnapshotsResponse
     * @throws \Exception
     */
    public function listSnapshotsWithOptions(ListSnapshotsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListSnapshotsResponse::fromMap($this->doRequest("ListSnapshots", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param ListSnapshotsRequest $request
     * @return ListSnapshotsResponse
     * @throws \Exception
     */
    public function listSnapshots(ListSnapshotsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listSnapshotsWithOptions($request, $runtime);
    }

    /**
     * @param SetDefaultPlayDomainRequest $request
     * @param RuntimeOptions $runtime
     * @return SetDefaultPlayDomainResponse
     * @throws \Exception
     */
    public function setDefaultPlayDomainWithOptions(SetDefaultPlayDomainRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SetDefaultPlayDomainResponse::fromMap($this->doRequest("SetDefaultPlayDomain", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SetDefaultPlayDomainRequest $request
     * @return SetDefaultPlayDomainResponse
     * @throws \Exception
     */
    public function setDefaultPlayDomain(SetDefaultPlayDomainRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->setDefaultPlayDomainWithOptions($request, $runtime);
    }

    /**
     * @param EditVideoIndexFileRequest $request
     * @param RuntimeOptions $runtime
     * @return EditVideoIndexFileResponse
     * @throws \Exception
     */
    public function editVideoIndexFileWithOptions(EditVideoIndexFileRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return EditVideoIndexFileResponse::fromMap($this->doRequest("EditVideoIndexFile", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param EditVideoIndexFileRequest $request
     * @return EditVideoIndexFileResponse
     * @throws \Exception
     */
    public function editVideoIndexFile(EditVideoIndexFileRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->editVideoIndexFileWithOptions($request, $runtime);
    }

    /**
     * @param SetCDNDomainServerCertificateRequest $request
     * @param RuntimeOptions $runtime
     * @return SetCDNDomainServerCertificateResponse
     * @throws \Exception
     */
    public function setCDNDomainServerCertificateWithOptions(SetCDNDomainServerCertificateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SetCDNDomainServerCertificateResponse::fromMap($this->doRequest("SetCDNDomainServerCertificate", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SetCDNDomainServerCertificateRequest $request
     * @return SetCDNDomainServerCertificateResponse
     * @throws \Exception
     */
    public function setCDNDomainServerCertificate(SetCDNDomainServerCertificateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->setCDNDomainServerCertificateWithOptions($request, $runtime);
    }

    /**
     * @param SetCDNForceRedirectConfigRequest $request
     * @param RuntimeOptions $runtime
     * @return SetCDNForceRedirectConfigResponse
     * @throws \Exception
     */
    public function setCDNForceRedirectConfigWithOptions(SetCDNForceRedirectConfigRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SetCDNForceRedirectConfigResponse::fromMap($this->doRequest("SetCDNForceRedirectConfig", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SetCDNForceRedirectConfigRequest $request
     * @return SetCDNForceRedirectConfigResponse
     * @throws \Exception
     */
    public function setCDNForceRedirectConfig(SetCDNForceRedirectConfigRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->setCDNForceRedirectConfigWithOptions($request, $runtime);
    }

    /**
     * @param SubmitTranscodeJobsRequest $request
     * @param RuntimeOptions $runtime
     * @return SubmitTranscodeJobsResponse
     * @throws \Exception
     */
    public function submitTranscodeJobsWithOptions(SubmitTranscodeJobsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SubmitTranscodeJobsResponse::fromMap($this->doRequest("SubmitTranscodeJobs", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SubmitTranscodeJobsRequest $request
     * @return SubmitTranscodeJobsResponse
     * @throws \Exception
     */
    public function submitTranscodeJobs(SubmitTranscodeJobsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->submitTranscodeJobsWithOptions($request, $runtime);
    }

    /**
     * @param GetAuditResultRequest $request
     * @param RuntimeOptions $runtime
     * @return GetAuditResultResponse
     * @throws \Exception
     */
    public function getAuditResultWithOptions(GetAuditResultRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetAuditResultResponse::fromMap($this->doRequest("GetAuditResult", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetAuditResultRequest $request
     * @return GetAuditResultResponse
     * @throws \Exception
     */
    public function getAuditResult(GetAuditResultRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getAuditResultWithOptions($request, $runtime);
    }

    /**
     * @param CreateAuditRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateAuditResponse
     * @throws \Exception
     */
    public function createAuditWithOptions(CreateAuditRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateAuditResponse::fromMap($this->doRequest("CreateAudit", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param CreateAuditRequest $request
     * @return CreateAuditResponse
     * @throws \Exception
     */
    public function createAudit(CreateAuditRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createAuditWithOptions($request, $runtime);
    }

    /**
     * @param GetAuditHistoryRequest $request
     * @param RuntimeOptions $runtime
     * @return GetAuditHistoryResponse
     * @throws \Exception
     */
    public function getAuditHistoryWithOptions(GetAuditHistoryRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetAuditHistoryResponse::fromMap($this->doRequest("GetAuditHistory", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetAuditHistoryRequest $request
     * @return GetAuditHistoryResponse
     * @throws \Exception
     */
    public function getAuditHistory(GetAuditHistoryRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getAuditHistoryWithOptions($request, $runtime);
    }

    /**
     * @param FinishLiveStreamRecordRequest $request
     * @param RuntimeOptions $runtime
     * @return FinishLiveStreamRecordResponse
     * @throws \Exception
     */
    public function finishLiveStreamRecordWithOptions(FinishLiveStreamRecordRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return FinishLiveStreamRecordResponse::fromMap($this->doRequest("FinishLiveStreamRecord", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param FinishLiveStreamRecordRequest $request
     * @return FinishLiveStreamRecordResponse
     * @throws \Exception
     */
    public function finishLiveStreamRecord(FinishLiveStreamRecordRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->finishLiveStreamRecordWithOptions($request, $runtime);
    }

    /**
     * @param ListLiveRecordVideoRequest $request
     * @param RuntimeOptions $runtime
     * @return ListLiveRecordVideoResponse
     * @throws \Exception
     */
    public function listLiveRecordVideoWithOptions(ListLiveRecordVideoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListLiveRecordVideoResponse::fromMap($this->doRequest("ListLiveRecordVideo", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param ListLiveRecordVideoRequest $request
     * @return ListLiveRecordVideoResponse
     * @throws \Exception
     */
    public function listLiveRecordVideo(ListLiveRecordVideoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listLiveRecordVideoWithOptions($request, $runtime);
    }

    /**
     * @param AddLiveStreamVideoRequest $request
     * @param RuntimeOptions $runtime
     * @return AddLiveStreamVideoResponse
     * @throws \Exception
     */
    public function addLiveStreamVideoWithOptions(AddLiveStreamVideoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddLiveStreamVideoResponse::fromMap($this->doRequest("AddLiveStreamVideo", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param AddLiveStreamVideoRequest $request
     * @return AddLiveStreamVideoResponse
     * @throws \Exception
     */
    public function addLiveStreamVideo(AddLiveStreamVideoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addLiveStreamVideoWithOptions($request, $runtime);
    }

    /**
     * @param SetTemplateGroupPropertyRequest $request
     * @param RuntimeOptions $runtime
     * @return SetTemplateGroupPropertyResponse
     * @throws \Exception
     */
    public function setTemplateGroupPropertyWithOptions(SetTemplateGroupPropertyRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SetTemplateGroupPropertyResponse::fromMap($this->doRequest("SetTemplateGroupProperty", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SetTemplateGroupPropertyRequest $request
     * @return SetTemplateGroupPropertyResponse
     * @throws \Exception
     */
    public function setTemplateGroupProperty(SetTemplateGroupPropertyRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->setTemplateGroupPropertyWithOptions($request, $runtime);
    }

    /**
     * @param QueryUploadInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return QueryUploadInfoResponse
     * @throws \Exception
     */
    public function queryUploadInfoWithOptions(QueryUploadInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return QueryUploadInfoResponse::fromMap($this->doRequest("QueryUploadInfo", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param QueryUploadInfoRequest $request
     * @return QueryUploadInfoResponse
     * @throws \Exception
     */
    public function queryUploadInfo(QueryUploadInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->queryUploadInfoWithOptions($request, $runtime);
    }

    /**
     * @param FaceRegistrationRequest $request
     * @param RuntimeOptions $runtime
     * @return FaceRegistrationResponse
     * @throws \Exception
     */
    public function faceRegistrationWithOptions(FaceRegistrationRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return FaceRegistrationResponse::fromMap($this->doRequest("FaceRegistration", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param FaceRegistrationRequest $request
     * @return FaceRegistrationResponse
     * @throws \Exception
     */
    public function faceRegistration(FaceRegistrationRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->faceRegistrationWithOptions($request, $runtime);
    }

    /**
     * @param ListAIJobRequest $request
     * @param RuntimeOptions $runtime
     * @return ListAIJobResponse
     * @throws \Exception
     */
    public function listAIJobWithOptions(ListAIJobRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListAIJobResponse::fromMap($this->doRequest("ListAIJob", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param ListAIJobRequest $request
     * @return ListAIJobResponse
     * @throws \Exception
     */
    public function listAIJob(ListAIJobRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listAIJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitAIJobRequest $request
     * @param RuntimeOptions $runtime
     * @return SubmitAIJobResponse
     * @throws \Exception
     */
    public function submitAIJobWithOptions(SubmitAIJobRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SubmitAIJobResponse::fromMap($this->doRequest("SubmitAIJob", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SubmitAIJobRequest $request
     * @return SubmitAIJobResponse
     * @throws \Exception
     */
    public function submitAIJob(SubmitAIJobRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->submitAIJobWithOptions($request, $runtime);
    }

    /**
     * @param GetImageInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return GetImageInfoResponse
     * @throws \Exception
     */
    public function getImageInfoWithOptions(GetImageInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetImageInfoResponse::fromMap($this->doRequest("GetImageInfo", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetImageInfoRequest $request
     * @return GetImageInfoResponse
     * @throws \Exception
     */
    public function getImageInfo(GetImageInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getImageInfoWithOptions($request, $runtime);
    }

    /**
     * @param UpdateWatermarkInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateWatermarkInfoResponse
     * @throws \Exception
     */
    public function updateWatermarkInfoWithOptions(UpdateWatermarkInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateWatermarkInfoResponse::fromMap($this->doRequest("UpdateWatermarkInfo", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UpdateWatermarkInfoRequest $request
     * @return UpdateWatermarkInfoResponse
     * @throws \Exception
     */
    public function updateWatermarkInfo(UpdateWatermarkInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateWatermarkInfoWithOptions($request, $runtime);
    }

    /**
     * @param UpdateWatermarkGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateWatermarkGroupResponse
     * @throws \Exception
     */
    public function updateWatermarkGroupWithOptions(UpdateWatermarkGroupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateWatermarkGroupResponse::fromMap($this->doRequest("UpdateWatermarkGroup", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UpdateWatermarkGroupRequest $request
     * @return UpdateWatermarkGroupResponse
     * @throws \Exception
     */
    public function updateWatermarkGroup(UpdateWatermarkGroupRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateWatermarkGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListWatermarkInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return ListWatermarkInfoResponse
     * @throws \Exception
     */
    public function listWatermarkInfoWithOptions(ListWatermarkInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListWatermarkInfoResponse::fromMap($this->doRequest("ListWatermarkInfo", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param ListWatermarkInfoRequest $request
     * @return ListWatermarkInfoResponse
     * @throws \Exception
     */
    public function listWatermarkInfo(ListWatermarkInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listWatermarkInfoWithOptions($request, $runtime);
    }

    /**
     * @param ListCompanionresourceInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return ListCompanionresourceInfoResponse
     * @throws \Exception
     */
    public function listCompanionresourceInfoWithOptions(ListCompanionresourceInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListCompanionresourceInfoResponse::fromMap($this->doRequest("ListCompanionresourceInfo", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param ListCompanionresourceInfoRequest $request
     * @return ListCompanionresourceInfoResponse
     * @throws \Exception
     */
    public function listCompanionresourceInfo(ListCompanionresourceInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listCompanionresourceInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetWatermarkInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return GetWatermarkInfoResponse
     * @throws \Exception
     */
    public function getWatermarkInfoWithOptions(GetWatermarkInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetWatermarkInfoResponse::fromMap($this->doRequest("GetWatermarkInfo", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetWatermarkInfoRequest $request
     * @return GetWatermarkInfoResponse
     * @throws \Exception
     */
    public function getWatermarkInfo(GetWatermarkInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getWatermarkInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetWatermarkGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return GetWatermarkGroupResponse
     * @throws \Exception
     */
    public function getWatermarkGroupWithOptions(GetWatermarkGroupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetWatermarkGroupResponse::fromMap($this->doRequest("GetWatermarkGroup", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetWatermarkGroupRequest $request
     * @return GetWatermarkGroupResponse
     * @throws \Exception
     */
    public function getWatermarkGroup(GetWatermarkGroupRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getWatermarkGroupWithOptions($request, $runtime);
    }

    /**
     * @param GetCompanionresourceInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return GetCompanionresourceInfoResponse
     * @throws \Exception
     */
    public function getCompanionresourceInfoWithOptions(GetCompanionresourceInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetCompanionresourceInfoResponse::fromMap($this->doRequest("GetCompanionresourceInfo", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetCompanionresourceInfoRequest $request
     * @return GetCompanionresourceInfoResponse
     * @throws \Exception
     */
    public function getCompanionresourceInfo(GetCompanionresourceInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getCompanionresourceInfoWithOptions($request, $runtime);
    }

    /**
     * @param DeleteWatermarkRelationRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteWatermarkRelationResponse
     * @throws \Exception
     */
    public function deleteWatermarkRelationWithOptions(DeleteWatermarkRelationRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteWatermarkRelationResponse::fromMap($this->doRequest("DeleteWatermarkRelation", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DeleteWatermarkRelationRequest $request
     * @return DeleteWatermarkRelationResponse
     * @throws \Exception
     */
    public function deleteWatermarkRelation(DeleteWatermarkRelationRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteWatermarkRelationWithOptions($request, $runtime);
    }

    /**
     * @param DeleteWatermarkInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteWatermarkInfoResponse
     * @throws \Exception
     */
    public function deleteWatermarkInfoWithOptions(DeleteWatermarkInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteWatermarkInfoResponse::fromMap($this->doRequest("DeleteWatermarkInfo", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DeleteWatermarkInfoRequest $request
     * @return DeleteWatermarkInfoResponse
     * @throws \Exception
     */
    public function deleteWatermarkInfo(DeleteWatermarkInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteWatermarkInfoWithOptions($request, $runtime);
    }

    /**
     * @param DeleteWatermarkGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteWatermarkGroupResponse
     * @throws \Exception
     */
    public function deleteWatermarkGroupWithOptions(DeleteWatermarkGroupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteWatermarkGroupResponse::fromMap($this->doRequest("DeleteWatermarkGroup", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DeleteWatermarkGroupRequest $request
     * @return DeleteWatermarkGroupResponse
     * @throws \Exception
     */
    public function deleteWatermarkGroup(DeleteWatermarkGroupRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteWatermarkGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCompanionresourceInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteCompanionresourceInfoResponse
     * @throws \Exception
     */
    public function deleteCompanionresourceInfoWithOptions(DeleteCompanionresourceInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteCompanionresourceInfoResponse::fromMap($this->doRequest("DeleteCompanionresourceInfo", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DeleteCompanionresourceInfoRequest $request
     * @return DeleteCompanionresourceInfoResponse
     * @throws \Exception
     */
    public function deleteCompanionresourceInfo(DeleteCompanionresourceInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteCompanionresourceInfoWithOptions($request, $runtime);
    }

    /**
     * @param CreateUploadMediaFileRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateUploadMediaFileResponse
     * @throws \Exception
     */
    public function createUploadMediaFileWithOptions(CreateUploadMediaFileRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateUploadMediaFileResponse::fromMap($this->doRequest("CreateUploadMediaFile", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param CreateUploadMediaFileRequest $request
     * @return CreateUploadMediaFileResponse
     * @throws \Exception
     */
    public function createUploadMediaFile(CreateUploadMediaFileRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createUploadMediaFileWithOptions($request, $runtime);
    }

    /**
     * @param AddWatermarkRelationRequest $request
     * @param RuntimeOptions $runtime
     * @return AddWatermarkRelationResponse
     * @throws \Exception
     */
    public function addWatermarkRelationWithOptions(AddWatermarkRelationRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddWatermarkRelationResponse::fromMap($this->doRequest("AddWatermarkRelation", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param AddWatermarkRelationRequest $request
     * @return AddWatermarkRelationResponse
     * @throws \Exception
     */
    public function addWatermarkRelation(AddWatermarkRelationRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addWatermarkRelationWithOptions($request, $runtime);
    }

    /**
     * @param AddWatermarkInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return AddWatermarkInfoResponse
     * @throws \Exception
     */
    public function addWatermarkInfoWithOptions(AddWatermarkInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddWatermarkInfoResponse::fromMap($this->doRequest("AddWatermarkInfo", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param AddWatermarkInfoRequest $request
     * @return AddWatermarkInfoResponse
     * @throws \Exception
     */
    public function addWatermarkInfo(AddWatermarkInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addWatermarkInfoWithOptions($request, $runtime);
    }

    /**
     * @param AddWatermarkGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return AddWatermarkGroupResponse
     * @throws \Exception
     */
    public function addWatermarkGroupWithOptions(AddWatermarkGroupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddWatermarkGroupResponse::fromMap($this->doRequest("AddWatermarkGroup", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param AddWatermarkGroupRequest $request
     * @return AddWatermarkGroupResponse
     * @throws \Exception
     */
    public function addWatermarkGroup(AddWatermarkGroupRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addWatermarkGroupWithOptions($request, $runtime);
    }

    /**
     * @param AddCompanionresourceInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return AddCompanionresourceInfoResponse
     * @throws \Exception
     */
    public function addCompanionresourceInfoWithOptions(AddCompanionresourceInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddCompanionresourceInfoResponse::fromMap($this->doRequest("AddCompanionresourceInfo", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param AddCompanionresourceInfoRequest $request
     * @return AddCompanionresourceInfoResponse
     * @throws \Exception
     */
    public function addCompanionresourceInfo(AddCompanionresourceInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addCompanionresourceInfoWithOptions($request, $runtime);
    }

    /**
     * @param OpenVodServiceRequest $request
     * @param RuntimeOptions $runtime
     * @return OpenVodServiceResponse
     * @throws \Exception
     */
    public function openVodServiceWithOptions(OpenVodServiceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return OpenVodServiceResponse::fromMap($this->doRequest("OpenVodService", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param OpenVodServiceRequest $request
     * @return OpenVodServiceResponse
     * @throws \Exception
     */
    public function openVodService(OpenVodServiceRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->openVodServiceWithOptions($request, $runtime);
    }

    /**
     * @param SubmitAIVideoCategoryJobRequest $request
     * @param RuntimeOptions $runtime
     * @return SubmitAIVideoCategoryJobResponse
     * @throws \Exception
     */
    public function submitAIVideoCategoryJobWithOptions(SubmitAIVideoCategoryJobRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SubmitAIVideoCategoryJobResponse::fromMap($this->doRequest("SubmitAIVideoCategoryJob", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SubmitAIVideoCategoryJobRequest $request
     * @return SubmitAIVideoCategoryJobResponse
     * @throws \Exception
     */
    public function submitAIVideoCategoryJob(SubmitAIVideoCategoryJobRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->submitAIVideoCategoryJobWithOptions($request, $runtime);
    }

    /**
     * @param ListAIVideoCategoryJobRequest $request
     * @param RuntimeOptions $runtime
     * @return ListAIVideoCategoryJobResponse
     * @throws \Exception
     */
    public function listAIVideoCategoryJobWithOptions(ListAIVideoCategoryJobRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListAIVideoCategoryJobResponse::fromMap($this->doRequest("ListAIVideoCategoryJob", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param ListAIVideoCategoryJobRequest $request
     * @return ListAIVideoCategoryJobResponse
     * @throws \Exception
     */
    public function listAIVideoCategoryJob(ListAIVideoCategoryJobRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listAIVideoCategoryJobWithOptions($request, $runtime);
    }

    /**
     * @param CreateOrderRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateOrderResponse
     * @throws \Exception
     */
    public function createOrderWithOptions(CreateOrderRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateOrderResponse::fromMap($this->doRequest("CreateOrder", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param CreateOrderRequest $request
     * @return CreateOrderResponse
     * @throws \Exception
     */
    public function createOrder(CreateOrderRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createOrderWithOptions($request, $runtime);
    }

    /**
     * @param GetBatchPlayInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return GetBatchPlayInfoResponse
     * @throws \Exception
     */
    public function getBatchPlayInfoWithOptions(GetBatchPlayInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetBatchPlayInfoResponse::fromMap($this->doRequest("GetBatchPlayInfo", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetBatchPlayInfoRequest $request
     * @return GetBatchPlayInfoResponse
     * @throws \Exception
     */
    public function getBatchPlayInfo(GetBatchPlayInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getBatchPlayInfoWithOptions($request, $runtime);
    }

    /**
     * @param SubmitAIVideoTerrorismRecogJobRequest $request
     * @param RuntimeOptions $runtime
     * @return SubmitAIVideoTerrorismRecogJobResponse
     * @throws \Exception
     */
    public function submitAIVideoTerrorismRecogJobWithOptions(SubmitAIVideoTerrorismRecogJobRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SubmitAIVideoTerrorismRecogJobResponse::fromMap($this->doRequest("SubmitAIVideoTerrorismRecogJob", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SubmitAIVideoTerrorismRecogJobRequest $request
     * @return SubmitAIVideoTerrorismRecogJobResponse
     * @throws \Exception
     */
    public function submitAIVideoTerrorismRecogJob(SubmitAIVideoTerrorismRecogJobRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->submitAIVideoTerrorismRecogJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitAIVideoCensorJobRequest $request
     * @param RuntimeOptions $runtime
     * @return SubmitAIVideoCensorJobResponse
     * @throws \Exception
     */
    public function submitAIVideoCensorJobWithOptions(SubmitAIVideoCensorJobRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SubmitAIVideoCensorJobResponse::fromMap($this->doRequest("SubmitAIVideoCensorJob", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SubmitAIVideoCensorJobRequest $request
     * @return SubmitAIVideoCensorJobResponse
     * @throws \Exception
     */
    public function submitAIVideoCensorJob(SubmitAIVideoCensorJobRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->submitAIVideoCensorJobWithOptions($request, $runtime);
    }

    /**
     * @param ListAIVideoTerrorismRecogJobRequest $request
     * @param RuntimeOptions $runtime
     * @return ListAIVideoTerrorismRecogJobResponse
     * @throws \Exception
     */
    public function listAIVideoTerrorismRecogJobWithOptions(ListAIVideoTerrorismRecogJobRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListAIVideoTerrorismRecogJobResponse::fromMap($this->doRequest("ListAIVideoTerrorismRecogJob", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param ListAIVideoTerrorismRecogJobRequest $request
     * @return ListAIVideoTerrorismRecogJobResponse
     * @throws \Exception
     */
    public function listAIVideoTerrorismRecogJob(ListAIVideoTerrorismRecogJobRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listAIVideoTerrorismRecogJobWithOptions($request, $runtime);
    }

    /**
     * @param ListAIVideoCensorJobRequest $request
     * @param RuntimeOptions $runtime
     * @return ListAIVideoCensorJobResponse
     * @throws \Exception
     */
    public function listAIVideoCensorJobWithOptions(ListAIVideoCensorJobRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListAIVideoCensorJobResponse::fromMap($this->doRequest("ListAIVideoCensorJob", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param ListAIVideoCensorJobRequest $request
     * @return ListAIVideoCensorJobResponse
     * @throws \Exception
     */
    public function listAIVideoCensorJob(ListAIVideoCensorJobRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listAIVideoCensorJobWithOptions($request, $runtime);
    }

    /**
     * @param DeleteStreamRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteStreamResponse
     * @throws \Exception
     */
    public function deleteStreamWithOptions(DeleteStreamRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteStreamResponse::fromMap($this->doRequest("DeleteStream", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DeleteStreamRequest $request
     * @return DeleteStreamResponse
     * @throws \Exception
     */
    public function deleteStream(DeleteStreamRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteStreamWithOptions($request, $runtime);
    }

    /**
     * @param SubmitSnapshotJobRequest $request
     * @param RuntimeOptions $runtime
     * @return SubmitSnapshotJobResponse
     * @throws \Exception
     */
    public function submitSnapshotJobWithOptions(SubmitSnapshotJobRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SubmitSnapshotJobResponse::fromMap($this->doRequest("SubmitSnapshotJob", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SubmitSnapshotJobRequest $request
     * @return SubmitSnapshotJobResponse
     * @throws \Exception
     */
    public function submitSnapshotJob(SubmitSnapshotJobRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->submitSnapshotJobWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainFlowDataRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeDomainFlowDataResponse
     * @throws \Exception
     */
    public function describeDomainFlowDataWithOptions(DescribeDomainFlowDataRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeDomainFlowDataResponse::fromMap($this->doRequest("DescribeDomainFlowData", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeDomainFlowDataRequest $request
     * @return DescribeDomainFlowDataResponse
     * @throws \Exception
     */
    public function describeDomainFlowData(DescribeDomainFlowDataRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeDomainFlowDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainBpsDataRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeDomainBpsDataResponse
     * @throws \Exception
     */
    public function describeDomainBpsDataWithOptions(DescribeDomainBpsDataRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeDomainBpsDataResponse::fromMap($this->doRequest("DescribeDomainBpsData", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeDomainBpsDataRequest $request
     * @return DescribeDomainBpsDataResponse
     * @throws \Exception
     */
    public function describeDomainBpsData(DescribeDomainBpsDataRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeDomainBpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCdnDomainLogsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeCdnDomainLogsResponse
     * @throws \Exception
     */
    public function describeCdnDomainLogsWithOptions(DescribeCdnDomainLogsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeCdnDomainLogsResponse::fromMap($this->doRequest("DescribeCdnDomainLogs", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeCdnDomainLogsRequest $request
     * @return DescribeCdnDomainLogsResponse
     * @throws \Exception
     */
    public function describeCdnDomainLogs(DescribeCdnDomainLogsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeCdnDomainLogsWithOptions($request, $runtime);
    }

    /**
     * @param SubmitAIVideoSummaryJobRequest $request
     * @param RuntimeOptions $runtime
     * @return SubmitAIVideoSummaryJobResponse
     * @throws \Exception
     */
    public function submitAIVideoSummaryJobWithOptions(SubmitAIVideoSummaryJobRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SubmitAIVideoSummaryJobResponse::fromMap($this->doRequest("SubmitAIVideoSummaryJob", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SubmitAIVideoSummaryJobRequest $request
     * @return SubmitAIVideoSummaryJobResponse
     * @throws \Exception
     */
    public function submitAIVideoSummaryJob(SubmitAIVideoSummaryJobRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->submitAIVideoSummaryJobWithOptions($request, $runtime);
    }

    /**
     * @param ListAIVideoSummaryJobRequest $request
     * @param RuntimeOptions $runtime
     * @return ListAIVideoSummaryJobResponse
     * @throws \Exception
     */
    public function listAIVideoSummaryJobWithOptions(ListAIVideoSummaryJobRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListAIVideoSummaryJobResponse::fromMap($this->doRequest("ListAIVideoSummaryJob", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param ListAIVideoSummaryJobRequest $request
     * @return ListAIVideoSummaryJobResponse
     * @throws \Exception
     */
    public function listAIVideoSummaryJob(ListAIVideoSummaryJobRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listAIVideoSummaryJobWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserVvTopByDayRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeUserVvTopByDayResponse
     * @throws \Exception
     */
    public function describeUserVvTopByDayWithOptions(DescribeUserVvTopByDayRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeUserVvTopByDayResponse::fromMap($this->doRequest("DescribeUserVvTopByDay", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeUserVvTopByDayRequest $request
     * @return DescribeUserVvTopByDayResponse
     * @throws \Exception
     */
    public function describeUserVvTopByDay(DescribeUserVvTopByDayRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeUserVvTopByDayWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserVvByVideoidRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeUserVvByVideoidResponse
     * @throws \Exception
     */
    public function describeUserVvByVideoidWithOptions(DescribeUserVvByVideoidRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeUserVvByVideoidResponse::fromMap($this->doRequest("DescribeUserVvByVideoid", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeUserVvByVideoidRequest $request
     * @return DescribeUserVvByVideoidResponse
     * @throws \Exception
     */
    public function describeUserVvByVideoid(DescribeUserVvByVideoidRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeUserVvByVideoidWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserVvByDayRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeUserVvByDayResponse
     * @throws \Exception
     */
    public function describeUserVvByDayWithOptions(DescribeUserVvByDayRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeUserVvByDayResponse::fromMap($this->doRequest("DescribeUserVvByDay", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeUserVvByDayRequest $request
     * @return DescribeUserVvByDayResponse
     * @throws \Exception
     */
    public function describeUserVvByDay(DescribeUserVvByDayRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeUserVvByDayWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserUvByDayRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeUserUvByDayResponse
     * @throws \Exception
     */
    public function describeUserUvByDayWithOptions(DescribeUserUvByDayRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeUserUvByDayResponse::fromMap($this->doRequest("DescribeUserUvByDay", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeUserUvByDayRequest $request
     * @return DescribeUserUvByDayResponse
     * @throws \Exception
     */
    public function describeUserUvByDay(DescribeUserUvByDayRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeUserUvByDayWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserTimeRangeByDayRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeUserTimeRangeByDayResponse
     * @throws \Exception
     */
    public function describeUserTimeRangeByDayWithOptions(DescribeUserTimeRangeByDayRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeUserTimeRangeByDayResponse::fromMap($this->doRequest("DescribeUserTimeRangeByDay", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeUserTimeRangeByDayRequest $request
     * @return DescribeUserTimeRangeByDayResponse
     * @throws \Exception
     */
    public function describeUserTimeRangeByDay(DescribeUserTimeRangeByDayRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeUserTimeRangeByDayWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserAvgTimeByDayRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeUserAvgTimeByDayResponse
     * @throws \Exception
     */
    public function describeUserAvgTimeByDayWithOptions(DescribeUserAvgTimeByDayRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeUserAvgTimeByDayResponse::fromMap($this->doRequest("DescribeUserAvgTimeByDay", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeUserAvgTimeByDayRequest $request
     * @return DescribeUserAvgTimeByDayResponse
     * @throws \Exception
     */
    public function describeUserAvgTimeByDay(DescribeUserAvgTimeByDayRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeUserAvgTimeByDayWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserAvgCountByDayRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeUserAvgCountByDayResponse
     * @throws \Exception
     */
    public function describeUserAvgCountByDayWithOptions(DescribeUserAvgCountByDayRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeUserAvgCountByDayResponse::fromMap($this->doRequest("DescribeUserAvgCountByDay", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeUserAvgCountByDayRequest $request
     * @return DescribeUserAvgCountByDayResponse
     * @throws \Exception
     */
    public function describeUserAvgCountByDay(DescribeUserAvgCountByDayRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeUserAvgCountByDayWithOptions($request, $runtime);
    }

    /**
     * @param SetDefaultTemplateGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return SetDefaultTemplateGroupResponse
     * @throws \Exception
     */
    public function setDefaultTemplateGroupWithOptions(SetDefaultTemplateGroupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SetDefaultTemplateGroupResponse::fromMap($this->doRequest("SetDefaultTemplateGroup", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SetDefaultTemplateGroupRequest $request
     * @return SetDefaultTemplateGroupResponse
     * @throws \Exception
     */
    public function setDefaultTemplateGroup(SetDefaultTemplateGroupRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->setDefaultTemplateGroupWithOptions($request, $runtime);
    }

    /**
     * @param SubmitAIASRJobRequest $request
     * @param RuntimeOptions $runtime
     * @return SubmitAIASRJobResponse
     * @throws \Exception
     */
    public function submitAIASRJobWithOptions(SubmitAIASRJobRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SubmitAIASRJobResponse::fromMap($this->doRequest("SubmitAIASRJob", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SubmitAIASRJobRequest $request
     * @return SubmitAIASRJobResponse
     * @throws \Exception
     */
    public function submitAIASRJob(SubmitAIASRJobRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->submitAIASRJobWithOptions($request, $runtime);
    }

    /**
     * @param ListAIASRJobRequest $request
     * @param RuntimeOptions $runtime
     * @return ListAIASRJobResponse
     * @throws \Exception
     */
    public function listAIASRJobWithOptions(ListAIASRJobRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListAIASRJobResponse::fromMap($this->doRequest("ListAIASRJob", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param ListAIASRJobRequest $request
     * @return ListAIASRJobResponse
     * @throws \Exception
     */
    public function listAIASRJob(ListAIASRJobRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listAIASRJobWithOptions($request, $runtime);
    }

    /**
     * @param GetMezzanineInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return GetMezzanineInfoResponse
     * @throws \Exception
     */
    public function getMezzanineInfoWithOptions(GetMezzanineInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetMezzanineInfoResponse::fromMap($this->doRequest("GetMezzanineInfo", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetMezzanineInfoRequest $request
     * @return GetMezzanineInfoResponse
     * @throws \Exception
     */
    public function getMezzanineInfo(GetMezzanineInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getMezzanineInfoWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTemplateGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateTemplateGroupResponse
     * @throws \Exception
     */
    public function updateTemplateGroupWithOptions(UpdateTemplateGroupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateTemplateGroupResponse::fromMap($this->doRequest("UpdateTemplateGroup", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UpdateTemplateGroupRequest $request
     * @return UpdateTemplateGroupResponse
     * @throws \Exception
     */
    public function updateTemplateGroup(UpdateTemplateGroupRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateTemplateGroupWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCustomTemplateAndGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateCustomTemplateAndGroupResponse
     * @throws \Exception
     */
    public function updateCustomTemplateAndGroupWithOptions(UpdateCustomTemplateAndGroupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateCustomTemplateAndGroupResponse::fromMap($this->doRequest("UpdateCustomTemplateAndGroup", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UpdateCustomTemplateAndGroupRequest $request
     * @return UpdateCustomTemplateAndGroupResponse
     * @throws \Exception
     */
    public function updateCustomTemplateAndGroup(UpdateCustomTemplateAndGroupRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateCustomTemplateAndGroupWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCustomTemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateCustomTemplateResponse
     * @throws \Exception
     */
    public function updateCustomTemplateWithOptions(UpdateCustomTemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateCustomTemplateResponse::fromMap($this->doRequest("UpdateCustomTemplate", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UpdateCustomTemplateRequest $request
     * @return UpdateCustomTemplateResponse
     * @throws \Exception
     */
    public function updateCustomTemplate(UpdateCustomTemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateCustomTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ListTemplateGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return ListTemplateGroupResponse
     * @throws \Exception
     */
    public function listTemplateGroupWithOptions(ListTemplateGroupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListTemplateGroupResponse::fromMap($this->doRequest("ListTemplateGroup", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param ListTemplateGroupRequest $request
     * @return ListTemplateGroupResponse
     * @throws \Exception
     */
    public function listTemplateGroup(ListTemplateGroupRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listTemplateGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListCustomTemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return ListCustomTemplateResponse
     * @throws \Exception
     */
    public function listCustomTemplateWithOptions(ListCustomTemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListCustomTemplateResponse::fromMap($this->doRequest("ListCustomTemplate", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param ListCustomTemplateRequest $request
     * @return ListCustomTemplateResponse
     * @throws \Exception
     */
    public function listCustomTemplate(ListCustomTemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listCustomTemplateWithOptions($request, $runtime);
    }

    /**
     * @param InitSystemTemplateGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return InitSystemTemplateGroupResponse
     * @throws \Exception
     */
    public function initSystemTemplateGroupWithOptions(InitSystemTemplateGroupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return InitSystemTemplateGroupResponse::fromMap($this->doRequest("InitSystemTemplateGroup", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param InitSystemTemplateGroupRequest $request
     * @return InitSystemTemplateGroupResponse
     * @throws \Exception
     */
    public function initSystemTemplateGroup(InitSystemTemplateGroupRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->initSystemTemplateGroupWithOptions($request, $runtime);
    }

    /**
     * @param InitCustomerWorkFlowRequest $request
     * @param RuntimeOptions $runtime
     * @return InitCustomerWorkFlowResponse
     * @throws \Exception
     */
    public function initCustomerWorkFlowWithOptions(InitCustomerWorkFlowRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return InitCustomerWorkFlowResponse::fromMap($this->doRequest("InitCustomerWorkFlow", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param InitCustomerWorkFlowRequest $request
     * @return InitCustomerWorkFlowResponse
     * @throws \Exception
     */
    public function initCustomerWorkFlow(InitCustomerWorkFlowRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->initCustomerWorkFlowWithOptions($request, $runtime);
    }

    /**
     * @param InitCustomerWithSystemTemplateAndGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return InitCustomerWithSystemTemplateAndGroupResponse
     * @throws \Exception
     */
    public function initCustomerWithSystemTemplateAndGroupWithOptions(InitCustomerWithSystemTemplateAndGroupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return InitCustomerWithSystemTemplateAndGroupResponse::fromMap($this->doRequest("InitCustomerWithSystemTemplateAndGroup", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param InitCustomerWithSystemTemplateAndGroupRequest $request
     * @return InitCustomerWithSystemTemplateAndGroupResponse
     * @throws \Exception
     */
    public function initCustomerWithSystemTemplateAndGroup(InitCustomerWithSystemTemplateAndGroupRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->initCustomerWithSystemTemplateAndGroupWithOptions($request, $runtime);
    }

    /**
     * @param GetTemplateGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return GetTemplateGroupResponse
     * @throws \Exception
     */
    public function getTemplateGroupWithOptions(GetTemplateGroupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetTemplateGroupResponse::fromMap($this->doRequest("GetTemplateGroup", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetTemplateGroupRequest $request
     * @return GetTemplateGroupResponse
     * @throws \Exception
     */
    public function getTemplateGroup(GetTemplateGroupRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getTemplateGroupWithOptions($request, $runtime);
    }

    /**
     * @param GetCustomTemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return GetCustomTemplateResponse
     * @throws \Exception
     */
    public function getCustomTemplateWithOptions(GetCustomTemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetCustomTemplateResponse::fromMap($this->doRequest("GetCustomTemplate", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetCustomTemplateRequest $request
     * @return GetCustomTemplateResponse
     * @throws \Exception
     */
    public function getCustomTemplate(GetCustomTemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getCustomTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTemplateGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteTemplateGroupResponse
     * @throws \Exception
     */
    public function deleteTemplateGroupWithOptions(DeleteTemplateGroupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteTemplateGroupResponse::fromMap($this->doRequest("DeleteTemplateGroup", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DeleteTemplateGroupRequest $request
     * @return DeleteTemplateGroupResponse
     * @throws \Exception
     */
    public function deleteTemplateGroup(DeleteTemplateGroupRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteTemplateGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteInitCustomTemplateInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteInitCustomTemplateInfoResponse
     * @throws \Exception
     */
    public function deleteInitCustomTemplateInfoWithOptions(DeleteInitCustomTemplateInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteInitCustomTemplateInfoResponse::fromMap($this->doRequest("DeleteInitCustomTemplateInfo", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DeleteInitCustomTemplateInfoRequest $request
     * @return DeleteInitCustomTemplateInfoResponse
     * @throws \Exception
     */
    public function deleteInitCustomTemplateInfo(DeleteInitCustomTemplateInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteInitCustomTemplateInfoWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCustomTemplateAndGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteCustomTemplateAndGroupResponse
     * @throws \Exception
     */
    public function deleteCustomTemplateAndGroupWithOptions(DeleteCustomTemplateAndGroupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteCustomTemplateAndGroupResponse::fromMap($this->doRequest("DeleteCustomTemplateAndGroup", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DeleteCustomTemplateAndGroupRequest $request
     * @return DeleteCustomTemplateAndGroupResponse
     * @throws \Exception
     */
    public function deleteCustomTemplateAndGroup(DeleteCustomTemplateAndGroupRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteCustomTemplateAndGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCustomTemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteCustomTemplateResponse
     * @throws \Exception
     */
    public function deleteCustomTemplateWithOptions(DeleteCustomTemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteCustomTemplateResponse::fromMap($this->doRequest("DeleteCustomTemplate", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DeleteCustomTemplateRequest $request
     * @return DeleteCustomTemplateResponse
     * @throws \Exception
     */
    public function deleteCustomTemplate(DeleteCustomTemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteCustomTemplateWithOptions($request, $runtime);
    }

    /**
     * @param AddTemplateGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return AddTemplateGroupResponse
     * @throws \Exception
     */
    public function addTemplateGroupWithOptions(AddTemplateGroupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddTemplateGroupResponse::fromMap($this->doRequest("AddTemplateGroup", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param AddTemplateGroupRequest $request
     * @return AddTemplateGroupResponse
     * @throws \Exception
     */
    public function addTemplateGroup(AddTemplateGroupRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addTemplateGroupWithOptions($request, $runtime);
    }

    /**
     * @param AddCustomTemplateAndGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return AddCustomTemplateAndGroupResponse
     * @throws \Exception
     */
    public function addCustomTemplateAndGroupWithOptions(AddCustomTemplateAndGroupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddCustomTemplateAndGroupResponse::fromMap($this->doRequest("AddCustomTemplateAndGroup", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param AddCustomTemplateAndGroupRequest $request
     * @return AddCustomTemplateAndGroupResponse
     * @throws \Exception
     */
    public function addCustomTemplateAndGroup(AddCustomTemplateAndGroupRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addCustomTemplateAndGroupWithOptions($request, $runtime);
    }

    /**
     * @param AddCustomTemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return AddCustomTemplateResponse
     * @throws \Exception
     */
    public function addCustomTemplateWithOptions(AddCustomTemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddCustomTemplateResponse::fromMap($this->doRequest("AddCustomTemplate", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param AddCustomTemplateRequest $request
     * @return AddCustomTemplateResponse
     * @throws \Exception
     */
    public function addCustomTemplate(AddCustomTemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addCustomTemplateWithOptions($request, $runtime);
    }

    /**
     * @param SubmitAIVideoPornRecogJobRequest $request
     * @param RuntimeOptions $runtime
     * @return SubmitAIVideoPornRecogJobResponse
     * @throws \Exception
     */
    public function submitAIVideoPornRecogJobWithOptions(SubmitAIVideoPornRecogJobRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SubmitAIVideoPornRecogJobResponse::fromMap($this->doRequest("SubmitAIVideoPornRecogJob", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SubmitAIVideoPornRecogJobRequest $request
     * @return SubmitAIVideoPornRecogJobResponse
     * @throws \Exception
     */
    public function submitAIVideoPornRecogJob(SubmitAIVideoPornRecogJobRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->submitAIVideoPornRecogJobWithOptions($request, $runtime);
    }

    /**
     * @param ListAIVideoPornRecogJobRequest $request
     * @param RuntimeOptions $runtime
     * @return ListAIVideoPornRecogJobResponse
     * @throws \Exception
     */
    public function listAIVideoPornRecogJobWithOptions(ListAIVideoPornRecogJobRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListAIVideoPornRecogJobResponse::fromMap($this->doRequest("ListAIVideoPornRecogJob", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param ListAIVideoPornRecogJobRequest $request
     * @return ListAIVideoPornRecogJobResponse
     * @throws \Exception
     */
    public function listAIVideoPornRecogJob(ListAIVideoPornRecogJobRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listAIVideoPornRecogJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitAIVideoCoverJobRequest $request
     * @param RuntimeOptions $runtime
     * @return SubmitAIVideoCoverJobResponse
     * @throws \Exception
     */
    public function submitAIVideoCoverJobWithOptions(SubmitAIVideoCoverJobRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SubmitAIVideoCoverJobResponse::fromMap($this->doRequest("SubmitAIVideoCoverJob", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SubmitAIVideoCoverJobRequest $request
     * @return SubmitAIVideoCoverJobResponse
     * @throws \Exception
     */
    public function submitAIVideoCoverJob(SubmitAIVideoCoverJobRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->submitAIVideoCoverJobWithOptions($request, $runtime);
    }

    /**
     * @param ListAIVideoCoverJobRequest $request
     * @param RuntimeOptions $runtime
     * @return ListAIVideoCoverJobResponse
     * @throws \Exception
     */
    public function listAIVideoCoverJobWithOptions(ListAIVideoCoverJobRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListAIVideoCoverJobResponse::fromMap($this->doRequest("ListAIVideoCoverJob", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param ListAIVideoCoverJobRequest $request
     * @return ListAIVideoCoverJobResponse
     * @throws \Exception
     */
    public function listAIVideoCoverJob(ListAIVideoCoverJobRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listAIVideoCoverJobWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAudioTemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteAudioTemplateResponse
     * @throws \Exception
     */
    public function deleteAudioTemplateWithOptions(DeleteAudioTemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteAudioTemplateResponse::fromMap($this->doRequest("DeleteAudioTemplate", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DeleteAudioTemplateRequest $request
     * @return DeleteAudioTemplateResponse
     * @throws \Exception
     */
    public function deleteAudioTemplate(DeleteAudioTemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteAudioTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAudioConfigRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteAudioConfigResponse
     * @throws \Exception
     */
    public function deleteAudioConfigWithOptions(DeleteAudioConfigRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteAudioConfigResponse::fromMap($this->doRequest("DeleteAudioConfig", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DeleteAudioConfigRequest $request
     * @return DeleteAudioConfigResponse
     * @throws \Exception
     */
    public function deleteAudioConfig(DeleteAudioConfigRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteAudioConfigWithOptions($request, $runtime);
    }

    /**
     * @param AddOriginTemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return AddOriginTemplateResponse
     * @throws \Exception
     */
    public function addOriginTemplateWithOptions(AddOriginTemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddOriginTemplateResponse::fromMap($this->doRequest("AddOriginTemplate", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param AddOriginTemplateRequest $request
     * @return AddOriginTemplateResponse
     * @throws \Exception
     */
    public function addOriginTemplate(AddOriginTemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addOriginTemplateWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMaterialStatusRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateMaterialStatusResponse
     * @throws \Exception
     */
    public function updateMaterialStatusWithOptions(UpdateMaterialStatusRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateMaterialStatusResponse::fromMap($this->doRequest("UpdateMaterialStatus", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UpdateMaterialStatusRequest $request
     * @return UpdateMaterialStatusResponse
     * @throws \Exception
     */
    public function updateMaterialStatus(UpdateMaterialStatusRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateMaterialStatusWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMaterialRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateMaterialResponse
     * @throws \Exception
     */
    public function updateMaterialWithOptions(UpdateMaterialRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateMaterialResponse::fromMap($this->doRequest("UpdateMaterial", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UpdateMaterialRequest $request
     * @return UpdateMaterialResponse
     * @throws \Exception
     */
    public function updateMaterial(UpdateMaterialRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateMaterialWithOptions($request, $runtime);
    }

    /**
     * @param UpdateEditingProjectStatusRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateEditingProjectStatusResponse
     * @throws \Exception
     */
    public function updateEditingProjectStatusWithOptions(UpdateEditingProjectStatusRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateEditingProjectStatusResponse::fromMap($this->doRequest("UpdateEditingProjectStatus", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UpdateEditingProjectStatusRequest $request
     * @return UpdateEditingProjectStatusResponse
     * @throws \Exception
     */
    public function updateEditingProjectStatus(UpdateEditingProjectStatusRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateEditingProjectStatusWithOptions($request, $runtime);
    }

    /**
     * @param UpdateEditingProjectRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateEditingProjectResponse
     * @throws \Exception
     */
    public function updateEditingProjectWithOptions(UpdateEditingProjectRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateEditingProjectResponse::fromMap($this->doRequest("UpdateEditingProject", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UpdateEditingProjectRequest $request
     * @return UpdateEditingProjectResponse
     * @throws \Exception
     */
    public function updateEditingProject(UpdateEditingProjectRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateEditingProjectWithOptions($request, $runtime);
    }

    /**
     * @param SyncMaterialRequest $request
     * @param RuntimeOptions $runtime
     * @return SyncMaterialResponse
     * @throws \Exception
     */
    public function syncMaterialWithOptions(SyncMaterialRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SyncMaterialResponse::fromMap($this->doRequest("SyncMaterial", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SyncMaterialRequest $request
     * @return SyncMaterialResponse
     * @throws \Exception
     */
    public function syncMaterial(SyncMaterialRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->syncMaterialWithOptions($request, $runtime);
    }

    /**
     * @param SetEditingProjectMaterialsRequest $request
     * @param RuntimeOptions $runtime
     * @return SetEditingProjectMaterialsResponse
     * @throws \Exception
     */
    public function setEditingProjectMaterialsWithOptions(SetEditingProjectMaterialsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SetEditingProjectMaterialsResponse::fromMap($this->doRequest("SetEditingProjectMaterials", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SetEditingProjectMaterialsRequest $request
     * @return SetEditingProjectMaterialsResponse
     * @throws \Exception
     */
    public function setEditingProjectMaterials(SetEditingProjectMaterialsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->setEditingProjectMaterialsWithOptions($request, $runtime);
    }

    /**
     * @param SearchMaterialRequest $request
     * @param RuntimeOptions $runtime
     * @return SearchMaterialResponse
     * @throws \Exception
     */
    public function searchMaterialWithOptions(SearchMaterialRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SearchMaterialResponse::fromMap($this->doRequest("SearchMaterial", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SearchMaterialRequest $request
     * @return SearchMaterialResponse
     * @throws \Exception
     */
    public function searchMaterial(SearchMaterialRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->searchMaterialWithOptions($request, $runtime);
    }

    /**
     * @param SearchEditingProjectRequest $request
     * @param RuntimeOptions $runtime
     * @return SearchEditingProjectResponse
     * @throws \Exception
     */
    public function searchEditingProjectWithOptions(SearchEditingProjectRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SearchEditingProjectResponse::fromMap($this->doRequest("SearchEditingProject", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SearchEditingProjectRequest $request
     * @return SearchEditingProjectResponse
     * @throws \Exception
     */
    public function searchEditingProject(SearchEditingProjectRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->searchEditingProjectWithOptions($request, $runtime);
    }

    /**
     * @param RefreshUploadMaterialTokenRequest $request
     * @param RuntimeOptions $runtime
     * @return RefreshUploadMaterialTokenResponse
     * @throws \Exception
     */
    public function refreshUploadMaterialTokenWithOptions(RefreshUploadMaterialTokenRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return RefreshUploadMaterialTokenResponse::fromMap($this->doRequest("RefreshUploadMaterialToken", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param RefreshUploadMaterialTokenRequest $request
     * @return RefreshUploadMaterialTokenResponse
     * @throws \Exception
     */
    public function refreshUploadMaterialToken(RefreshUploadMaterialTokenRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->refreshUploadMaterialTokenWithOptions($request, $runtime);
    }

    /**
     * @param ProduceEditingProjectVideoRequest $request
     * @param RuntimeOptions $runtime
     * @return ProduceEditingProjectVideoResponse
     * @throws \Exception
     */
    public function produceEditingProjectVideoWithOptions(ProduceEditingProjectVideoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ProduceEditingProjectVideoResponse::fromMap($this->doRequest("ProduceEditingProjectVideo", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param ProduceEditingProjectVideoRequest $request
     * @return ProduceEditingProjectVideoResponse
     * @throws \Exception
     */
    public function produceEditingProjectVideo(ProduceEditingProjectVideoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->produceEditingProjectVideoWithOptions($request, $runtime);
    }

    /**
     * @param GetMaterialListRequest $request
     * @param RuntimeOptions $runtime
     * @return GetMaterialListResponse
     * @throws \Exception
     */
    public function getMaterialListWithOptions(GetMaterialListRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetMaterialListResponse::fromMap($this->doRequest("GetMaterialList", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetMaterialListRequest $request
     * @return GetMaterialListResponse
     * @throws \Exception
     */
    public function getMaterialList(GetMaterialListRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getMaterialListWithOptions($request, $runtime);
    }

    /**
     * @param GetMaterialRequest $request
     * @param RuntimeOptions $runtime
     * @return GetMaterialResponse
     * @throws \Exception
     */
    public function getMaterialWithOptions(GetMaterialRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetMaterialResponse::fromMap($this->doRequest("GetMaterial", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetMaterialRequest $request
     * @return GetMaterialResponse
     * @throws \Exception
     */
    public function getMaterial(GetMaterialRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getMaterialWithOptions($request, $runtime);
    }

    /**
     * @param GetEditingProjectMaterialsRequest $request
     * @param RuntimeOptions $runtime
     * @return GetEditingProjectMaterialsResponse
     * @throws \Exception
     */
    public function getEditingProjectMaterialsWithOptions(GetEditingProjectMaterialsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetEditingProjectMaterialsResponse::fromMap($this->doRequest("GetEditingProjectMaterials", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetEditingProjectMaterialsRequest $request
     * @return GetEditingProjectMaterialsResponse
     * @throws \Exception
     */
    public function getEditingProjectMaterials(GetEditingProjectMaterialsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getEditingProjectMaterialsWithOptions($request, $runtime);
    }

    /**
     * @param GetEditingProjectListRequest $request
     * @param RuntimeOptions $runtime
     * @return GetEditingProjectListResponse
     * @throws \Exception
     */
    public function getEditingProjectListWithOptions(GetEditingProjectListRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetEditingProjectListResponse::fromMap($this->doRequest("GetEditingProjectList", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetEditingProjectListRequest $request
     * @return GetEditingProjectListResponse
     * @throws \Exception
     */
    public function getEditingProjectList(GetEditingProjectListRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getEditingProjectListWithOptions($request, $runtime);
    }

    /**
     * @param GetEditingProjectRequest $request
     * @param RuntimeOptions $runtime
     * @return GetEditingProjectResponse
     * @throws \Exception
     */
    public function getEditingProjectWithOptions(GetEditingProjectRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetEditingProjectResponse::fromMap($this->doRequest("GetEditingProject", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetEditingProjectRequest $request
     * @return GetEditingProjectResponse
     * @throws \Exception
     */
    public function getEditingProject(GetEditingProjectRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getEditingProjectWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMaterialRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteMaterialResponse
     * @throws \Exception
     */
    public function deleteMaterialWithOptions(DeleteMaterialRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteMaterialResponse::fromMap($this->doRequest("DeleteMaterial", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DeleteMaterialRequest $request
     * @return DeleteMaterialResponse
     * @throws \Exception
     */
    public function deleteMaterial(DeleteMaterialRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteMaterialWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEditingProjectRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteEditingProjectResponse
     * @throws \Exception
     */
    public function deleteEditingProjectWithOptions(DeleteEditingProjectRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteEditingProjectResponse::fromMap($this->doRequest("DeleteEditingProject", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DeleteEditingProjectRequest $request
     * @return DeleteEditingProjectResponse
     * @throws \Exception
     */
    public function deleteEditingProject(DeleteEditingProjectRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteEditingProjectWithOptions($request, $runtime);
    }

    /**
     * @param CreateUploadMaterialRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateUploadMaterialResponse
     * @throws \Exception
     */
    public function createUploadMaterialWithOptions(CreateUploadMaterialRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateUploadMaterialResponse::fromMap($this->doRequest("CreateUploadMaterial", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param CreateUploadMaterialRequest $request
     * @return CreateUploadMaterialResponse
     * @throws \Exception
     */
    public function createUploadMaterial(CreateUploadMaterialRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createUploadMaterialWithOptions($request, $runtime);
    }

    /**
     * @param AddEditingProjectRequest $request
     * @param RuntimeOptions $runtime
     * @return AddEditingProjectResponse
     * @throws \Exception
     */
    public function addEditingProjectWithOptions(AddEditingProjectRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddEditingProjectResponse::fromMap($this->doRequest("AddEditingProject", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param AddEditingProjectRequest $request
     * @return AddEditingProjectResponse
     * @throws \Exception
     */
    public function addEditingProject(AddEditingProjectRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addEditingProjectWithOptions($request, $runtime);
    }

    /**
     * @param GetCategoriesRequest $request
     * @param RuntimeOptions $runtime
     * @return GetCategoriesResponse
     * @throws \Exception
     */
    public function getCategoriesWithOptions(GetCategoriesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetCategoriesResponse::fromMap($this->doRequest("GetCategories", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetCategoriesRequest $request
     * @return GetCategoriesResponse
     * @throws \Exception
     */
    public function getCategories(GetCategoriesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getCategoriesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCategoryRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateCategoryResponse
     * @throws \Exception
     */
    public function updateCategoryWithOptions(UpdateCategoryRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateCategoryResponse::fromMap($this->doRequest("UpdateCategory", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UpdateCategoryRequest $request
     * @return UpdateCategoryResponse
     * @throws \Exception
     */
    public function updateCategory(UpdateCategoryRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateCategoryWithOptions($request, $runtime);
    }

    /**
     * @param GetAudioTemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return GetAudioTemplateResponse
     * @throws \Exception
     */
    public function getAudioTemplateWithOptions(GetAudioTemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetAudioTemplateResponse::fromMap($this->doRequest("GetAudioTemplate", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetAudioTemplateRequest $request
     * @return GetAudioTemplateResponse
     * @throws \Exception
     */
    public function getAudioTemplate(GetAudioTemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getAudioTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ListAudioTemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return ListAudioTemplateResponse
     * @throws \Exception
     */
    public function listAudioTemplateWithOptions(ListAudioTemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListAudioTemplateResponse::fromMap($this->doRequest("ListAudioTemplate", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param ListAudioTemplateRequest $request
     * @return ListAudioTemplateResponse
     * @throws \Exception
     */
    public function listAudioTemplate(ListAudioTemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listAudioTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ListAudioConfigRequest $request
     * @param RuntimeOptions $runtime
     * @return ListAudioConfigResponse
     * @throws \Exception
     */
    public function listAudioConfigWithOptions(ListAudioConfigRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListAudioConfigResponse::fromMap($this->doRequest("ListAudioConfig", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param ListAudioConfigRequest $request
     * @return ListAudioConfigResponse
     * @throws \Exception
     */
    public function listAudioConfig(ListAudioConfigRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listAudioConfigWithOptions($request, $runtime);
    }

    /**
     * @param RefreshMaterialWorkFlowRequest $request
     * @param RuntimeOptions $runtime
     * @return RefreshMaterialWorkFlowResponse
     * @throws \Exception
     */
    public function refreshMaterialWorkFlowWithOptions(RefreshMaterialWorkFlowRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return RefreshMaterialWorkFlowResponse::fromMap($this->doRequest("RefreshMaterialWorkFlow", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param RefreshMaterialWorkFlowRequest $request
     * @return RefreshMaterialWorkFlowResponse
     * @throws \Exception
     */
    public function refreshMaterialWorkFlow(RefreshMaterialWorkFlowRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->refreshMaterialWorkFlowWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAudioConfigRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateAudioConfigResponse
     * @throws \Exception
     */
    public function updateAudioConfigWithOptions(UpdateAudioConfigRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateAudioConfigResponse::fromMap($this->doRequest("UpdateAudioConfig", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UpdateAudioConfigRequest $request
     * @return UpdateAudioConfigResponse
     * @throws \Exception
     */
    public function updateAudioConfig(UpdateAudioConfigRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateAudioConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAudioTemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateAudioTemplateResponse
     * @throws \Exception
     */
    public function updateAudioTemplateWithOptions(UpdateAudioTemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateAudioTemplateResponse::fromMap($this->doRequest("UpdateAudioTemplate", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UpdateAudioTemplateRequest $request
     * @return UpdateAudioTemplateResponse
     * @throws \Exception
     */
    public function updateAudioTemplate(UpdateAudioTemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateAudioTemplateWithOptions($request, $runtime);
    }

    /**
     * @param AddAudioConfigRequest $request
     * @param RuntimeOptions $runtime
     * @return AddAudioConfigResponse
     * @throws \Exception
     */
    public function addAudioConfigWithOptions(AddAudioConfigRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddAudioConfigResponse::fromMap($this->doRequest("AddAudioConfig", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param AddAudioConfigRequest $request
     * @return AddAudioConfigResponse
     * @throws \Exception
     */
    public function addAudioConfig(AddAudioConfigRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addAudioConfigWithOptions($request, $runtime);
    }

    /**
     * @param AddAudioTemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return AddAudioTemplateResponse
     * @throws \Exception
     */
    public function addAudioTemplateWithOptions(AddAudioTemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddAudioTemplateResponse::fromMap($this->doRequest("AddAudioTemplate", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param AddAudioTemplateRequest $request
     * @return AddAudioTemplateResponse
     * @throws \Exception
     */
    public function addAudioTemplate(AddAudioTemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addAudioTemplateWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSpecifyCustomerTemplateConfigRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateSpecifyCustomerTemplateConfigResponse
     * @throws \Exception
     */
    public function updateSpecifyCustomerTemplateConfigWithOptions(UpdateSpecifyCustomerTemplateConfigRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateSpecifyCustomerTemplateConfigResponse::fromMap($this->doRequest("UpdateSpecifyCustomerTemplateConfig", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UpdateSpecifyCustomerTemplateConfigRequest $request
     * @return UpdateSpecifyCustomerTemplateConfigResponse
     * @throws \Exception
     */
    public function updateSpecifyCustomerTemplateConfig(UpdateSpecifyCustomerTemplateConfigRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateSpecifyCustomerTemplateConfigWithOptions($request, $runtime);
    }

    /**
     * @param GetPlayInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return GetPlayInfoResponse
     * @throws \Exception
     */
    public function getPlayInfoWithOptions(GetPlayInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetPlayInfoResponse::fromMap($this->doRequest("GetPlayInfo", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetPlayInfoRequest $request
     * @return GetPlayInfoResponse
     * @throws \Exception
     */
    public function getPlayInfo(GetPlayInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getPlayInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetVideoConfigRequest $request
     * @param RuntimeOptions $runtime
     * @return GetVideoConfigResponse
     * @throws \Exception
     */
    public function getVideoConfigWithOptions(GetVideoConfigRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetVideoConfigResponse::fromMap($this->doRequest("GetVideoConfig", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetVideoConfigRequest $request
     * @return GetVideoConfigResponse
     * @throws \Exception
     */
    public function getVideoConfig(GetVideoConfigRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getVideoConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetCustomerConfigRequest $request
     * @param RuntimeOptions $runtime
     * @return SetCustomerConfigResponse
     * @throws \Exception
     */
    public function setCustomerConfigWithOptions(SetCustomerConfigRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SetCustomerConfigResponse::fromMap($this->doRequest("SetCustomerConfig", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SetCustomerConfigRequest $request
     * @return SetCustomerConfigResponse
     * @throws \Exception
     */
    public function setCustomerConfig(SetCustomerConfigRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->setCustomerConfigWithOptions($request, $runtime);
    }

    /**
     * @param GetCustomerConfigRequest $request
     * @param RuntimeOptions $runtime
     * @return GetCustomerConfigResponse
     * @throws \Exception
     */
    public function getCustomerConfigWithOptions(GetCustomerConfigRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetCustomerConfigResponse::fromMap($this->doRequest("GetCustomerConfig", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetCustomerConfigRequest $request
     * @return GetCustomerConfigResponse
     * @throws \Exception
     */
    public function getCustomerConfig(GetCustomerConfigRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getCustomerConfigWithOptions($request, $runtime);
    }

    /**
     * @param CreateUploadImageRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateUploadImageResponse
     * @throws \Exception
     */
    public function createUploadImageWithOptions(CreateUploadImageRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateUploadImageResponse::fromMap($this->doRequest("CreateUploadImage", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param CreateUploadImageRequest $request
     * @return CreateUploadImageResponse
     * @throws \Exception
     */
    public function createUploadImage(CreateUploadImageRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createUploadImageWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSnapshotRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateSnapshotResponse
     * @throws \Exception
     */
    public function updateSnapshotWithOptions(UpdateSnapshotRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateSnapshotResponse::fromMap($this->doRequest("UpdateSnapshot", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UpdateSnapshotRequest $request
     * @return UpdateSnapshotResponse
     * @throws \Exception
     */
    public function updateSnapshot(UpdateSnapshotRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateSnapshotWithOptions($request, $runtime);
    }

    /**
     * @param RefreshWorkFlowRequest $request
     * @param RuntimeOptions $runtime
     * @return RefreshWorkFlowResponse
     * @throws \Exception
     */
    public function refreshWorkFlowWithOptions(RefreshWorkFlowRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return RefreshWorkFlowResponse::fromMap($this->doRequest("RefreshWorkFlow", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param RefreshWorkFlowRequest $request
     * @return RefreshWorkFlowResponse
     * @throws \Exception
     */
    public function refreshWorkFlow(RefreshWorkFlowRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->refreshWorkFlowWithOptions($request, $runtime);
    }

    /**
     * @param AddPipelineRequest $request
     * @param RuntimeOptions $runtime
     * @return AddPipelineResponse
     * @throws \Exception
     */
    public function addPipelineWithOptions(AddPipelineRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddPipelineResponse::fromMap($this->doRequest("AddPipeline", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param AddPipelineRequest $request
     * @return AddPipelineResponse
     * @throws \Exception
     */
    public function addPipeline(AddPipelineRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addPipelineWithOptions($request, $runtime);
    }

    /**
     * @param GetCheckChannelRequest $request
     * @param RuntimeOptions $runtime
     * @return GetCheckChannelResponse
     * @throws \Exception
     */
    public function getCheckChannelWithOptions(GetCheckChannelRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetCheckChannelResponse::fromMap($this->doRequest("GetCheckChannel", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetCheckChannelRequest $request
     * @return GetCheckChannelResponse
     * @throws \Exception
     */
    public function getCheckChannel(GetCheckChannelRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getCheckChannelWithOptions($request, $runtime);
    }

    /**
     * @param SetCheckChannelRequest $request
     * @param RuntimeOptions $runtime
     * @return SetCheckChannelResponse
     * @throws \Exception
     */
    public function setCheckChannelWithOptions(SetCheckChannelRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SetCheckChannelResponse::fromMap($this->doRequest("SetCheckChannel", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SetCheckChannelRequest $request
     * @return SetCheckChannelResponse
     * @throws \Exception
     */
    public function setCheckChannel(SetCheckChannelRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->setCheckChannelWithOptions($request, $runtime);
    }

    /**
     * @param GetPlayStatisRequest $request
     * @param RuntimeOptions $runtime
     * @return GetPlayStatisResponse
     * @throws \Exception
     */
    public function getPlayStatisWithOptions(GetPlayStatisRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetPlayStatisResponse::fromMap($this->doRequest("GetPlayStatis", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetPlayStatisRequest $request
     * @return GetPlayStatisResponse
     * @throws \Exception
     */
    public function getPlayStatis(GetPlayStatisRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getPlayStatisWithOptions($request, $runtime);
    }

    /**
     * @param GetMTSStatisRequest $request
     * @param RuntimeOptions $runtime
     * @return GetMTSStatisResponse
     * @throws \Exception
     */
    public function getMTSStatisWithOptions(GetMTSStatisRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetMTSStatisResponse::fromMap($this->doRequest("GetMTSStatis", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetMTSStatisRequest $request
     * @return GetMTSStatisResponse
     * @throws \Exception
     */
    public function getMTSStatis(GetMTSStatisRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getMTSStatisWithOptions($request, $runtime);
    }

    /**
     * @param ListDomainRefererRequest $request
     * @param RuntimeOptions $runtime
     * @return ListDomainRefererResponse
     * @throws \Exception
     */
    public function listDomainRefererWithOptions(ListDomainRefererRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListDomainRefererResponse::fromMap($this->doRequest("ListDomainReferer", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param ListDomainRefererRequest $request
     * @return ListDomainRefererResponse
     * @throws \Exception
     */
    public function listDomainReferer(ListDomainRefererRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listDomainRefererWithOptions($request, $runtime);
    }

    /**
     * @param SetMessageCallbackRequest $request
     * @param RuntimeOptions $runtime
     * @return SetMessageCallbackResponse
     * @throws \Exception
     */
    public function setMessageCallbackWithOptions(SetMessageCallbackRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SetMessageCallbackResponse::fromMap($this->doRequest("SetMessageCallback", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SetMessageCallbackRequest $request
     * @return SetMessageCallbackResponse
     * @throws \Exception
     */
    public function setMessageCallback(SetMessageCallbackRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->setMessageCallbackWithOptions($request, $runtime);
    }

    /**
     * @param GetMessageCallbackRequest $request
     * @param RuntimeOptions $runtime
     * @return GetMessageCallbackResponse
     * @throws \Exception
     */
    public function getMessageCallbackWithOptions(GetMessageCallbackRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetMessageCallbackResponse::fromMap($this->doRequest("GetMessageCallback", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetMessageCallbackRequest $request
     * @return GetMessageCallbackResponse
     * @throws \Exception
     */
    public function getMessageCallback(GetMessageCallbackRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getMessageCallbackWithOptions($request, $runtime);
    }

    /**
     * @param GetVideoPlayInfoForCloudRequest $request
     * @param RuntimeOptions $runtime
     * @return GetVideoPlayInfoForCloudResponse
     * @throws \Exception
     */
    public function getVideoPlayInfoForCloudWithOptions(GetVideoPlayInfoForCloudRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetVideoPlayInfoForCloudResponse::fromMap($this->doRequest("GetVideoPlayInfoForCloud", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetVideoPlayInfoForCloudRequest $request
     * @return GetVideoPlayInfoForCloudResponse
     * @throws \Exception
     */
    public function getVideoPlayInfoForCloud(GetVideoPlayInfoForCloudRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getVideoPlayInfoForCloudWithOptions($request, $runtime);
    }

    /**
     * @param GetVideoPlayAuthRequest $request
     * @param RuntimeOptions $runtime
     * @return GetVideoPlayAuthResponse
     * @throws \Exception
     */
    public function getVideoPlayAuthWithOptions(GetVideoPlayAuthRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetVideoPlayAuthResponse::fromMap($this->doRequest("GetVideoPlayAuth", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetVideoPlayAuthRequest $request
     * @return GetVideoPlayAuthResponse
     * @throws \Exception
     */
    public function getVideoPlayAuth(GetVideoPlayAuthRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getVideoPlayAuthWithOptions($request, $runtime);
    }

    /**
     * @param GetMidYKVidRequest $request
     * @param RuntimeOptions $runtime
     * @return GetMidYKVidResponse
     * @throws \Exception
     */
    public function getMidYKVidWithOptions(GetMidYKVidRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetMidYKVidResponse::fromMap($this->doRequest("GetMidYKVid", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetMidYKVidRequest $request
     * @return GetMidYKVidResponse
     * @throws \Exception
     */
    public function getMidYKVid(GetMidYKVidRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getMidYKVidWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMidYKVidRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteMidYKVidResponse
     * @throws \Exception
     */
    public function deleteMidYKVidWithOptions(DeleteMidYKVidRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteMidYKVidResponse::fromMap($this->doRequest("DeleteMidYKVid", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DeleteMidYKVidRequest $request
     * @return DeleteMidYKVidResponse
     * @throws \Exception
     */
    public function deleteMidYKVid(DeleteMidYKVidRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteMidYKVidWithOptions($request, $runtime);
    }

    /**
     * @param AddMidYKVidRequest $request
     * @param RuntimeOptions $runtime
     * @return AddMidYKVidResponse
     * @throws \Exception
     */
    public function addMidYKVidWithOptions(AddMidYKVidRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddMidYKVidResponse::fromMap($this->doRequest("AddMidYKVid", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param AddMidYKVidRequest $request
     * @return AddMidYKVidResponse
     * @throws \Exception
     */
    public function addMidYKVid(AddMidYKVidRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addMidYKVidWithOptions($request, $runtime);
    }

    /**
     * @param UpdateVideoStatusRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateVideoStatusResponse
     * @throws \Exception
     */
    public function updateVideoStatusWithOptions(UpdateVideoStatusRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateVideoStatusResponse::fromMap($this->doRequest("UpdateVideoStatus", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UpdateVideoStatusRequest $request
     * @return UpdateVideoStatusResponse
     * @throws \Exception
     */
    public function updateVideoStatus(UpdateVideoStatusRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateVideoStatusWithOptions($request, $runtime);
    }

    /**
     * @param UpdateVideoInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateVideoInfoResponse
     * @throws \Exception
     */
    public function updateVideoInfoWithOptions(UpdateVideoInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateVideoInfoResponse::fromMap($this->doRequest("UpdateVideoInfo", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UpdateVideoInfoRequest $request
     * @return UpdateVideoInfoResponse
     * @throws \Exception
     */
    public function updateVideoInfo(UpdateVideoInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateVideoInfoWithOptions($request, $runtime);
    }

    /**
     * @param SearchVideoRequest $request
     * @param RuntimeOptions $runtime
     * @return SearchVideoResponse
     * @throws \Exception
     */
    public function searchVideoWithOptions(SearchVideoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SearchVideoResponse::fromMap($this->doRequest("SearchVideo", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SearchVideoRequest $request
     * @return SearchVideoResponse
     * @throws \Exception
     */
    public function searchVideo(SearchVideoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->searchVideoWithOptions($request, $runtime);
    }

    /**
     * @param RefreshUploadVideoRequest $request
     * @param RuntimeOptions $runtime
     * @return RefreshUploadVideoResponse
     * @throws \Exception
     */
    public function refreshUploadVideoWithOptions(RefreshUploadVideoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return RefreshUploadVideoResponse::fromMap($this->doRequest("RefreshUploadVideo", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param RefreshUploadVideoRequest $request
     * @return RefreshUploadVideoResponse
     * @throws \Exception
     */
    public function refreshUploadVideo(RefreshUploadVideoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->refreshUploadVideoWithOptions($request, $runtime);
    }

    /**
     * @param GetVideoListRequest $request
     * @param RuntimeOptions $runtime
     * @return GetVideoListResponse
     * @throws \Exception
     */
    public function getVideoListWithOptions(GetVideoListRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetVideoListResponse::fromMap($this->doRequest("GetVideoList", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetVideoListRequest $request
     * @return GetVideoListResponse
     * @throws \Exception
     */
    public function getVideoList(GetVideoListRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getVideoListWithOptions($request, $runtime);
    }

    /**
     * @param GetVideoInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return GetVideoInfoResponse
     * @throws \Exception
     */
    public function getVideoInfoWithOptions(GetVideoInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetVideoInfoResponse::fromMap($this->doRequest("GetVideoInfo", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetVideoInfoRequest $request
     * @return GetVideoInfoResponse
     * @throws \Exception
     */
    public function getVideoInfo(GetVideoInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getVideoInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetCategoryTreeRequest $request
     * @param RuntimeOptions $runtime
     * @return GetCategoryTreeResponse
     * @throws \Exception
     */
    public function getCategoryTreeWithOptions(GetCategoryTreeRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetCategoryTreeResponse::fromMap($this->doRequest("GetCategoryTree", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetCategoryTreeRequest $request
     * @return GetCategoryTreeResponse
     * @throws \Exception
     */
    public function getCategoryTree(GetCategoryTreeRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getCategoryTreeWithOptions($request, $runtime);
    }

    /**
     * @param GetCategoryListRequest $request
     * @param RuntimeOptions $runtime
     * @return GetCategoryListResponse
     * @throws \Exception
     */
    public function getCategoryListWithOptions(GetCategoryListRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetCategoryListResponse::fromMap($this->doRequest("GetCategoryList", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetCategoryListRequest $request
     * @return GetCategoryListResponse
     * @throws \Exception
     */
    public function getCategoryList(GetCategoryListRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getCategoryListWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVideoTagRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteVideoTagResponse
     * @throws \Exception
     */
    public function deleteVideoTagWithOptions(DeleteVideoTagRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteVideoTagResponse::fromMap($this->doRequest("DeleteVideoTag", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DeleteVideoTagRequest $request
     * @return DeleteVideoTagResponse
     * @throws \Exception
     */
    public function deleteVideoTag(DeleteVideoTagRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteVideoTagWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVideoRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteVideoResponse
     * @throws \Exception
     */
    public function deleteVideoWithOptions(DeleteVideoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteVideoResponse::fromMap($this->doRequest("DeleteVideo", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DeleteVideoRequest $request
     * @return DeleteVideoResponse
     * @throws \Exception
     */
    public function deleteVideo(DeleteVideoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteVideoWithOptions($request, $runtime);
    }

    /**
     * @param CreateUploadVideoRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateUploadVideoResponse
     * @throws \Exception
     */
    public function createUploadVideoWithOptions(CreateUploadVideoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateUploadVideoResponse::fromMap($this->doRequest("CreateUploadVideo", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param CreateUploadVideoRequest $request
     * @return CreateUploadVideoResponse
     * @throws \Exception
     */
    public function createUploadVideo(CreateUploadVideoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createUploadVideoWithOptions($request, $runtime);
    }

    /**
     * @param CheckVideoRequest $request
     * @param RuntimeOptions $runtime
     * @return CheckVideoResponse
     * @throws \Exception
     */
    public function checkVideoWithOptions(CheckVideoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CheckVideoResponse::fromMap($this->doRequest("CheckVideo", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param CheckVideoRequest $request
     * @return CheckVideoResponse
     * @throws \Exception
     */
    public function checkVideo(CheckVideoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->checkVideoWithOptions($request, $runtime);
    }

    /**
     * @param AddVideoTagRequest $request
     * @param RuntimeOptions $runtime
     * @return AddVideoTagResponse
     * @throws \Exception
     */
    public function addVideoTagWithOptions(AddVideoTagRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddVideoTagResponse::fromMap($this->doRequest("AddVideoTag", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param AddVideoTagRequest $request
     * @return AddVideoTagResponse
     * @throws \Exception
     */
    public function addVideoTag(AddVideoTagRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addVideoTagWithOptions($request, $runtime);
    }

    /**
     * @param AddApiAuthRequest $request
     * @param RuntimeOptions $runtime
     * @return AddApiAuthResponse
     * @throws \Exception
     */
    public function addApiAuthWithOptions(AddApiAuthRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddApiAuthResponse::fromMap($this->doRequest("AddApiAuth", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param AddApiAuthRequest $request
     * @return AddApiAuthResponse
     * @throws \Exception
     */
    public function addApiAuth(AddApiAuthRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addApiAuthWithOptions($request, $runtime);
    }

    /**
     * @param GetPlayChannelKeyRequest $request
     * @param RuntimeOptions $runtime
     * @return GetPlayChannelKeyResponse
     * @throws \Exception
     */
    public function getPlayChannelKeyWithOptions(GetPlayChannelKeyRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetPlayChannelKeyResponse::fromMap($this->doRequest("GetPlayChannelKey", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetPlayChannelKeyRequest $request
     * @return GetPlayChannelKeyResponse
     * @throws \Exception
     */
    public function getPlayChannelKey(GetPlayChannelKeyRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getPlayChannelKeyWithOptions($request, $runtime);
    }

    /**
     * @param GetDomainListRequest $request
     * @param RuntimeOptions $runtime
     * @return GetDomainListResponse
     * @throws \Exception
     */
    public function getDomainListWithOptions(GetDomainListRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetDomainListResponse::fromMap($this->doRequest("GetDomainList", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetDomainListRequest $request
     * @return GetDomainListResponse
     * @throws \Exception
     */
    public function getDomainList(GetDomainListRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getDomainListWithOptions($request, $runtime);
    }

    /**
     * @param GetServiceStatusRequest $request
     * @param RuntimeOptions $runtime
     * @return GetServiceStatusResponse
     * @throws \Exception
     */
    public function getServiceStatusWithOptions(GetServiceStatusRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetServiceStatusResponse::fromMap($this->doRequest("GetServiceStatus", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetServiceStatusRequest $request
     * @return GetServiceStatusResponse
     * @throws \Exception
     */
    public function getServiceStatus(GetServiceStatusRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getServiceStatusWithOptions($request, $runtime);
    }

    /**
     * @param NotifyProduceRequest $request
     * @param RuntimeOptions $runtime
     * @return NotifyProduceResponse
     * @throws \Exception
     */
    public function notifyProduceWithOptions(NotifyProduceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return NotifyProduceResponse::fromMap($this->doRequest("NotifyProduce", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param NotifyProduceRequest $request
     * @return NotifyProduceResponse
     * @throws \Exception
     */
    public function notifyProduce(NotifyProduceRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->notifyProduceWithOptions($request, $runtime);
    }

    /**
     * @param NotifyInitResourceRequest $request
     * @param RuntimeOptions $runtime
     * @return NotifyInitResourceResponse
     * @throws \Exception
     */
    public function notifyInitResourceWithOptions(NotifyInitResourceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return NotifyInitResourceResponse::fromMap($this->doRequest("NotifyInitResource", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param NotifyInitResourceRequest $request
     * @return NotifyInitResourceResponse
     * @throws \Exception
     */
    public function notifyInitResource(NotifyInitResourceRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->notifyInitResourceWithOptions($request, $runtime);
    }

    /**
     * @param GetPlayChannelListRequest $request
     * @param RuntimeOptions $runtime
     * @return GetPlayChannelListResponse
     * @throws \Exception
     */
    public function getPlayChannelListWithOptions(GetPlayChannelListRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetPlayChannelListResponse::fromMap($this->doRequest("GetPlayChannelList", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetPlayChannelListRequest $request
     * @return GetPlayChannelListResponse
     * @throws \Exception
     */
    public function getPlayChannelList(GetPlayChannelListRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getPlayChannelListWithOptions($request, $runtime);
    }

    /**
     * @param UpdateApiAuthRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateApiAuthResponse
     * @throws \Exception
     */
    public function updateApiAuthWithOptions(UpdateApiAuthRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateApiAuthResponse::fromMap($this->doRequest("UpdateApiAuth", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UpdateApiAuthRequest $request
     * @return UpdateApiAuthResponse
     * @throws \Exception
     */
    public function updateApiAuth(UpdateApiAuthRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateApiAuthWithOptions($request, $runtime);
    }

    /**
     * @param UserExistRequest $request
     * @param RuntimeOptions $runtime
     * @return UserExistResponse
     * @throws \Exception
     */
    public function userExistWithOptions(UserExistRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UserExistResponse::fromMap($this->doRequest("UserExist", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UserExistRequest $request
     * @return UserExistResponse
     * @throws \Exception
     */
    public function userExist(UserExistRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->userExistWithOptions($request, $runtime);
    }

    /**
     * @param AddMediaInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return AddMediaInfoResponse
     * @throws \Exception
     */
    public function addMediaInfoWithOptions(AddMediaInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddMediaInfoResponse::fromMap($this->doRequest("AddMediaInfo", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param AddMediaInfoRequest $request
     * @return AddMediaInfoResponse
     * @throws \Exception
     */
    public function addMediaInfo(AddMediaInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addMediaInfoWithOptions($request, $runtime);
    }

    /**
     * @param AddCategoryRequest $request
     * @param RuntimeOptions $runtime
     * @return AddCategoryResponse
     * @throws \Exception
     */
    public function addCategoryWithOptions(AddCategoryRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddCategoryResponse::fromMap($this->doRequest("AddCategory", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param AddCategoryRequest $request
     * @return AddCategoryResponse
     * @throws \Exception
     */
    public function addCategory(AddCategoryRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addCategoryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCategoryRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteCategoryResponse
     * @throws \Exception
     */
    public function deleteCategoryWithOptions(DeleteCategoryRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteCategoryResponse::fromMap($this->doRequest("DeleteCategory", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DeleteCategoryRequest $request
     * @return DeleteCategoryResponse
     * @throws \Exception
     */
    public function deleteCategory(DeleteCategoryRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteCategoryWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMediaInfoStatusRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateMediaInfoStatusResponse
     * @throws \Exception
     */
    public function updateMediaInfoStatusWithOptions(UpdateMediaInfoStatusRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateMediaInfoStatusResponse::fromMap($this->doRequest("UpdateMediaInfoStatus", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UpdateMediaInfoStatusRequest $request
     * @return UpdateMediaInfoStatusResponse
     * @throws \Exception
     */
    public function updateMediaInfoStatus(UpdateMediaInfoStatusRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateMediaInfoStatusWithOptions($request, $runtime);
    }

    /**
     * @param CategoryTreeRequest $request
     * @param RuntimeOptions $runtime
     * @return CategoryTreeResponse
     * @throws \Exception
     */
    public function categoryTreeWithOptions(CategoryTreeRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CategoryTreeResponse::fromMap($this->doRequest("CategoryTree", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param CategoryTreeRequest $request
     * @return CategoryTreeResponse
     * @throws \Exception
     */
    public function categoryTree(CategoryTreeRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->categoryTreeWithOptions($request, $runtime);
    }

    /**
     * @param AddMediaTagRequest $request
     * @param RuntimeOptions $runtime
     * @return AddMediaTagResponse
     * @throws \Exception
     */
    public function addMediaTagWithOptions(AddMediaTagRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddMediaTagResponse::fromMap($this->doRequest("AddMediaTag", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param AddMediaTagRequest $request
     * @return AddMediaTagResponse
     * @throws \Exception
     */
    public function addMediaTag(AddMediaTagRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addMediaTagWithOptions($request, $runtime);
    }

    /**
     * @param GetCDNStatisSumRequest $request
     * @param RuntimeOptions $runtime
     * @return GetCDNStatisSumResponse
     * @throws \Exception
     */
    public function getCDNStatisSumWithOptions(GetCDNStatisSumRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetCDNStatisSumResponse::fromMap($this->doRequest("GetCDNStatisSum", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetCDNStatisSumRequest $request
     * @return GetCDNStatisSumResponse
     * @throws \Exception
     */
    public function getCDNStatisSum(GetCDNStatisSumRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getCDNStatisSumWithOptions($request, $runtime);
    }

    /**
     * @param GetCDNStatisRequest $request
     * @param RuntimeOptions $runtime
     * @return GetCDNStatisResponse
     * @throws \Exception
     */
    public function getCDNStatisWithOptions(GetCDNStatisRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetCDNStatisResponse::fromMap($this->doRequest("GetCDNStatis", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetCDNStatisRequest $request
     * @return GetCDNStatisResponse
     * @throws \Exception
     */
    public function getCDNStatis(GetCDNStatisRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getCDNStatisWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMediaTagRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteMediaTagResponse
     * @throws \Exception
     */
    public function deleteMediaTagWithOptions(DeleteMediaTagRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteMediaTagResponse::fromMap($this->doRequest("DeleteMediaTag", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DeleteMediaTagRequest $request
     * @return DeleteMediaTagResponse
     * @throws \Exception
     */
    public function deleteMediaTag(DeleteMediaTagRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteMediaTagWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMediaInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteMediaInfoResponse
     * @throws \Exception
     */
    public function deleteMediaInfoWithOptions(DeleteMediaInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteMediaInfoResponse::fromMap($this->doRequest("DeleteMediaInfo", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DeleteMediaInfoRequest $request
     * @return DeleteMediaInfoResponse
     * @throws \Exception
     */
    public function deleteMediaInfo(DeleteMediaInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteMediaInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetOSSStatisRequest $request
     * @param RuntimeOptions $runtime
     * @return GetOSSStatisResponse
     * @throws \Exception
     */
    public function getOSSStatisWithOptions(GetOSSStatisRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetOSSStatisResponse::fromMap($this->doRequest("GetOSSStatis", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetOSSStatisRequest $request
     * @return GetOSSStatisResponse
     * @throws \Exception
     */
    public function getOSSStatis(GetOSSStatisRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getOSSStatisWithOptions($request, $runtime);
    }

    /**
     * @param GetVideoPlayInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return GetVideoPlayInfoResponse
     * @throws \Exception
     */
    public function getVideoPlayInfoWithOptions(GetVideoPlayInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetVideoPlayInfoResponse::fromMap($this->doRequest("GetVideoPlayInfo", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetVideoPlayInfoRequest $request
     * @return GetVideoPlayInfoResponse
     * @throws \Exception
     */
    public function getVideoPlayInfo(GetVideoPlayInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getVideoPlayInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetMediaInfoListRequest $request
     * @param RuntimeOptions $runtime
     * @return GetMediaInfoListResponse
     * @throws \Exception
     */
    public function getMediaInfoListWithOptions(GetMediaInfoListRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetMediaInfoListResponse::fromMap($this->doRequest("GetMediaInfoList", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetMediaInfoListRequest $request
     * @return GetMediaInfoListResponse
     * @throws \Exception
     */
    public function getMediaInfoList(GetMediaInfoListRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getMediaInfoListWithOptions($request, $runtime);
    }

    /**
     * @param GetMediaInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return GetMediaInfoResponse
     * @throws \Exception
     */
    public function getMediaInfoWithOptions(GetMediaInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetMediaInfoResponse::fromMap($this->doRequest("GetMediaInfo", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetMediaInfoRequest $request
     * @return GetMediaInfoResponse
     * @throws \Exception
     */
    public function getMediaInfo(GetMediaInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getMediaInfoWithOptions($request, $runtime);
    }

    /**
     * @param SearchMediaInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return SearchMediaInfoResponse
     * @throws \Exception
     */
    public function searchMediaInfoWithOptions(SearchMediaInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SearchMediaInfoResponse::fromMap($this->doRequest("SearchMediaInfo", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SearchMediaInfoRequest $request
     * @return SearchMediaInfoResponse
     * @throws \Exception
     */
    public function searchMediaInfo(SearchMediaInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->searchMediaInfoWithOptions($request, $runtime);
    }

    /**
     * @param RefreshUploadTokenRequest $request
     * @param RuntimeOptions $runtime
     * @return RefreshUploadTokenResponse
     * @throws \Exception
     */
    public function refreshUploadTokenWithOptions(RefreshUploadTokenRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return RefreshUploadTokenResponse::fromMap($this->doRequest("RefreshUploadToken", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param RefreshUploadTokenRequest $request
     * @return RefreshUploadTokenResponse
     * @throws \Exception
     */
    public function refreshUploadToken(RefreshUploadTokenRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->refreshUploadTokenWithOptions($request, $runtime);
    }

    /**
     * @param ListAllCategoryRequest $request
     * @param RuntimeOptions $runtime
     * @return ListAllCategoryResponse
     * @throws \Exception
     */
    public function listAllCategoryWithOptions(ListAllCategoryRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListAllCategoryResponse::fromMap($this->doRequest("ListAllCategory", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param ListAllCategoryRequest $request
     * @return ListAllCategoryResponse
     * @throws \Exception
     */
    public function listAllCategory(ListAllCategoryRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listAllCategoryWithOptions($request, $runtime);
    }

    /**
     * @param GetTotalStatisRequest $request
     * @param RuntimeOptions $runtime
     * @return GetTotalStatisResponse
     * @throws \Exception
     */
    public function getTotalStatisWithOptions(GetTotalStatisRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetTotalStatisResponse::fromMap($this->doRequest("GetTotalStatis", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetTotalStatisRequest $request
     * @return GetTotalStatisResponse
     * @throws \Exception
     */
    public function getTotalStatis(GetTotalStatisRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getTotalStatisWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMediaInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateMediaInfoResponse
     * @throws \Exception
     */
    public function updateMediaInfoWithOptions(UpdateMediaInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateMediaInfoResponse::fromMap($this->doRequest("UpdateMediaInfo", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UpdateMediaInfoRequest $request
     * @return UpdateMediaInfoResponse
     * @throws \Exception
     */
    public function updateMediaInfo(UpdateMediaInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateMediaInfoWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMediaCategoryRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateMediaCategoryResponse
     * @throws \Exception
     */
    public function updateMediaCategoryWithOptions(UpdateMediaCategoryRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateMediaCategoryResponse::fromMap($this->doRequest("UpdateMediaCategory", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UpdateMediaCategoryRequest $request
     * @return UpdateMediaCategoryResponse
     * @throws \Exception
     */
    public function updateMediaCategory(UpdateMediaCategoryRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateMediaCategoryWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCategoryNameRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateCategoryNameResponse
     * @throws \Exception
     */
    public function updateCategoryNameWithOptions(UpdateCategoryNameRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateCategoryNameResponse::fromMap($this->doRequest("UpdateCategoryName", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UpdateCategoryNameRequest $request
     * @return UpdateCategoryNameResponse
     * @throws \Exception
     */
    public function updateCategoryName(UpdateCategoryNameRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateCategoryNameWithOptions($request, $runtime);
    }

    /**
     * @param AddWatermarkRequest $request
     * @param RuntimeOptions $runtime
     * @return AddWatermarkResponse
     * @throws \Exception
     */
    public function addWatermarkWithOptions(AddWatermarkRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddWatermarkResponse::fromMap($this->doRequest("AddWatermark", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param AddWatermarkRequest $request
     * @return AddWatermarkResponse
     * @throws \Exception
     */
    public function addWatermark(AddWatermarkRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addWatermarkWithOptions($request, $runtime);
    }

    /**
     * @param AddTranscodeTemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return AddTranscodeTemplateResponse
     * @throws \Exception
     */
    public function addTranscodeTemplateWithOptions(AddTranscodeTemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddTranscodeTemplateResponse::fromMap($this->doRequest("AddTranscodeTemplate", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param AddTranscodeTemplateRequest $request
     * @return AddTranscodeTemplateResponse
     * @throws \Exception
     */
    public function addTranscodeTemplate(AddTranscodeTemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addTranscodeTemplateWithOptions($request, $runtime);
    }

    /**
     * @param AddSnapshotRequest $request
     * @param RuntimeOptions $runtime
     * @return AddSnapshotResponse
     * @throws \Exception
     */
    public function addSnapshotWithOptions(AddSnapshotRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddSnapshotResponse::fromMap($this->doRequest("AddSnapshot", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param AddSnapshotRequest $request
     * @return AddSnapshotResponse
     * @throws \Exception
     */
    public function addSnapshot(AddSnapshotRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addSnapshotWithOptions($request, $runtime);
    }

    /**
     * @param GetCustomerTranscodeConfRequest $request
     * @param RuntimeOptions $runtime
     * @return GetCustomerTranscodeConfResponse
     * @throws \Exception
     */
    public function getCustomerTranscodeConfWithOptions(GetCustomerTranscodeConfRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetCustomerTranscodeConfResponse::fromMap($this->doRequest("GetCustomerTranscodeConf", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetCustomerTranscodeConfRequest $request
     * @return GetCustomerTranscodeConfResponse
     * @throws \Exception
     */
    public function getCustomerTranscodeConf(GetCustomerTranscodeConfRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getCustomerTranscodeConfWithOptions($request, $runtime);
    }

    /**
     * @param DeleteWatermarkRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteWatermarkResponse
     * @throws \Exception
     */
    public function deleteWatermarkWithOptions(DeleteWatermarkRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteWatermarkResponse::fromMap($this->doRequest("DeleteWatermark", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param DeleteWatermarkRequest $request
     * @return DeleteWatermarkResponse
     * @throws \Exception
     */
    public function deleteWatermark(DeleteWatermarkRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteWatermarkWithOptions($request, $runtime);
    }

    /**
     * @param GetWatermarkRequest $request
     * @param RuntimeOptions $runtime
     * @return GetWatermarkResponse
     * @throws \Exception
     */
    public function getWatermarkWithOptions(GetWatermarkRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetWatermarkResponse::fromMap($this->doRequest("GetWatermark", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetWatermarkRequest $request
     * @return GetWatermarkResponse
     * @throws \Exception
     */
    public function getWatermark(GetWatermarkRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getWatermarkWithOptions($request, $runtime);
    }

    /**
     * @param GetWatermarksRequest $request
     * @param RuntimeOptions $runtime
     * @return GetWatermarksResponse
     * @throws \Exception
     */
    public function getWatermarksWithOptions(GetWatermarksRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetWatermarksResponse::fromMap($this->doRequest("GetWatermarks", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetWatermarksRequest $request
     * @return GetWatermarksResponse
     * @throws \Exception
     */
    public function getWatermarks(GetWatermarksRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getWatermarksWithOptions($request, $runtime);
    }

    /**
     * @param SwitchWatermarkRequest $request
     * @param RuntimeOptions $runtime
     * @return SwitchWatermarkResponse
     * @throws \Exception
     */
    public function switchWatermarkWithOptions(SwitchWatermarkRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SwitchWatermarkResponse::fromMap($this->doRequest("SwitchWatermark", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SwitchWatermarkRequest $request
     * @return SwitchWatermarkResponse
     * @throws \Exception
     */
    public function switchWatermark(SwitchWatermarkRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->switchWatermarkWithOptions($request, $runtime);
    }

    /**
     * @param GetWatermarkSwitchRequest $request
     * @param RuntimeOptions $runtime
     * @return GetWatermarkSwitchResponse
     * @throws \Exception
     */
    public function getWatermarkSwitchWithOptions(GetWatermarkSwitchRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetWatermarkSwitchResponse::fromMap($this->doRequest("GetWatermarkSwitch", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param GetWatermarkSwitchRequest $request
     * @return GetWatermarkSwitchResponse
     * @throws \Exception
     */
    public function getWatermarkSwitch(GetWatermarkSwitchRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getWatermarkSwitchWithOptions($request, $runtime);
    }

    /**
     * @param SetDefaultWatermarkRequest $request
     * @param RuntimeOptions $runtime
     * @return SetDefaultWatermarkResponse
     * @throws \Exception
     */
    public function setDefaultWatermarkWithOptions(SetDefaultWatermarkRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SetDefaultWatermarkResponse::fromMap($this->doRequest("SetDefaultWatermark", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param SetDefaultWatermarkRequest $request
     * @return SetDefaultWatermarkResponse
     * @throws \Exception
     */
    public function setDefaultWatermark(SetDefaultWatermarkRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->setDefaultWatermarkWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTranscodeTemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateTranscodeTemplateResponse
     * @throws \Exception
     */
    public function updateTranscodeTemplateWithOptions(UpdateTranscodeTemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateTranscodeTemplateResponse::fromMap($this->doRequest("UpdateTranscodeTemplate", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UpdateTranscodeTemplateRequest $request
     * @return UpdateTranscodeTemplateResponse
     * @throws \Exception
     */
    public function updateTranscodeTemplate(UpdateTranscodeTemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateTranscodeTemplateWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTranscodeConfRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateTranscodeConfResponse
     * @throws \Exception
     */
    public function updateTranscodeConfWithOptions(UpdateTranscodeConfRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateTranscodeConfResponse::fromMap($this->doRequest("UpdateTranscodeConf", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UpdateTranscodeConfRequest $request
     * @return UpdateTranscodeConfResponse
     * @throws \Exception
     */
    public function updateTranscodeConf(UpdateTranscodeConfRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateTranscodeConfWithOptions($request, $runtime);
    }

    /**
     * @param UpdateWatermarkRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateWatermarkResponse
     * @throws \Exception
     */
    public function updateWatermarkWithOptions(UpdateWatermarkRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateWatermarkResponse::fromMap($this->doRequest("UpdateWatermark", "HTTPS", "POST", "2017-03-14", "AK", $request, null, $runtime));
    }

    /**
     * @param UpdateWatermarkRequest $request
     * @return UpdateWatermarkResponse
     * @throws \Exception
     */
    public function updateWatermark(UpdateWatermarkRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateWatermarkWithOptions($request, $runtime);
    }

    /**
     * @param string $productId
     * @param string $regionId
     * @param string $endpointRule
     * @param string $network
     * @param string $suffix
     * @param array $endpointMap
     * @param string $endpoint
     * @return string
     * @throws \Exception
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint){
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_($endpointMap["regionId"])) {
            return $endpointMap["regionId"];
        }
        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
