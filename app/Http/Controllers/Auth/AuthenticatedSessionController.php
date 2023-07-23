<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\User;
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
        // dd($request);
        $request->authenticate();
        
        $request->session()->regenerate();
        // dd($request->email);
        $isAdmin = User::where('email',$request->email)->pluck('isadmin')->toarray();
        session::put('email',$request->email);
        session::put('isadmin',$isAdmin[0]);

        if($isAdmin[0]  != null ){
           
            return redirect()->intended(RouteServiceProvider::HOME);
        }else{
            return redirect()->intended(RouteServiceProvider::User);
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
