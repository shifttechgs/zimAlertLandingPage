<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\WaitlistSubmission;

class WaitlistController extends Controller
{
    /**
     * Handle waitlist submission
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function submit(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
            'beta_testing' => 'nullable|boolean'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Please provide a valid email address.',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $email = $request->input('email');
            $betaTesting = $request->input('beta_testing', false);

            // Send email to sales team
            Mail::to('sales@shifttechgs.com')->send(
                new WaitlistSubmission($email, $betaTesting)
            );

            return response()->json([
                'success' => true,
                'message' => 'Thank you for joining our waitlist! We\'ll be in touch soon.'
            ], 200);

        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error('Waitlist submission failed: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Something went wrong. Please try again later.'
            ], 500);
        }
    }
}
