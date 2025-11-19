<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Sesuaikan dengan model Anda

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        
        // Validasi input
        if (empty($query) || strlen($query) < 2) {
            return redirect()->back()->with('message', 'Masukkan minimal 2 karakter untuk mencari');
        }

        // Search di database
        $results = Product::where('name', 'LIKE', '%' . $query . '%')
                         ->orWhere('description', 'LIKE', '%' . $query . '%')
                         ->orWhere('category', 'LIKE', '%' . $query . '%')
                         ->paginate(12);

        return view('search-results', [
            'results' => $results,
            'query' => $query
        ]);
    }
}