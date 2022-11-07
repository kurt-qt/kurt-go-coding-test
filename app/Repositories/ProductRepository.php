<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductRepository extends BaseRepository
{
    protected $table = 'products';
}
