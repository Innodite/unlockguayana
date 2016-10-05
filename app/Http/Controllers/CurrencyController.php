<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$currencies = Currency::orderBy('id', 'desc')->paginate(10);

		return view('currencies.index', compact('currencies'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('currencies.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$currency = new Currency();

		$currency->entity = $request->input("entity");
        $currency->currency = $request->input("currency");
        $currency->code = $request->input("code");
        $currency->status = $request->input("status");

		$currency->save();

		return redirect()->route('currencies.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$currency = Currency::findOrFail($id);

		return view('currencies.show', compact('currency'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$currency = Currency::findOrFail($id);

		return view('currencies.edit', compact('currency'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$currency = Currency::findOrFail($id);

		$currency->entity = $request->input("entity");
        $currency->currency = $request->input("currency");
        $currency->code = $request->input("code");
        $currency->status = $request->input("status");

		$currency->save();

		return redirect()->route('currencies.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$currency = Currency::findOrFail($id);
		$currency->delete();

		return redirect()->route('currencies.index')->with('message', 'Item deleted successfully.');
	}

}
