<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /*Permission::create(['name' => 'manage users']);
        $roles = ['Support', 'Vendor', 'Buyer', 'Provider', 'Guest'];
        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
        //create, read, update, delete for all entities
        $permissions = [
            'create orders',
            'read orders',
            'update orders',
            'delete orders',
            'create quotes',
            'read quotes',
            'update quotes',
            'delete quotes',
            'create invoices',
            'read invoices',
            'update invoices',
            'delete invoices',
            'create entities',
            'read entities',
            'update entities',
            'delete entities',
            'create services',
            'read services',
            'update services',
            'delete services',
            'create users',
            'read users',
            'update users',
            'delete users',
            'create roles',
            'read roles',
            'update roles',
            'delete roles',
            'create permissions',
            'read permissions',
            'update permissions',
            'delete permissions',
            'create categories',
            'read categories',
            'update categories',
            'delete categories',
            'create products',
            'read products',
            'update products',
            'delete products',
            'create product types',
            'read product types',
            'update product types',
            'delete product types',
            'create product categories',
            'read product categories',
            'update product categories',
            'delete product categories',
        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
        $role = Role::findByName('Support');
        $role->givePermissionTo(Permission::all());
        $role = Role::findByName('Vendor');
        $role->givePermissionTo([
            'create orders',
            'read orders',
            'update orders',
            'delete orders',
            'create quotes',
            'read quotes',
            'update quotes',
            'delete quotes',
            'create invoices',
            'read invoices',
            'update invoices',
            'delete invoices',
            'create entities',
            'read entities',
            'update entities',
            'delete entities',
            'create services',
            'read services',
            'update services',
            'delete services',
            'create categories',
            'read categories',
            'update categories',
            'delete categories',
            'create products',
            'read products',
            'update products',
            'delete products',
            'create product types',
            'read product types',
            'update product types',
            'delete product types',
            'create product categories',
            'read product categories',
            'update product categories',
            'delete product categories',
        ]);
        $role = Role::findByName('Buyer');
        $role->givePermissionTo([
            'create orders',
            'read orders',
            'update orders',
            'create quotes',
            'read quotes',
            'update quotes',
            'read invoices',
            'read categories',
            'read products',
            'read product types',
            'read product categories',
        ]);
        $role = Role::findByName('Provider');
        $role->givePermissionTo([
            'create invoices',
            'read invoices',
            'update invoices',
            'create services',
            'read services',
            'update services',
            'read categories',
        ]);
        $role = Role::findByName('Guest');
        $role->givePermissionTo([
            'read categories',
            'read products',
            'read product types',
            'read product categories',
        ]);*/

        //create support user if not exists
        $user = User::where('email', 'support@example.com')->first();
        if (! $user) {
            $user=User::create([
                'name' => 'Support',
                'email' => 'support@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
            ]);
            $user->assignRole('Support');
        }
        $user = User::where('email', 'supplier@example.com')
            ->first();
        if (!$user) {
            $user=User::create([
                'name' => 'Supplier',
                'email' => 'supplier@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
            ]);
            $user->assignRole('Vendor');
        }
        $user = User::where('email', 'buyer@example.com')
            ->first();
        if (!$user) {
            $user=User::create([
                'name' => 'Buyer',
                'email' => 'buyer@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
            ]);
            $user->assignRole('Buyer');
        }
        $user = User::where('email', 'provider@example.com')
            ->first();
        if (!$user) {
            $user=User::create([
                'name' => 'Provider',
                'email' => 'provider@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
            ]);
            $user->assignRole('Provider');
        }
    }
}
