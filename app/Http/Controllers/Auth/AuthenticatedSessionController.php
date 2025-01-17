<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

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


        // Check if the user has the 'user' role
        if (Auth::check() && Auth::user()->hasRole('user')) {
            return redirect(RouteServiceProvider::HOME);
        } else {
            return redirect('/dashboard');
        }

        // Fallback if no condition is met
        // return redirect('/');

    //     if (Auth::user()->role == 'normal') {
    //         return redirect()->intended(RouteServiceProvider::HOME);
    //     } else {
    //         return redirect('/dashboard');
    //     }

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
}
