<?php
/**
 * MessageSource
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
 * MessageSource Class Doc Comment
 *
 * @category Class
 * @description Message source
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MessageSource
{
    /**
     * Possible values of this enum
     */
    public const WEB = 'web';

    public const MOBILE = 'mobile';

    public const API = 'api';

    public const SYSTEM = 'system';

    public const BUSINESS_API = 'business_api';

    public const UNKNOWN = 'unknown';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::WEB,
            self::MOBILE,
            self::API,
            self::SYSTEM,
            self::BUSINESS_API,
            self::UNKNOWN
        ];
    }
}


