<?php

namespace ThanhRyot\DesignPatterns\Behavioral\TemplateMethod;

class HomePage extends PageTemplate
{
    public function showBody()
    {
        return "HomePage";
    }
}