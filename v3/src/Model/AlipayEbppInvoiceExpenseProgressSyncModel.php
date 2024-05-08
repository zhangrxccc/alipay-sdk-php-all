<?php
/**
 * AlipayEbppInvoiceExpenseProgressSyncModel
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
 * AlipayEbppInvoiceExpenseProgressSyncModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayEbppInvoiceExpenseProgressSyncModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayEbppInvoiceExpenseProgressSyncModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'applyId' => 'string',
        'businessTime' => 'string',
        'expenseDetailUrl' => 'string',
        'expenseOrderNo' => 'string',
        'expenseTaxNo' => 'string',
        'invoiceCode' => 'string',
        'invoiceNo' => 'string',
        'memo' => 'string',
        'openId' => 'string',
        'status' => 'string',
        'userId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'applyId' => null,
        'businessTime' => null,
        'expenseDetailUrl' => null,
        'expenseOrderNo' => null,
        'expenseTaxNo' => null,
        'invoiceCode' => null,
        'invoiceNo' => null,
        'memo' => null,
        'openId' => null,
        'status' => null,
        'userId' => null
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
        'applyId' => 'apply_id',
        'businessTime' => 'business_time',
        'expenseDetailUrl' => 'expense_detail_url',
        'expenseOrderNo' => 'expense_order_no',
        'expenseTaxNo' => 'expense_tax_no',
        'invoiceCode' => 'invoice_code',
        'invoiceNo' => 'invoice_no',
        'memo' => 'memo',
        'openId' => 'open_id',
        'status' => 'status',
        'userId' => 'user_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'applyId' => 'setApplyId',
        'businessTime' => 'setBusinessTime',
        'expenseDetailUrl' => 'setExpenseDetailUrl',
        'expenseOrderNo' => 'setExpenseOrderNo',
        'expenseTaxNo' => 'setExpenseTaxNo',
        'invoiceCode' => 'setInvoiceCode',
        'invoiceNo' => 'setInvoiceNo',
        'memo' => 'setMemo',
        'openId' => 'setOpenId',
        'status' => 'setStatus',
        'userId' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'applyId' => 'getApplyId',
        'businessTime' => 'getBusinessTime',
        'expenseDetailUrl' => 'getExpenseDetailUrl',
        'expenseOrderNo' => 'getExpenseOrderNo',
        'expenseTaxNo' => 'getExpenseTaxNo',
        'invoiceCode' => 'getInvoiceCode',
        'invoiceNo' => 'getInvoiceNo',
        'memo' => 'getMemo',
        'openId' => 'getOpenId',
        'status' => 'getStatus',
        'userId' => 'getUserId'
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
        $this->container['applyId'] = $data['applyId'] ?? null;
        $this->container['businessTime'] = $data['businessTime'] ?? null;
        $this->container['expenseDetailUrl'] = $data['expenseDetailUrl'] ?? null;
        $this->container['expenseOrderNo'] = $data['expenseOrderNo'] ?? null;
        $this->container['expenseTaxNo'] = $data['expenseTaxNo'] ?? null;
        $this->container['invoiceCode'] = $data['invoiceCode'] ?? null;
        $this->container['invoiceNo'] = $data['invoiceNo'] ?? null;
        $this->container['memo'] = $data['memo'] ?? null;
        $this->container['openId'] = $data['openId'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['userId'] = $data['userId'] ?? null;
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
     * Gets applyId
     *
     * @return string|null
     */
    public function getApplyId()
    {
        return $this->container['applyId'];
    }

    /**
     * Sets applyId
     *
     * @param string|null $applyId 同步申请id，每次发起同步时生成，isv每次请求需要保证唯一
     *
     * @return self
     */
    public function setApplyId($applyId)
    {
        $this->container['applyId'] = $applyId;

        return $this;
    }

    /**
     * Gets businessTime
     *
     * @return string|null
     */
    public function getBusinessTime()
    {
        return $this->container['businessTime'];
    }

    /**
     * Sets businessTime
     *
     * @param string|null $businessTime 报销状态变更执行时间
     *
     * @return self
     */
    public function setBusinessTime($businessTime)
    {
        $this->container['businessTime'] = $businessTime;

        return $this;
    }

    /**
     * Gets expenseDetailUrl
     *
     * @return string|null
     */
    public function getExpenseDetailUrl()
    {
        return $this->container['expenseDetailUrl'];
    }

    /**
     * Sets expenseDetailUrl
     *
     * @param string|null $expenseDetailUrl 报销详情地址，提供用户通过发票管家查看报销进度的地址  如果报销企业入驻发票管家时需要isv传入报销详情地址，则必须提供
     *
     * @return self
     */
    public function setExpenseDetailUrl($expenseDetailUrl)
    {
        $this->container['expenseDetailUrl'] = $expenseDetailUrl;

        return $this;
    }

    /**
     * Gets expenseOrderNo
     *
     * @return string|null
     */
    public function getExpenseOrderNo()
    {
        return $this->container['expenseOrderNo'];
    }

    /**
     * Sets expenseOrderNo
     *
     * @param string|null $expenseOrderNo 报销单据号
     *
     * @return self
     */
    public function setExpenseOrderNo($expenseOrderNo)
    {
        $this->container['expenseOrderNo'] = $expenseOrderNo;

        return $this;
    }

    /**
     * Gets expenseTaxNo
     *
     * @return string|null
     */
    public function getExpenseTaxNo()
    {
        return $this->container['expenseTaxNo'];
    }

    /**
     * Sets expenseTaxNo
     *
     * @param string|null $expenseTaxNo 报销企业税号
     *
     * @return self
     */
    public function setExpenseTaxNo($expenseTaxNo)
    {
        $this->container['expenseTaxNo'] = $expenseTaxNo;

        return $this;
    }

    /**
     * Gets invoiceCode
     *
     * @return string|null
     */
    public function getInvoiceCode()
    {
        return $this->container['invoiceCode'];
    }

    /**
     * Sets invoiceCode
     *
     * @param string|null $invoiceCode 发票代码
     *
     * @return self
     */
    public function setInvoiceCode($invoiceCode)
    {
        $this->container['invoiceCode'] = $invoiceCode;

        return $this;
    }

    /**
     * Gets invoiceNo
     *
     * @return string|null
     */
    public function getInvoiceNo()
    {
        return $this->container['invoiceNo'];
    }

    /**
     * Sets invoiceNo
     *
     * @param string|null $invoiceNo 发票号码
     *
     * @return self
     */
    public function setInvoiceNo($invoiceNo)
    {
        $this->container['invoiceNo'] = $invoiceNo;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string|null
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string|null $memo 备注
     *
     * @return self
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets openId
     *
     * @return string|null
     */
    public function getOpenId()
    {
        return $this->container['openId'];
    }

    /**
     * Sets openId
     *
     * @param string|null $openId open_id，支付宝用户id
     *
     * @return self
     */
    public function setOpenId($openId)
    {
        $this->container['openId'] = $openId;

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
     * @param string|null $status 报销操作。枚举值如下： *EXPENSE_APPLY：用户已提交申请。*EXPENSE_APPROVAL_PASS：报销审核通过。 *EXPENSE_FINISHED：报销完结。 *EXPENSE_CANCEL：报销撤回。
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param string|null $userId 发票归属用户 id，用户在支付宝的唯一标识，以 2088 开头的 16 位纯数字组成。
     *
     * @return self
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

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


