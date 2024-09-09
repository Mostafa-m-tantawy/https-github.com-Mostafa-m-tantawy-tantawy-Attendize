<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class University extends MyBaseModel
{
    use SoftDeletes;
    public function rules()
    {
        $format = config('attendize.default_datetime_format');
        return [
            'name'               => 'required',
            'domain'         => 'required',

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
