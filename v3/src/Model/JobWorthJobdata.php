<?php
/**
 * JobWorthJobdata
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
 * JobWorthJobdata Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class JobWorthJobdata implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'JobWorthJobdata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'certificateGrantInstitution' => 'string',
        'certificateId' => 'string',
        'certificateLevel' => 'string',
        'certificateName' => 'string',
        'certificatePicId' => 'string',
        'companyName' => 'string',
        'degree' => 'string',
        'deliveryPositionId' => 'string',
        'deliveryTime' => 'int',
        'educationStatus' => 'string',
        'entryNo' => 'string',
        'examScore' => 'string',
        'headPicId' => 'string',
        'intentionCity' => 'string',
        'intentionCityName' => 'string',
        'issueDate' => 'string',
        'jobId' => 'string',
        'jobName' => 'string',
        'kaJobId' => 'string',
        'kaJobName' => 'string',
        'kaProfessionId' => 'string',
        'kaProfessionName' => 'string',
        'location' => 'string',
        'month' => 'string',
        'onceToken' => 'string',
        'professionId' => 'string',
        'professionName' => 'string',
        'salaryMax' => 'string',
        'salaryMin' => 'string',
        'salaryUnit' => 'string',
        'schoolName' => 'string',
        'skillName' => 'string',
        'startTime' => 'string',
        'type' => 'string',
        'validDateEnd' => 'string',
        'validDateStart' => 'string',
        'verifyStatus' => 'string',
        'workDesc' => 'string',
        'workEndTime' => 'string',
        'workPlace' => 'string',
        'workProperty' => 'string',
        'workStartTime' => 'string',
        'year' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'certificateGrantInstitution' => null,
        'certificateId' => null,
        'certificateLevel' => null,
        'certificateName' => null,
        'certificatePicId' => null,
        'companyName' => null,
        'degree' => null,
        'deliveryPositionId' => null,
        'deliveryTime' => null,
        'educationStatus' => null,
        'entryNo' => null,
        'examScore' => null,
        'headPicId' => null,
        'intentionCity' => null,
        'intentionCityName' => null,
        'issueDate' => null,
        'jobId' => null,
        'jobName' => null,
        'kaJobId' => null,
        'kaJobName' => null,
        'kaProfessionId' => null,
        'kaProfessionName' => null,
        'location' => null,
        'month' => null,
        'onceToken' => null,
        'professionId' => null,
        'professionName' => null,
        'salaryMax' => null,
        'salaryMin' => null,
        'salaryUnit' => null,
        'schoolName' => null,
        'skillName' => null,
        'startTime' => null,
        'type' => null,
        'validDateEnd' => null,
        'validDateStart' => null,
        'verifyStatus' => null,
        'workDesc' => null,
        'workEndTime' => null,
        'workPlace' => null,
        'workProperty' => null,
        'workStartTime' => null,
        'year' => null
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
        'certificateGrantInstitution' => 'certificate_grant_institution',
        'certificateId' => 'certificate_id',
        'certificateLevel' => 'certificate_level',
        'certificateName' => 'certificate_name',
        'certificatePicId' => 'certificate_pic_id',
        'companyName' => 'company_name',
        'degree' => 'degree',
        'deliveryPositionId' => 'delivery_position_id',
        'deliveryTime' => 'delivery_time',
        'educationStatus' => 'education_status',
        'entryNo' => 'entry_no',
        'examScore' => 'exam_score',
        'headPicId' => 'head_pic_id',
        'intentionCity' => 'intention_city',
        'intentionCityName' => 'intention_city_name',
        'issueDate' => 'issue_date',
        'jobId' => 'job_id',
        'jobName' => 'job_name',
        'kaJobId' => 'ka_job_id',
        'kaJobName' => 'ka_job_name',
        'kaProfessionId' => 'ka_profession_id',
        'kaProfessionName' => 'ka_profession_name',
        'location' => 'location',
        'month' => 'month',
        'onceToken' => 'once_token',
        'professionId' => 'profession_id',
        'professionName' => 'profession_name',
        'salaryMax' => 'salary_max',
        'salaryMin' => 'salary_min',
        'salaryUnit' => 'salary_unit',
        'schoolName' => 'school_name',
        'skillName' => 'skill_name',
        'startTime' => 'start_time',
        'type' => 'type',
        'validDateEnd' => 'valid_date_end',
        'validDateStart' => 'valid_date_start',
        'verifyStatus' => 'verify_status',
        'workDesc' => 'work_desc',
        'workEndTime' => 'work_end_time',
        'workPlace' => 'work_place',
        'workProperty' => 'work_property',
        'workStartTime' => 'work_start_time',
        'year' => 'year'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'certificateGrantInstitution' => 'setCertificateGrantInstitution',
        'certificateId' => 'setCertificateId',
        'certificateLevel' => 'setCertificateLevel',
        'certificateName' => 'setCertificateName',
        'certificatePicId' => 'setCertificatePicId',
        'companyName' => 'setCompanyName',
        'degree' => 'setDegree',
        'deliveryPositionId' => 'setDeliveryPositionId',
        'deliveryTime' => 'setDeliveryTime',
        'educationStatus' => 'setEducationStatus',
        'entryNo' => 'setEntryNo',
        'examScore' => 'setExamScore',
        'headPicId' => 'setHeadPicId',
        'intentionCity' => 'setIntentionCity',
        'intentionCityName' => 'setIntentionCityName',
        'issueDate' => 'setIssueDate',
        'jobId' => 'setJobId',
        'jobName' => 'setJobName',
        'kaJobId' => 'setKaJobId',
        'kaJobName' => 'setKaJobName',
        'kaProfessionId' => 'setKaProfessionId',
        'kaProfessionName' => 'setKaProfessionName',
        'location' => 'setLocation',
        'month' => 'setMonth',
        'onceToken' => 'setOnceToken',
        'professionId' => 'setProfessionId',
        'professionName' => 'setProfessionName',
        'salaryMax' => 'setSalaryMax',
        'salaryMin' => 'setSalaryMin',
        'salaryUnit' => 'setSalaryUnit',
        'schoolName' => 'setSchoolName',
        'skillName' => 'setSkillName',
        'startTime' => 'setStartTime',
        'type' => 'setType',
        'validDateEnd' => 'setValidDateEnd',
        'validDateStart' => 'setValidDateStart',
        'verifyStatus' => 'setVerifyStatus',
        'workDesc' => 'setWorkDesc',
        'workEndTime' => 'setWorkEndTime',
        'workPlace' => 'setWorkPlace',
        'workProperty' => 'setWorkProperty',
        'workStartTime' => 'setWorkStartTime',
        'year' => 'setYear'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'certificateGrantInstitution' => 'getCertificateGrantInstitution',
        'certificateId' => 'getCertificateId',
        'certificateLevel' => 'getCertificateLevel',
        'certificateName' => 'getCertificateName',
        'certificatePicId' => 'getCertificatePicId',
        'companyName' => 'getCompanyName',
        'degree' => 'getDegree',
        'deliveryPositionId' => 'getDeliveryPositionId',
        'deliveryTime' => 'getDeliveryTime',
        'educationStatus' => 'getEducationStatus',
        'entryNo' => 'getEntryNo',
        'examScore' => 'getExamScore',
        'headPicId' => 'getHeadPicId',
        'intentionCity' => 'getIntentionCity',
        'intentionCityName' => 'getIntentionCityName',
        'issueDate' => 'getIssueDate',
        'jobId' => 'getJobId',
        'jobName' => 'getJobName',
        'kaJobId' => 'getKaJobId',
        'kaJobName' => 'getKaJobName',
        'kaProfessionId' => 'getKaProfessionId',
        'kaProfessionName' => 'getKaProfessionName',
        'location' => 'getLocation',
        'month' => 'getMonth',
        'onceToken' => 'getOnceToken',
        'professionId' => 'getProfessionId',
        'professionName' => 'getProfessionName',
        'salaryMax' => 'getSalaryMax',
        'salaryMin' => 'getSalaryMin',
        'salaryUnit' => 'getSalaryUnit',
        'schoolName' => 'getSchoolName',
        'skillName' => 'getSkillName',
        'startTime' => 'getStartTime',
        'type' => 'getType',
        'validDateEnd' => 'getValidDateEnd',
        'validDateStart' => 'getValidDateStart',
        'verifyStatus' => 'getVerifyStatus',
        'workDesc' => 'getWorkDesc',
        'workEndTime' => 'getWorkEndTime',
        'workPlace' => 'getWorkPlace',
        'workProperty' => 'getWorkProperty',
        'workStartTime' => 'getWorkStartTime',
        'year' => 'getYear'
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
        $this->container['certificateGrantInstitution'] = $data['certificateGrantInstitution'] ?? null;
        $this->container['certificateId'] = $data['certificateId'] ?? null;
        $this->container['certificateLevel'] = $data['certificateLevel'] ?? null;
        $this->container['certificateName'] = $data['certificateName'] ?? null;
        $this->container['certificatePicId'] = $data['certificatePicId'] ?? null;
        $this->container['companyName'] = $data['companyName'] ?? null;
        $this->container['degree'] = $data['degree'] ?? null;
        $this->container['deliveryPositionId'] = $data['deliveryPositionId'] ?? null;
        $this->container['deliveryTime'] = $data['deliveryTime'] ?? null;
        $this->container['educationStatus'] = $data['educationStatus'] ?? null;
        $this->container['entryNo'] = $data['entryNo'] ?? null;
        $this->container['examScore'] = $data['examScore'] ?? null;
        $this->container['headPicId'] = $data['headPicId'] ?? null;
        $this->container['intentionCity'] = $data['intentionCity'] ?? null;
        $this->container['intentionCityName'] = $data['intentionCityName'] ?? null;
        $this->container['issueDate'] = $data['issueDate'] ?? null;
        $this->container['jobId'] = $data['jobId'] ?? null;
        $this->container['jobName'] = $data['jobName'] ?? null;
        $this->container['kaJobId'] = $data['kaJobId'] ?? null;
        $this->container['kaJobName'] = $data['kaJobName'] ?? null;
        $this->container['kaProfessionId'] = $data['kaProfessionId'] ?? null;
        $this->container['kaProfessionName'] = $data['kaProfessionName'] ?? null;
        $this->container['location'] = $data['location'] ?? null;
        $this->container['month'] = $data['month'] ?? null;
        $this->container['onceToken'] = $data['onceToken'] ?? null;
        $this->container['professionId'] = $data['professionId'] ?? null;
        $this->container['professionName'] = $data['professionName'] ?? null;
        $this->container['salaryMax'] = $data['salaryMax'] ?? null;
        $this->container['salaryMin'] = $data['salaryMin'] ?? null;
        $this->container['salaryUnit'] = $data['salaryUnit'] ?? null;
        $this->container['schoolName'] = $data['schoolName'] ?? null;
        $this->container['skillName'] = $data['skillName'] ?? null;
        $this->container['startTime'] = $data['startTime'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['validDateEnd'] = $data['validDateEnd'] ?? null;
        $this->container['validDateStart'] = $data['validDateStart'] ?? null;
        $this->container['verifyStatus'] = $data['verifyStatus'] ?? null;
        $this->container['workDesc'] = $data['workDesc'] ?? null;
        $this->container['workEndTime'] = $data['workEndTime'] ?? null;
        $this->container['workPlace'] = $data['workPlace'] ?? null;
        $this->container['workProperty'] = $data['workProperty'] ?? null;
        $this->container['workStartTime'] = $data['workStartTime'] ?? null;
        $this->container['year'] = $data['year'] ?? null;
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
     * Gets certificateGrantInstitution
     *
     * @return string|null
     */
    public function getCertificateGrantInstitution()
    {
        return $this->container['certificateGrantInstitution'];
    }

    /**
     * Sets certificateGrantInstitution
     *
     * @param string|null $certificateGrantInstitution 证书发证机构
     *
     * @return self
     */
    public function setCertificateGrantInstitution($certificateGrantInstitution)
    {
        $this->container['certificateGrantInstitution'] = $certificateGrantInstitution;

        return $this;
    }

    /**
     * Gets certificateId
     *
     * @return string|null
     */
    public function getCertificateId()
    {
        return $this->container['certificateId'];
    }

    /**
     * Sets certificateId
     *
     * @param string|null $certificateId 证书编号
     *
     * @return self
     */
    public function setCertificateId($certificateId)
    {
        $this->container['certificateId'] = $certificateId;

        return $this;
    }

    /**
     * Gets certificateLevel
     *
     * @return string|null
     */
    public function getCertificateLevel()
    {
        return $this->container['certificateLevel'];
    }

    /**
     * Sets certificateLevel
     *
     * @param string|null $certificateLevel 证书等级：中文
     *
     * @return self
     */
    public function setCertificateLevel($certificateLevel)
    {
        $this->container['certificateLevel'] = $certificateLevel;

        return $this;
    }

    /**
     * Gets certificateName
     *
     * @return string|null
     */
    public function getCertificateName()
    {
        return $this->container['certificateName'];
    }

    /**
     * Sets certificateName
     *
     * @param string|null $certificateName 证书名称
     *
     * @return self
     */
    public function setCertificateName($certificateName)
    {
        $this->container['certificateName'] = $certificateName;

        return $this;
    }

    /**
     * Gets certificatePicId
     *
     * @return string|null
     */
    public function getCertificatePicId()
    {
        return $this->container['certificatePicId'];
    }

    /**
     * Sets certificatePicId
     *
     * @param string|null $certificatePicId 工作证图片上传接口返回的id
     *
     * @return self
     */
    public function setCertificatePicId($certificatePicId)
    {
        $this->container['certificatePicId'] = $certificatePicId;

        return $this;
    }

    /**
     * Gets companyName
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->container['companyName'];
    }

    /**
     * Sets companyName
     *
     * @param string|null $companyName 公司名称
     *
     * @return self
     */
    public function setCompanyName($companyName)
    {
        $this->container['companyName'] = $companyName;

        return $this;
    }

    /**
     * Gets degree
     *
     * @return string|null
     */
    public function getDegree()
    {
        return $this->container['degree'];
    }

    /**
     * Sets degree
     *
     * @param string|null $degree 学历，可以用以下字段HIGHSCHOOL_AND_BELOW（高中及以下），POLYTECHNIC（中专），COLLEGE（大专），BACHELOR（本科），MASTER（硕士），DOCTOR_AND_ABOVE（博士及以上）
     *
     * @return self
     */
    public function setDegree($degree)
    {
        $this->container['degree'] = $degree;

        return $this;
    }

    /**
     * Gets deliveryPositionId
     *
     * @return string|null
     */
    public function getDeliveryPositionId()
    {
        return $this->container['deliveryPositionId'];
    }

    /**
     * Sets deliveryPositionId
     *
     * @param string|null $deliveryPositionId 商户侧投递岗位id
     *
     * @return self
     */
    public function setDeliveryPositionId($deliveryPositionId)
    {
        $this->container['deliveryPositionId'] = $deliveryPositionId;

        return $this;
    }

    /**
     * Gets deliveryTime
     *
     * @return int|null
     */
    public function getDeliveryTime()
    {
        return $this->container['deliveryTime'];
    }

    /**
     * Sets deliveryTime
     *
     * @param int|null $deliveryTime 投递时间戳
     *
     * @return self
     */
    public function setDeliveryTime($deliveryTime)
    {
        $this->container['deliveryTime'] = $deliveryTime;

        return $this;
    }

    /**
     * Gets educationStatus
     *
     * @return string|null
     */
    public function getEducationStatus()
    {
        return $this->container['educationStatus'];
    }

    /**
     * Sets educationStatus
     *
     * @param string|null $educationStatus 教育状态只有两种，GRADUATE(毕业)，STUDY（未毕业）
     *
     * @return self
     */
    public function setEducationStatus($educationStatus)
    {
        $this->container['educationStatus'] = $educationStatus;

        return $this;
    }

    /**
     * Gets entryNo
     *
     * @return string|null
     */
    public function getEntryNo()
    {
        return $this->container['entryNo'];
    }

    /**
     * Sets entryNo
     *
     * @param string|null $entryNo 报名流水号
     *
     * @return self
     */
    public function setEntryNo($entryNo)
    {
        $this->container['entryNo'] = $entryNo;

        return $this;
    }

    /**
     * Gets examScore
     *
     * @return string|null
     */
    public function getExamScore()
    {
        return $this->container['examScore'];
    }

    /**
     * Sets examScore
     *
     * @param string|null $examScore 考试分数
     *
     * @return self
     */
    public function setExamScore($examScore)
    {
        $this->container['examScore'] = $examScore;

        return $this;
    }

    /**
     * Gets headPicId
     *
     * @return string|null
     */
    public function getHeadPicId()
    {
        return $this->container['headPicId'];
    }

    /**
     * Sets headPicId
     *
     * @param string|null $headPicId 工作证图片上传接口返回的id
     *
     * @return self
     */
    public function setHeadPicId($headPicId)
    {
        $this->container['headPicId'] = $headPicId;

        return $this;
    }

    /**
     * Gets intentionCity
     *
     * @return string|null
     */
    public function getIntentionCity()
    {
        return $this->container['intentionCity'];
    }

    /**
     * Sets intentionCity
     *
     * @param string|null $intentionCity 求职意向，城市的adccode  例如110000（北京市）
     *
     * @return self
     */
    public function setIntentionCity($intentionCity)
    {
        $this->container['intentionCity'] = $intentionCity;

        return $this;
    }

    /**
     * Gets intentionCityName
     *
     * @return string|null
     */
    public function getIntentionCityName()
    {
        return $this->container['intentionCityName'];
    }

    /**
     * Sets intentionCityName
     *
     * @param string|null $intentionCityName 意向城市名，例如北京市，传入北京即可，大理白族自治州，传入大理即可
     *
     * @return self
     */
    public function setIntentionCityName($intentionCityName)
    {
        $this->container['intentionCityName'] = $intentionCityName;

        return $this;
    }

    /**
     * Gets issueDate
     *
     * @return string|null
     */
    public function getIssueDate()
    {
        return $this->container['issueDate'];
    }

    /**
     * Sets issueDate
     *
     * @param string|null $issueDate 发证日期，ms时间戳
     *
     * @return self
     */
    public function setIssueDate($issueDate)
    {
        $this->container['issueDate'] = $issueDate;

        return $this;
    }

    /**
     * Gets jobId
     *
     * @return string|null
     */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
     * Sets jobId
     *
     * @param string|null $jobId 岗位对应的职业id，字段参考https://www.yuque.com/wx3dkp/gwckr4/bs03t3
     *
     * @return self
     */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;

        return $this;
    }

    /**
     * Gets jobName
     *
     * @return string|null
     */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
     * Sets jobName
     *
     * @param string|null $jobName 职业名称
     *
     * @return self
     */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;

        return $this;
    }

    /**
     * Gets kaJobId
     *
     * @return string|null
     */
    public function getKaJobId()
    {
        return $this->container['kaJobId'];
    }

    /**
     * Sets kaJobId
     *
     * @param string|null $kaJobId 商户职业Id
     *
     * @return self
     */
    public function setKaJobId($kaJobId)
    {
        $this->container['kaJobId'] = $kaJobId;

        return $this;
    }

    /**
     * Gets kaJobName
     *
     * @return string|null
     */
    public function getKaJobName()
    {
        return $this->container['kaJobName'];
    }

    /**
     * Sets kaJobName
     *
     * @param string|null $kaJobName 商户职业名称
     *
     * @return self
     */
    public function setKaJobName($kaJobName)
    {
        $this->container['kaJobName'] = $kaJobName;

        return $this;
    }

    /**
     * Gets kaProfessionId
     *
     * @return string|null
     */
    public function getKaProfessionId()
    {
        return $this->container['kaProfessionId'];
    }

    /**
     * Sets kaProfessionId
     *
     * @param string|null $kaProfessionId 商户行业Id
     *
     * @return self
     */
    public function setKaProfessionId($kaProfessionId)
    {
        $this->container['kaProfessionId'] = $kaProfessionId;

        return $this;
    }

    /**
     * Gets kaProfessionName
     *
     * @return string|null
     */
    public function getKaProfessionName()
    {
        return $this->container['kaProfessionName'];
    }

    /**
     * Sets kaProfessionName
     *
     * @param string|null $kaProfessionName 商户行业名称
     *
     * @return self
     */
    public function setKaProfessionName($kaProfessionName)
    {
        $this->container['kaProfessionName'] = $kaProfessionName;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string|null $location 省份
     *
     * @return self
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets month
     *
     * @return string|null
     */
    public function getMonth()
    {
        return $this->container['month'];
    }

    /**
     * Sets month
     *
     * @param string|null $month 毕业的月
     *
     * @return self
     */
    public function setMonth($month)
    {
        $this->container['month'] = $month;

        return $this;
    }

    /**
     * Gets onceToken
     *
     * @return string|null
     */
    public function getOnceToken()
    {
        return $this->container['onceToken'];
    }

    /**
     * Sets onceToken
     *
     * @param string|null $onceToken 对应类型相关接口生成
     *
     * @return self
     */
    public function setOnceToken($onceToken)
    {
        $this->container['onceToken'] = $onceToken;

        return $this;
    }

    /**
     * Gets professionId
     *
     * @return string|null
     */
    public function getProfessionId()
    {
        return $this->container['professionId'];
    }

    /**
     * Sets professionId
     *
     * @param string|null $professionId 岗位对应的行业id，字段参考https://www.yuque.com/wx3dkp/gwckr4/bs03t3
     *
     * @return self
     */
    public function setProfessionId($professionId)
    {
        $this->container['professionId'] = $professionId;

        return $this;
    }

    /**
     * Gets professionName
     *
     * @return string|null
     */
    public function getProfessionName()
    {
        return $this->container['professionName'];
    }

    /**
     * Sets professionName
     *
     * @param string|null $professionName 行业名称
     *
     * @return self
     */
    public function setProfessionName($professionName)
    {
        $this->container['professionName'] = $professionName;

        return $this;
    }

    /**
     * Gets salaryMax
     *
     * @return string|null
     */
    public function getSalaryMax()
    {
        return $this->container['salaryMax'];
    }

    /**
     * Sets salaryMax
     *
     * @param string|null $salaryMax 求职意向，薪水范围，不能低于salary_min
     *
     * @return self
     */
    public function setSalaryMax($salaryMax)
    {
        $this->container['salaryMax'] = $salaryMax;

        return $this;
    }

    /**
     * Gets salaryMin
     *
     * @return string|null
     */
    public function getSalaryMin()
    {
        return $this->container['salaryMin'];
    }

    /**
     * Sets salaryMin
     *
     * @param string|null $salaryMin 求职意向，薪水范围，不能高于salary_max
     *
     * @return self
     */
    public function setSalaryMin($salaryMin)
    {
        $this->container['salaryMin'] = $salaryMin;

        return $this;
    }

    /**
     * Gets salaryUnit
     *
     * @return string|null
     */
    public function getSalaryUnit()
    {
        return $this->container['salaryUnit'];
    }

    /**
     * Sets salaryUnit
     *
     * @param string|null $salaryUnit 薪资单位，元/日(DAY)、元/次(TIME)、元/月(MONTH)、元/小时(HOUR)、元/件 (NUM)、元/周 (WEEK)、其他 (OTHER)
     *
     * @return self
     */
    public function setSalaryUnit($salaryUnit)
    {
        $this->container['salaryUnit'] = $salaryUnit;

        return $this;
    }

    /**
     * Gets schoolName
     *
     * @return string|null
     */
    public function getSchoolName()
    {
        return $this->container['schoolName'];
    }

    /**
     * Sets schoolName
     *
     * @param string|null $schoolName 学校
     *
     * @return self
     */
    public function setSchoolName($schoolName)
    {
        $this->container['schoolName'] = $schoolName;

        return $this;
    }

    /**
     * Gets skillName
     *
     * @return string|null
     */
    public function getSkillName()
    {
        return $this->container['skillName'];
    }

    /**
     * Sets skillName
     *
     * @param string|null $skillName 用英文逗号分隔，最多6项
     *
     * @return self
     */
    public function setSkillName($skillName)
    {
        $this->container['skillName'] = $skillName;

        return $this;
    }

    /**
     * Gets startTime
     *
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     *
     * @param string|null $startTime 参加工作的时间，格式形如 2011-07
     *
     * @return self
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

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
     * @param string|null $type 信息类型
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets validDateEnd
     *
     * @return string|null
     */
    public function getValidDateEnd()
    {
        return $this->container['validDateEnd'];
    }

    /**
     * Sets validDateEnd
     *
     * @param string|null $validDateEnd 有效期：开始结束 ms 时间戳
     *
     * @return self
     */
    public function setValidDateEnd($validDateEnd)
    {
        $this->container['validDateEnd'] = $validDateEnd;

        return $this;
    }

    /**
     * Gets validDateStart
     *
     * @return string|null
     */
    public function getValidDateStart()
    {
        return $this->container['validDateStart'];
    }

    /**
     * Sets validDateStart
     *
     * @param string|null $validDateStart 有效期：开始时间 ms时间戳
     *
     * @return self
     */
    public function setValidDateStart($validDateStart)
    {
        $this->container['validDateStart'] = $validDateStart;

        return $this;
    }

    /**
     * Gets verifyStatus
     *
     * @return string|null
     */
    public function getVerifyStatus()
    {
        return $this->container['verifyStatus'];
    }

    /**
     * Sets verifyStatus
     *
     * @param string|null $verifyStatus 校验状态
     *
     * @return self
     */
    public function setVerifyStatus($verifyStatus)
    {
        $this->container['verifyStatus'] = $verifyStatus;

        return $this;
    }

    /**
     * Gets workDesc
     *
     * @return string|null
     */
    public function getWorkDesc()
    {
        return $this->container['workDesc'];
    }

    /**
     * Sets workDesc
     *
     * @param string|null $workDesc 工作描述
     *
     * @return self
     */
    public function setWorkDesc($workDesc)
    {
        $this->container['workDesc'] = $workDesc;

        return $this;
    }

    /**
     * Gets workEndTime
     *
     * @return string|null
     */
    public function getWorkEndTime()
    {
        return $this->container['workEndTime'];
    }

    /**
     * Sets workEndTime
     *
     * @param string|null $workEndTime 工作结束时间，毫秒级时间戳
     *
     * @return self
     */
    public function setWorkEndTime($workEndTime)
    {
        $this->container['workEndTime'] = $workEndTime;

        return $this;
    }

    /**
     * Gets workPlace
     *
     * @return string|null
     */
    public function getWorkPlace()
    {
        return $this->container['workPlace'];
    }

    /**
     * Sets workPlace
     *
     * @param string|null $workPlace 工作经历工作地
     *
     * @return self
     */
    public function setWorkPlace($workPlace)
    {
        $this->container['workPlace'] = $workPlace;

        return $this;
    }

    /**
     * Gets workProperty
     *
     * @return string|null
     */
    public function getWorkProperty()
    {
        return $this->container['workProperty'];
    }

    /**
     * Sets workProperty
     *
     * @param string|null $workProperty 岗位属性：全职(FULL_TIME)或者兼职(PART_TIME)
     *
     * @return self
     */
    public function setWorkProperty($workProperty)
    {
        $this->container['workProperty'] = $workProperty;

        return $this;
    }

    /**
     * Gets workStartTime
     *
     * @return string|null
     */
    public function getWorkStartTime()
    {
        return $this->container['workStartTime'];
    }

    /**
     * Sets workStartTime
     *
     * @param string|null $workStartTime 工作开始时间，毫秒级时间戳
     *
     * @return self
     */
    public function setWorkStartTime($workStartTime)
    {
        $this->container['workStartTime'] = $workStartTime;

        return $this;
    }

    /**
     * Gets year
     *
     * @return string|null
     */
    public function getYear()
    {
        return $this->container['year'];
    }

    /**
     * Sets year
     *
     * @param string|null $year 毕业的年
     *
     * @return self
     */
    public function setYear($year)
    {
        $this->container['year'] = $year;

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


