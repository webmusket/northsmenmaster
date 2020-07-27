<?php

namespace Asad\Productsettings;

use Laravel\Nova\ResourceTool;

class Productsettings extends ResourceTool
{
    /**
     * Get the displayable name of the resource tool.
     *
     * @return string
     */
    public function name()
    {
        return 'Productsettings';
    }

    /**
     * Get the component name for the resource tool.
     *
     * @return string
     */
    public function component()
    {
        return 'productsettings';
    }
}
