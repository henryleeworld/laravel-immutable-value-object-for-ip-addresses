<?php

use App\Http\Controllers\IpAddressController;
use Illuminate\Support\Facades\Route;

Route::get('ip-address/check/', [IpAddressController::class, 'check']);
