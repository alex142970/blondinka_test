<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'active',
        'last_name',
        'second_name',
        'personal_gender',
        'personal_profession',
        'personal_www',
        'personal_birthday',
        'personal_photo',
        'personal_icq',
        'personal_phone',
        'personal_fax',
        'personal_mobile',
        'personal_pager',
        'personal_street',
        'personal_city',
        'personal_state',
        'personal_zip',
        'personal_country',
        'personal_company',
        'work_position',
        'work_department',
        'uf_interests',
        'uf_skills',
        'uf_web_sites',
        'uf_xing',
        'uf_linkedin',
        'uf_facebook',
        'uf_twitter',
        'uf_skype',
        'uf_district',
        'uf_phone_inner',
    ];
}
