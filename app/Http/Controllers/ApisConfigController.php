<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ApisConfig;
use Illuminate\Http\Request;

class ApisConfigController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$apis_configs = ApisConfig::orderBy('id', 'desc')->paginate(10);

		return view('apis_configs.index', compact('apis_configs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('apis_configs.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$apis_config = new ApisConfig();

		$apis_config->api_name = $request->input("api_name");
        $apis_config->api_type = $request->input("api_type");
        $apis_config->api_url_base = $request->input("api_url_base");
        $apis_config->api_request_format = $request->input("api_request_format");
        $apis_config->api_user_name = $request->input("api_user_name");
        $apis_config->api_key = $request->input("api_key");
        $apis_config->api_secret = $request->input("api_secret");
        $apis_config->api_cli_increased_percentage = $request->input("api_cli_increased_percentage");
        $apis_config->api_dev_increased_percentage = $request->input("api_dev_increased_percentage");
        $apis_config->api_status = $request->input("api_status");

		$apis_config->save();

		return redirect()->route('apis_configs.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$apis_config = ApisConfig::findOrFail($id);

		return view('apis_configs.show', compact('apis_config'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$apis_config = ApisConfig::findOrFail($id);

		return view('apis_configs.edit', compact('apis_config'));
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
		$apis_config = ApisConfig::findOrFail($id);

		$apis_config->api_name = $request->input("api_name");
        $apis_config->api_type = $request->input("api_type");
        $apis_config->api_url_base = $request->input("api_url_base");
        $apis_config->api_request_format = $request->input("api_request_format");
        $apis_config->api_user_name = $request->input("api_user_name");
        $apis_config->api_key = $request->input("api_key");
        $apis_config->api_secret = $request->input("api_secret");
        $apis_config->api_cli_increased_percentage = $request->input("api_cli_increased_percentage");
        $apis_config->api_dev_increased_percentage = $request->input("api_dev_increased_percentage");
        $apis_config->api_status = $request->input("api_status");

		$apis_config->save();

		return redirect()->route('apis_configs.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$apis_config = ApisConfig::findOrFail($id);
		$apis_config->delete();

		return redirect()->route('apis_configs.index')->with('message', 'Item deleted successfully.');
	}

}
