<?php

namespace App\Services;

use App\Repositories\ProductRepository;

class ProductService
{
    public function __construct(private ProductRepository $productRepository) {}

    public function index()
    {
        return $this->productRepository->index();
    }

    public function store(array $data)
    {
        return $this->productRepository->store($data);
    }

    public function destroy(int $id)
    {
        return $this->productRepository->destroy($id);
    }

    public function update(int $id, array $data)
    {
        return $this->productRepository->update($id, $data);
    }
}
