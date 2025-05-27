<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $user = Auth::user();

        if ($user->role == 'empleado') {
            return redirect()->action([EmployeeDashboardController::class, 'dashboard']);
        } else {
            return redirect()->action([UserDashboardController::class, 'dashboard']);
        }
    }
}
