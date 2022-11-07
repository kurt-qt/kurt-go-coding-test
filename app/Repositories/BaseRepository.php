<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;



abstract class BaseRepository
{
    protected $table;

    public function index()
    {
        return DB::table($this->table)->paginate(50);
    }

    public function store(array $data)
    {
        $data['created_at'] = Carbon::now()->timestamp;
        $data['updated_at'] = Carbon::now()->timestamp;
        return DB::table($this->table)->insert($data);
    }

    public function show(int $id)
    {
        return DB::table($this->table)->find($id);
    }

    public function update(int $id, array $data)
    {
        return DB::table($this->table)
            ->find($id)
            ->update($data);
    }

    public function destroy(int $id)
    {
        return DB::table($this->table)
            ->find($id)
            ->delete();
    }
}
