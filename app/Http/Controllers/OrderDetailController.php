<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$order_details = OrderDetail::orderBy('id', 'desc')->paginate(10);

		return view('order_details.index', compact('order_details'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('order_details.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$order_detail = new OrderDetail();

		$order_detail->order_id = $request->input("order_id");
        $order_detail->service_description = $request->input("service_description");
        $order_detail->service_info = $request->input("service_info");
        $order_detail->service_api = $request->input("service_api");
        $order_detail->credits = $request->input("credits");
        $order_detail->status = $request->input("status");

		$order_detail->save();

		return redirect()->route('order_details.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$order_detail = OrderDetail::findOrFail($id);

		return view('order_details.show', compact('order_detail'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$order_detail = OrderDetail::findOrFail($id);

		return view('order_details.edit', compact('order_detail'));
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
		$order_detail = OrderDetail::findOrFail($id);

		$order_detail->order_id = $request->input("order_id");
        $order_detail->service_description = $request->input("service_description");
        $order_detail->service_info = $request->input("service_info");
        $order_detail->service_api = $request->input("service_api");
        $order_detail->credits = $request->input("credits");
        $order_detail->status = $request->input("status");

		$order_detail->save();

		return redirect()->route('order_details.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$order_detail = OrderDetail::findOrFail($id);
		$order_detail->delete();

		return redirect()->route('order_details.index')->with('message', 'Item deleted successfully.');
	}

}
