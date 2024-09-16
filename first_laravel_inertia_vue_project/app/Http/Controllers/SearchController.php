<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function SearchDashboard(Request $request)
    {
        return inertia('Dashboard', [
            'users' => User::when($request->search, function ($query) use ($request) {
                return $this->SearchQuery($request, $query);
            })->paginate(5)->withQueryString(),

            'searchTerm' => $request->search
        ]);
    }

    private function SearchQuery(Request $request, $query)
    {
        return $query->where('name', 'like', '%' . $request->search . '%')->orWhere('email', 'like', '%' . $request->search . '%');
    }
}
