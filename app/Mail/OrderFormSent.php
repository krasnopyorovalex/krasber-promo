<?php

declare(strict_types=1);

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * Class OrderFormSent
 * @package App\Mail
 */
class OrderFormSent extends Mailable
{
    use Queueable, SerializesModels;

    private $data;

    /**
     * OrderFormSent constructor.
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
            ->subject('Форма: заказ услуги')
            ->view('emails.order_form', [
                'data' => $this->data
            ]);
    }
}
