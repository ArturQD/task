<?php

namespace App\Jobs;

use App\Mail\SendPostMail;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class ProcessSendingEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $users = User::with(['subscribers', 'posts' => function ($q) {
            $q->where('sent', 0);
        }])->get();
        foreach ($users as $user) {
            foreach ($user->posts as $post) {
                foreach ($user->subscribers as $subscriber) {
                    if (isset($post)) {
                        Mail::to($subscriber->email)->send(new SendPostMail($post));
                        $post->sent = 1;
                        $post->save();
                        sleep(3);
                    }
                }
            }
        }
    }
}
