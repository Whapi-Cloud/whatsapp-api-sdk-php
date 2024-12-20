<?php
/**
 * Settings
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Whapi API
 *
 * Sending and receiving messages using HTTP requests. Fixed price with no hidden fees, without limits and restrictions. You will be able to send and receive text/media/files/locations/goods/orders/polls messages via WhatsApp in private or group chats. Guides and SDK can be found on our website.
 *
 * The version of the OpenAPI document: 1.8.7
 * Contact: care@whapi.cloud
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * Settings Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Settings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Settings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'callback_backoff_delay_ms' => 'float',
        'max_callback_backoff_delay_ms' => 'float',
        'callback_persist' => 'bool',
        'media' => '\OpenAPI\Client\Model\MediaSettings',
        'webhooks' => '\OpenAPI\Client\Model\Webhook[]',
        'proxy' => 'string',
        'mobile_proxy' => 'string',
        'offline_mode' => 'bool',
        'full_history' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'callback_backoff_delay_ms' => null,
        'max_callback_backoff_delay_ms' => null,
        'callback_persist' => null,
        'media' => null,
        'webhooks' => null,
        'proxy' => null,
        'mobile_proxy' => null,
        'offline_mode' => null,
        'full_history' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'callback_backoff_delay_ms' => false,
        'max_callback_backoff_delay_ms' => false,
        'callback_persist' => false,
        'media' => false,
        'webhooks' => false,
        'proxy' => false,
        'mobile_proxy' => false,
        'offline_mode' => false,
        'full_history' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'callback_backoff_delay_ms' => 'callback_backoff_delay_ms',
        'max_callback_backoff_delay_ms' => 'max_callback_backoff_delay_ms',
        'callback_persist' => 'callback_persist',
        'media' => 'media',
        'webhooks' => 'webhooks',
        'proxy' => 'proxy',
        'mobile_proxy' => 'mobile_proxy',
        'offline_mode' => 'offline_mode',
        'full_history' => 'full_history'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'callback_backoff_delay_ms' => 'setCallbackBackoffDelayMs',
        'max_callback_backoff_delay_ms' => 'setMaxCallbackBackoffDelayMs',
        'callback_persist' => 'setCallbackPersist',
        'media' => 'setMedia',
        'webhooks' => 'setWebhooks',
        'proxy' => 'setProxy',
        'mobile_proxy' => 'setMobileProxy',
        'offline_mode' => 'setOfflineMode',
        'full_history' => 'setFullHistory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'callback_backoff_delay_ms' => 'getCallbackBackoffDelayMs',
        'max_callback_backoff_delay_ms' => 'getMaxCallbackBackoffDelayMs',
        'callback_persist' => 'getCallbackPersist',
        'media' => 'getMedia',
        'webhooks' => 'getWebhooks',
        'proxy' => 'getProxy',
        'mobile_proxy' => 'getMobileProxy',
        'offline_mode' => 'getOfflineMode',
        'full_history' => 'getFullHistory'
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
        $this->setIfExists('callback_backoff_delay_ms', $data ?? [], null);
        $this->setIfExists('max_callback_backoff_delay_ms', $data ?? [], null);
        $this->setIfExists('callback_persist', $data ?? [], null);
        $this->setIfExists('media', $data ?? [], null);
        $this->setIfExists('webhooks', $data ?? [], null);
        $this->setIfExists('proxy', $data ?? [], null);
        $this->setIfExists('mobile_proxy', $data ?? [], null);
        $this->setIfExists('offline_mode', $data ?? [], false);
        $this->setIfExists('full_history', $data ?? [], false);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['callback_backoff_delay_ms']) && ($this->container['callback_backoff_delay_ms'] > 15000)) {
            $invalidProperties[] = "invalid value for 'callback_backoff_delay_ms', must be smaller than or equal to 15000.";
        }

        if (!is_null($this->container['callback_backoff_delay_ms']) && ($this->container['callback_backoff_delay_ms'] < 3000)) {
            $invalidProperties[] = "invalid value for 'callback_backoff_delay_ms', must be bigger than or equal to 3000.";
        }

        if (!is_null($this->container['max_callback_backoff_delay_ms']) && ($this->container['max_callback_backoff_delay_ms'] > 3600000)) {
            $invalidProperties[] = "invalid value for 'max_callback_backoff_delay_ms', must be smaller than or equal to 3600000.";
        }

        if (!is_null($this->container['max_callback_backoff_delay_ms']) && ($this->container['max_callback_backoff_delay_ms'] < 600000)) {
            $invalidProperties[] = "invalid value for 'max_callback_backoff_delay_ms', must be bigger than or equal to 600000.";
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
     * Gets callback_backoff_delay_ms
     *
     * @return float|null
     */
    public function getCallbackBackoffDelayMs()
    {
        return $this->container['callback_backoff_delay_ms'];
    }

    /**
     * Sets callback_backoff_delay_ms
     *
     * @param float|null $callback_backoff_delay_ms Backoff delay for a failed callback in milliseconds This setting is used to configure the amount of time the backoff delays before retrying a failed callback. The backoff delay increases linearly by this value each time a callback fails to get a HTTPS 200 OK response. The backoff delay is capped by the max_callback_backoff_delay_ms setting.
     *
     * @return self
     */
    public function setCallbackBackoffDelayMs($callback_backoff_delay_ms)
    {
        if (is_null($callback_backoff_delay_ms)) {
            throw new \InvalidArgumentException('non-nullable callback_backoff_delay_ms cannot be null');
        }

        if (($callback_backoff_delay_ms > 15000)) {
            throw new \InvalidArgumentException('invalid value for $callback_backoff_delay_ms when calling Settings., must be smaller than or equal to 15000.');
        }
        if (($callback_backoff_delay_ms < 3000)) {
            throw new \InvalidArgumentException('invalid value for $callback_backoff_delay_ms when calling Settings., must be bigger than or equal to 3000.');
        }

        $this->container['callback_backoff_delay_ms'] = $callback_backoff_delay_ms;

        return $this;
    }

    /**
     * Gets max_callback_backoff_delay_ms
     *
     * @return float|null
     */
    public function getMaxCallbackBackoffDelayMs()
    {
        return $this->container['max_callback_backoff_delay_ms'];
    }

    /**
     * Sets max_callback_backoff_delay_ms
     *
     * @param float|null $max_callback_backoff_delay_ms Maximum delay for a failed callback in milliseconds
     *
     * @return self
     */
    public function setMaxCallbackBackoffDelayMs($max_callback_backoff_delay_ms)
    {
        if (is_null($max_callback_backoff_delay_ms)) {
            throw new \InvalidArgumentException('non-nullable max_callback_backoff_delay_ms cannot be null');
        }

        if (($max_callback_backoff_delay_ms > 3600000)) {
            throw new \InvalidArgumentException('invalid value for $max_callback_backoff_delay_ms when calling Settings., must be smaller than or equal to 3600000.');
        }
        if (($max_callback_backoff_delay_ms < 600000)) {
            throw new \InvalidArgumentException('invalid value for $max_callback_backoff_delay_ms when calling Settings., must be bigger than or equal to 600000.');
        }

        $this->container['max_callback_backoff_delay_ms'] = $max_callback_backoff_delay_ms;

        return $this;
    }

    /**
     * Gets callback_persist
     *
     * @return bool|null
     */
    public function getCallbackPersist()
    {
        return $this->container['callback_persist'];
    }

    /**
     * Sets callback_persist
     *
     * @param bool|null $callback_persist Stores callbacks on disk until they are successfully acknowledged by the Webhook or not. Restart required.
     *
     * @return self
     */
    public function setCallbackPersist($callback_persist)
    {
        if (is_null($callback_persist)) {
            throw new \InvalidArgumentException('non-nullable callback_persist cannot be null');
        }
        $this->container['callback_persist'] = $callback_persist;

        return $this;
    }

    /**
     * Gets media
     *
     * @return \OpenAPI\Client\Model\MediaSettings|null
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param \OpenAPI\Client\Model\MediaSettings|null $media media
     *
     * @return self
     */
    public function setMedia($media)
    {
        if (is_null($media)) {
            throw new \InvalidArgumentException('non-nullable media cannot be null');
        }
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets webhooks
     *
     * @return \OpenAPI\Client\Model\Webhook[]|null
     */
    public function getWebhooks()
    {
        return $this->container['webhooks'];
    }

    /**
     * Sets webhooks
     *
     * @param \OpenAPI\Client\Model\Webhook[]|null $webhooks webhooks
     *
     * @return self
     */
    public function setWebhooks($webhooks)
    {
        if (is_null($webhooks)) {
            throw new \InvalidArgumentException('non-nullable webhooks cannot be null');
        }
        $this->container['webhooks'] = $webhooks;

        return $this;
    }

    /**
     * Gets proxy
     *
     * @return string|null
     */
    public function getProxy()
    {
        return $this->container['proxy'];
    }

    /**
     * Sets proxy
     *
     * @param string|null $proxy Use your Socks5 proxy if your account activity arouses suspicion from WhatsApp. This can help maintain anonymity and ensure smooth operation.
     *
     * @return self
     */
    public function setProxy($proxy)
    {
        if (is_null($proxy)) {
            throw new \InvalidArgumentException('non-nullable proxy cannot be null');
        }
        $this->container['proxy'] = $proxy;

        return $this;
    }

    /**
     * Gets mobile_proxy
     *
     * @return string|null
     */
    public function getMobileProxy()
    {
        return $this->container['mobile_proxy'];
    }

    /**
     * Sets mobile_proxy
     *
     * @param string|null $mobile_proxy Service proxy for mobile authorization.
     *
     * @return self
     */
    public function setMobileProxy($mobile_proxy)
    {
        if (is_null($mobile_proxy)) {
            throw new \InvalidArgumentException('non-nullable mobile_proxy cannot be null');
        }
        $this->container['mobile_proxy'] = $mobile_proxy;

        return $this;
    }

    /**
     * Gets offline_mode
     *
     * @return bool|null
     */
    public function getOfflineMode()
    {
        return $this->container['offline_mode'];
    }

    /**
     * Sets offline_mode
     *
     * @param bool|null $offline_mode When true, API will not send online status to the server on connection. This will allow you to receive push notifications to devices connected to the number. Working after reconnect.
     *
     * @return self
     */
    public function setOfflineMode($offline_mode)
    {
        if (is_null($offline_mode)) {
            throw new \InvalidArgumentException('non-nullable offline_mode cannot be null');
        }
        $this->container['offline_mode'] = $offline_mode;

        return $this;
    }

    /**
     * Gets full_history
     *
     * @return bool|null
     */
    public function getFullHistory()
    {
        return $this->container['full_history'];
    }

    /**
     * Sets full_history
     *
     * @param bool|null $full_history When true, all messages will be cached after the connection. If false, old messages will selectively not be cached, allowing large accounts to run faster. Working after reconnect.
     *
     * @return self
     */
    public function setFullHistory($full_history)
    {
        if (is_null($full_history)) {
            throw new \InvalidArgumentException('non-nullable full_history cannot be null');
        }
        $this->container['full_history'] = $full_history;

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


