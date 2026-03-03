<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodBeverage() {
        $dataProduk = ['Indomie Goreng', 'Kopi Kenangan', 'Aqua Botol 600ml', 'Roti Aoka'];
        return view('products', ['category' => 'Food & Beverage', 'products' => $dataProduk]);
    }

    public function beautyHealth() {
        $dataProduk = ['Sabun Cuci Muka Biore', 'Vitamin C IPI', 'Shampo Pantene', 'Tolak Angin'];
        return view('products', ['category' => 'Beauty & Health', 'products' => $dataProduk]);
    }

    public function homeCare() {
        $dataProduk = ['Sapu Lidi', 'Pembersih Lantai Soklin', 'Spons Cuci Piring', 'Pengharum Ruangan'];
        return view('products', ['category' => 'Home Care', 'products' => $dataProduk]);
    }

    public function babyKid() {
        $dataProduk = ['Popok MamyPoko', 'Susu Bebelac', 'Minyak Telon Zwitsal', 'Bedak Bayi'];
        return view('products', ['category' => 'Baby & Kid', 'products' => $dataProduk]);
    }
}