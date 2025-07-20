<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Kemana user akan diarahkan setelah login berhasil.
     */
    protected $redirectTo = '/dashboard';

    /**
     * Jika ingin menambahkan logika khusus setelah login berhasil.
     */
    protected function authenticated(Request $request, $user)
    {
        logger('User logged in: ' . $user->email);
        // return redirect()->intended($this->redirectPath()); // opsional
    }

    /**
     * Menampilkan form login (jika belum menggunakan routing otomatis).
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }
}
