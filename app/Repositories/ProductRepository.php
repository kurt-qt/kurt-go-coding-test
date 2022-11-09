<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductRepository extends BaseRepository
{
    protected $table = 'products';

    public function index(?array $filters = null)
    {
        $query = DB::table($this->table);

//        if (!$filters){
//            return $query->paginate(50);
//        }

//        $filters = [
//            'name' => 'inventore',
//            'price' => 186020.40,
//        ];

        $query = $this->whereName($query, $filters);
        $query = $this->wherePrice($query, $filters);

        return $query->paginate(50);
    }

    public function whereName($query, array $filters)
    {
        if (key_exists('name', $filters)) {
            return $query->where('name', $filters['name']);
        }

        return $query;
    }

    public function wherePrice($query, array $filters)
    {
        if (key_exists('price', $filters)) {
            return $query->where('price', $filters['price']);
        }

        return $query;
    }
}
