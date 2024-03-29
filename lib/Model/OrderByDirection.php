<?php
/**
 * OrderByDirection
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  GeminiCommerce\ProductList
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Collection Service
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * Contact: info@gemini-commerce.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace GeminiCommerce\ProductList\Model;
use \GeminiCommerce\ProductList\ObjectSerializer;

/**
 * OrderByDirection Class Doc Comment
 *
 * @category Class
 * @package  GeminiCommerce\ProductList
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderByDirection
{
    /**
     * Possible values of this enum
     */
    public const _DEFAULT = 'DEFAULT';

    public const ASC = 'ASC';

    public const DESC = 'DESC';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_DEFAULT,
            self::ASC,
            self::DESC
        ];
    }
}


