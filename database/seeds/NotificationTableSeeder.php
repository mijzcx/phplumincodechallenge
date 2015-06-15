<?php


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Notification;

/*
 | @coder Melvin R. Zamora
 | 2015-6-15
 */

class NotificationTableSeeder extends Seeder {
    
    public function run() {
        
        Notification::create([
            'message_from' => 'person1',
            'message_to' => 'person2',
            'message' => 'warning message',
            'message_type' => 0,
            'message_status' => 0
        ]);
        Notification::create([
            'message_from' => 'person1',
            'message_to' => 'person2',
            'message' => 'info message',
            'message_type' => 1,
            'message_status' => 0
        ]);
        
        Notification::create([
            'message_from' => 'person1',
            'message_to' => 'person2',
            'message' => 'error message',
            'message_type' => 2,
            'message_status' => 1
        ]);
    }
}