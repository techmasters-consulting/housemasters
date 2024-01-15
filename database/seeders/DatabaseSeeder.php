<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Idea;
use App\Models\Location;
use App\Models\Status;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'HouseMaster',
            'email' => 'housemasters.mu@gmail.com',
        ]);

        //User::factory(19)->create();

       
        Category::factory()->create(['name' => '1 Bedroom Apartment']);
        Category::factory()->create(['name' => '2 Bedroom Apartment']);
        Category::factory()->create(['name' => '3 Bedroom Apartment']);
        Category::factory()->create(['name' => '4 Bedroom Apartment']);
        Category::factory()->create(['name' => '2 bedroom House']);
        Category::factory()->create(['name' => '3 bedroom House']);
        Category::factory()->create(['name' => '4 bedroom House']);
        Category::factory()->create(['name' => '5 bedroom House']);

        Status::factory()->create(['name' => 'For Sale', 'classes' => 'bg-gray-200']);
        Status::factory()->create(['name' => 'For Rent', 'classes' => 'bg-purple text-white']);
        Status::factory()->create(['name' => 'Short term Only', 'classes' => 'bg-yellow text-white']);
        Status::factory()->create(['name' => 'Not Available', 'classes' => 'bg-green text-white']);
        Status::factory()->create(['name' => 'Coming Soon', 'classes' => 'bg-red text-white']);

        Location::factory()->create(['name' => 'Tamarin', 'classes' => 'tag tag-teal']);
        Location::factory()->create(['name' => 'Flic-en-flac', 'classes' => 'tag tag-pink']);
        Location::factory()->create(['name' => 'Quatre-borne', 'classes' => 'tag tag-purple']);
        Location::factory()->create(['name' => 'Moka', 'classes' => 'tag tag-blue']);
        Location::factory()->create(['name' => 'Ebene', 'classes' => 'tag tag-yellow']);

        //Idea::factory(100)->existing()->create();

        // Generate unique votes. Ensure idea_id and user_id are unique for each row
        // foreach (range(1, 20) as $user_id) {
        //     foreach (range(1, 100) as $idea_id) {
        //         if ($idea_id % 2 === 0) {
        //             Vote::factory()->create([
        //                 'user_id' => $user_id,
        //                 'idea_id' => $idea_id,
        //             ]);
        //         }
        //     }
        // }

        // Generate comments for ideas
        // foreach (Idea::all() as $idea) {
        //     Comment::factory(5)->existing()->create(['idea_id' => $idea->id]);
        // }
    }
}
