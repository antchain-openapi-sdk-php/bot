<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\BOT;

use AlibabaCloud\Tea\Exception\TeaError;
use AlibabaCloud\Tea\Exception\TeaUnableRetryError;
use AlibabaCloud\Tea\Request;
use AlibabaCloud\Tea\RpcUtils\RpcUtils;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use AntChain\BOT\Models\AddAbnormalRequest;
use AntChain\BOT\Models\AddAbnormalResponse;
use AntChain\BOT\Models\AddAlertStrategyRequest;
use AntChain\BOT\Models\AddAlertStrategyResponse;
use AntChain\BOT\Models\AddCertificateRequest;
use AntChain\BOT\Models\AddCertificateResponse;
use AntChain\BOT\Models\AddGoodsSkuRequest;
use AntChain\BOT\Models\AddGoodsSkuResponse;
use AntChain\BOT\Models\AddLabelAssetRequest;
use AntChain\BOT\Models\AddLabelAssetResponse;
use AntChain\BOT\Models\AddProductkeyRequest;
use AntChain\BOT\Models\AddProductkeyResponse;
use AntChain\BOT\Models\AddSceneRequest;
use AntChain\BOT\Models\AddSceneResponse;
use AntChain\BOT\Models\AddSdkRequest;
use AntChain\BOT\Models\AddSdkResponse;
use AntChain\BOT\Models\AddTenantRequest;
use AntChain\BOT\Models\AddTenantResponse;
use AntChain\BOT\Models\AddUserRoleRequest;
use AntChain\BOT\Models\AddUserRoleResponse;
use AntChain\BOT\Models\ApplyMqtokenRequest;
use AntChain\BOT\Models\ApplyMqtokenResponse;
use AntChain\BOT\Models\CertifyIotbasicDeviceRequest;
use AntChain\BOT\Models\CertifyIotbasicDeviceResponse;
use AntChain\BOT\Models\CheckAiidentificationGoodspointRequest;
use AntChain\BOT\Models\CheckAiidentificationGoodspointResponse;
use AntChain\BOT\Models\CheckAiidentificationQrcodeRequest;
use AntChain\BOT\Models\CheckAiidentificationQrcodeResponse;
use AntChain\BOT\Models\CreateAcsDeviceRequest;
use AntChain\BOT\Models\CreateAcsDeviceResponse;
use AntChain\BOT\Models\CreateAntcloudGatewayxFileUploadRequest;
use AntChain\BOT\Models\CreateAntcloudGatewayxFileUploadResponse;
use AntChain\BOT\Models\CreateConsumerRequest;
use AntChain\BOT\Models\CreateConsumerResponse;
use AntChain\BOT\Models\CreateCustomerEntityRequest;
use AntChain\BOT\Models\CreateCustomerEntityResponse;
use AntChain\BOT\Models\CreateDeviceDatamodelRequest;
use AntChain\BOT\Models\CreateDeviceDatamodelResponse;
use AntChain\BOT\Models\CreateDeviceRelationRequest;
use AntChain\BOT\Models\CreateDeviceRelationResponse;
use AntChain\BOT\Models\CreateDistributedeviceBychainidRequest;
use AntChain\BOT\Models\CreateDistributedeviceBychainidResponse;
use AntChain\BOT\Models\CreateDistributedeviceBychainperipheralidRequest;
use AntChain\BOT\Models\CreateDistributedeviceBychainperipheralidResponse;
use AntChain\BOT\Models\CreateDistributedeviceBydeviceidRequest;
use AntChain\BOT\Models\CreateDistributedeviceBydeviceidResponse;
use AntChain\BOT\Models\CreateDistributedeviceBydeviceRequest;
use AntChain\BOT\Models\CreateDistributedeviceBydeviceResponse;
use AntChain\BOT\Models\CreateDistributedeviceByperipheralidRequest;
use AntChain\BOT\Models\CreateDistributedeviceByperipheralidResponse;
use AntChain\BOT\Models\CreateLeaseRealpersonRequest;
use AntChain\BOT\Models\CreateLeaseRealpersonResponse;
use AntChain\BOT\Models\CreateTaskRequest;
use AntChain\BOT\Models\CreateTaskResponse;
use AntChain\BOT\Models\CreateTenantProjectRequest;
use AntChain\BOT\Models\CreateTenantProjectResponse;
use AntChain\BOT\Models\DeleteDeviceRelationRequest;
use AntChain\BOT\Models\DeleteDeviceRelationResponse;
use AntChain\BOT\Models\DeploySceneRequest;
use AntChain\BOT\Models\DeploySceneResponse;
use AntChain\BOT\Models\ExecThingsdidOneapiRequest;
use AntChain\BOT\Models\ExecThingsdidOneapiResponse;
use AntChain\BOT\Models\ExecUnprocessedTaskRequest;
use AntChain\BOT\Models\ExecUnprocessedTaskResponse;
use AntChain\BOT\Models\GetDeviceBychainidRequest;
use AntChain\BOT\Models\GetDeviceBychainidResponse;
use AntChain\BOT\Models\GetDeviceBydeviceidRequest;
use AntChain\BOT\Models\GetDeviceBydeviceidResponse;
use AntChain\BOT\Models\GetDeviceDatamodelRequest;
use AntChain\BOT\Models\GetDeviceDatamodelResponse;
use AntChain\BOT\Models\GetDistributedeviceBychainidRequest;
use AntChain\BOT\Models\GetDistributedeviceBychainidResponse;
use AntChain\BOT\Models\GetDistributedeviceBydeviceidRequest;
use AntChain\BOT\Models\GetDistributedeviceBydeviceidResponse;
use AntChain\BOT\Models\GetDistributedeviceBydisidRequest;
use AntChain\BOT\Models\GetDistributedeviceBydisidResponse;
use AntChain\BOT\Models\GetDistributedeviceByperipheralidRequest;
use AntChain\BOT\Models\GetDistributedeviceByperipheralidResponse;
use AntChain\BOT\Models\GetPeripheralBychainperipheralidRequest;
use AntChain\BOT\Models\GetPeripheralBychainperipheralidResponse;
use AntChain\BOT\Models\GetPeripheralByperipheralidRequest;
use AntChain\BOT\Models\GetPeripheralByperipheralidResponse;
use AntChain\BOT\Models\ImportDeviceRequest;
use AntChain\BOT\Models\ImportDeviceResponse;
use AntChain\BOT\Models\ImportIotplatformMeshidRequest;
use AntChain\BOT\Models\ImportIotplatformMeshidResponse;
use AntChain\BOT\Models\ImportPeripheralRequest;
use AntChain\BOT\Models\ImportPeripheralResponse;
use AntChain\BOT\Models\ImportPurchaseorderThirdpartyRequest;
use AntChain\BOT\Models\ImportPurchaseorderThirdpartyResponse;
use AntChain\BOT\Models\ListDeviceBysceneRequest;
use AntChain\BOT\Models\ListDeviceBysceneResponse;
use AntChain\BOT\Models\ListDistributedeviceByperipheralsceneRequest;
use AntChain\BOT\Models\ListDistributedeviceByperipheralsceneResponse;
use AntChain\BOT\Models\ListDistributedeviceBysceneRequest;
use AntChain\BOT\Models\ListDistributedeviceBysceneResponse;
use AntChain\BOT\Models\ListPeripheralBysceneRequest;
use AntChain\BOT\Models\ListPeripheralBysceneResponse;
use AntChain\BOT\Models\LoadTsmCertificatetsmRequest;
use AntChain\BOT\Models\LoadTsmCertificatetsmResponse;
use AntChain\BOT\Models\LoadTsmResourcefileRequest;
use AntChain\BOT\Models\LoadTsmResourcefileResponse;
use AntChain\BOT\Models\NotifyPullstrategyChangestatusRequest;
use AntChain\BOT\Models\NotifyPullstrategyChangestatusResponse;
use AntChain\BOT\Models\NotifyPullstrategyChargeorderinfoRequest;
use AntChain\BOT\Models\NotifyPullstrategyChargeorderinfoResponse;
use AntChain\BOT\Models\OfflineDeviceByunregisterRequest;
use AntChain\BOT\Models\OfflineDeviceByunregisterResponse;
use AntChain\BOT\Models\OfflineDeviceRequest;
use AntChain\BOT\Models\OfflineDeviceResponse;
use AntChain\BOT\Models\OnlineDeviceRequest;
use AntChain\BOT\Models\OnlineDeviceResponse;
use AntChain\BOT\Models\OpenAcecContractRequest;
use AntChain\BOT\Models\OpenAcecContractResponse;
use AntChain\BOT\Models\OperateIotbasicPermissionRequest;
use AntChain\BOT\Models\OperateIotbasicPermissionResponse;
use AntChain\BOT\Models\OperateIotbasicUserRequest;
use AntChain\BOT\Models\OperateIotbasicUserResponse;
use AntChain\BOT\Models\PagequeryAlertStrategyRequest;
use AntChain\BOT\Models\PagequeryAlertStrategyResponse;
use AntChain\BOT\Models\PagequeryDataverifyFailureRequest;
use AntChain\BOT\Models\PagequeryDataverifyFailureResponse;
use AntChain\BOT\Models\PagequeryProductkeyRequest;
use AntChain\BOT\Models\PagequeryProductkeyResponse;
use AntChain\BOT\Models\PagequerySceneRequest;
use AntChain\BOT\Models\PagequerySceneResponse;
use AntChain\BOT\Models\PagequerySdkRequest;
use AntChain\BOT\Models\PagequerySdkResponse;
use AntChain\BOT\Models\PagequeryTenantRequest;
use AntChain\BOT\Models\PagequeryTenantResponse;
use AntChain\BOT\Models\PullConsumerDatasourceRequest;
use AntChain\BOT\Models\PullConsumerDatasourceResponse;
use AntChain\BOT\Models\PushCollectotBychainidRequest;
use AntChain\BOT\Models\PushCollectotBychainidResponse;
use AntChain\BOT\Models\QueryAiidentificationGoodsRequest;
use AntChain\BOT\Models\QueryAiidentificationGoodsResponse;
use AntChain\BOT\Models\QueryAiidentificationQrcodeRequest;
use AntChain\BOT\Models\QueryAiidentificationQrcodeResponse;
use AntChain\BOT\Models\QueryAnalysisRequest;
use AntChain\BOT\Models\QueryAnalysisResponse;
use AntChain\BOT\Models\QueryAsyncRequestRequest;
use AntChain\BOT\Models\QueryAsyncRequestResponse;
use AntChain\BOT\Models\QueryBaiOcrRequest;
use AntChain\BOT\Models\QueryBaiOcrResponse;
use AntChain\BOT\Models\QueryDataBytxhashRequest;
use AntChain\BOT\Models\QueryDataBytxhashResponse;
use AntChain\BOT\Models\QueryDeviceRegistrationRequest;
use AntChain\BOT\Models\QueryDeviceRegistrationResponse;
use AntChain\BOT\Models\QueryDeviceSpecsRequest;
use AntChain\BOT\Models\QueryDeviceSpecsResponse;
use AntChain\BOT\Models\QueryDockedDataRequest;
use AntChain\BOT\Models\QueryDockedDataResponse;
use AntChain\BOT\Models\QueryIotbasicDeviceRequest;
use AntChain\BOT\Models\QueryIotbasicDeviceResponse;
use AntChain\BOT\Models\QueryIotbasicSnRequest;
use AntChain\BOT\Models\QueryIotbasicSnResponse;
use AntChain\BOT\Models\QueryIotplatformPurchaseorderRequest;
use AntChain\BOT\Models\QueryIotplatformPurchaseorderResponse;
use AntChain\BOT\Models\QueryLabelTraceRequest;
use AntChain\BOT\Models\QueryLabelTraceResponse;
use AntChain\BOT\Models\QueryLeaseRealpersonRequest;
use AntChain\BOT\Models\QueryLeaseRealpersonResponse;
use AntChain\BOT\Models\QueryLeaseRiskRequest;
use AntChain\BOT\Models\QueryLeaseRiskResponse;
use AntChain\BOT\Models\QueryScfleaseEqpinfoRequest;
use AntChain\BOT\Models\QueryScfleaseEqpinfoResponse;
use AntChain\BOT\Models\QueryTaskRequest;
use AntChain\BOT\Models\QueryTaskResponse;
use AntChain\BOT\Models\QueryThingsdidAsyncprocessRequest;
use AntChain\BOT\Models\QueryThingsdidAsyncprocessResponse;
use AntChain\BOT\Models\QueryThingsdidDidRequest;
use AntChain\BOT\Models\QueryThingsdidDidResponse;
use AntChain\BOT\Models\QueryTlsnotaryTaskRequest;
use AntChain\BOT\Models\QueryTlsnotaryTaskResponse;
use AntChain\BOT\Models\RecognizeIotbasicCustomerRequest;
use AntChain\BOT\Models\RecognizeIotbasicCustomerResponse;
use AntChain\BOT\Models\ReplaceDistributedeviceBychainidRequest;
use AntChain\BOT\Models\ReplaceDistributedeviceBychainidResponse;
use AntChain\BOT\Models\ReplaceDistributedeviceBychainperipheralidRequest;
use AntChain\BOT\Models\ReplaceDistributedeviceBychainperipheralidResponse;
use AntChain\BOT\Models\ResumeAcecContractRequest;
use AntChain\BOT\Models\ResumeAcecContractResponse;
use AntChain\BOT\Models\SendAcsCollectorRequest;
use AntChain\BOT\Models\SendAcsCollectorResponse;
use AntChain\BOT\Models\SendCollectorBychainidmulRequest;
use AntChain\BOT\Models\SendCollectorBychainidmulResponse;
use AntChain\BOT\Models\SendCollectorBychainidRequest;
use AntChain\BOT\Models\SendCollectorBychainidResponse;
use AntChain\BOT\Models\SendCollectorDevicebizdataRequest;
use AntChain\BOT\Models\SendCollectorDevicebizdataResponse;
use AntChain\BOT\Models\SendCollectorSummarydataRequest;
use AntChain\BOT\Models\SendCollectorSummarydataResponse;
use AntChain\BOT\Models\SendLabelTransferonasyncRequest;
use AntChain\BOT\Models\SendLabelTransferonasyncResponse;
use AntChain\BOT\Models\SendLabelTransferrawonasyncRequest;
use AntChain\BOT\Models\SendLabelTransferrawonasyncResponse;
use AntChain\BOT\Models\SetConsumerSubscribeRequest;
use AntChain\BOT\Models\SetConsumerSubscribeResponse;
use AntChain\BOT\Models\SetConsumerUnsubscribeRequest;
use AntChain\BOT\Models\SetConsumerUnsubscribeResponse;
use AntChain\BOT\Models\StartEvidenceQueryRequest;
use AntChain\BOT\Models\StartEvidenceQueryResponse;
use AntChain\BOT\Models\StartEvidenceStoreRequest;
use AntChain\BOT\Models\StartEvidenceStoreResponse;
use AntChain\BOT\Models\StartTenantBindinfoRequest;
use AntChain\BOT\Models\StartTenantBindinfoResponse;
use AntChain\BOT\Models\StartThingsdidRegisterRequest;
use AntChain\BOT\Models\StartThingsdidRegisterResponse;
use AntChain\BOT\Models\StartTlsnotaryTaskRequest;
use AntChain\BOT\Models\StartTlsnotaryTaskResponse;
use AntChain\BOT\Models\StopAcecContractRequest;
use AntChain\BOT\Models\StopAcecContractResponse;
use AntChain\BOT\Models\SyncLabelTransferrawRequest;
use AntChain\BOT\Models\SyncLabelTransferrawResponse;
use AntChain\BOT\Models\SyncLabelTransferRequest;
use AntChain\BOT\Models\SyncLabelTransferResponse;
use AntChain\BOT\Models\UpdateAlertStrategyRequest;
use AntChain\BOT\Models\UpdateAlertStrategyResponse;
use AntChain\BOT\Models\UpdateCustomerEntityRequest;
use AntChain\BOT\Models\UpdateCustomerEntityResponse;
use AntChain\BOT\Models\UpdateDeviceInfobydeviceRequest;
use AntChain\BOT\Models\UpdateDeviceInfobydeviceResponse;
use AntChain\BOT\Models\UpdateDeviceInfoRequest;
use AntChain\BOT\Models\UpdateDeviceInfoResponse;
use AntChain\BOT\Models\UpdateProductkeyRequest;
use AntChain\BOT\Models\UpdateProductkeyResponse;
use AntChain\BOT\Models\UpdateSceneRequest;
use AntChain\BOT\Models\UpdateSceneResponse;
use AntChain\BOT\Models\UpdateSdkRequest;
use AntChain\BOT\Models\UpdateSdkResponse;
use AntChain\BOT\Models\UpdateTenantRequest;
use AntChain\BOT\Models\UpdateTenantResponse;
use AntChain\BOT\Models\UpdateThingsdidDevicespaceRequest;
use AntChain\BOT\Models\UpdateThingsdidDevicespaceResponse;
use AntChain\BOT\Models\UpdateThingsdidDidRequest;
use AntChain\BOT\Models\UpdateThingsdidDidResponse;
use AntChain\BOT\Models\UpdateThingsdidStatusRequest;
use AntChain\BOT\Models\UpdateThingsdidStatusResponse;
use AntChain\BOT\Models\UpdateThingsdidTenantRequest;
use AntChain\BOT\Models\UpdateThingsdidTenantResponse;
use AntChain\Util\UtilClient;
use Exception;

class Client
{
    protected $_endpoint;

    protected $_regionId;

    protected $_accessKeyId;

    protected $_accessKeySecret;

    protected $_protocol;

    protected $_userAgent;

    protected $_readTimeout;

    protected $_connectTimeout;

    protected $_httpProxy;

    protected $_httpsProxy;

    protected $_socks5Proxy;

    protected $_socks5NetWork;

    protected $_noProxy;

    protected $_maxIdleConns;

    protected $_securityToken;

    protected $_maxIdleTimeMillis;

    protected $_keepAliveDurationMillis;

    protected $_maxRequests;

    protected $_maxRequestsPerHost;

    /**
     * Init client with Config.
     *
     * @param config config contains the necessary information to create a client
     * @param mixed $config
     */
    public function __construct($config)
    {
        if (Utils::isUnset($config)) {
            throw new TeaError([
                'code'    => 'ParameterMissing',
                'message' => "'config' can not be unset",
            ]);
        }
        $this->_accessKeyId             = $config->accessKeyId;
        $this->_accessKeySecret         = $config->accessKeySecret;
        $this->_securityToken           = $config->securityToken;
        $this->_endpoint                = $config->endpoint;
        $this->_protocol                = $config->protocol;
        $this->_userAgent               = $config->userAgent;
        $this->_readTimeout             = Utils::defaultNumber($config->readTimeout, 20000);
        $this->_connectTimeout          = Utils::defaultNumber($config->connectTimeout, 20000);
        $this->_httpProxy               = $config->httpProxy;
        $this->_httpsProxy              = $config->httpsProxy;
        $this->_noProxy                 = $config->noProxy;
        $this->_socks5Proxy             = $config->socks5Proxy;
        $this->_socks5NetWork           = $config->socks5NetWork;
        $this->_maxIdleConns            = Utils::defaultNumber($config->maxIdleConns, 60000);
        $this->_maxIdleTimeMillis       = Utils::defaultNumber($config->maxIdleTimeMillis, 5);
        $this->_keepAliveDurationMillis = Utils::defaultNumber($config->keepAliveDurationMillis, 5000);
        $this->_maxRequests             = Utils::defaultNumber($config->maxRequests, 100);
        $this->_maxRequestsPerHost      = Utils::defaultNumber($config->maxRequestsPerHost, 100);
    }

    /**
     * Encapsulate the request and invoke the network.
     *
     * @param string         $version
     * @param string         $action   api name
     * @param string         $protocol http or https
     * @param string         $method   e.g. GET
     * @param string         $pathname pathname of every api
     * @param mixed[]        $request  which contains request params
     * @param string[]       $headers
     * @param RuntimeOptions $runtime  which controls some details of call api, such as retry times
     *
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     *
     * @return array the response
     */
    public function doRequest($version, $action, $protocol, $method, $pathname, $request, $headers, $runtime)
    {
        $runtime->validate();
        $_runtime = [
            'timeouted'               => 'retry',
            'readTimeout'             => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout'          => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'httpProxy'               => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'              => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'                 => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'maxIdleConns'            => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'maxIdleTimeMillis'       => $this->_maxIdleTimeMillis,
            'keepAliveDurationMillis' => $this->_keepAliveDurationMillis,
            'maxRequests'             => $this->_maxRequests,
            'maxRequestsPerHost'      => $this->_maxRequestsPerHost,
            'retry'                   => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
            // iot??????????????????
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
        while (Tea::allowRetry(@$_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $_request->protocol = Utils::defaultString($this->_protocol, $protocol);
                $_request->method   = $method;
                $_request->pathname = $pathname;
                $_request->query    = [
                    'method'           => $action,
                    'version'          => $version,
                    'sign_type'        => 'HmacSHA1',
                    'req_time'         => UtilClient::getTimestamp(),
                    'req_msg_id'       => UtilClient::getNonce(),
                    'access_key'       => $this->_accessKeyId,
                    'base_sdk_version' => 'TeaSDK-2.0',
                    'sdk_version'      => '1.6.118',
                ];
                if (!Utils::empty_($this->_securityToken)) {
                    $_request->query['security_token'] = $this->_securityToken;
                }
                $_request->headers = Tea::merge([
                    'host'       => Utils::defaultString($this->_endpoint, 'openapi.antchain.antgroup.com'),
                    'user-agent' => Utils::getUserAgent($this->_userAgent),
                ], $headers);
                $tmp                               = Utils::anyifyMapValue(RpcUtils::query($request));
                $_request->body                    = Utils::toFormString($tmp);
                $_request->headers['content-type'] = 'application/x-www-form-urlencoded';
                $signedParam                       = Tea::merge($_request->query, RpcUtils::query($request));
                $_request->query['sign']           = UtilClient::getSignature($signedParam, $this->_accessKeySecret);
                $_lastRequest                      = $_request;
                $_response                         = Tea::send($_request, $_runtime);
                $raw                               = Utils::readAsString($_response->body);
                $obj                               = Utils::parseJSON($raw);
                $res                               = Utils::assertAsMap($obj);
                $resp                              = Utils::assertAsMap(@$res['response']);
                if (UtilClient::hasError($raw, $this->_accessKeySecret)) {
                    throw new TeaError([
                        'message' => @$resp['result_msg'],
                        'data'    => $resp,
                        'code'    => @$resp['result_code'],
                    ]);
                }

                return $resp;
            } catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * Description: acec?????????SPI??????????????????
     * Summary: acec?????????SPI??????????????????.
     *
     * @param OpenAcecContractRequest $request
     *
     * @return OpenAcecContractResponse
     */
    public function openAcecContract($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->openAcecContractEx($request, $headers, $runtime);
    }

    /**
     * Description: acec?????????SPI??????????????????
     * Summary: acec?????????SPI??????????????????.
     *
     * @param OpenAcecContractRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return OpenAcecContractResponse
     */
    public function openAcecContractEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return OpenAcecContractResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.acec.contract.open', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: AI??????????????????SPI??????????????????
     * Summary: acec?????????SPI??????????????????.
     *
     * @param StopAcecContractRequest $request
     *
     * @return StopAcecContractResponse
     */
    public function stopAcecContract($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopAcecContractEx($request, $headers, $runtime);
    }

    /**
     * Description: AI??????????????????SPI??????????????????
     * Summary: acec?????????SPI??????????????????.
     *
     * @param StopAcecContractRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return StopAcecContractResponse
     */
    public function stopAcecContractEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return StopAcecContractResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.acec.contract.stop', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: acec?????????SPI??????????????????
     * Summary: acec?????????SPI??????????????????.
     *
     * @param ResumeAcecContractRequest $request
     *
     * @return ResumeAcecContractResponse
     */
    public function resumeAcecContract($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resumeAcecContractEx($request, $headers, $runtime);
    }

    /**
     * Description: acec?????????SPI??????????????????
     * Summary: acec?????????SPI??????????????????.
     *
     * @param ResumeAcecContractRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ResumeAcecContractResponse
     */
    public function resumeAcecContractEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ResumeAcecContractResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.acec.contract.resume', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????????????????
     * Summary: ??????????????????????????????????????????
     *
     * @param CreateLeaseRealpersonRequest $request
     *
     * @return CreateLeaseRealpersonResponse
     */
    public function createLeaseRealperson($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLeaseRealpersonEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????????????????
     * Summary: ??????????????????????????????????????????
     *
     * @param CreateLeaseRealpersonRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateLeaseRealpersonResponse
     */
    public function createLeaseRealpersonEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateLeaseRealpersonResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.lease.realperson.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????????????????
     * Summary: ??????????????????????????????????????????
     *
     * @param QueryLeaseRealpersonRequest $request
     *
     * @return QueryLeaseRealpersonResponse
     */
    public function queryLeaseRealperson($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryLeaseRealpersonEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????????????????
     * Summary: ??????????????????????????????????????????
     *
     * @param QueryLeaseRealpersonRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return QueryLeaseRealpersonResponse
     */
    public function queryLeaseRealpersonEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryLeaseRealpersonResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.lease.realperson.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????????????????
     * Summary: ????????????????????????????????????
     *
     * @param QueryLeaseRiskRequest $request
     *
     * @return QueryLeaseRiskResponse
     */
    public function queryLeaseRisk($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryLeaseRiskEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????????????????
     * Summary: ????????????????????????????????????
     *
     * @param QueryLeaseRiskRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return QueryLeaseRiskResponse
     */
    public function queryLeaseRiskEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryLeaseRiskResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.lease.risk.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: BAI?????????OCR????????????
     * Summary: BAI?????????OCR??????
     *
     * @param QueryBaiOcrRequest $request
     *
     * @return QueryBaiOcrResponse
     */
    public function queryBaiOcr($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryBaiOcrEx($request, $headers, $runtime);
    }

    /**
     * Description: BAI?????????OCR????????????
     * Summary: BAI?????????OCR??????
     *
     * @param QueryBaiOcrRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return QueryBaiOcrResponse
     */
    public function queryBaiOcrEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryBaiOcrResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.bai.ocr.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: AI???????????????
     * Summary: AI???????????????
     *
     * @param QueryAiidentificationQrcodeRequest $request
     *
     * @return QueryAiidentificationQrcodeResponse
     */
    public function queryAiidentificationQrcode($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryAiidentificationQrcodeEx($request, $headers, $runtime);
    }

    /**
     * Description: AI???????????????
     * Summary: AI???????????????
     *
     * @param QueryAiidentificationQrcodeRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryAiidentificationQrcodeResponse
     */
    public function queryAiidentificationQrcodeEx($request, $headers, $runtime)
    {
        if (!Utils::isUnset($request->fileObject)) {
            $uploadReq = new CreateAntcloudGatewayxFileUploadRequest([
                'authToken' => $request->authToken,
                'apiCode'   => 'blockchain.bot.aiidentification.qrcode.query',
                'fileName'  => $request->fileObjectName,
            ]);
            $uploadResp = $this->createAntcloudGatewayxFileUploadEx($uploadReq, $headers, $runtime);
            if (!UtilClient::isSuccess($uploadResp->resultCode, 'ok')) {
                return new QueryAiidentificationQrcodeResponse([
                    'reqMsgId'   => $uploadResp->reqMsgId,
                    'resultCode' => $uploadResp->resultCode,
                    'resultMsg'  => $uploadResp->resultMsg,
                ]);
            }
            $uploadHeaders = UtilClient::parseUploadHeaders($uploadResp->uploadHeaders);
            UtilClient::putObject($request->fileObject, $uploadHeaders, $uploadResp->uploadUrl);
            $request->fileId = $uploadResp->fileId;
        }
        Utils::validateModel($request);

        return QueryAiidentificationQrcodeResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.aiidentification.qrcode.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: AI????????????
     * Summary: AI????????????.
     *
     * @param QueryAiidentificationGoodsRequest $request
     *
     * @return QueryAiidentificationGoodsResponse
     */
    public function queryAiidentificationGoods($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryAiidentificationGoodsEx($request, $headers, $runtime);
    }

    /**
     * Description: AI????????????
     * Summary: AI????????????.
     *
     * @param QueryAiidentificationGoodsRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryAiidentificationGoodsResponse
     */
    public function queryAiidentificationGoodsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryAiidentificationGoodsResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.aiidentification.goods.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????????????????
     * Summary: ???????????????????????????.
     *
     * @param CheckAiidentificationGoodspointRequest $request
     *
     * @return CheckAiidentificationGoodspointResponse
     */
    public function checkAiidentificationGoodspoint($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkAiidentificationGoodspointEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????????????????
     * Summary: ???????????????????????????.
     *
     * @param CheckAiidentificationGoodspointRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return CheckAiidentificationGoodspointResponse
     */
    public function checkAiidentificationGoodspointEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CheckAiidentificationGoodspointResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.aiidentification.goodspoint.check', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????
     * Summary: AI???????????????
     *
     * @param CheckAiidentificationQrcodeRequest $request
     *
     * @return CheckAiidentificationQrcodeResponse
     */
    public function checkAiidentificationQrcode($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkAiidentificationQrcodeEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????
     * Summary: AI???????????????
     *
     * @param CheckAiidentificationQrcodeRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return CheckAiidentificationQrcodeResponse
     */
    public function checkAiidentificationQrcodeEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CheckAiidentificationQrcodeResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.aiidentification.qrcode.check', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: biot ????????? ??????????????????
     * Summary: biot ????????? ??????????????????.
     *
     * @param CreateAcsDeviceRequest $request
     *
     * @return CreateAcsDeviceResponse
     */
    public function createAcsDevice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAcsDeviceEx($request, $headers, $runtime);
    }

    /**
     * Description: biot ????????? ??????????????????
     * Summary: biot ????????? ??????????????????.
     *
     * @param CreateAcsDeviceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateAcsDeviceResponse
     */
    public function createAcsDeviceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateAcsDeviceResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.acs.device.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: biot ????????? ??????????????????
     * Summary: biot ????????? ??????????????????.
     *
     * @param SendAcsCollectorRequest $request
     *
     * @return SendAcsCollectorResponse
     */
    public function sendAcsCollector($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->sendAcsCollectorEx($request, $headers, $runtime);
    }

    /**
     * Description: biot ????????? ??????????????????
     * Summary: biot ????????? ??????????????????.
     *
     * @param SendAcsCollectorRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return SendAcsCollectorResponse
     */
    public function sendAcsCollectorEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return SendAcsCollectorResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.acs.collector.send', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????????????????
     * Summary: IoT????????????-????????????.
     *
     * @param QueryIotbasicDeviceRequest $request
     *
     * @return QueryIotbasicDeviceResponse
     */
    public function queryIotbasicDevice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryIotbasicDeviceEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????????????????
     * Summary: IoT????????????-????????????.
     *
     * @param QueryIotbasicDeviceRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return QueryIotbasicDeviceResponse
     */
    public function queryIotbasicDeviceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryIotbasicDeviceResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.iotbasic.device.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: IoT????????????????????????
     * Summary: IoT????????????????????????.
     *
     * @param RecognizeIotbasicCustomerRequest $request
     *
     * @return RecognizeIotbasicCustomerResponse
     */
    public function recognizeIotbasicCustomer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->recognizeIotbasicCustomerEx($request, $headers, $runtime);
    }

    /**
     * Description: IoT????????????????????????
     * Summary: IoT????????????????????????.
     *
     * @param RecognizeIotbasicCustomerRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return RecognizeIotbasicCustomerResponse
     */
    public function recognizeIotbasicCustomerEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return RecognizeIotbasicCustomerResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.iotbasic.customer.recognize', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: IoT????????????-????????????
     * Summary: IoT????????????-????????????
     *
     * @param CertifyIotbasicDeviceRequest $request
     *
     * @return CertifyIotbasicDeviceResponse
     */
    public function certifyIotbasicDevice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->certifyIotbasicDeviceEx($request, $headers, $runtime);
    }

    /**
     * Description: IoT????????????-????????????
     * Summary: IoT????????????-????????????
     *
     * @param CertifyIotbasicDeviceRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CertifyIotbasicDeviceResponse
     */
    public function certifyIotbasicDeviceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CertifyIotbasicDeviceResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.iotbasic.device.certify', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: iot??????????????????????????????????????????????????????????????????????????????
     * Summary: iot????????????????????????.
     *
     * @param OperateIotbasicUserRequest $request
     *
     * @return OperateIotbasicUserResponse
     */
    public function operateIotbasicUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->operateIotbasicUserEx($request, $headers, $runtime);
    }

    /**
     * Description: iot??????????????????????????????????????????????????????????????????????????????
     * Summary: iot????????????????????????.
     *
     * @param OperateIotbasicUserRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return OperateIotbasicUserResponse
     */
    public function operateIotbasicUserEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return OperateIotbasicUserResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.iotbasic.user.operate', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: iot ??????????????????
     * Summary: iot ??????????????????.
     *
     * @param OperateIotbasicPermissionRequest $request
     *
     * @return OperateIotbasicPermissionResponse
     */
    public function operateIotbasicPermission($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->operateIotbasicPermissionEx($request, $headers, $runtime);
    }

    /**
     * Description: iot ??????????????????
     * Summary: iot ??????????????????.
     *
     * @param OperateIotbasicPermissionRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return OperateIotbasicPermissionResponse
     */
    public function operateIotbasicPermissionEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return OperateIotbasicPermissionResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.iotbasic.permission.operate', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: IoT????????????-??????sn????????????
     * Summary: IoT????????????-??????sn????????????.
     *
     * @param QueryIotbasicSnRequest $request
     *
     * @return QueryIotbasicSnResponse
     */
    public function queryIotbasicSn($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryIotbasicSnEx($request, $headers, $runtime);
    }

    /**
     * Description: IoT????????????-??????sn????????????
     * Summary: IoT????????????-??????sn????????????.
     *
     * @param QueryIotbasicSnRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return QueryIotbasicSnResponse
     */
    public function queryIotbasicSnEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryIotbasicSnResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.iotbasic.sn.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: IoT????????????-??????????????????
     * Summary: IoT????????????-??????????????????.
     *
     * @param QueryDeviceSpecsRequest $request
     *
     * @return QueryDeviceSpecsResponse
     */
    public function queryDeviceSpecs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryDeviceSpecsEx($request, $headers, $runtime);
    }

    /**
     * Description: IoT????????????-??????????????????
     * Summary: IoT????????????-??????????????????.
     *
     * @param QueryDeviceSpecsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return QueryDeviceSpecsResponse
     */
    public function queryDeviceSpecsEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryDeviceSpecsResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.device.specs.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????????????????
     * Summary: ????????????????????????????????????.
     *
     * @param QueryIotplatformPurchaseorderRequest $request
     *
     * @return QueryIotplatformPurchaseorderResponse
     */
    public function queryIotplatformPurchaseorder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryIotplatformPurchaseorderEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????????????????
     * Summary: ????????????????????????????????????.
     *
     * @param QueryIotplatformPurchaseorderRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryIotplatformPurchaseorderResponse
     */
    public function queryIotplatformPurchaseorderEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryIotplatformPurchaseorderResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.iotplatform.purchaseorder.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????PC?????????????????????MeshId???SN??????????????????
     * Summary: ??????MeshId?????????SN.
     *
     * @param ImportIotplatformMeshidRequest $request
     *
     * @return ImportIotplatformMeshidResponse
     */
    public function importIotplatformMeshid($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->importIotplatformMeshidEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????PC?????????????????????MeshId???SN??????????????????
     * Summary: ??????MeshId?????????SN.
     *
     * @param ImportIotplatformMeshidRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ImportIotplatformMeshidResponse
     */
    public function importIotplatformMeshidEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ImportIotplatformMeshidResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.iotplatform.meshid.import', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????????????????????????????
     * Summary: ?????????????????????????????????????????????.
     *
     * @param ImportPurchaseorderThirdpartyRequest $request
     *
     * @return ImportPurchaseorderThirdpartyResponse
     */
    public function importPurchaseorderThirdparty($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->importPurchaseorderThirdpartyEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????????????????????????????
     * Summary: ?????????????????????????????????????????????.
     *
     * @param ImportPurchaseorderThirdpartyRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ImportPurchaseorderThirdpartyResponse
     */
    public function importPurchaseorderThirdpartyEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ImportPurchaseorderThirdpartyResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.purchaseorder.thirdparty.import', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????????????????
     * Summary: ?????????????????????????????????.
     *
     * @param AddUserRoleRequest $request
     *
     * @return AddUserRoleResponse
     */
    public function addUserRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addUserRoleEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????????????????
     * Summary: ?????????????????????????????????.
     *
     * @param AddUserRoleRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return AddUserRoleResponse
     */
    public function addUserRoleEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return AddUserRoleResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.user.role.add', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????SKU
     * Summary: ??????????????????SKU.
     *
     * @param AddGoodsSkuRequest $request
     *
     * @return AddGoodsSkuResponse
     */
    public function addGoodsSku($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addGoodsSkuEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????SKU
     * Summary: ??????????????????SKU.
     *
     * @param AddGoodsSkuRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return AddGoodsSkuResponse
     */
    public function addGoodsSkuEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return AddGoodsSkuResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.goods.sku.add', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param CreateDeviceDatamodelRequest $request
     *
     * @return CreateDeviceDatamodelResponse
     */
    public function createDeviceDatamodel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDeviceDatamodelEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param CreateDeviceDatamodelRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDeviceDatamodelResponse
     */
    public function createDeviceDatamodelEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateDeviceDatamodelResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.device.datamodel.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param GetDeviceDatamodelRequest $request
     *
     * @return GetDeviceDatamodelResponse
     */
    public function getDeviceDatamodel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDeviceDatamodelEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param GetDeviceDatamodelRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetDeviceDatamodelResponse
     */
    public function getDeviceDatamodelEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetDeviceDatamodelResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.device.datamodel.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????
     * Summary: ????????????.
     *
     * @param ImportDeviceRequest $request
     *
     * @return ImportDeviceResponse
     */
    public function importDevice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->importDeviceEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????
     * Summary: ????????????.
     *
     * @param ImportDeviceRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ImportDeviceResponse
     */
    public function importDeviceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ImportDeviceResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.device.import', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????chainId??????????????????
     * Summary: ??????chainId??????????????????.
     *
     * @param GetDeviceBychainidRequest $request
     *
     * @return GetDeviceBychainidResponse
     */
    public function getDeviceBychainid($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDeviceBychainidEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????chainId??????????????????
     * Summary: ??????chainId??????????????????.
     *
     * @param GetDeviceBychainidRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetDeviceBychainidResponse
     */
    public function getDeviceBychainidEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetDeviceBychainidResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.device.bychainid.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????deviceId??????????????????
     * Summary: ??????deviceId??????????????????.
     *
     * @param GetDeviceBydeviceidRequest $request
     *
     * @return GetDeviceBydeviceidResponse
     */
    public function getDeviceBydeviceid($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDeviceBydeviceidEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????deviceId??????????????????
     * Summary: ??????deviceId??????????????????.
     *
     * @param GetDeviceBydeviceidRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetDeviceBydeviceidResponse
     */
    public function getDeviceBydeviceidEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetDeviceBydeviceidResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.device.bydeviceid.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????????????????
     * Summary: ???????????????????????????.
     *
     * @param ListDeviceBysceneRequest $request
     *
     * @return ListDeviceBysceneResponse
     */
    public function listDeviceByscene($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDeviceBysceneEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????????????????
     * Summary: ???????????????????????????.
     *
     * @param ListDeviceBysceneRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListDeviceBysceneResponse
     */
    public function listDeviceBysceneEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListDeviceBysceneResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.device.byscene.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param UpdateDeviceInfoRequest $request
     *
     * @return UpdateDeviceInfoResponse
     */
    public function updateDeviceInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDeviceInfoEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param UpdateDeviceInfoRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateDeviceInfoResponse
     */
    public function updateDeviceInfoEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateDeviceInfoResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.device.info.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????deviceId????????????
     * Summary: ??????deviceId????????????.
     *
     * @param CreateDistributedeviceBydeviceidRequest $request
     *
     * @return CreateDistributedeviceBydeviceidResponse
     */
    public function createDistributedeviceBydeviceid($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDistributedeviceBydeviceidEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????deviceId????????????
     * Summary: ??????deviceId????????????.
     *
     * @param CreateDistributedeviceBydeviceidRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateDistributedeviceBydeviceidResponse
     */
    public function createDistributedeviceBydeviceidEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateDistributedeviceBydeviceidResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.distributedevice.bydeviceid.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????Id??????
     * Summary: ??????????????????Id??????.
     *
     * @param CreateDistributedeviceBychainidRequest $request
     *
     * @return CreateDistributedeviceBychainidResponse
     */
    public function createDistributedeviceBychainid($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDistributedeviceBychainidEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????Id??????
     * Summary: ??????????????????Id??????.
     *
     * @param CreateDistributedeviceBychainidRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateDistributedeviceBychainidResponse
     */
    public function createDistributedeviceBychainidEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateDistributedeviceBychainidResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.distributedevice.bychainid.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param ReplaceDistributedeviceBychainidRequest $request
     *
     * @return ReplaceDistributedeviceBychainidResponse
     */
    public function replaceDistributedeviceBychainid($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->replaceDistributedeviceBychainidEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param ReplaceDistributedeviceBychainidRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return ReplaceDistributedeviceBychainidResponse
     */
    public function replaceDistributedeviceBychainidEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ReplaceDistributedeviceBychainidResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.distributedevice.bychainid.replace', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????????????????
     * Summary: ??????????????????.
     *
     * @param SendCollectorBychainidRequest $request
     *
     * @return SendCollectorBychainidResponse
     */
    public function sendCollectorBychainid($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->sendCollectorBychainidEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????????????????
     * Summary: ??????????????????.
     *
     * @param SendCollectorBychainidRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return SendCollectorBychainidResponse
     */
    public function sendCollectorBychainidEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return SendCollectorBychainidResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.collector.bychainid.send', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????Id??????????????????
     * Summary: ??????Id??????????????????.
     *
     * @param GetDistributedeviceBychainidRequest $request
     *
     * @return GetDistributedeviceBychainidResponse
     */
    public function getDistributedeviceBychainid($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDistributedeviceBychainidEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????Id??????????????????
     * Summary: ??????Id??????????????????.
     *
     * @param GetDistributedeviceBychainidRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return GetDistributedeviceBychainidResponse
     */
    public function getDistributedeviceBychainidEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetDistributedeviceBychainidResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.distributedevice.bychainid.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????????????????
     * Summary: ?????????????????????????????????.
     *
     * @param ListDistributedeviceBysceneRequest $request
     *
     * @return ListDistributedeviceBysceneResponse
     */
    public function listDistributedeviceByscene($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDistributedeviceBysceneEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????????????????
     * Summary: ?????????????????????????????????.
     *
     * @param ListDistributedeviceBysceneRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ListDistributedeviceBysceneResponse
     */
    public function listDistributedeviceBysceneEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListDistributedeviceBysceneResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.distributedevice.byscene.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????
     * Summary: ???????????????.
     *
     * @param CreateConsumerRequest $request
     *
     * @return CreateConsumerResponse
     */
    public function createConsumer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConsumerEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????
     * Summary: ???????????????.
     *
     * @param CreateConsumerRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateConsumerResponse
     */
    public function createConsumerEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateConsumerResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.consumer.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????
     * Summary: ???????????????.
     *
     * @param SetConsumerSubscribeRequest $request
     *
     * @return SetConsumerSubscribeResponse
     */
    public function setConsumerSubscribe($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->setConsumerSubscribeEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????
     * Summary: ???????????????.
     *
     * @param SetConsumerSubscribeRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return SetConsumerSubscribeResponse
     */
    public function setConsumerSubscribeEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return SetConsumerSubscribeResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.consumer.subscribe.set', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????????????????
     * Summary: ???????????????????????????.
     *
     * @param SetConsumerUnsubscribeRequest $request
     *
     * @return SetConsumerUnsubscribeResponse
     */
    public function setConsumerUnsubscribe($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->setConsumerUnsubscribeEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????????????????
     * Summary: ???????????????????????????.
     *
     * @param SetConsumerUnsubscribeRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return SetConsumerUnsubscribeResponse
     */
    public function setConsumerUnsubscribeEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return SetConsumerUnsubscribeResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.consumer.unsubscribe.set', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????
     * Summary: ?????????????????????.
     *
     * @param PullConsumerDatasourceRequest $request
     *
     * @return PullConsumerDatasourceResponse
     */
    public function pullConsumerDatasource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pullConsumerDatasourceEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????
     * Summary: ?????????????????????.
     *
     * @param PullConsumerDatasourceRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return PullConsumerDatasourceResponse
     */
    public function pullConsumerDatasourceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return PullConsumerDatasourceResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.consumer.datasource.pull', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????id????????????????????????
     * Summary: ????????????id????????????????????????.
     *
     * @param GetDistributedeviceBydeviceidRequest $request
     *
     * @return GetDistributedeviceBydeviceidResponse
     */
    public function getDistributedeviceBydeviceid($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDistributedeviceBydeviceidEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????id????????????????????????
     * Summary: ????????????id????????????????????????.
     *
     * @param GetDistributedeviceBydeviceidRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return GetDistributedeviceBydeviceidResponse
     */
    public function getDistributedeviceBydeviceidEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetDistributedeviceBydeviceidResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.distributedevice.bydeviceid.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????id????????????
     * Summary: ????????????id????????????.
     *
     * @param GetDistributedeviceBydisidRequest $request
     *
     * @return GetDistributedeviceBydisidResponse
     */
    public function getDistributedeviceBydisid($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDistributedeviceBydisidEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????id????????????
     * Summary: ????????????id????????????.
     *
     * @param GetDistributedeviceBydisidRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return GetDistributedeviceBydisidResponse
     */
    public function getDistributedeviceBydisidEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetDistributedeviceBydisidResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.distributedevice.bydisid.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param ImportPeripheralRequest $request
     *
     * @return ImportPeripheralResponse
     */
    public function importPeripheral($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->importPeripheralEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param ImportPeripheralRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ImportPeripheralResponse
     */
    public function importPeripheralEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ImportPeripheralResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.peripheral.import', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????ID????????????
     * Summary: ????????????????????????ID????????????.
     *
     * @param GetPeripheralBychainperipheralidRequest $request
     *
     * @return GetPeripheralBychainperipheralidResponse
     */
    public function getPeripheralBychainperipheralid($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPeripheralBychainperipheralidEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????ID????????????
     * Summary: ????????????????????????ID????????????.
     *
     * @param GetPeripheralBychainperipheralidRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return GetPeripheralBychainperipheralidResponse
     */
    public function getPeripheralBychainperipheralidEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetPeripheralBychainperipheralidResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.peripheral.bychainperipheralid.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????ID????????????
     * Summary: ??????????????????ID????????????.
     *
     * @param GetPeripheralByperipheralidRequest $request
     *
     * @return GetPeripheralByperipheralidResponse
     */
    public function getPeripheralByperipheralid($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPeripheralByperipheralidEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????ID????????????
     * Summary: ??????????????????ID????????????.
     *
     * @param GetPeripheralByperipheralidRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return GetPeripheralByperipheralidResponse
     */
    public function getPeripheralByperipheralidEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetPeripheralByperipheralidResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.peripheral.byperipheralid.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param ListPeripheralBysceneRequest $request
     *
     * @return ListPeripheralBysceneResponse
     */
    public function listPeripheralByscene($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPeripheralBysceneEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param ListPeripheralBysceneRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListPeripheralBysceneResponse
     */
    public function listPeripheralBysceneEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListPeripheralBysceneResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.peripheral.byscene.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????Id??????
     * Summary: ??????????????????Id??????.
     *
     * @param CreateDistributedeviceByperipheralidRequest $request
     *
     * @return CreateDistributedeviceByperipheralidResponse
     */
    public function createDistributedeviceByperipheralid($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDistributedeviceByperipheralidEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????Id??????
     * Summary: ??????????????????Id??????.
     *
     * @param CreateDistributedeviceByperipheralidRequest $request
     * @param string[]                                    $headers
     * @param RuntimeOptions                              $runtime
     *
     * @return CreateDistributedeviceByperipheralidResponse
     */
    public function createDistributedeviceByperipheralidEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateDistributedeviceByperipheralidResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.distributedevice.byperipheralid.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????Id??????
     * Summary: ????????????????????????Id??????.
     *
     * @param CreateDistributedeviceBychainperipheralidRequest $request
     *
     * @return CreateDistributedeviceBychainperipheralidResponse
     */
    public function createDistributedeviceBychainperipheralid($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDistributedeviceBychainperipheralidEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????Id??????
     * Summary: ????????????????????????Id??????.
     *
     * @param CreateDistributedeviceBychainperipheralidRequest $request
     * @param string[]                                         $headers
     * @param RuntimeOptions                                   $runtime
     *
     * @return CreateDistributedeviceBychainperipheralidResponse
     */
    public function createDistributedeviceBychainperipheralidEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateDistributedeviceBychainperipheralidResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.distributedevice.bychainperipheralid.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????????????? by ??????????????????ID
     * Summary: ???????????????????????? by ??????????????????ID.
     *
     * @param ReplaceDistributedeviceBychainperipheralidRequest $request
     *
     * @return ReplaceDistributedeviceBychainperipheralidResponse
     */
    public function replaceDistributedeviceBychainperipheralid($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->replaceDistributedeviceBychainperipheralidEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????????????? by ??????????????????ID
     * Summary: ???????????????????????? by ??????????????????ID.
     *
     * @param ReplaceDistributedeviceBychainperipheralidRequest $request
     * @param string[]                                          $headers
     * @param RuntimeOptions                                    $runtime
     *
     * @return ReplaceDistributedeviceBychainperipheralidResponse
     */
    public function replaceDistributedeviceBychainperipheralidEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ReplaceDistributedeviceBychainperipheralidResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.distributedevice.bychainperipheralid.replace', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????????????????
     * Summary: ????????????????????????????????????.
     *
     * @param ListDistributedeviceByperipheralsceneRequest $request
     *
     * @return ListDistributedeviceByperipheralsceneResponse
     */
    public function listDistributedeviceByperipheralscene($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDistributedeviceByperipheralsceneEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????????????????
     * Summary: ????????????????????????????????????.
     *
     * @param ListDistributedeviceByperipheralsceneRequest $request
     * @param string[]                                     $headers
     * @param RuntimeOptions                               $runtime
     *
     * @return ListDistributedeviceByperipheralsceneResponse
     */
    public function listDistributedeviceByperipheralsceneEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ListDistributedeviceByperipheralsceneResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.distributedevice.byperipheralscene.list', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????ID??????????????????????????????
     * Summary: ??????????????????ID??????????????????????????????.
     *
     * @param GetDistributedeviceByperipheralidRequest $request
     *
     * @return GetDistributedeviceByperipheralidResponse
     */
    public function getDistributedeviceByperipheralid($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDistributedeviceByperipheralidEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????ID??????????????????????????????
     * Summary: ??????????????????ID??????????????????????????????.
     *
     * @param GetDistributedeviceByperipheralidRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return GetDistributedeviceByperipheralidResponse
     */
    public function getDistributedeviceByperipheralidEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return GetDistributedeviceByperipheralidResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.distributedevice.byperipheralid.get', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????by_devcie
     * Summary: ????????????by_devcie.
     *
     * @param CreateDistributedeviceBydeviceRequest $request
     *
     * @return CreateDistributedeviceBydeviceResponse
     */
    public function createDistributedeviceBydevice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDistributedeviceBydeviceEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????by_devcie
     * Summary: ????????????by_devcie.
     *
     * @param CreateDistributedeviceBydeviceRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateDistributedeviceBydeviceResponse
     */
    public function createDistributedeviceBydeviceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateDistributedeviceBydeviceResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.distributedevice.bydevice.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param CreateTaskRequest $request
     *
     * @return CreateTaskResponse
     */
    public function createTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTaskEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param CreateTaskRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateTaskResponse
     */
    public function createTaskEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateTaskResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.task.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param QueryTaskRequest $request
     *
     * @return QueryTaskResponse
     */
    public function queryTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryTaskEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param QueryTaskRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return QueryTaskResponse
     */
    public function queryTaskEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryTaskResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.task.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param QueryAnalysisRequest $request
     *
     * @return QueryAnalysisResponse
     */
    public function queryAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryAnalysisEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param QueryAnalysisRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return QueryAnalysisResponse
     */
    public function queryAnalysisEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryAnalysisResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.analysis.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????mul???????????????????????????????????????????????????????????????
     * Summary: ??????????????????mul.
     *
     * @param SendCollectorBychainidmulRequest $request
     *
     * @return SendCollectorBychainidmulResponse
     */
    public function sendCollectorBychainidmul($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->sendCollectorBychainidmulEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????mul???????????????????????????????????????????????????????????????
     * Summary: ??????????????????mul.
     *
     * @param SendCollectorBychainidmulRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return SendCollectorBychainidmulResponse
     */
    public function sendCollectorBychainidmulEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return SendCollectorBychainidmulResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.collector.bychainidmul.send', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????
     * Summary: ????????????????????????.
     *
     * @param SendCollectorDevicebizdataRequest $request
     *
     * @return SendCollectorDevicebizdataResponse
     */
    public function sendCollectorDevicebizdata($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->sendCollectorDevicebizdataEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????
     * Summary: ????????????????????????.
     *
     * @param SendCollectorDevicebizdataRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return SendCollectorDevicebizdataResponse
     */
    public function sendCollectorDevicebizdataEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return SendCollectorDevicebizdataResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.collector.devicebizdata.send', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????by_devcie
     * Summary: ??????????????????by_devcie.
     *
     * @param UpdateDeviceInfobydeviceRequest $request
     *
     * @return UpdateDeviceInfobydeviceResponse
     */
    public function updateDeviceInfobydevice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDeviceInfobydeviceEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????by_devcie
     * Summary: ??????????????????by_devcie.
     *
     * @param UpdateDeviceInfobydeviceRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateDeviceInfobydeviceResponse
     */
    public function updateDeviceInfobydeviceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateDeviceInfobydeviceResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.device.infobydevice.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????
     * Summary: ????????????.
     *
     * @param OfflineDeviceRequest $request
     *
     * @return OfflineDeviceResponse
     */
    public function offlineDevice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->offlineDeviceEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????
     * Summary: ????????????.
     *
     * @param OfflineDeviceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return OfflineDeviceResponse
     */
    public function offlineDeviceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return OfflineDeviceResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.device.offline', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????MQTT token
     * Summary: ??????MQTT token.
     *
     * @param ApplyMqtokenRequest $request
     *
     * @return ApplyMqtokenResponse
     */
    public function applyMqtoken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->applyMqtokenEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????MQTT token
     * Summary: ??????MQTT token.
     *
     * @param ApplyMqtokenRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ApplyMqtokenResponse
     */
    public function applyMqtokenEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ApplyMqtokenResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.mqtoken.apply', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????????????????
     * Summary: ??????????????????.
     *
     * @param QueryDeviceRegistrationRequest $request
     *
     * @return QueryDeviceRegistrationResponse
     */
    public function queryDeviceRegistration($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryDeviceRegistrationEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????????????????
     * Summary: ??????????????????.
     *
     * @param QueryDeviceRegistrationRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryDeviceRegistrationResponse
     */
    public function queryDeviceRegistrationEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryDeviceRegistrationResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.device.registration.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param AddAbnormalRequest $request
     *
     * @return AddAbnormalResponse
     */
    public function addAbnormal($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addAbnormalEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param AddAbnormalRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return AddAbnormalResponse
     */
    public function addAbnormalEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return AddAbnormalResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.abnormal.add', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????????????????????????????
     * Summary: ???????????????????????????
     *
     * @param OnlineDeviceRequest $request
     *
     * @return OnlineDeviceResponse
     */
    public function onlineDevice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->onlineDeviceEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????????????????????????????
     * Summary: ???????????????????????????
     *
     * @param OnlineDeviceRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return OnlineDeviceResponse
     */
    public function onlineDeviceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return OnlineDeviceResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.device.online', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????
     * Summary: ????????????.
     *
     * @param OfflineDeviceByunregisterRequest $request
     *
     * @return OfflineDeviceByunregisterResponse
     */
    public function offlineDeviceByunregister($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->offlineDeviceByunregisterEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????
     * Summary: ????????????.
     *
     * @param OfflineDeviceByunregisterRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return OfflineDeviceByunregisterResponse
     */
    public function offlineDeviceByunregisterEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return OfflineDeviceByunregisterResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.device.byunregister.offline', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param QueryLabelTraceRequest $request
     *
     * @return QueryLabelTraceResponse
     */
    public function queryLabelTrace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryLabelTraceEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param QueryLabelTraceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return QueryLabelTraceResponse
     */
    public function queryLabelTraceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryLabelTraceResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.label.trace.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????
     * Summary: ????????????????????????.
     *
     * @param SyncLabelTransferRequest $request
     *
     * @return SyncLabelTransferResponse
     */
    public function syncLabelTransfer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->syncLabelTransferEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????
     * Summary: ????????????????????????.
     *
     * @param SyncLabelTransferRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return SyncLabelTransferResponse
     */
    public function syncLabelTransferEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return SyncLabelTransferResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.label.transfer.sync', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param AddLabelAssetRequest $request
     *
     * @return AddLabelAssetResponse
     */
    public function addLabelAsset($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addLabelAssetEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param AddLabelAssetRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return AddLabelAssetResponse
     */
    public function addLabelAssetEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return AddLabelAssetResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.label.asset.add', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????tx_hash??????????????????
     * Summary: ??????????????????.
     *
     * @param QueryDataBytxhashRequest $request
     *
     * @return QueryDataBytxhashResponse
     */
    public function queryDataBytxhash($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryDataBytxhashEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????tx_hash??????????????????
     * Summary: ??????????????????.
     *
     * @param QueryDataBytxhashRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return QueryDataBytxhashResponse
     */
    public function queryDataBytxhashEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryDataBytxhashResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.data.bytxhash.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????taskId ????????????????????????
     * Summary: ????????????????????????
     *
     * @param ExecUnprocessedTaskRequest $request
     *
     * @return ExecUnprocessedTaskResponse
     */
    public function execUnprocessedTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->execUnprocessedTaskEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????taskId ????????????????????????
     * Summary: ????????????????????????
     *
     * @param ExecUnprocessedTaskRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ExecUnprocessedTaskResponse
     */
    public function execUnprocessedTaskEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ExecUnprocessedTaskResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.unprocessed.task.exec', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param SendCollectorSummarydataRequest $request
     *
     * @return SendCollectorSummarydataResponse
     */
    public function sendCollectorSummarydata($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->sendCollectorSummarydataEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param SendCollectorSummarydataRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return SendCollectorSummarydataResponse
     */
    public function sendCollectorSummarydataEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return SendCollectorSummarydataResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.collector.summarydata.send', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????????????????
     * Summary: ????????????.
     *
     * @param AddCertificateRequest $request
     *
     * @return AddCertificateResponse
     */
    public function addCertificate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addCertificateEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????????????????
     * Summary: ????????????.
     *
     * @param AddCertificateRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return AddCertificateResponse
     */
    public function addCertificateEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return AddCertificateResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.certificate.add', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????
     * Summary: ????????????.
     *
     * @param AddTenantRequest $request
     *
     * @return AddTenantResponse
     */
    public function addTenant($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addTenantEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????
     * Summary: ????????????.
     *
     * @param AddTenantRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return AddTenantResponse
     */
    public function addTenantEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return AddTenantResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.tenant.add', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????
     * Summary: ???????????????
     *
     * @param AddSceneRequest $request
     *
     * @return AddSceneResponse
     */
    public function addScene($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addSceneEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????
     * Summary: ???????????????
     *
     * @param AddSceneRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return AddSceneResponse
     */
    public function addSceneEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return AddSceneResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.scene.add', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param DeploySceneRequest $request
     *
     * @return DeploySceneResponse
     */
    public function deployScene($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deploySceneEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param DeploySceneRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeploySceneResponse
     */
    public function deploySceneEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DeploySceneResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.scene.deploy', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????sdk
     * Summary: ??????sdk.
     *
     * @param AddSdkRequest $request
     *
     * @return AddSdkResponse
     */
    public function addSdk($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addSdkEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????sdk
     * Summary: ??????sdk.
     *
     * @param AddSdkRequest  $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return AddSdkResponse
     */
    public function addSdkEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return AddSdkResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.sdk.add', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????sdk
     * Summary: ??????sdk.
     *
     * @param UpdateSdkRequest $request
     *
     * @return UpdateSdkResponse
     */
    public function updateSdk($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSdkEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????sdk
     * Summary: ??????sdk.
     *
     * @param UpdateSdkRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateSdkResponse
     */
    public function updateSdkEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateSdkResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.sdk.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????productKey
     * Summary: ??????productKey.
     *
     * @param AddProductkeyRequest $request
     *
     * @return AddProductkeyResponse
     */
    public function addProductkey($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addProductkeyEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????productKey
     * Summary: ??????productKey.
     *
     * @param AddProductkeyRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return AddProductkeyResponse
     */
    public function addProductkeyEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return AddProductkeyResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.productkey.add', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????productKey
     * Summary: ??????productKey.
     *
     * @param UpdateProductkeyRequest $request
     *
     * @return UpdateProductkeyResponse
     */
    public function updateProductkey($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProductkeyEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????productKey
     * Summary: ??????productKey.
     *
     * @param UpdateProductkeyRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateProductkeyResponse
     */
    public function updateProductkeyEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateProductkeyResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.productkey.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????
     * Summary: ????????????.
     *
     * @param UpdateTenantRequest $request
     *
     * @return UpdateTenantResponse
     */
    public function updateTenant($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTenantEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????
     * Summary: ????????????.
     *
     * @param UpdateTenantRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateTenantResponse
     */
    public function updateTenantEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateTenantResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.tenant.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????
     * Summary: ???????????????
     *
     * @param UpdateSceneRequest $request
     *
     * @return UpdateSceneResponse
     */
    public function updateScene($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSceneEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????
     * Summary: ???????????????
     *
     * @param UpdateSceneRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateSceneResponse
     */
    public function updateSceneEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateSceneResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.scene.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????????????? blockchain.bot.label.transfer.sync?????????????????????
     * Summary: ?????????????????????????????????.
     *
     * @param SendLabelTransferonasyncRequest $request
     *
     * @return SendLabelTransferonasyncResponse
     */
    public function sendLabelTransferonasync($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->sendLabelTransferonasyncEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????????????? blockchain.bot.label.transfer.sync?????????????????????
     * Summary: ?????????????????????????????????.
     *
     * @param SendLabelTransferonasyncRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return SendLabelTransferonasyncResponse
     */
    public function sendLabelTransferonasyncEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return SendLabelTransferonasyncResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.label.transferonasync.send', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????????????????reponsePeriod ????????????????????????????????????????????????????????????
     * Summary: ????????????????????????.
     *
     * @param QueryAsyncRequestRequest $request
     *
     * @return QueryAsyncRequestResponse
     */
    public function queryAsyncRequest($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryAsyncRequestEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????????????????reponsePeriod ????????????????????????????????????????????????????????????
     * Summary: ????????????????????????.
     *
     * @param QueryAsyncRequestRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return QueryAsyncRequestResponse
     */
    public function queryAsyncRequestEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryAsyncRequestResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.async.request.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param PagequeryTenantRequest $request
     *
     * @return PagequeryTenantResponse
     */
    public function pagequeryTenant($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pagequeryTenantEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param PagequeryTenantRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return PagequeryTenantResponse
     */
    public function pagequeryTenantEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return PagequeryTenantResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.tenant.pagequery', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????
     * Summary: ?????????????????????
     *
     * @param PagequerySceneRequest $request
     *
     * @return PagequerySceneResponse
     */
    public function pagequeryScene($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pagequerySceneEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????
     * Summary: ?????????????????????
     *
     * @param PagequerySceneRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return PagequerySceneResponse
     */
    public function pagequerySceneEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return PagequerySceneResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.scene.pagequery', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????sdk
     * Summary: ????????????sdk.
     *
     * @param PagequerySdkRequest $request
     *
     * @return PagequerySdkResponse
     */
    public function pagequerySdk($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pagequerySdkEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????sdk
     * Summary: ????????????sdk.
     *
     * @param PagequerySdkRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return PagequerySdkResponse
     */
    public function pagequerySdkEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return PagequerySdkResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.sdk.pagequery', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????productKey
     * Summary: ????????????productKey.
     *
     * @param PagequeryProductkeyRequest $request
     *
     * @return PagequeryProductkeyResponse
     */
    public function pagequeryProductkey($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pagequeryProductkeyEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????productKey
     * Summary: ????????????productKey.
     *
     * @param PagequeryProductkeyRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return PagequeryProductkeyResponse
     */
    public function pagequeryProductkeyEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return PagequeryProductkeyResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.productkey.pagequery', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????????????????
     * Summary: ?????????????????????????????????.
     *
     * @param PagequeryDataverifyFailureRequest $request
     *
     * @return PagequeryDataverifyFailureResponse
     */
    public function pagequeryDataverifyFailure($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pagequeryDataverifyFailureEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????????????????
     * Summary: ?????????????????????????????????.
     *
     * @param PagequeryDataverifyFailureRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return PagequeryDataverifyFailureResponse
     */
    public function pagequeryDataverifyFailureEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return PagequeryDataverifyFailureResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.dataverify.failure.pagequery', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description:  ??????????????????
     * Summary:  ??????????????????.
     *
     * @param AddAlertStrategyRequest $request
     *
     * @return AddAlertStrategyResponse
     */
    public function addAlertStrategy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addAlertStrategyEx($request, $headers, $runtime);
    }

    /**
     * Description:  ??????????????????
     * Summary:  ??????????????????.
     *
     * @param AddAlertStrategyRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return AddAlertStrategyResponse
     */
    public function addAlertStrategyEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return AddAlertStrategyResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.alert.strategy.add', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????
     * Summary: ????????????????????????.
     *
     * @param UpdateAlertStrategyRequest $request
     *
     * @return UpdateAlertStrategyResponse
     */
    public function updateAlertStrategy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAlertStrategyEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????
     * Summary: ????????????????????????.
     *
     * @param UpdateAlertStrategyRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateAlertStrategyResponse
     */
    public function updateAlertStrategyEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateAlertStrategyResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.alert.strategy.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param PagequeryAlertStrategyRequest $request
     *
     * @return PagequeryAlertStrategyResponse
     */
    public function pagequeryAlertStrategy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pagequeryAlertStrategyEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param PagequeryAlertStrategyRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return PagequeryAlertStrategyResponse
     */
    public function pagequeryAlertStrategyEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return PagequeryAlertStrategyResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.alert.strategy.pagequery', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????????????????????????????????????????
     * Summary: ???????????????????????????????????????????????????.
     *
     * @param SyncLabelTransferrawRequest $request
     *
     * @return SyncLabelTransferrawResponse
     */
    public function syncLabelTransferraw($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->syncLabelTransferrawEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????????????????????????????????????????
     * Summary: ???????????????????????????????????????????????????.
     *
     * @param SyncLabelTransferrawRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return SyncLabelTransferrawResponse
     */
    public function syncLabelTransferrawEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return SyncLabelTransferrawResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.label.transferraw.sync', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????????????????????????????????????????????????? blockchain.bot.label.transferraw.sync?????????????????????
     * Summary: ????????????????????????????????????????????????????????????.
     *
     * @param SendLabelTransferrawonasyncRequest $request
     *
     * @return SendLabelTransferrawonasyncResponse
     */
    public function sendLabelTransferrawonasync($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->sendLabelTransferrawonasyncEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????????????????????????????????????????????????? blockchain.bot.label.transferraw.sync?????????????????????
     * Summary: ????????????????????????????????????????????????????????????.
     *
     * @param SendLabelTransferrawonasyncRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return SendLabelTransferrawonasyncResponse
     */
    public function sendLabelTransferrawonasyncEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return SendLabelTransferrawonasyncResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.label.transferrawonasync.send', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????key???deviceId??????, ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param QueryDockedDataRequest $request
     *
     * @return QueryDockedDataResponse
     */
    public function queryDockedData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryDockedDataEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????key???deviceId??????, ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param QueryDockedDataRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return QueryDockedDataResponse
     */
    public function queryDockedDataEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryDockedDataResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.docked.data.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????
     * Summary: ????????????????????????.
     *
     * @param CreateDeviceRelationRequest $request
     *
     * @return CreateDeviceRelationResponse
     */
    public function createDeviceRelation($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDeviceRelationEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????
     * Summary: ????????????????????????.
     *
     * @param CreateDeviceRelationRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateDeviceRelationResponse
     */
    public function createDeviceRelationEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateDeviceRelationResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.device.relation.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ????????????????????????
     * Summary: ????????????????????????.
     *
     * @param DeleteDeviceRelationRequest $request
     *
     * @return DeleteDeviceRelationResponse
     */
    public function deleteDeviceRelation($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDeviceRelationEx($request, $headers, $runtime);
    }

    /**
     * Description: ????????????????????????
     * Summary: ????????????????????????.
     *
     * @param DeleteDeviceRelationRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteDeviceRelationResponse
     */
    public function deleteDeviceRelationEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDeviceRelationResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.device.relation.delete', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????????????????
     * Summary: ??????????????????.
     *
     * @param PushCollectotBychainidRequest $request
     *
     * @return PushCollectotBychainidResponse
     */
    public function pushCollectotBychainid($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pushCollectotBychainidEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????????????????
     * Summary: ??????????????????.
     *
     * @param PushCollectotBychainidRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return PushCollectotBychainidResponse
     */
    public function pushCollectotBychainidEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return PushCollectotBychainidResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.collectot.bychainid.push', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param NotifyPullstrategyChangestatusRequest $request
     *
     * @return NotifyPullstrategyChangestatusResponse
     */
    public function notifyPullstrategyChangestatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->notifyPullstrategyChangestatusEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param NotifyPullstrategyChangestatusRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return NotifyPullstrategyChangestatusResponse
     */
    public function notifyPullstrategyChangestatusEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return NotifyPullstrategyChangestatusResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.pullstrategy.changestatus.notify', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param NotifyPullstrategyChargeorderinfoRequest $request
     *
     * @return NotifyPullstrategyChargeorderinfoResponse
     */
    public function notifyPullstrategyChargeorderinfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->notifyPullstrategyChargeorderinfoEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????
     * Summary: ??????????????????.
     *
     * @param NotifyPullstrategyChargeorderinfoRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return NotifyPullstrategyChargeorderinfoResponse
     */
    public function notifyPullstrategyChargeorderinfoEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return NotifyPullstrategyChargeorderinfoResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.pullstrategy.chargeorderinfo.notify', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param QueryScfleaseEqpinfoRequest $request
     *
     * @return QueryScfleaseEqpinfoResponse
     */
    public function queryScfleaseEqpinfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryScfleaseEqpinfoEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ??????????????????????????????.
     *
     * @param QueryScfleaseEqpinfoRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return QueryScfleaseEqpinfoResponse
     */
    public function queryScfleaseEqpinfoEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryScfleaseEqpinfoResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.scflease.eqpinfo.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ?????????????????????.
     *
     * @param CreateCustomerEntityRequest $request
     *
     * @return CreateCustomerEntityResponse
     */
    public function createCustomerEntity($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCustomerEntityEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????
     * Summary: ?????????????????????.
     *
     * @param CreateCustomerEntityRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateCustomerEntityResponse
     */
    public function createCustomerEntityEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateCustomerEntityResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.customer.entity.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????????????????????????????+??????ID????????? ???????????????????????????
     * Summary: ?????????????????????.
     *
     * @param UpdateCustomerEntityRequest $request
     *
     * @return UpdateCustomerEntityResponse
     */
    public function updateCustomerEntity($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateCustomerEntityEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????????????????????????????+??????ID????????? ???????????????????????????
     * Summary: ?????????????????????.
     *
     * @param UpdateCustomerEntityRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateCustomerEntityResponse
     */
    public function updateCustomerEntityEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateCustomerEntityResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.customer.entity.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????oneapi
     * Summary: ?????????oneapi.
     *
     * @param ExecThingsdidOneapiRequest $request
     *
     * @return ExecThingsdidOneapiResponse
     */
    public function execThingsdidOneapi($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->execThingsdidOneapiEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????oneapi
     * Summary: ?????????oneapi.
     *
     * @param ExecThingsdidOneapiRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ExecThingsdidOneapiResponse
     */
    public function execThingsdidOneapiEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return ExecThingsdidOneapiResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.thingsdid.oneapi.exec', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????
     * Summary: ???????????????
     *
     * @param StartEvidenceStoreRequest $request
     *
     * @return StartEvidenceStoreResponse
     */
    public function startEvidenceStore($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startEvidenceStoreEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????
     * Summary: ???????????????
     *
     * @param StartEvidenceStoreRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return StartEvidenceStoreResponse
     */
    public function startEvidenceStoreEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return StartEvidenceStoreResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.evidence.store.start', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????
     * Summary: ?????????????????????.
     *
     * @param StartEvidenceQueryRequest $request
     *
     * @return StartEvidenceQueryResponse
     */
    public function startEvidenceQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startEvidenceQueryEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????
     * Summary: ?????????????????????.
     *
     * @param StartEvidenceQueryRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return StartEvidenceQueryResponse
     */
    public function startEvidenceQueryEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return StartEvidenceQueryResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.evidence.query.start', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????????????????
     * Summary: ???????????????????????????.
     *
     * @param StartThingsdidRegisterRequest $request
     *
     * @return StartThingsdidRegisterResponse
     */
    public function startThingsdidRegister($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startThingsdidRegisterEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????????????????
     * Summary: ???????????????????????????.
     *
     * @param StartThingsdidRegisterRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return StartThingsdidRegisterResponse
     */
    public function startThingsdidRegisterEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return StartThingsdidRegisterResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.thingsdid.register.start', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????????????????
     * ???????????????????????????????????????????????????????????????????????????????????????exectuted?????????false???API?????????????????????api????????????????????????????????????
     * Summary: ???????????????????????????.
     *
     * @param QueryThingsdidAsyncprocessRequest $request
     *
     * @return QueryThingsdidAsyncprocessResponse
     */
    public function queryThingsdidAsyncprocess($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryThingsdidAsyncprocessEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????????????????
     * ???????????????????????????????????????????????????????????????????????????????????????exectuted?????????false???API?????????????????????api????????????????????????????????????
     * Summary: ???????????????????????????.
     *
     * @param QueryThingsdidAsyncprocessRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryThingsdidAsyncprocessResponse
     */
    public function queryThingsdidAsyncprocessEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryThingsdidAsyncprocessResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.thingsdid.asyncprocess.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????????????????API?????????????????????????????????
     * Summary: ???????????????????????????.
     *
     * @param UpdateThingsdidStatusRequest $request
     *
     * @return UpdateThingsdidStatusResponse
     */
    public function updateThingsdidStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateThingsdidStatusEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????????????????API?????????????????????????????????
     * Summary: ???????????????????????????.
     *
     * @param UpdateThingsdidStatusRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateThingsdidStatusResponse
     */
    public function updateThingsdidStatusEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateThingsdidStatusResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.thingsdid.status.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????????????????????????????????????????????????????
     * Summary: ?????????????????????????????????.
     *
     * @param UpdateThingsdidDevicespaceRequest $request
     *
     * @return UpdateThingsdidDevicespaceResponse
     */
    public function updateThingsdidDevicespace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateThingsdidDevicespaceEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????????????????????????????????????????????????????
     * Summary: ?????????????????????????????????.
     *
     * @param UpdateThingsdidDevicespaceRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateThingsdidDevicespaceResponse
     */
    public function updateThingsdidDevicespaceEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateThingsdidDevicespaceResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.thingsdid.devicespace.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????did???????????????dataFilter????????????
     * Summary: ???????????????did??????.
     *
     * @param QueryThingsdidDidRequest $request
     *
     * @return QueryThingsdidDidResponse
     */
    public function queryThingsdidDid($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryThingsdidDidEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????did???????????????dataFilter????????????
     * Summary: ???????????????did??????.
     *
     * @param QueryThingsdidDidRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return QueryThingsdidDidResponse
     */
    public function queryThingsdidDidEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryThingsdidDidResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.thingsdid.did.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????????????????????????????????????????????????????
     * Summary: ???????????????????????????.
     *
     * @param UpdateThingsdidDidRequest $request
     *
     * @return UpdateThingsdidDidResponse
     */
    public function updateThingsdidDid($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateThingsdidDidEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????????????????????????????????????????????????????
     * Summary: ???????????????????????????.
     *
     * @param UpdateThingsdidDidRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateThingsdidDidResponse
     */
    public function updateThingsdidDidEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateThingsdidDidResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.thingsdid.did.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????????????????
     * Summary: ???????????????????????????.
     *
     * @param StartTenantBindinfoRequest $request
     *
     * @return StartTenantBindinfoResponse
     */
    public function startTenantBindinfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startTenantBindinfoEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????????????????
     * Summary: ???????????????????????????.
     *
     * @param StartTenantBindinfoRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return StartTenantBindinfoResponse
     */
    public function startTenantBindinfoEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return StartTenantBindinfoResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.tenant.bindinfo.start', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ???????????????????????????????????????????????????????????????????????????????????????
     * Summary: ???????????????????????????.
     *
     * @param CreateTenantProjectRequest $request
     *
     * @return CreateTenantProjectResponse
     */
    public function createTenantProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTenantProjectEx($request, $headers, $runtime);
    }

    /**
     * Description: ???????????????????????????????????????????????????????????????????????????????????????
     * Summary: ???????????????????????????.
     *
     * @param CreateTenantProjectRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateTenantProjectResponse
     */
    public function createTenantProjectEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateTenantProjectResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.tenant.project.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ?????????????????????????????????
     * ?????????/?????????/?????????????????????
     * Summary: ?????????????????????????????????.
     *
     * @param UpdateThingsdidTenantRequest $request
     *
     * @return UpdateThingsdidTenantResponse
     */
    public function updateThingsdidTenant($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateThingsdidTenantEx($request, $headers, $runtime);
    }

    /**
     * Description: ?????????????????????????????????
     * ?????????/?????????/?????????????????????
     * Summary: ?????????????????????????????????.
     *
     * @param UpdateThingsdidTenantRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateThingsdidTenantResponse
     */
    public function updateThingsdidTenantEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return UpdateThingsdidTenantResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.thingsdid.tenant.update', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: LoadCertificateTSMCmd?????????????????????api
     * Summary: TSM??????????????????.
     *
     * @param LoadTsmCertificatetsmRequest $request
     *
     * @return LoadTsmCertificatetsmResponse
     */
    public function loadTsmCertificatetsm($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->loadTsmCertificatetsmEx($request, $headers, $runtime);
    }

    /**
     * Description: LoadCertificateTSMCmd?????????????????????api
     * Summary: TSM??????????????????.
     *
     * @param LoadTsmCertificatetsmRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return LoadTsmCertificatetsmResponse
     */
    public function loadTsmCertificatetsmEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return LoadTsmCertificatetsmResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.tsm.certificatetsm.load', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: TSM??????????????????
     * Summary: loadResourceFile.
     *
     * @param LoadTsmResourcefileRequest $request
     *
     * @return LoadTsmResourcefileResponse
     */
    public function loadTsmResourcefile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->loadTsmResourcefileEx($request, $headers, $runtime);
    }

    /**
     * Description: TSM??????????????????
     * Summary: loadResourceFile.
     *
     * @param LoadTsmResourcefileRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return LoadTsmResourcefileResponse
     */
    public function loadTsmResourcefileEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return LoadTsmResourcefileResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.tsm.resourcefile.load', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????tlsnotary??????????????????
     * Summary: ??????tlsnotary??????????????????
     *
     * @param StartTlsnotaryTaskRequest $request
     *
     * @return StartTlsnotaryTaskResponse
     */
    public function startTlsnotaryTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startTlsnotaryTaskEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????tlsnotary??????????????????
     * Summary: ??????tlsnotary??????????????????
     *
     * @param StartTlsnotaryTaskRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return StartTlsnotaryTaskResponse
     */
    public function startTlsnotaryTaskEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return StartTlsnotaryTaskResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.tlsnotary.task.start', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????tlsnotary????????????????????????
     * Summary: ??????tlsnotary????????????????????????.
     *
     * @param QueryTlsnotaryTaskRequest $request
     *
     * @return QueryTlsnotaryTaskResponse
     */
    public function queryTlsnotaryTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryTlsnotaryTaskEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????tlsnotary????????????????????????
     * Summary: ??????tlsnotary????????????????????????.
     *
     * @param QueryTlsnotaryTaskRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return QueryTlsnotaryTaskResponse
     */
    public function queryTlsnotaryTaskEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return QueryTlsnotaryTaskResponse::fromMap($this->doRequest('1.0', 'blockchain.bot.tlsnotary.task.query', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }

    /**
     * Description: ??????HTTP PUT?????????????????????
     * Summary: ??????????????????.
     *
     * @param CreateAntcloudGatewayxFileUploadRequest $request
     *
     * @return CreateAntcloudGatewayxFileUploadResponse
     */
    public function createAntcloudGatewayxFileUpload($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAntcloudGatewayxFileUploadEx($request, $headers, $runtime);
    }

    /**
     * Description: ??????HTTP PUT?????????????????????
     * Summary: ??????????????????.
     *
     * @param CreateAntcloudGatewayxFileUploadRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateAntcloudGatewayxFileUploadResponse
     */
    public function createAntcloudGatewayxFileUploadEx($request, $headers, $runtime)
    {
        Utils::validateModel($request);

        return CreateAntcloudGatewayxFileUploadResponse::fromMap($this->doRequest('1.0', 'antcloud.gatewayx.file.upload.create', 'HTTPS', 'POST', '/gateway.do', Tea::merge($request), $headers, $runtime));
    }
}
