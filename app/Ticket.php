<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable=['title','date','venue','summary','description','status','guest','filename','price',];

public function presentPrice(){
    return money_format('$%i',$this->price/100);}}
