<?php
/**
 * V1sepaoperationsOperations
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PAYCOMET REST API
 *
 * PAYCOMET API REST for customers.
 *
 * OpenAPI spec version: 2.88.0
 * Contact: tecnico@paycomet.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.46
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * V1sepaoperationsOperations Class Doc Comment
 *
 * @category Class
 * @description Operations parameters
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1sepaoperationsOperations implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1sepaoperations_operations';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'operation_type' => 'int',
        'merchant_code' => 'string',
        'terminal_id_debtor' => 'int',
        'unique_id_creditor' => 'string',
        'company_name_creditor' => 'string',
        'iban_number_creditor' => 'string',
        'swift_code_creditor' => 'string',
        'company_type_creditor' => 'int',
        'operation_order' => 'string',
        'operation_amount' => 'int',
        'operation_currency' => 'string',
        'operation_datetime' => '\DateTime',
        'operation_concept' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'operation_type' => null,
        'merchant_code' => null,
        'terminal_id_debtor' => null,
        'unique_id_creditor' => null,
        'company_name_creditor' => null,
        'iban_number_creditor' => null,
        'swift_code_creditor' => null,
        'company_type_creditor' => null,
        'operation_order' => null,
        'operation_amount' => null,
        'operation_currency' => null,
        'operation_datetime' => 'date',
        'operation_concept' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'operation_type' => 'operationType',
        'merchant_code' => 'merchantCode',
        'terminal_id_debtor' => 'terminalIDDebtor',
        'unique_id_creditor' => 'uniqueIdCreditor',
        'company_name_creditor' => 'companyNameCreditor',
        'iban_number_creditor' => 'ibanNumberCreditor',
        'swift_code_creditor' => 'swiftCodeCreditor',
        'company_type_creditor' => 'companyTypeCreditor',
        'operation_order' => 'operationOrder',
        'operation_amount' => 'operationAmount',
        'operation_currency' => 'operationCurrency',
        'operation_datetime' => 'operationDatetime',
        'operation_concept' => 'operationConcept'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'operation_type' => 'setOperationType',
        'merchant_code' => 'setMerchantCode',
        'terminal_id_debtor' => 'setTerminalIdDebtor',
        'unique_id_creditor' => 'setUniqueIdCreditor',
        'company_name_creditor' => 'setCompanyNameCreditor',
        'iban_number_creditor' => 'setIbanNumberCreditor',
        'swift_code_creditor' => 'setSwiftCodeCreditor',
        'company_type_creditor' => 'setCompanyTypeCreditor',
        'operation_order' => 'setOperationOrder',
        'operation_amount' => 'setOperationAmount',
        'operation_currency' => 'setOperationCurrency',
        'operation_datetime' => 'setOperationDatetime',
        'operation_concept' => 'setOperationConcept'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'operation_type' => 'getOperationType',
        'merchant_code' => 'getMerchantCode',
        'terminal_id_debtor' => 'getTerminalIdDebtor',
        'unique_id_creditor' => 'getUniqueIdCreditor',
        'company_name_creditor' => 'getCompanyNameCreditor',
        'iban_number_creditor' => 'getIbanNumberCreditor',
        'swift_code_creditor' => 'getSwiftCodeCreditor',
        'company_type_creditor' => 'getCompanyTypeCreditor',
        'operation_order' => 'getOperationOrder',
        'operation_amount' => 'getOperationAmount',
        'operation_currency' => 'getOperationCurrency',
        'operation_datetime' => 'getOperationDatetime',
        'operation_concept' => 'getOperationConcept'
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
        return self::$swaggerModelName;
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
        $this->container['operation_type'] = isset($data['operation_type']) ? $data['operation_type'] : null;
        $this->container['merchant_code'] = isset($data['merchant_code']) ? $data['merchant_code'] : null;
        $this->container['terminal_id_debtor'] = isset($data['terminal_id_debtor']) ? $data['terminal_id_debtor'] : null;
        $this->container['unique_id_creditor'] = isset($data['unique_id_creditor']) ? $data['unique_id_creditor'] : null;
        $this->container['company_name_creditor'] = isset($data['company_name_creditor']) ? $data['company_name_creditor'] : null;
        $this->container['iban_number_creditor'] = isset($data['iban_number_creditor']) ? $data['iban_number_creditor'] : null;
        $this->container['swift_code_creditor'] = isset($data['swift_code_creditor']) ? $data['swift_code_creditor'] : null;
        $this->container['company_type_creditor'] = isset($data['company_type_creditor']) ? $data['company_type_creditor'] : null;
        $this->container['operation_order'] = isset($data['operation_order']) ? $data['operation_order'] : null;
        $this->container['operation_amount'] = isset($data['operation_amount']) ? $data['operation_amount'] : null;
        $this->container['operation_currency'] = isset($data['operation_currency']) ? $data['operation_currency'] : null;
        $this->container['operation_datetime'] = isset($data['operation_datetime']) ? $data['operation_datetime'] : null;
        $this->container['operation_concept'] = isset($data['operation_concept']) ? $data['operation_concept'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['operation_type'] === null) {
            $invalidProperties[] = "'operation_type' can't be null";
        }
        if ($this->container['merchant_code'] === null) {
            $invalidProperties[] = "'merchant_code' can't be null";
        }
        if ($this->container['terminal_id_debtor'] === null) {
            $invalidProperties[] = "'terminal_id_debtor' can't be null";
        }
        if ($this->container['unique_id_creditor'] === null) {
            $invalidProperties[] = "'unique_id_creditor' can't be null";
        }
        if ($this->container['company_name_creditor'] === null) {
            $invalidProperties[] = "'company_name_creditor' can't be null";
        }
        if ($this->container['iban_number_creditor'] === null) {
            $invalidProperties[] = "'iban_number_creditor' can't be null";
        }
        if ($this->container['swift_code_creditor'] === null) {
            $invalidProperties[] = "'swift_code_creditor' can't be null";
        }
        if ($this->container['company_type_creditor'] === null) {
            $invalidProperties[] = "'company_type_creditor' can't be null";
        }
        if ($this->container['operation_order'] === null) {
            $invalidProperties[] = "'operation_order' can't be null";
        }
        if ($this->container['operation_amount'] === null) {
            $invalidProperties[] = "'operation_amount' can't be null";
        }
        if ($this->container['operation_currency'] === null) {
            $invalidProperties[] = "'operation_currency' can't be null";
        }
        if ($this->container['operation_datetime'] === null) {
            $invalidProperties[] = "'operation_datetime' can't be null";
        }
        if ($this->container['operation_concept'] === null) {
            $invalidProperties[] = "'operation_concept' can't be null";
        }
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
     * Gets operation_type
     *
     * @return int
     */
    public function getOperationType()
    {
        return $this->container['operation_type'];
    }

    /**
     * Sets operation_type
     *
     * @param int $operation_type Type of operation. Identifies whether the operation is a direct debit or a transfer. 1 – Direct Debit (N19) 2 – Transfer (N34)
     *
     * @return $this
     */
    public function setOperationType($operation_type)
    {
        $this->container['operation_type'] = $operation_type;

        return $this;
    }

    /**
     * Gets merchant_code
     *
     * @return string
     */
    public function getMerchantCode()
    {
        return $this->container['merchant_code'];
    }

    /**
     * Sets merchant_code
     *
     * @param string $merchant_code Unique identifier as PAYCOMET account. Available on the client control panel.
     *
     * @return $this
     */
    public function setMerchantCode($merchant_code)
    {
        $this->container['merchant_code'] = $merchant_code;

        return $this;
    }

    /**
     * Gets terminal_id_debtor
     *
     * @return int
     */
    public function getTerminalIdDebtor()
    {
        return $this->container['terminal_id_debtor'];
    }

    /**
     * Sets terminal_id_debtor
     *
     * @param int $terminal_id_debtor This will be the terminal number assigned to the product. Obtained from the control panel. Identifies the terminal number of the debtor/payer of a SEPA operation. Therefore, it will depend on the type of operation (debit, transfer).
     *
     * @return $this
     */
    public function setTerminalIdDebtor($terminal_id_debtor)
    {
        $this->container['terminal_id_debtor'] = $terminal_id_debtor;

        return $this;
    }

    /**
     * Gets unique_id_creditor
     *
     * @return string
     */
    public function getUniqueIdCreditor()
    {
        return $this->container['unique_id_creditor'];
    }

    /**
     * Sets unique_id_creditor
     *
     * @param string $unique_id_creditor This will be the unique identifier of this individual, freelancer, company (recipient) in the client.
     *
     * @return $this
     */
    public function setUniqueIdCreditor($unique_id_creditor)
    {
        $this->container['unique_id_creditor'] = $unique_id_creditor;

        return $this;
    }

    /**
     * Gets company_name_creditor
     *
     * @return string
     */
    public function getCompanyNameCreditor()
    {
        return $this->container['company_name_creditor'];
    }

    /**
     * Sets company_name_creditor
     *
     * @param string $company_name_creditor Name of the company, individual or freelancer corresponding to the previous indicator.
     *
     * @return $this
     */
    public function setCompanyNameCreditor($company_name_creditor)
    {
        $this->container['company_name_creditor'] = $company_name_creditor;

        return $this;
    }

    /**
     * Gets iban_number_creditor
     *
     * @return string
     */
    public function getIbanNumberCreditor()
    {
        return $this->container['iban_number_creditor'];
    }

    /**
     * Sets iban_number_creditor
     *
     * @param string $iban_number_creditor IBAN code of the account of the recipient.
     *
     * @return $this
     */
    public function setIbanNumberCreditor($iban_number_creditor)
    {
        $this->container['iban_number_creditor'] = $iban_number_creditor;

        return $this;
    }

    /**
     * Gets swift_code_creditor
     *
     * @return string
     */
    public function getSwiftCodeCreditor()
    {
        return $this->container['swift_code_creditor'];
    }

    /**
     * Sets swift_code_creditor
     *
     * @param string $swift_code_creditor SWIFT code of the bank account of the recipient. Must be provided when the account IBAN is not Spanish. If the ibanNumberCreditor number belongs to a Spanish account, it must be sent as an empty string.
     *
     * @return $this
     */
    public function setSwiftCodeCreditor($swift_code_creditor)
    {
        $this->container['swift_code_creditor'] = $swift_code_creditor;

        return $this;
    }

    /**
     * Gets company_type_creditor
     *
     * @return int
     */
    public function getCompanyTypeCreditor()
    {
        return $this->container['company_type_creditor'];
    }

    /**
     * Sets company_type_creditor
     *
     * @param int $company_type_creditor Identifier of the type of recipient: 1: Individual / 2: Freelancer / 3: Commercial Company.
     *
     * @return $this
     */
    public function setCompanyTypeCreditor($company_type_creditor)
    {
        $this->container['company_type_creditor'] = $company_type_creditor;

        return $this;
    }

    /**
     * Gets operation_order
     *
     * @return string
     */
    public function getOperationOrder()
    {
        return $this->container['operation_order'];
    }

    /**
     * Sets operation_order
     *
     * @param string $operation_order Unique reference of the operation.
     *
     * @return $this
     */
    public function setOperationOrder($operation_order)
    {
        $this->container['operation_order'] = $operation_order;

        return $this;
    }

    /**
     * Gets operation_amount
     *
     * @return int
     */
    public function getOperationAmount()
    {
        return $this->container['operation_amount'];
    }

    /**
     * Sets operation_amount
     *
     * @param int $operation_amount Amount in the transaction currency with 2 decimals in integer format: (€2.25 = 225).
     *
     * @return $this
     */
    public function setOperationAmount($operation_amount)
    {
        $this->container['operation_amount'] = $operation_amount;

        return $this;
    }

    /**
     * Gets operation_currency
     *
     * @return string
     */
    public function getOperationCurrency()
    {
        return $this->container['operation_currency'];
    }

    /**
     * Sets operation_currency
     *
     * @param string $operation_currency Currency type of the transaction. The only permitted currency is the euro, whose code is EUR.
     *
     * @return $this
     */
    public function setOperationCurrency($operation_currency)
    {
        $this->container['operation_currency'] = $operation_currency;

        return $this;
    }

    /**
     * Gets operation_datetime
     *
     * @return \DateTime
     */
    public function getOperationDatetime()
    {
        return $this->container['operation_datetime'];
    }

    /**
     * Sets operation_datetime
     *
     * @param \DateTime $operation_datetime Date desired for sending the SEPA operation / remittance. Always after the current date. Format: yyyymmdd.
     *
     * @return $this
     */
    public function setOperationDatetime($operation_datetime)
    {
        $this->container['operation_datetime'] = $operation_datetime;

        return $this;
    }

    /**
     * Gets operation_concept
     *
     * @return string
     */
    public function getOperationConcept()
    {
        return $this->container['operation_concept'];
    }

    /**
     * Sets operation_concept
     *
     * @param string $operation_concept Concept assigned to the operation / remittance. This is the descriptor which will appear in banking entries. Maximum length 100. Although error 1273 specified 140 characters, PAYCOMET reserves 40, the maximum permitted in the input therefore being 100. Allowed charactaers: ([A-Za-z0-9]|[+|?|/|-|:|(|)|.|,|'| ])
     *
     * @return $this
     */
    public function setOperationConcept($operation_concept)
    {
        $this->container['operation_concept'] = $operation_concept;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
