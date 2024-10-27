<?php

namespace Database\Seeders;

use App\Models\Attendee;
use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'title' => 'Laravel Conference 2023',
                'description' => 'Annual Laravel conference',
                'date' => '2023-09-15',
                'location' => 'New York',
                'category_id' => 1,
            ],
            [
                'title' => 'Web Development Workshop',
                'description' => 'Hands-on web development workshop',
                'date' => '2023-10-20',
                'location' => 'San Francisco',
                'category_id' => 2,
            ],
            [
                'title' => 'AI in Business Seminar',
                'description' => 'Exploring AI applications in business',
                'date' => '2023-11-05',
                'location' => 'London',
                'category_id' => 3,
            ],
            [
                'title' => 'Mobile App Development Conference',
                'description' => 'Latest trends in mobile app development',
                'date' => '2023-12-10',
                'location' => 'Tokyo',
                'category_id' => 1,
            ],
            [
                'title' => 'Data Science Workshop',
                'description' => 'Practical data science techniques',
                'date' => '2024-01-15',
                'location' => 'Berlin',
                'category_id' => 2,
            ],
        ];

        foreach ($events as $eventData) {
            $event = Event::create($eventData);

            // Create some attendees for each event
            for ($i = 1; $i <= 3; $i++) {
                Attendee::create([
                    'name' => "Attendee {$i}",
                    'email' => "attendee{$i}@example.com",
                    'event_id' => $event->id,
                ]);
            }
        }
    }
}
