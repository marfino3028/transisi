<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Employees;
use App\Models\Companies;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@transisi.id',
            'role' => 'admin',
            'password' => bcrypt('transisi'),
        ]);
        User::create([
            'name' => 'companies',
            'email' => 'companies@transisi.id',
            'role' => 'companies',
            'password' => bcrypt('companies'),
        ]);
        User::create([
            'name' => 'employees',
            'email' => 'employees@transisi.id',
            'role' => 'employees',
            'password' => bcrypt('employees'),
        ]);

        

        Companies::create([
            'nama' => 'companies1',
            'email' => 'companies1@transisi.id',
            'logo' => 'google.jpg',
            'website' => 'google.com',
        ]);
        Companies::create([
            'nama' => 'companies2',
            'email' => 'companies2@transisi.id',
            'logo' => 'facebook.jpg',
            'website' => 'facebook.com',
        ]);
        Companies::create([
            'nama' => 'companies3',
            'email' => 'companies3@transisi.id',
            'logo' => 'instagram.jpg',
            'website' => 'instagram.com',
        ]);
        Companies::create([
            'nama' => 'companies4',
            'email' => 'companies4@transisi.id',
            'logo' => 'twitter.jpg',
            'website' => 'twitter.com',
        ]);
        Companies::create([
            'nama' => 'companies5',
            'email' => 'companies5@transisi.id',
            'logo' => 'path.jpg',
            'website' => 'path.com',
        ]);
        
        Employees::create([
            'nama' => 'employees1',
            'email' => 'employees1@transisi.id',
            'companies_id' => 2,
        ]);
        Employees::create([
            'nama' => 'employees2',
            'email' => 'employees2@transisi.id',
            'companies_id' => 3,
        ]);
        Employees::create([
            'nama' => 'employees3',
            'email' => 'employees3@transisi.id',
            'companies_id' => 2,
        ]);
        Employees::create([
            'nama' => 'employees4',
            'email' => 'employees4@transisi.id',
            'companies_id' => 1,
        ]);
        Employees::create([
            'nama' => 'employees5',
            'email' => 'employees5@transisi.id',
            'companies_id' => 3,
        ]);
    }
}
