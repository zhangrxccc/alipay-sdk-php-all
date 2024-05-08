<?php
/**
 * AlipayBossFncInvoiceBatchqueryResponseModel
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
 * AlipayBossFncInvoiceBatchqueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayBossFncInvoiceBatchqueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayBossFncInvoiceBatchqueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amt' => '\Alipay\OpenAPISDK\Model\MultiCurrencyMoneyOpenApi',
        'currentPage' => 'int',
        'itemsPage' => 'int',
        'resultSet' => '\Alipay\OpenAPISDK\Model\ArInvoiceOpenApiResponse[]',
        'totalItems' => 'int',
        'totalPages' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amt' => null,
        'currentPage' => null,
        'itemsPage' => null,
        'resultSet' => null,
        'totalItems' => null,
        'totalPages' => null
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
        'amt' => 'amt',
        'currentPage' => 'current_page',
        'itemsPage' => 'items_page',
        'resultSet' => 'result_set',
        'totalItems' => 'total_items',
        'totalPages' => 'total_pages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amt' => 'setAmt',
        'currentPage' => 'setCurrentPage',
        'itemsPage' => 'setItemsPage',
        'resultSet' => 'setResultSet',
        'totalItems' => 'setTotalItems',
        'totalPages' => 'setTotalPages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amt' => 'getAmt',
        'currentPage' => 'getCurrentPage',
        'itemsPage' => 'getItemsPage',
        'resultSet' => 'getResultSet',
        'totalItems' => 'getTotalItems',
        'totalPages' => 'getTotalPages'
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
        $this->container['amt'] = $data['amt'] ?? null;
        $this->container['currentPage'] = $data['currentPage'] ?? null;
        $this->container['itemsPage'] = $data['itemsPage'] ?? null;
        $this->container['resultSet'] = $data['resultSet'] ?? null;
        $this->container['totalItems'] = $data['totalItems'] ?? null;
        $this->container['totalPages'] = $data['totalPages'] ?? null;
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
     * Gets amt
     *
     * @return \Alipay\OpenAPISDK\Model\MultiCurrencyMoneyOpenApi|null
     */
    public function getAmt()
    {
        return $this->container['amt'];
    }

    /**
     * Sets amt
     *
     * @param \Alipay\OpenAPISDK\Model\MultiCurrencyMoneyOpenApi|null $amt amt
     *
     * @return self
     */
    public function setAmt($amt)
    {
        $this->container['amt'] = $amt;

        return $this;
    }

    /**
     * Gets currentPage
     *
     * @return int|null
     */
    public function getCurrentPage()
    {
        return $this->container['currentPage'];
    }

    /**
     * Sets currentPage
     *
     * @param int|null $currentPage 当前页码
     *
     * @return self
     */
    public function setCurrentPage($currentPage)
    {
        $this->container['currentPage'] = $currentPage;

        return $this;
    }

    /**
     * Gets itemsPage
     *
     * @return int|null
     */
    public function getItemsPage()
    {
        return $this->container['itemsPage'];
    }

    /**
     * Sets itemsPage
     *
     * @param int|null $itemsPage 每页条数
     *
     * @return self
     */
    public function setItemsPage($itemsPage)
    {
        $this->container['itemsPage'] = $itemsPage;

        return $this;
    }

    /**
     * Gets resultSet
     *
     * @return \Alipay\OpenAPISDK\Model\ArInvoiceOpenApiResponse[]|null
     */
    public function getResultSet()
    {
        return $this->container['resultSet'];
    }

    /**
     * Sets resultSet
     *
     * @param \Alipay\OpenAPISDK\Model\ArInvoiceOpenApiResponse[]|null $resultSet 结果对象,发票对象的集合
     *
     * @return self
     */
    public function setResultSet($resultSet)
    {
        $this->container['resultSet'] = $resultSet;

        return $this;
    }

    /**
     * Gets totalItems
     *
     * @return int|null
     */
    public function getTotalItems()
    {
        return $this->container['totalItems'];
    }

    /**
     * Sets totalItems
     *
     * @param int|null $totalItems 查询到的结果总数
     *
     * @return self
     */
    public function setTotalItems($totalItems)
    {
        $this->container['totalItems'] = $totalItems;

        return $this;
    }

    /**
     * Gets totalPages
     *
     * @return int|null
     */
    public function getTotalPages()
    {
        return $this->container['totalPages'];
    }

    /**
     * Sets totalPages
     *
     * @param int|null $totalPages 总页数
     *
     * @return self
     */
    public function setTotalPages($totalPages)
    {
        $this->container['totalPages'] = $totalPages;

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


