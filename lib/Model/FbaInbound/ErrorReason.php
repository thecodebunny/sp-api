<?php
/**
 * ErrorReason
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Thecodebunny\SpApi
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Thecodebunny\SpApi\Model\FbaInbound;
use \Thecodebunny\SpApi\ObjectSerializer;
use \Thecodebunny\SpApi\Model\ModelInterface;

/**
 * ErrorReason Class Doc Comment
 *
 * @category Class
 * @description The reason that the ASIN is invalid.
 * @package  Thecodebunny\SpApi
 * @group 
 */
class ErrorReason
{
    /**
     * Possible values of this enum
     */
    const DOES_NOT_EXIST = 'DoesNotExist';
    const INVALID_ASIN = 'InvalidASIN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DOES_NOT_EXIST,
            self::INVALID_ASIN,
        ];
    }
}

