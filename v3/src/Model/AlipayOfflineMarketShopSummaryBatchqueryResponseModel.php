<?php
/**
 * AlipayOfflineMarketShopSummaryBatchqueryResponseModel
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
 * The version of the OpenAPI document: 2024-04-18
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
 * AlipayOfflineMarketShopSummaryBatchqueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOfflineMarketShopSummaryBatchqueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOfflineMarketShopSummaryBatchqueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'currentPageNo' => 'string',
        'pageSize' => 'string',
        'shopSummaryInfos' => '\Alipay\OpenAPISDK\Model\ShopSummaryQueryResponse[]',
        'totalItems' => 'string',
        'totalPageNo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'currentPageNo' => null,
        'pageSize' => null,
        'shopSummaryInfos' => null,
        'totalItems' => null,
        'totalPageNo' => null
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
        'currentPageNo' => 'current_page_no',
        'pageSize' => 'page_size',
        'shopSummaryInfos' => 'shop_summary_infos',
        'totalItems' => 'total_items',
        'totalPageNo' => 'total_page_no'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currentPageNo' => 'setCurrentPageNo',
        'pageSize' => 'setPageSize',
        'shopSummaryInfos' => 'setShopSummaryInfos',
        'totalItems' => 'setTotalItems',
        'totalPageNo' => 'setTotalPageNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currentPageNo' => 'getCurrentPageNo',
        'pageSize' => 'getPageSize',
        'shopSummaryInfos' => 'getShopSummaryInfos',
        'totalItems' => 'getTotalItems',
        'totalPageNo' => 'getTotalPageNo'
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
        $this->container['currentPageNo'] = $data['currentPageNo'] ?? null;
        $this->container['pageSize'] = $data['pageSize'] ?? null;
        $this->container['shopSummaryInfos'] = $data['shopSummaryInfos'] ?? null;
        $this->container['totalItems'] = $data['totalItems'] ?? null;
        $this->container['totalPageNo'] = $data['totalPageNo'] ?? null;
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
     * Gets currentPageNo
     *
     * @return string|null
     */
    public function getCurrentPageNo()
    {
        return $this->container['currentPageNo'];
    }

    /**
     * Sets currentPageNo
     *
     * @param string|null $currentPageNo 当前页码
     *
     * @return self
     */
    public function setCurrentPageNo($currentPageNo)
    {
        $this->container['currentPageNo'] = $currentPageNo;

        return $this;
    }

    /**
     * Gets pageSize
     *
     * @return string|null
     */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
     * Sets pageSize
     *
     * @param string|null $pageSize 每页记录数
     *
     * @return self
     */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;

        return $this;
    }

    /**
     * Gets shopSummaryInfos
     *
     * @return \Alipay\OpenAPISDK\Model\ShopSummaryQueryResponse[]|null
     */
    public function getShopSummaryInfos()
    {
        return $this->container['shopSummaryInfos'];
    }

    /**
     * Sets shopSummaryInfos
     *
     * @param \Alipay\OpenAPISDK\Model\ShopSummaryQueryResponse[]|null $shopSummaryInfos 支付宝门店摘要信息列表
     *
     * @return self
     */
    public function setShopSummaryInfos($shopSummaryInfos)
    {
        $this->container['shopSummaryInfos'] = $shopSummaryInfos;

        return $this;
    }

    /**
     * Gets totalItems
     *
     * @return string|null
     */
    public function getTotalItems()
    {
        return $this->container['totalItems'];
    }

    /**
     * Sets totalItems
     *
     * @param string|null $totalItems 总记录数
     *
     * @return self
     */
    public function setTotalItems($totalItems)
    {
        $this->container['totalItems'] = $totalItems;

        return $this;
    }

    /**
     * Gets totalPageNo
     *
     * @return string|null
     */
    public function getTotalPageNo()
    {
        return $this->container['totalPageNo'];
    }

    /**
     * Sets totalPageNo
     *
     * @param string|null $totalPageNo 总页码数目
     *
     * @return self
     */
    public function setTotalPageNo($totalPageNo)
    {
        $this->container['totalPageNo'] = $totalPageNo;

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


