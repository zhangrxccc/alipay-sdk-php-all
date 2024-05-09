<?php
/**
 * UserInvoiceInfoOpenApiResponse
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
 * UserInvoiceInfoOpenApiResponse Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UserInvoiceInfoOpenApiResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserInvoiceInfoOpenApiResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'acceptElectronic' => 'bool',
        'address' => 'string',
        'auto' => 'bool',
        'bankAccount' => 'string',
        'bankName' => 'string',
        'businessLicenceUrl' => 'string',
        'creator' => 'string',
        'gmtCreate' => 'string',
        'gmtModified' => 'string',
        'hold' => 'bool',
        'id' => 'string',
        'ipId' => 'string',
        'lastModifier' => 'string',
        'openAccountPermitUrl' => 'string',
        'otherQualificationUrl' => 'string',
        'status' => 'string',
        'taskDate' => 'string',
        'taxNo' => 'string',
        'taxPayerQualification' => 'string',
        'taxQualificationUrl' => 'string',
        'taxRegCertUrl' => 'string',
        'taxpayerQualiValid' => 'string',
        'telephone' => 'string',
        'title' => 'string',
        'tntInstId' => 'string',
        'type' => 'string',
        'userMailInfoList' => '\Alipay\OpenAPISDK\Model\UserMailInfoVO[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'acceptElectronic' => null,
        'address' => null,
        'auto' => null,
        'bankAccount' => null,
        'bankName' => null,
        'businessLicenceUrl' => null,
        'creator' => null,
        'gmtCreate' => null,
        'gmtModified' => null,
        'hold' => null,
        'id' => null,
        'ipId' => null,
        'lastModifier' => null,
        'openAccountPermitUrl' => null,
        'otherQualificationUrl' => null,
        'status' => null,
        'taskDate' => null,
        'taxNo' => null,
        'taxPayerQualification' => null,
        'taxQualificationUrl' => null,
        'taxRegCertUrl' => null,
        'taxpayerQualiValid' => null,
        'telephone' => null,
        'title' => null,
        'tntInstId' => null,
        'type' => null,
        'userMailInfoList' => null
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
        'acceptElectronic' => 'accept_electronic',
        'address' => 'address',
        'auto' => 'auto',
        'bankAccount' => 'bank_account',
        'bankName' => 'bank_name',
        'businessLicenceUrl' => 'business_licence_url',
        'creator' => 'creator',
        'gmtCreate' => 'gmt_create',
        'gmtModified' => 'gmt_modified',
        'hold' => 'hold',
        'id' => 'id',
        'ipId' => 'ip_id',
        'lastModifier' => 'last_modifier',
        'openAccountPermitUrl' => 'open_account_permit_url',
        'otherQualificationUrl' => 'other_qualification_url',
        'status' => 'status',
        'taskDate' => 'task_date',
        'taxNo' => 'tax_no',
        'taxPayerQualification' => 'tax_payer_qualification',
        'taxQualificationUrl' => 'tax_qualification_url',
        'taxRegCertUrl' => 'tax_reg_cert_url',
        'taxpayerQualiValid' => 'taxpayer_quali_valid',
        'telephone' => 'telephone',
        'title' => 'title',
        'tntInstId' => 'tnt_inst_id',
        'type' => 'type',
        'userMailInfoList' => 'user_mail_info_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'acceptElectronic' => 'setAcceptElectronic',
        'address' => 'setAddress',
        'auto' => 'setAuto',
        'bankAccount' => 'setBankAccount',
        'bankName' => 'setBankName',
        'businessLicenceUrl' => 'setBusinessLicenceUrl',
        'creator' => 'setCreator',
        'gmtCreate' => 'setGmtCreate',
        'gmtModified' => 'setGmtModified',
        'hold' => 'setHold',
        'id' => 'setId',
        'ipId' => 'setIpId',
        'lastModifier' => 'setLastModifier',
        'openAccountPermitUrl' => 'setOpenAccountPermitUrl',
        'otherQualificationUrl' => 'setOtherQualificationUrl',
        'status' => 'setStatus',
        'taskDate' => 'setTaskDate',
        'taxNo' => 'setTaxNo',
        'taxPayerQualification' => 'setTaxPayerQualification',
        'taxQualificationUrl' => 'setTaxQualificationUrl',
        'taxRegCertUrl' => 'setTaxRegCertUrl',
        'taxpayerQualiValid' => 'setTaxpayerQualiValid',
        'telephone' => 'setTelephone',
        'title' => 'setTitle',
        'tntInstId' => 'setTntInstId',
        'type' => 'setType',
        'userMailInfoList' => 'setUserMailInfoList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'acceptElectronic' => 'getAcceptElectronic',
        'address' => 'getAddress',
        'auto' => 'getAuto',
        'bankAccount' => 'getBankAccount',
        'bankName' => 'getBankName',
        'businessLicenceUrl' => 'getBusinessLicenceUrl',
        'creator' => 'getCreator',
        'gmtCreate' => 'getGmtCreate',
        'gmtModified' => 'getGmtModified',
        'hold' => 'getHold',
        'id' => 'getId',
        'ipId' => 'getIpId',
        'lastModifier' => 'getLastModifier',
        'openAccountPermitUrl' => 'getOpenAccountPermitUrl',
        'otherQualificationUrl' => 'getOtherQualificationUrl',
        'status' => 'getStatus',
        'taskDate' => 'getTaskDate',
        'taxNo' => 'getTaxNo',
        'taxPayerQualification' => 'getTaxPayerQualification',
        'taxQualificationUrl' => 'getTaxQualificationUrl',
        'taxRegCertUrl' => 'getTaxRegCertUrl',
        'taxpayerQualiValid' => 'getTaxpayerQualiValid',
        'telephone' => 'getTelephone',
        'title' => 'getTitle',
        'tntInstId' => 'getTntInstId',
        'type' => 'getType',
        'userMailInfoList' => 'getUserMailInfoList'
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
        $this->container['acceptElectronic'] = $data['acceptElectronic'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['auto'] = $data['auto'] ?? null;
        $this->container['bankAccount'] = $data['bankAccount'] ?? null;
        $this->container['bankName'] = $data['bankName'] ?? null;
        $this->container['businessLicenceUrl'] = $data['businessLicenceUrl'] ?? null;
        $this->container['creator'] = $data['creator'] ?? null;
        $this->container['gmtCreate'] = $data['gmtCreate'] ?? null;
        $this->container['gmtModified'] = $data['gmtModified'] ?? null;
        $this->container['hold'] = $data['hold'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['ipId'] = $data['ipId'] ?? null;
        $this->container['lastModifier'] = $data['lastModifier'] ?? null;
        $this->container['openAccountPermitUrl'] = $data['openAccountPermitUrl'] ?? null;
        $this->container['otherQualificationUrl'] = $data['otherQualificationUrl'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['taskDate'] = $data['taskDate'] ?? null;
        $this->container['taxNo'] = $data['taxNo'] ?? null;
        $this->container['taxPayerQualification'] = $data['taxPayerQualification'] ?? null;
        $this->container['taxQualificationUrl'] = $data['taxQualificationUrl'] ?? null;
        $this->container['taxRegCertUrl'] = $data['taxRegCertUrl'] ?? null;
        $this->container['taxpayerQualiValid'] = $data['taxpayerQualiValid'] ?? null;
        $this->container['telephone'] = $data['telephone'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['tntInstId'] = $data['tntInstId'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['userMailInfoList'] = $data['userMailInfoList'] ?? null;
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
     * Gets acceptElectronic
     *
     * @return bool|null
     */
    public function getAcceptElectronic()
    {
        return $this->container['acceptElectronic'];
    }

    /**
     * Sets acceptElectronic
     *
     * @param bool|null $acceptElectronic (AR开票使用)是否接受电子票 true:是，false:否
     *
     * @return self
     */
    public function setAcceptElectronic($acceptElectronic)
    {
        $this->container['acceptElectronic'] = $acceptElectronic;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address 公司注册地址
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets auto
     *
     * @return bool|null
     */
    public function getAuto()
    {
        return $this->container['auto'];
    }

    /**
     * Sets auto
     *
     * @param bool|null $auto (AR开票使用)是否自动申请开票 true:是，false:否
     *
     * @return self
     */
    public function setAuto($auto)
    {
        $this->container['auto'] = $auto;

        return $this;
    }

    /**
     * Gets bankAccount
     *
     * @return string|null
     */
    public function getBankAccount()
    {
        return $this->container['bankAccount'];
    }

    /**
     * Sets bankAccount
     *
     * @param string|null $bankAccount 银行账户
     *
     * @return self
     */
    public function setBankAccount($bankAccount)
    {
        $this->container['bankAccount'] = $bankAccount;

        return $this;
    }

    /**
     * Gets bankName
     *
     * @return string|null
     */
    public function getBankName()
    {
        return $this->container['bankName'];
    }

    /**
     * Sets bankName
     *
     * @param string|null $bankName 开户行
     *
     * @return self
     */
    public function setBankName($bankName)
    {
        $this->container['bankName'] = $bankName;

        return $this;
    }

    /**
     * Gets businessLicenceUrl
     *
     * @return string|null
     */
    public function getBusinessLicenceUrl()
    {
        return $this->container['businessLicenceUrl'];
    }

    /**
     * Sets businessLicenceUrl
     *
     * @param string|null $businessLicenceUrl 营业执照地址
     *
     * @return self
     */
    public function setBusinessLicenceUrl($businessLicenceUrl)
    {
        $this->container['businessLicenceUrl'] = $businessLicenceUrl;

        return $this;
    }

    /**
     * Gets creator
     *
     * @return string|null
     */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
     * Sets creator
     *
     * @param string|null $creator 资料创建人
     *
     * @return self
     */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;

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
     * @param string|null $gmtModified 修改时间
     *
     * @return self
     */
    public function setGmtModified($gmtModified)
    {
        $this->container['gmtModified'] = $gmtModified;

        return $this;
    }

    /**
     * Gets hold
     *
     * @return bool|null
     */
    public function getHold()
    {
        return $this->container['hold'];
    }

    /**
     * Sets hold
     *
     * @param bool|null $hold (AR开票使用)是否暂停开票  true:暂停开票，false:可开票
     *
     * @return self
     */
    public function setHold($hold)
    {
        $this->container['hold'] = $hold;

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
     * @param string|null $id 开票资料ID
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets ipId
     *
     * @return string|null
     */
    public function getIpId()
    {
        return $this->container['ipId'];
    }

    /**
     * Sets ipId
     *
     * @param string|null $ipId 商户PID,  type=01时表示OU用户,填充的是InstId机构代码,例如Z50,  type=02时表示商户MID,  type=03时表示商户PID
     *
     * @return self
     */
    public function setIpId($ipId)
    {
        $this->container['ipId'] = $ipId;

        return $this;
    }

    /**
     * Gets lastModifier
     *
     * @return string|null
     */
    public function getLastModifier()
    {
        return $this->container['lastModifier'];
    }

    /**
     * Sets lastModifier
     *
     * @param string|null $lastModifier 最后修改人
     *
     * @return self
     */
    public function setLastModifier($lastModifier)
    {
        $this->container['lastModifier'] = $lastModifier;

        return $this;
    }

    /**
     * Gets openAccountPermitUrl
     *
     * @return string|null
     */
    public function getOpenAccountPermitUrl()
    {
        return $this->container['openAccountPermitUrl'];
    }

    /**
     * Sets openAccountPermitUrl
     *
     * @param string|null $openAccountPermitUrl 银行开户许可证地址
     *
     * @return self
     */
    public function setOpenAccountPermitUrl($openAccountPermitUrl)
    {
        $this->container['openAccountPermitUrl'] = $openAccountPermitUrl;

        return $this;
    }

    /**
     * Gets otherQualificationUrl
     *
     * @return string|null
     */
    public function getOtherQualificationUrl()
    {
        return $this->container['otherQualificationUrl'];
    }

    /**
     * Sets otherQualificationUrl
     *
     * @param string|null $otherQualificationUrl 其它资质证明地址
     *
     * @return self
     */
    public function setOtherQualificationUrl($otherQualificationUrl)
    {
        $this->container['otherQualificationUrl'] = $otherQualificationUrl;

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
     * @param string|null $status 资料状态，01：待审，02：已审(有效)， 03：已作废
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets taskDate
     *
     * @return string|null
     */
    public function getTaskDate()
    {
        return $this->container['taskDate'];
    }

    /**
     * Sets taskDate
     *
     * @param string|null $taskDate 上一次任务执行时间(针对自动开票场景),格式:YYYYMMDD
     *
     * @return self
     */
    public function setTaskDate($taskDate)
    {
        $this->container['taskDate'] = $taskDate;

        return $this;
    }

    /**
     * Gets taxNo
     *
     * @return string|null
     */
    public function getTaxNo()
    {
        return $this->container['taxNo'];
    }

    /**
     * Sets taxNo
     *
     * @param string|null $taxNo 纳税人识别号（购方税号）
     *
     * @return self
     */
    public function setTaxNo($taxNo)
    {
        $this->container['taxNo'] = $taxNo;

        return $this;
    }

    /**
     * Gets taxPayerQualification
     *
     * @return string|null
     */
    public function getTaxPayerQualification()
    {
        return $this->container['taxPayerQualification'];
    }

    /**
     * Sets taxPayerQualification
     *
     * @param string|null $taxPayerQualification 纳税人开票资格种类  01：一般纳税人，02：小规模纳税人
     *
     * @return self
     */
    public function setTaxPayerQualification($taxPayerQualification)
    {
        $this->container['taxPayerQualification'] = $taxPayerQualification;

        return $this;
    }

    /**
     * Gets taxQualificationUrl
     *
     * @return string|null
     */
    public function getTaxQualificationUrl()
    {
        return $this->container['taxQualificationUrl'];
    }

    /**
     * Sets taxQualificationUrl
     *
     * @param string|null $taxQualificationUrl 一般纳税人资格证书地址
     *
     * @return self
     */
    public function setTaxQualificationUrl($taxQualificationUrl)
    {
        $this->container['taxQualificationUrl'] = $taxQualificationUrl;

        return $this;
    }

    /**
     * Gets taxRegCertUrl
     *
     * @return string|null
     */
    public function getTaxRegCertUrl()
    {
        return $this->container['taxRegCertUrl'];
    }

    /**
     * Sets taxRegCertUrl
     *
     * @param string|null $taxRegCertUrl 税务登记证地址
     *
     * @return self
     */
    public function setTaxRegCertUrl($taxRegCertUrl)
    {
        $this->container['taxRegCertUrl'] = $taxRegCertUrl;

        return $this;
    }

    /**
     * Gets taxpayerQualiValid
     *
     * @return string|null
     */
    public function getTaxpayerQualiValid()
    {
        return $this->container['taxpayerQualiValid'];
    }

    /**
     * Sets taxpayerQualiValid
     *
     * @param string|null $taxpayerQualiValid 纳税人资格开始时间 （时间戳）
     *
     * @return self
     */
    public function setTaxpayerQualiValid($taxpayerQualiValid)
    {
        $this->container['taxpayerQualiValid'] = $taxpayerQualiValid;

        return $this;
    }

    /**
     * Gets telephone
     *
     * @return string|null
     */
    public function getTelephone()
    {
        return $this->container['telephone'];
    }

    /**
     * Sets telephone
     *
     * @param string|null $telephone 公司注册电话
     *
     * @return self
     */
    public function setTelephone($telephone)
    {
        $this->container['telephone'] = $telephone;

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
     * @param string|null $title 发票抬头
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets tntInstId
     *
     * @return string|null
     */
    public function getTntInstId()
    {
        return $this->container['tntInstId'];
    }

    /**
     * Sets tntInstId
     *
     * @param string|null $tntInstId 租户ID
     *
     * @return self
     */
    public function setTntInstId($tntInstId)
    {
        $this->container['tntInstId'] = $tntInstId;

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
     * @param string|null $type 开票资料用户类型   01：OU，02：商户，03：C用户
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets userMailInfoList
     *
     * @return \Alipay\OpenAPISDK\Model\UserMailInfoVO[]|null
     */
    public function getUserMailInfoList()
    {
        return $this->container['userMailInfoList'];
    }

    /**
     * Sets userMailInfoList
     *
     * @param \Alipay\OpenAPISDK\Model\UserMailInfoVO[]|null $userMailInfoList 收件人地址列表
     *
     * @return self
     */
    public function setUserMailInfoList($userMailInfoList)
    {
        $this->container['userMailInfoList'] = $userMailInfoList;

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


