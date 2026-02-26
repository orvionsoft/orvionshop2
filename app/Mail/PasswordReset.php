<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PasswordReset extends Mailable
{
    use Queueable, SerializesModels;

    public $customer_name;
    public $reset_code;
    public $site_name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($customer_name, $reset_code, $site_name)
    {
        $this->customer_name = $customer_name;
        $this->reset_code = $reset_code;
        $this->site_name = $site_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.password_reset')
                    ->subject('পাসওয়ার্ড রিসেট করুন - ' . $this->site_name)
                    ->with([
                        'customer_name' => $this->customer_name,
                        'reset_code' => $this->reset_code,
                        'site_name' => $this->site_name,
                    ]);
    }
}
