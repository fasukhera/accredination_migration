<?php

namespace App\PageApp;

use Illuminate\Database\Eloquent\Model;

class HigherPage extends Model
{
   
    protected $table ='higher_page';
    protected $fillable = [
        'certificate_id',
        'membership_id',
        'a1',
        'a2',
        'a3',
        'a4',
        'last_h2',
        'last_li2',
        'exh',
        'exp',
        'exli'
        
    ];

    public function page_details()
    {
        return $this->hasOne(PageCertificateDetails::class);
    }

    public function membership_details()
    {
        return $this->hasOne(PageMembershipDetails::class);
    }

    

}
