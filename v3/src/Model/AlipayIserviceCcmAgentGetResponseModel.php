<?php
/**
 * AlipayIserviceCcmAgentGetResponseModel
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
 * AlipayIserviceCcmAgentGetResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayIserviceCcmAgentGetResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayIserviceCcmAgentGetResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'answeringMode' => 'string',
        'avatar' => 'string',
        'ccsInstanceIds' => 'string[]',
        'chatConfig' => '\Alipay\OpenAPISDK\Model\AgentChatInfo[]',
        'createTime' => 'string',
        'creatorId' => 'string',
        'dingtalkUserId' => 'string',
        'email' => 'string',
        'externalId' => 'string',
        'hotlineConfig' => '\Alipay\OpenAPISDK\Model\AgentHotlineInfo[]',
        'id' => 'string',
        'jobNumber' => 'string',
        'lastLoginTime' => 'string',
        'mobile' => 'string',
        'nickName' => 'string',
        'profile' => 'string',
        'realName' => 'string',
        'roleIds' => '\Alipay\OpenAPISDK\Model\RoleId[]',
        'status' => 'string',
        'type' => 'string',
        'updateTime' => 'string',
        'updaterId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'answeringMode' => null,
        'avatar' => null,
        'ccsInstanceIds' => null,
        'chatConfig' => null,
        'createTime' => null,
        'creatorId' => null,
        'dingtalkUserId' => null,
        'email' => null,
        'externalId' => null,
        'hotlineConfig' => null,
        'id' => null,
        'jobNumber' => null,
        'lastLoginTime' => null,
        'mobile' => null,
        'nickName' => null,
        'profile' => null,
        'realName' => null,
        'roleIds' => null,
        'status' => null,
        'type' => null,
        'updateTime' => null,
        'updaterId' => null
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
        'answeringMode' => 'answering_mode',
        'avatar' => 'avatar',
        'ccsInstanceIds' => 'ccs_instance_ids',
        'chatConfig' => 'chat_config',
        'createTime' => 'create_time',
        'creatorId' => 'creator_id',
        'dingtalkUserId' => 'dingtalk_user_id',
        'email' => 'email',
        'externalId' => 'external_id',
        'hotlineConfig' => 'hotline_config',
        'id' => 'id',
        'jobNumber' => 'job_number',
        'lastLoginTime' => 'last_login_time',
        'mobile' => 'mobile',
        'nickName' => 'nick_name',
        'profile' => 'profile',
        'realName' => 'real_name',
        'roleIds' => 'role_ids',
        'status' => 'status',
        'type' => 'type',
        'updateTime' => 'update_time',
        'updaterId' => 'updater_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'answeringMode' => 'setAnsweringMode',
        'avatar' => 'setAvatar',
        'ccsInstanceIds' => 'setCcsInstanceIds',
        'chatConfig' => 'setChatConfig',
        'createTime' => 'setCreateTime',
        'creatorId' => 'setCreatorId',
        'dingtalkUserId' => 'setDingtalkUserId',
        'email' => 'setEmail',
        'externalId' => 'setExternalId',
        'hotlineConfig' => 'setHotlineConfig',
        'id' => 'setId',
        'jobNumber' => 'setJobNumber',
        'lastLoginTime' => 'setLastLoginTime',
        'mobile' => 'setMobile',
        'nickName' => 'setNickName',
        'profile' => 'setProfile',
        'realName' => 'setRealName',
        'roleIds' => 'setRoleIds',
        'status' => 'setStatus',
        'type' => 'setType',
        'updateTime' => 'setUpdateTime',
        'updaterId' => 'setUpdaterId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'answeringMode' => 'getAnsweringMode',
        'avatar' => 'getAvatar',
        'ccsInstanceIds' => 'getCcsInstanceIds',
        'chatConfig' => 'getChatConfig',
        'createTime' => 'getCreateTime',
        'creatorId' => 'getCreatorId',
        'dingtalkUserId' => 'getDingtalkUserId',
        'email' => 'getEmail',
        'externalId' => 'getExternalId',
        'hotlineConfig' => 'getHotlineConfig',
        'id' => 'getId',
        'jobNumber' => 'getJobNumber',
        'lastLoginTime' => 'getLastLoginTime',
        'mobile' => 'getMobile',
        'nickName' => 'getNickName',
        'profile' => 'getProfile',
        'realName' => 'getRealName',
        'roleIds' => 'getRoleIds',
        'status' => 'getStatus',
        'type' => 'getType',
        'updateTime' => 'getUpdateTime',
        'updaterId' => 'getUpdaterId'
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
        $this->container['answeringMode'] = $data['answeringMode'] ?? null;
        $this->container['avatar'] = $data['avatar'] ?? null;
        $this->container['ccsInstanceIds'] = $data['ccsInstanceIds'] ?? null;
        $this->container['chatConfig'] = $data['chatConfig'] ?? null;
        $this->container['createTime'] = $data['createTime'] ?? null;
        $this->container['creatorId'] = $data['creatorId'] ?? null;
        $this->container['dingtalkUserId'] = $data['dingtalkUserId'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['externalId'] = $data['externalId'] ?? null;
        $this->container['hotlineConfig'] = $data['hotlineConfig'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['jobNumber'] = $data['jobNumber'] ?? null;
        $this->container['lastLoginTime'] = $data['lastLoginTime'] ?? null;
        $this->container['mobile'] = $data['mobile'] ?? null;
        $this->container['nickName'] = $data['nickName'] ?? null;
        $this->container['profile'] = $data['profile'] ?? null;
        $this->container['realName'] = $data['realName'] ?? null;
        $this->container['roleIds'] = $data['roleIds'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['updateTime'] = $data['updateTime'] ?? null;
        $this->container['updaterId'] = $data['updaterId'] ?? null;
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
     * Gets answeringMode
     *
     * @return string|null
     */
    public function getAnsweringMode()
    {
        return $this->container['answeringMode'];
    }

    /**
     * Sets answeringMode
     *
     * @param string|null $answeringMode 热线接入方式： 0：话机 1：电脑耳机；2：webrtc
     *
     * @return self
     */
    public function setAnsweringMode($answeringMode)
    {
        $this->container['answeringMode'] = $answeringMode;

        return $this;
    }

    /**
     * Gets avatar
     *
     * @return string|null
     */
    public function getAvatar()
    {
        return $this->container['avatar'];
    }

    /**
     * Sets avatar
     *
     * @param string|null $avatar 头像的oss file key
     *
     * @return self
     */
    public function setAvatar($avatar)
    {
        $this->container['avatar'] = $avatar;

        return $this;
    }

    /**
     * Gets ccsInstanceIds
     *
     * @return string[]|null
     */
    public function getCcsInstanceIds()
    {
        return $this->container['ccsInstanceIds'];
    }

    /**
     * Sets ccsInstanceIds
     *
     * @param string[]|null $ccsInstanceIds 客服关联的数据权限id列表
     *
     * @return self
     */
    public function setCcsInstanceIds($ccsInstanceIds)
    {
        $this->container['ccsInstanceIds'] = $ccsInstanceIds;

        return $this;
    }

    /**
     * Gets chatConfig
     *
     * @return \Alipay\OpenAPISDK\Model\AgentChatInfo[]|null
     */
    public function getChatConfig()
    {
        return $this->container['chatConfig'];
    }

    /**
     * Sets chatConfig
     *
     * @param \Alipay\OpenAPISDK\Model\AgentChatInfo[]|null $chatConfig 客服在线信息
     *
     * @return self
     */
    public function setChatConfig($chatConfig)
    {
        $this->container['chatConfig'] = $chatConfig;

        return $this;
    }

    /**
     * Gets createTime
     *
     * @return string|null
     */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
     * Sets createTime
     *
     * @param string|null $createTime 创建时间，采用UTC时间，按照ISO8601标准表示，格式为：yyyy-MM-dd'T'HH:mm:ss'Z
     *
     * @return self
     */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;

        return $this;
    }

    /**
     * Gets creatorId
     *
     * @return string|null
     */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
     * Sets creatorId
     *
     * @param string|null $creatorId 创建人id
     *
     * @return self
     */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;

        return $this;
    }

    /**
     * Gets dingtalkUserId
     *
     * @return string|null
     */
    public function getDingtalkUserId()
    {
        return $this->container['dingtalkUserId'];
    }

    /**
     * Sets dingtalkUserId
     *
     * @param string|null $dingtalkUserId 钉钉user_id
     *
     * @return self
     */
    public function setDingtalkUserId($dingtalkUserId)
    {
        $this->container['dingtalkUserId'] = $dingtalkUserId;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email 邮箱
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets externalId
     *
     * @return string|null
     */
    public function getExternalId()
    {
        return $this->container['externalId'];
    }

    /**
     * Sets externalId
     *
     * @param string|null $externalId 外部系统用户id,比如：金融云的用户id
     *
     * @return self
     */
    public function setExternalId($externalId)
    {
        $this->container['externalId'] = $externalId;

        return $this;
    }

    /**
     * Gets hotlineConfig
     *
     * @return \Alipay\OpenAPISDK\Model\AgentHotlineInfo[]|null
     */
    public function getHotlineConfig()
    {
        return $this->container['hotlineConfig'];
    }

    /**
     * Sets hotlineConfig
     *
     * @param \Alipay\OpenAPISDK\Model\AgentHotlineInfo[]|null $hotlineConfig 客服热线信息
     *
     * @return self
     */
    public function setHotlineConfig($hotlineConfig)
    {
        $this->container['hotlineConfig'] = $hotlineConfig;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id 客服id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets jobNumber
     *
     * @return string|null
     */
    public function getJobNumber()
    {
        return $this->container['jobNumber'];
    }

    /**
     * Sets jobNumber
     *
     * @param string|null $jobNumber 工号
     *
     * @return self
     */
    public function setJobNumber($jobNumber)
    {
        $this->container['jobNumber'] = $jobNumber;

        return $this;
    }

    /**
     * Gets lastLoginTime
     *
     * @return string|null
     */
    public function getLastLoginTime()
    {
        return $this->container['lastLoginTime'];
    }

    /**
     * Sets lastLoginTime
     *
     * @param string|null $lastLoginTime 客服上次登录时间 采用UTC时间，按照ISO8601标准表示，格式为：yyyy-MM-dd'T'HH:mm:ss'Z'
     *
     * @return self
     */
    public function setLastLoginTime($lastLoginTime)
    {
        $this->container['lastLoginTime'] = $lastLoginTime;

        return $this;
    }

    /**
     * Gets mobile
     *
     * @return string|null
     */
    public function getMobile()
    {
        return $this->container['mobile'];
    }

    /**
     * Sets mobile
     *
     * @param string|null $mobile 手机号
     *
     * @return self
     */
    public function setMobile($mobile)
    {
        $this->container['mobile'] = $mobile;

        return $this;
    }

    /**
     * Gets nickName
     *
     * @return string|null
     */
    public function getNickName()
    {
        return $this->container['nickName'];
    }

    /**
     * Sets nickName
     *
     * @param string|null $nickName 客服昵称
     *
     * @return self
     */
    public function setNickName($nickName)
    {
        $this->container['nickName'] = $nickName;

        return $this;
    }

    /**
     * Gets profile
     *
     * @return string|null
     */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
     * Sets profile
     *
     * @param string|null $profile 个人简介
     *
     * @return self
     */
    public function setProfile($profile)
    {
        $this->container['profile'] = $profile;

        return $this;
    }

    /**
     * Gets realName
     *
     * @return string|null
     */
    public function getRealName()
    {
        return $this->container['realName'];
    }

    /**
     * Sets realName
     *
     * @param string|null $realName 客服姓名
     *
     * @return self
     */
    public function setRealName($realName)
    {
        $this->container['realName'] = $realName;

        return $this;
    }

    /**
     * Gets roleIds
     *
     * @return \Alipay\OpenAPISDK\Model\RoleId[]|null
     */
    public function getRoleIds()
    {
        return $this->container['roleIds'];
    }

    /**
     * Sets roleIds
     *
     * @param \Alipay\OpenAPISDK\Model\RoleId[]|null $roleIds 角色id列表
     *
     * @return self
     */
    public function setRoleIds($roleIds)
    {
        $this->container['roleIds'] = $roleIds;

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
     * @param string|null $status 客服状态：NORMAL，DELETE
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type 用户类型：NORMAL（普通客服），ADMIN（超级管理员，不能被删除）
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets updateTime
     *
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
     * Sets updateTime
     *
     * @param string|null $updateTime 最后修改时间，采用UTC时间，按照ISO8601标准表示，格式为：yyyy-MM-dd'T'HH:mm:ss'Z'
     *
     * @return self
     */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;

        return $this;
    }

    /**
     * Gets updaterId
     *
     * @return string|null
     */
    public function getUpdaterId()
    {
        return $this->container['updaterId'];
    }

    /**
     * Sets updaterId
     *
     * @param string|null $updaterId 最后修改人id
     *
     * @return self
     */
    public function setUpdaterId($updaterId)
    {
        $this->container['updaterId'] = $updaterId;

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


