<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    use HasFactory;

       /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'center',
        'quater',
        'strategic_focus',
        'summary',
        'strategic_objective',
        'strategic_initiative',
        'date',
        'comment_quater',
        'status',
        'user_id'
    ];

    public function scopeSearch($query, $value)
    {
        $query->where('quater', 'LIKE', "%{$value}%")
            ->orWhere('summary', 'LIKE', "%{$value}%")
            ->orWhere('strategic_focus', 'LIKE', "%{$value}%");
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
