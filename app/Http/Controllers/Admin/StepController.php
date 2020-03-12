<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use App\Step;
use Illuminate\Http\Request;

class StepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $steps = Step::with('product')->paginate(20);
        return view('admin.step.index', compact('steps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::orderBy('sort')->get();
        return view('admin.step.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Step::create($request->except('_token'));
        return redirect(route('admin.step.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Step $step
     * @return \Illuminate\Http\Response
     */
    public function show(Step $step, Request $request)
    {
        $f = $request->lan;
        $l = $step->$f;
        return view('admin.step.show', compact('l'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Step $step
     * @return \Illuminate\Http\Response
     */
    public function edit(Step $step)
    {
        $products = Product::orderBy('sort')->get();
        return view('admin.step.edit', compact('products', 'step'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Step $step
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Step $step)
    {
        $step->update($request->except('_token'));
        return redirect(route('admin.step.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Step $step
     * @return \Illuminate\Http\Response
     */
    public function destroy(Step $step)
    {
        //
    }
}
