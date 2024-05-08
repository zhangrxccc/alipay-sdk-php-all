<?php
/**
 * AlipayFundTransCommonQueryResponseModel
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
 * AlipayFundTransCommonQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayFundTransCommonQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayFundTransCommonQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'arrivalTimeEnd' => 'string',
        'deductBillInfo' => 'string',
        'errorCode' => 'string',
        'failReason' => 'string',
        'orderFee' => 'string',
        'orderId' => 'string',
        'outBizNo' => 'string',
        'passbackParams' => 'string',
        'payDate' => 'string',
        'payFundOrderId' => 'string',
        'settleSerialNo' => 'string',
        'status' => 'string',
        'subOrderErrorCode' => 'string',
        'subOrderFailReason' => 'string',
        'subOrderStatus' => 'string',
        'transAmount' => 'string',
        'transferBillInfo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'arrivalTimeEnd' => null,
        'deductBillInfo' => null,
        'errorCode' => null,
        'failReason' => null,
        'orderFee' => null,
        'orderId' => null,
        'outBizNo' => null,
        'passbackParams' => null,
        'payDate' => null,
        'payFundOrderId' => null,
        'settleSerialNo' => null,
        'status' => null,
        'subOrderErrorCode' => null,
        'subOrderFailReason' => null,
        'subOrderStatus' => null,
        'transAmount' => null,
        'transferBillInfo' => null
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
        'arrivalTimeEnd' => 'arrival_time_end',
        'deductBillInfo' => 'deduct_bill_info',
        'errorCode' => 'error_code',
        'failReason' => 'fail_reason',
        'orderFee' => 'order_fee',
        'orderId' => 'order_id',
        'outBizNo' => 'out_biz_no',
        'passbackParams' => 'passback_params',
        'payDate' => 'pay_date',
        'payFundOrderId' => 'pay_fund_order_id',
        'settleSerialNo' => 'settle_serial_no',
        'status' => 'status',
        'subOrderErrorCode' => 'sub_order_error_code',
        'subOrderFailReason' => 'sub_order_fail_reason',
        'subOrderStatus' => 'sub_order_status',
        'transAmount' => 'trans_amount',
        'transferBillInfo' => 'transfer_bill_info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'arrivalTimeEnd' => 'setArrivalTimeEnd',
        'deductBillInfo' => 'setDeductBillInfo',
        'errorCode' => 'setErrorCode',
        'failReason' => 'setFailReason',
        'orderFee' => 'setOrderFee',
        'orderId' => 'setOrderId',
        'outBizNo' => 'setOutBizNo',
        'passbackParams' => 'setPassbackParams',
        'payDate' => 'setPayDate',
        'payFundOrderId' => 'setPayFundOrderId',
        'settleSerialNo' => 'setSettleSerialNo',
        'status' => 'setStatus',
        'subOrderErrorCode' => 'setSubOrderErrorCode',
        'subOrderFailReason' => 'setSubOrderFailReason',
        'subOrderStatus' => 'setSubOrderStatus',
        'transAmount' => 'setTransAmount',
        'transferBillInfo' => 'setTransferBillInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'arrivalTimeEnd' => 'getArrivalTimeEnd',
        'deductBillInfo' => 'getDeductBillInfo',
        'errorCode' => 'getErrorCode',
        'failReason' => 'getFailReason',
        'orderFee' => 'getOrderFee',
        'orderId' => 'getOrderId',
        'outBizNo' => 'getOutBizNo',
        'passbackParams' => 'getPassbackParams',
        'payDate' => 'getPayDate',
        'payFundOrderId' => 'getPayFundOrderId',
        'settleSerialNo' => 'getSettleSerialNo',
        'status' => 'getStatus',
        'subOrderErrorCode' => 'getSubOrderErrorCode',
        'subOrderFailReason' => 'getSubOrderFailReason',
        'subOrderStatus' => 'getSubOrderStatus',
        'transAmount' => 'getTransAmount',
        'transferBillInfo' => 'getTransferBillInfo'
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
        $this->container['arrivalTimeEnd'] = $data['arrivalTimeEnd'] ?? null;
        $this->container['deductBillInfo'] = $data['deductBillInfo'] ?? null;
        $this->container['errorCode'] = $data['errorCode'] ?? null;
        $this->container['failReason'] = $data['failReason'] ?? null;
        $this->container['orderFee'] = $data['orderFee'] ?? null;
        $this->container['orderId'] = $data['orderId'] ?? null;
        $this->container['outBizNo'] = $data['outBizNo'] ?? null;
        $this->container['passbackParams'] = $data['passbackParams'] ?? null;
        $this->container['payDate'] = $data['payDate'] ?? null;
        $this->container['payFundOrderId'] = $data['payFundOrderId'] ?? null;
        $this->container['settleSerialNo'] = $data['settleSerialNo'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['subOrderErrorCode'] = $data['subOrderErrorCode'] ?? null;
        $this->container['subOrderFailReason'] = $data['subOrderFailReason'] ?? null;
        $this->container['subOrderStatus'] = $data['subOrderStatus'] ?? null;
        $this->container['transAmount'] = $data['transAmount'] ?? null;
        $this->container['transferBillInfo'] = $data['transferBillInfo'] ?? null;
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
     * Gets arrivalTimeEnd
     *
     * @return string|null
     */
    public function getArrivalTimeEnd()
    {
        return $this->container['arrivalTimeEnd'];
    }

    /**
     * Sets arrivalTimeEnd
     *
     * @param string|null $arrivalTimeEnd 预计到账时间，转账到银行卡专用，格式为yyyy-MM-dd HH:mm:ss，转账受理失败不返回。  注意：  此参数为预计时间，可能与实际到账时间有较大误差，不能作为实际到账时间使用，仅供参考用途。
     *
     * @return self
     */
    public function setArrivalTimeEnd($arrivalTimeEnd)
    {
        $this->container['arrivalTimeEnd'] = $arrivalTimeEnd;

        return $this;
    }

    /**
     * Gets deductBillInfo
     *
     * @return string|null
     */
    public function getDeductBillInfo()
    {
        return $this->container['deductBillInfo'];
    }

    /**
     * Sets deductBillInfo
     *
     * @param string|null $deductBillInfo 商户查询代扣订单信息时返回其在代扣请求中传入的账单属性
     *
     * @return self
     */
    public function setDeductBillInfo($deductBillInfo)
    {
        $this->container['deductBillInfo'] = $deductBillInfo;

        return $this;
    }

    /**
     * Gets errorCode
     *
     * @return string|null
     */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
     * Sets errorCode
     *
     * @param string|null $errorCode 查询到的订单状态为FAIL失败或REFUND退票时，返回错误代码
     *
     * @return self
     */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;

        return $this;
    }

    /**
     * Gets failReason
     *
     * @return string|null
     */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
     * Sets failReason
     *
     * @param string|null $failReason 查询到的订单状态为FAIL失败或REFUND退票时，返回具体的原因。
     *
     * @return self
     */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;

        return $this;
    }

    /**
     * Gets orderFee
     *
     * @return string|null
     */
    public function getOrderFee()
    {
        return $this->container['orderFee'];
    }

    /**
     * Sets orderFee
     *
     * @param string|null $orderFee 预计收费金额（元），转账到银行卡专用，数字格式，精确到小数点后2位，转账失败或转账受理失败不返回。
     *
     * @return self
     */
    public function setOrderFee($orderFee)
    {
        $this->container['orderFee'] = $orderFee;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string|null $orderId 支付宝转账单据号，查询失败不返回。
     *
     * @return self
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

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
     * @param string|null $outBizNo 商户订单号
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
     * @param string|null $passbackParams 商户回传参数
     *
     * @return self
     */
    public function setPassbackParams($passbackParams)
    {
        $this->container['passbackParams'] = $passbackParams;

        return $this;
    }

    /**
     * Gets payDate
     *
     * @return string|null
     */
    public function getPayDate()
    {
        return $this->container['payDate'];
    }

    /**
     * Sets payDate
     *
     * @param string|null $payDate 支付时间，格式为yyyy-MM-dd HH:mm:ss，转账失败不返回。
     *
     * @return self
     */
    public function setPayDate($payDate)
    {
        $this->container['payDate'] = $payDate;

        return $this;
    }

    /**
     * Gets payFundOrderId
     *
     * @return string|null
     */
    public function getPayFundOrderId()
    {
        return $this->container['payFundOrderId'];
    }

    /**
     * Sets payFundOrderId
     *
     * @param string|null $payFundOrderId 支付宝支付资金流水号，转账失败不返回。
     *
     * @return self
     */
    public function setPayFundOrderId($payFundOrderId)
    {
        $this->container['payFundOrderId'] = $payFundOrderId;

        return $this;
    }

    /**
     * Gets settleSerialNo
     *
     * @return string|null
     */
    public function getSettleSerialNo()
    {
        return $this->container['settleSerialNo'];
    }

    /**
     * Sets settleSerialNo
     *
     * @param string|null $settleSerialNo 金融机构发起签约类、支付类、差错类业务时，应为每笔业务分配唯一的交易流水号。31位交易流水号组成规则为：“8位日期”+“16位序列号”+“1位预留位”+“6位控制位”，其中： a）“8位日期”为系统当前日期，ISODate格式：“YYYYMMDD” b）“16位序列号”由金融机构生成，金融机构应确保该值在网联当日唯一 c）“1位预留位”由平台分配 d）“6位控制位”由金融机构通过平台获取 例如：2023052993044491260542090100400
     *
     * @return self
     */
    public function setSettleSerialNo($settleSerialNo)
    {
        $this->container['settleSerialNo'] = $settleSerialNo;

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
     * @param string|null $status 转账单据状态。可能出现的状态如下： SUCCESS：转账成功； WAIT_PAY：等待支付； CLOSED：订单超时关闭； FAIL：失败（适用于\"单笔转账到银行卡\"）； DEALING：处理中（适用于\"单笔转账到银行卡\"）； REFUND：退票（适用于\"单笔转账到银行卡\"）； alipay.fund.trans.app.pay涉及的状态： WAIT_PAY、SUCCESS、CLOSED alipay.fund.trans.refund涉及的状态：SUCCESS alipay.fund.trans.uni.transfer涉及的状态：SUCCESS、FAIL、DEALING、REFUND
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets subOrderErrorCode
     *
     * @return string|null
     */
    public function getSubOrderErrorCode()
    {
        return $this->container['subOrderErrorCode'];
    }

    /**
     * Sets subOrderErrorCode
     *
     * @param string|null $subOrderErrorCode 特殊场景提供，当子单出现异常导致主单失败或者退款时，会提供此字段，用于透出子单具体的错误场景
     *
     * @return self
     */
    public function setSubOrderErrorCode($subOrderErrorCode)
    {
        $this->container['subOrderErrorCode'] = $subOrderErrorCode;

        return $this;
    }

    /**
     * Gets subOrderFailReason
     *
     * @return string|null
     */
    public function getSubOrderFailReason()
    {
        return $this->container['subOrderFailReason'];
    }

    /**
     * Sets subOrderFailReason
     *
     * @param string|null $subOrderFailReason 特殊场景提供，当子单出现异常导致主单失败或者退款时，会提供此字段，用于透出子单具体的错误场景
     *
     * @return self
     */
    public function setSubOrderFailReason($subOrderFailReason)
    {
        $this->container['subOrderFailReason'] = $subOrderFailReason;

        return $this;
    }

    /**
     * Gets subOrderStatus
     *
     * @return string|null
     */
    public function getSubOrderStatus()
    {
        return $this->container['subOrderStatus'];
    }

    /**
     * Sets subOrderStatus
     *
     * @param string|null $subOrderStatus 退款子单失败状态
     *
     * @return self
     */
    public function setSubOrderStatus($subOrderStatus)
    {
        $this->container['subOrderStatus'] = $subOrderStatus;

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
     * @param string|null $transAmount 付款金额，收银台场景下付款成功后的支付金额，订单状态为SUCCESS才返回，其他状态不返回。付款金额，单位为元，精确到小数点后两位。
     *
     * @return self
     */
    public function setTransAmount($transAmount)
    {
        $this->container['transAmount'] = $transAmount;

        return $this;
    }

    /**
     * Gets transferBillInfo
     *
     * @return string|null
     */
    public function getTransferBillInfo()
    {
        return $this->container['transferBillInfo'];
    }

    /**
     * Sets transferBillInfo
     *
     * @param string|null $transferBillInfo 商户在查询代发订单信息时返回其在代发请求中传入的账单属性。
     *
     * @return self
     */
    public function setTransferBillInfo($transferBillInfo)
    {
        $this->container['transferBillInfo'] = $transferBillInfo;

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


