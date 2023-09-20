<?php
/**
 * InlineResponse20022
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
 * InlineResponse20022 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20022 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_22';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'error_code' => 'int',
        'amount' => 'string',
        'currency' => 'string',
        'method_id' => 'int',
        'order' => 'string',
        'auth_code' => 'string',
        'challenge_url' => 'string',
        'id_user' => 'int',
        'token_user' => 'string',
        'card_country' => 'string',
        'subscription' => '\Swagger\Client\Model\InlineResponse20022Subscription'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'error_code' => null,
        'amount' => null,
        'currency' => null,
        'method_id' => null,
        'order' => null,
        'auth_code' => null,
        'challenge_url' => null,
        'id_user' => null,
        'token_user' => null,
        'card_country' => null,
        'subscription' => null
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
        'error_code' => 'errorCode',
        'amount' => 'amount',
        'currency' => 'currency',
        'method_id' => 'methodId',
        'order' => 'order',
        'auth_code' => 'authCode',
        'challenge_url' => 'challengeUrl',
        'id_user' => 'idUser',
        'token_user' => 'tokenUser',
        'card_country' => 'cardCountry',
        'subscription' => 'subscription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'error_code' => 'setErrorCode',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'method_id' => 'setMethodId',
        'order' => 'setOrder',
        'auth_code' => 'setAuthCode',
        'challenge_url' => 'setChallengeUrl',
        'id_user' => 'setIdUser',
        'token_user' => 'setTokenUser',
        'card_country' => 'setCardCountry',
        'subscription' => 'setSubscription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'error_code' => 'getErrorCode',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'method_id' => 'getMethodId',
        'order' => 'getOrder',
        'auth_code' => 'getAuthCode',
        'challenge_url' => 'getChallengeUrl',
        'id_user' => 'getIdUser',
        'token_user' => 'getTokenUser',
        'card_country' => 'getCardCountry',
        'subscription' => 'getSubscription'
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
        $this->container['error_code'] = isset($data['error_code']) ? $data['error_code'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['method_id'] = isset($data['method_id']) ? $data['method_id'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['auth_code'] = isset($data['auth_code']) ? $data['auth_code'] : null;
        $this->container['challenge_url'] = isset($data['challenge_url']) ? $data['challenge_url'] : null;
        $this->container['id_user'] = isset($data['id_user']) ? $data['id_user'] : null;
        $this->container['token_user'] = isset($data['token_user']) ? $data['token_user'] : null;
        $this->container['card_country'] = isset($data['card_country']) ? $data['card_country'] : null;
        $this->container['subscription'] = isset($data['subscription']) ? $data['subscription'] : null;
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
     * Gets error_code
     *
     * @return int
     */
    public function getErrorCode()
    {
        return $this->container['error_code'];
    }

    /**
     * Sets error_code
     *
     * @param int $error_code error_code
     *
     * @return $this
     */
    public function setErrorCode($error_code)
    {
        $this->container['error_code'] = $error_code;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets method_id
     *
     * @return int
     */
    public function getMethodId()
    {
        return $this->container['method_id'];
    }

    /**
     * Sets method_id
     *
     * @param int $method_id method_id
     *
     * @return $this
     */
    public function setMethodId($method_id)
    {
        $this->container['method_id'] = $method_id;

        return $this;
    }

    /**
     * Gets order
     *
     * @return string
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param string $order order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets auth_code
     *
     * @return string
     */
    public function getAuthCode()
    {
        return $this->container['auth_code'];
    }

    /**
     * Sets auth_code
     *
     * @param string $auth_code auth_code
     *
     * @return $this
     */
    public function setAuthCode($auth_code)
    {
        $this->container['auth_code'] = $auth_code;

        return $this;
    }

    /**
     * Gets challenge_url
     *
     * @return string
     */
    public function getChallengeUrl()
    {
        return $this->container['challenge_url'];
    }

    /**
     * Sets challenge_url
     *
     * @param string $challenge_url challenge_url
     *
     * @return $this
     */
    public function setChallengeUrl($challenge_url)
    {
        $this->container['challenge_url'] = $challenge_url;

        return $this;
    }

    /**
     * Gets id_user
     *
     * @return int
     */
    public function getIdUser()
    {
        return $this->container['id_user'];
    }

    /**
     * Sets id_user
     *
     * @param int $id_user id_user
     *
     * @return $this
     */
    public function setIdUser($id_user)
    {
        $this->container['id_user'] = $id_user;

        return $this;
    }

    /**
     * Gets token_user
     *
     * @return string
     */
    public function getTokenUser()
    {
        return $this->container['token_user'];
    }

    /**
     * Sets token_user
     *
     * @param string $token_user token_user
     *
     * @return $this
     */
    public function setTokenUser($token_user)
    {
        $this->container['token_user'] = $token_user;

        return $this;
    }

    /**
     * Gets card_country
     *
     * @return string
     */
    public function getCardCountry()
    {
        return $this->container['card_country'];
    }

    /**
     * Sets card_country
     *
     * @param string $card_country card_country
     *
     * @return $this
     */
    public function setCardCountry($card_country)
    {
        $this->container['card_country'] = $card_country;

        return $this;
    }

    /**
     * Gets subscription
     *
     * @return \Swagger\Client\Model\InlineResponse20022Subscription
     */
    public function getSubscription()
    {
        return $this->container['subscription'];
    }

    /**
     * Sets subscription
     *
     * @param \Swagger\Client\Model\InlineResponse20022Subscription $subscription subscription
     *
     * @return $this
     */
    public function setSubscription($subscription)
    {
        $this->container['subscription'] = $subscription;

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
