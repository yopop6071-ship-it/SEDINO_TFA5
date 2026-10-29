<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['id' => 1, 'name' => 'Juan Dela Cruz', 'email' => 'juan@example.com', 'phone' => '0917-123-4567'],
            ['id' => 2, 'name' => 'Maria Santos', 'email' => 'maria@example.com', 'phone' => '0918-234-5678'],
            ['id' => 3, 'name' => 'Pedro Reyes', 'email' => 'pedro@example.com', 'phone' => '0919-345-6789'],
            ['id' => 4, 'name' => 'Ana Garcia', 'email' => 'ana@example.com', 'phone' => '0920-456-7890'],
            ['id' => 5, 'name' => 'Luis Bautista', 'email' => 'luis@example.com', 'phone' => '0921-567-8901'],
        ];

        return view('customers', compact('customers'));
    }
}
