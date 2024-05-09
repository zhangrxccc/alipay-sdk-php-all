<?php
/**
 * InteligentSendRule
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
 * InteligentSendRule Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InteligentSendRule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InteligentSendRule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allowRepeatSend' => 'string',
        'minCost' => 'string',
        'sendBudget' => 'string',
        'sendNum' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'allowRepeatSend' => null,
        'minCost' => null,
        'sendBudget' => null,
        'sendNum' => null
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
        'allowRepeatSend' => 'allow_repeat_send',
        'minCost' => 'min_cost',
        'sendBudget' => 'send_budget',
        'sendNum' => 'send_num'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allowRepeatSend' => 'setAllowRepeatSend',
        'minCost' => 'setMinCost',
        'sendBudget' => 'setSendBudget',
        'sendNum' => 'setSendNum'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allowRepeatSend' => 'getAllowRepeatSend',
        'minCost' => 'getMinCost',
        'sendBudget' => 'getSendBudget',
        'sendNum' => 'getSendNum'
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
        $this->container['allowRepeatSend'] = $data['allowRepeatSend'] ?? null;
        $this->container['minCost'] = $data['minCost'] ?? null;
        $this->container['sendBudget'] = $data['sendBudget'] ?? null;
        $this->container['sendNum'] = $data['sendNum'] ?? null;
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
     * Gets allowRepeatSend
     *
     * @return string|null
     */
    public function getAllowRepeatSend()
    {
        return $this->container['allowRepeatSend'];
    }

    /**
     * Sets allowRepeatSend
     *
     * @param string|null $allowRepeatSend 是否允许重复发奖：  true代表允许，false代表不允许  默认不设置，表明用户领取券后如果没有核销则不允许再次领取券  如果设置为true，表明如果用户领取券后没有核销，还可以继续领取该券
     *
     * @return self
     */
    public function setAllowRepeatSend($allowRepeatSend)
    {
        $this->container['allowRepeatSend'] = $allowRepeatSend;

        return $this;
    }

    /**
     * Gets minCost
     *
     * @return string|null
     */
    public function getMinCost()
    {
        return $this->container['minCost'];
    }

    /**
     * Sets minCost
     *
     * @param string|null $minCost 发券最低消费金额，单位元  活动类型为消费送且不是消费送礼包时设置  多营销工具之间不允许设置重复值
     *
     * @return self
     */
    public function setMinCost($minCost)
    {
        $this->container['minCost'] = $minCost;

        return $this;
    }

    /**
     * Gets sendBudget
     *
     * @return string|null
     */
    public function getSendBudget()
    {
        return $this->container['sendBudget'];
    }

    /**
     * Sets sendBudget
     *
     * @param string|null $sendBudget 券的预算数量（仅对口令送随机抽奖有效，即当活动类型为GUESS_SEND，且营销工具PromoTool的个数大于1时，此字段必填，其余情况此字段必为空）
     *
     * @return self
     */
    public function setSendBudget($sendBudget)
    {
        $this->container['sendBudget'] = $sendBudget;

        return $this;
    }

    /**
     * Gets sendNum
     *
     * @return string|null
     */
    public function getSendNum()
    {
        return $this->container['sendNum'];
    }

    /**
     * Sets sendNum
     *
     * @param string|null $sendNum 发券数目  最少发1张券，最多发5张券
     *
     * @return self
     */
    public function setSendNum($sendNum)
    {
        $this->container['sendNum'] = $sendNum;

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


