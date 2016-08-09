<?php
/**
 * Orders.php
 *
 * @category    Luisdesign
 * @package     ArchivedOrders
 *
 */
class Luisdesign_ArchivedOrders_Model_Orders extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {   
        $this->_init('luisdesign_archivedorders/orders');
    }

    public function retrieveOrders() {

    	$store_id = Mage::app()->getStore()->getStoreId();

		$customer = Mage::getSingleton('customer/session')->getCustomer();
		$orders = Mage::getModel('luisdesign_archivedorders/orders')
			->getCollection()
            ->addFieldToFilter('email', $customer->getEmail())
            ->setOrder('created_at', 'desc');

    	return $orders;
    }
 
}