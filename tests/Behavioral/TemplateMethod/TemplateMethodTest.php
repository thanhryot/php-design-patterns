<?php

namespace Tests\Behavioral\TemplateMethod;


use ThanhRyot\DesignPatterns\Behavioral\TemplateMethod\PageTemplate;
use ThanhRyot\DesignPatterns\Behavioral\TemplateMethod\HomePage;
use ThanhRyot\DesignPatterns\Behavioral\TemplateMethod\DetailPage;
use ThanhRyot\DesignPatterns\Behavioral\TemplateMethod\ContactPage;
use PHPUnit\Framework\TestCase;

class TemplateMethodTest extends TestCase
{
    public function providePageComponents()
    {
        return [
            [new HomePage()],
            [new DetailPage()],
            [new ContactPage()]
        ];
    }

    /**
     * @dataProvider providePageComponents
     *
     * @param PageTemplate $pageTemplate
     */
    public function testCanCreateSmartPhone(PageTemplate $pageTemplate)
    {
        $pageContent = 'Header - Navigation - ' . $pageTemplate->showBody() . ' - Footer';
        $this->assertSame($pageContent, $pageTemplate->showPage());
    }
}