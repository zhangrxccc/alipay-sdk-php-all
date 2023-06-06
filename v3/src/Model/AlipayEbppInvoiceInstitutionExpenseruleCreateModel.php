<?php
/**
 * AlipayEbppInvoiceInstitutionExpenseruleCreateModel
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
 * The version of the OpenAPI document: 2023-06-06
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
 * AlipayEbppInvoiceInstitutionExpenseruleCreateModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayEbppInvoiceInstitutionExpenseruleCreateModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayEbppInvoiceInstitutionExpenseruleCreateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'string',
        'agreementNo' => 'string',
        'consumeMode' => 'string',
        'enterpriseId' => 'string',
        'expenseCtrlRuleInfoList' => '\Alipay\OpenAPISDK\Model\ExpenseCtrRuleInfo',
        'expenseTypeSubCategory' => 'string',
        'institutionId' => 'string',
        'openRuleId' => 'string',
        'paymentPolicy' => 'string',
        'standardConditionInfoList' => '\Alipay\OpenAPISDK\Model\StandardConditionInfo[]',
        'standardDesc' => 'string',
        'standardName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'accountId' => null,
        'agreementNo' => null,
        'consumeMode' => null,
        'enterpriseId' => null,
        'expenseCtrlRuleInfoList' => null,
        'expenseTypeSubCategory' => null,
        'institutionId' => null,
        'openRuleId' => null,
        'paymentPolicy' => null,
        'standardConditionInfoList' => null,
        'standardDesc' => null,
        'standardName' => null
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
        'accountId' => 'account_id',
        'agreementNo' => 'agreement_no',
        'consumeMode' => 'consume_mode',
        'enterpriseId' => 'enterprise_id',
        'expenseCtrlRuleInfoList' => 'expense_ctrl_rule_info_list',
        'expenseTypeSubCategory' => 'expense_type_sub_category',
        'institutionId' => 'institution_id',
        'openRuleId' => 'open_rule_id',
        'paymentPolicy' => 'payment_policy',
        'standardConditionInfoList' => 'standard_condition_info_list',
        'standardDesc' => 'standard_desc',
        'standardName' => 'standard_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'agreementNo' => 'setAgreementNo',
        'consumeMode' => 'setConsumeMode',
        'enterpriseId' => 'setEnterpriseId',
        'expenseCtrlRuleInfoList' => 'setExpenseCtrlRuleInfoList',
        'expenseTypeSubCategory' => 'setExpenseTypeSubCategory',
        'institutionId' => 'setInstitutionId',
        'openRuleId' => 'setOpenRuleId',
        'paymentPolicy' => 'setPaymentPolicy',
        'standardConditionInfoList' => 'setStandardConditionInfoList',
        'standardDesc' => 'setStandardDesc',
        'standardName' => 'setStandardName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'agreementNo' => 'getAgreementNo',
        'consumeMode' => 'getConsumeMode',
        'enterpriseId' => 'getEnterpriseId',
        'expenseCtrlRuleInfoList' => 'getExpenseCtrlRuleInfoList',
        'expenseTypeSubCategory' => 'getExpenseTypeSubCategory',
        'institutionId' => 'getInstitutionId',
        'openRuleId' => 'getOpenRuleId',
        'paymentPolicy' => 'getPaymentPolicy',
        'standardConditionInfoList' => 'getStandardConditionInfoList',
        'standardDesc' => 'getStandardDesc',
        'standardName' => 'getStandardName'
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
        $this->container['accountId'] = $data['accountId'] ?? null;
        $this->container['agreementNo'] = $data['agreementNo'] ?? null;
        $this->container['consumeMode'] = $data['consumeMode'] ?? null;
        $this->container['enterpriseId'] = $data['enterpriseId'] ?? null;
        $this->container['expenseCtrlRuleInfoList'] = $data['expenseCtrlRuleInfoList'] ?? null;
        $this->container['expenseTypeSubCategory'] = $data['expenseTypeSubCategory'] ?? null;
        $this->container['institutionId'] = $data['institutionId'] ?? null;
        $this->container['openRuleId'] = $data['openRuleId'] ?? null;
        $this->container['paymentPolicy'] = $data['paymentPolicy'] ?? null;
        $this->container['standardConditionInfoList'] = $data['standardConditionInfoList'] ?? null;
        $this->container['standardDesc'] = $data['standardDesc'] ?? null;
        $this->container['standardName'] = $data['standardName'] ?? null;
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
     * Gets accountId
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param string|null $accountId 企业共同账户id，和授权签约协议号共同使用。
     *
     * @return self
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets agreementNo
     *
     * @return string|null
     */
    public function getAgreementNo()
    {
        return $this->container['agreementNo'];
    }

    /**
     * Sets agreementNo
     *
     * @param string|null $agreementNo 授权签约协议号，可通过签约消息获取。配合企业共同账户id使用，当填写企业共同账户id时，此字段必填。
     *
     * @return self
     */
    public function setAgreementNo($agreementNo)
    {
        $this->container['agreementNo'] = $agreementNo;

        return $this;
    }

    /**
     * Gets consumeMode
     *
     * @return string|null
     */
    public function getConsumeMode()
    {
        return $this->container['consumeMode'];
    }

    /**
     * Sets consumeMode
     *
     * @param string|null $consumeMode 消费模式，该使用规则支持消费的资产类型，不填为默认模式，默认模式为优先消费余额，没有余额则根据规则中设置的限额控制消费金额
     *
     * @return self
     */
    public function setConsumeMode($consumeMode)
    {
        $this->container['consumeMode'] = $consumeMode;

        return $this;
    }

    /**
     * Gets enterpriseId
     *
     * @return string|null
     */
    public function getEnterpriseId()
    {
        return $this->container['enterpriseId'];
    }

    /**
     * Sets enterpriseId
     *
     * @param string|null $enterpriseId 企业码id
     *
     * @return self
     */
    public function setEnterpriseId($enterpriseId)
    {
        $this->container['enterpriseId'] = $enterpriseId;

        return $this;
    }

    /**
     * Gets expenseCtrlRuleInfoList
     *
     * @return \Alipay\OpenAPISDK\Model\ExpenseCtrRuleInfo|null
     */
    public function getExpenseCtrlRuleInfoList()
    {
        return $this->container['expenseCtrlRuleInfoList'];
    }

    /**
     * Sets expenseCtrlRuleInfoList
     *
     * @param \Alipay\OpenAPISDK\Model\ExpenseCtrRuleInfo|null $expenseCtrlRuleInfoList expenseCtrlRuleInfoList
     *
     * @return self
     */
    public function setExpenseCtrlRuleInfoList($expenseCtrlRuleInfoList)
    {
        $this->container['expenseCtrlRuleInfoList'] = $expenseCtrlRuleInfoList;

        return $this;
    }

    /**
     * Gets expenseTypeSubCategory
     *
     * @return string|null
     */
    public function getExpenseTypeSubCategory()
    {
        return $this->container['expenseTypeSubCategory'];
    }

    /**
     * Sets expenseTypeSubCategory
     *
     * @param string|null $expenseTypeSubCategory 费用类型子类，当制度的费用类型为MEAL时，支持到店、外卖；当费用类型为非MEAL时，与费用类型保持一致
     *
     * @return self
     */
    public function setExpenseTypeSubCategory($expenseTypeSubCategory)
    {
        $this->container['expenseTypeSubCategory'] = $expenseTypeSubCategory;

        return $this;
    }

    /**
     * Gets institutionId
     *
     * @return string|null
     */
    public function getInstitutionId()
    {
        return $this->container['institutionId'];
    }

    /**
     * Sets institutionId
     *
     * @param string|null $institutionId 制度id
     *
     * @return self
     */
    public function setInstitutionId($institutionId)
    {
        $this->container['institutionId'] = $institutionId;

        return $this;
    }

    /**
     * Gets openRuleId
     *
     * @return string|null
     */
    public function getOpenRuleId()
    {
        return $this->container['openRuleId'];
    }

    /**
     * Sets openRuleId
     *
     * @param string|null $openRuleId 开票规则id，若使用途径是外卖的使用规则需要开票，需要在创建使用规则时关联开票规则，后续变更关联开票规则不生效
     *
     * @return self
     */
    public function setOpenRuleId($openRuleId)
    {
        $this->container['openRuleId'] = $openRuleId;

        return $this;
    }

    /**
     * Gets paymentPolicy
     *
     * @return string|null
     */
    public function getPaymentPolicy()
    {
        return $this->container['paymentPolicy'];
    }

    /**
     * Sets paymentPolicy
     *
     * @param string|null $paymentPolicy 当笔消费金额大于规则可用余额时，用于控制支付策略，该字段缺省时采取因公账户和个人账户组合支付策略
     *
     * @return self
     */
    public function setPaymentPolicy($paymentPolicy)
    {
        $this->container['paymentPolicy'] = $paymentPolicy;

        return $this;
    }

    /**
     * Gets standardConditionInfoList
     *
     * @return \Alipay\OpenAPISDK\Model\StandardConditionInfo[]|null
     */
    public function getStandardConditionInfoList()
    {
        return $this->container['standardConditionInfoList'];
    }

    /**
     * Sets standardConditionInfoList
     *
     * @param \Alipay\OpenAPISDK\Model\StandardConditionInfo[]|null $standardConditionInfoList 使用规则条件列表
     *
     * @return self
     */
    public function setStandardConditionInfoList($standardConditionInfoList)
    {
        $this->container['standardConditionInfoList'] = $standardConditionInfoList;

        return $this;
    }

    /**
     * Gets standardDesc
     *
     * @return string|null
     */
    public function getStandardDesc()
    {
        return $this->container['standardDesc'];
    }

    /**
     * Sets standardDesc
     *
     * @param string|null $standardDesc 使用规则描述(敏感词校验)
     *
     * @return self
     */
    public function setStandardDesc($standardDesc)
    {
        $this->container['standardDesc'] = $standardDesc;

        return $this;
    }

    /**
     * Gets standardName
     *
     * @return string|null
     */
    public function getStandardName()
    {
        return $this->container['standardName'];
    }

    /**
     * Sets standardName
     *
     * @param string|null $standardName 费控规则名称 特殊说明： 1）敏感词校验
     *
     * @return self
     */
    public function setStandardName($standardName)
    {
        $this->container['standardName'] = $standardName;

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

