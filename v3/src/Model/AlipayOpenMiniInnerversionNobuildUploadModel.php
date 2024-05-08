<?php
/**
 * AlipayOpenMiniInnerversionNobuildUploadModel
 *
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

namespace Alipay\OpenAPISDK\Model;

use \ArrayAccess;
use \Alipay\OpenAPISDK\ObjectSerializer;

/**
 * AlipayOpenMiniInnerversionNobuildUploadModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenMiniInnerversionNobuildUploadModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenMiniInnerversionNobuildUploadModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'buildExtraInfo' => 'string',
        'buildJsPermission' => 'string',
        'buildMainUrl' => 'string',
        'buildQcloudInfo' => 'string',
        'buildVersion' => 'string',
        'buildedPackageSize' => 'string',
        'buildedPackageUrl' => 'string',
        'buildedPluginSize' => 'string',
        'buildedPluginUrl' => 'string',
        'bundleId' => 'string',
        'components' => 'string',
        'instCode' => 'string',
        'miniAppId' => 'string',
        'newBuildedPackageSize' => 'string',
        'newBuildedPackageUrl' => 'string',
        'newBuildedPluginSize' => 'string',
        'newBuildedPluginUrl' => 'string',
        'noSign' => 'bool',
        'pluginRefs' => '\Alipay\OpenAPISDK\Model\MiniAppPluginReference[]',
        'subPackages' => '\Alipay\OpenAPISDK\Model\SubPackageInfo[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'buildExtraInfo' => null,
        'buildJsPermission' => null,
        'buildMainUrl' => null,
        'buildQcloudInfo' => null,
        'buildVersion' => null,
        'buildedPackageSize' => null,
        'buildedPackageUrl' => null,
        'buildedPluginSize' => null,
        'buildedPluginUrl' => null,
        'bundleId' => null,
        'components' => null,
        'instCode' => null,
        'miniAppId' => null,
        'newBuildedPackageSize' => null,
        'newBuildedPackageUrl' => null,
        'newBuildedPluginSize' => null,
        'newBuildedPluginUrl' => null,
        'noSign' => null,
        'pluginRefs' => null,
        'subPackages' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'buildExtraInfo' => 'build_extra_info',
        'buildJsPermission' => 'build_js_permission',
        'buildMainUrl' => 'build_main_url',
        'buildQcloudInfo' => 'build_qcloud_info',
        'buildVersion' => 'build_version',
        'buildedPackageSize' => 'builded_package_size',
        'buildedPackageUrl' => 'builded_package_url',
        'buildedPluginSize' => 'builded_plugin_size',
        'buildedPluginUrl' => 'builded_plugin_url',
        'bundleId' => 'bundle_id',
        'components' => 'components',
        'instCode' => 'inst_code',
        'miniAppId' => 'mini_app_id',
        'newBuildedPackageSize' => 'new_builded_package_size',
        'newBuildedPackageUrl' => 'new_builded_package_url',
        'newBuildedPluginSize' => 'new_builded_plugin_size',
        'newBuildedPluginUrl' => 'new_builded_plugin_url',
        'noSign' => 'no_sign',
        'pluginRefs' => 'plugin_refs',
        'subPackages' => 'sub_packages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'buildExtraInfo' => 'setBuildExtraInfo',
        'buildJsPermission' => 'setBuildJsPermission',
        'buildMainUrl' => 'setBuildMainUrl',
        'buildQcloudInfo' => 'setBuildQcloudInfo',
        'buildVersion' => 'setBuildVersion',
        'buildedPackageSize' => 'setBuildedPackageSize',
        'buildedPackageUrl' => 'setBuildedPackageUrl',
        'buildedPluginSize' => 'setBuildedPluginSize',
        'buildedPluginUrl' => 'setBuildedPluginUrl',
        'bundleId' => 'setBundleId',
        'components' => 'setComponents',
        'instCode' => 'setInstCode',
        'miniAppId' => 'setMiniAppId',
        'newBuildedPackageSize' => 'setNewBuildedPackageSize',
        'newBuildedPackageUrl' => 'setNewBuildedPackageUrl',
        'newBuildedPluginSize' => 'setNewBuildedPluginSize',
        'newBuildedPluginUrl' => 'setNewBuildedPluginUrl',
        'noSign' => 'setNoSign',
        'pluginRefs' => 'setPluginRefs',
        'subPackages' => 'setSubPackages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'buildExtraInfo' => 'getBuildExtraInfo',
        'buildJsPermission' => 'getBuildJsPermission',
        'buildMainUrl' => 'getBuildMainUrl',
        'buildQcloudInfo' => 'getBuildQcloudInfo',
        'buildVersion' => 'getBuildVersion',
        'buildedPackageSize' => 'getBuildedPackageSize',
        'buildedPackageUrl' => 'getBuildedPackageUrl',
        'buildedPluginSize' => 'getBuildedPluginSize',
        'buildedPluginUrl' => 'getBuildedPluginUrl',
        'bundleId' => 'getBundleId',
        'components' => 'getComponents',
        'instCode' => 'getInstCode',
        'miniAppId' => 'getMiniAppId',
        'newBuildedPackageSize' => 'getNewBuildedPackageSize',
        'newBuildedPackageUrl' => 'getNewBuildedPackageUrl',
        'newBuildedPluginSize' => 'getNewBuildedPluginSize',
        'newBuildedPluginUrl' => 'getNewBuildedPluginUrl',
        'noSign' => 'getNoSign',
        'pluginRefs' => 'getPluginRefs',
        'subPackages' => 'getSubPackages'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['buildExtraInfo'] = $data['buildExtraInfo'] ?? null;
        $this->container['buildJsPermission'] = $data['buildJsPermission'] ?? null;
        $this->container['buildMainUrl'] = $data['buildMainUrl'] ?? null;
        $this->container['buildQcloudInfo'] = $data['buildQcloudInfo'] ?? null;
        $this->container['buildVersion'] = $data['buildVersion'] ?? null;
        $this->container['buildedPackageSize'] = $data['buildedPackageSize'] ?? null;
        $this->container['buildedPackageUrl'] = $data['buildedPackageUrl'] ?? null;
        $this->container['buildedPluginSize'] = $data['buildedPluginSize'] ?? null;
        $this->container['buildedPluginUrl'] = $data['buildedPluginUrl'] ?? null;
        $this->container['bundleId'] = $data['bundleId'] ?? null;
        $this->container['components'] = $data['components'] ?? null;
        $this->container['instCode'] = $data['instCode'] ?? null;
        $this->container['miniAppId'] = $data['miniAppId'] ?? null;
        $this->container['newBuildedPackageSize'] = $data['newBuildedPackageSize'] ?? null;
        $this->container['newBuildedPackageUrl'] = $data['newBuildedPackageUrl'] ?? null;
        $this->container['newBuildedPluginSize'] = $data['newBuildedPluginSize'] ?? null;
        $this->container['newBuildedPluginUrl'] = $data['newBuildedPluginUrl'] ?? null;
        $this->container['noSign'] = $data['noSign'] ?? null;
        $this->container['pluginRefs'] = $data['pluginRefs'] ?? null;
        $this->container['subPackages'] = $data['subPackages'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets buildExtraInfo
     *
     * @return string|null
     */
    public function getBuildExtraInfo()
    {
        return $this->container['buildExtraInfo'];
    }

    /**
     * Sets buildExtraInfo
     *
     * @param string|null $buildExtraInfo 扩展信息，比如adaptorName、tinycliVersion、tinycliName、import-module、allowPrecompile、extJson、allowInstallDependency、aggregationMainAppId，如果没有特殊要求，tinycliVersion版本请用最新的： https://registry.npm.alibaba-inc.com/@alipay/tiny-cli/huoban-prod
     *
     * @return self
     */
    public function setBuildExtraInfo($buildExtraInfo)
    {
        $this->container['buildExtraInfo'] = $buildExtraInfo;

        return $this;
    }

    /**
     * Gets buildJsPermission
     *
     * @return string|null
     */
    public function getBuildJsPermission()
    {
        return $this->container['buildJsPermission'];
    }

    /**
     * Sets buildJsPermission
     *
     * @param string|null $buildJsPermission jsapi权限文件
     *
     * @return self
     */
    public function setBuildJsPermission($buildJsPermission)
    {
        $this->container['buildJsPermission'] = $buildJsPermission;

        return $this;
    }

    /**
     * Gets buildMainUrl
     *
     * @return string|null
     */
    public function getBuildMainUrl()
    {
        return $this->container['buildMainUrl'];
    }

    /**
     * Sets buildMainUrl
     *
     * @param string|null $buildMainUrl 小程序页面主入口。/index.html#page/component/index，该值需要和extendInfo中的page参数保持一致
     *
     * @return self
     */
    public function setBuildMainUrl($buildMainUrl)
    {
        $this->container['buildMainUrl'] = $buildMainUrl;

        return $this;
    }

    /**
     * Gets buildQcloudInfo
     *
     * @return string|null
     */
    public function getBuildQcloudInfo()
    {
        return $this->container['buildQcloudInfo'];
    }

    /**
     * Sets buildQcloudInfo
     *
     * @param string|null $buildQcloudInfo 打包平台扩展信息
     *
     * @return self
     */
    public function setBuildQcloudInfo($buildQcloudInfo)
    {
        $this->container['buildQcloudInfo'] = $buildQcloudInfo;

        return $this;
    }

    /**
     * Gets buildVersion
     *
     * @return string|null
     */
    public function getBuildVersion()
    {
        return $this->container['buildVersion'];
    }

    /**
     * Sets buildVersion
     *
     * @param string|null $buildVersion 小程序版本
     *
     * @return self
     */
    public function setBuildVersion($buildVersion)
    {
        $this->container['buildVersion'] = $buildVersion;

        return $this;
    }

    /**
     * Gets buildedPackageSize
     *
     * @return string|null
     */
    public function getBuildedPackageSize()
    {
        return $this->container['buildedPackageSize'];
    }

    /**
     * Sets buildedPackageSize
     *
     * @param string|null $buildedPackageSize 已经构建过的amr包大小，单位是字节，建议如实填写
     *
     * @return self
     */
    public function setBuildedPackageSize($buildedPackageSize)
    {
        $this->container['buildedPackageSize'] = $buildedPackageSize;

        return $this;
    }

    /**
     * Gets buildedPackageUrl
     *
     * @return string|null
     */
    public function getBuildedPackageUrl()
    {
        return $this->container['buildedPackageUrl'];
    }

    /**
     * Sets buildedPackageUrl
     *
     * @param string|null $buildedPackageUrl 已经构建的包地址，目前主要自行构建的场景使用
     *
     * @return self
     */
    public function setBuildedPackageUrl($buildedPackageUrl)
    {
        $this->container['buildedPackageUrl'] = $buildedPackageUrl;

        return $this;
    }

    /**
     * Gets buildedPluginSize
     *
     * @return string|null
     */
    public function getBuildedPluginSize()
    {
        return $this->container['buildedPluginSize'];
    }

    /**
     * Sets buildedPluginSize
     *
     * @param string|null $buildedPluginSize 构建好的插件包amr大小
     *
     * @return self
     */
    public function setBuildedPluginSize($buildedPluginSize)
    {
        $this->container['buildedPluginSize'] = $buildedPluginSize;

        return $this;
    }

    /**
     * Gets buildedPluginUrl
     *
     * @return string|null
     */
    public function getBuildedPluginUrl()
    {
        return $this->container['buildedPluginUrl'];
    }

    /**
     * Sets buildedPluginUrl
     *
     * @param string|null $buildedPluginUrl 构建好的插件包地址
     *
     * @return self
     */
    public function setBuildedPluginUrl($buildedPluginUrl)
    {
        $this->container['buildedPluginUrl'] = $buildedPluginUrl;

        return $this;
    }

    /**
     * Gets bundleId
     *
     * @return string|null
     */
    public function getBundleId()
    {
        return $this->container['bundleId'];
    }

    /**
     * Sets bundleId
     *
     * @param string|null $bundleId 一个端的标识，用于区分不同的客户端，每接入一个客户端，都需要向小程序应用中心申请bundleId入驻
     *
     * @return self
     */
    public function setBundleId($bundleId)
    {
        $this->container['bundleId'] = $bundleId;

        return $this;
    }

    /**
     * Gets components
     *
     * @return string|null
     */
    public function getComponents()
    {
        return $this->container['components'];
    }

    /**
     * Sets components
     *
     * @param string|null $components 组件参数
     *
     * @return self
     */
    public function setComponents($components)
    {
        $this->container['components'] = $components;

        return $this;
    }

    /**
     * Gets instCode
     *
     * @return string|null
     */
    public function getInstCode()
    {
        return $this->container['instCode'];
    }

    /**
     * Sets instCode
     *
     * @param string|null $instCode 上传调试版的接入租户类型
     *
     * @return self
     */
    public function setInstCode($instCode)
    {
        $this->container['instCode'] = $instCode;

        return $this;
    }

    /**
     * Gets miniAppId
     *
     * @return string|null
     */
    public function getMiniAppId()
    {
        return $this->container['miniAppId'];
    }

    /**
     * Sets miniAppId
     *
     * @param string|null $miniAppId 小程序id
     *
     * @return self
     */
    public function setMiniAppId($miniAppId)
    {
        $this->container['miniAppId'] = $miniAppId;

        return $this;
    }

    /**
     * Gets newBuildedPackageSize
     *
     * @return string|null
     */
    public function getNewBuildedPackageSize()
    {
        return $this->container['newBuildedPackageSize'];
    }

    /**
     * Sets newBuildedPackageSize
     *
     * @param string|null $newBuildedPackageSize 2.0已经构建过的amr包大小，单位是字节，主要是给自行构建的场景使用
     *
     * @return self
     */
    public function setNewBuildedPackageSize($newBuildedPackageSize)
    {
        $this->container['newBuildedPackageSize'] = $newBuildedPackageSize;

        return $this;
    }

    /**
     * Gets newBuildedPackageUrl
     *
     * @return string|null
     */
    public function getNewBuildedPackageUrl()
    {
        return $this->container['newBuildedPackageUrl'];
    }

    /**
     * Sets newBuildedPackageUrl
     *
     * @param string|null $newBuildedPackageUrl 2.0产物包地址
     *
     * @return self
     */
    public function setNewBuildedPackageUrl($newBuildedPackageUrl)
    {
        $this->container['newBuildedPackageUrl'] = $newBuildedPackageUrl;

        return $this;
    }

    /**
     * Gets newBuildedPluginSize
     *
     * @return string|null
     */
    public function getNewBuildedPluginSize()
    {
        return $this->container['newBuildedPluginSize'];
    }

    /**
     * Sets newBuildedPluginSize
     *
     * @param string|null $newBuildedPluginSize 构建好的插件包amr大小
     *
     * @return self
     */
    public function setNewBuildedPluginSize($newBuildedPluginSize)
    {
        $this->container['newBuildedPluginSize'] = $newBuildedPluginSize;

        return $this;
    }

    /**
     * Gets newBuildedPluginUrl
     *
     * @return string|null
     */
    public function getNewBuildedPluginUrl()
    {
        return $this->container['newBuildedPluginUrl'];
    }

    /**
     * Sets newBuildedPluginUrl
     *
     * @param string|null $newBuildedPluginUrl 构建好的插件包地址
     *
     * @return self
     */
    public function setNewBuildedPluginUrl($newBuildedPluginUrl)
    {
        $this->container['newBuildedPluginUrl'] = $newBuildedPluginUrl;

        return $this;
    }

    /**
     * Gets noSign
     *
     * @return bool|null
     */
    public function getNoSign()
    {
        return $this->container['noSign'];
    }

    /**
     * Sets noSign
     *
     * @param bool|null $noSign 否免加签, true的时候代表传过来的是加签后的包地址
     *
     * @return self
     */
    public function setNoSign($noSign)
    {
        $this->container['noSign'] = $noSign;

        return $this;
    }

    /**
     * Gets pluginRefs
     *
     * @return \Alipay\OpenAPISDK\Model\MiniAppPluginReference[]|null
     */
    public function getPluginRefs()
    {
        return $this->container['pluginRefs'];
    }

    /**
     * Sets pluginRefs
     *
     * @param \Alipay\OpenAPISDK\Model\MiniAppPluginReference[]|null $pluginRefs 小程序代码中引用的插件列表，包含插件id和插件版本信息，业务方需要自行解析源码包的app.json里面的plugins信息
     *
     * @return self
     */
    public function setPluginRefs($pluginRefs)
    {
        $this->container['pluginRefs'] = $pluginRefs;

        return $this;
    }

    /**
     * Gets subPackages
     *
     * @return \Alipay\OpenAPISDK\Model\SubPackageInfo[]|null
     */
    public function getSubPackages()
    {
        return $this->container['subPackages'];
    }

    /**
     * Sets subPackages
     *
     * @param \Alipay\OpenAPISDK\Model\SubPackageInfo[]|null $subPackages 构建好的分包信息
     *
     * @return self
     */
    public function setSubPackages($subPackages)
    {
        $this->container['subPackages'] = $subPackages;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


