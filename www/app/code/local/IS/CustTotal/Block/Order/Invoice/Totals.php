<?php
class IS_CustTotal_Block_Order_Invoice_Totals extends Mage_Sales_Block_Order_Invoice_Totals
{
    protected function _initTotals() {
        parent::_initTotals();
        $amt = $this->getOrder()->getFeeInvoicedIS();
        $baseAmt = $this->getOrder()->getBaseFeeInvoicedIS();
        if ($amt != 0) {
            $this->addTotal(new Varien_Object(array(
                'code' => 'is_custtotal',
                'value' => $amt,
                'base_value' => $baseAmt,
                'label' => 'myFee',
            )), array('shipping', 'tax'));
        }
        return $this;
    }
}