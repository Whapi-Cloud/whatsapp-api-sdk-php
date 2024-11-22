<?php
/**
 * MessageContentDocument
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
 * MessageContentDocument Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MessageContentDocument implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MessageContentDocument';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'link' => 'string',
        'mime_type' => 'string',
        'file_size' => 'int',
        'file_name' => 'string',
        'sha256' => 'string',
        'timestamp' => 'float',
        'caption' => 'string',
        'filename' => 'string',
        'buttons' => '\OpenAPI\Client\Model\Button[]',
        'view_once' => 'bool',
        'page_count' => 'int',
        'preview' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'link' => null,
        'mime_type' => null,
        'file_size' => 'int64',
        'file_name' => null,
        'sha256' => null,
        'timestamp' => null,
        'caption' => null,
        'filename' => null,
        'buttons' => null,
        'view_once' => null,
        'page_count' => null,
        'preview' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'link' => false,
        'mime_type' => false,
        'file_size' => false,
        'file_name' => false,
        'sha256' => false,
        'timestamp' => false,
        'caption' => false,
        'filename' => false,
        'buttons' => false,
        'view_once' => false,
        'page_count' => false,
        'preview' => false
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
        'id' => 'id',
        'link' => 'link',
        'mime_type' => 'mime_type',
        'file_size' => 'file_size',
        'file_name' => 'file_name',
        'sha256' => 'sha256',
        'timestamp' => 'timestamp',
        'caption' => 'caption',
        'filename' => 'filename',
        'buttons' => 'buttons',
        'view_once' => 'view_once',
        'page_count' => 'page_count',
        'preview' => 'preview'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'link' => 'setLink',
        'mime_type' => 'setMimeType',
        'file_size' => 'setFileSize',
        'file_name' => 'setFileName',
        'sha256' => 'setSha256',
        'timestamp' => 'setTimestamp',
        'caption' => 'setCaption',
        'filename' => 'setFilename',
        'buttons' => 'setButtons',
        'view_once' => 'setViewOnce',
        'page_count' => 'setPageCount',
        'preview' => 'setPreview'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'link' => 'getLink',
        'mime_type' => 'getMimeType',
        'file_size' => 'getFileSize',
        'file_name' => 'getFileName',
        'sha256' => 'getSha256',
        'timestamp' => 'getTimestamp',
        'caption' => 'getCaption',
        'filename' => 'getFilename',
        'buttons' => 'getButtons',
        'view_once' => 'getViewOnce',
        'page_count' => 'getPageCount',
        'preview' => 'getPreview'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('link', $data ?? [], null);
        $this->setIfExists('mime_type', $data ?? [], null);
        $this->setIfExists('file_size', $data ?? [], null);
        $this->setIfExists('file_name', $data ?? [], null);
        $this->setIfExists('sha256', $data ?? [], null);
        $this->setIfExists('timestamp', $data ?? [], null);
        $this->setIfExists('caption', $data ?? [], null);
        $this->setIfExists('filename', $data ?? [], null);
        $this->setIfExists('buttons', $data ?? [], null);
        $this->setIfExists('view_once', $data ?? [], null);
        $this->setIfExists('page_count', $data ?? [], null);
        $this->setIfExists('preview', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if (!preg_match("/^[a-zA-Z0-9]+-[0-9a-fA-F-]+$/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[a-zA-Z0-9]+-[0-9a-fA-F-]+$/.";
        }

        if ($this->container['mime_type'] === null) {
            $invalidProperties[] = "'mime_type' can't be null";
        }
        if ($this->container['file_size'] === null) {
            $invalidProperties[] = "'file_size' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Media ID
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        if ((!preg_match("/^[a-zA-Z0-9]+-[0-9a-fA-F-]+$/", ObjectSerializer::toString($id)))) {
            throw new \InvalidArgumentException("invalid value for \$id when calling MessageContentDocument., must conform to the pattern /^[a-zA-Z0-9]+-[0-9a-fA-F-]+$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets link
     *
     * @return string|null
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param string|null $link Optional. Link to media
     *
     * @return self
     */
    public function setLink($link)
    {
        if (is_null($link)) {
            throw new \InvalidArgumentException('non-nullable link cannot be null');
        }
        $this->container['link'] = $link;

        return $this;
    }

    /**
     * Gets mime_type
     *
     * @return string
     */
    public function getMimeType()
    {
        return $this->container['mime_type'];
    }

    /**
     * Sets mime_type
     *
     * @param string $mime_type Mime type of media
     *
     * @return self
     */
    public function setMimeType($mime_type)
    {
        if (is_null($mime_type)) {
            throw new \InvalidArgumentException('non-nullable mime_type cannot be null');
        }
        $this->container['mime_type'] = $mime_type;

        return $this;
    }

    /**
     * Gets file_size
     *
     * @return int
     */
    public function getFileSize()
    {
        return $this->container['file_size'];
    }

    /**
     * Sets file_size
     *
     * @param int $file_size File size in bytes
     *
     * @return self
     */
    public function setFileSize($file_size)
    {
        if (is_null($file_size)) {
            throw new \InvalidArgumentException('non-nullable file_size cannot be null');
        }
        $this->container['file_size'] = $file_size;

        return $this;
    }

    /**
     * Gets file_name
     *
     * @return string|null
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name
     *
     * @param string|null $file_name Optional. File name
     *
     * @return self
     */
    public function setFileName($file_name)
    {
        if (is_null($file_name)) {
            throw new \InvalidArgumentException('non-nullable file_name cannot be null');
        }
        $this->container['file_name'] = $file_name;

        return $this;
    }

    /**
     * Gets sha256
     *
     * @return string|null
     */
    public function getSha256()
    {
        return $this->container['sha256'];
    }

    /**
     * Sets sha256
     *
     * @param string|null $sha256 Checksum
     *
     * @return self
     */
    public function setSha256($sha256)
    {
        if (is_null($sha256)) {
            throw new \InvalidArgumentException('non-nullable sha256 cannot be null');
        }
        $this->container['sha256'] = $sha256;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return float|null
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param float|null $timestamp Created at
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        if (is_null($timestamp)) {
            throw new \InvalidArgumentException('non-nullable timestamp cannot be null');
        }
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets caption
     *
     * @return string|null
     */
    public function getCaption()
    {
        return $this->container['caption'];
    }

    /**
     * Sets caption
     *
     * @param string|null $caption Optional. Text caption under the document.
     *
     * @return self
     */
    public function setCaption($caption)
    {
        if (is_null($caption)) {
            throw new \InvalidArgumentException('non-nullable caption cannot be null');
        }
        $this->container['caption'] = $caption;

        return $this;
    }

    /**
     * Gets filename
     *
     * @return string|null
     */
    public function getFilename()
    {
        return $this->container['filename'];
    }

    /**
     * Sets filename
     *
     * @param string|null $filename Optional. File name
     *
     * @return self
     */
    public function setFilename($filename)
    {
        if (is_null($filename)) {
            throw new \InvalidArgumentException('non-nullable filename cannot be null');
        }
        $this->container['filename'] = $filename;

        return $this;
    }

    /**
     * Gets buttons
     *
     * @return \OpenAPI\Client\Model\Button[]|null
     */
    public function getButtons()
    {
        return $this->container['buttons'];
    }

    /**
     * Sets buttons
     *
     * @param \OpenAPI\Client\Model\Button[]|null $buttons buttons
     *
     * @return self
     */
    public function setButtons($buttons)
    {
        if (is_null($buttons)) {
            throw new \InvalidArgumentException('non-nullable buttons cannot be null');
        }
        $this->container['buttons'] = $buttons;

        return $this;
    }

    /**
     * Gets view_once
     *
     * @return bool|null
     */
    public function getViewOnce()
    {
        return $this->container['view_once'];
    }

    /**
     * Sets view_once
     *
     * @param bool|null $view_once Is view once
     *
     * @return self
     */
    public function setViewOnce($view_once)
    {
        if (is_null($view_once)) {
            throw new \InvalidArgumentException('non-nullable view_once cannot be null');
        }
        $this->container['view_once'] = $view_once;

        return $this;
    }

    /**
     * Gets page_count
     *
     * @return int|null
     */
    public function getPageCount()
    {
        return $this->container['page_count'];
    }

    /**
     * Sets page_count
     *
     * @param int|null $page_count Optional. Number of pages
     *
     * @return self
     */
    public function setPageCount($page_count)
    {
        if (is_null($page_count)) {
            throw new \InvalidArgumentException('non-nullable page_count cannot be null');
        }
        $this->container['page_count'] = $page_count;

        return $this;
    }

    /**
     * Gets preview
     *
     * @return string|null
     */
    public function getPreview()
    {
        return $this->container['preview'];
    }

    /**
     * Sets preview
     *
     * @param string|null $preview Optional. Base64 encoded preview of the media. In JPEG format.
     *
     * @return self
     */
    public function setPreview($preview)
    {
        if (is_null($preview)) {
            throw new \InvalidArgumentException('non-nullable preview cannot be null');
        }
        $this->container['preview'] = $preview;

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

