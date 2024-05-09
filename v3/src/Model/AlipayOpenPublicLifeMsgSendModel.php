<?php
/**
 * AlipayOpenPublicLifeMsgSendModel
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
 * AlipayOpenPublicLifeMsgSendModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenPublicLifeMsgSendModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenPublicLifeMsgSendModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'category' => 'string',
        'content' => 'string',
        'desc' => 'string',
        'msgType' => 'string',
        'sourceExtInfo' => 'string',
        'title' => 'string',
        'uniqueMsgId' => 'string',
        'videoLength' => 'string',
        'videoSamples' => 'string[]',
        'videoSize' => 'string',
        'videoSource' => 'string',
        'videoTemporaryUrl' => 'string',
        'videoUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'category' => null,
        'content' => null,
        'desc' => null,
        'msgType' => null,
        'sourceExtInfo' => null,
        'title' => null,
        'uniqueMsgId' => null,
        'videoLength' => null,
        'videoSamples' => null,
        'videoSize' => null,
        'videoSource' => null,
        'videoTemporaryUrl' => null,
        'videoUrl' => null
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
        'category' => 'category',
        'content' => 'content',
        'desc' => 'desc',
        'msgType' => 'msg_type',
        'sourceExtInfo' => 'source_ext_info',
        'title' => 'title',
        'uniqueMsgId' => 'unique_msg_id',
        'videoLength' => 'video_length',
        'videoSamples' => 'video_samples',
        'videoSize' => 'video_size',
        'videoSource' => 'video_source',
        'videoTemporaryUrl' => 'video_temporary_url',
        'videoUrl' => 'video_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category' => 'setCategory',
        'content' => 'setContent',
        'desc' => 'setDesc',
        'msgType' => 'setMsgType',
        'sourceExtInfo' => 'setSourceExtInfo',
        'title' => 'setTitle',
        'uniqueMsgId' => 'setUniqueMsgId',
        'videoLength' => 'setVideoLength',
        'videoSamples' => 'setVideoSamples',
        'videoSize' => 'setVideoSize',
        'videoSource' => 'setVideoSource',
        'videoTemporaryUrl' => 'setVideoTemporaryUrl',
        'videoUrl' => 'setVideoUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category' => 'getCategory',
        'content' => 'getContent',
        'desc' => 'getDesc',
        'msgType' => 'getMsgType',
        'sourceExtInfo' => 'getSourceExtInfo',
        'title' => 'getTitle',
        'uniqueMsgId' => 'getUniqueMsgId',
        'videoLength' => 'getVideoLength',
        'videoSamples' => 'getVideoSamples',
        'videoSize' => 'getVideoSize',
        'videoSource' => 'getVideoSource',
        'videoTemporaryUrl' => 'getVideoTemporaryUrl',
        'videoUrl' => 'getVideoUrl'
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
        $this->container['category'] = $data['category'] ?? null;
        $this->container['content'] = $data['content'] ?? null;
        $this->container['desc'] = $data['desc'] ?? null;
        $this->container['msgType'] = $data['msgType'] ?? null;
        $this->container['sourceExtInfo'] = $data['sourceExtInfo'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['uniqueMsgId'] = $data['uniqueMsgId'] ?? null;
        $this->container['videoLength'] = $data['videoLength'] ?? null;
        $this->container['videoSamples'] = $data['videoSamples'] ?? null;
        $this->container['videoSize'] = $data['videoSize'] ?? null;
        $this->container['videoSource'] = $data['videoSource'] ?? null;
        $this->container['videoTemporaryUrl'] = $data['videoTemporaryUrl'] ?? null;
        $this->container['videoUrl'] = $data['videoUrl'] ?? null;
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
     * Gets category
     *
     * @return string|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category 消息分类，请传入对应分类编码值
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string|null $content 消息正文，html原文或纯文本
     *
     * @return self
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets desc
     *
     * @return string|null
     */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
     * Sets desc
     *
     * @param string|null $desc 消息概述
     *
     * @return self
     */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;

        return $this;
    }

    /**
     * Gets msgType
     *
     * @return string|null
     */
    public function getMsgType()
    {
        return $this->container['msgType'];
    }

    /**
     * Sets msgType
     *
     * @param string|null $msgType 媒体资讯类生活号消息类型
     *
     * @return self
     */
    public function setMsgType($msgType)
    {
        $this->container['msgType'] = $msgType;

        return $this;
    }

    /**
     * Gets sourceExtInfo
     *
     * @return string|null
     */
    public function getSourceExtInfo()
    {
        return $this->container['sourceExtInfo'];
    }

    /**
     * Sets sourceExtInfo
     *
     * @param string|null $sourceExtInfo 消息来源方附属信息，供搜索、推荐使用  publish_time（int）：消息发布时间，单位秒  keyword_list（String）: 文章的标签列表，英文逗号分隔  comment（int）：消息来源处评论次数  reward（int）：消息来源处打赏次数  is_recommended（boolean）：消息在来源处是否被推荐  is_news（boolean）：消息是否实时性内容  read（int）：消息在来源处被阅读次数  like（int）：消息在来源处被点赞次数  is_hot（boolean）：消息在来源平台是否是热门内容  share（int）：文章在来源平台的分享次数  deadline（int）：文章的失效时间，单位秒
     *
     * @return self
     */
    public function setSourceExtInfo($sourceExtInfo)
    {
        $this->container['sourceExtInfo'] = $sourceExtInfo;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title 消息标题
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets uniqueMsgId
     *
     * @return string|null
     */
    public function getUniqueMsgId()
    {
        return $this->container['uniqueMsgId'];
    }

    /**
     * Sets uniqueMsgId
     *
     * @param string|null $uniqueMsgId 来源方消息唯一标识；若不为空，根据此id和生活号id对消息去重；若为空，不去重
     *
     * @return self
     */
    public function setUniqueMsgId($uniqueMsgId)
    {
        $this->container['uniqueMsgId'] = $uniqueMsgId;

        return $this;
    }

    /**
     * Gets videoLength
     *
     * @return string|null
     */
    public function getVideoLength()
    {
        return $this->container['videoLength'];
    }

    /**
     * Sets videoLength
     *
     * @param string|null $videoLength 生活号消息视频时长，单位：秒（视频类消息必填）
     *
     * @return self
     */
    public function setVideoLength($videoLength)
    {
        $this->container['videoLength'] = $videoLength;

        return $this;
    }

    /**
     * Gets videoSamples
     *
     * @return string[]|null
     */
    public function getVideoSamples()
    {
        return $this->container['videoSamples'];
    }

    /**
     * Sets videoSamples
     *
     * @param string[]|null $videoSamples 视频类型消息中视频抽样关键帧截图，视频类消息选填
     *
     * @return self
     */
    public function setVideoSamples($videoSamples)
    {
        $this->container['videoSamples'] = $videoSamples;

        return $this;
    }

    /**
     * Gets videoSize
     *
     * @return string|null
     */
    public function getVideoSize()
    {
        return $this->container['videoSize'];
    }

    /**
     * Sets videoSize
     *
     * @param string|null $videoSize 视频大小，单位：KB（视频类消息必填）
     *
     * @return self
     */
    public function setVideoSize($videoSize)
    {
        $this->container['videoSize'] = $videoSize;

        return $this;
    }

    /**
     * Gets videoSource
     *
     * @return string|null
     */
    public function getVideoSource()
    {
        return $this->container['videoSource'];
    }

    /**
     * Sets videoSource
     *
     * @param string|null $videoSource 视频资源来源id（视频类消息必填），取值限定youku, miaopai, taobao, sina中的一个
     *
     * @return self
     */
    public function setVideoSource($videoSource)
    {
        $this->container['videoSource'] = $videoSource;

        return $this;
    }

    /**
     * Gets videoTemporaryUrl
     *
     * @return string|null
     */
    public function getVideoTemporaryUrl()
    {
        return $this->container['videoTemporaryUrl'];
    }

    /**
     * Sets videoTemporaryUrl
     *
     * @param string|null $videoTemporaryUrl 视频的临时链接（优酷来源的视频消息，该字段不能为空）
     *
     * @return self
     */
    public function setVideoTemporaryUrl($videoTemporaryUrl)
    {
        $this->container['videoTemporaryUrl'] = $videoTemporaryUrl;

        return $this;
    }

    /**
     * Gets videoUrl
     *
     * @return string|null
     */
    public function getVideoUrl()
    {
        return $this->container['videoUrl'];
    }

    /**
     * Sets videoUrl
     *
     * @param string|null $videoUrl 生活号视频类消息视频id或url（视频类消息必填，根据来源区分）
     *
     * @return self
     */
    public function setVideoUrl($videoUrl)
    {
        $this->container['videoUrl'] = $videoUrl;

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


