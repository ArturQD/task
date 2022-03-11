<?php

namespace App\Http\Controllers;

use App\Mail\SendPostMail;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
//    public function send(){
//        $users = User::with(['subscribers', 'posts' => function ($q) {
//            $q->where('sent', 0);
//        }])->get();
//
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
//    }
//}
}
