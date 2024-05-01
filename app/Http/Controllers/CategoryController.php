<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = [
            [
                'id' => 1,
                'name' => 'Category 1',
                'discrption' => 'Category 1 Description',
            ],
            [
                'id' => 2,
                'name' => 'Category 2',
                'discrption' => 'Category 2 Description',
            ],
            [
                'id' => 3,
                'name' => 'Category 3',
                'discrption' => 'Category 3 Description',
            ],
        ];
        return response()->json($categories);
    }
}
