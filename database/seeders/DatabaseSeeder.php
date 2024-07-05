<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Pattern;
use App\Models\FunctionalArea;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $patterns = [
            ['name' => 'النمط الواقعي', 'color' => 'green'],
            ['name' => 'النمط البحثي', 'color' => 'pink'],
            ['name' => 'النمط الفني', 'color' => 'orange'],
            ['name' => 'النمط الاجتماعي', 'color' => 'purple'],
            ['name' => 'نمط رائد الأعمال', 'color' => 'yellow'],
            ['name' => 'النمط النمطي', 'color' => 'blue'],
        ];

        foreach ($patterns as $pattern) {
            Pattern::create($pattern);
        }
        \App\Models\Question::factory(36)->create();


         $functionalAreas = [
            ['name' => 'وظائف لا تحتاج إلى تأهيل وخبرات سابقة'],
            ['name' => 'وظائف تحتاج إلى قليل من التأهيل والخبرات السابقة'],
            ['name' => 'وظائف تحتاج إلى تأهيل متوسط وخبرات سابقة'],
            ['name' => 'وظائف تحتاج إلى تأهيل وخبرات علمية فوق المتوسط'],
            ['name' => 'وظائف تحتاج إلى خبرات علمية عالية'],
        ];

        foreach ($functionalAreas as $area) {
            FunctionalArea::create($area);
        }
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
