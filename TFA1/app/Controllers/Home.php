<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('pages/home');
    }

    public function about(): string
    {
        return view('pages/about');
    }

    public function customers(): string
    {
        return view('customers/index', [
            'customers' => [
                [
                    'full_name' => 'Alex Morgan',
                    'email' => 'alex@Gmail.com',
                    'phone' => '555-0101',
                ],
                [
                    'full_name' => 'Jordan Lee',
                    'email' => 'jordan@Gmail.com',
                    'phone' => '555-0102',
                ],
                  [
                    'full_name' => 'Alex Morgan',
                    'email' => 'alex@Gmail.com',
                    'phone' => '555-0101',
                ],
                [
                    'full_name' => 'Jordan Lee',
                    'email' => 'jordan@Gmail.com',
                    'phone' => '555-0102',
                ],
                  [
                    'full_name' => 'Alex Morgan',
                    'email' => 'alex@Gmail.com',
                    'phone' => '555-0101',
                ],
                [
                    'full_name' => 'Jordan Lee',
                    'email' => 'jordan@Gmail.com',
                    'phone' => '555-0102',
                ],
            ],
        ]);
    }

    public function users(): string
    {
        return view('users/index', [
            'users' => [
                [
                    'username' => 'admin',
                    'full_name' => 'Admin User',
                    'role' => 'Administrator',
                ],
                [
                    'username' => 'manager1',
                    'full_name' => 'Store Manager',
                    'role' => 'Manager',
                ],
                  [
                    'username' => 'admin1',
                    'full_name' => 'Admin User',
                    'role' => 'Administrator',
                ],
                [
                    'username' => 'manager2',
                    'full_name' => 'Store Manager',
                    'role' => 'Manager',
                ],
                    [
                        'username' => 'admin3',
                        'full_name' => 'Admin User',
                        'role' => 'Administrator',
                    ],
                    [
                        'username' => 'manager3',
                        'full_name' => 'Store Manager',
                        'role' => 'Manager',
                    ],
            ],
        ]);
    }
}
