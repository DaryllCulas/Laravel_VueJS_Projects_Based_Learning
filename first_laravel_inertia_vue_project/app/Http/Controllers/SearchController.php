<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function SearchDashboard(Request $request)
    {
        return inertia('Dashboard', [
            'users' => User::when($request->search, function ($query) use ($request) {
                return $this->SearchQuery($request, $query);
            })->paginate(5)->withQueryString(),

            'searchTerm' => $request->search,
            'can' => [
                'delete_user' =>
                Auth::user() ? Auth::user()
                    ->can('delete', User::class) : null
            ],
        ]);
    }

    private function SearchQuery(Request $request, $query)
    {
        return $query->where('name', 'like', '%' . $request->search . '%')->orWhere('email', 'like', '%' . $request->search . '%');
    }
}
