<?php
/**
 * AlipayFundAuthOperationDetailQueryModel
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
 * AlipayFundAuthOperationDetailQueryModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayFundAuthOperationDetailQueryModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayFundAuthOperationDetailQueryModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'authNo' => 'string',
        'operationId' => 'string',
        'operationType' => 'string',
        'outOrderNo' => 'string',
        'outRequestNo' => 'string',
        'queryOptions' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'authNo' => null,
        'operationId' => null,
        'operationType' => null,
        'outOrderNo' => null,
        'outRequestNo' => null,
        'queryOptions' => null
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
        'authNo' => 'auth_no',
        'operationId' => 'operation_id',
        'operationType' => 'operation_type',
        'outOrderNo' => 'out_order_no',
        'outRequestNo' => 'out_request_no',
        'queryOptions' => 'query_options'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authNo' => 'setAuthNo',
        'operationId' => 'setOperationId',
        'operationType' => 'setOperationType',
        'outOrderNo' => 'setOutOrderNo',
        'outRequestNo' => 'setOutRequestNo',
        'queryOptions' => 'setQueryOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authNo' => 'getAuthNo',
        'operationId' => 'getOperationId',
        'operationType' => 'getOperationType',
        'outOrderNo' => 'getOutOrderNo',
        'outRequestNo' => 'getOutRequestNo',
        'queryOptions' => 'getQueryOptions'
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
        $this->container['authNo'] = $data['authNo'] ?? null;
        $this->container['operationId'] = $data['operationId'] ?? null;
        $this->container['operationType'] = $data['operationType'] ?? null;
        $this->container['outOrderNo'] = $data['outOrderNo'] ?? null;
        $this->container['outRequestNo'] = $data['outRequestNo'] ?? null;
        $this->container['queryOptions'] = $data['queryOptions'] ?? null;
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
     * Gets authNo
     *
     * @return string|null
     */
    public function getAuthNo()
    {
        return $this->container['authNo'];
    }

    /**
     * Sets authNo
     *
     * @param string|null $authNo 支付宝授权资金订单号。 与商户的授权资金订单号不能同时为空，二者都传入时，以支付宝资金授权订单号为准，该参数与支付宝授权资金操作流水号配对使用。
     *
     * @return self
     */
    public function setAuthNo($authNo)
    {
        $this->container['authNo'] = $authNo;

        return $this;
    }

    /**
     * Gets operationId
     *
     * @return string|null
     */
    public function getOperationId()
    {
        return $this->container['operationId'];
    }

    /**
     * Sets operationId
     *
     * @param string|null $operationId 支付宝的授权资金操作流水号。 与商户的授权资金操作流水号不能同时为空，二者都传入时，以支付宝的授权资金操作流水号为准，该参数与支付宝授权资金订单号配对使用。
     *
     * @return self
     */
    public function setOperationId($operationId)
    {
        $this->container['operationId'] = $operationId;

        return $this;
    }

    /**
     * Gets operationType
     *
     * @return string|null
     */
    public function getOperationType()
    {
        return $this->container['operationType'];
    }

    /**
     * Sets operationType
     *
     * @param string|null $operationType 需要查询的授权资金操作类型。 未传入本参数时，如果仅查询出单笔明细则直接返回，如果查询出多笔则优先返回冻结明细、无冻结明细时返回解冻明细； 当传入本参数时，则严格按照该操作类型返回对应明细
     *
     * @return self
     */
    public function setOperationType($operationType)
    {
        $this->container['operationType'] = $operationType;

        return $this;
    }

    /**
     * Gets outOrderNo
     *
     * @return string|null
     */
    public function getOutOrderNo()
    {
        return $this->container['outOrderNo'];
    }

    /**
     * Sets outOrderNo
     *
     * @param string|null $outOrderNo 商户的授权资金订单号。 与支付宝的授权资金订单号不能同时为空，二者都传入时，以支付宝的授权资金订单号为准，该参数与商户的授权资金操作流水号配对使用。 该值与资金冻结时 out_order_no一致。
     *
     * @return self
     */
    public function setOutOrderNo($outOrderNo)
    {
        $this->container['outOrderNo'] = $outOrderNo;

        return $this;
    }

    /**
     * Gets outRequestNo
     *
     * @return string|null
     */
    public function getOutRequestNo()
    {
        return $this->container['outRequestNo'];
    }

    /**
     * Sets outRequestNo
     *
     * @param string|null $outRequestNo 商户的授权资金操作流水号。 与支付宝的授权资金操作流水号不能同时为空，二者都传入时，以支付宝的授权资金操作流水号为准，该参数与商户的授权资金订单号配对使用。 查询冻结明细时，该值与发起冻结操作时传入的out_request_no一致； 查询解冻明细时，该值与发起解冻操作时传入的out_request_no一致； 查询支付明细时，该值与发起转支付操作时传入的out_trade_no一致。
     *
     * @return self
     */
    public function setOutRequestNo($outRequestNo)
    {
        $this->container['outRequestNo'] = $outRequestNo;

        return $this;
    }

    /**
     * Gets queryOptions
     *
     * @return string[]|null
     */
    public function getQueryOptions()
    {
        return $this->container['queryOptions'];
    }

    /**
     * Sets queryOptions
     *
     * @param string[]|null $queryOptions 需要查询的额外信息
     *
     * @return self
     */
    public function setQueryOptions($queryOptions)
    {
        $this->container['queryOptions'] = $queryOptions;

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


