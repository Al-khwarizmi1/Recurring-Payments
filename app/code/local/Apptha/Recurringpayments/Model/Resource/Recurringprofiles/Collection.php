<?php
/**
 * Apptha
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.apptha.com/LICENSE.txt
 *
 * ==============================================================
 *                 MAGENTO EDITION USAGE NOTICE
 * ==============================================================
 * This package designed for Magento COMMUNITY edition
 * Apptha does not guarantee correct work of this extension
 * on any other Magento edition except Magento COMMUNITY edition.
 * Apptha does not provide extension support in case of
 * incorrect edition usage.
 * ==============================================================
 *
 * @category    Apptha
 * @package     Apptha_Recurringpayments
 * @version     0.1.0
 * @author      Apptha Team <developers@contus.in>
 * @copyright   Copyright (c) 2014 Apptha. (http://www.apptha.com)
 * @license     http://www.apptha.com/LICENSE.txt
 *
 */
	/**
	 * Recurringpayments_Model_Resource_Recurringprofiles Collection Block
	 *
	 * @category   Apptha
	 * @package    Apptha_Recurringpayments
	 * @author     Apptha Team <developers@contus.in>
	 */
class Apptha_Recurringpayments_Model_Resource_Recurringprofiles_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract{
	
	public function _construct()
	
	{		
		$this->_init('recurringpayments/recurringprofiles');
	}
	
}