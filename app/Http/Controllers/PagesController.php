<?php

namespace App\Http\Controllers;

use App\Notice;
use App\Budget;
use App\Category;
use App\Member;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $members = Member::all();
        $notices = Notice::all();
        return view ('user.index', compact('notices', 'categories', 'members'));
    }
}
