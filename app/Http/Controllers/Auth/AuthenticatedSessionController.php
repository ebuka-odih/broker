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
    use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

public function store(LoginRequest $request): RedirectResponse
{
    try {
        // Log that the login process has started
        Log::info('Login attempt started for user with email: ' . $request->email);

        // Attempt to authenticate the user
        $request->authenticate();
        Log::info('User authenticated successfully: ' . $request->email);

        // Regenerate session to prevent session fixation attacks
        $request->session()->regenerate();
        Log::info('Session regenerated for user: ' . $request->email);

        // Log the user details
        $user = Auth::user();
        if ($user) {
            Log::info('Authenticated user found: ' . $user->email);
        } else {
            Log::error('Authenticated user not found after login.');
        }

        // Update last login time
        $user->last_login_at = now();
        $user->save();
        Log::info('Last login time updated for user: ' . $user->email);

        // Check if the user is an admin and log accordingly
        if ($user->IsAdmin()) {
            Log::info('User is admin, redirecting to admin dashboard.');
            return redirect()->intended('admin/dashboard');  // Redirect admins
        }

        // Log normal user redirection
        Log::info('User is not admin, redirecting to default loading route.');
        return redirect()->intended(route('loading', absolute: false));

    } catch (\Exception $e) {
        // Log any exceptions that occur during the process
        Log::error('Login process failed for user with email: ' . $request->email . '. Error: ' . $e->getMessage());
        // Optionally, redirect to an error page or back to the login with an error message
        return back()->withErrors(['login' => 'Login failed. Please try again later.']);
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
