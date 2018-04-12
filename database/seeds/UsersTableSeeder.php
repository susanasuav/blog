<?php

use Illuminate\Database\Seeder;
use App\User;
//he creado este archivo haciendo  php artisan make:seeder UsersTableSeeder
// una vez rellenado el run, descomento el DatabaseSeeder y
//en terminal escribo php artisan db:seed
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //para crear solo uno
      User::create([
       'name' => 'Juan',
       'email' =>'juan@gmail.com',
       'password'=>bcrypt('123123')
       ]);
       //para crear muchos
       //factory(User::class,10)->create();
    }
}
