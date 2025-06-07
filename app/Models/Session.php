<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $table = 'sessions';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['id','user_id','ip_address','user_agent','payload','last_activity'];
}
