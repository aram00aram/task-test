<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isEmpty;

class DashboardController extends Controller
{
    public function index()
    {
        $childrens = User::nestable(\auth()->user()->children()->get());
        return view('dashboard.index',compact('childrens'));
    }

    public function invite()
    {
        return view('dashboard.invite');
    }


}
