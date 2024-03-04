<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Session;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
        $user = $request->user();
        if ($user->userType == 1)
        {
            return redirect()->intended(RouteServiceProvider::ADMIN);
        }
        else if ($user->userType == '2'){
            return redirect()->intended(RouteServiceProvider::GUICHET);
        }
        else
        {
            return redirect()->intended(RouteServiceProvider::HOME);
        }

    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function logout_admin(Request $request): RedirectResponse
    {
        Session::flush();
        Auth::logout();
//        $request->session()->invalidate();
//
//        $request->session()->regenerateToken();
        return redirect('welcome');
    }
}
