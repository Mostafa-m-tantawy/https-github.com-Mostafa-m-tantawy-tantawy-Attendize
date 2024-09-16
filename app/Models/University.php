<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class University extends MyBaseModel
{
    use SoftDeletes;
    public function rules()
    {
        return [
            'name'               => 'required',
            'staff_domain'         => 'nullable',
            'stud_domain'         => 'nullable',
            'attendance_limit'         => 'required',

        ];
    }
    public function organiser()
    {
        return $this->belongsTo(Organiser::class);
    }
    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

}
