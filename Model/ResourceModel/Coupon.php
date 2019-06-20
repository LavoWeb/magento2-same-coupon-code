<?php

namespace LavoWeb\SameCouponCode\Model\ResourceModel;

class Coupon extends \Magento\SalesRule\Model\ResourceModel\Coupon
{
    /**
     * Constructor adds unique fields
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('salesrule_coupon', 'coupon_id');
    }
}