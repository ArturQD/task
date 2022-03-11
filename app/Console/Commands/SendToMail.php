<?php

namespace App\Console\Commands;

use App\Jobs\ProcessSendingEmail;
use App\Mail\SendPostMail;
use App\Models\Subscriber;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendToMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sending new posts to subscribers';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
//        $users = User::with(['subscribers', 'posts' => function ($q) {
//            $q->where('sent', 0);
//        }])->get();
//        foreach ($users as $user) {
//            foreach ($user->posts as $post) {
//                foreach ($user->subscribers as $subscriber) {
//                    if (isset($post)) {
//                        Mail::to($subscriber->email)->send(new SendPostMail($post));
//                        $post->sent = 1;
//                        $post->save();
//                    }
//                }
//            }
////        }
///
///
        ProcessSendingEmail::dispatch();
        return 0;
    }
}
