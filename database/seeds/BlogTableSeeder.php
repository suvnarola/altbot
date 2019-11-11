<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Blog;

class BlogTableSeeder extends Seeder
{

    public function run()
    {
        $arrayValues = ['low', 'medium', 'hight'];
        $faker = Faker::create('App\Blog');
        DB::table('blogs')->insert([
        	'user_id' => $faker->sentence(),
        	'title' => $faker->sentence(),
            'content' => $faker->paragraph(),
            'tags' => $faker->randomElement(['foo' ,'bar', 'baz']),
            'date' => new \DateTimeImmutable(),
            'status'=> $faker->boolean(),
        	'created_at' => \Carbon\Carbon::now(),
        	'Updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
