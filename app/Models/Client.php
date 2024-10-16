<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'metadata',
        'product_name',
        'client_name',
        'team_leader_name',
        'employee_name',
        'estimated_time',
        'spent_time',
        'status',
        'contract_start_date',
        'contract_end_date',
    ];

    protected $casts = [
        'metadata' => 'array',
        'product_name' => 'string',
        'client_name' => 'string',
        'team_leader_name' => 'string',
        'employee_name' => 'string',
        'estimated_time' => 'integer',
        'spent_time' => 'integer',
        'status' => 'string',
        'contract_start_date' => 'date',
        'contract_end_date' => 'date',
    ];

    protected $hidden = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];
}
