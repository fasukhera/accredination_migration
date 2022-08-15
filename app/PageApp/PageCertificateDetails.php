<?php

namespace App\PageApp;

use Illuminate\Database\Eloquent\Model;

class PageCertificateDetails extends Model
{
   
    protected $fillable = [
        'certificate_id',
        'h1',
        'p1',
        'first_li',
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
        'l_bh1',
        'l_bp1',
        'l_bh2',
        'l_bp2',
        'l_bh3',
        'l_bp3',
        'l_bh4',
        'l_bp4',
        'r_bh1',
        'r_bp1',
        'r_bh2',
        'r_bp2',
        'r_bh3',
        'r_bp3',
        'r_bh4',
        'r_bp4',
        'last_h',
        'last_li',
        'i1'
        
    ];

    public function page_certificate()
    {
        return $this->belongsTo(PageCertificate::class, 'certificate_id');
    }
    public function page_details_accordian()
    {
        return $this->hasMany(PageCertificateAccordian::class,'page_details_id');
    }

    public function link_details()
    {
        return $this->hasMany(LinkAccordian::class,'page_details_id');
    }

    public function higher_page()
    {
        return $this->hasMany(HigherPage::class,'certificate_id');
    }

}
