<?php

namespace Asad\OrderAction;

use Laravel\Nova\ResourceTool;

class OrderAction extends ResourceTool
{
    /**
     * Get the displayable name of the resource tool.
     *
     * @return string
     */
    public function name()
    {
        return 'Order Action';
    }

    /**
     * Get the component name for the resource tool.
     *
     * @return string
     */
    public function component()
    {
        return 'order-action';
    }
}
