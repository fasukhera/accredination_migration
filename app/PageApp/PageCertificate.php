<?php

namespace App\PageApp;

use Illuminate\Database\Eloquent\Model;

class PageCertificate extends Model
{
    protected $fillable = [
        'name'
    ];

    public function page_details()
    {
        return $this->hasOne(PageCertificateDetails::class,'certificate_id');
    }

    public function higher_page()
    {
        return $this->hasOne(HigherPage::class,'certificate_id');
    }


}
