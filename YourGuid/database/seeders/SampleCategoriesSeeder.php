continue<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\category;
use App\Models\CategoryItem;

class SampleCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample categories data
        $categoriesData = [
            [
                'name' => 'Transport',
                'slug' => 'transport',
                'description' => 'Navigate Morocco with ease during the 2030 World Cup',
                'image' => 'images/transport-icon.png',
                'icon' => 'icons/transport.svg',
                'display_order' => 1,
                'items' => [
                    [
                        'name' => 'Trains',
                        'slug' => 'trains',
                        'description' => 'Morocco\'s rail network is one of the best in Africa, with the high-speed Al Boraq train connecting Tangier to Casablanca.',
                        'image' => 'images/trains.jpg',
                        'details' => json_encode([
                            'First and second class options available',
                            'Advance booking recommended for World Cup period',
                            'Air conditioning on all intercity trains',
                            'Free WiFi on Al Boraq high-speed trains',
                        ]),
                        'display_order' => 1,
                    ],
                    [
                        'name' => 'Buses',
                        'slug' => 'buses',
                        'description' => 'Morocco has an extensive bus network with several companies offering intercity services.',
                        'image' => 'images/buses.jpg',
                        'details' => json_encode([
                            'CTM and Supratours offer the most reliable services',
                            'Online booking available for major routes',
                            'Buses often more economical than trains',
                            'Special World Cup shuttle services will be available',
                        ]),
                        'display_order' => 2,
                    ],
                ],
            ],
            [
                'name' => 'Stadiums',
                'slug' => 'stadiums',
                'description' => 'Explore the stadiums hosting the 2030 World Cup matches.',
                'image' => 'images/stadiums-icon.png',
                'icon' => 'icons/stadiums.svg',
                'display_order' => 2,
                'items' => [
                    [
                        'name' => 'Casablanca Stadium',
                        'slug' => 'casablanca-stadium',
                        'description' => 'The largest stadium in Morocco, hosting key matches.',
                        'image' => 'images/casablanca-stadium.jpg',
                        'details' => json_encode([
                            'Capacity: 67,000',
                            'Location: Casablanca',
                            'Facilities: VIP lounges, media center, fan zones',
                        ]),
                        'display_order' => 1,
                    ],
                ],
            ],
            // Add more categories and items as needed
        ];

        foreach ($categoriesData as $catData) {
            $category = category::updateOrCreate(
                ['slug' => $catData['slug']],
                [
                    'name' => $catData['name'],
                    'description' => $catData['description'],
                    'image' => $catData['image'],
                    'icon' => $catData['icon'],
                    'display_order' => $catData['display_order'],
                ]
            );

            if (!empty($catData['items'])) {
                foreach ($catData['items'] as $itemData) {
                    CategoryItem::updateOrCreate(
                        ['slug' => $itemData['slug']],
                        [
                            'category_id' => $category->id,
                            'name' => $itemData['name'],
                            'description' => $itemData['description'],
                            'image' => $itemData['image'],
                            'details' => $itemData['details'],
                            'display_order' => $itemData['display_order'],
                        ]
                    );
                }
            }
        }
    }
}
