<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'register_no', 'degree', 'branch', 'date_of_birth', 'month_year_exam', 'semester'
    ];

    public function marks()
    {
        return $this->hasMany(Mark::class);
    }
}
