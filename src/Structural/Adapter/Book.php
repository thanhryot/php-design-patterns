<?php

namespace ThanhRyot\DesignPatterns\Structural\Adapter;

interface Book
{
    public function open();

    public function getPage();

    public function turnPage();
}
