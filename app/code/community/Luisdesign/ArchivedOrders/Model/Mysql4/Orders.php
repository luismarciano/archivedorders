<?php
/**
 * Orders.php
 *
 * @category    Luisdesign
 * @package     ArchivedOrders
 *
 */
class Luisdesign_ArchivedOrders_Model_Mysql4_Orders extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {   
        $this->_init('luisdesign_archivedorders/orders', 'id');
    }   
}