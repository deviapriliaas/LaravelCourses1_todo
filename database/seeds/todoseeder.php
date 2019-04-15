<?php

use Illuminate\Database\Seeder;


class todoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(App\ToDoModel::class,5)->create();
    }
}
