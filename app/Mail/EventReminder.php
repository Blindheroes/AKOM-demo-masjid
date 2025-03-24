<?php

namespace App\Mail;

use App\Models\Event;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EventReminder extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

    public $event;
    public function __construct(Event $event)
    {
        $this->event = $event;
    }




    public function build()
    {
        return $this->subject('Pengumuman Kegiatan - ' . $this->event->title)
            ->view('mails.eventRemainder')
            ->with(['event' => $this->event]);
    }
}
