<?php
/**
 * AlipayOpenMiniInnerversionBuildauditSubmitModel
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
 * AlipayOpenMiniInnerversionBuildauditSubmitModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenMiniInnerversionBuildauditSubmitModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenMiniInnerversionBuildauditSubmitModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'appCategoryIds' => 'string',
        'appDesc' => 'string',
        'appEnglishName' => 'string',
        'appLogo' => 'string',
        'appName' => 'string',
        'appOrigin' => 'string',
        'appSlogan' => 'string',
        'appVersion' => 'string',
        'buildExt' => 'string',
        'bundleId' => 'string',
        'isvAppId' => 'string',
        'licenseInfo' => '\Alipay\OpenAPISDK\Model\AuditLicenseInfo',
        'miniAppId' => 'string',
        'miniCategoryIds' => 'string',
        'pid' => 'string',
        'regionType' => 'string',
        'screenShotList' => 'string',
        'servicePhone' => 'string',
        'specialLicensePicList' => 'string',
        'templateId' => 'string',
        'templateVersion' => 'string',
        'versionDesc' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'appCategoryIds' => null,
        'appDesc' => null,
        'appEnglishName' => null,
        'appLogo' => null,
        'appName' => null,
        'appOrigin' => null,
        'appSlogan' => null,
        'appVersion' => null,
        'buildExt' => null,
        'bundleId' => null,
        'isvAppId' => null,
        'licenseInfo' => null,
        'miniAppId' => null,
        'miniCategoryIds' => null,
        'pid' => null,
        'regionType' => null,
        'screenShotList' => null,
        'servicePhone' => null,
        'specialLicensePicList' => null,
        'templateId' => null,
        'templateVersion' => null,
        'versionDesc' => null
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
        'appCategoryIds' => 'app_category_ids',
        'appDesc' => 'app_desc',
        'appEnglishName' => 'app_english_name',
        'appLogo' => 'app_logo',
        'appName' => 'app_name',
        'appOrigin' => 'app_origin',
        'appSlogan' => 'app_slogan',
        'appVersion' => 'app_version',
        'buildExt' => 'build_ext',
        'bundleId' => 'bundle_id',
        'isvAppId' => 'isv_app_id',
        'licenseInfo' => 'license_info',
        'miniAppId' => 'mini_app_id',
        'miniCategoryIds' => 'mini_category_ids',
        'pid' => 'pid',
        'regionType' => 'region_type',
        'screenShotList' => 'screen_shot_list',
        'servicePhone' => 'service_phone',
        'specialLicensePicList' => 'special_license_pic_list',
        'templateId' => 'template_id',
        'templateVersion' => 'template_version',
        'versionDesc' => 'version_desc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appCategoryIds' => 'setAppCategoryIds',
        'appDesc' => 'setAppDesc',
        'appEnglishName' => 'setAppEnglishName',
        'appLogo' => 'setAppLogo',
        'appName' => 'setAppName',
        'appOrigin' => 'setAppOrigin',
        'appSlogan' => 'setAppSlogan',
        'appVersion' => 'setAppVersion',
        'buildExt' => 'setBuildExt',
        'bundleId' => 'setBundleId',
        'isvAppId' => 'setIsvAppId',
        'licenseInfo' => 'setLicenseInfo',
        'miniAppId' => 'setMiniAppId',
        'miniCategoryIds' => 'setMiniCategoryIds',
        'pid' => 'setPid',
        'regionType' => 'setRegionType',
        'screenShotList' => 'setScreenShotList',
        'servicePhone' => 'setServicePhone',
        'specialLicensePicList' => 'setSpecialLicensePicList',
        'templateId' => 'setTemplateId',
        'templateVersion' => 'setTemplateVersion',
        'versionDesc' => 'setVersionDesc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appCategoryIds' => 'getAppCategoryIds',
        'appDesc' => 'getAppDesc',
        'appEnglishName' => 'getAppEnglishName',
        'appLogo' => 'getAppLogo',
        'appName' => 'getAppName',
        'appOrigin' => 'getAppOrigin',
        'appSlogan' => 'getAppSlogan',
        'appVersion' => 'getAppVersion',
        'buildExt' => 'getBuildExt',
        'bundleId' => 'getBundleId',
        'isvAppId' => 'getIsvAppId',
        'licenseInfo' => 'getLicenseInfo',
        'miniAppId' => 'getMiniAppId',
        'miniCategoryIds' => 'getMiniCategoryIds',
        'pid' => 'getPid',
        'regionType' => 'getRegionType',
        'screenShotList' => 'getScreenShotList',
        'servicePhone' => 'getServicePhone',
        'specialLicensePicList' => 'getSpecialLicensePicList',
        'templateId' => 'getTemplateId',
        'templateVersion' => 'getTemplateVersion',
        'versionDesc' => 'getVersionDesc'
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
        $this->container['appCategoryIds'] = $data['appCategoryIds'] ?? null;
        $this->container['appDesc'] = $data['appDesc'] ?? null;
        $this->container['appEnglishName'] = $data['appEnglishName'] ?? null;
        $this->container['appLogo'] = $data['appLogo'] ?? null;
        $this->container['appName'] = $data['appName'] ?? null;
        $this->container['appOrigin'] = $data['appOrigin'] ?? null;
        $this->container['appSlogan'] = $data['appSlogan'] ?? null;
        $this->container['appVersion'] = $data['appVersion'] ?? null;
        $this->container['buildExt'] = $data['buildExt'] ?? null;
        $this->container['bundleId'] = $data['bundleId'] ?? null;
        $this->container['isvAppId'] = $data['isvAppId'] ?? null;
        $this->container['licenseInfo'] = $data['licenseInfo'] ?? null;
        $this->container['miniAppId'] = $data['miniAppId'] ?? null;
        $this->container['miniCategoryIds'] = $data['miniCategoryIds'] ?? null;
        $this->container['pid'] = $data['pid'] ?? null;
        $this->container['regionType'] = $data['regionType'] ?? null;
        $this->container['screenShotList'] = $data['screenShotList'] ?? null;
        $this->container['servicePhone'] = $data['servicePhone'] ?? null;
        $this->container['specialLicensePicList'] = $data['specialLicensePicList'] ?? null;
        $this->container['templateId'] = $data['templateId'] ?? null;
        $this->container['templateVersion'] = $data['templateVersion'] ?? null;
        $this->container['versionDesc'] = $data['versionDesc'] ?? null;
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
     * Gets appCategoryIds
     *
     * @return string|null
     */
    public function getAppCategoryIds()
    {
        return $this->container['appCategoryIds'];
    }

    /**
     * Sets appCategoryIds
     *
     * @param string|null $appCategoryIds 小程序类目，可不传，不传取基础信息中的小程序类目
     *
     * @return self
     */
    public function setAppCategoryIds($appCategoryIds)
    {
        $this->container['appCategoryIds'] = $appCategoryIds;

        return $this;
    }

    /**
     * Gets appDesc
     *
     * @return string|null
     */
    public function getAppDesc()
    {
        return $this->container['appDesc'];
    }

    /**
     * Sets appDesc
     *
     * @param string|null $appDesc 小程序描述，可不传，不传取基础信息中的小程序描述
     *
     * @return self
     */
    public function setAppDesc($appDesc)
    {
        $this->container['appDesc'] = $appDesc;

        return $this;
    }

    /**
     * Gets appEnglishName
     *
     * @return string|null
     */
    public function getAppEnglishName()
    {
        return $this->container['appEnglishName'];
    }

    /**
     * Sets appEnglishName
     *
     * @param string|null $appEnglishName 小程序在从未上架过版本之前，英文名称是可以修改的，该字段用于在提交审核时候修改小程序英文名称。注意：小程序一旦有过上架版本之后就不可以修改英文名称。
     *
     * @return self
     */
    public function setAppEnglishName($appEnglishName)
    {
        $this->container['appEnglishName'] = $appEnglishName;

        return $this;
    }

    /**
     * Gets appLogo
     *
     * @return string|null
     */
    public function getAppLogo()
    {
        return $this->container['appLogo'];
    }

    /**
     * Sets appLogo
     *
     * @param string|null $appLogo 小程序logo，可不传，不传取基础信息中的小程序logo，请调用专用的logo上传接口上传logo文件，并将返回的地址作为本字段传入
     *
     * @return self
     */
    public function setAppLogo($appLogo)
    {
        $this->container['appLogo'] = $appLogo;

        return $this;
    }

    /**
     * Gets appName
     *
     * @return string|null
     */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
     * Sets appName
     *
     * @param string|null $appName 小程序在从未上架过版本之前，中文名称是可以修改的，该字段用于在提交审核时候修改小程序中文名称。注意：小程序一旦有过上架版本之后就不可以修改中文名称。
     *
     * @return self
     */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;

        return $this;
    }

    /**
     * Gets appOrigin
     *
     * @return string|null
     */
    public function getAppOrigin()
    {
        return $this->container['appOrigin'];
    }

    /**
     * Sets appOrigin
     *
     * @param string|null $appOrigin 来源类型，新接入方需要向支付宝申请专用来源，否则不予接入，申请方式请参见接入手册。
     *
     * @return self
     */
    public function setAppOrigin($appOrigin)
    {
        $this->container['appOrigin'] = $appOrigin;

        return $this;
    }

    /**
     * Gets appSlogan
     *
     * @return string|null
     */
    public function getAppSlogan()
    {
        return $this->container['appSlogan'];
    }

    /**
     * Sets appSlogan
     *
     * @param string|null $appSlogan 小程序应用简介，一句话描述小程序功能，如果不填默认采用当前小程序应用简介，10~32个字符
     *
     * @return self
     */
    public function setAppSlogan($appSlogan)
    {
        $this->container['appSlogan'] = $appSlogan;

        return $this;
    }

    /**
     * Gets appVersion
     *
     * @return string|null
     */
    public function getAppVersion()
    {
        return $this->container['appVersion'];
    }

    /**
     * Sets appVersion
     *
     * @param string|null $appVersion 小程序版本号
     *
     * @return self
     */
    public function setAppVersion($appVersion)
    {
        $this->container['appVersion'] = $appVersion;

        return $this;
    }

    /**
     * Gets buildExt
     *
     * @return string|null
     */
    public function getBuildExt()
    {
        return $this->container['buildExt'];
    }

    /**
     * Sets buildExt
     *
     * @param string|null $buildExt 构建扩展参数
     *
     * @return self
     */
    public function setBuildExt($buildExt)
    {
        $this->container['buildExt'] = $buildExt;

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
     * @param string|null $bundleId 端信息
     *
     * @return self
     */
    public function setBundleId($bundleId)
    {
        $this->container['bundleId'] = $bundleId;

        return $this;
    }

    /**
     * Gets isvAppId
     *
     * @return string|null
     */
    public function getIsvAppId()
    {
        return $this->container['isvAppId'];
    }

    /**
     * Sets isvAppId
     *
     * @param string|null $isvAppId 三方应用ID
     *
     * @return self
     */
    public function setIsvAppId($isvAppId)
    {
        $this->container['isvAppId'] = $isvAppId;

        return $this;
    }

    /**
     * Gets licenseInfo
     *
     * @return \Alipay\OpenAPISDK\Model\AuditLicenseInfo|null
     */
    public function getLicenseInfo()
    {
        return $this->container['licenseInfo'];
    }

    /**
     * Sets licenseInfo
     *
     * @param \Alipay\OpenAPISDK\Model\AuditLicenseInfo|null $licenseInfo licenseInfo
     *
     * @return self
     */
    public function setLicenseInfo($licenseInfo)
    {
        $this->container['licenseInfo'] = $licenseInfo;

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
     * @param string|null $miniAppId 小程序ID，特殊场景专用，普通业务方无需关注该参数。
     *
     * @return self
     */
    public function setMiniAppId($miniAppId)
    {
        $this->container['miniAppId'] = $miniAppId;

        return $this;
    }

    /**
     * Gets miniCategoryIds
     *
     * @return string|null
     */
    public function getMiniCategoryIds()
    {
        return $this->container['miniCategoryIds'];
    }

    /**
     * Sets miniCategoryIds
     *
     * @param string|null $miniCategoryIds 新小程序前台类目，格式为 第一个一级类目_第一个二级类目;第二个一级类目_第二个二级类目_第二个三级类目，详细类目可以通过 https://docs.open.alipay.com/api_49/alipay.open.mini.category.query接口查询mini_category_list，如果不填默认采用当前小程序应用类目。使用默认应用类目后不需要再次上传营业执照号、营业执照名、营业执照截图、营业执照有效期。使用后不再读取app_category_ids值，老前台类目将废弃
     *
     * @return self
     */
    public function setMiniCategoryIds($miniCategoryIds)
    {
        $this->container['miniCategoryIds'] = $miniCategoryIds;

        return $this;
    }

    /**
     * Gets pid
     *
     * @return string|null
     */
    public function getPid()
    {
        return $this->container['pid'];
    }

    /**
     * Sets pid
     *
     * @param string|null $pid 小程序开发者ID，可不传，不传取基础信息中的小程序开发者ID
     *
     * @return self
     */
    public function setPid($pid)
    {
        $this->container['pid'] = $pid;

        return $this;
    }

    /**
     * Gets regionType
     *
     * @return string|null
     */
    public function getRegionType()
    {
        return $this->container['regionType'];
    }

    /**
     * Sets regionType
     *
     * @param string|null $regionType 服务区域类型,可不传，不传取基础信息中的小程序服务区域类型
     *
     * @return self
     */
    public function setRegionType($regionType)
    {
        $this->container['regionType'] = $regionType;

        return $this;
    }

    /**
     * Gets screenShotList
     *
     * @return string|null
     */
    public function getScreenShotList()
    {
        return $this->container['screenShotList'];
    }

    /**
     * Sets screenShotList
     *
     * @param string|null $screenShotList 版本截图，最少2张，最多5张，必传
     *
     * @return self
     */
    public function setScreenShotList($screenShotList)
    {
        $this->container['screenShotList'] = $screenShotList;

        return $this;
    }

    /**
     * Gets servicePhone
     *
     * @return string|null
     */
    public function getServicePhone()
    {
        return $this->container['servicePhone'];
    }

    /**
     * Sets servicePhone
     *
     * @param string|null $servicePhone 客服电话，可不传，不传取基础信息中的小程序客服电话
     *
     * @return self
     */
    public function setServicePhone($servicePhone)
    {
        $this->container['servicePhone'] = $servicePhone;

        return $this;
    }

    /**
     * Gets specialLicensePicList
     *
     * @return string|null
     */
    public function getSpecialLicensePicList()
    {
        return $this->container['specialLicensePicList'];
    }

    /**
     * Sets specialLicensePicList
     *
     * @param string|null $specialLicensePicList 特殊资质图片地址列表，逗号分割,
     *
     * @return self
     */
    public function setSpecialLicensePicList($specialLicensePicList)
    {
        $this->container['specialLicensePicList'] = $specialLicensePicList;

        return $this;
    }

    /**
     * Gets templateId
     *
     * @return string|null
     */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
     * Sets templateId
     *
     * @param string|null $templateId 小程序模板ID
     *
     * @return self
     */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;

        return $this;
    }

    /**
     * Gets templateVersion
     *
     * @return string|null
     */
    public function getTemplateVersion()
    {
        return $this->container['templateVersion'];
    }

    /**
     * Sets templateVersion
     *
     * @param string|null $templateVersion 模板的版本号，如果不填写，则默认用模板当前最新的在架版本
     *
     * @return self
     */
    public function setTemplateVersion($templateVersion)
    {
        $this->container['templateVersion'] = $templateVersion;

        return $this;
    }

    /**
     * Gets versionDesc
     *
     * @return string|null
     */
    public function getVersionDesc()
    {
        return $this->container['versionDesc'];
    }

    /**
     * Sets versionDesc
     *
     * @param string|null $versionDesc 小程序版本描述，30-500个字符，一个中文占两个字符，一个英文或者数字占一个字符
     *
     * @return self
     */
    public function setVersionDesc($versionDesc)
    {
        $this->container['versionDesc'] = $versionDesc;

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


