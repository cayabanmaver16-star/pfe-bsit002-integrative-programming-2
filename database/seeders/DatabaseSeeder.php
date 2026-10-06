<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $it = Department::create(['name' => 'IT']);
        $hr = Department::create(['name' => 'HR']);
        $finance = Department::create(['name' => 'Finance']);

        $departments = [$it, $hr, $finance];

        $people = [
            ['Juan', 'Dela Cruz', 'Programmer'],
            ['Maria', 'Santos', 'HR Officer'],
            ['Jose', 'Reyes', 'Accountant'],
            ['Ana', 'Garcia', 'System Analyst'],
            ['Pedro', 'Mendoza', 'Recruiter'],
            ['Liza', 'Torres', 'Bookkeeper'],
            ['Mark', 'Villanueva', 'Network Admin'],
            ['Grace', 'Ramos', 'Payroll Officer'],
            ['Paolo', 'Aquino', 'Auditor'],
            ['Kristine', 'Bautista', 'Web Developer'],
            ['Carlo', 'Flores', 'Training Officer'],
            ['Joy', 'Castillo', 'Budget Analyst'],
            ['Miguel', 'Navarro', 'Database Admin'],
            ['Angel', 'Domingo', 'HR Assistant'],
            ['Rafael', 'Lopez', 'Cashier'],
        ];

        $statuses = ['active', 'inactive', 'on_leave'];

        foreach ($people as $i => $p) {
            Employee::create([
                'first_name' => $p[0],
                'last_name' => $p[1],
                'email' => strtolower($p[0] . '.' . str_replace(' ', '', $p[1])) . '@example.com',
                'department_id' => $departments[$i % 3]->id,
                'position' => $p[2],
                'status' => $statuses[intdiv($i, 3) % 3],
            ]);
        }

        User::create([
            'name' => 'Demo User',
            'email' => 'demo@example.com',
            'password' => Hash::make('password123'),
        ]);
    }
}
