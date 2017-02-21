<?php

use App\Comment;
use App\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//        // Solução Mysql
//        Model::unguard();
//        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
//
//        //Criando e populando as tabelas
//        $this->call(PostsTableSeeder::class);
//        $this->call(TagTableSeeder::class);
//
//        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
//        Model::reguard();

        //Criando um usuário padrão
        factory('App\User')->create(
            [
                'name'              => 'Daniel Duarte',
                'email'             => 'daniel.val2@gmail.com',
                'password'          => bcrypt('123456'),
                'remember_token'    => str_random(10),
            ]
        );

        //Solucao postgres
        $tables = ['tags','posts','posts_tags', 'comments'];
        DB::statement('TRUNCATE ' . implode(',', $tables) . ' CASCADE;');

        //Criando e populando as tabelas
        $this->call(PostsTableSeeder::class);
        $this->call(TagTableSeeder::class);

    }
}
