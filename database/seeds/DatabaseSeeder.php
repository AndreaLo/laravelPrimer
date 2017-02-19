<?php

use Illuminate\Database\Seeder;
use App\movies;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function seedCatalog()
    {
        DB::table('movies')->delete();
        foreach( $this->arrayPeliculas as $pelicula ) {
            $p = new movies;
            $p->title = $pelicula['title'];
            $p->year = $pelicula['year'];
            $p->director = $pelicula['director'];
            $p->poster = $pelicula['poster'];
            $p->rented = $pelicula['rented'];
            $p->synopsis = $pelicula['synopsis'];
            $p->save();
        }

    }

    private function seedUsers(){
        DB::table('users')->delete();
        //foreach( $this->$arrayUsers as $users ) {
        foreach( $this->arrayUsers as $users ) {
            $u = new User;
            $u->name = $users['name'];
            $u->email = $users['email'];
            $u->password =  bcrypt($users['password']);
            $u->save();
        }
    }

    public function run()
    {
        self::seedCatalog();
        $this->command->info('Tabla catálogo inicializada con datos!');
        // $this->call(UsersTableSeeder::class);
        self::seedUsers();
        $this->command->info('Tabla usuarios inicializada con datos!');
    }
}