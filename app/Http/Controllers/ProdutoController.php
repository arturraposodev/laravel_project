<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;


class ProdutoController extends Controller
{
    public function index (Product $product)
    
    {
    	$products = $product ->all ();

     	return view ('Painel.Products.index', compact ('products'));
    }

   public function create ()
   
   {
     return view ('Painel.Products.create');
   }
}
