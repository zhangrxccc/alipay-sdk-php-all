<?php
/**
 * EmployeeInfoDTO
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
 * EmployeeInfoDTO Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EmployeeInfoDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmployeeInfoDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'activate' => 'string',
        'departmentList' => '\Alipay\OpenAPISDK\Model\EmployeeDepartmentDTO[]',
        'email' => 'string',
        'employeeCertNo' => 'string',
        'employeeCertType' => 'string',
        'employeeId' => 'string',
        'employeeName' => 'string',
        'employeeNo' => 'string',
        'encryptCertNo' => 'string',
        'encryptMobile' => 'string',
        'gmtCreate' => 'string',
        'gmtModified' => 'string',
        'iotFaceStatus' => 'string',
        'iotUniqueId' => 'string',
        'iotVid' => 'string',
        'mobile' => 'string',
        'openId' => 'string',
        'profiles' => 'string',
        'roleList' => 'string[]',
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
        'activate' => null,
        'departmentList' => null,
        'email' => null,
        'employeeCertNo' => null,
        'employeeCertType' => null,
        'employeeId' => null,
        'employeeName' => null,
        'employeeNo' => null,
        'encryptCertNo' => null,
        'encryptMobile' => null,
        'gmtCreate' => null,
        'gmtModified' => null,
        'iotFaceStatus' => null,
        'iotUniqueId' => null,
        'iotVid' => null,
        'mobile' => null,
        'openId' => null,
        'profiles' => null,
        'roleList' => null,
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
        'activate' => 'activate',
        'departmentList' => 'department_list',
        'email' => 'email',
        'employeeCertNo' => 'employee_cert_no',
        'employeeCertType' => 'employee_cert_type',
        'employeeId' => 'employee_id',
        'employeeName' => 'employee_name',
        'employeeNo' => 'employee_no',
        'encryptCertNo' => 'encrypt_cert_no',
        'encryptMobile' => 'encrypt_mobile',
        'gmtCreate' => 'gmt_create',
        'gmtModified' => 'gmt_modified',
        'iotFaceStatus' => 'iot_face_status',
        'iotUniqueId' => 'iot_unique_id',
        'iotVid' => 'iot_vid',
        'mobile' => 'mobile',
        'openId' => 'open_id',
        'profiles' => 'profiles',
        'roleList' => 'role_list',
        'userId' => 'user_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activate' => 'setActivate',
        'departmentList' => 'setDepartmentList',
        'email' => 'setEmail',
        'employeeCertNo' => 'setEmployeeCertNo',
        'employeeCertType' => 'setEmployeeCertType',
        'employeeId' => 'setEmployeeId',
        'employeeName' => 'setEmployeeName',
        'employeeNo' => 'setEmployeeNo',
        'encryptCertNo' => 'setEncryptCertNo',
        'encryptMobile' => 'setEncryptMobile',
        'gmtCreate' => 'setGmtCreate',
        'gmtModified' => 'setGmtModified',
        'iotFaceStatus' => 'setIotFaceStatus',
        'iotUniqueId' => 'setIotUniqueId',
        'iotVid' => 'setIotVid',
        'mobile' => 'setMobile',
        'openId' => 'setOpenId',
        'profiles' => 'setProfiles',
        'roleList' => 'setRoleList',
        'userId' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activate' => 'getActivate',
        'departmentList' => 'getDepartmentList',
        'email' => 'getEmail',
        'employeeCertNo' => 'getEmployeeCertNo',
        'employeeCertType' => 'getEmployeeCertType',
        'employeeId' => 'getEmployeeId',
        'employeeName' => 'getEmployeeName',
        'employeeNo' => 'getEmployeeNo',
        'encryptCertNo' => 'getEncryptCertNo',
        'encryptMobile' => 'getEncryptMobile',
        'gmtCreate' => 'getGmtCreate',
        'gmtModified' => 'getGmtModified',
        'iotFaceStatus' => 'getIotFaceStatus',
        'iotUniqueId' => 'getIotUniqueId',
        'iotVid' => 'getIotVid',
        'mobile' => 'getMobile',
        'openId' => 'getOpenId',
        'profiles' => 'getProfiles',
        'roleList' => 'getRoleList',
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
        $this->container['activate'] = $data['activate'] ?? null;
        $this->container['departmentList'] = $data['departmentList'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['employeeCertNo'] = $data['employeeCertNo'] ?? null;
        $this->container['employeeCertType'] = $data['employeeCertType'] ?? null;
        $this->container['employeeId'] = $data['employeeId'] ?? null;
        $this->container['employeeName'] = $data['employeeName'] ?? null;
        $this->container['employeeNo'] = $data['employeeNo'] ?? null;
        $this->container['encryptCertNo'] = $data['encryptCertNo'] ?? null;
        $this->container['encryptMobile'] = $data['encryptMobile'] ?? null;
        $this->container['gmtCreate'] = $data['gmtCreate'] ?? null;
        $this->container['gmtModified'] = $data['gmtModified'] ?? null;
        $this->container['iotFaceStatus'] = $data['iotFaceStatus'] ?? null;
        $this->container['iotUniqueId'] = $data['iotUniqueId'] ?? null;
        $this->container['iotVid'] = $data['iotVid'] ?? null;
        $this->container['mobile'] = $data['mobile'] ?? null;
        $this->container['openId'] = $data['openId'] ?? null;
        $this->container['profiles'] = $data['profiles'] ?? null;
        $this->container['roleList'] = $data['roleList'] ?? null;
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
     * Gets activate
     *
     * @return string|null
     */
    public function getActivate()
    {
        return $this->container['activate'];
    }

    /**
     * Sets activate
     *
     * @param string|null $activate 是否激活
     *
     * @return self
     */
    public function setActivate($activate)
    {
        $this->container['activate'] = $activate;

        return $this;
    }

    /**
     * Gets departmentList
     *
     * @return \Alipay\OpenAPISDK\Model\EmployeeDepartmentDTO[]|null
     */
    public function getDepartmentList()
    {
        return $this->container['departmentList'];
    }

    /**
     * Sets departmentList
     *
     * @param \Alipay\OpenAPISDK\Model\EmployeeDepartmentDTO[]|null $departmentList 员工所属部门列表
     *
     * @return self
     */
    public function setDepartmentList($departmentList)
    {
        $this->container['departmentList'] = $departmentList;

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
     * @param string|null $email 员工邮箱
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets employeeCertNo
     *
     * @return string|null
     */
    public function getEmployeeCertNo()
    {
        return $this->container['employeeCertNo'];
    }

    /**
     * Sets employeeCertNo
     *
     * @param string|null $employeeCertNo 证件号
     *
     * @return self
     */
    public function setEmployeeCertNo($employeeCertNo)
    {
        $this->container['employeeCertNo'] = $employeeCertNo;

        return $this;
    }

    /**
     * Gets employeeCertType
     *
     * @return string|null
     */
    public function getEmployeeCertType()
    {
        return $this->container['employeeCertType'];
    }

    /**
     * Sets employeeCertType
     *
     * @param string|null $employeeCertType 证件类型
     *
     * @return self
     */
    public function setEmployeeCertType($employeeCertType)
    {
        $this->container['employeeCertType'] = $employeeCertType;

        return $this;
    }

    /**
     * Gets employeeId
     *
     * @return string|null
     */
    public function getEmployeeId()
    {
        return $this->container['employeeId'];
    }

    /**
     * Sets employeeId
     *
     * @param string|null $employeeId 员工id
     *
     * @return self
     */
    public function setEmployeeId($employeeId)
    {
        $this->container['employeeId'] = $employeeId;

        return $this;
    }

    /**
     * Gets employeeName
     *
     * @return string|null
     */
    public function getEmployeeName()
    {
        return $this->container['employeeName'];
    }

    /**
     * Sets employeeName
     *
     * @param string|null $employeeName 员工姓名
     *
     * @return self
     */
    public function setEmployeeName($employeeName)
    {
        $this->container['employeeName'] = $employeeName;

        return $this;
    }

    /**
     * Gets employeeNo
     *
     * @return string|null
     */
    public function getEmployeeNo()
    {
        return $this->container['employeeNo'];
    }

    /**
     * Sets employeeNo
     *
     * @param string|null $employeeNo 员工编号/工号
     *
     * @return self
     */
    public function setEmployeeNo($employeeNo)
    {
        $this->container['employeeNo'] = $employeeNo;

        return $this;
    }

    /**
     * Gets encryptCertNo
     *
     * @return string|null
     */
    public function getEncryptCertNo()
    {
        return $this->container['encryptCertNo'];
    }

    /**
     * Sets encryptCertNo
     *
     * @param string|null $encryptCertNo 加密证件号（证件号转大写后使用SHA256加密），搭配证件号使用
     *
     * @return self
     */
    public function setEncryptCertNo($encryptCertNo)
    {
        $this->container['encryptCertNo'] = $encryptCertNo;

        return $this;
    }

    /**
     * Gets encryptMobile
     *
     * @return string|null
     */
    public function getEncryptMobile()
    {
        return $this->container['encryptMobile'];
    }

    /**
     * Sets encryptMobile
     *
     * @param string|null $encryptMobile 加密手机号（使用SHA256进行加密）
     *
     * @return self
     */
    public function setEncryptMobile($encryptMobile)
    {
        $this->container['encryptMobile'] = $encryptMobile;

        return $this;
    }

    /**
     * Gets gmtCreate
     *
     * @return string|null
     */
    public function getGmtCreate()
    {
        return $this->container['gmtCreate'];
    }

    /**
     * Sets gmtCreate
     *
     * @param string|null $gmtCreate 创建时间
     *
     * @return self
     */
    public function setGmtCreate($gmtCreate)
    {
        $this->container['gmtCreate'] = $gmtCreate;

        return $this;
    }

    /**
     * Gets gmtModified
     *
     * @return string|null
     */
    public function getGmtModified()
    {
        return $this->container['gmtModified'];
    }

    /**
     * Sets gmtModified
     *
     * @param string|null $gmtModified 变更时间
     *
     * @return self
     */
    public function setGmtModified($gmtModified)
    {
        $this->container['gmtModified'] = $gmtModified;

        return $this;
    }

    /**
     * Gets iotFaceStatus
     *
     * @return string|null
     */
    public function getIotFaceStatus()
    {
        return $this->container['iotFaceStatus'];
    }

    /**
     * Sets iotFaceStatus
     *
     * @param string|null $iotFaceStatus 员工是否人脸在库
     *
     * @return self
     */
    public function setIotFaceStatus($iotFaceStatus)
    {
        $this->container['iotFaceStatus'] = $iotFaceStatus;

        return $this;
    }

    /**
     * Gets iotUniqueId
     *
     * @return string|null
     */
    public function getIotUniqueId()
    {
        return $this->container['iotUniqueId'];
    }

    /**
     * Sets iotUniqueId
     *
     * @param string|null $iotUniqueId IOT开通刷脸支持唯一操作流水号，此处透出用于外部服务商通过该unique_id便捷调用IOT侧接口
     *
     * @return self
     */
    public function setIotUniqueId($iotUniqueId)
    {
        $this->container['iotUniqueId'] = $iotUniqueId;

        return $this;
    }

    /**
     * Gets iotVid
     *
     * @return string|null
     */
    public function getIotVid()
    {
        return $this->container['iotVid'];
    }

    /**
     * Sets iotVid
     *
     * @param string|null $iotVid 员工在企业人脸库的人脸唯一标识
     *
     * @return self
     */
    public function setIotVid($iotVid)
    {
        $this->container['iotVid'] = $iotVid;

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
     * @param string|null $mobile 手机号码
     *
     * @return self
     */
    public function setMobile($mobile)
    {
        $this->container['mobile'] = $mobile;

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
     * @param string|null $openId 用户ID（绑定支付宝账号的uid）
     *
     * @return self
     */
    public function setOpenId($openId)
    {
        $this->container['openId'] = $openId;

        return $this;
    }

    /**
     * Gets profiles
     *
     * @return string|null
     */
    public function getProfiles()
    {
        return $this->container['profiles'];
    }

    /**
     * Sets profiles
     *
     * @param string|null $profiles 个性化信息
     *
     * @return self
     */
    public function setProfiles($profiles)
    {
        $this->container['profiles'] = $profiles;

        return $this;
    }

    /**
     * Gets roleList
     *
     * @return string[]|null
     */
    public function getRoleList()
    {
        return $this->container['roleList'];
    }

    /**
     * Sets roleList
     *
     * @param string[]|null $roleList 角色列表
     *
     * @return self
     */
    public function setRoleList($roleList)
    {
        $this->container['roleList'] = $roleList;

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
     * @param string|null $userId 用户ID（绑定支付宝账号的uid）
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


