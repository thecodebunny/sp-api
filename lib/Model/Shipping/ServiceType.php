<?php
/**
 * ServiceType
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Thecodebunny\SpApi
 */

/**
 * Selling Partner API for Shipping
 *
 * Provides programmatic access to Amazon Shipping APIs.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Thecodebunny\SpApi\Model\Shipping;
use \Thecodebunny\SpApi\ObjectSerializer;
use \Thecodebunny\SpApi\Model\ModelInterface;

/**
 * ServiceType Class Doc Comment
 *
 * @category Class
 * @description The type of shipping service that will be used for the service offering.
 * @package  Thecodebunny\SpApi
 * @group 
 */
class ServiceType
{
    /**
     * Possible values of this enum
     */
    const GROUND = 'Amazon Shipping Ground';
    const STANDARD = 'Amazon Shipping Standard';
    const PREMIUM = 'Amazon Shipping Premium';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GROUND,
            self::STANDARD,
            self::PREMIUM,
        ];
    }
}


