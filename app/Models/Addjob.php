<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addjob extends Model
{
    use HasFactory;
    protected $fillable = [
        'jobTitle',
        'department',
        'job_location',
        'no_of_vacancies',
        'salaryFrom',
        'salaryTo',
        'jobType',
        'status',
        'start_date',
        'expired',
        'description',
    ];
}
