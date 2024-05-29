<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::factory()->create(["name" => "Human Resources"]);
        Department::factory()->create(["name" => "Finance"]);
        Department::factory()->create(["name" => "Marketing"]);
        Department::factory()->create(["name" => "Information Technology"]);
        Department::factory()->create(["name" => "Operations"]);
        Department::factory()->create(["name" => "Sales"]);
        Department::factory()->create(["name" => "Customer Service"]);
        Department::factory()->create(["name" => "Research and Development"]);
        Department::factory()->create(["name" => "Legal"]);
        Department::factory()->create(["name" => "Procurement"]);
    }

}
