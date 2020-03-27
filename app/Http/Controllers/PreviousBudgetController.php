<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Expense;
use App\Budget;
use Illuminate\Http\Request;

class PreviousBudgetController extends Controller
{
    public function index()
    {
        $budget = Budget::first();
        $expenses = Expense::all()
                    ->groupBy(function($val) {
                        return Carbon::parse($val->date)->format('M');
                    });
        return view('user.previousBudgets.index', compact('budget', 'expenses'));
    }
}
