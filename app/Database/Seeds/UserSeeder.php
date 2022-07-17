<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = model('UserModel');
		$model->insert([
		'username' => 'anggi',
		'useremail' => 'anggiperdana@gmail.com',
		'userpassword' => password_hash('anggi123', PASSWORD_DEFAULT),
		]);
    }
}
