<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CertificateDetailsAccordian extends Model
{
    protected $fillable = [
        'certificate_details_id',
        'main_h',
        'h1',
        'p1',
        'a', //comma separated
        'certification', //comma seprated
        'h2',
        'p2'
    ];

    public function certificate_details()
    {
        return $this->belongsTo(CertificateDetails::class, 'certificate_details_id');
    }
}
