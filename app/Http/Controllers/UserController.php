<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'name' => 'Admin User', 'email' => 'admin@pos.test', 'role' => 'Administrator'],
            ['id' => 2, 'name' => 'Cashier One', 'email' => 'cashier1@pos.test', 'role' => 'Cashier'],
            ['id' => 3, 'name' => 'Cashier Two', 'email' => 'cashier2@pos.test', 'role' => 'Cashier'],
            ['id' => 4, 'name' => 'Store Manager', 'email' => 'manager@pos.test', 'role' => 'Manager'],
            ['id' => 5, 'name' => 'Inventory Clerk', 'email' => 'inventory@pos.test', 'role' => 'Inventory Clerk'],
        ];

        return view('users', compact('users'));
    }
}
