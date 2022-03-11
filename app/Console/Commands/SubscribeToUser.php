<?php

namespace App\Console\Commands;

use App\Models\UserSubscribers;
use Illuminate\Console\Command;

class SubscribeToUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'subscribe:to {user_id} {subscriber_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Subscribing on user';

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
//        $userId = $this->argument('user_id');
//        $subId = $this->argument('subscriber_id');
        UserSubscribers::create([
            'user_id' => $this->argument('user_id'),
            'subscriber_id' => $this->argument('subscriber_id'),
        ]);
        return 0;
    }
}
