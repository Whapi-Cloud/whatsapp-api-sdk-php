<?php
/**
 * MediaMessageType
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
use \OpenAPI\Client\ObjectSerializer;

/**
 * MediaMessageType Class Doc Comment
 *
 * @category Class
 * @description Media message type
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MediaMessageType
{
    /**
     * Possible values of this enum
     */
    public const IMAGE = 'image';

    public const VIDEO = 'video';

    public const GIF = 'gif';

    public const AUDIO = 'audio';

    public const VOICE = 'voice';

    public const DOCUMENT = 'document';

    public const STICKER = 'sticker';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::IMAGE,
            self::VIDEO,
            self::GIF,
            self::AUDIO,
            self::VOICE,
            self::DOCUMENT,
            self::STICKER
        ];
    }
}


