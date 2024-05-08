<?php
/**
 * AlipayOpenMiniInnerbaseinfoApplogoApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * 支付宝开放平台API
 *
 * 支付宝开放平台v3协议文档
 *
 * The version of the OpenAPI document: 2024-04-28
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Alipay\OpenAPISDK\Api;

use Alipay\OpenAPISDK\Util\AlipayConfigUtil;
use Alipay\OpenAPISDK\Util\AlipayLogger;
use Alipay\OpenAPISDK\Util\Model\CustomizedParams;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Alipay\OpenAPISDK\ApiException;
use Alipay\OpenAPISDK\Configuration;
use Alipay\OpenAPISDK\HeaderSelector;
use Alipay\OpenAPISDK\ObjectSerializer;

/**
 * AlipayOpenMiniInnerbaseinfoApplogoApi Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AlipayOpenMiniInnerbaseinfoApplogoApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @var AlipayConfigUtil
     */
    protected $alipayConfigUtil;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     * @param AlipayConfigUtil $alipayConfigUtil
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0,
        AlipayConfigUtil $alipayConfigUtil = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
        $this->alipayConfigUtil = $alipayConfigUtil ?: new AlipayConfigUtil();
    }

    /**
     * @return AlipayConfigUtil
     */
    public function getAlipayConfigUtil(): AlipayConfigUtil
    {
        return $this->alipayConfigUtil;
    }

    /**
     * @param AlipayConfigUtil $alipayConfigUtil
     */
    public function setAlipayConfigUtil(AlipayConfigUtil $alipayConfigUtil): void
    {
        $this->alipayConfigUtil = $alipayConfigUtil;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation upload
     *
     * 内部小程序-小程序logo图片上传
     *
     * @param  \SplFileObject $appLogo appLogo (optional)
     * @param CustomizedParams $customizedParams
     *
     * @throws \Alipay\OpenAPISDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerbaseinfoApplogoUploadResponseModel|\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerbaseinfoApplogoUploadDefaultResponse
     */
    public function upload($appLogo = null, CustomizedParams $customizedParams = null)
    {
        list($response) = $this->uploadWithHttpInfo($appLogo, $customizedParams);
        return $response;
    }

    /**
     * Operation uploadWithHttpInfo
     *
     * 内部小程序-小程序logo图片上传
     *
     * @param  \SplFileObject $appLogo (optional)
     * @param CustomizedParams $customizedParams
     *
     * @throws \Alipay\OpenAPISDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerbaseinfoApplogoUploadResponseModel|\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerbaseinfoApplogoUploadDefaultResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function uploadWithHttpInfo($appLogo = null, CustomizedParams $customizedParams = null)
    {
        $request = $this->uploadRequest($appLogo, $customizedParams);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getResponse()) {
                    //验签
                    $this->alipayConfigUtil->verifyResponse((string)$e->getResponse()->getBody(),
                        $e->getResponse()->getHeaders(), true);
                }
                AlipayLogger::logBizError("code:{$e->getCode()}, message:{$e->getMessage()}");
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                AlipayLogger::logBizError("code:{$e->getCode()}, message:{$e->getMessage()}");
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                //验签
                $bodyStr = (string)$response->getBody();
                $this->alipayConfigUtil->verifyResponse($bodyStr, $response->getHeaders(), true);
                AlipayLogger::logBizError("code:{$statusCode}, message:{$bodyStr}");
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $bodyStr
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerbaseinfoApplogoUploadResponseModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        //验签
                        $this->alipayConfigUtil->verifyResponse($content, $response->getHeaders(), false);
                        //解密
                        $content = $this->alipayConfigUtil->decrypt($content);
                        if ('\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerbaseinfoApplogoUploadResponseModel' !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    AlipayLogger::logBizResponseInfo($response->getStatusCode(), $content, $response->getHeaders());

                    return [
                        ObjectSerializer::deserialize($content, '\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerbaseinfoApplogoUploadResponseModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                                
                default:
                    if ('\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerbaseinfoApplogoUploadDefaultResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        //验签
                        $this->alipayConfigUtil->verifyResponse($content, $response->getHeaders(), true);
                        if ('\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerbaseinfoApplogoUploadDefaultResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    AlipayLogger::logBizResponseInfo($response->getStatusCode(), $content, $response->getHeaders());

                    return [
                        //ObjectSerializer::deserialize($content, '\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerbaseinfoApplogoUploadDefaultResponse', []),
                        $content,
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerbaseinfoApplogoUploadResponseModel';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                //验签
                $this->alipayConfigUtil->verifyResponse($content, $response->getHeaders(), false);
                //解密
                $content = $this->alipayConfigUtil->decrypt($content);
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            AlipayLogger::logBizResponseInfo($response->getStatusCode(), $content, $response->getHeaders());

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerbaseinfoApplogoUploadResponseModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                                
                default:
                    //$data = ObjectSerializer::deserialize(
                    //    $e->getResponseBody(),
                    //    '\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerbaseinfoApplogoUploadDefaultResponse',
                    //    $e->getResponseHeaders()
                    //);
                    //$e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation uploadAsync
     *
     * 内部小程序-小程序logo图片上传
     *
     * @param  \SplFileObject $appLogo (optional)
     * @param CustomizedParams $customizedParams
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uploadAsync($appLogo = null, CustomizedParams $customizedParams = null)
    {
        return $this->uploadAsyncWithHttpInfo($appLogo, $customizedParams)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation uploadAsyncWithHttpInfo
     *
     * 内部小程序-小程序logo图片上传
     *
     * @param  \SplFileObject $appLogo (optional)
     * @param CustomizedParams $customizedParams
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uploadAsyncWithHttpInfo($appLogo = null, CustomizedParams $customizedParams = null)
    {
        $returnType = '\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerbaseinfoApplogoUploadResponseModel';
        $request = $this->uploadRequest($appLogo, $customizedParams);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        //验签
                        $this->alipayConfigUtil->verifyResponse($content, $response->getHeaders(), false);
                        //解密
                        $content = $this->alipayConfigUtil->decrypt($content);
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    //验签
                    $this->alipayConfigUtil->verifyResponse((string)$response->getBody(), $response->getHeaders(), true);
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'upload'
     *
     * @param  \SplFileObject $appLogo (optional)
     * @param CustomizedParams $customizedParams
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function uploadRequest($appLogo = null, CustomizedParams $customizedParams = null)
    {

        $resourcePath = '/v3/alipay/open/mini/innerbaseinfo/applogo/upload';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $signContent = '';
        $isEncrypt = $this->alipayConfigUtil->isEncrypt();




        // form params
        if ($appLogo !== null) {
            $multipart = true;
            $formParams['app_logo'] = [];
            $paramFiles = is_array($appLogo) ? $appLogo : [$appLogo];
            foreach ($paramFiles as $paramFile) {
                $formParams['app_logo'][] = \GuzzleHttp\Psr7\Utils::tryFopen(
                    ObjectSerializer::toFormValue($paramFile),
                    'rb'
                );
            }
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        if (is_string($formParamValueItem)) {
                            $signContent = $formParamValueItem;
                        }
                        //加密时非文件字段对应的Content-Type类型为text/plain
                        if ($isEncrypt && is_string($formParamValueItem)) {
                            $signContent = $this->alipayConfigUtil->encrypt($formParamValueItem, $headers, true);
                            $multipartContents[] = [
                                'name' => $formParamName,
                                'contents' => $signContent,
                                'headers' => ['Content-Type' => 'text/plain']
                            ];
                        } else {
                            $multipartContents[] = [
                                'name' => $formParamName,
                                'contents' => $formParamValueItem,
                                'headers' => ['Content-Type' => 'application/json']
                            ];
                        }
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $signContent = $this->alipayConfigUtil->encrypt(\GuzzleHttp\json_encode($formParams, JSON_UNESCAPED_UNICODE), $headers);
                $httpBody = $signContent;

            } else {
                // for HTTP post (form)
                $signContent = $this->alipayConfigUtil->encrypt(ObjectSerializer::buildQuery($formParams), $headers);
                $httpBody = $signContent;
            }
        }


        if ($isEncrypt) {
            $headers['alipay-encrypt-type'] = $this->alipayConfigUtil->getEncryptType();
            //除文件上传接口，加密后Content-Type均为"text/plain"
            if (!$multipart) {
                $headers['Content-Type'] = 'text/plain';
            }
        }

        if ($customizedParams != null) {
            //额外query参数
            if (is_array($customizedParams->getQueryParams()) && count($customizedParams->getQueryParams()) >= 0) {
                foreach ($customizedParams->getQueryParams() as $k => $v) {
                    if (is_array($v)) {
                        $v = ObjectSerializer::serializeCollection($v, 'form');
                    }
                    $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue($v, $k) ?? []);
                }
            }

            if (!$this->alipayConfigUtil->checkEmpty($customizedParams->getAppAuthToken())) {
                $headerParams["alipay-app-auth-token"] = $customizedParams->getAppAuthToken();
            }

            //额外非全局header参数
            if (is_array($customizedParams->getHeaderParams()) && count($customizedParams->getHeaderParams()) >= 0) {
                foreach ($customizedParams->getHeaderParams() as $k => $v) {
                    if (is_array($v)) {
                        $v = ObjectSerializer::serializeCollection($v, 'form');
                    }
                    $headerParams[$k] = ObjectSerializer::toHeaderValue($v);
                }
            }
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        if ($this->config->getSdkVersion()) {
            $defaultHeaders['alipay-sdk-version'] = $this->config->getSdkVersion();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        if (!array_key_exists('alipay-request-id', $headers)) {
            $headers['alipay-request-id'] = $this->alipayConfigUtil->createUuid();
        }

        $query = ObjectSerializer::buildQuery($queryParams);
        $url = $resourcePath . ($query ? "?{$query}" : '');
        //加签
        $this->alipayConfigUtil->sign('POST', $url, $signContent, $headers);

        $basePath = $this->alipayConfigUtil->checkEmpty($this->alipayConfigUtil->getServerUrl()) ? $this->config->getHost() : $this->alipayConfigUtil->getServerUrl();
        AlipayLogger::logBizInfo($basePath . $url, $signContent, 'POST', $multipart ? "multipart/form-data" : $headers['Content-Type'], $headers['alipay-request-id']);
        return new Request(
            'POST',
            $basePath . $url,
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
