<?php

namespace ThanhRyot\DesignPatterns\Structural\Facade;

class SendNotifyService
{
    public function sendNotifyToEmail()
    {
        return 'Send notify to email';
    }

    public function sendNotifyToSms()
    {
        return 'Send notify to sms.';
    }
}
