<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   public $id;
   public $timestamps;
   public $name;
   public $price;
   public $image;
   public $description;

}
