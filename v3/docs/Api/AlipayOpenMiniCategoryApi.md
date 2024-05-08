# Alipay\OpenAPISDK\AlipayOpenMiniCategoryApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenMiniCategoryApi.md#query) | **GET** /v3/alipay/open/mini/category/query | 小程序类目树查询


## `query()`

```php
query($isFilter): \Alipay\OpenAPISDK\Model\AlipayOpenMiniCategoryQueryResponseModel
```

小程序类目树查询

小程序类目树查询

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniCategoryApi(
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

$isFilter = true; // bool | 是否过滤小程序不可用类目。枚举值如下： true：表示过滤不可用类目。 false：表示不过滤不可用类目。

try {
    $result = $apiInstance->query($isFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniCategoryApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **isFilter** | **bool**| 是否过滤小程序不可用类目。枚举值如下： true：表示过滤不可用类目。 false：表示不过滤不可用类目。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniCategoryQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
