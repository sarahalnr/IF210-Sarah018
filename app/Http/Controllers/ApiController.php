<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $numbers = range(1, 100); //membuat array berisi angka 1 sampai 100
        return response()->json($numbers);
    }

    public function getProduct()
        {
            $data = Produk::all(); 
            return response()->json($data);
        }


    }