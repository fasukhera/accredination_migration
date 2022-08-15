<?php

namespace App\PageApp;

use Illuminate\Database\Eloquent\Model;

class PageCertificateAccordian extends Model
{
    protected $table ='page_details_accordians';
    protected $fillable = [
        'page_details_id',
        'h1',
        'p1',
        "li",
         //comma separated
    ];



    public function page_details()
    {
        return $this->hasOne(PageCertificateDetails::class);
    }
}
