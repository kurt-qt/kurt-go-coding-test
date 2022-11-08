<?php

namespace App\Services;

use App\Repositories\ProductRepository;

class ProductService
{
    public function __construct(private ProductRepository $productRepository) {}

    public function index(?array $filters)
    {
        return $this->productRepository->index($filters);
    }

    public function store(array $data)
    {
        return $this->productRepository->store($data);
    }

    public function show(mixed $id, ?string $column = null)
    {
        return $this->productRepository->show($id, $column);
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
