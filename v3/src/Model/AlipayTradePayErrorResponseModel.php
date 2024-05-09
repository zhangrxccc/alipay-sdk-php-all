<?php
/**
 * AlipayTradePayErrorResponseModel
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
 * AlipayTradePayErrorResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayTradePayErrorResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayTradePayErrorResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'code' => 'string',
        'links' => 'string',
        'message' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'code' => null,
        'links' => null,
        'message' => null
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
        'code' => 'code',
        'links' => 'links',
        'message' => 'message'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'links' => 'setLinks',
        'message' => 'setMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'links' => 'getLinks',
        'message' => 'getMessage'
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

    public const CODE_SYSTEM_ERROR = 'ACQ.SYSTEM_ERROR';
    public const CODE_INVALID_PARAMETER = 'ACQ.INVALID_PARAMETER';
    public const CODE_ACCESS_FORBIDDEN = 'ACQ.ACCESS_FORBIDDEN';
    public const CODE_EXIST_FORBIDDEN_WORD = 'ACQ.EXIST_FORBIDDEN_WORD';
    public const CODE_PARTNER_ERROR = 'ACQ.PARTNER_ERROR';
    public const CODE_TOTAL_FEE_EXCEED = 'ACQ.TOTAL_FEE_EXCEED';
    public const CODE_PAYMENT_AUTH_CODE_INVALID = 'ACQ.PAYMENT_AUTH_CODE_INVALID';
    public const CODE_CONTEXT_INCONSISTENT = 'ACQ.CONTEXT_INCONSISTENT';
    public const CODE_TRADE_HAS_SUCCESS = 'ACQ.TRADE_HAS_SUCCESS';
    public const CODE_TRADE_HAS_CLOSE = 'ACQ.TRADE_HAS_CLOSE';
    public const CODE_BUYER_BALANCE_NOT_ENOUGH = 'ACQ.BUYER_BALANCE_NOT_ENOUGH';
    public const CODE_BUYER_BANKCARD_BALANCE_NOT_ENOUGH = 'ACQ.BUYER_BANKCARD_BALANCE_NOT_ENOUGH';
    public const CODE_ERROR_BALANCE_PAYMENT_DISABLE = 'ACQ.ERROR_BALANCE_PAYMENT_DISABLE';
    public const CODE_BUYER_SELLER_EQUAL = 'ACQ.BUYER_SELLER_EQUAL';
    public const CODE_TRADE_BUYER_NOT_MATCH = 'ACQ.TRADE_BUYER_NOT_MATCH';
    public const CODE_BUYER_ENABLE_STATUS_FORBID = 'ACQ.BUYER_ENABLE_STATUS_FORBID';
    public const CODE_PULL_MOBILE_CASHIER_FAIL = 'ACQ.PULL_MOBILE_CASHIER_FAIL';
    public const CODE_MOBILE_PAYMENT_SWITCH_OFF = 'ACQ.MOBILE_PAYMENT_SWITCH_OFF';
    public const CODE_PAYMENT_FAIL = 'ACQ.PAYMENT_FAIL';
    public const CODE_BUYER_PAYMENT_AMOUNT_DAY_LIMIT_ERROR = 'ACQ.BUYER_PAYMENT_AMOUNT_DAY_LIMIT_ERROR';
    public const CODE_BEYOND_PAY_RESTRICTION = 'ACQ.BEYOND_PAY_RESTRICTION';
    public const CODE_BEYOND_PER_RECEIPT_RESTRICTION = 'ACQ.BEYOND_PER_RECEIPT_RESTRICTION';
    public const CODE_BUYER_PAYMENT_AMOUNT_MONTH_LIMIT_ERROR = 'ACQ.BUYER_PAYMENT_AMOUNT_MONTH_LIMIT_ERROR';
    public const CODE_SELLER_BEEN_BLOCKED = 'ACQ.SELLER_BEEN_BLOCKED';
    public const CODE_ERROR_BUYER_CERTIFY_LEVEL_LIMIT = 'ACQ.ERROR_BUYER_CERTIFY_LEVEL_LIMIT';
    public const CODE_PAYMENT_REQUEST_HAS_RISK = 'ACQ.PAYMENT_REQUEST_HAS_RISK';
    public const CODE_NO_PAYMENT_INSTRUMENTS_AVAILABLE = 'ACQ.NO_PAYMENT_INSTRUMENTS_AVAILABLE';
    public const CODE_USER_FACE_PAYMENT_SWITCH_OFF = 'ACQ.USER_FACE_PAYMENT_SWITCH_OFF';
    public const CODE_INVALID_STORE_ID = 'ACQ.INVALID_STORE_ID';
    public const CODE_SUB_MERCHANT_CREATE_FAIL = 'ACQ.SUB_MERCHANT_CREATE_FAIL';
    public const CODE_SUB_MERCHANT_TYPE_INVALID = 'ACQ.SUB_MERCHANT_TYPE_INVALID';
    public const CODE_AGREEMENT_NOT_EXIST = 'ACQ.AGREEMENT_NOT_EXIST';
    public const CODE_AGREEMENT_INVALID = 'ACQ.AGREEMENT_INVALID';
    public const CODE_AGREEMENT_STATUS_NOT_NORMAL = 'ACQ.AGREEMENT_STATUS_NOT_NORMAL';
    public const CODE_MERCHANT_AGREEMENT_NOT_EXIST = 'ACQ.MERCHANT_AGREEMENT_NOT_EXIST';
    public const CODE_MERCHANT_AGREEMENT_INVALID = 'ACQ.MERCHANT_AGREEMENT_INVALID';
    public const CODE_MERCHANT_STATUS_NOT_NORMAL = 'ACQ.MERCHANT_STATUS_NOT_NORMAL';
    public const CODE_CARD_USER_NOT_MATCH = 'ACQ.CARD_USER_NOT_MATCH';
    public const CODE_CARD_TYPE_ERROR = 'ACQ.CARD_TYPE_ERROR';
    public const CODE_CERT_EXPIRED = 'ACQ.CERT_EXPIRED';
    public const CODE_AMOUNT_OR_CURRENCY_ERROR = 'ACQ.AMOUNT_OR_CURRENCY_ERROR';
    public const CODE_CURRENCY_NOT_SUPPORT = 'ACQ.CURRENCY_NOT_SUPPORT';
    public const CODE_MERCHANT_UNSUPPORT_ADVANCE = 'ACQ.MERCHANT_UNSUPPORT_ADVANCE';
    public const CODE_BUYER_UNSUPPORT_ADVANCE = 'ACQ.BUYER_UNSUPPORT_ADVANCE';
    public const CODE_ORDER_UNSUPPORT_ADVANCE = 'ACQ.ORDER_UNSUPPORT_ADVANCE';
    public const CODE_CYCLE_PAY_DATE_NOT_MATCH = 'ACQ.CYCLE_PAY_DATE_NOT_MATCH';
    public const CODE_CYCLE_PAY_SINGLE_FEE_EXCEED = 'ACQ.CYCLE_PAY_SINGLE_FEE_EXCEED';
    public const CODE_CYCLE_PAY_TOTAL_FEE_EXCEED = 'ACQ.CYCLE_PAY_TOTAL_FEE_EXCEED';
    public const CODE_CYCLE_PAY_TOTAL_TIMES_EXCEED = 'ACQ.CYCLE_PAY_TOTAL_TIMES_EXCEED';
    public const CODE_SECONDARY_MERCHANT_STATUS_ERROR = 'ACQ.SECONDARY_MERCHANT_STATUS_ERROR';
    public const CODE_AUTH_NO_ERROR = 'ACQ.AUTH_NO_ERROR';
    public const CODE_BUYER_NOT_EXIST = 'ACQ.BUYER_NOT_EXIST';
    public const CODE_PRODUCT_AMOUNT_LIMIT_ERROR = 'ACQ.PRODUCT_AMOUNT_LIMIT_ERROR';
    public const CODE_SECONDARY_MERCHANT_ALIPAY_ACCOUNT_INVALID = 'ACQ.SECONDARY_MERCHANT_ALIPAY_ACCOUNT_INVALID';
    public const CODE_INVALID_RECEIVE_ACCOUNT = 'ACQ.INVALID_RECEIVE_ACCOUNT';
    public const CODE_SELLER_NOT_EXIST = 'ACQ.SELLER_NOT_EXIST';
    public const CODE_AUTH_AMOUNT_NOT_ENOUGH = 'ACQ.AUTH_AMOUNT_NOT_ENOUGH';
    public const CODE_AGREEMENT_ERROR = 'ACQ.AGREEMENT_ERROR';
    public const CODE_BEYOND_PER_RECEIPT_SINGLE_RESTRICTION = 'ACQ.BEYOND_PER_RECEIPT_SINGLE_RESTRICTION';
    public const CODE_PAYER_UNMATCHED = 'ACQ.PAYER_UNMATCHED';
    public const CODE_PRE_AUTH_PROD_CODE_INCONSISTENT = 'ACQ.PRE_AUTH_PROD_CODE_INCONSISTENT';
    public const CODE_SECONDARY_MERCHANT_ID_INVALID = 'ACQ.SECONDARY_MERCHANT_ID_INVALID';
    public const CODE_NOW_TIME_AFTER_EXPIRE_TIME_ERROR = 'ACQ.NOW_TIME_AFTER_EXPIRE_TIME_ERROR';
    public const CODE_SECONDARY_MERCHANT_NOT_MATCH = 'ACQ.SECONDARY_MERCHANT_NOT_MATCH';
    public const CODE_REQUEST_AMOUNT_EXCEED = 'ACQ.REQUEST_AMOUNT_EXCEED';
    public const CODE_SUB_GOODS_SIZE_MAX_COUNT = 'ACQ.SUB_GOODS_SIZE_MAX_COUNT';
    public const CODE_NOT_SUPPORT_PAYMENT_INST = 'ACQ.NOT_SUPPORT_PAYMENT_INST';
    public const CODE_BUYER_NOT_MAINLAND_CERT = 'ACQ.BUYER_NOT_MAINLAND_CERT';
    public const CODE_SECONDARY_MERCHANT_ID_BLANK = 'ACQ.SECONDARY_MERCHANT_ID_BLANK';
    public const CODE_TRADE_SETTLE_ERROR = 'ACQ.TRADE_SETTLE_ERROR';
    public const CODE_AUTH_TOKEN_IS_NOT_EXIST = 'ACQ.AUTH_TOKEN_IS_NOT_EXIST';
    public const CODE_SMILE_PAY_MERCHANT_NOT_MATCH = 'ACQ.SMILE_PAY_MERCHANT_NOT_MATCH';
    public const CODE_NOT_CERTIFIED_USER = 'ACQ.NOT_CERTIFIED_USER';
    public const CODE_SECONDARY_MERCHANT_ISV_PUNISH_INDIRECT = 'ACQ.SECONDARY_MERCHANT_ISV_PUNISH_INDIRECT';
    public const CODE_RESTRICTED_MERCHANT_INDUSTRY = 'ACQ.RESTRICTED_MERCHANT_INDUSTRY';
    public const CODE_PLATFORM_BUSINESS_ACQUIRE_MODE_MUST_MERCHANT_ID = 'ACQ.PLATFORM_BUSINESS_ACQUIRE_MODE_MUST_MERCHANT_ID';
    public const CODE_BEYOND_PER_RECEIPT_DAY_RESTRICTION = 'ACQ.BEYOND_PER_RECEIPT_DAY_RESTRICTION';
    public const CODE_TRADE_STATUS_ERROR = 'ACQ.TRADE_STATUS_ERROR';
    public const CODE_MERCHANT_PERM_RECEIPT_SUSPEND_LIMIT = 'ACQ.MERCHANT_PERM_RECEIPT_SUSPEND_LIMIT';
    public const CODE_MERCHANT_PERM_RECEIPT_SINGLE_LIMIT = 'ACQ.MERCHANT_PERM_RECEIPT_SINGLE_LIMIT';
    public const CODE_MERCHANT_PERM_RECEIPT_DAY_LIMIT = 'ACQ.MERCHANT_PERM_RECEIPT_DAY_LIMIT';
    public const CODE_USER_LOGONID_DUP = 'ACQ.USER_LOGONID_DUP';
    public const CODE_AUTH_ORDER_NOT_PAID = 'ACQ.AUTH_ORDER_NOT_PAID';
    public const CODE_AUTH_ORDER_HAS_FINISHED = 'ACQ.AUTH_ORDER_HAS_FINISHED';
    public const CODE_AUTH_ORDER_HAS_CLOSED = 'ACQ.AUTH_ORDER_HAS_CLOSED';
    public const CODE_ZM_AUTH_AMOUNT_EXCEED = 'ACQ.ZM_AUTH_AMOUNT_EXCEED';
    public const CODE_ZM_CREDIT_AUTH_FAIL = 'ACQ.ZM_CREDIT_AUTH_FAIL';
    public const CODE_ZM_AUTH_RULE_LIMIT = 'ACQ.ZM_AUTH_RULE_LIMIT';
    public const CODE_ROYALTY_ACCOUNT_NOT_EXIST = 'ACQ.ROYALTY_ACCOUNT_NOT_EXIST';
    public const CODE_RISK_MERCHANT_IP_NOT_EXIST = 'ACQ.RISK_MERCHANT_IP_NOT_EXIST';
    public const CODE_UN_SUPPORT_TRADE_SCENE = 'ACQ.UN_SUPPORT_TRADE_SCENE';
    public const CODE_OVER_MAX_DEDUCT_COUNT = 'ACQ.OVER_MAX_DEDUCT_COUNT';
    public const CODE_OVER_MAX_UNDER_WAY_DEDUCT_COUNT = 'ACQ.OVER_MAX_UNDER_WAY_DEDUCT_COUNT';
    public const CODE_OVER_DEDUCT_PERIOD = 'ACQ.OVER_DEDUCT_PERIOD';
    public const CODE_OVER_MERCHANT_DAILY_DEDUCT_AMOUNT = 'ACQ.OVER_MERCHANT_DAILY_DEDUCT_AMOUNT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCodeAllowableValues()
    {
        return [
            self::CODE_SYSTEM_ERROR,
            self::CODE_INVALID_PARAMETER,
            self::CODE_ACCESS_FORBIDDEN,
            self::CODE_EXIST_FORBIDDEN_WORD,
            self::CODE_PARTNER_ERROR,
            self::CODE_TOTAL_FEE_EXCEED,
            self::CODE_PAYMENT_AUTH_CODE_INVALID,
            self::CODE_CONTEXT_INCONSISTENT,
            self::CODE_TRADE_HAS_SUCCESS,
            self::CODE_TRADE_HAS_CLOSE,
            self::CODE_BUYER_BALANCE_NOT_ENOUGH,
            self::CODE_BUYER_BANKCARD_BALANCE_NOT_ENOUGH,
            self::CODE_ERROR_BALANCE_PAYMENT_DISABLE,
            self::CODE_BUYER_SELLER_EQUAL,
            self::CODE_TRADE_BUYER_NOT_MATCH,
            self::CODE_BUYER_ENABLE_STATUS_FORBID,
            self::CODE_PULL_MOBILE_CASHIER_FAIL,
            self::CODE_MOBILE_PAYMENT_SWITCH_OFF,
            self::CODE_PAYMENT_FAIL,
            self::CODE_BUYER_PAYMENT_AMOUNT_DAY_LIMIT_ERROR,
            self::CODE_BEYOND_PAY_RESTRICTION,
            self::CODE_BEYOND_PER_RECEIPT_RESTRICTION,
            self::CODE_BUYER_PAYMENT_AMOUNT_MONTH_LIMIT_ERROR,
            self::CODE_SELLER_BEEN_BLOCKED,
            self::CODE_ERROR_BUYER_CERTIFY_LEVEL_LIMIT,
            self::CODE_PAYMENT_REQUEST_HAS_RISK,
            self::CODE_NO_PAYMENT_INSTRUMENTS_AVAILABLE,
            self::CODE_USER_FACE_PAYMENT_SWITCH_OFF,
            self::CODE_INVALID_STORE_ID,
            self::CODE_SUB_MERCHANT_CREATE_FAIL,
            self::CODE_SUB_MERCHANT_TYPE_INVALID,
            self::CODE_AGREEMENT_NOT_EXIST,
            self::CODE_AGREEMENT_INVALID,
            self::CODE_AGREEMENT_STATUS_NOT_NORMAL,
            self::CODE_MERCHANT_AGREEMENT_NOT_EXIST,
            self::CODE_MERCHANT_AGREEMENT_INVALID,
            self::CODE_MERCHANT_STATUS_NOT_NORMAL,
            self::CODE_CARD_USER_NOT_MATCH,
            self::CODE_CARD_TYPE_ERROR,
            self::CODE_CERT_EXPIRED,
            self::CODE_AMOUNT_OR_CURRENCY_ERROR,
            self::CODE_CURRENCY_NOT_SUPPORT,
            self::CODE_MERCHANT_UNSUPPORT_ADVANCE,
            self::CODE_BUYER_UNSUPPORT_ADVANCE,
            self::CODE_ORDER_UNSUPPORT_ADVANCE,
            self::CODE_CYCLE_PAY_DATE_NOT_MATCH,
            self::CODE_CYCLE_PAY_SINGLE_FEE_EXCEED,
            self::CODE_CYCLE_PAY_TOTAL_FEE_EXCEED,
            self::CODE_CYCLE_PAY_TOTAL_TIMES_EXCEED,
            self::CODE_SECONDARY_MERCHANT_STATUS_ERROR,
            self::CODE_AUTH_NO_ERROR,
            self::CODE_BUYER_NOT_EXIST,
            self::CODE_PRODUCT_AMOUNT_LIMIT_ERROR,
            self::CODE_SECONDARY_MERCHANT_ALIPAY_ACCOUNT_INVALID,
            self::CODE_INVALID_RECEIVE_ACCOUNT,
            self::CODE_SELLER_NOT_EXIST,
            self::CODE_AUTH_AMOUNT_NOT_ENOUGH,
            self::CODE_AGREEMENT_ERROR,
            self::CODE_BEYOND_PER_RECEIPT_SINGLE_RESTRICTION,
            self::CODE_PAYER_UNMATCHED,
            self::CODE_PRE_AUTH_PROD_CODE_INCONSISTENT,
            self::CODE_SECONDARY_MERCHANT_ID_INVALID,
            self::CODE_NOW_TIME_AFTER_EXPIRE_TIME_ERROR,
            self::CODE_SECONDARY_MERCHANT_NOT_MATCH,
            self::CODE_REQUEST_AMOUNT_EXCEED,
            self::CODE_SUB_GOODS_SIZE_MAX_COUNT,
            self::CODE_NOT_SUPPORT_PAYMENT_INST,
            self::CODE_BUYER_NOT_MAINLAND_CERT,
            self::CODE_SECONDARY_MERCHANT_ID_BLANK,
            self::CODE_TRADE_SETTLE_ERROR,
            self::CODE_AUTH_TOKEN_IS_NOT_EXIST,
            self::CODE_SMILE_PAY_MERCHANT_NOT_MATCH,
            self::CODE_NOT_CERTIFIED_USER,
            self::CODE_SECONDARY_MERCHANT_ISV_PUNISH_INDIRECT,
            self::CODE_RESTRICTED_MERCHANT_INDUSTRY,
            self::CODE_PLATFORM_BUSINESS_ACQUIRE_MODE_MUST_MERCHANT_ID,
            self::CODE_BEYOND_PER_RECEIPT_DAY_RESTRICTION,
            self::CODE_TRADE_STATUS_ERROR,
            self::CODE_MERCHANT_PERM_RECEIPT_SUSPEND_LIMIT,
            self::CODE_MERCHANT_PERM_RECEIPT_SINGLE_LIMIT,
            self::CODE_MERCHANT_PERM_RECEIPT_DAY_LIMIT,
            self::CODE_USER_LOGONID_DUP,
            self::CODE_AUTH_ORDER_NOT_PAID,
            self::CODE_AUTH_ORDER_HAS_FINISHED,
            self::CODE_AUTH_ORDER_HAS_CLOSED,
            self::CODE_ZM_AUTH_AMOUNT_EXCEED,
            self::CODE_ZM_CREDIT_AUTH_FAIL,
            self::CODE_ZM_AUTH_RULE_LIMIT,
            self::CODE_ROYALTY_ACCOUNT_NOT_EXIST,
            self::CODE_RISK_MERCHANT_IP_NOT_EXIST,
            self::CODE_UN_SUPPORT_TRADE_SCENE,
            self::CODE_OVER_MAX_DEDUCT_COUNT,
            self::CODE_OVER_MAX_UNDER_WAY_DEDUCT_COUNT,
            self::CODE_OVER_DEDUCT_PERIOD,
            self::CODE_OVER_MERCHANT_DAILY_DEDUCT_AMOUNT,
        ];
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
        $this->container['code'] = $data['code'] ?? null;
        $this->container['links'] = $data['links'] ?? null;
        $this->container['message'] = $data['message'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        $allowedValues = $this->getCodeAllowableValues();
        if (!is_null($this->container['code']) && !in_array($this->container['code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'code', must be one of '%s'",
                $this->container['code'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code 错误码
     *
     * @return self
     */
    public function setCode($code)
    {
        $allowedValues = $this->getCodeAllowableValues();
        if (!in_array($code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'code', must be one of '%s'",
                    $code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets links
     *
     * @return string|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param string|null $links 解决方案链接
     *
     * @return self
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message 错误描述
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

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


