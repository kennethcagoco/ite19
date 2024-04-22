<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarProducts;

class CarProductsController extends Controller
{
    public function show(Request $request)
{
    $query = CarProducts::query();


    $brand = $request->get('brand') ?? ""; // Assign empty string if brand is not provided
    $minPrice = $request->get('min_price') ?? null; // Allow null for empty input
    $maxPrice = $request->get('max_price') ?? null;
    $engine = $request->get('engine') ?? null;
    $bodyType = $request->get('body_type') ?? null;


    $uniqueBodyTypes = CarProducts::select('body_type')->distinct()->get()->pluck('body_type');
    $allBrands = CarProducts::select('brand')->distinct()->get()->pluck('brand');
    $uniqueEngines = CarProducts::select('engine')->distinct()->get()->pluck('engine'); // Get unique engines


    if ($brand && $brand !== "") {
        $query->where('brand', $brand);

    }

    if ($engine && $engine !== "") {
        $query->where('engine', $engine);
    }

    if ($bodyType && $bodyType !== "") {
        $query->where('body_type', $bodyType);
    }


     // Filter by price if at least one of min or max price is provided (avoid empty input issues)
    if ($minPrice !== null OR $maxPrice !== null) {
        // Adjust the comparison operator based on your needs ('>=' for min, '<=' for max)
        $query->where(function ($q) use ($minPrice, $maxPrice) {
            if ($minPrice !== null) {
                $q->where('price', '>=', $minPrice);
            }
            if ($maxPrice !== null) {
                $q->where('price', '<=', $maxPrice);
            }
        });
    }






    $data = $query->get();
    return view('cars', compact('data','brand','engine', 'minPrice', 'maxPrice','allBrands', 'uniqueEngines', 'uniqueBodyTypes','request'));

        }

}
