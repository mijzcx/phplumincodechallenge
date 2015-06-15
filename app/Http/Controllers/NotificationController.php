<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controllers;
use App\Models\Notification;
use Illuminate\Http\Request;

/*
 | @coder Melvin R. Zamora
 | 2015-6-15
 */

class NotificationController extends Controller {
    
  
    public function saveNotification(Request $request) {
        
        try {
            $notification = Notification::create($request->all());
            return response()->json($notification);
        
        } catch (Exception $e) {
            abort(404, 'unfriendly error for now.');
        } 
        
    }
    
    public function retriveUnreadNotifications() {
    
        
        try {
            $notification = Notification::where('message_status', '=', 0)->get();
            return response()->json($notification);
        } catch (Exception $e) {
            abort(404, 'unfriendly error for now.');
        } 
        
    }
    
    public function deleteNotification($id) {
        
        
        try {
            $notification = Notification::find($id);
            if( is_null($notification) ) {
                abort(404, 'unfriendly error for now.');
            }
            
            $notification->delete();
            return response()->json($notification);
        } catch (Exception $e) {
            abort(404, 'unfriendly error for now.');
        } 
        
    }
    
    
}