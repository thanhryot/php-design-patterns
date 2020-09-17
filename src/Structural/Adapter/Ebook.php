<?php

namespace ThanhRyot\DesignPatterns\Structural\Adapter;

interface EBook
{
    public function unlock();

    public function getPage();

    public function pressNext();
}