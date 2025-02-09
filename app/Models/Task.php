<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'status',
        'due_date',
        'assigned_to',
        'team_id',
        'created_by'
    ];
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function assignedTo()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
   
}
