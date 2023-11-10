<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Models\Chat;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use DateTimeZone;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session;

class ChatController extends FrontBaseController
{
      public function convo(Request $request, $id){

            // $request->session()->put('pro_id', $request->pro_id); 
            $conversations = Chat::where('user_id',Auth::user()->id)->get();
            $seller_details = User::findorfail($id);
            $tz = new DateTimeZone(date_default_timezone_get());
            $dt = new DateTime();
            $dt->setTimezone($tz);
            $localtime = $dt->format("M j Y, h:i A");
            // dd($localtime);
            return view('frontend.chat.convo', get_defined_vars());
      }

      public function send_message(Request $request, $id){
            // dd($request->all());
            $seller_details = User::find($id);
            $carbon = Carbon::now();

            Chat::where('user_id', Auth::user()->id)->where('seller_id', $id)->update(array(
                  'is_read' => 1, 
            ));

            if($request->hasFile('attachments')) {
                  $featured_image = $request->file('attachments');
                  $featured_image_name = time() . '-' . $featured_image->getClientOriginalName();
                   //   dd(public_path('storage/uploads/'));
                  $featured_image->move(public_path('storage/uploads/'), $featured_image_name);

                  $has_file = 1;
                  $file_url = asset('assets/chat_files/'.$featured_image_name.' ');
                 
            }else{
                  $has_file = 0;
                  $file_url = null;
            }
          $firebase = $this->store_in_firebase([
            'id' => $id, 
            'user_image_url' => asset('assets/images/'.$seller_details->photo.''),
            'message' => $request->message, 
            'user_id' => Auth::user()->id,
            'has_file' => $has_file,
            'file' => $file_url,
            'pro_id' => $request->pro_id ?? null
         ]);
         if($firebase == true){
 
            //  $check_new_convo = Chat::where('user_id', Auth::user()->id)->where('seller_id', $id)->first();

            //  if($check_new_convo != null){
            //       Chat::where('user_id', Auth::user()->id)->where('seller_id', $id)->update(array(
            //             'last_msg' => $request->message,
            //             'has_file' => $has_file,
            //             'pro_id' => $request->session()->get('pro_id'),
            //       ));
            //  }else{
                  $chat = new Chat;
                  $chat->seller_id = $id;
                  $chat->user_id = Auth::user()->id;
                  $chat->message = $request->message;
                  $chat->has_file = $has_file;
                  $chat->pro_id = $request->pro_id ?? null;
                  $chat->save();
            //  }
         }
            // 
            
      }
}
