<?php
    use Illuminate\Database\Seeder;
    use Illuminate\Database\Eloquent\Model;

    use App\User;

use Illuminate\Support\Facades\Hash;

class UsersSeed extends Seeder{

    public function run()
    {
        User::create
        (
            [
                'email'=>'fake@fake.com',
                'password' => Hash::make('pass')
            ]
        );

    }

}