<?php

namespace Acme\CouponDiscount;

use Laravel\Nova\ResourceTool;

class CouponDiscount extends ResourceTool
{
    /**
     * Get the displayable name of the resource tool.
     *
     * @return string
     */
    public function name()
    {
        return 'Coupon Discount';
    }

    /**
     * Get the component name for the resource tool.
     *
     * @return string
     */
    public function component()
    {
        return 'coupon-discount';
    }
}
