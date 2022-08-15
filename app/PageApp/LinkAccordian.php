<?php

namespace App\PageApp;

use Illuminate\Database\Eloquent\Model;

class LinkAccordian extends Model
{
    protected $table ='link_details';
    protected $fillable = [
        'link_details',
        'main_h',
        'p1',
        'a1',
        'p1',
        'a2',
        'p2',
        'a2',
        'p3',
        'a3',
         //comma separated
    ];



    public function page_details()
    {
        return $this->hasOne(PageCertificateDetails::class);
    }
}
