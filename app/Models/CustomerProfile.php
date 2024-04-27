<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerProfile extends Model
{
    protected $_fillable = [
        'cus_name',
        'cus_add',
        'cus_city',
        'cus_postcode',
        'cus_country',
        'cus_phone',
        'cus_fax',
        'ship_name',
        'ship_add',
        'ship_city',
        'ship_state',
        'ship_postcode',
        'ship_country',
        'ship_phone',
        'user_id',
    ];

    public function user(){
        return $this->BelongsTo(User::class);
    }
}
