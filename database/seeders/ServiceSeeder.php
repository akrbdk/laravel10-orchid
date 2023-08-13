<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            'Service 1',
            'Service 2',
            'Service 3',
            'Service 4'
        ];

        foreach ($services as $service) {
            Service::create([
                'name' => $service
            ]);
        }
    }
}
