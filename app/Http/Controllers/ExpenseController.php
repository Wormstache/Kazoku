<?php

namespace App\Http\Controllers;

use App\Expense;
use App\Category;
use App\Member;
use App\Budget;
use App\Http\Requests\StoreExpense;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $budget = Budget::first();
        $categories = Category::all();
        $members = Member::all();
        $expenses = Expense::whereMonth('date', date('m'))
                            ->whereYear('date', date('Y'))
                            ->orderBy('date', 'desc')
                            ->get();
        return view('user.expense.index', compact('budget', 'categories', 'members', 'expenses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExpense $request)
    {
        $expenses = DB::transaction(function () use ($request) {
            $expenses = Expense::create($request->data());
        });

        return redirect()
            ->route('expense.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function show(Expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit(Expense $expense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(StoreExpense $request, Expense $expense)
    {
        $expense = DB::transaction(function () use ($request, $expense) {
            $expense->update($request->data());
            return $expense;
        });
        
        return redirect()
            ->route('expense.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expense $expense)
    {
        $expense->delete();

        return redirect()
            ->route('expense.index');
    }
}
