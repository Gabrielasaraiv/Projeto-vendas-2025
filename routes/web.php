<?php

use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Funcionario\Index;
use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', Login::class)->name('login');

Route::get('admin/dashboard', Dashboard::class)->middleware(['auth', 'user_type:admin'])->name('admin.dashboard');

Route::get('admin/funcionario', Index::class)->middleware(['auth', 'user_type:admin'])->name('admin.funcionario.index');