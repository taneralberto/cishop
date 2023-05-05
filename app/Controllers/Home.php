<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect('cishop');
        $product = $db->query('SELECT * FROM products');
        $product = $product->getResultArray();
        var_dump($product);
        return view('welcome_message');
    }
}
