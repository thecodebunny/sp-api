<?php
/**
 * GuidanceReason
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
 * GuidanceReason Class Doc Comment
 *
 * @category Class
 * @description A reason for the current inbound guidance for an item.
 * @package  Thecodebunny\SpApi
 * @group 
 */
class GuidanceReason
{
    /**
     * Possible values of this enum
     */
    const SLOW_MOVING_ASIN = 'SlowMovingASIN';
    const NO_APPLICABLE_GUIDANCE = 'NoApplicableGuidance';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SLOW_MOVING_ASIN,
            self::NO_APPLICABLE_GUIDANCE,
        ];
    }
}

