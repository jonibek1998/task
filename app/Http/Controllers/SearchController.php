<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $this->validate($request, [
            's' => 'required'
        ]);

        $s = $request->s;

        $results = Contact::where('firstname', 'LIKE', "%{$s}%")->get();

        // dd($request);

        return view('contacts.search', compact('results', 's'));
    }
}
