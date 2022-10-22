<?php

namespace App\Services;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailService extends Mailable
{
    use Queueable, SerializesModels;

    protected $postTitle;
    protected $comment;
    protected $email;
    protected $name;

    public function __construct(string $postTitle, string $comment, string $email, string $name)
    {
        $this->postTitle = $postTitle;
        $this->comment = $comment;
        $this->email = $email;
        $this->name = $name;
    }

    public function build()
    {
        return $this
            ->with([
                'postTitle' => $this->postTitle,
                'comment' => $this->comment,
                'commentedBy' => $this->name,
                'commentedEmail' => $this->email,
            ])
            ->view('mail');
    }
}
