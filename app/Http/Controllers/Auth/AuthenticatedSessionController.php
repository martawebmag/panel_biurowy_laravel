<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
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

        // Sprawdzamy rolę użytkownika
        $user = Auth::user();
        switch ($user->role) {
            case 'superadmin':
                return redirect()->route('superadmin-dashboard'); // Przekierowanie do dashboardu SuperAdmin
            case 'admin':
                return redirect()->route('admin-dashboard'); // Przekierowanie do dashboardu Admin
            default:
                return redirect()->route('koordynator-dashboard'); // Przekierowanie do dashboardu Koordynatora
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
}
