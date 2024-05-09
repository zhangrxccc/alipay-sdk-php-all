<?php
/**
 * AlipayMarketingCampaignCashDetailQueryResponseModel
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
 * AlipayMarketingCampaignCashDetailQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayMarketingCampaignCashDetailQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayMarketingCampaignCashDetailQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'campStatus' => 'string',
        'couponName' => 'string',
        'crowdNo' => 'string',
        'endTime' => 'string',
        'originCrowdNo' => 'string',
        'prizeMsg' => 'string',
        'prizeType' => 'string',
        'sendAmount' => 'string',
        'startTime' => 'string',
        'totalAmount' => 'string',
        'totalCount' => 'int',
        'totalNum' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'campStatus' => null,
        'couponName' => null,
        'crowdNo' => null,
        'endTime' => null,
        'originCrowdNo' => null,
        'prizeMsg' => null,
        'prizeType' => null,
        'sendAmount' => null,
        'startTime' => null,
        'totalAmount' => null,
        'totalCount' => null,
        'totalNum' => null
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
        'campStatus' => 'camp_status',
        'couponName' => 'coupon_name',
        'crowdNo' => 'crowd_no',
        'endTime' => 'end_time',
        'originCrowdNo' => 'origin_crowd_no',
        'prizeMsg' => 'prize_msg',
        'prizeType' => 'prize_type',
        'sendAmount' => 'send_amount',
        'startTime' => 'start_time',
        'totalAmount' => 'total_amount',
        'totalCount' => 'total_count',
        'totalNum' => 'total_num'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'campStatus' => 'setCampStatus',
        'couponName' => 'setCouponName',
        'crowdNo' => 'setCrowdNo',
        'endTime' => 'setEndTime',
        'originCrowdNo' => 'setOriginCrowdNo',
        'prizeMsg' => 'setPrizeMsg',
        'prizeType' => 'setPrizeType',
        'sendAmount' => 'setSendAmount',
        'startTime' => 'setStartTime',
        'totalAmount' => 'setTotalAmount',
        'totalCount' => 'setTotalCount',
        'totalNum' => 'setTotalNum'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'campStatus' => 'getCampStatus',
        'couponName' => 'getCouponName',
        'crowdNo' => 'getCrowdNo',
        'endTime' => 'getEndTime',
        'originCrowdNo' => 'getOriginCrowdNo',
        'prizeMsg' => 'getPrizeMsg',
        'prizeType' => 'getPrizeType',
        'sendAmount' => 'getSendAmount',
        'startTime' => 'getStartTime',
        'totalAmount' => 'getTotalAmount',
        'totalCount' => 'getTotalCount',
        'totalNum' => 'getTotalNum'
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
        $this->container['campStatus'] = $data['campStatus'] ?? null;
        $this->container['couponName'] = $data['couponName'] ?? null;
        $this->container['crowdNo'] = $data['crowdNo'] ?? null;
        $this->container['endTime'] = $data['endTime'] ?? null;
        $this->container['originCrowdNo'] = $data['originCrowdNo'] ?? null;
        $this->container['prizeMsg'] = $data['prizeMsg'] ?? null;
        $this->container['prizeType'] = $data['prizeType'] ?? null;
        $this->container['sendAmount'] = $data['sendAmount'] ?? null;
        $this->container['startTime'] = $data['startTime'] ?? null;
        $this->container['totalAmount'] = $data['totalAmount'] ?? null;
        $this->container['totalCount'] = $data['totalCount'] ?? null;
        $this->container['totalNum'] = $data['totalNum'] ?? null;
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
     * Gets campStatus
     *
     * @return string|null
     */
    public function getCampStatus()
    {
        return $this->container['campStatus'];
    }

    /**
     * Sets campStatus
     *
     * @param string|null $campStatus 活动状态，CREATED: 已创建未打款 PAID:已打款 READY:活动已开始 PAUSE:活动已暂停 CLOSED:活动已结束 SETTLED:活动已清算
     *
     * @return self
     */
    public function setCampStatus($campStatus)
    {
        $this->container['campStatus'] = $campStatus;

        return $this;
    }

    /**
     * Gets couponName
     *
     * @return string|null
     */
    public function getCouponName()
    {
        return $this->container['couponName'];
    }

    /**
     * Sets couponName
     *
     * @param string|null $couponName 红包名称
     *
     * @return self
     */
    public function setCouponName($couponName)
    {
        $this->container['couponName'] = $couponName;

        return $this;
    }

    /**
     * Gets crowdNo
     *
     * @return string|null
     */
    public function getCrowdNo()
    {
        return $this->container['crowdNo'];
    }

    /**
     * Sets crowdNo
     *
     * @param string|null $crowdNo 活动号
     *
     * @return self
     */
    public function setCrowdNo($crowdNo)
    {
        $this->container['crowdNo'] = $crowdNo;

        return $this;
    }

    /**
     * Gets endTime
     *
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
     * Sets endTime
     *
     * @param string|null $endTime 活动结束时间
     *
     * @return self
     */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;

        return $this;
    }

    /**
     * Gets originCrowdNo
     *
     * @return string|null
     */
    public function getOriginCrowdNo()
    {
        return $this->container['originCrowdNo'];
    }

    /**
     * Sets originCrowdNo
     *
     * @param string|null $originCrowdNo 原始活动号,商户排查问题时提供的活动依据
     *
     * @return self
     */
    public function setOriginCrowdNo($originCrowdNo)
    {
        $this->container['originCrowdNo'] = $originCrowdNo;

        return $this;
    }

    /**
     * Gets prizeMsg
     *
     * @return string|null
     */
    public function getPrizeMsg()
    {
        return $this->container['prizeMsg'];
    }

    /**
     * Sets prizeMsg
     *
     * @param string|null $prizeMsg 活动文案,用户在账单中看到的红包描述
     *
     * @return self
     */
    public function setPrizeMsg($prizeMsg)
    {
        $this->container['prizeMsg'] = $prizeMsg;

        return $this;
    }

    /**
     * Gets prizeType
     *
     * @return string|null
     */
    public function getPrizeType()
    {
        return $this->container['prizeType'];
    }

    /**
     * Sets prizeType
     *
     * @param string|null $prizeType 现金红包的发放形式, fixed为固定金额,random为随机金额
     *
     * @return self
     */
    public function setPrizeType($prizeType)
    {
        $this->container['prizeType'] = $prizeType;

        return $this;
    }

    /**
     * Gets sendAmount
     *
     * @return string|null
     */
    public function getSendAmount()
    {
        return $this->container['sendAmount'];
    }

    /**
     * Sets sendAmount
     *
     * @param string|null $sendAmount 活动已发放金额
     *
     * @return self
     */
    public function setSendAmount($sendAmount)
    {
        $this->container['sendAmount'] = $sendAmount;

        return $this;
    }

    /**
     * Gets startTime
     *
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     *
     * @param string|null $startTime 活动开始时间
     *
     * @return self
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

        return $this;
    }

    /**
     * Gets totalAmount
     *
     * @return string|null
     */
    public function getTotalAmount()
    {
        return $this->container['totalAmount'];
    }

    /**
     * Sets totalAmount
     *
     * @param string|null $totalAmount 活动总金额
     *
     * @return self
     */
    public function setTotalAmount($totalAmount)
    {
        $this->container['totalAmount'] = $totalAmount;

        return $this;
    }

    /**
     * Gets totalCount
     *
     * @return int|null
     */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
     * Sets totalCount
     *
     * @param int|null $totalCount 红包总个数
     *
     * @return self
     */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;

        return $this;
    }

    /**
     * Gets totalNum
     *
     * @return int|null
     */
    public function getTotalNum()
    {
        return $this->container['totalNum'];
    }

    /**
     * Sets totalNum
     *
     * @param int|null $totalNum 红包总个数(废弃)
     *
     * @return self
     */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;

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


