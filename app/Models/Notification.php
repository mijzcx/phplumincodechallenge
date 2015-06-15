<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/*
 | @coder Melvin R. Zamora
 */

class Notification extends Model {
    
      
    protected $table = 'notifications';
    
    protected $fillable = [
        'message_from',
        'message_to',
        'message', 
        'message_type', // 0 warning, 1 info, 2 error
        'message_status' // 0 unread, 1 read
        
    ];
    
}