<?php

declare(strict_types = 1);

namespace App\Controllers;

use App\View;

class TransactionsController
{
    public function index(): View
    {
        return View::make('transactions/index');
    }

    public function show(int $id): View
    {
        return View::make('transactions/show');
    }

    public function store(Request $request): View
    {
        return View::make('transactions/store');
    }
}
