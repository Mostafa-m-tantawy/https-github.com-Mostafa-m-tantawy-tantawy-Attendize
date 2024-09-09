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
            'staff_domain'         => 'required',
            'stud_domain'         => 'required',

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

}
