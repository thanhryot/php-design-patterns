<?php

namespace ThanhRyot\DesignPatterns\Behavioral\TemplateMethod;

abstract class PageTemplate
{
    protected function showHeader()
    {
        return "Header";
    }

    protected function showNavigation()
    {
        return "Navigation";
    }

    protected function showFooter()
    {
        return "Footer";
    }

    abstract public function showBody();

    final public function showPage()
    {
        return $this->showHeader() . ' - ' .
            $this->showNavigation() . ' - ' .
            $this->showBody() . ' - ' .
            $this->showFooter();
    }
}