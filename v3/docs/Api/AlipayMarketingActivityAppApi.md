# Alipay\OpenAPISDK\AlipayMarketingActivityAppApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AlipayMarketingActivityAppApi.md#batchquery) | **GET** /v3/alipay/marketing/activity/{activity_id}/app/batchquery | 查询活动可用小程序


## `batchquery()`

```php
batchquery($activityId, $merchantId, $pageNum, $pageSize, $merchantAccessMode): \Alipay\OpenAPISDK\Model\AlipayMarketingActivityAppBatchqueryResponseModel
```

查询活动可用小程序

通过此接口可查询活动的可用小程序,判断活动是否在该小程序可用，来决定是否展示。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingActivityAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

// 初始化alipay参数
$alipayConfig = new \Alipay\OpenAPISDK\Util\Model\AlipayConfig();
$alipayConfig->setAppId('app_id');
$alipayConfig->setPrivateKey('private_key');
// 密钥模式
$alipayConfig->setAlipayPublicKey('alipay_public_key');
// 证书模式
// $alipayConfig->setAppCertPath('../appCertPublicKey.crt');
// $alipayConfig->setAlipayPublicCertPath('../alipayCertPublicKey_RSA2.crt');
// $alipayConfig->setRootCertPath('../alipayRootCert.crt');
$alipayConfig->setEncryptKey('encrypt_key');
$alipayConfigUtil = new \Alipay\OpenAPISDK\Util\AlipayConfigUtil($alipayConfig);
$apiInstance->setAlipayConfigUtil($alipayConfigUtil);

$activityId = 2016042700826004508401111111; // string | 活动id
$merchantId = 2088202967380463; // string | 商户PID,默认为当前接口调用商户  限制:  接口调用者必须有商户代运营权限。  <a href=\"https://opendocs.alipay.com/mini/01hm6i#%E4%BB%A3%E8%BF%90%E8%90%A5%E6%8E%88%E6%9D%83\">代运营授权流程</a>
$pageNum = 1; // int | 分页查询页码。  限制: 必须为大于0的整数
$pageSize = 20; // string | 分页查询单页数据条数。  限制:  1.必须为大于0的整数  2.每页最大值为20
$merchantAccessMode = AGENCY_MODE; // string | 商户接入模式

try {
    $result = $apiInstance->batchquery($activityId, $merchantId, $pageNum, $pageSize, $merchantAccessMode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingActivityAppApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activityId** | **string**| 活动id |
 **merchantId** | **string**| 商户PID,默认为当前接口调用商户  限制:  接口调用者必须有商户代运营权限。  &lt;a href&#x3D;\&quot;https://opendocs.alipay.com/mini/01hm6i#%E4%BB%A3%E8%BF%90%E8%90%A5%E6%8E%88%E6%9D%83\&quot;&gt;代运营授权流程&lt;/a&gt; | [optional]
 **pageNum** | **int**| 分页查询页码。  限制: 必须为大于0的整数 | [optional]
 **pageSize** | **string**| 分页查询单页数据条数。  限制:  1.必须为大于0的整数  2.每页最大值为20 | [optional]
 **merchantAccessMode** | **string**| 商户接入模式 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingActivityAppBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
