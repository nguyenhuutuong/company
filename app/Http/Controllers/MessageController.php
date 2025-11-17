<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReplyMessageMail;

class MessageController extends VoyagerBaseController
{
    public function reply(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:messages,id',
            'reply' => 'required|string',
        ]);

        $message = Message::findOrFail($request->id);

        // Prevent re-replying if you want to
        if ($message->reply) {
            return response()->json(['message' => 'This message has already been replied to.'], 422);
        }

        $message->reply = $request->reply;
        $message->save();

        // Optional: Send an email notification to the user
        try {
            Mail::to($message->email)->send(new ReplyMessageMail($message));
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            // For now, we'll just ignore it if email fails to keep the main function working
        }

        return response()->json(['message' => 'Reply sent successfully!']);
    }
}
