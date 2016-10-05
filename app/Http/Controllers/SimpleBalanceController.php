<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\SimpleBalance;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\ResponseFactory;

class SimpleBalanceController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$simple_balances = SimpleBalance::orderBy('id', 'desc')->paginate(10);

		return view('simple_balances.index', compact('simple_balances'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('simple_balances.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$simple_balance = new SimpleBalance();

		$simple_balance->user_id = $request->input("user_id");
    $simple_balance->movement_type = $request->input("movement_type");
    $simple_balance->usd_amount = $request->input("usd_amount");
    $simple_balance->local_amount = $request->input("local_amount");
    $simple_balance->credits = $request->input("credits");
    $simple_balance->exchange_rate_id = $request->input("exchange_rate_id");
    $simple_balance->movement_date = $request->input("movement_date");

		$simple_balance->save();

		return redirect()->route('simple_balances.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$simple_balance = SimpleBalance::findOrFail($id);

		return view('simple_balances.show', compact('simple_balance'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$simple_balance = SimpleBalance::findOrFail($id);

		return view('simple_balances.edit', compact('simple_balance'));
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
		$simple_balance = SimpleBalance::findOrFail($id);

		$simple_balance->user_id = $request->input("user_id");
    $simple_balance->movement_type = $request->input("movement_type");
    $simple_balance->usd_amount = $request->input("usd_amount");
    $simple_balance->local_amount = $request->input("local_amount");
    $simple_balance->credits = $request->input("credits");
    $simple_balance->exchange_rate_id = $request->input("exchange_rate_id");
    $simple_balance->movement_date = $request->input("movement_date");

		$simple_balance->save();

		return redirect()->route('simple_balances.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$simple_balance = SimpleBalance::findOrFail($id);
		$simple_balance->delete();

		return redirect()->route('simple_balances.index')->with('message', 'Item deleted successfully.');
	}


	public function mp_credits_check(Request $request) {

		$mp               = new \MP("6033247691324985", "kXQ1gr1xZGLezNaPkQbzC0AIlgU1ixm9");
		$credits_refound  = intval($request->input("credits"));
		$exchange_rate    = 1024;

		$preference_data = array(
			"back_urls" => array(
				"success"=> "http://localhost:8000",
        "pending"=> "http://localhost:8000",
        "failure"=> "http://localhost:8000",
       ),
		  "items" => array(
		    array(
		      "title"       => "Credits Refound",
		      "currency_id" => "VEF",
		      "category_id" => "Credits",
		      "quantity"    => $credits_refound,
		      "unit_price"  => $exchange_rate
		    )
		  )
		);

		$mp->sandbox_mode(TRUE); // Modo de Pruebas Activado
		$preference = $mp->create_preference($preference_data);

		return response()->json($preference);
	}

}
