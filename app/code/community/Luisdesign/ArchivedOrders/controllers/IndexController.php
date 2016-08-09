<?php
/**
 * IndexController.php
 * Controller responsible for archived order actions
 *
 * @category    Luisdesign
 * @package     ArchivedOrders
 *
 */

class Luisdesign_ArchivedOrders_IndexController extends Mage_Core_Controller_Front_Action {
    
    public function indexAction()
    {
        $this->loadLayout();
    	$this->renderLayout();
    }

    /**
     * Require the customer to be logged in
     */
    public function preDispatch()
    {
        parent::preDispatch();
        $action = $this->getRequest()->getActionName();
        $loginUrl = Mage::helper('customer')->getLoginUrl();
 
        if (!Mage::getSingleton('customer/session')->authenticate($this, $loginUrl)) {
            $this->setFlag('', self::FLAG_NO_DISPATCH, true);
        }

    }
}