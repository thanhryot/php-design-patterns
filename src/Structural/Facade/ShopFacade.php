<?php

namespace ThanhRyot\DesignPatterns\Structural\Facade;

class ShopFacade
{
    private $account;
    private $payment;
    private $shipping;
    private $sendNotify;

    public function __construct()
    {
        $this->account = new AccountService();
        $this->payment = new PaymentService();
        $this->shipping = new ShippingService();
        $this->sendNotify = new SendNotifyService();
    }

    public function buyProductBasic()
    {
        $this->account->confirmBuy();
        $this->payment->payment();
        $this->shipping->shipBasic();
        $this->sendNotify->sendNotifyToSms();
        return 'Done!';
    }

    public function buyProductWithFreeShip()
    {
        $this->account->confirmBuy();
        $this->payment->payment();
        $this->shipping->shipFree();
        $this->sendNotify->sendNotifyToEmail();
        return 'You have purchased the product for free shipping!';
    }
}