<?php
/**
 * AlipayMarketingCampaignOrderVoucherConsultModel
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
 * AlipayMarketingCampaignOrderVoucherConsultModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayMarketingCampaignOrderVoucherConsultModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayMarketingCampaignOrderVoucherConsultModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'businessParam' => 'string',
        'itemConsultList' => '\Alipay\OpenAPISDK\Model\ItemConsultRequest[]',
        'orderAmount' => 'string',
        'sceneCode' => 'string[]',
        'specifiedAppId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'businessParam' => null,
        'itemConsultList' => null,
        'orderAmount' => null,
        'sceneCode' => null,
        'specifiedAppId' => null
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
        'businessParam' => 'business_param',
        'itemConsultList' => 'item_consult_list',
        'orderAmount' => 'order_amount',
        'sceneCode' => 'scene_code',
        'specifiedAppId' => 'specified_app_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'businessParam' => 'setBusinessParam',
        'itemConsultList' => 'setItemConsultList',
        'orderAmount' => 'setOrderAmount',
        'sceneCode' => 'setSceneCode',
        'specifiedAppId' => 'setSpecifiedAppId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'businessParam' => 'getBusinessParam',
        'itemConsultList' => 'getItemConsultList',
        'orderAmount' => 'getOrderAmount',
        'sceneCode' => 'getSceneCode',
        'specifiedAppId' => 'getSpecifiedAppId'
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
        $this->container['businessParam'] = $data['businessParam'] ?? null;
        $this->container['itemConsultList'] = $data['itemConsultList'] ?? null;
        $this->container['orderAmount'] = $data['orderAmount'] ?? null;
        $this->container['sceneCode'] = $data['sceneCode'] ?? null;
        $this->container['specifiedAppId'] = $data['specifiedAppId'] ?? null;
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
     * Gets businessParam
     *
     * @return string|null
     */
    public function getBusinessParam()
    {
        return $this->container['businessParam'];
    }

    /**
     * Sets businessParam
     *
     * @param string|null $businessParam 业务参数大字段，优惠咨询的控制参数，json格式；目前支持传入useBigAmountSkipOrderThold为N来控制不使用大金额跳过优惠的订单门槛检查；默认不传；
     *
     * @return self
     */
    public function setBusinessParam($businessParam)
    {
        $this->container['businessParam'] = $businessParam;

        return $this;
    }

    /**
     * Gets itemConsultList
     *
     * @return \Alipay\OpenAPISDK\Model\ItemConsultRequest[]|null
     */
    public function getItemConsultList()
    {
        return $this->container['itemConsultList'];
    }

    /**
     * Sets itemConsultList
     *
     * @param \Alipay\OpenAPISDK\Model\ItemConsultRequest[]|null $itemConsultList 商品咨询请求列表（当需要咨询单品券时必传，如果某商品不希望参与本次单品优惠咨询则不传递对应信息即可）
     *
     * @return self
     */
    public function setItemConsultList($itemConsultList)
    {
        $this->container['itemConsultList'] = $itemConsultList;

        return $this;
    }

    /**
     * Gets orderAmount
     *
     * @return string|null
     */
    public function getOrderAmount()
    {
        return $this->container['orderAmount'];
    }

    /**
     * Sets orderAmount
     *
     * @param string|null $orderAmount 订单金额（如同时享受商户自有优惠请先扣除后传入），单位为元，最多2位小数
     *
     * @return self
     */
    public function setOrderAmount($orderAmount)
    {
        $this->container['orderAmount'] = $orderAmount;

        return $this;
    }

    /**
     * Gets sceneCode
     *
     * @return string[]|null
     */
    public function getSceneCode()
    {
        return $this->container['sceneCode'];
    }

    /**
     * Sets sceneCode
     *
     * @param string[]|null $sceneCode 场景码：默认(DEFAULT)
     *
     * @return self
     */
    public function setSceneCode($sceneCode)
    {
        $this->container['sceneCode'] = $sceneCode;

        return $this;
    }

    /**
     * Gets specifiedAppId
     *
     * @return string|null
     */
    public function getSpecifiedAppId()
    {
        return $this->container['specifiedAppId'];
    }

    /**
     * Sets specifiedAppId
     *
     * @param string|null $specifiedAppId 券指定的核销appid（如果配券时指定了核销范围为线上小程序及相应的appid则此处必传）
     *
     * @return self
     */
    public function setSpecifiedAppId($specifiedAppId)
    {
        $this->container['specifiedAppId'] = $specifiedAppId;

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


