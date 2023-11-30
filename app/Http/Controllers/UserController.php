<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register()
    {
        return view('users.register');
    }

    // public function store(Request $request)
    // {
    //     $data = $request->validate([
    //         'name' => 'required',
    //         'quantity' => 'required|numeric',
    //         'price' => 'required|decimal:0,2',
    //     ]);

        // $newProduct = Product::create($data);
        // return redirect(route('product.index'));
    }

}
