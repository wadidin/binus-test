<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Pesan extends Model
{
    protected $table = 'pesan';
 
    public function users_r(){
        return $this->belongsTo('App\Models\User','users');
    }
}