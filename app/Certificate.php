<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $fillable = [
        'name'
    ];

    public function certificate_details()
    {
        return $this->hasOne(CertificateDetails::class);
    }
}
