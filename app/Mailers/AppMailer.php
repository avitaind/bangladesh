<?php

namespace App\Mailers;

use App\Subscription;
use Illuminate\Contracts\Mail\Mailer;
use DB;

class AppMailer {
    protected $mailer; 
    protected $fromAddress = 'contact@avita-india.com';
    protected $fromName = 'AVITA INDIA | Official Website AVITA INDIA';
    protected $to;
    protected $subject;
    protected $view;
    protected $data = [];

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendSubscriberInformation($user, Subscription $subscription)
    {
              
        $this->to = $subscription->email;
        $this->subject = "New Subscriber | AVITA INDIA";
        $this->view = 'emails.subscription';
        $this->data = compact('user', 'subscription');

        return $this->deliver();
    }

    public function deliver()
    {
        $this->mailer->send($this->view, $this->data, function($message) {
            $message->from($this->fromAddress, $this->fromName)
                    ->to($this->to)->subject($this->subject);
        });
    }
}