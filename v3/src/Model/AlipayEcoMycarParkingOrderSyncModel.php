<?php
/**
 * AlipayEcoMycarParkingOrderSyncModel
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
 * The version of the OpenAPI document: 2023-06-06
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
 * AlipayEcoMycarParkingOrderSyncModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayEcoMycarParkingOrderSyncModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayEcoMycarParkingOrderSyncModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'agentPid' => 'string',
        'carNumber' => 'string',
        'cardNumber' => 'string',
        'inDuration' => 'string',
        'inTime' => 'string',
        'openId' => 'string',
        'orderNo' => 'string',
        'orderStatus' => 'string',
        'orderTime' => 'string',
        'outOrderNo' => 'string',
        'outParkingId' => 'string',
        'outTime' => 'string',
        'parkingId' => 'string',
        'parkingName' => 'string',
        'parkingRecordId' => 'string',
        'payMoney' => 'string',
        'payScene' => 'string',
        'payTime' => 'string',
        'payType' => 'string',
        'smid' => 'string',
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
        'agentPid' => null,
        'carNumber' => null,
        'cardNumber' => null,
        'inDuration' => null,
        'inTime' => null,
        'openId' => null,
        'orderNo' => null,
        'orderStatus' => null,
        'orderTime' => null,
        'outOrderNo' => null,
        'outParkingId' => null,
        'outTime' => null,
        'parkingId' => null,
        'parkingName' => null,
        'parkingRecordId' => null,
        'payMoney' => null,
        'payScene' => null,
        'payTime' => null,
        'payType' => null,
        'smid' => null,
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
        'agentPid' => 'agent_pid',
        'carNumber' => 'car_number',
        'cardNumber' => 'card_number',
        'inDuration' => 'in_duration',
        'inTime' => 'in_time',
        'openId' => 'open_id',
        'orderNo' => 'order_no',
        'orderStatus' => 'order_status',
        'orderTime' => 'order_time',
        'outOrderNo' => 'out_order_no',
        'outParkingId' => 'out_parking_id',
        'outTime' => 'out_time',
        'parkingId' => 'parking_id',
        'parkingName' => 'parking_name',
        'parkingRecordId' => 'parking_record_id',
        'payMoney' => 'pay_money',
        'payScene' => 'pay_scene',
        'payTime' => 'pay_time',
        'payType' => 'pay_type',
        'smid' => 'smid',
        'userId' => 'user_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agentPid' => 'setAgentPid',
        'carNumber' => 'setCarNumber',
        'cardNumber' => 'setCardNumber',
        'inDuration' => 'setInDuration',
        'inTime' => 'setInTime',
        'openId' => 'setOpenId',
        'orderNo' => 'setOrderNo',
        'orderStatus' => 'setOrderStatus',
        'orderTime' => 'setOrderTime',
        'outOrderNo' => 'setOutOrderNo',
        'outParkingId' => 'setOutParkingId',
        'outTime' => 'setOutTime',
        'parkingId' => 'setParkingId',
        'parkingName' => 'setParkingName',
        'parkingRecordId' => 'setParkingRecordId',
        'payMoney' => 'setPayMoney',
        'payScene' => 'setPayScene',
        'payTime' => 'setPayTime',
        'payType' => 'setPayType',
        'smid' => 'setSmid',
        'userId' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agentPid' => 'getAgentPid',
        'carNumber' => 'getCarNumber',
        'cardNumber' => 'getCardNumber',
        'inDuration' => 'getInDuration',
        'inTime' => 'getInTime',
        'openId' => 'getOpenId',
        'orderNo' => 'getOrderNo',
        'orderStatus' => 'getOrderStatus',
        'orderTime' => 'getOrderTime',
        'outOrderNo' => 'getOutOrderNo',
        'outParkingId' => 'getOutParkingId',
        'outTime' => 'getOutTime',
        'parkingId' => 'getParkingId',
        'parkingName' => 'getParkingName',
        'parkingRecordId' => 'getParkingRecordId',
        'payMoney' => 'getPayMoney',
        'payScene' => 'getPayScene',
        'payTime' => 'getPayTime',
        'payType' => 'getPayType',
        'smid' => 'getSmid',
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
        $this->container['agentPid'] = $data['agentPid'] ?? null;
        $this->container['carNumber'] = $data['carNumber'] ?? null;
        $this->container['cardNumber'] = $data['cardNumber'] ?? null;
        $this->container['inDuration'] = $data['inDuration'] ?? null;
        $this->container['inTime'] = $data['inTime'] ?? null;
        $this->container['openId'] = $data['openId'] ?? null;
        $this->container['orderNo'] = $data['orderNo'] ?? null;
        $this->container['orderStatus'] = $data['orderStatus'] ?? null;
        $this->container['orderTime'] = $data['orderTime'] ?? null;
        $this->container['outOrderNo'] = $data['outOrderNo'] ?? null;
        $this->container['outParkingId'] = $data['outParkingId'] ?? null;
        $this->container['outTime'] = $data['outTime'] ?? null;
        $this->container['parkingId'] = $data['parkingId'] ?? null;
        $this->container['parkingName'] = $data['parkingName'] ?? null;
        $this->container['parkingRecordId'] = $data['parkingRecordId'] ?? null;
        $this->container['payMoney'] = $data['payMoney'] ?? null;
        $this->container['payScene'] = $data['payScene'] ?? null;
        $this->container['payTime'] = $data['payTime'] ?? null;
        $this->container['payType'] = $data['payType'] ?? null;
        $this->container['smid'] = $data['smid'] ?? null;
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
     * Gets agentPid
     *
     * @return string|null
     */
    public function getAgentPid()
    {
        return $this->container['agentPid'];
    }

    /**
     * Sets agentPid
     *
     * @param string|null $agentPid 该笔停车交易需要返佣的对象实体PID，可能是商户，可能是ISV；只做下沉，用于离线表层面对账。
     *
     * @return self
     */
    public function setAgentPid($agentPid)
    {
        $this->container['agentPid'] = $agentPid;

        return $this;
    }

    /**
     * Gets carNumber
     *
     * @return string|null
     */
    public function getCarNumber()
    {
        return $this->container['carNumber'];
    }

    /**
     * Sets carNumber
     *
     * @param string|null $carNumber 车牌
     *
     * @return self
     */
    public function setCarNumber($carNumber)
    {
        $this->container['carNumber'] = $carNumber;

        return $this;
    }

    /**
     * Gets cardNumber
     *
     * @return string|null
     */
    public function getCardNumber()
    {
        return $this->container['cardNumber'];
    }

    /**
     * Sets cardNumber
     *
     * @param string|null $cardNumber 如果是停车卡缴费，则填入停车卡卡号，否则为'*'
     *
     * @return self
     */
    public function setCardNumber($cardNumber)
    {
        $this->container['cardNumber'] = $cardNumber;

        return $this;
    }

    /**
     * Gets inDuration
     *
     * @return string|null
     */
    public function getInDuration()
    {
        return $this->container['inDuration'];
    }

    /**
     * Sets inDuration
     *
     * @param string|null $inDuration 停车时长（以分为单位）
     *
     * @return self
     */
    public function setInDuration($inDuration)
    {
        $this->container['inDuration'] = $inDuration;

        return $this;
    }

    /**
     * Gets inTime
     *
     * @return string|null
     */
    public function getInTime()
    {
        return $this->container['inTime'];
    }

    /**
     * Sets inTime
     *
     * @param string|null $inTime 入场时间，格式\"YYYY-MM-DD HH:mm:ss\"，24小时制
     *
     * @return self
     */
    public function setInTime($inTime)
    {
        $this->container['inTime'] = $inTime;

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
     * @param string|null $openId 应用用户ID，唯一标识
     *
     * @return self
     */
    public function setOpenId($openId)
    {
        $this->container['openId'] = $openId;

        return $this;
    }

    /**
     * Gets orderNo
     *
     * @return string|null
     */
    public function getOrderNo()
    {
        return $this->container['orderNo'];
    }

    /**
     * Sets orderNo
     *
     * @param string|null $orderNo 支付宝支付流水，系统唯一
     *
     * @return self
     */
    public function setOrderNo($orderNo)
    {
        $this->container['orderNo'] = $orderNo;

        return $this;
    }

    /**
     * Gets orderStatus
     *
     * @return string|null
     */
    public function getOrderStatus()
    {
        return $this->container['orderStatus'];
    }

    /**
     * Sets orderStatus
     *
     * @param string|null $orderStatus 设备商订单状态，枚举支持： * 0：成功。 * 1：失败。
     *
     * @return self
     */
    public function setOrderStatus($orderStatus)
    {
        $this->container['orderStatus'] = $orderStatus;

        return $this;
    }

    /**
     * Gets orderTime
     *
     * @return string|null
     */
    public function getOrderTime()
    {
        return $this->container['orderTime'];
    }

    /**
     * Sets orderTime
     *
     * @param string|null $orderTime 订单创建时间，格式\"YYYY-MM-DD HH:mm:ss\"，24小时制
     *
     * @return self
     */
    public function setOrderTime($orderTime)
    {
        $this->container['orderTime'] = $orderTime;

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
     * @param string|null $outOrderNo 设备商订单号，由ISV系统生成
     *
     * @return self
     */
    public function setOutOrderNo($outOrderNo)
    {
        $this->container['outOrderNo'] = $outOrderNo;

        return $this;
    }

    /**
     * Gets outParkingId
     *
     * @return string|null
     */
    public function getOutParkingId()
    {
        return $this->container['outParkingId'];
    }

    /**
     * Sets outParkingId
     *
     * @param string|null $outParkingId ISV停车场ID，由ISV定义的停车场标识，同一个isv或商户范围内唯一。需与 <a href=\"https://opendocs.alipay.com/apis/api_19/alipay.eco.mycar.parking.parkinglotinfo.create\">alipay.eco.mycar.parking.parkinglotinfo.create</a>(录入停车场信息)接口传入值一致。
     *
     * @return self
     */
    public function setOutParkingId($outParkingId)
    {
        $this->container['outParkingId'] = $outParkingId;

        return $this;
    }

    /**
     * Gets outTime
     *
     * @return string|null
     */
    public function getOutTime()
    {
        return $this->container['outTime'];
    }

    /**
     * Sets outTime
     *
     * @param string|null $outTime 出场时间，格式\"YYYY-MM-DD HH:mm:ss\"，24小时制
     *
     * @return self
     */
    public function setOutTime($outTime)
    {
        $this->container['outTime'] = $outTime;

        return $this;
    }

    /**
     * Gets parkingId
     *
     * @return string|null
     */
    public function getParkingId()
    {
        return $this->container['parkingId'];
    }

    /**
     * Sets parkingId
     *
     * @param string|null $parkingId 支付宝停车平台ID，由支付宝定义的该停车场标识，同一个isv或商户范围内唯一。通过 <a href=\"https://opendocs.alipay.com/apis/api_19/alipay.eco.mycar.parking.parkinglotinfo.create\">alipay.eco.mycar.parking.parkinglotinfo.create</a>(录入停车场信息)接口获取。
     *
     * @return self
     */
    public function setParkingId($parkingId)
    {
        $this->container['parkingId'] = $parkingId;

        return $this;
    }

    /**
     * Gets parkingName
     *
     * @return string|null
     */
    public function getParkingName()
    {
        return $this->container['parkingName'];
    }

    /**
     * Sets parkingName
     *
     * @param string|null $parkingName 停车场名称，需与<a href=\"https://opendocs.alipay.com/apis/api_19/alipay.eco.mycar.parking.parkinglotinfo.create\">alipay.eco.mycar.parking.parkinglotinfo.create</a>(录入停车场信息)接口传入值一致。
     *
     * @return self
     */
    public function setParkingName($parkingName)
    {
        $this->container['parkingName'] = $parkingName;

        return $this;
    }

    /**
     * Gets parkingRecordId
     *
     * @return string|null
     */
    public function getParkingRecordId()
    {
        return $this->container['parkingRecordId'];
    }

    /**
     * Sets parkingRecordId
     *
     * @param string|null $parkingRecordId 支付宝业务流水号，用于记录车辆从驶入到驶出的全流程。通过 alipay.eco.mycar.parking.enterinfo.sync(车辆驶入接口)接口获取。
     *
     * @return self
     */
    public function setParkingRecordId($parkingRecordId)
    {
        $this->container['parkingRecordId'] = $parkingRecordId;

        return $this;
    }

    /**
     * Gets payMoney
     *
     * @return string|null
     */
    public function getPayMoney()
    {
        return $this->container['payMoney'];
    }

    /**
     * Sets payMoney
     *
     * @param string|null $payMoney 缴费金额，保留小数点后两位
     *
     * @return self
     */
    public function setPayMoney($payMoney)
    {
        $this->container['payMoney'] = $payMoney;

        return $this;
    }

    /**
     * Gets payScene
     *
     * @return string|null
     */
    public function getPayScene()
    {
        return $this->container['payScene'];
    }

    /**
     * Sets payScene
     *
     * @param string|null $payScene 支付场景：INPARKINGLOT_PAY：场内在线缴费；ENTRANCE_EXIT_PAY：出入口缴费、VEH_DEVICE_PAY：车机缴费；会根据场景判断是否发放能量，当前只有场内支付场景会发能量，需要能量发放请与服务接入支持同学提前沟通。
     *
     * @return self
     */
    public function setPayScene($payScene)
    {
        $this->container['payScene'] = $payScene;

        return $this;
    }

    /**
     * Gets payTime
     *
     * @return string|null
     */
    public function getPayTime()
    {
        return $this->container['payTime'];
    }

    /**
     * Sets payTime
     *
     * @param string|null $payTime 缴费时间, 格式\"YYYYMM-DD HH:mm:ss\"，24小时制
     *
     * @return self
     */
    public function setPayTime($payTime)
    {
        $this->container['payTime'] = $payTime;

        return $this;
    }

    /**
     * Gets payType
     *
     * @return string|null
     */
    public function getPayType()
    {
        return $this->container['payType'];
    }

    /**
     * Sets payType
     *
     * @param string|null $payType 付款方式，枚举支持： *1：支付宝在线缴费。
     *
     * @return self
     */
    public function setPayType($payType)
    {
        $this->container['payType'] = $payType;

        return $this;
    }

    /**
     * Gets smid
     *
     * @return string|null
     */
    public function getSmid()
    {
        return $this->container['smid'];
    }

    /**
     * Sets smid
     *
     * @param string|null $smid 间连商户ID
     *
     * @return self
     */
    public function setSmid($smid)
    {
        $this->container['smid'] = $smid;

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
     * @param string|null $userId 停车缴费用户 id，用户在支付宝的唯一标识，以 2088 开头的 16 位纯数字组成。 注意：ISV需保证用户 id的正确性，以免导致用户在停车平台查询不到相关的订单信息。
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

