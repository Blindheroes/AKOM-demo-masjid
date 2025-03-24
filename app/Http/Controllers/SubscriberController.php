<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'email|unique:subscribers',
            'whatsapp' => 'numeric|unique:subscribers',
        ]);

        $subscriber = new Subscriber();

        $subscriber->email = $request->email;
        $subscriber->whatsapp = $request->whatsapp;
        $subscriber->save();

        return response()->json(['message' => 'Subscribed successfully!']);
    }

    public function destroy($id_subscriber)
    {
        $subscriber = Subscriber::where('id_subscriber', $id_subscriber)->first();
        if ($subscriber) {
            $subscriber->delete();
            return response()->json(['message' => 'Unsubscribed successfully!']);
        }
        return response()->json(['message' => 'Subscriber not found!'], 404);
    }
}
