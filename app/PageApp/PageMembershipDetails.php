<?php

namespace App\PageApp;

use Illuminate\Database\Eloquent\Model;

class PageMembershipDetails extends Model
{
   
    protected $fillable = [
        'membership_id',
        'main_h',
        'p1',
        'h1',
        'p1_1',
        'p1_2',
        'p1_3',
        'h2',
        'h2_1',
        'li1',
        'p2',
        'h3',
        'li2',
        'p3'
        
    ];

    public function page_membership()
    {
        return $this->belongsTo(PageMembership::class, 'membership_id');
    }


    public function higher_page()
    {
        return $this->hasMany(HigherPage::class,'membership_id');
    }

}
