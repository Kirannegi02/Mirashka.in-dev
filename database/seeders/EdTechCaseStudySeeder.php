<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

/**
 * @deprecated Use MirashkaCaseStudiesSeeder (includes EdTech and all HR case studies).
 */
class EdTechCaseStudySeeder extends Seeder
{
    public function run(): void
    {
        $this->call(MirashkaCaseStudiesSeeder::class);
    }
}
