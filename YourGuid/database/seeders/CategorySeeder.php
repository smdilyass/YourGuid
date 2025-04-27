<?php
// filepath: c:\Users\Youcode\Desktop\YourGuid\YourGuid\database\seeders\CategorySeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'name' => 'Transport',
            'slug' => 'transport',
            'description' => 'Explore transportation options for the World Cup.',
            'icon' => 'fas fa-bus',
            'display_order' => 1,
        ]);

        Category::create([
            'name' => 'Hotels',
            'slug' => 'hotels',
            'description' => 'Find the best accommodations for your stay.',
            'icon' => 'fas fa-hotel',
            'display_order' => 2,
        ]);

        // Add more categories as needed
    }
}