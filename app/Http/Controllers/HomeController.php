<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        if ($usertype === '1') {
            return view('admin.home');
        }
        return view('dashboard');
    }
}
