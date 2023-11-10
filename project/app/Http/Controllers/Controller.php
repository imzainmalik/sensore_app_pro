<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use GuzzleHttp\Psr7\Request;
use Illuminate\Contracts\Session\Session;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function store_in_firebase($data = []){
        // dd($data);
         date_default_timezone_get(); 
        $Notification_types = array($data['id'] => Auth::id(), Auth::id() => $data['id']);
        foreach ($Notification_types as $firstkey => $secondKey) {
            $user = User::find($firstkey);
            $user_sec = User::find($secondKey);
            if($data['pro_id'] != null){
                $product_details = Product::find($data['pro_id']);

                $pro_title = $product_details->name;
                $pro_image_url = asset('assets/images/products/'.$product_details->photo.' ');
                $pro_url = route('front.product',$product_details->slug);
            }else{

            }
            
 
            $ch = curl_init();
            $carbon = Carbon::now(); 
            $data_json = array(
                "text"=>$data['message'], 
                "seller_id"=>$data['id'], 
                "user_id"=>$data['user_id'], 
                "user_image_url"=>$data['user_image_url'], 
                "has_file"=>$data['has_file'], 
                "file"=>$data['file'],
                "pro_id" => $data['pro_id'] ?? 0,
                "date" => $carbon->now()->format('M j Y, h:i A'),
                "pro_title" => $pro_title ?? 0,
                "pro_image_url" => $pro_image_url ?? 0,
                "pro_url" => $pro_url ?? 0
            ); 

            curl_setopt($ch, CURLOPT_URL, "https://sensoreapp-default-rtdb.firebaseio.com/messages_" . $data['id'] . "/messages/". $carbon->format('YmdGis') . ".json");
             $server_key = 'AIzaSyDR4JWY3crrXkUyMAKUPuuIN75Tsls_h-M';
            $headers = array(
                'Content-Type:application/json',
                'Authorization:key=' . $server_key
            );
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data_json));
            $res = curl_exec($ch);
            $httpCode = curl_getinfo($ch); 
            // dd($res, $ch);
        } 
         return true;
    }

}
