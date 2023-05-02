<?php 

namespace App\Controllers;

use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;

class ProductController
{
    // Show the product attributes based on the id.
	public function showProduct(int $id, RouteCollection $routes)
	{
        $product = new Product();
        $product->read($id);

        
        require_once APP_ROOT . '/app/views/product.php';
	}

    // Show the product attributes based on the id.
	public function showProducts(RouteCollection $routes)
	{
        $product = new Product();
        $product->read();

        
        require_once APP_ROOT . '/app/views/product.php';
	}
}