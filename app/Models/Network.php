<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mentor;

class Network extends Model
{
    use HasFactory;

    
    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }
    
    protected $fillable = [
        'name',
        'mentor_id',
        'network_father',
    ];
}
