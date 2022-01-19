<?php

namespace App\PageApp;

use Illuminate\Database\Eloquent\Model;

class PageCertificateAccordian extends Model
{
    protected $fillable = [
        'certificate_details_id',
        'mh1',
        'h2',
        'p1',
        "h2",
        "p",
        "h2",
        "li",
        "h2",
        "p",
        'a', //comma separated
    ];

    public function page_details()
    {
        return $this->belongsTo(PageCertificateDetails::class, 'certificate_details_id');
    }
}
