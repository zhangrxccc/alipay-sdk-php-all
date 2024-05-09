<?php
/**
 * AlipayMarketingCampaignCashTriggerResponseModel
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
 * AlipayMarketingCampaignCashTriggerResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayMarketingCampaignCashTriggerResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayMarketingCampaignCashTriggerResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bizNo' => 'string',
        'couponName' => 'string',
        'errorMsg' => 'string',
        'merchantLogo' => 'string',
        'outBizNo' => 'string',
        'partnerId' => 'string',
        'prizeAmount' => 'string',
        'prizeMsg' => 'string',
        'repeatTriggerFlag' => 'string',
        'triggerResult' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bizNo' => null,
        'couponName' => null,
        'errorMsg' => null,
        'merchantLogo' => null,
        'outBizNo' => null,
        'partnerId' => null,
        'prizeAmount' => null,
        'prizeMsg' => null,
        'repeatTriggerFlag' => null,
        'triggerResult' => null
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
        'bizNo' => 'biz_no',
        'couponName' => 'coupon_name',
        'errorMsg' => 'error_msg',
        'merchantLogo' => 'merchant_logo',
        'outBizNo' => 'out_biz_no',
        'partnerId' => 'partner_id',
        'prizeAmount' => 'prize_amount',
        'prizeMsg' => 'prize_msg',
        'repeatTriggerFlag' => 'repeat_trigger_flag',
        'triggerResult' => 'trigger_result'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bizNo' => 'setBizNo',
        'couponName' => 'setCouponName',
        'errorMsg' => 'setErrorMsg',
        'merchantLogo' => 'setMerchantLogo',
        'outBizNo' => 'setOutBizNo',
        'partnerId' => 'setPartnerId',
        'prizeAmount' => 'setPrizeAmount',
        'prizeMsg' => 'setPrizeMsg',
        'repeatTriggerFlag' => 'setRepeatTriggerFlag',
        'triggerResult' => 'setTriggerResult'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bizNo' => 'getBizNo',
        'couponName' => 'getCouponName',
        'errorMsg' => 'getErrorMsg',
        'merchantLogo' => 'getMerchantLogo',
        'outBizNo' => 'getOutBizNo',
        'partnerId' => 'getPartnerId',
        'prizeAmount' => 'getPrizeAmount',
        'prizeMsg' => 'getPrizeMsg',
        'repeatTriggerFlag' => 'getRepeatTriggerFlag',
        'triggerResult' => 'getTriggerResult'
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
        $this->container['bizNo'] = $data['bizNo'] ?? null;
        $this->container['couponName'] = $data['couponName'] ?? null;
        $this->container['errorMsg'] = $data['errorMsg'] ?? null;
        $this->container['merchantLogo'] = $data['merchantLogo'] ?? null;
        $this->container['outBizNo'] = $data['outBizNo'] ?? null;
        $this->container['partnerId'] = $data['partnerId'] ?? null;
        $this->container['prizeAmount'] = $data['prizeAmount'] ?? null;
        $this->container['prizeMsg'] = $data['prizeMsg'] ?? null;
        $this->container['repeatTriggerFlag'] = $data['repeatTriggerFlag'] ?? null;
        $this->container['triggerResult'] = $data['triggerResult'] ?? null;
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
     * Gets bizNo
     *
     * @return string|null
     */
    public function getBizNo()
    {
        return $this->container['bizNo'];
    }

    /**
     * Sets bizNo
     *
     * @param string|null $bizNo 支付宝业务号,发奖成功时返回,调用者可提供此字符串进行问题排查与核对等
     *
     * @return self
     */
    public function setBizNo($bizNo)
    {
        $this->container['bizNo'] = $bizNo;

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
     * @param string|null $couponName 红包名称,创建活动时设置，用于账单列表和详情、红包列表和详情的展示
     *
     * @return self
     */
    public function setCouponName($couponName)
    {
        $this->container['couponName'] = $couponName;

        return $this;
    }

    /**
     * Gets errorMsg
     *
     * @return string|null
     */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
     * Sets errorMsg
     *
     * @param string|null $errorMsg 用户领取失败的错误信息描述
     *
     * @return self
     */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;

        return $this;
    }

    /**
     * Gets merchantLogo
     *
     * @return string|null
     */
    public function getMerchantLogo()
    {
        return $this->container['merchantLogo'];
    }

    /**
     * Sets merchantLogo
     *
     * @param string|null $merchantLogo 商户头像logo的图片url地址，用于账单和红包列表、详情的展示
     *
     * @return self
     */
    public function setMerchantLogo($merchantLogo)
    {
        $this->container['merchantLogo'] = $merchantLogo;

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
     * @param string|null $outBizNo 外部业务号,回填请求中的out_biz_no,请求参数中传了out_biz_no就会回传回去，如果不传就回传默认的\"default_out_biz_no\"，请求者可用于日志记录与核对等
     *
     * @return self
     */
    public function setOutBizNo($outBizNo)
    {
        $this->container['outBizNo'] = $outBizNo;

        return $this;
    }

    /**
     * Gets partnerId
     *
     * @return string|null
     */
    public function getPartnerId()
    {
        return $this->container['partnerId'];
    }

    /**
     * Sets partnerId
     *
     * @param string|null $partnerId 发送红包商户签约pid，发奖成功时非空
     *
     * @return self
     */
    public function setPartnerId($partnerId)
    {
        $this->container['partnerId'] = $partnerId;

        return $this;
    }

    /**
     * Gets prizeAmount
     *
     * @return string|null
     */
    public function getPrizeAmount()
    {
        return $this->container['prizeAmount'];
    }

    /**
     * Sets prizeAmount
     *
     * @param string|null $prizeAmount 现金红包金额，发奖成功时非空，单位为元，保留两位小数
     *
     * @return self
     */
    public function setPrizeAmount($prizeAmount)
    {
        $this->container['prizeAmount'] = $prizeAmount;

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
     * @param string|null $prizeMsg 活动文案,用于账单的备注展示、红包详情页的文案展示
     *
     * @return self
     */
    public function setPrizeMsg($prizeMsg)
    {
        $this->container['prizeMsg'] = $prizeMsg;

        return $this;
    }

    /**
     * Gets repeatTriggerFlag
     *
     * @return string|null
     */
    public function getRepeatTriggerFlag()
    {
        return $this->container['repeatTriggerFlag'];
    }

    /**
     * Sets repeatTriggerFlag
     *
     * @param string|null $repeatTriggerFlag 用户是否重复领取，如果重复领取，返回的是之前的中奖结果，如果是首次领取，则走发奖流程
     *
     * @return self
     */
    public function setRepeatTriggerFlag($repeatTriggerFlag)
    {
        $this->container['repeatTriggerFlag'] = $repeatTriggerFlag;

        return $this;
    }

    /**
     * Gets triggerResult
     *
     * @return string|null
     */
    public function getTriggerResult()
    {
        return $this->container['triggerResult'];
    }

    /**
     * Sets triggerResult
     *
     * @param string|null $triggerResult 是否中奖结果状态，取值为true或false。如果为true表示发奖成功，这时返回的结果中的其他字段非空；如果为false表示发奖失败，这时返回的其他字段为空
     *
     * @return self
     */
    public function setTriggerResult($triggerResult)
    {
        $this->container['triggerResult'] = $triggerResult;

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


