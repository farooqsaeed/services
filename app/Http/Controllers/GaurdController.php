<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Gaurd;
use App\Models\Property;


class GaurdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gaurds = Gaurd::orderBy('id', 'DESC')->get();
        return view('callout.index', compact(['gaurds']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('callout.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Guard_Name' => 'required',
            'Guard_Email' => 'required',
            'Guard_Contact' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return json_encode(['status' => 0, 'errors' => $errors]);
        }

        Gaurd::create(
            [
                'Guard_Name' => $request->Guard_Name,
                'Guard_Email' => $request->Guard_Email,
                'Guard_Contact' => $request->Guard_Contact,
                'Notes' => $request->Notes,
                'status' => 'active',
                'property_id' => null,
            ]
        );
        return response()->json(['result' => 'Callout added!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    // assign property
    public function assign_property($id)
    {
        $gaurd = Gaurd::findorFail($id);
        $properties = Property::all();
        return view('callout.callout-property', compact(['properties', 'gaurd']));
    }

    public function store_call_property(Request $request, $id)
    {
        $update = [
            "property_id" => $request->property_id,
            "status" => 'unactive',
        ];
        Gaurd::where('id', $id)->update($update);
        return response()->json(['result' => 'Callout updated  Successfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $callout = Gaurd::findorFail($id);
        return view('callout.edit', compact(['callout']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = [
            "Guard_Name" => $request->Guard_Name,
            "Guard_Contact" => $request->Guard_Contact,
            "Guard_Email" => $request->Guard_Email,
            "Notes" => $request->Notes,
        ];
        Gaurd::where('id', $id)->update($update);
        return response()->json(['result' => 'Callout updated  Successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $callout = Gaurd::findorFail($id);
        $callout->delete();
        return redirect('callout');
    }
}
