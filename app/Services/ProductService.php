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

    public function store(array $attr)
    {
        return $this->productRepository->store($attr);
    }
}
