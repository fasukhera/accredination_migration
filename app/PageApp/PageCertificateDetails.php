<?php

namespace App\PageApp;

use Illuminate\Database\Eloquent\Model;

class PageCertificateDetails extends Model
{
    protected $fillable = [
        'certificate_id',
        'h1',
        'p1',
        'p2',
        'wh',
        'wp',
        'li1',
        'eh',
        'ep',
        'li2',
        'lh',
        'lp',
        'li3',
        'rh',
        'rp',
        'li4',
        'bh',
        'l-bh1',
        'l-bp1',
        'l-bh2',
        'l-bp2',
        'l-bh3',
        'l-bp3',
        'l-bh4',
        'l-bp4',
        'r-bh1',
        'r-bp1',
        'r-bh2',
        'r-bp2',
        'r-bh3',
        'r-bp3',
        'r-bh4',
        'r-bp4',
        'last-h',
        'last-li'
        
    ];

    public function page_certificate()
    {
        return $this->belongsTo(PageCertificate::class, 'certificate_id');
    }

}
