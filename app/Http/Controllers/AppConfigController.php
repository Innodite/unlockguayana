<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\AppConfig;
use Illuminate\Http\Request;

class AppConfigController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$app_configs = AppConfig::orderBy('id', 'desc')->paginate(10);

		return view('app_configs.index', compact('app_configs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('app_configs.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$app_config = new AppConfig();

		$app_config->meta_name = $request->input("meta_name");
        $app_config->meta_value = $request->input("meta_value");
        $app_config->meta_description = $request->input("meta_description");
        $app_config->meta_info = $request->input("meta_info");

		$app_config->save();

		return redirect()->route('app_configs.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$app_config = AppConfig::findOrFail($id);

		return view('app_configs.show', compact('app_config'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$app_config = AppConfig::findOrFail($id);

		return view('app_configs.edit', compact('app_config'));
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
		$app_config = AppConfig::findOrFail($id);

		$app_config->meta_name = $request->input("meta_name");
        $app_config->meta_value = $request->input("meta_value");
        $app_config->meta_description = $request->input("meta_description");
        $app_config->meta_info = $request->input("meta_info");

		$app_config->save();

		return redirect()->route('app_configs.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$app_config = AppConfig::findOrFail($id);
		$app_config->delete();

		return redirect()->route('app_configs.index')->with('message', 'Item deleted successfully.');
	}

}
