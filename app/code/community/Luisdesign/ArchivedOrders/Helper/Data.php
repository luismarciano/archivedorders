<?php
/**
 * Data.php
 * Helper functions
 *
 * @category    Luisdesign
 * @package     ArchivedOrders
 *
 */
class Luisdesign_ArchivedOrders_Helper_Data extends Mage_Core_Helper_Abstract
{
	public function getModuleEnabled()
	{
		return Mage::getStoreConfigFlag('luisdesign_archivedorders/settings/archivedorders_enabled');
	}

	public function getOrderHistoryText()
	{
		return Mage::getStoreConfig('luisdesign_archivedorders/settings/order_history_text');
	}

	public function getArchivedOrderHistoryText()
	{
		return Mage::getStoreConfig('luisdesign_archivedorders/settings/archived_order_history_text');
	}
}