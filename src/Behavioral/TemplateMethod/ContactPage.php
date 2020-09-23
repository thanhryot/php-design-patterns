<?php

namespace ThanhRyot\DesignPatterns\Behavioral\TemplateMethod;

class ContactPage extends PageTemplate
{
    public function showBody()
    {
        return "ContactPage";
    }
}