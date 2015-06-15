<?php


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class UserTableSeeder extends Seeder {
    
    public function run() {
        
        User::create([
            'username' => 'person1',
            'password' => 'person1'
        ]);
        User::create([
            'username' => 'person2',
            'password' => 'person2'
        ]);
    }
}