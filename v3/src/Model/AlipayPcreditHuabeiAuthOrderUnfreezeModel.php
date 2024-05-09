<?php
/**
 * AlipayPcreditHuabeiAuthOrderUnfreezeModel
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
 * AlipayPcreditHuabeiAuthOrderUnfreezeModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayPcreditHuabeiAuthOrderUnfreezeModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayPcreditHuabeiAuthOrderUnfreezeModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'agreementNo' => 'string',
        'alipayUserId' => 'string',
        'needTerminated' => 'string',
        'openId' => 'string',
        'orderTitle' => 'string',
        'outRequestNo' => 'string',
        'sellerId' => 'string',
        'unfreezeAmount' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'agreementNo' => null,
        'alipayUserId' => null,
        'needTerminated' => null,
        'openId' => null,
        'orderTitle' => null,
        'outRequestNo' => null,
        'sellerId' => null,
        'unfreezeAmount' => null
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
        'agreementNo' => 'agreement_no',
        'alipayUserId' => 'alipay_user_id',
        'needTerminated' => 'need_terminated',
        'openId' => 'open_id',
        'orderTitle' => 'order_title',
        'outRequestNo' => 'out_request_no',
        'sellerId' => 'seller_id',
        'unfreezeAmount' => 'unfreeze_amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agreementNo' => 'setAgreementNo',
        'alipayUserId' => 'setAlipayUserId',
        'needTerminated' => 'setNeedTerminated',
        'openId' => 'setOpenId',
        'orderTitle' => 'setOrderTitle',
        'outRequestNo' => 'setOutRequestNo',
        'sellerId' => 'setSellerId',
        'unfreezeAmount' => 'setUnfreezeAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agreementNo' => 'getAgreementNo',
        'alipayUserId' => 'getAlipayUserId',
        'needTerminated' => 'getNeedTerminated',
        'openId' => 'getOpenId',
        'orderTitle' => 'getOrderTitle',
        'outRequestNo' => 'getOutRequestNo',
        'sellerId' => 'getSellerId',
        'unfreezeAmount' => 'getUnfreezeAmount'
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
        $this->container['agreementNo'] = $data['agreementNo'] ?? null;
        $this->container['alipayUserId'] = $data['alipayUserId'] ?? null;
        $this->container['needTerminated'] = $data['needTerminated'] ?? null;
        $this->container['openId'] = $data['openId'] ?? null;
        $this->container['orderTitle'] = $data['orderTitle'] ?? null;
        $this->container['outRequestNo'] = $data['outRequestNo'] ?? null;
        $this->container['sellerId'] = $data['sellerId'] ?? null;
        $this->container['unfreezeAmount'] = $data['unfreezeAmount'] ?? null;
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
     * @param string|null $agreementNo 支付宝系统中用以唯一标识用户签约记录的编号，即花呗先享协议号
     *
     * @return self
     */
    public function setAgreementNo($agreementNo)
    {
        $this->container['agreementNo'] = $agreementNo;

        return $this;
    }

    /**
     * Gets alipayUserId
     *
     * @return string|null
     */
    public function getAlipayUserId()
    {
        return $this->container['alipayUserId'];
    }

    /**
     * Sets alipayUserId
     *
     * @param string|null $alipayUserId 买家在支付宝的用户id
     *
     * @return self
     */
    public function setAlipayUserId($alipayUserId)
    {
        $this->container['alipayUserId'] = $alipayUserId;

        return $this;
    }

    /**
     * Gets needTerminated
     *
     * @return string|null
     */
    public function getNeedTerminated()
    {
        return $this->container['needTerminated'];
    }

    /**
     * Sets needTerminated
     *
     * @param string|null $needTerminated true表示需要解约。false或者不填写表示仅解冻。
     *
     * @return self
     */
    public function setNeedTerminated($needTerminated)
    {
        $this->container['needTerminated'] = $needTerminated;

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
     * @param string|null $openId 买家在支付宝的用户id
     *
     * @return self
     */
    public function setOpenId($openId)
    {
        $this->container['openId'] = $openId;

        return $this;
    }

    /**
     * Gets orderTitle
     *
     * @return string|null
     */
    public function getOrderTitle()
    {
        return $this->container['orderTitle'];
    }

    /**
     * Sets orderTitle
     *
     * @param string|null $orderTitle 商户业务订单的简单描述，如商品名称等，长度不超过100个字母或50个汉字
     *
     * @return self
     */
    public function setOrderTitle($orderTitle)
    {
        $this->container['orderTitle'] = $orderTitle;

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
     * @param string|null $outRequestNo 商户本次操作的请求流水号，用于标识请求流水的唯一性，不能包含除中文、英文、数字以外的字符，需要保证在商户端不重复。
     *
     * @return self
     */
    public function setOutRequestNo($outRequestNo)
    {
        $this->container['outRequestNo'] = $outRequestNo;

        return $this;
    }

    /**
     * Gets sellerId
     *
     * @return string|null
     */
    public function getSellerId()
    {
        return $this->container['sellerId'];
    }

    /**
     * Sets sellerId
     *
     * @param string|null $sellerId 商户的支付宝用户id。如果该值为空，则默认为商户签约账号对应的支付宝用户ID。
     *
     * @return self
     */
    public function setSellerId($sellerId)
    {
        $this->container['sellerId'] = $sellerId;

        return $this;
    }

    /**
     * Gets unfreezeAmount
     *
     * @return string|null
     */
    public function getUnfreezeAmount()
    {
        return $this->container['unfreezeAmount'];
    }

    /**
     * Sets unfreezeAmount
     *
     * @param string|null $unfreezeAmount 需要解冻的金额，单位为：元（人民币），精确到小数点后两位
     *
     * @return self
     */
    public function setUnfreezeAmount($unfreezeAmount)
    {
        $this->container['unfreezeAmount'] = $unfreezeAmount;

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


