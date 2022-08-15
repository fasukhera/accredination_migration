<?php

namespace App\PageApp;

use Illuminate\Database\Eloquent\Model;

class PageMembership extends Model
{
    protected $fillable = [
        'name'
    ];

    public function membership_details()
    {
        return $this->hasOne(PageMembershipDetails::class,'membership_id');
    }

    public function higher_page()
    {
        return $this->hasOne(HigherPage::class,'membership_id');
    }

    public function page_details()
    {
        return $this->hasOne(PageCertificateDetails::class,'certificate_id');
    }

}
