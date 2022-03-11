<?php

namespace App\Console\Commands;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Console\Command;

class CreatePost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:post {id} {title}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creating new post';

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
        $id = $this->argument('id');
        $title = $this->argument('title');
        $users = User::where('id',$id)->get();
        foreach ($users as $user){
            return Post::create([
                'user_id' => $id,
                'title' => $title,
                'author' => $user->name,
                'sent' => '0'
            ]);
        }
        return 0;
    }
}
