<?php 

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $user = new User();
        
        $user->email = $_ENV['DEFAULT_USER'];
        $user->password = Hash::make($_ENV['DEFAULT_PASS']);
        
        $user->save();
    }

}