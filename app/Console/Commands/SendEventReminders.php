<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Event;
use App\Models\Subscriber;
use App\Mail\EventReminder;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendEventReminders extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-event-reminders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send reminders for upcoming events';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tomorrow = Carbon::now()->addDay()->toDateString();
        $agendas = Event::whereDate('date', $tomorrow)->get();

        if ($agendas->isEmpty()) {
            $this->info('No upcoming agendas.');
            return;
        }

        $subscribers = Subscriber::all();
        foreach ($agendas as $agenda) {
            foreach ($subscribers as $subscriber) {
                Mail::to($subscriber->email)->send(new EventReminder($agenda));
                $this->info('agenda: ' . $agenda->title);
                $this->info('Reminder sent to ' . $subscriber->email);
            }
        }
        $this->info('Agenda reminders sent successfully!');
    }
}
