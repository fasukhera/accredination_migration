<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CertificateDetails extends Model
{
    protected $fillable = [
        'certificate_id',
        'h1',
        'p1',
        'v1',
        'h2',
        'p2',
        'v2',
        'li' //comma separated
    ];

    public function certificate()
    {
        return $this->belongsTo(Certificate::class, 'certificate_id');
    }

    public function certificate_details_accordian()
    {
        return $this->hasOne(CertificateDetailsAccordian::class);
    }
}
