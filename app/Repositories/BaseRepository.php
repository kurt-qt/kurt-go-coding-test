<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;



abstract class BaseRepository
{
    protected $table;
    protected $column = 'id';

    public function index(?array $filters = null)
    {
        $query = DB::table($this->table);

        if (!$filters){
            return $query->paginate(50);
        }

        foreach ($filters as $filter_key => $filter_value) {
            $query->where($filter_key, $filter_value);
        }
        return $query->paginate(50);
    }

    public function store(array $data)
    {
        $data['created_at'] = Carbon::now()->timestamp;
        $data['updated_at'] = Carbon::now()->timestamp;
        return DB::table($this->table)->insert($data);
    }

    public function show(mixed $id, ?string $column = null)
    {
        return DB::table($this->table)->where($column ?: $this->column, $id)->first();
    }

    public function destroy(int $id)
    {
        return DB::table($this->table)->delete($id) ?: false;
    }

    public function update(int $id, array $data)
    {
        try {
            $data['updated_at'] = Carbon::now()->timestamp;
            return DB::table($this->table)
                ->where($this->column, $id)
                ->update($data);
        } catch (\Throwable $e) {
            return false;
        }
    }
}
