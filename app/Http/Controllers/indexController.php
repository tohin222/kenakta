<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
     public function fontend_home_index()
    {
        return view('Fontend.home.index');
    }
       public function fontend_product_index()
    {
        return view('Fontend.product.index');
    }
       public function fontend_protfolio_index()
    {
        return view('Fontend.profolio.index');
    }
       
    public function fontend_blog_index()
    {
        return view('Fontend.blog.index');
    }
     public function fontend_contact_index()
    {
        return view('Fontend.contact.index');
    }
   
}
