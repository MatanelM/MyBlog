<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

use App\Models\Post;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
	    $posts = Post::with('user')->latest()->get();
            return redirect()->intended(route('dashboard', absolute: false).'?verified=1')->with(compact('posts'));
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }
	$posts = Post::with('user')->latest()->get();
        return redirect()->intended(route('dashboard', absolute: false).'?verified=1')->with(compact('posts'));
    }
}
