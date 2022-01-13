<?php

namespace App\PageApp;

use Illuminate\Database\Eloquent\Model;

class PageCertificateDetails extends Model
{
    protected $fillable = [
        'certificate_id',
        'h1',
        'li',
        'h2',
        'li',
        'h2',
        'li',
        'h2',
        'p',
        "li", //comma separated
        "p",
        "h2" 
    ];

    public function page_certificate()
    {
        return $this->belongsTo(PageCertificate::class, 'certificate_id');
    }

    public function page_certificate_accordian()
    {
        return $this->hasMany(PageCertificateAccordian::class);
    }
}
