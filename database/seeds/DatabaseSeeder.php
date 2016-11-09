<?php

use App\Comment;
use App\Post;
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

// Solução Mysql
//        Model::unguard();
//        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
// Comandos de seed
//        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
//        Model::reguard();


//Solucao postgres
//DB::statement('TRUNCATE public.posts CASCADE');

        //Limpando as tabelas
        $tables = ['tags','posts','posts_tags', 'comments'];
        DB::statement('TRUNCATE ' . implode(',', $tables) . ' CASCADE;');

        //Criando e populando as tabelas
        $this->call(PostsTableSeeder::class);
        $this->call(TagTableSeeder::class);
    }
}
