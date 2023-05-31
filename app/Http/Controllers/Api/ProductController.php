<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    public function index (Request $request)
    {
        $query =  Product ::get()->toArray();

        $datas = [];
        foreach($query as $qry) {
            $temp = $qry;

            // $create_at_indo = \Carbon\Carbon::parse($temp['create_at']);
            // $create_at_indo->locale('id')->settings(['fomatFunction' => 'translatedFormat']);

            // $temp['created_date_indo'] = $create_at_indo->format('1', 'D F Y H:i:s');
            array_push($datas, $temp);
        };
        return new ProductResource(true, 'Get Data Successfull', $datas,[]);
    }
    public function show (Request $request){}
    public function store (Request $request){}
    public function update (Request $request){}
    public function destroy (Request $request){}


}
