<?php
/**
 * AlipayEcoSignFlowQueryResponseModel
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
 * AlipayEcoSignFlowQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayEcoSignFlowQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayEcoSignFlowQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'businessScene' => 'string',
        'contractValidity' => 'int',
        'flowDesc' => 'string',
        'flowEndTime' => 'int',
        'flowId' => 'string',
        'flowStartTime' => 'int',
        'flowStatus' => 'int',
        'noticeDeveloperUrl' => 'string',
        'signValidity' => 'int',
        'signers' => '\Alipay\OpenAPISDK\Model\FlowSigner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'businessScene' => null,
        'contractValidity' => null,
        'flowDesc' => null,
        'flowEndTime' => null,
        'flowId' => null,
        'flowStartTime' => null,
        'flowStatus' => null,
        'noticeDeveloperUrl' => null,
        'signValidity' => null,
        'signers' => null
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
        'businessScene' => 'business_scene',
        'contractValidity' => 'contract_validity',
        'flowDesc' => 'flow_desc',
        'flowEndTime' => 'flow_end_time',
        'flowId' => 'flow_id',
        'flowStartTime' => 'flow_start_time',
        'flowStatus' => 'flow_status',
        'noticeDeveloperUrl' => 'notice_developer_url',
        'signValidity' => 'sign_validity',
        'signers' => 'signers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'businessScene' => 'setBusinessScene',
        'contractValidity' => 'setContractValidity',
        'flowDesc' => 'setFlowDesc',
        'flowEndTime' => 'setFlowEndTime',
        'flowId' => 'setFlowId',
        'flowStartTime' => 'setFlowStartTime',
        'flowStatus' => 'setFlowStatus',
        'noticeDeveloperUrl' => 'setNoticeDeveloperUrl',
        'signValidity' => 'setSignValidity',
        'signers' => 'setSigners'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'businessScene' => 'getBusinessScene',
        'contractValidity' => 'getContractValidity',
        'flowDesc' => 'getFlowDesc',
        'flowEndTime' => 'getFlowEndTime',
        'flowId' => 'getFlowId',
        'flowStartTime' => 'getFlowStartTime',
        'flowStatus' => 'getFlowStatus',
        'noticeDeveloperUrl' => 'getNoticeDeveloperUrl',
        'signValidity' => 'getSignValidity',
        'signers' => 'getSigners'
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
        $this->container['businessScene'] = $data['businessScene'] ?? null;
        $this->container['contractValidity'] = $data['contractValidity'] ?? null;
        $this->container['flowDesc'] = $data['flowDesc'] ?? null;
        $this->container['flowEndTime'] = $data['flowEndTime'] ?? null;
        $this->container['flowId'] = $data['flowId'] ?? null;
        $this->container['flowStartTime'] = $data['flowStartTime'] ?? null;
        $this->container['flowStatus'] = $data['flowStatus'] ?? null;
        $this->container['noticeDeveloperUrl'] = $data['noticeDeveloperUrl'] ?? null;
        $this->container['signValidity'] = $data['signValidity'] ?? null;
        $this->container['signers'] = $data['signers'] ?? null;
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
     * Gets businessScene
     *
     * @return string|null
     */
    public function getBusinessScene()
    {
        return $this->container['businessScene'];
    }

    /**
     * Sets businessScene
     *
     * @param string|null $businessScene 文件主题
     *
     * @return self
     */
    public function setBusinessScene($businessScene)
    {
        $this->container['businessScene'] = $businessScene;

        return $this;
    }

    /**
     * Gets contractValidity
     *
     * @return int|null
     */
    public function getContractValidity()
    {
        return $this->container['contractValidity'];
    }

    /**
     * Sets contractValidity
     *
     * @param int|null $contractValidity 文件有效截止日期
     *
     * @return self
     */
    public function setContractValidity($contractValidity)
    {
        $this->container['contractValidity'] = $contractValidity;

        return $this;
    }

    /**
     * Gets flowDesc
     *
     * @return string|null
     */
    public function getFlowDesc()
    {
        return $this->container['flowDesc'];
    }

    /**
     * Sets flowDesc
     *
     * @param string|null $flowDesc 流程描述, 如果流程已拒签或已撤回, 并且存在拒签或撤回原因, 流程描述显示为原因, 否则默认为流程状态描述
     *
     * @return self
     */
    public function setFlowDesc($flowDesc)
    {
        $this->container['flowDesc'] = $flowDesc;

        return $this;
    }

    /**
     * Gets flowEndTime
     *
     * @return int|null
     */
    public function getFlowEndTime()
    {
        return $this->container['flowEndTime'];
    }

    /**
     * Sets flowEndTime
     *
     * @param int|null $flowEndTime 流程结束时间
     *
     * @return self
     */
    public function setFlowEndTime($flowEndTime)
    {
        $this->container['flowEndTime'] = $flowEndTime;

        return $this;
    }

    /**
     * Gets flowId
     *
     * @return string|null
     */
    public function getFlowId()
    {
        return $this->container['flowId'];
    }

    /**
     * Sets flowId
     *
     * @param string|null $flowId 流程Id
     *
     * @return self
     */
    public function setFlowId($flowId)
    {
        $this->container['flowId'] = $flowId;

        return $this;
    }

    /**
     * Gets flowStartTime
     *
     * @return int|null
     */
    public function getFlowStartTime()
    {
        return $this->container['flowStartTime'];
    }

    /**
     * Sets flowStartTime
     *
     * @param int|null $flowStartTime 流程开始时间
     *
     * @return self
     */
    public function setFlowStartTime($flowStartTime)
    {
        $this->container['flowStartTime'] = $flowStartTime;

        return $this;
    }

    /**
     * Gets flowStatus
     *
     * @return int|null
     */
    public function getFlowStatus()
    {
        return $this->container['flowStatus'];
    }

    /**
     * Sets flowStatus
     *
     * @param int|null $flowStatus 流程状态,0-草稿 1-签署中 2-完成 3-撤销 4-终止 5-过期 6-删除 7-拒签
     *
     * @return self
     */
    public function setFlowStatus($flowStatus)
    {
        $this->container['flowStatus'] = $flowStatus;

        return $this;
    }

    /**
     * Gets noticeDeveloperUrl
     *
     * @return string|null
     */
    public function getNoticeDeveloperUrl()
    {
        return $this->container['noticeDeveloperUrl'];
    }

    /**
     * Sets noticeDeveloperUrl
     *
     * @param string|null $noticeDeveloperUrl 通知开发者地址
     *
     * @return self
     */
    public function setNoticeDeveloperUrl($noticeDeveloperUrl)
    {
        $this->container['noticeDeveloperUrl'] = $noticeDeveloperUrl;

        return $this;
    }

    /**
     * Gets signValidity
     *
     * @return int|null
     */
    public function getSignValidity()
    {
        return $this->container['signValidity'];
    }

    /**
     * Sets signValidity
     *
     * @param int|null $signValidity 签署有效截止日期
     *
     * @return self
     */
    public function setSignValidity($signValidity)
    {
        $this->container['signValidity'] = $signValidity;

        return $this;
    }

    /**
     * Gets signers
     *
     * @return \Alipay\OpenAPISDK\Model\FlowSigner[]|null
     */
    public function getSigners()
    {
        return $this->container['signers'];
    }

    /**
     * Sets signers
     *
     * @param \Alipay\OpenAPISDK\Model\FlowSigner[]|null $signers 签署人列表及签署状态
     *
     * @return self
     */
    public function setSigners($signers)
    {
        $this->container['signers'] = $signers;

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


