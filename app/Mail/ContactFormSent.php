<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormSent extends Mailable
{
    use Queueable, SerializesModels;

    private $data;

    /**
     * ContactFormSent constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): self
    {
        return $this->from(config('mail.from.address'))
            ->subject('Форма: связаться с нами - promo')
            ->view('emails.contact_form', [
                'data' => $this->data
            ]);
    }
}
