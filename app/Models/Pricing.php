<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Pricing extends Authenticatable
{
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'pricing';
    protected $fillable = [
        'price_card_name', 'price_card_amount', 'price_card_duration', 'price_card_offer', 'price_card_detail'
    ];

   
    
}
