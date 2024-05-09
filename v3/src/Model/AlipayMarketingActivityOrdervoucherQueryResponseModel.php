<?php
/**
 * AlipayMarketingActivityOrdervoucherQueryResponseModel
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
 * AlipayMarketingActivityOrdervoucherQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayMarketingActivityOrdervoucherQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayMarketingActivityOrdervoucherQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'activityBaseInfo' => '\Alipay\OpenAPISDK\Model\ActivityBaseInfo',
        'activityId' => 'string',
        'activityName' => 'string',
        'activityOperationStatus' => 'string',
        'activityStatus' => 'string',
        'belongMerchantInfo' => '\Alipay\OpenAPISDK\Model\BelongMerchantInfo',
        'bizTag' => 'string',
        'customerGuide' => '\Alipay\OpenAPISDK\Model\CustomerGuide',
        'publishEndTime' => 'string',
        'publishStartTime' => 'string',
        'summary' => '\Alipay\OpenAPISDK\Model\VoucherSummary',
        'voucherAvailableScopeInfo' => '\Alipay\OpenAPISDK\Model\VoucherAvailableScopeInfo',
        'voucherCustomerGuideInfo' => '\Alipay\OpenAPISDK\Model\VoucherCustomerGuideInfo',
        'voucherDeductInfo' => '\Alipay\OpenAPISDK\Model\VoucherDeductInfo',
        'voucherDisplayInfo' => '\Alipay\OpenAPISDK\Model\VoucherDisplayInfo',
        'voucherDisplayPatternInfo' => '\Alipay\OpenAPISDK\Model\VoucherDisplayPatternInfo',
        'voucherInventoryInfo' => '\Alipay\OpenAPISDK\Model\VoucherInventoryInfo',
        'voucherSendModeInfo' => '\Alipay\OpenAPISDK\Model\VoucherSendModeInfo',
        'voucherSendRule' => '\Alipay\OpenAPISDK\Model\VoucherSendRuleDetail',
        'voucherType' => 'string',
        'voucherUseRule' => '\Alipay\OpenAPISDK\Model\VoucherUseRule',
        'voucherUseRuleInfo' => '\Alipay\OpenAPISDK\Model\VoucherUseRuleInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'activityBaseInfo' => null,
        'activityId' => null,
        'activityName' => null,
        'activityOperationStatus' => null,
        'activityStatus' => null,
        'belongMerchantInfo' => null,
        'bizTag' => null,
        'customerGuide' => null,
        'publishEndTime' => null,
        'publishStartTime' => null,
        'summary' => null,
        'voucherAvailableScopeInfo' => null,
        'voucherCustomerGuideInfo' => null,
        'voucherDeductInfo' => null,
        'voucherDisplayInfo' => null,
        'voucherDisplayPatternInfo' => null,
        'voucherInventoryInfo' => null,
        'voucherSendModeInfo' => null,
        'voucherSendRule' => null,
        'voucherType' => null,
        'voucherUseRule' => null,
        'voucherUseRuleInfo' => null
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
        'activityBaseInfo' => 'activity_base_info',
        'activityId' => 'activity_id',
        'activityName' => 'activity_name',
        'activityOperationStatus' => 'activity_operation_status',
        'activityStatus' => 'activity_status',
        'belongMerchantInfo' => 'belong_merchant_info',
        'bizTag' => 'biz_tag',
        'customerGuide' => 'customer_guide',
        'publishEndTime' => 'publish_end_time',
        'publishStartTime' => 'publish_start_time',
        'summary' => 'summary',
        'voucherAvailableScopeInfo' => 'voucher_available_scope_info',
        'voucherCustomerGuideInfo' => 'voucher_customer_guide_info',
        'voucherDeductInfo' => 'voucher_deduct_info',
        'voucherDisplayInfo' => 'voucher_display_info',
        'voucherDisplayPatternInfo' => 'voucher_display_pattern_info',
        'voucherInventoryInfo' => 'voucher_inventory_info',
        'voucherSendModeInfo' => 'voucher_send_mode_info',
        'voucherSendRule' => 'voucher_send_rule',
        'voucherType' => 'voucher_type',
        'voucherUseRule' => 'voucher_use_rule',
        'voucherUseRuleInfo' => 'voucher_use_rule_info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activityBaseInfo' => 'setActivityBaseInfo',
        'activityId' => 'setActivityId',
        'activityName' => 'setActivityName',
        'activityOperationStatus' => 'setActivityOperationStatus',
        'activityStatus' => 'setActivityStatus',
        'belongMerchantInfo' => 'setBelongMerchantInfo',
        'bizTag' => 'setBizTag',
        'customerGuide' => 'setCustomerGuide',
        'publishEndTime' => 'setPublishEndTime',
        'publishStartTime' => 'setPublishStartTime',
        'summary' => 'setSummary',
        'voucherAvailableScopeInfo' => 'setVoucherAvailableScopeInfo',
        'voucherCustomerGuideInfo' => 'setVoucherCustomerGuideInfo',
        'voucherDeductInfo' => 'setVoucherDeductInfo',
        'voucherDisplayInfo' => 'setVoucherDisplayInfo',
        'voucherDisplayPatternInfo' => 'setVoucherDisplayPatternInfo',
        'voucherInventoryInfo' => 'setVoucherInventoryInfo',
        'voucherSendModeInfo' => 'setVoucherSendModeInfo',
        'voucherSendRule' => 'setVoucherSendRule',
        'voucherType' => 'setVoucherType',
        'voucherUseRule' => 'setVoucherUseRule',
        'voucherUseRuleInfo' => 'setVoucherUseRuleInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activityBaseInfo' => 'getActivityBaseInfo',
        'activityId' => 'getActivityId',
        'activityName' => 'getActivityName',
        'activityOperationStatus' => 'getActivityOperationStatus',
        'activityStatus' => 'getActivityStatus',
        'belongMerchantInfo' => 'getBelongMerchantInfo',
        'bizTag' => 'getBizTag',
        'customerGuide' => 'getCustomerGuide',
        'publishEndTime' => 'getPublishEndTime',
        'publishStartTime' => 'getPublishStartTime',
        'summary' => 'getSummary',
        'voucherAvailableScopeInfo' => 'getVoucherAvailableScopeInfo',
        'voucherCustomerGuideInfo' => 'getVoucherCustomerGuideInfo',
        'voucherDeductInfo' => 'getVoucherDeductInfo',
        'voucherDisplayInfo' => 'getVoucherDisplayInfo',
        'voucherDisplayPatternInfo' => 'getVoucherDisplayPatternInfo',
        'voucherInventoryInfo' => 'getVoucherInventoryInfo',
        'voucherSendModeInfo' => 'getVoucherSendModeInfo',
        'voucherSendRule' => 'getVoucherSendRule',
        'voucherType' => 'getVoucherType',
        'voucherUseRule' => 'getVoucherUseRule',
        'voucherUseRuleInfo' => 'getVoucherUseRuleInfo'
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
        $this->container['activityBaseInfo'] = $data['activityBaseInfo'] ?? null;
        $this->container['activityId'] = $data['activityId'] ?? null;
        $this->container['activityName'] = $data['activityName'] ?? null;
        $this->container['activityOperationStatus'] = $data['activityOperationStatus'] ?? null;
        $this->container['activityStatus'] = $data['activityStatus'] ?? null;
        $this->container['belongMerchantInfo'] = $data['belongMerchantInfo'] ?? null;
        $this->container['bizTag'] = $data['bizTag'] ?? null;
        $this->container['customerGuide'] = $data['customerGuide'] ?? null;
        $this->container['publishEndTime'] = $data['publishEndTime'] ?? null;
        $this->container['publishStartTime'] = $data['publishStartTime'] ?? null;
        $this->container['summary'] = $data['summary'] ?? null;
        $this->container['voucherAvailableScopeInfo'] = $data['voucherAvailableScopeInfo'] ?? null;
        $this->container['voucherCustomerGuideInfo'] = $data['voucherCustomerGuideInfo'] ?? null;
        $this->container['voucherDeductInfo'] = $data['voucherDeductInfo'] ?? null;
        $this->container['voucherDisplayInfo'] = $data['voucherDisplayInfo'] ?? null;
        $this->container['voucherDisplayPatternInfo'] = $data['voucherDisplayPatternInfo'] ?? null;
        $this->container['voucherInventoryInfo'] = $data['voucherInventoryInfo'] ?? null;
        $this->container['voucherSendModeInfo'] = $data['voucherSendModeInfo'] ?? null;
        $this->container['voucherSendRule'] = $data['voucherSendRule'] ?? null;
        $this->container['voucherType'] = $data['voucherType'] ?? null;
        $this->container['voucherUseRule'] = $data['voucherUseRule'] ?? null;
        $this->container['voucherUseRuleInfo'] = $data['voucherUseRuleInfo'] ?? null;
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
     * Gets activityBaseInfo
     *
     * @return \Alipay\OpenAPISDK\Model\ActivityBaseInfo|null
     */
    public function getActivityBaseInfo()
    {
        return $this->container['activityBaseInfo'];
    }

    /**
     * Sets activityBaseInfo
     *
     * @param \Alipay\OpenAPISDK\Model\ActivityBaseInfo|null $activityBaseInfo activityBaseInfo
     *
     * @return self
     */
    public function setActivityBaseInfo($activityBaseInfo)
    {
        $this->container['activityBaseInfo'] = $activityBaseInfo;

        return $this;
    }

    /**
     * Gets activityId
     *
     * @return string|null
     */
    public function getActivityId()
    {
        return $this->container['activityId'];
    }

    /**
     * Sets activityId
     *
     * @param string|null $activityId 活动id
     *
     * @return self
     */
    public function setActivityId($activityId)
    {
        $this->container['activityId'] = $activityId;

        return $this;
    }

    /**
     * Gets activityName
     *
     * @return string|null
     */
    public function getActivityName()
    {
        return $this->container['activityName'];
    }

    /**
     * Sets activityName
     *
     * @param string|null $activityName 活动名称。不对用户进行展示，仅供商家在后台管理活动使用。
     *
     * @return self
     */
    public function setActivityName($activityName)
    {
        $this->container['activityName'] = $activityName;

        return $this;
    }

    /**
     * Gets activityOperationStatus
     *
     * @return string|null
     */
    public function getActivityOperationStatus()
    {
        return $this->container['activityOperationStatus'];
    }

    /**
     * Sets activityOperationStatus
     *
     * @param string|null $activityOperationStatus 活动操作状态
     *
     * @return self
     */
    public function setActivityOperationStatus($activityOperationStatus)
    {
        $this->container['activityOperationStatus'] = $activityOperationStatus;

        return $this;
    }

    /**
     * Gets activityStatus
     *
     * @return string|null
     */
    public function getActivityStatus()
    {
        return $this->container['activityStatus'];
    }

    /**
     * Sets activityStatus
     *
     * @param string|null $activityStatus 活动状态。已激活状态代表活动正常运行，已终止状态代表商家终止活动，不可再发放。
     *
     * @return self
     */
    public function setActivityStatus($activityStatus)
    {
        $this->container['activityStatus'] = $activityStatus;

        return $this;
    }

    /**
     * Gets belongMerchantInfo
     *
     * @return \Alipay\OpenAPISDK\Model\BelongMerchantInfo|null
     */
    public function getBelongMerchantInfo()
    {
        return $this->container['belongMerchantInfo'];
    }

    /**
     * Sets belongMerchantInfo
     *
     * @param \Alipay\OpenAPISDK\Model\BelongMerchantInfo|null $belongMerchantInfo belongMerchantInfo
     *
     * @return self
     */
    public function setBelongMerchantInfo($belongMerchantInfo)
    {
        $this->container['belongMerchantInfo'] = $belongMerchantInfo;

        return $this;
    }

    /**
     * Gets bizTag
     *
     * @return string|null
     */
    public function getBizTag()
    {
        return $this->container['bizTag'];
    }

    /**
     * Sets bizTag
     *
     * @param string|null $bizTag 商家券业务标签，影响商家券对C端用户的展示形式。
     *
     * @return self
     */
    public function setBizTag($bizTag)
    {
        $this->container['bizTag'] = $bizTag;

        return $this;
    }

    /**
     * Gets customerGuide
     *
     * @return \Alipay\OpenAPISDK\Model\CustomerGuide|null
     */
    public function getCustomerGuide()
    {
        return $this->container['customerGuide'];
    }

    /**
     * Sets customerGuide
     *
     * @param \Alipay\OpenAPISDK\Model\CustomerGuide|null $customerGuide customerGuide
     *
     * @return self
     */
    public function setCustomerGuide($customerGuide)
    {
        $this->container['customerGuide'] = $customerGuide;

        return $this;
    }

    /**
     * Gets publishEndTime
     *
     * @return string|null
     */
    public function getPublishEndTime()
    {
        return $this->container['publishEndTime'];
    }

    /**
     * Sets publishEndTime
     *
     * @param string|null $publishEndTime 券发放结束时间。格式为：yyyy-MM-dd HH:mm:ss
     *
     * @return self
     */
    public function setPublishEndTime($publishEndTime)
    {
        $this->container['publishEndTime'] = $publishEndTime;

        return $this;
    }

    /**
     * Gets publishStartTime
     *
     * @return string|null
     */
    public function getPublishStartTime()
    {
        return $this->container['publishStartTime'];
    }

    /**
     * Sets publishStartTime
     *
     * @param string|null $publishStartTime 券发放开始时间。格式为：yyyy-MM-dd HH:mm:ss
     *
     * @return self
     */
    public function setPublishStartTime($publishStartTime)
    {
        $this->container['publishStartTime'] = $publishStartTime;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherSummary|null
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherSummary|null $summary summary
     *
     * @return self
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets voucherAvailableScopeInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherAvailableScopeInfo|null
     */
    public function getVoucherAvailableScopeInfo()
    {
        return $this->container['voucherAvailableScopeInfo'];
    }

    /**
     * Sets voucherAvailableScopeInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherAvailableScopeInfo|null $voucherAvailableScopeInfo voucherAvailableScopeInfo
     *
     * @return self
     */
    public function setVoucherAvailableScopeInfo($voucherAvailableScopeInfo)
    {
        $this->container['voucherAvailableScopeInfo'] = $voucherAvailableScopeInfo;

        return $this;
    }

    /**
     * Gets voucherCustomerGuideInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherCustomerGuideInfo|null
     */
    public function getVoucherCustomerGuideInfo()
    {
        return $this->container['voucherCustomerGuideInfo'];
    }

    /**
     * Sets voucherCustomerGuideInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherCustomerGuideInfo|null $voucherCustomerGuideInfo voucherCustomerGuideInfo
     *
     * @return self
     */
    public function setVoucherCustomerGuideInfo($voucherCustomerGuideInfo)
    {
        $this->container['voucherCustomerGuideInfo'] = $voucherCustomerGuideInfo;

        return $this;
    }

    /**
     * Gets voucherDeductInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherDeductInfo|null
     */
    public function getVoucherDeductInfo()
    {
        return $this->container['voucherDeductInfo'];
    }

    /**
     * Sets voucherDeductInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherDeductInfo|null $voucherDeductInfo voucherDeductInfo
     *
     * @return self
     */
    public function setVoucherDeductInfo($voucherDeductInfo)
    {
        $this->container['voucherDeductInfo'] = $voucherDeductInfo;

        return $this;
    }

    /**
     * Gets voucherDisplayInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherDisplayInfo|null
     */
    public function getVoucherDisplayInfo()
    {
        return $this->container['voucherDisplayInfo'];
    }

    /**
     * Sets voucherDisplayInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherDisplayInfo|null $voucherDisplayInfo voucherDisplayInfo
     *
     * @return self
     */
    public function setVoucherDisplayInfo($voucherDisplayInfo)
    {
        $this->container['voucherDisplayInfo'] = $voucherDisplayInfo;

        return $this;
    }

    /**
     * Gets voucherDisplayPatternInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherDisplayPatternInfo|null
     */
    public function getVoucherDisplayPatternInfo()
    {
        return $this->container['voucherDisplayPatternInfo'];
    }

    /**
     * Sets voucherDisplayPatternInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherDisplayPatternInfo|null $voucherDisplayPatternInfo voucherDisplayPatternInfo
     *
     * @return self
     */
    public function setVoucherDisplayPatternInfo($voucherDisplayPatternInfo)
    {
        $this->container['voucherDisplayPatternInfo'] = $voucherDisplayPatternInfo;

        return $this;
    }

    /**
     * Gets voucherInventoryInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherInventoryInfo|null
     */
    public function getVoucherInventoryInfo()
    {
        return $this->container['voucherInventoryInfo'];
    }

    /**
     * Sets voucherInventoryInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherInventoryInfo|null $voucherInventoryInfo voucherInventoryInfo
     *
     * @return self
     */
    public function setVoucherInventoryInfo($voucherInventoryInfo)
    {
        $this->container['voucherInventoryInfo'] = $voucherInventoryInfo;

        return $this;
    }

    /**
     * Gets voucherSendModeInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherSendModeInfo|null
     */
    public function getVoucherSendModeInfo()
    {
        return $this->container['voucherSendModeInfo'];
    }

    /**
     * Sets voucherSendModeInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherSendModeInfo|null $voucherSendModeInfo voucherSendModeInfo
     *
     * @return self
     */
    public function setVoucherSendModeInfo($voucherSendModeInfo)
    {
        $this->container['voucherSendModeInfo'] = $voucherSendModeInfo;

        return $this;
    }

    /**
     * Gets voucherSendRule
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherSendRuleDetail|null
     */
    public function getVoucherSendRule()
    {
        return $this->container['voucherSendRule'];
    }

    /**
     * Sets voucherSendRule
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherSendRuleDetail|null $voucherSendRule voucherSendRule
     *
     * @return self
     */
    public function setVoucherSendRule($voucherSendRule)
    {
        $this->container['voucherSendRule'] = $voucherSendRule;

        return $this;
    }

    /**
     * Gets voucherType
     *
     * @return string|null
     */
    public function getVoucherType()
    {
        return $this->container['voucherType'];
    }

    /**
     * Sets voucherType
     *
     * @param string|null $voucherType 券类型
     *
     * @return self
     */
    public function setVoucherType($voucherType)
    {
        $this->container['voucherType'] = $voucherType;

        return $this;
    }

    /**
     * Gets voucherUseRule
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherUseRule|null
     */
    public function getVoucherUseRule()
    {
        return $this->container['voucherUseRule'];
    }

    /**
     * Sets voucherUseRule
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherUseRule|null $voucherUseRule voucherUseRule
     *
     * @return self
     */
    public function setVoucherUseRule($voucherUseRule)
    {
        $this->container['voucherUseRule'] = $voucherUseRule;

        return $this;
    }

    /**
     * Gets voucherUseRuleInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherUseRuleInfo|null
     */
    public function getVoucherUseRuleInfo()
    {
        return $this->container['voucherUseRuleInfo'];
    }

    /**
     * Sets voucherUseRuleInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherUseRuleInfo|null $voucherUseRuleInfo voucherUseRuleInfo
     *
     * @return self
     */
    public function setVoucherUseRuleInfo($voucherUseRuleInfo)
    {
        $this->container['voucherUseRuleInfo'] = $voucherUseRuleInfo;

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


