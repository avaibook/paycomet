<?php
/**
 * V1paymentspreauthPaymentMerchantData
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
 * V1paymentspreauthPaymentMerchantData Class Doc Comment
 *
 * @category Class
 * @description Client authentication information. The more information is provided in this field, the more likely the authorization of the operation will be without requiring additional authentication. For this reason, it is recommended to send as much information as possible.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1paymentspreauthPaymentMerchantData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1paymentspreauth_payment_merchantData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'customer' => '\Swagger\Client\Model\V1formPaymentMerchantDataCustomer',
        'shipping' => '\Swagger\Client\Model\V1formPaymentMerchantDataShipping',
        'billing' => '\Swagger\Client\Model\V1formPaymentMerchantDataBilling',
        'acct_id' => 'string',
        'acct_info' => '\Swagger\Client\Model\V1formPaymentMerchantDataAcctInfo',
        'merchant_risk_indicator' => '\Swagger\Client\Model\V1formPaymentMerchantDataMerchantRiskIndicator',
        'three_ds_requestor_authentication_info' => '\Swagger\Client\Model\V1formPaymentMerchantDataThreeDSRequestorAuthenticationInfo',
        'shopping_cart' => '\Swagger\Client\Model\V1formPaymentMerchantDataShoppingCart[]',
        'addr_match' => 'string',
        'purchase_instal_data' => 'int',
        'recurring_expiry' => 'string',
        'recurring_frequency' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'customer' => null,
        'shipping' => null,
        'billing' => null,
        'acct_id' => null,
        'acct_info' => null,
        'merchant_risk_indicator' => null,
        'three_ds_requestor_authentication_info' => null,
        'shopping_cart' => null,
        'addr_match' => null,
        'purchase_instal_data' => null,
        'recurring_expiry' => null,
        'recurring_frequency' => null
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
        'customer' => 'customer',
        'shipping' => 'shipping',
        'billing' => 'billing',
        'acct_id' => 'acctID',
        'acct_info' => 'acctInfo',
        'merchant_risk_indicator' => 'merchantRiskIndicator',
        'three_ds_requestor_authentication_info' => 'threeDSRequestorAuthenticationInfo',
        'shopping_cart' => 'shoppingCart',
        'addr_match' => 'addrMatch',
        'purchase_instal_data' => 'purchaseInstalData',
        'recurring_expiry' => 'recurringExpiry',
        'recurring_frequency' => 'recurringFrequency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer' => 'setCustomer',
        'shipping' => 'setShipping',
        'billing' => 'setBilling',
        'acct_id' => 'setAcctId',
        'acct_info' => 'setAcctInfo',
        'merchant_risk_indicator' => 'setMerchantRiskIndicator',
        'three_ds_requestor_authentication_info' => 'setThreeDsRequestorAuthenticationInfo',
        'shopping_cart' => 'setShoppingCart',
        'addr_match' => 'setAddrMatch',
        'purchase_instal_data' => 'setPurchaseInstalData',
        'recurring_expiry' => 'setRecurringExpiry',
        'recurring_frequency' => 'setRecurringFrequency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer' => 'getCustomer',
        'shipping' => 'getShipping',
        'billing' => 'getBilling',
        'acct_id' => 'getAcctId',
        'acct_info' => 'getAcctInfo',
        'merchant_risk_indicator' => 'getMerchantRiskIndicator',
        'three_ds_requestor_authentication_info' => 'getThreeDsRequestorAuthenticationInfo',
        'shopping_cart' => 'getShoppingCart',
        'addr_match' => 'getAddrMatch',
        'purchase_instal_data' => 'getPurchaseInstalData',
        'recurring_expiry' => 'getRecurringExpiry',
        'recurring_frequency' => 'getRecurringFrequency'
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
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['shipping'] = isset($data['shipping']) ? $data['shipping'] : null;
        $this->container['billing'] = isset($data['billing']) ? $data['billing'] : null;
        $this->container['acct_id'] = isset($data['acct_id']) ? $data['acct_id'] : null;
        $this->container['acct_info'] = isset($data['acct_info']) ? $data['acct_info'] : null;
        $this->container['merchant_risk_indicator'] = isset($data['merchant_risk_indicator']) ? $data['merchant_risk_indicator'] : null;
        $this->container['three_ds_requestor_authentication_info'] = isset($data['three_ds_requestor_authentication_info']) ? $data['three_ds_requestor_authentication_info'] : null;
        $this->container['shopping_cart'] = isset($data['shopping_cart']) ? $data['shopping_cart'] : null;
        $this->container['addr_match'] = isset($data['addr_match']) ? $data['addr_match'] : null;
        $this->container['purchase_instal_data'] = isset($data['purchase_instal_data']) ? $data['purchase_instal_data'] : null;
        $this->container['recurring_expiry'] = isset($data['recurring_expiry']) ? $data['recurring_expiry'] : null;
        $this->container['recurring_frequency'] = isset($data['recurring_frequency']) ? $data['recurring_frequency'] : null;
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
     * Gets customer
     *
     * @return \Swagger\Client\Model\V1formPaymentMerchantDataCustomer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Swagger\Client\Model\V1formPaymentMerchantDataCustomer $customer customer
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return \Swagger\Client\Model\V1formPaymentMerchantDataShipping
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param \Swagger\Client\Model\V1formPaymentMerchantDataShipping $shipping shipping
     *
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets billing
     *
     * @return \Swagger\Client\Model\V1formPaymentMerchantDataBilling
     */
    public function getBilling()
    {
        return $this->container['billing'];
    }

    /**
     * Sets billing
     *
     * @param \Swagger\Client\Model\V1formPaymentMerchantDataBilling $billing billing
     *
     * @return $this
     */
    public function setBilling($billing)
    {
        $this->container['billing'] = $billing;

        return $this;
    }

    /**
     * Gets acct_id
     *
     * @return string
     */
    public function getAcctId()
    {
        return $this->container['acct_id'];
    }

    /**
     * Sets acct_id
     *
     * @param string $acct_id Additional information you want to send to identify the account
     *
     * @return $this
     */
    public function setAcctId($acct_id)
    {
        $this->container['acct_id'] = $acct_id;

        return $this;
    }

    /**
     * Gets acct_info
     *
     * @return \Swagger\Client\Model\V1formPaymentMerchantDataAcctInfo
     */
    public function getAcctInfo()
    {
        return $this->container['acct_info'];
    }

    /**
     * Sets acct_info
     *
     * @param \Swagger\Client\Model\V1formPaymentMerchantDataAcctInfo $acct_info acct_info
     *
     * @return $this
     */
    public function setAcctInfo($acct_info)
    {
        $this->container['acct_info'] = $acct_info;

        return $this;
    }

    /**
     * Gets merchant_risk_indicator
     *
     * @return \Swagger\Client\Model\V1formPaymentMerchantDataMerchantRiskIndicator
     */
    public function getMerchantRiskIndicator()
    {
        return $this->container['merchant_risk_indicator'];
    }

    /**
     * Sets merchant_risk_indicator
     *
     * @param \Swagger\Client\Model\V1formPaymentMerchantDataMerchantRiskIndicator $merchant_risk_indicator merchant_risk_indicator
     *
     * @return $this
     */
    public function setMerchantRiskIndicator($merchant_risk_indicator)
    {
        $this->container['merchant_risk_indicator'] = $merchant_risk_indicator;

        return $this;
    }

    /**
     * Gets three_ds_requestor_authentication_info
     *
     * @return \Swagger\Client\Model\V1formPaymentMerchantDataThreeDSRequestorAuthenticationInfo
     */
    public function getThreeDsRequestorAuthenticationInfo()
    {
        return $this->container['three_ds_requestor_authentication_info'];
    }

    /**
     * Sets three_ds_requestor_authentication_info
     *
     * @param \Swagger\Client\Model\V1formPaymentMerchantDataThreeDSRequestorAuthenticationInfo $three_ds_requestor_authentication_info three_ds_requestor_authentication_info
     *
     * @return $this
     */
    public function setThreeDsRequestorAuthenticationInfo($three_ds_requestor_authentication_info)
    {
        $this->container['three_ds_requestor_authentication_info'] = $three_ds_requestor_authentication_info;

        return $this;
    }

    /**
     * Gets shopping_cart
     *
     * @return \Swagger\Client\Model\V1formPaymentMerchantDataShoppingCart[]
     */
    public function getShoppingCart()
    {
        return $this->container['shopping_cart'];
    }

    /**
     * Sets shopping_cart
     *
     * @param \Swagger\Client\Model\V1formPaymentMerchantDataShoppingCart[] $shopping_cart shopping_cart
     *
     * @return $this
     */
    public function setShoppingCart($shopping_cart)
    {
        $this->container['shopping_cart'] = $shopping_cart;

        return $this;
    }

    /**
     * Gets addr_match
     *
     * @return string
     */
    public function getAddrMatch()
    {
        return $this->container['addr_match'];
    }

    /**
     * Sets addr_match
     *
     * @param string $addr_match Indicates whether the delivery address is the same as the invoice address. Y = The delivery address is the same as the invoicing address, N = The delivery and invoice addresses are different
     *
     * @return $this
     */
    public function setAddrMatch($addr_match)
    {
        $this->container['addr_match'] = $addr_match;

        return $this;
    }

    /**
     * Gets purchase_instal_data
     *
     * @return int
     */
    public function getPurchaseInstalData()
    {
        return $this->container['purchase_instal_data'];
    }

    /**
     * Sets purchase_instal_data
     *
     * @param int $purchase_instal_data Mandatory for Instalment operations (MERCHANT_TRX_TYPE = I). Indicates the maximum number of deferred payment authorizations. Accepted values: The value must be greater than 1
     *
     * @return $this
     */
    public function setPurchaseInstalData($purchase_instal_data)
    {
        $this->container['purchase_instal_data'] = $purchase_instal_data;

        return $this;
    }

    /**
     * Gets recurring_expiry
     *
     * @return string
     */
    public function getRecurringExpiry()
    {
        return $this->container['recurring_expiry'];
    }

    /**
     * Sets recurring_expiry
     *
     * @param string $recurring_expiry Mandatory for Recurring and Instalment operations (MERCHANT_TRX_TYPE = I or R). The date from which there will be no more authorizations. Accepted format: YYYYMMDD
     *
     * @return $this
     */
    public function setRecurringExpiry($recurring_expiry)
    {
        $this->container['recurring_expiry'] = $recurring_expiry;

        return $this;
    }

    /**
     * Gets recurring_frequency
     *
     * @return string
     */
    public function getRecurringFrequency()
    {
        return $this->container['recurring_frequency'];
    }

    /**
     * Sets recurring_frequency
     *
     * @param string $recurring_frequency Mandatory for Recurring and Instalment operations (MERCHANT_TRX_TYPE = I or R). Indicates the minimum number of days between authorizations
     *
     * @return $this
     */
    public function setRecurringFrequency($recurring_frequency)
    {
        $this->container['recurring_frequency'] = $recurring_frequency;

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
