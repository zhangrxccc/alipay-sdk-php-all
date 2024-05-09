<?php
/**
 * AlipayFundTransUniTransferModel
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
 * AlipayFundTransUniTransferModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayFundTransUniTransferModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayFundTransUniTransferModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bizScene' => 'string',
        'businessParams' => 'string',
        'mutipleCurrencyDetail' => '\Alipay\OpenAPISDK\Model\MutipleCurrencyDetail',
        'orderTitle' => 'string',
        'originalOrderId' => 'string',
        'outBizNo' => 'string',
        'passbackParams' => 'string',
        'payeeInfo' => '\Alipay\OpenAPISDK\Model\Participant',
        'payerInfo' => '\Alipay\OpenAPISDK\Model\Participant',
        'productCode' => 'string',
        'remark' => 'string',
        'signData' => '\Alipay\OpenAPISDK\Model\SignData',
        'transAmount' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bizScene' => null,
        'businessParams' => null,
        'mutipleCurrencyDetail' => null,
        'orderTitle' => null,
        'originalOrderId' => null,
        'outBizNo' => null,
        'passbackParams' => null,
        'payeeInfo' => null,
        'payerInfo' => null,
        'productCode' => null,
        'remark' => null,
        'signData' => null,
        'transAmount' => null
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
        'bizScene' => 'biz_scene',
        'businessParams' => 'business_params',
        'mutipleCurrencyDetail' => 'mutiple_currency_detail',
        'orderTitle' => 'order_title',
        'originalOrderId' => 'original_order_id',
        'outBizNo' => 'out_biz_no',
        'passbackParams' => 'passback_params',
        'payeeInfo' => 'payee_info',
        'payerInfo' => 'payer_info',
        'productCode' => 'product_code',
        'remark' => 'remark',
        'signData' => 'sign_data',
        'transAmount' => 'trans_amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bizScene' => 'setBizScene',
        'businessParams' => 'setBusinessParams',
        'mutipleCurrencyDetail' => 'setMutipleCurrencyDetail',
        'orderTitle' => 'setOrderTitle',
        'originalOrderId' => 'setOriginalOrderId',
        'outBizNo' => 'setOutBizNo',
        'passbackParams' => 'setPassbackParams',
        'payeeInfo' => 'setPayeeInfo',
        'payerInfo' => 'setPayerInfo',
        'productCode' => 'setProductCode',
        'remark' => 'setRemark',
        'signData' => 'setSignData',
        'transAmount' => 'setTransAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bizScene' => 'getBizScene',
        'businessParams' => 'getBusinessParams',
        'mutipleCurrencyDetail' => 'getMutipleCurrencyDetail',
        'orderTitle' => 'getOrderTitle',
        'originalOrderId' => 'getOriginalOrderId',
        'outBizNo' => 'getOutBizNo',
        'passbackParams' => 'getPassbackParams',
        'payeeInfo' => 'getPayeeInfo',
        'payerInfo' => 'getPayerInfo',
        'productCode' => 'getProductCode',
        'remark' => 'getRemark',
        'signData' => 'getSignData',
        'transAmount' => 'getTransAmount'
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
        $this->container['bizScene'] = $data['bizScene'] ?? null;
        $this->container['businessParams'] = $data['businessParams'] ?? null;
        $this->container['mutipleCurrencyDetail'] = $data['mutipleCurrencyDetail'] ?? null;
        $this->container['orderTitle'] = $data['orderTitle'] ?? null;
        $this->container['originalOrderId'] = $data['originalOrderId'] ?? null;
        $this->container['outBizNo'] = $data['outBizNo'] ?? null;
        $this->container['passbackParams'] = $data['passbackParams'] ?? null;
        $this->container['payeeInfo'] = $data['payeeInfo'] ?? null;
        $this->container['payerInfo'] = $data['payerInfo'] ?? null;
        $this->container['productCode'] = $data['productCode'] ?? null;
        $this->container['remark'] = $data['remark'] ?? null;
        $this->container['signData'] = $data['signData'] ?? null;
        $this->container['transAmount'] = $data['transAmount'] ?? null;
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
     * Gets bizScene
     *
     * @return string|null
     */
    public function getBizScene()
    {
        return $this->container['bizScene'];
    }

    /**
     * Sets bizScene
     *
     * @param string|null $bizScene 描述特定的业务场景，可传的参数如下： DIRECT_TRANSFER：单笔无密转账到支付宝，B2C现金红包; PERSONAL_COLLECTION：C2C现金红包-领红包
     *
     * @return self
     */
    public function setBizScene($bizScene)
    {
        $this->container['bizScene'] = $bizScene;

        return $this;
    }

    /**
     * Gets businessParams
     *
     * @return string|null
     */
    public function getBusinessParams()
    {
        return $this->container['businessParams'];
    }

    /**
     * Sets businessParams
     *
     * @param string|null $businessParams 转账业务请求的扩展参数，支持传入的扩展参数如下： sub_biz_scene 子业务场景，红包业务必传，取值REDPACKET，C2C现金红包、B2C现金红包均需传入
     *
     * @return self
     */
    public function setBusinessParams($businessParams)
    {
        $this->container['businessParams'] = $businessParams;

        return $this;
    }

    /**
     * Gets mutipleCurrencyDetail
     *
     * @return \Alipay\OpenAPISDK\Model\MutipleCurrencyDetail|null
     */
    public function getMutipleCurrencyDetail()
    {
        return $this->container['mutipleCurrencyDetail'];
    }

    /**
     * Sets mutipleCurrencyDetail
     *
     * @param \Alipay\OpenAPISDK\Model\MutipleCurrencyDetail|null $mutipleCurrencyDetail mutipleCurrencyDetail
     *
     * @return self
     */
    public function setMutipleCurrencyDetail($mutipleCurrencyDetail)
    {
        $this->container['mutipleCurrencyDetail'] = $mutipleCurrencyDetail;

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
     * @param string|null $orderTitle 转账业务的标题，用于在支付宝用户的账单里显示
     *
     * @return self
     */
    public function setOrderTitle($orderTitle)
    {
        $this->container['orderTitle'] = $orderTitle;

        return $this;
    }

    /**
     * Gets originalOrderId
     *
     * @return string|null
     */
    public function getOriginalOrderId()
    {
        return $this->container['originalOrderId'];
    }

    /**
     * Sets originalOrderId
     *
     * @param string|null $originalOrderId 原支付宝业务单号。
     *
     * @return self
     */
    public function setOriginalOrderId($originalOrderId)
    {
        $this->container['originalOrderId'] = $originalOrderId;

        return $this;
    }

    /**
     * Gets outBizNo
     *
     * @return string|null
     */
    public function getOutBizNo()
    {
        return $this->container['outBizNo'];
    }

    /**
     * Sets outBizNo
     *
     * @param string|null $outBizNo 商家侧唯一订单号，由商家自定义。对于不同转账请求，商家需保证该订单号在自身系统唯一。
     *
     * @return self
     */
    public function setOutBizNo($outBizNo)
    {
        $this->container['outBizNo'] = $outBizNo;

        return $this;
    }

    /**
     * Gets passbackParams
     *
     * @return string|null
     */
    public function getPassbackParams()
    {
        return $this->container['passbackParams'];
    }

    /**
     * Sets passbackParams
     *
     * @param string|null $passbackParams 公用回传参数，如果请求时传递了该参数，则异步通知商户时会回传该参数。
     *
     * @return self
     */
    public function setPassbackParams($passbackParams)
    {
        $this->container['passbackParams'] = $passbackParams;

        return $this;
    }

    /**
     * Gets payeeInfo
     *
     * @return \Alipay\OpenAPISDK\Model\Participant|null
     */
    public function getPayeeInfo()
    {
        return $this->container['payeeInfo'];
    }

    /**
     * Sets payeeInfo
     *
     * @param \Alipay\OpenAPISDK\Model\Participant|null $payeeInfo payeeInfo
     *
     * @return self
     */
    public function setPayeeInfo($payeeInfo)
    {
        $this->container['payeeInfo'] = $payeeInfo;

        return $this;
    }

    /**
     * Gets payerInfo
     *
     * @return \Alipay\OpenAPISDK\Model\Participant|null
     */
    public function getPayerInfo()
    {
        return $this->container['payerInfo'];
    }

    /**
     * Sets payerInfo
     *
     * @param \Alipay\OpenAPISDK\Model\Participant|null $payerInfo payerInfo
     *
     * @return self
     */
    public function setPayerInfo($payerInfo)
    {
        $this->container['payerInfo'] = $payerInfo;

        return $this;
    }

    /**
     * Gets productCode
     *
     * @return string|null
     */
    public function getProductCode()
    {
        return $this->container['productCode'];
    }

    /**
     * Sets productCode
     *
     * @param string|null $productCode 业务产品码， 单笔无密转账到支付宝账户固定为: TRANS_ACCOUNT_NO_PWD； 收发现金红包固定为: STD_RED_PACKET；
     *
     * @return self
     */
    public function setProductCode($productCode)
    {
        $this->container['productCode'] = $productCode;

        return $this;
    }

    /**
     * Gets remark
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
     * Sets remark
     *
     * @param string|null $remark 业务备注
     *
     * @return self
     */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;

        return $this;
    }

    /**
     * Gets signData
     *
     * @return \Alipay\OpenAPISDK\Model\SignData|null
     */
    public function getSignData()
    {
        return $this->container['signData'];
    }

    /**
     * Sets signData
     *
     * @param \Alipay\OpenAPISDK\Model\SignData|null $signData signData
     *
     * @return self
     */
    public function setSignData($signData)
    {
        $this->container['signData'] = $signData;

        return $this;
    }

    /**
     * Gets transAmount
     *
     * @return string|null
     */
    public function getTransAmount()
    {
        return $this->container['transAmount'];
    }

    /**
     * Sets transAmount
     *
     * @param string|null $transAmount 订单总金额，单位为元，精确到小数点后两位，STD_RED_PACKET产品取值范围[0.01,100000000]； TRANS_ACCOUNT_NO_PWD产品取值范围[0.1,100000000]
     *
     * @return self
     */
    public function setTransAmount($transAmount)
    {
        $this->container['transAmount'] = $transAmount;

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


