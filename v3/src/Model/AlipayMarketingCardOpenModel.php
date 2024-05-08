<?php
/**
 * AlipayMarketingCardOpenModel
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
 * AlipayMarketingCardOpenModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayMarketingCardOpenModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayMarketingCardOpenModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cardExtInfo' => '\Alipay\OpenAPISDK\Model\MerchantCard',
        'cardTemplateId' => 'string',
        'cardUserInfo' => '\Alipay\OpenAPISDK\Model\CardUserInfo',
        'memberExtInfo' => '\Alipay\OpenAPISDK\Model\MerchantMenber',
        'openCardChannel' => 'string',
        'openCardChannelId' => 'string',
        'outSerialNo' => 'string',
        'paidOuterCardInfo' => '\Alipay\OpenAPISDK\Model\PaidOuterCardExtraInfoDTO'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cardExtInfo' => null,
        'cardTemplateId' => null,
        'cardUserInfo' => null,
        'memberExtInfo' => null,
        'openCardChannel' => null,
        'openCardChannelId' => null,
        'outSerialNo' => null,
        'paidOuterCardInfo' => null
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
        'cardExtInfo' => 'card_ext_info',
        'cardTemplateId' => 'card_template_id',
        'cardUserInfo' => 'card_user_info',
        'memberExtInfo' => 'member_ext_info',
        'openCardChannel' => 'open_card_channel',
        'openCardChannelId' => 'open_card_channel_id',
        'outSerialNo' => 'out_serial_no',
        'paidOuterCardInfo' => 'paid_outer_card_info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cardExtInfo' => 'setCardExtInfo',
        'cardTemplateId' => 'setCardTemplateId',
        'cardUserInfo' => 'setCardUserInfo',
        'memberExtInfo' => 'setMemberExtInfo',
        'openCardChannel' => 'setOpenCardChannel',
        'openCardChannelId' => 'setOpenCardChannelId',
        'outSerialNo' => 'setOutSerialNo',
        'paidOuterCardInfo' => 'setPaidOuterCardInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cardExtInfo' => 'getCardExtInfo',
        'cardTemplateId' => 'getCardTemplateId',
        'cardUserInfo' => 'getCardUserInfo',
        'memberExtInfo' => 'getMemberExtInfo',
        'openCardChannel' => 'getOpenCardChannel',
        'openCardChannelId' => 'getOpenCardChannelId',
        'outSerialNo' => 'getOutSerialNo',
        'paidOuterCardInfo' => 'getPaidOuterCardInfo'
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
        $this->container['cardExtInfo'] = $data['cardExtInfo'] ?? null;
        $this->container['cardTemplateId'] = $data['cardTemplateId'] ?? null;
        $this->container['cardUserInfo'] = $data['cardUserInfo'] ?? null;
        $this->container['memberExtInfo'] = $data['memberExtInfo'] ?? null;
        $this->container['openCardChannel'] = $data['openCardChannel'] ?? null;
        $this->container['openCardChannelId'] = $data['openCardChannelId'] ?? null;
        $this->container['outSerialNo'] = $data['outSerialNo'] ?? null;
        $this->container['paidOuterCardInfo'] = $data['paidOuterCardInfo'] ?? null;
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
     * Gets cardExtInfo
     *
     * @return \Alipay\OpenAPISDK\Model\MerchantCard|null
     */
    public function getCardExtInfo()
    {
        return $this->container['cardExtInfo'];
    }

    /**
     * Sets cardExtInfo
     *
     * @param \Alipay\OpenAPISDK\Model\MerchantCard|null $cardExtInfo cardExtInfo
     *
     * @return self
     */
    public function setCardExtInfo($cardExtInfo)
    {
        $this->container['cardExtInfo'] = $cardExtInfo;

        return $this;
    }

    /**
     * Gets cardTemplateId
     *
     * @return string|null
     */
    public function getCardTemplateId()
    {
        return $this->container['cardTemplateId'];
    }

    /**
     * Sets cardTemplateId
     *
     * @param string|null $cardTemplateId 支付宝分配的卡模板Id（卡模板创建接口返回的模板ID）
     *
     * @return self
     */
    public function setCardTemplateId($cardTemplateId)
    {
        $this->container['cardTemplateId'] = $cardTemplateId;

        return $this;
    }

    /**
     * Gets cardUserInfo
     *
     * @return \Alipay\OpenAPISDK\Model\CardUserInfo|null
     */
    public function getCardUserInfo()
    {
        return $this->container['cardUserInfo'];
    }

    /**
     * Sets cardUserInfo
     *
     * @param \Alipay\OpenAPISDK\Model\CardUserInfo|null $cardUserInfo cardUserInfo
     *
     * @return self
     */
    public function setCardUserInfo($cardUserInfo)
    {
        $this->container['cardUserInfo'] = $cardUserInfo;

        return $this;
    }

    /**
     * Gets memberExtInfo
     *
     * @return \Alipay\OpenAPISDK\Model\MerchantMenber|null
     */
    public function getMemberExtInfo()
    {
        return $this->container['memberExtInfo'];
    }

    /**
     * Sets memberExtInfo
     *
     * @param \Alipay\OpenAPISDK\Model\MerchantMenber|null $memberExtInfo memberExtInfo
     *
     * @return self
     */
    public function setMemberExtInfo($memberExtInfo)
    {
        $this->container['memberExtInfo'] = $memberExtInfo;

        return $this;
    }

    /**
     * Gets openCardChannel
     *
     * @return string|null
     */
    public function getOpenCardChannel()
    {
        return $this->container['openCardChannel'];
    }

    /**
     * Sets openCardChannel
     *
     * @param string|null $openCardChannel 领卡渠道，用于记录外部商户端领卡来源的渠道信息，渠道值可自行定义（仅限数字、字母、下划线）   可直接标识领卡渠道，也可配合open_card_channel_id标识领卡渠道类型：  例如：  线下门店领取:20161534000000000008863（直接标识领卡渠道，门店shopId）  线下扫二维码领取:QR（标识领卡类型）;  线下活动领取:20170522000000000003609（直接标识领卡渠道，商户活动ID）
     *
     * @return self
     */
    public function setOpenCardChannel($openCardChannel)
    {
        $this->container['openCardChannel'] = $openCardChannel;

        return $this;
    }

    /**
     * Gets openCardChannelId
     *
     * @return string|null
     */
    public function getOpenCardChannelId()
    {
        return $this->container['openCardChannelId'];
    }

    /**
     * Sets openCardChannelId
     *
     * @param string|null $openCardChannelId 领卡来源的渠道id，注意区别于open_card_channel领卡渠道；  一般使用场景：  open_card_channel用于区分渠道类型，例如取值为\"SHOP\"（门店），\"ACTIVITY\"（活动）；  则open_card_channel_id可用于区分同渠道的不同实体，对应取各门店ID或各活动的标识ID等；
     *
     * @return self
     */
    public function setOpenCardChannelId($openCardChannelId)
    {
        $this->container['openCardChannelId'] = $openCardChannelId;

        return $this;
    }

    /**
     * Gets outSerialNo
     *
     * @return string|null
     */
    public function getOutSerialNo()
    {
        return $this->container['outSerialNo'];
    }

    /**
     * Sets outSerialNo
     *
     * @param string|null $outSerialNo 外部商户流水号。由商户自定义，需保证商户系统中唯一。
     *
     * @return self
     */
    public function setOutSerialNo($outSerialNo)
    {
        $this->container['outSerialNo'] = $outSerialNo;

        return $this;
    }

    /**
     * Gets paidOuterCardInfo
     *
     * @return \Alipay\OpenAPISDK\Model\PaidOuterCardExtraInfoDTO|null
     */
    public function getPaidOuterCardInfo()
    {
        return $this->container['paidOuterCardInfo'];
    }

    /**
     * Sets paidOuterCardInfo
     *
     * @param \Alipay\OpenAPISDK\Model\PaidOuterCardExtraInfoDTO|null $paidOuterCardInfo paidOuterCardInfo
     *
     * @return self
     */
    public function setPaidOuterCardInfo($paidOuterCardInfo)
    {
        $this->container['paidOuterCardInfo'] = $paidOuterCardInfo;

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


