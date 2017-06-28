<?php
/**
 * @author Jonathon Wallen
 * @date 28/6/17
 * @time 9:51 AM
 * @copyright 2008 - present, Monkii Digital Agency (http://monkii.com.au)
 */

namespace MonkiiBuilt\LadNameValue;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use MonkiiBuilt\LaravelPages\Models\PageSection;
use MonkiiBuilt\LadNameValue\Models\LadNameValue;

class ServiceProvider extends BaseServiceProvider
{
    protected $defer = false;

    public function boot(\MonkiiBuilt\LaravelAdministrator\PackageRegistry $packageRegistry)
    {
        $packageRegistry->registerPackage('MonkiiBuilt\LadNameValue');

        PageSection::addSingleTableSubclass(LadNameValue::class);

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'lad-name-value');

    }
}