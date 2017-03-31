<?php

namespace App;

use App\User;
use Auth;
use Illuminate\Database\Eloquent\Model;

class RegisteredMember extends Model
{
    protected $tabele = 'RegisteredMember';

    protected $fillable = [
    	'user_id',
    	'job_title',
    	'name_of_director',
    	'postal_address',
    	'business_address_or_location',
    	'region',
    	'company_email',
    	'company_active_phone',
    	'company_phone_two',
    	'company_phone_three',
    	'bank_draft_number',
    	'company_website',
    	'major_active_category',
    	'company_major_activitygoods',
    	'compan_major_activityservices',
    	'company_major_activityworks',
    	'minor_activity1_category',
    	'company_minor_activity1goods',
    	'company_minor_activity1services',
    	'company_minor_activity1works',
    	'minor_activity2_category',
    	'minor_activity2goods',
    	'minor_activity2services',
    	'minor_activity2works'
    ];
}
