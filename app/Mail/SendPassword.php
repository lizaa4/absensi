<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendPassword extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nama, $link)
    {
        $this->name = $nama;
        $this->link = $link;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('safitrisanisa10@gmail.com')
        ->view('password.email')
        ->subject('ABSENSI - Link Ubah Password Akun')
        ->with([
            'name'   => $this->name,
            'link'  => $this->link
        ]);
    }
}
