<?php


namespace App\Repositories;


use App\Models\Product;
use App\Repositories\RepositoryInterfaces\ProductRepositoryInterface;
use Exception;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class ProductRepository extends BaseRepository implements  ProductRepositoryInterface
{
    public function __construct(Product $model)
    {
        parent::__construct($model);
    }

    function storeProduct($data)
    {
        try{
           $productData = Arr::except($data,['size','price','attachment']);
           $product = $this->store($productData);
           if(isset($data['attachment'])){
               $imagePtah= Storage::putFile('public/product',$data['attachment']);
               $product['attachment'] = $product->images()->create(['url' => $imagePtah]);
           }


           $sizeAndPrice = [];
           foreach ($data['size'] as $key => $size){
               $sizeAndPrice[$size] = ['price' => isset($data['price'][$key]) ? floatval($data['price'][$key]): 0 ];
           }
           $product->sizes()->attach($sizeAndPrice);
           $product['sizes'] = $product->sizes()->get();
           return $product;

        }catch (\Throwable $throwable){
            throw new Exception($throwable->getMessage());
        }
    }

    function productDetails()
    {
        return $this->model->with(['category','sizes','images'])->orderBy('created_at','desc')->get();

    }
}
