<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubscriberRequest;
use App\Http\Requests\UpdateSubscriberRequest;
use App\Models\Subscriber;
use App\Models\User;
use App\Models\UserSubscribers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubscriberController extends Controller
{
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\JsonResponse
      */
//    public function create(StoreSubscriberRequest $request)
//    {
//        $subscriber = Subscriber::create([
//            'first_name' => $request->first_name,
//            'last_name' => $request->last_name,
//            'email' => $request->email,
//        ]);
//        return response()->json([
//            'success' => true,
//            'message' => 'Subscriber created successfully'
//        ]);
//   }

//   public function addSubscriberToUser(Request $request)
//   {
//       $userId = $request->user_id;
//       $subId = $request->subscriber_id;
//       UserSubscribers::create([
//           'user_id' => $userId,
//           'subscriber_id' => $subId,
//       ]);
//       return response()->json([
//           'success' => true,
//           'message' => 'Subscriber added successfully'
//       ]);
//   }
}
