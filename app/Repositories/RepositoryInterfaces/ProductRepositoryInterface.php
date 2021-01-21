<?php


namespace App\Repositories\RepositoryInterfaces;


interface ProductRepositoryInterface extends BaseRepositoryInterface
{
        function storeProduct($data);
        function productDetails();
        function deleteProduct($id);
}
