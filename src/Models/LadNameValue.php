<?php
/**
 * @author Jonathon Wallen
 * @date 28/6/17
 * @time 9:53 AM
 * @copyright 2008 - present, Monkii Digital Agency (http://monkii.com.au)
 */

namespace MonkiiBuilt\LadNameValue\Models;

use MonkiiBuilt\LaravelPages\Models\PageSection;

class LadNameValue extends PageSection
{
    protected static $singleTableType = 'name_value';

    public function getDecorator()
    {
        $decoratorName = \MonkiiBuilt\LadNameValue\Decorator::class;
        return new $decoratorName($this);
    }
}