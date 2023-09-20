<?php
/**
 * InlineResponse2002
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
 * InlineResponse2002 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2002 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pan' => 'string',
        'card_brand' => 'string',
        'card_type' => 'string',
        'card_i_country_iso3' => 'string',
        'expiry_date' => 'string',
        'card_hash' => 'string',
        'card_category' => 'string',
        'sepa_card' => 'int',
        'psd2_card' => 'string',
        'token_cof' => 'int',
        'eea_card' => 'string',
        'error_code' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pan' => null,
        'card_brand' => null,
        'card_type' => null,
        'card_i_country_iso3' => null,
        'expiry_date' => null,
        'card_hash' => null,
        'card_category' => null,
        'sepa_card' => null,
        'psd2_card' => null,
        'token_cof' => null,
        'eea_card' => null,
        'error_code' => null
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
        'pan' => 'pan',
        'card_brand' => 'cardBrand',
        'card_type' => 'cardType',
        'card_i_country_iso3' => 'cardICountryISO3',
        'expiry_date' => 'expiryDate',
        'card_hash' => 'cardHash',
        'card_category' => 'cardCategory',
        'sepa_card' => 'sepaCard',
        'psd2_card' => 'psd2Card',
        'token_cof' => 'tokenCOF',
        'eea_card' => 'eeaCard',
        'error_code' => 'errorCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pan' => 'setPan',
        'card_brand' => 'setCardBrand',
        'card_type' => 'setCardType',
        'card_i_country_iso3' => 'setCardICountryIso3',
        'expiry_date' => 'setExpiryDate',
        'card_hash' => 'setCardHash',
        'card_category' => 'setCardCategory',
        'sepa_card' => 'setSepaCard',
        'psd2_card' => 'setPsd2Card',
        'token_cof' => 'setTokenCof',
        'eea_card' => 'setEeaCard',
        'error_code' => 'setErrorCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pan' => 'getPan',
        'card_brand' => 'getCardBrand',
        'card_type' => 'getCardType',
        'card_i_country_iso3' => 'getCardICountryIso3',
        'expiry_date' => 'getExpiryDate',
        'card_hash' => 'getCardHash',
        'card_category' => 'getCardCategory',
        'sepa_card' => 'getSepaCard',
        'psd2_card' => 'getPsd2Card',
        'token_cof' => 'getTokenCof',
        'eea_card' => 'getEeaCard',
        'error_code' => 'getErrorCode'
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
        $this->container['pan'] = isset($data['pan']) ? $data['pan'] : null;
        $this->container['card_brand'] = isset($data['card_brand']) ? $data['card_brand'] : null;
        $this->container['card_type'] = isset($data['card_type']) ? $data['card_type'] : null;
        $this->container['card_i_country_iso3'] = isset($data['card_i_country_iso3']) ? $data['card_i_country_iso3'] : null;
        $this->container['expiry_date'] = isset($data['expiry_date']) ? $data['expiry_date'] : null;
        $this->container['card_hash'] = isset($data['card_hash']) ? $data['card_hash'] : null;
        $this->container['card_category'] = isset($data['card_category']) ? $data['card_category'] : null;
        $this->container['sepa_card'] = isset($data['sepa_card']) ? $data['sepa_card'] : null;
        $this->container['psd2_card'] = isset($data['psd2_card']) ? $data['psd2_card'] : null;
        $this->container['token_cof'] = isset($data['token_cof']) ? $data['token_cof'] : null;
        $this->container['eea_card'] = isset($data['eea_card']) ? $data['eea_card'] : null;
        $this->container['error_code'] = isset($data['error_code']) ? $data['error_code'] : null;
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
     * Gets pan
     *
     * @return string
     */
    public function getPan()
    {
        return $this->container['pan'];
    }

    /**
     * Sets pan
     *
     * @param string $pan Card number, without any spaces or dashes. Only the last four digits will be returned. The rest will be masked with X
     *
     * @return $this
     */
    public function setPan($pan)
    {
        $this->container['pan'] = $pan;

        return $this;
    }

    /**
     * Gets card_brand
     *
     * @return string
     */
    public function getCardBrand()
    {
        return $this->container['card_brand'];
    }

    /**
     * Sets card_brand
     *
     * @param string $card_brand Card brand. If it can be identified, information on the card brand will be sent (Visa, MasterCard, American Express, etc). Otherwise, the field will be returned blank.
     *
     * @return $this
     */
    public function setCardBrand($card_brand)
    {
        $this->container['card_brand'] = $card_brand;

        return $this;
    }

    /**
     * Gets card_type
     *
     * @return string
     */
    public function getCardType()
    {
        return $this->container['card_type'];
    }

    /**
     * Sets card_type
     *
     * @param string $card_type Type of card. If it can be identified, information on the type of card will be sent (DEBIT, CREDIT, etc). Otherwise, the field will be returned blank.
     *
     * @return $this
     */
    public function setCardType($card_type)
    {
        $this->container['card_type'] = $card_type;

        return $this;
    }

    /**
     * Gets card_i_country_iso3
     *
     * @return string
     */
    public function getCardICountryIso3()
    {
        return $this->container['card_i_country_iso3'];
    }

    /**
     * Sets card_i_country_iso3
     *
     * @param string $card_i_country_iso3 ISO3 Code the country of the issuer of the card. If it can be identified, the ISO3 Code of the country of the issuer of the card will be sent. Otherwise, the field will be returned blank.
     *
     * @return $this
     */
    public function setCardICountryIso3($card_i_country_iso3)
    {
        $this->container['card_i_country_iso3'] = $card_i_country_iso3;

        return $this;
    }

    /**
     * Gets expiry_date
     *
     * @return string
     */
    public function getExpiryDate()
    {
        return $this->container['expiry_date'];
    }

    /**
     * Sets expiry_date
     *
     * @param string $expiry_date Expiry date of the card expressed in the format YYYY/MM
     *
     * @return $this
     */
    public function setExpiryDate($expiry_date)
    {
        $this->container['expiry_date'] = $expiry_date;

        return $this;
    }

    /**
     * Gets card_hash
     *
     * @return string
     */
    public function getCardHash()
    {
        return $this->container['card_hash'];
    }

    /**
     * Sets card_hash
     *
     * @param string $card_hash Hash unique credit card id.
     *
     * @return $this
     */
    public function setCardHash($card_hash)
    {
        $this->container['card_hash'] = $card_hash;

        return $this;
    }

    /**
     * Gets card_category
     *
     * @return string
     */
    public function getCardCategory()
    {
        return $this->container['card_category'];
    }

    /**
     * Sets card_category
     *
     * @param string $card_category Card category.
     *
     * @return $this
     */
    public function setCardCategory($card_category)
    {
        $this->container['card_category'] = $card_category;

        return $this;
    }

    /**
     * Gets sepa_card
     *
     * @return int
     */
    public function getSepaCard()
    {
        return $this->container['sepa_card'];
    }

    /**
     * Sets sepa_card
     *
     * @param int $sepa_card Card in SEPA country.
     *
     * @return $this
     */
    public function setSepaCard($sepa_card)
    {
        $this->container['sepa_card'] = $sepa_card;

        return $this;
    }

    /**
     * Gets psd2_card
     *
     * @return string
     */
    public function getPsd2Card()
    {
        return $this->container['psd2_card'];
    }

    /**
     * Sets psd2_card
     *
     * @param string $psd2_card Express if card has PSD2 information (Y is a PSD2 Card, N is not and NA is not available).
     *
     * @return $this
     */
    public function setPsd2Card($psd2_card)
    {
        $this->container['psd2_card'] = $psd2_card;

        return $this;
    }

    /**
     * Gets token_cof
     *
     * @return int
     */
    public function getTokenCof()
    {
        return $this->container['token_cof'];
    }

    /**
     * Sets token_cof
     *
     * @param int $token_cof Express if card has COF registered.
     *
     * @return $this
     */
    public function setTokenCof($token_cof)
    {
        $this->container['token_cof'] = $token_cof;

        return $this;
    }

    /**
     * Gets eea_card
     *
     * @return string
     */
    public function getEeaCard()
    {
        return $this->container['eea_card'];
    }

    /**
     * Sets eea_card
     *
     * @param string $eea_card Express if card country belongs to EEA zone or not. (Y/N or NA if not available).
     *
     * @return $this
     */
    public function setEeaCard($eea_card)
    {
        $this->container['eea_card'] = $eea_card;

        return $this;
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
