<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Log;

class SocialiteController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        try {
            // Google user object dari google
            $userFromGoogle = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            Log::error('Google Login Error: ' . $e->getMessage());
            return redirect('/')->with('error', 'Unable to login with Google. Please try again.');
        }
    
        // Ambil user dari database berdasarkan google user id
        $userFromDatabase = User::where('google_id', $userFromGoogle->getId())->first();
    
        // Jika tidak ada user, maka buat user baru
        if (!$userFromDatabase) {
            // Download image dari Google
            $avatarUrl = $userFromGoogle->getAvatar();
            $avatarContents = file_get_contents($avatarUrl);
    
            // Simpan file ke folder public/images
            $avatarName = 'avatar_' . $userFromGoogle->getId() . '.jpg';
            file_put_contents(public_path('images/' . $avatarName), $avatarContents);
    
            // Buat user baru
            $newUser = User::create([
                'google_id' => $userFromGoogle->getId(),
                'name' => $userFromGoogle->getName(),
                'email' => $userFromGoogle->getEmail(),
                'images' => $avatarName, // Simpan nama file saja
            ]);
    
            // Login user yang baru dibuat
            auth('web')->login($newUser);
            session()->regenerate();
    
            return redirect('/');
        }

        // Jika ada user langsung login saja
        auth('web')->login($userFromDatabase);
        session()->regenerate();

        return redirect('/');
    }

    public function logout(Request $request)
    {
        auth('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
