<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Contracts\Queue\ShouldQueue;

class PaymentMail extends Mailable
{
    use Queueable, SerializesModels;

    public $content, $subject, $view, $attachmentPaths;

    /**
     * Create a new message instance.
     */
    public function __construct($content, $subject, $view, $attachmentPaths = [])
    {
        $this->content = $content;
        $this->subject = $subject;
        $this->view = $view;
        $this->attachmentPaths = $attachmentPaths;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: $this->view,
            with: [
                'content' => $this->content
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $attachments = [];

        foreach ($this->attachmentPaths as $path) {
            // Debug path sebelum proses
            // dd("Debugging Path: " . $path);

            // Jika path sudah lengkap, langsung gunakan
            if (file_exists($path)) {
                $fullPath = $path;
            } else {
                // Jika masih relatif, gunakan storage_path()
                $fullPath = storage_path('app/public/' . ltrim($path, '/'));
            }

            // Cek apakah file ada
            if (file_exists($fullPath)) {
                // dd("File ditemukan: " . $fullPath);
                $attachments[] = Attachment::fromPath($fullPath);
            } else {
                // dd("File does not exist: " . $fullPath);
            }
        }

        return $attachments;
    }
}
