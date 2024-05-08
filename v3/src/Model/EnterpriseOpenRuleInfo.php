<?php
/**
 * EnterpriseOpenRuleInfo
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
 * EnterpriseOpenRuleInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EnterpriseOpenRuleInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EnterpriseOpenRuleInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'enterpriseId' => 'string',
        'enterpriseOpenRuleRecordInfoList' => '\Alipay\OpenAPISDK\Model\EnterpriseOpenRuleRecordInfo[]',
        'enterpriseOpenRuleRelationInfoList' => '\Alipay\OpenAPISDK\Model\EnterpriseOpenRuleRelationInfo[]',
        'gmtCreate' => 'string',
        'gmtModified' => 'string',
        'invoiceRuleId' => 'string',
        'invoiceRuleName' => 'string',
        'ownerId' => 'string',
        'sellerType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'enterpriseId' => null,
        'enterpriseOpenRuleRecordInfoList' => null,
        'enterpriseOpenRuleRelationInfoList' => null,
        'gmtCreate' => null,
        'gmtModified' => null,
        'invoiceRuleId' => null,
        'invoiceRuleName' => null,
        'ownerId' => null,
        'sellerType' => null
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
        'enterpriseId' => 'enterprise_id',
        'enterpriseOpenRuleRecordInfoList' => 'enterprise_open_rule_record_info_list',
        'enterpriseOpenRuleRelationInfoList' => 'enterprise_open_rule_relation_info_list',
        'gmtCreate' => 'gmt_create',
        'gmtModified' => 'gmt_modified',
        'invoiceRuleId' => 'invoice_rule_id',
        'invoiceRuleName' => 'invoice_rule_name',
        'ownerId' => 'owner_id',
        'sellerType' => 'seller_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enterpriseId' => 'setEnterpriseId',
        'enterpriseOpenRuleRecordInfoList' => 'setEnterpriseOpenRuleRecordInfoList',
        'enterpriseOpenRuleRelationInfoList' => 'setEnterpriseOpenRuleRelationInfoList',
        'gmtCreate' => 'setGmtCreate',
        'gmtModified' => 'setGmtModified',
        'invoiceRuleId' => 'setInvoiceRuleId',
        'invoiceRuleName' => 'setInvoiceRuleName',
        'ownerId' => 'setOwnerId',
        'sellerType' => 'setSellerType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enterpriseId' => 'getEnterpriseId',
        'enterpriseOpenRuleRecordInfoList' => 'getEnterpriseOpenRuleRecordInfoList',
        'enterpriseOpenRuleRelationInfoList' => 'getEnterpriseOpenRuleRelationInfoList',
        'gmtCreate' => 'getGmtCreate',
        'gmtModified' => 'getGmtModified',
        'invoiceRuleId' => 'getInvoiceRuleId',
        'invoiceRuleName' => 'getInvoiceRuleName',
        'ownerId' => 'getOwnerId',
        'sellerType' => 'getSellerType'
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
        $this->container['enterpriseId'] = $data['enterpriseId'] ?? null;
        $this->container['enterpriseOpenRuleRecordInfoList'] = $data['enterpriseOpenRuleRecordInfoList'] ?? null;
        $this->container['enterpriseOpenRuleRelationInfoList'] = $data['enterpriseOpenRuleRelationInfoList'] ?? null;
        $this->container['gmtCreate'] = $data['gmtCreate'] ?? null;
        $this->container['gmtModified'] = $data['gmtModified'] ?? null;
        $this->container['invoiceRuleId'] = $data['invoiceRuleId'] ?? null;
        $this->container['invoiceRuleName'] = $data['invoiceRuleName'] ?? null;
        $this->container['ownerId'] = $data['ownerId'] ?? null;
        $this->container['sellerType'] = $data['sellerType'] ?? null;
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
     * Gets enterpriseOpenRuleRecordInfoList
     *
     * @return \Alipay\OpenAPISDK\Model\EnterpriseOpenRuleRecordInfo[]|null
     */
    public function getEnterpriseOpenRuleRecordInfoList()
    {
        return $this->container['enterpriseOpenRuleRecordInfoList'];
    }

    /**
     * Sets enterpriseOpenRuleRecordInfoList
     *
     * @param \Alipay\OpenAPISDK\Model\EnterpriseOpenRuleRecordInfo[]|null $enterpriseOpenRuleRecordInfoList 当前生效和下次生效的开票规则记录
     *
     * @return self
     */
    public function setEnterpriseOpenRuleRecordInfoList($enterpriseOpenRuleRecordInfoList)
    {
        $this->container['enterpriseOpenRuleRecordInfoList'] = $enterpriseOpenRuleRecordInfoList;

        return $this;
    }

    /**
     * Gets enterpriseOpenRuleRelationInfoList
     *
     * @return \Alipay\OpenAPISDK\Model\EnterpriseOpenRuleRelationInfo[]|null
     */
    public function getEnterpriseOpenRuleRelationInfoList()
    {
        return $this->container['enterpriseOpenRuleRelationInfoList'];
    }

    /**
     * Sets enterpriseOpenRuleRelationInfoList
     *
     * @param \Alipay\OpenAPISDK\Model\EnterpriseOpenRuleRelationInfo[]|null $enterpriseOpenRuleRelationInfoList 开票规则绑定关系
     *
     * @return self
     */
    public function setEnterpriseOpenRuleRelationInfoList($enterpriseOpenRuleRelationInfoList)
    {
        $this->container['enterpriseOpenRuleRelationInfoList'] = $enterpriseOpenRuleRelationInfoList;

        return $this;
    }

    /**
     * Gets gmtCreate
     *
     * @return string|null
     */
    public function getGmtCreate()
    {
        return $this->container['gmtCreate'];
    }

    /**
     * Sets gmtCreate
     *
     * @param string|null $gmtCreate 创建时间
     *
     * @return self
     */
    public function setGmtCreate($gmtCreate)
    {
        $this->container['gmtCreate'] = $gmtCreate;

        return $this;
    }

    /**
     * Gets gmtModified
     *
     * @return string|null
     */
    public function getGmtModified()
    {
        return $this->container['gmtModified'];
    }

    /**
     * Sets gmtModified
     *
     * @param string|null $gmtModified 修改时间
     *
     * @return self
     */
    public function setGmtModified($gmtModified)
    {
        $this->container['gmtModified'] = $gmtModified;

        return $this;
    }

    /**
     * Gets invoiceRuleId
     *
     * @return string|null
     */
    public function getInvoiceRuleId()
    {
        return $this->container['invoiceRuleId'];
    }

    /**
     * Sets invoiceRuleId
     *
     * @param string|null $invoiceRuleId 开票规则ID
     *
     * @return self
     */
    public function setInvoiceRuleId($invoiceRuleId)
    {
        $this->container['invoiceRuleId'] = $invoiceRuleId;

        return $this;
    }

    /**
     * Gets invoiceRuleName
     *
     * @return string|null
     */
    public function getInvoiceRuleName()
    {
        return $this->container['invoiceRuleName'];
    }

    /**
     * Sets invoiceRuleName
     *
     * @param string|null $invoiceRuleName 开票规则名称
     *
     * @return self
     */
    public function setInvoiceRuleName($invoiceRuleName)
    {
        $this->container['invoiceRuleName'] = $invoiceRuleName;

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
     * @param string|null $ownerId 所有者ID（企业情况下即为企业ID）
     *
     * @return self
     */
    public function setOwnerId($ownerId)
    {
        $this->container['ownerId'] = $ownerId;

        return $this;
    }

    /**
     * Gets sellerType
     *
     * @return string|null
     */
    public function getSellerType()
    {
        return $this->container['sellerType'];
    }

    /**
     * Sets sellerType
     *
     * @param string|null $sellerType 销方类型：TP开票、商户开票、商户优先 枚举定义：MERCHANT（商户）、TP（TP）
     *
     * @return self
     */
    public function setSellerType($sellerType)
    {
        $this->container['sellerType'] = $sellerType;

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


