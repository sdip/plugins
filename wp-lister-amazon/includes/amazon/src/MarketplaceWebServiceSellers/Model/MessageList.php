<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     MarketplaceWebServiceSellers
 *  @copyright   Copyright 2008-2012 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2011-07-01
 */
/******************************************************************************* 
 * 
 *  Marketplace Web Service Sellers PHP5 Library
 * 
 */

/**
 *  @see MarketplaceWebServiceSellers_Model
 */
require_once ('MarketplaceWebServiceSellers/Model.php');  

    

/**
 * MarketplaceWebServiceSellers_Model_MessageList
 * 
 * Properties:
 * <ul>
 * 
 * <li>Message: MarketplaceWebServiceSellers_Model_Message</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceSellers_Model_MessageList extends MarketplaceWebServiceSellers_Model
{

    /**
     * Construct new MarketplaceWebServiceSellers_Model_MessageList
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Message: MarketplaceWebServiceSellers_Model_Message</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Message' => array('FieldValue' => array(), 'FieldType' => array('MarketplaceWebServiceSellers_Model_Message')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Message.
     * 
     * @return array of Message Message
     */
    public function getMessage() 
    {
        return $this->_fields['Message']['FieldValue'];
    }

    /**
     * Sets the value of the Message.
     * 
     * @param mixed Message or an array of Message Message
     * @return this instance
     */
    public function setMessage($message) 
    {
        if (!$this->_isNumericArray($message)) {
            $message =  array ($message);    
        }
        $this->_fields['Message']['FieldValue'] = $message;
        return $this;
    }


    /**
     * Sets single or multiple values of Message list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withMessage($message1, $message2)</code>
     * 
     * @param Message  $messageArgs one or more Message
     * @return MarketplaceWebServiceSellers_Model_MessageList  instance
     */
    public function withMessage($messageArgs)
    {
        foreach (func_get_args() as $message) {
            $this->_fields['Message']['FieldValue'][] = $message;
        }
        return $this;
    }   



    /**
     * Checks if Message list is non-empty
     * 
     * @return bool true if Message list is non-empty
     */
    public function isSetMessage()
    {
        return count ($this->_fields['Message']['FieldValue']) > 0;
    }




}