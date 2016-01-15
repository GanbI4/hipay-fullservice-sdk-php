<?php
/*
 * Hipay fullservice SDK
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 *
 * @copyright      Copyright (c) 2016 - Hipay
 * @license        http://opensource.org/licenses/mit-license.php MIT License
 *
 */
namespace Hipay\Fullservice\Gateway\Request\PaymentMethod;

use Hipay\Fullservice\Request\AbstractRequest;

/**
 * 3X,4X,3X no fees and 4X no fees creditcard Payment Method
 * Data related to payment with split payment system
 * 
 * @package Hipay\Fullservice
 * @author Kassim Belghait <kassim@sirateck.com>
 * @copyright Copyright (c) 2016 - Hipay
 * @license http://opensource.org/licenses/mit-license.php MIT License
 * @link https://github.com/hipay/hipay-fullservice-sdk-php
 * @api
 */
class XTimesCreditCardPaymentMethod extends AbstractRequest
{
   /**
    * Gender of the ship-to customer.
    * 
    * Possible values:
    * - M (Male)
    * - F (Female)
    * - U (Unknown)
    * 
    * @var string $shipto_gender Gender of the ship-to customer.
    * @required
    * @type options
    * @values M|Male,F|Female,U|Unknown
    * @length 1
    */ 
   public $shipto_gender;
   
   /**
    * @var string $shipto_phone The customer's ship-to phone number.
    * @required
    * @type phone
    */
   public $shipto_phone;
   
   /**
    * @var string $shipto_msisdn The customer's ship-to mobile phone number
    * @required
    * @type phone
    */
   public $shipto_msisdn;
   
   /**
    * @var string $order_category_code Order category list
    * @type list 
    */
   public $order_category_code;
   
   /**
    * @var string $delivery_date Estimated delivery date (yyyy-mm-dd).
    * @type date
    * @format yyyy-mm-dd
    */
   public $delivery_date;
   
   /**
    * Delivery method type 
    * 
    * Possible values:
    * - STORE24H
    * - CARRIER
    * - CARRIER24H
    * - RELAYPOINT
    * - RELAYPOINT24H
    * 
    * @var string $delivery_method Delivery method
    * @type options
    * $value STORE24H,CARRIER,CARRIER24H,RELAYPOINT,RELAYPOINT24H
    */
   public $delivery_method;
   
   /**
    * @var string $carrier_description Carrier Description
    */
   public $carrier_description;
   
   
}