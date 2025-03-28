<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Newsletter\Facades\Newsletter;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletters,email',
        ]);

        $existingSubscriber = \App\Models\newsletter::where('email', $request->email)->first();

        if ($existingSubscriber) {
            return response()->json(['message' => 'Email already subscribed'], 409);
        }

        \App\Models\newsletter::create([
            'email' => $request->email,
        ]);

        return response()->json(['message' => 'Subscription successful'], 201);
    }
}
