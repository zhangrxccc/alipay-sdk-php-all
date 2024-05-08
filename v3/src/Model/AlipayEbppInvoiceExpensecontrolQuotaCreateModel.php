<?php
/**
 * AlipayEbppInvoiceExpensecontrolQuotaCreateModel
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
 * AlipayEbppInvoiceExpensecontrolQuotaCreateModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayEbppInvoiceExpensecontrolQuotaCreateModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayEbppInvoiceExpensecontrolQuotaCreateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'string',
        'agreementNo' => 'string',
        'effectiveEndDate' => 'string',
        'effectiveStartDate' => 'string',
        'enterpriseId' => 'string',
        'outerSourceId' => 'string',
        'ownerId' => 'string',
        'ownerOpenId' => 'string',
        'ownerType' => 'string',
        'platform' => 'string',
        'quotaType' => 'string',
        'quotaValue' => 'string',
        'shareMode' => 'string',
        'targetId' => 'string',
        'targetType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'accountId' => null,
        'agreementNo' => null,
        'effectiveEndDate' => null,
        'effectiveStartDate' => null,
        'enterpriseId' => null,
        'outerSourceId' => null,
        'ownerId' => null,
        'ownerOpenId' => null,
        'ownerType' => null,
        'platform' => null,
        'quotaType' => null,
        'quotaValue' => null,
        'shareMode' => null,
        'targetId' => null,
        'targetType' => null
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
        'accountId' => 'account_id',
        'agreementNo' => 'agreement_no',
        'effectiveEndDate' => 'effective_end_date',
        'effectiveStartDate' => 'effective_start_date',
        'enterpriseId' => 'enterprise_id',
        'outerSourceId' => 'outer_source_id',
        'ownerId' => 'owner_id',
        'ownerOpenId' => 'owner_open_id',
        'ownerType' => 'owner_type',
        'platform' => 'platform',
        'quotaType' => 'quota_type',
        'quotaValue' => 'quota_value',
        'shareMode' => 'share_mode',
        'targetId' => 'target_id',
        'targetType' => 'target_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'agreementNo' => 'setAgreementNo',
        'effectiveEndDate' => 'setEffectiveEndDate',
        'effectiveStartDate' => 'setEffectiveStartDate',
        'enterpriseId' => 'setEnterpriseId',
        'outerSourceId' => 'setOuterSourceId',
        'ownerId' => 'setOwnerId',
        'ownerOpenId' => 'setOwnerOpenId',
        'ownerType' => 'setOwnerType',
        'platform' => 'setPlatform',
        'quotaType' => 'setQuotaType',
        'quotaValue' => 'setQuotaValue',
        'shareMode' => 'setShareMode',
        'targetId' => 'setTargetId',
        'targetType' => 'setTargetType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'agreementNo' => 'getAgreementNo',
        'effectiveEndDate' => 'getEffectiveEndDate',
        'effectiveStartDate' => 'getEffectiveStartDate',
        'enterpriseId' => 'getEnterpriseId',
        'outerSourceId' => 'getOuterSourceId',
        'ownerId' => 'getOwnerId',
        'ownerOpenId' => 'getOwnerOpenId',
        'ownerType' => 'getOwnerType',
        'platform' => 'getPlatform',
        'quotaType' => 'getQuotaType',
        'quotaValue' => 'getQuotaValue',
        'shareMode' => 'getShareMode',
        'targetId' => 'getTargetId',
        'targetType' => 'getTargetType'
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
        $this->container['accountId'] = $data['accountId'] ?? null;
        $this->container['agreementNo'] = $data['agreementNo'] ?? null;
        $this->container['effectiveEndDate'] = $data['effectiveEndDate'] ?? null;
        $this->container['effectiveStartDate'] = $data['effectiveStartDate'] ?? null;
        $this->container['enterpriseId'] = $data['enterpriseId'] ?? null;
        $this->container['outerSourceId'] = $data['outerSourceId'] ?? null;
        $this->container['ownerId'] = $data['ownerId'] ?? null;
        $this->container['ownerOpenId'] = $data['ownerOpenId'] ?? null;
        $this->container['ownerType'] = $data['ownerType'] ?? null;
        $this->container['platform'] = $data['platform'] ?? null;
        $this->container['quotaType'] = $data['quotaType'] ?? null;
        $this->container['quotaValue'] = $data['quotaValue'] ?? null;
        $this->container['shareMode'] = $data['shareMode'] ?? null;
        $this->container['targetId'] = $data['targetId'] ?? null;
        $this->container['targetType'] = $data['targetType'] ?? null;
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
     * Gets accountId
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param string|null $accountId 共同账号id
     *
     * @return self
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets agreementNo
     *
     * @return string|null
     */
    public function getAgreementNo()
    {
        return $this->container['agreementNo'];
    }

    /**
     * Sets agreementNo
     *
     * @param string|null $agreementNo 授权签约协议号
     *
     * @return self
     */
    public function setAgreementNo($agreementNo)
    {
        $this->container['agreementNo'] = $agreementNo;

        return $this;
    }

    /**
     * Gets effectiveEndDate
     *
     * @return string|null
     */
    public function getEffectiveEndDate()
    {
        return $this->container['effectiveEndDate'];
    }

    /**
     * Sets effectiveEndDate
     *
     * @param string|null $effectiveEndDate 额度失效时间（格式：yyyy-MM-dd HH:mm:ss）
     *
     * @return self
     */
    public function setEffectiveEndDate($effectiveEndDate)
    {
        $this->container['effectiveEndDate'] = $effectiveEndDate;

        return $this;
    }

    /**
     * Gets effectiveStartDate
     *
     * @return string|null
     */
    public function getEffectiveStartDate()
    {
        return $this->container['effectiveStartDate'];
    }

    /**
     * Sets effectiveStartDate
     *
     * @param string|null $effectiveStartDate 额度生效时间（格式：yyyy-MM-dd HH:mm:ss）
     *
     * @return self
     */
    public function setEffectiveStartDate($effectiveStartDate)
    {
        $this->container['effectiveStartDate'] = $effectiveStartDate;

        return $this;
    }

    /**
     * Gets enterpriseId
     *
     * @return string|null
     */
    public function getEnterpriseId()
    {
        return $this->container['enterpriseId'];
    }

    /**
     * Sets enterpriseId
     *
     * @param string|null $enterpriseId 企业ID
     *
     * @return self
     */
    public function setEnterpriseId($enterpriseId)
    {
        $this->container['enterpriseId'] = $enterpriseId;

        return $this;
    }

    /**
     * Gets outerSourceId
     *
     * @return string|null
     */
    public function getOuterSourceId()
    {
        return $this->container['outerSourceId'];
    }

    /**
     * Sets outerSourceId
     *
     * @param string|null $outerSourceId 外部操作幂等ID（接入方接口调用幂等控制ID）
     *
     * @return self
     */
    public function setOuterSourceId($outerSourceId)
    {
        $this->container['outerSourceId'] = $outerSourceId;

        return $this;
    }

    /**
     * Gets ownerId
     *
     * @return string|null
     */
    public function getOwnerId()
    {
        return $this->container['ownerId'];
    }

    /**
     * Sets ownerId
     *
     * @param string|null $ownerId 额度所属者ID（未切换open_id请使用此字段）：
     *
     * @return self
     */
    public function setOwnerId($ownerId)
    {
        $this->container['ownerId'] = $ownerId;

        return $this;
    }

    /**
     * Gets ownerOpenId
     *
     * @return string|null
     */
    public function getOwnerOpenId()
    {
        return $this->container['ownerOpenId'];
    }

    /**
     * Sets ownerOpenId
     *
     * @param string|null $ownerOpenId 额度所属者ID（切换open_id后请使用此字段）：
     *
     * @return self
     */
    public function setOwnerOpenId($ownerOpenId)
    {
        $this->container['ownerOpenId'] = $ownerOpenId;

        return $this;
    }

    /**
     * Gets ownerType
     *
     * @return string|null
     */
    public function getOwnerType()
    {
        return $this->container['ownerType'];
    }

    /**
     * Sets ownerType
     *
     * @param string|null $ownerType 额度所属者类型
     *
     * @return self
     */
    public function setOwnerType($ownerType)
    {
        $this->container['ownerType'] = $ownerType;

        return $this;
    }

    /**
     * Gets platform
     *
     * @return string|null
     */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
     * Sets platform
     *
     * @param string|null $platform 外部平台编码（通常为接入方大写英文缩写）
     *
     * @return self
     */
    public function setPlatform($platform)
    {
        $this->container['platform'] = $platform;

        return $this;
    }

    /**
     * Gets quotaType
     *
     * @return string|null
     */
    public function getQuotaType()
    {
        return $this->container['quotaType'];
    }

    /**
     * Sets quotaType
     *
     * @param string|null $quotaType 创建额度类型
     *
     * @return self
     */
    public function setQuotaType($quotaType)
    {
        $this->container['quotaType'] = $quotaType;

        return $this;
    }

    /**
     * Gets quotaValue
     *
     * @return string|null
     */
    public function getQuotaValue()
    {
        return $this->container['quotaValue'];
    }

    /**
     * Sets quotaValue
     *
     * @param string|null $quotaValue 额度值，以（分）为单位
     *
     * @return self
     */
    public function setQuotaValue($quotaValue)
    {
        $this->container['quotaValue'] = $quotaValue;

        return $this;
    }

    /**
     * Gets shareMode
     *
     * @return string|null
     */
    public function getShareMode()
    {
        return $this->container['shareMode'];
    }

    /**
     * Sets shareMode
     *
     * @param string|null $shareMode 0:不可转赠 1:可以转增
     *
     * @return self
     */
    public function setShareMode($shareMode)
    {
        $this->container['shareMode'] = $shareMode;

        return $this;
    }

    /**
     * Gets targetId
     *
     * @return string|null
     */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
     * Sets targetId
     *
     * @param string|null $targetId 额度维度ID
     *
     * @return self
     */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;

        return $this;
    }

    /**
     * Gets targetType
     *
     * @return string|null
     */
    public function getTargetType()
    {
        return $this->container['targetType'];
    }

    /**
     * Sets targetType
     *
     * @param string|null $targetType 额度维度 枚举值： EXPENSE_TYPE（费用类型维度）， RULE_GROUP_AGGREGATION（规则聚合维度）， INSTITUTION（制度维度）
     *
     * @return self
     */
    public function setTargetType($targetType)
    {
        $this->container['targetType'] = $targetType;

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


