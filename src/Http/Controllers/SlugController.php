<?php

namespace Wdd\Slug\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class SlugController extends Controller
{
    /**
     * @return void
     */
    public function index()
    {
        $slug = Str::slug('Web Developer Dairies');
        return view('wdd/slug::slug',compact('slug'));
    }
}
