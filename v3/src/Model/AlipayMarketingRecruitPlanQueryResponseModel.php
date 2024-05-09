<?php
/**
 * AlipayMarketingRecruitPlanQueryResponseModel
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
 * AlipayMarketingRecruitPlanQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayMarketingRecruitPlanQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayMarketingRecruitPlanQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'description' => 'string',
        'enrollEndTime' => 'string',
        'enrollRules' => '\Alipay\OpenAPISDK\Model\RecruitEnrollRule[]',
        'enrollSceneType' => 'string',
        'enrollStartTime' => 'string',
        'logo' => 'string',
        'planId' => 'string',
        'planName' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'description' => null,
        'enrollEndTime' => null,
        'enrollRules' => null,
        'enrollSceneType' => null,
        'enrollStartTime' => null,
        'logo' => null,
        'planId' => null,
        'planName' => null,
        'status' => null
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
        'description' => 'description',
        'enrollEndTime' => 'enroll_end_time',
        'enrollRules' => 'enroll_rules',
        'enrollSceneType' => 'enroll_scene_type',
        'enrollStartTime' => 'enroll_start_time',
        'logo' => 'logo',
        'planId' => 'plan_id',
        'planName' => 'plan_name',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'enrollEndTime' => 'setEnrollEndTime',
        'enrollRules' => 'setEnrollRules',
        'enrollSceneType' => 'setEnrollSceneType',
        'enrollStartTime' => 'setEnrollStartTime',
        'logo' => 'setLogo',
        'planId' => 'setPlanId',
        'planName' => 'setPlanName',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'enrollEndTime' => 'getEnrollEndTime',
        'enrollRules' => 'getEnrollRules',
        'enrollSceneType' => 'getEnrollSceneType',
        'enrollStartTime' => 'getEnrollStartTime',
        'logo' => 'getLogo',
        'planId' => 'getPlanId',
        'planName' => 'getPlanName',
        'status' => 'getStatus'
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
        $this->container['description'] = $data['description'] ?? null;
        $this->container['enrollEndTime'] = $data['enrollEndTime'] ?? null;
        $this->container['enrollRules'] = $data['enrollRules'] ?? null;
        $this->container['enrollSceneType'] = $data['enrollSceneType'] ?? null;
        $this->container['enrollStartTime'] = $data['enrollStartTime'] ?? null;
        $this->container['logo'] = $data['logo'] ?? null;
        $this->container['planId'] = $data['planId'] ?? null;
        $this->container['planName'] = $data['planName'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
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
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description 招商方案描述：富文本内容，可能包含html标签
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets enrollEndTime
     *
     * @return string|null
     */
    public function getEnrollEndTime()
    {
        return $this->container['enrollEndTime'];
    }

    /**
     * Sets enrollEndTime
     *
     * @param string|null $enrollEndTime 报名结束时间
     *
     * @return self
     */
    public function setEnrollEndTime($enrollEndTime)
    {
        $this->container['enrollEndTime'] = $enrollEndTime;

        return $this;
    }

    /**
     * Gets enrollRules
     *
     * @return \Alipay\OpenAPISDK\Model\RecruitEnrollRule[]|null
     */
    public function getEnrollRules()
    {
        return $this->container['enrollRules'];
    }

    /**
     * Sets enrollRules
     *
     * @param \Alipay\OpenAPISDK\Model\RecruitEnrollRule[]|null $enrollRules \"招商报名规则。 说明： 1. 查询到的规则将用于 alipay.marketing.recruit.enroll.create(招商报名提交)接口。 2. enroll_rules.required 为 true 时，enroll_rules.type 对应的内容类型在报名提交时必填。\"
     *
     * @return self
     */
    public function setEnrollRules($enrollRules)
    {
        $this->container['enrollRules'] = $enrollRules;

        return $this;
    }

    /**
     * Gets enrollSceneType
     *
     * @return string|null
     */
    public function getEnrollSceneType()
    {
        return $this->container['enrollSceneType'];
    }

    /**
     * Sets enrollSceneType
     *
     * @param string|null $enrollSceneType 招商方案所属报名场景 枚举值： VOUCHER：券报名场景； MINI_APP：小程序报名场景；
     *
     * @return self
     */
    public function setEnrollSceneType($enrollSceneType)
    {
        $this->container['enrollSceneType'] = $enrollSceneType;

        return $this;
    }

    /**
     * Gets enrollStartTime
     *
     * @return string|null
     */
    public function getEnrollStartTime()
    {
        return $this->container['enrollStartTime'];
    }

    /**
     * Sets enrollStartTime
     *
     * @param string|null $enrollStartTime 报名开始时间
     *
     * @return self
     */
    public function setEnrollStartTime($enrollStartTime)
    {
        $this->container['enrollStartTime'] = $enrollStartTime;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return string|null
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param string|null $logo 方案头图链接，150x150 以上尺寸的方形图片
     *
     * @return self
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets planId
     *
     * @return string|null
     */
    public function getPlanId()
    {
        return $this->container['planId'];
    }

    /**
     * Sets planId
     *
     * @param string|null $planId 招商方案ID
     *
     * @return self
     */
    public function setPlanId($planId)
    {
        $this->container['planId'] = $planId;

        return $this;
    }

    /**
     * Gets planName
     *
     * @return string|null
     */
    public function getPlanName()
    {
        return $this->container['planName'];
    }

    /**
     * Sets planName
     *
     * @param string|null $planName 招商方案名称
     *
     * @return self
     */
    public function setPlanName($planName)
    {
        $this->container['planName'] = $planName;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status 方案状态: 不可用:DISABLED;可用:ENABLED
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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


