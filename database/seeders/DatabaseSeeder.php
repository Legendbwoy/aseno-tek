<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use App\Models\GalleryItem;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        User::query()->firstOrCreate(
            ['email' => 'admin@asenotek.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password123'),
                'is_admin' => true,
            ]
        );

        User::query()->firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => Hash::make('password123'),
                'is_admin' => false,
            ]
        );

        $demoPosts = [
            [
                'title' => 'Modern Home Design Trends in 2026',
                'excerpt' => 'A practical guide to sustainable and elegant residential design choices.',
                'content' => 'Modern home design is increasingly shaped by sustainability, flexible layouts, and efficient systems. We recommend prioritizing natural light, durable materials, and energy-smart installations from the planning stage to avoid costly redesign later.',
                'category' => 'Design',
            ],
            [
                'title' => 'How to Plan a Construction Budget That Works',
                'excerpt' => 'Common budgeting mistakes and how to avoid them before construction begins.',
                'content' => 'A reliable construction budget is built around clear scope, contingencies, and staged approvals. Set a realistic contingency range, request transparent quotes, and align milestone payments with measurable deliverables.',
                'category' => 'Planning',
            ],
            [
                'title' => 'Site Supervision Checklist for Better Project Quality',
                'excerpt' => 'A quick checklist to help keep quality and timeline under control on-site.',
                'content' => 'Effective site supervision depends on frequent inspections, documented sign-offs, and proactive risk handling. Maintain a weekly quality checklist for structural work, finishing, and safety compliance to improve project outcomes.',
                'category' => 'Construction',
            ],
        ];

        foreach ($demoPosts as $data) {
            BlogPost::query()->firstOrCreate(
                ['slug' => Str::slug($data['title'])],
                [
                    ...$data,
                    'author_name' => 'Aseno-Tek Editorial',
                    'is_published' => true,
                    'published_at' => now()->subDays(rand(1, 30)),
                ]
            );
        }

        $demoGalleryItems = [
            [
                'title' => 'Residential Villa Finishing Project',
                'category' => 'Residential',
                'description' => 'Full finishing and interior setup for a multi-room villa.',
                'image_path' => 'assets/img/portfolio-1.jpg',
                'project_location' => 'Accra',
                'is_featured' => true,
            ],
            [
                'title' => 'Commercial Office Refurbishment',
                'category' => 'Commercial',
                'description' => 'Office remodelling, lighting upgrade, and workspace optimization.',
                'image_path' => 'assets/img/portfolio-2.jpg',
                'project_location' => 'Kumasi',
                'is_featured' => true,
            ],
            [
                'title' => 'Apartment Block Exterior Upgrade',
                'category' => 'Renovation',
                'description' => 'Facade enhancement and weatherproofing package.',
                'image_path' => 'assets/img/portfolio-3.jpg',
                'project_location' => 'Takoradi',
                'is_featured' => false,
            ],
        ];

        foreach ($demoGalleryItems as $index => $data) {
            GalleryItem::query()->firstOrCreate(
                ['slug' => Str::slug($data['title'])],
                [
                    ...$data,
                    'is_published' => true,
                    'sort_order' => $index,
                    'completed_at' => now()->subMonths(rand(1, 12))->toDateString(),
                ]
            );
        }
    }
}
