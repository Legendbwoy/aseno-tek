<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    /**
     * Handle contact form submission
     */
    public function submit(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'service' => 'nullable|string|max:100',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'privacy' => 'required|accepted'
        ]);

        // Send email notification (uncomment when mail is configured)
        // try {
        //     Mail::to('info@asenotek.com')->send(new ContactFormMail($validated));
        // } catch (\Exception $e) {
        //     // Log the error but don't show to user
        //     \Log::error('Contact form email failed: ' . $e->getMessage());
        // }

        // Store in database (optional - create contacts table first)
        // Contact::create($validated);

        // Redirect back with success message
        return redirect()->route('contact')->with('success', 'Thank you for your message! We will get back to you within 24 hours.');
    }

    /**
     * Handle newsletter subscription
     */
    public function newsletter(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255'
        ]);

        // Store newsletter subscription (optional)
        // Newsletter::create(['email' => $request->email]);

        return redirect()->back()->with('success', 'Thank you for subscribing to our newsletter!');
    }
}