<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ExchangesRate;
use App\Libs\Utils;
use Illuminate\Http\Request;

class ExchangesRateController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$exchanges_rates = ExchangesRate::orderBy('id', 'desc')->paginate(10);

		return view('exchanges_rates.index', compact('exchanges_rates'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$currencies = Utils::getComboBoxCurrencies();
		return view('exchanges_rates.create', compact('currencies'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$exchanges_rate = new ExchangesRate();

		$exchanges_rate->currency_id = $request->input("currency_id");
        $exchanges_rate->change_date = $request->input("change_date");
        $exchanges_rate->rate = $request->input("rate");
        $exchanges_rate->number_modifying = $request->input("number_modifying");

		$exchanges_rate->save();

		return redirect()->route('exchanges_rates.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$exchanges_rate = ExchangesRate::findOrFail($id);

		return view('exchanges_rates.show', compact('exchanges_rate'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$exchanges_rate = ExchangesRate::findOrFail($id);
		$currencies     = Utils::getComboBoxCurrencies();

		return view('exchanges_rates.edit', compact('exchanges_rate','currencies'));
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
		$exchanges_rate = ExchangesRate::findOrFail($id);

		$exchanges_rate->currency_id = $request->input("currency_id");
        $exchanges_rate->change_date = $request->input("change_date");
        $exchanges_rate->rate = $request->input("rate");
        $exchanges_rate->number_modifying = $request->input("number_modifying");

		$exchanges_rate->save();

		return redirect()->route('exchanges_rates.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$exchanges_rate = ExchangesRate::findOrFail($id);
		$exchanges_rate->delete();

		return redirect()->route('exchanges_rates.index')->with('message', 'Item deleted successfully.');
	}

}
