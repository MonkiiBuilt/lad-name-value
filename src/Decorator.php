<?php
/**
 * @author Jonathon Wallen
 * @date 28/6/17
 * @time 9:52 AM
 * @copyright 2008 - present, Monkii Digital Agency (http://monkii.com.au)
 */

namespace MonkiiBuilt\LadNameValue;

use MonkiiBuilt\LaravelPages\PageSectionDecoratorAbstract as PageSectionDecoratorAbstract;

class Decorator extends PageSectionDecoratorAbstract
{
    public function renderForm() {
        return view('lad-name-value::lad-name-value', ['section' => $this->wrapped]);
    }
}