<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
/*importar clase*/
use App\Models\User;
use App\Models\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory()->Create();
        
        for($i=0;$i<10;$i++)
        {
            Article::factory()->Create();
        }
        

    }
}
