<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contractor;
use App\Models\Document;
use App\Models\Group;



class ContractorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('contractors.contractors');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::orderby('id', 'DESC')->get();
        return view('contractors.add',compact(['groups']));
    }

    // plumbers
    public function plumbers()
    {
        $contractors = Contractor::get();
        return view('contractors.plumbers', compact(['contractors']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         // $contractor = Contractor::create($request->all());
        $document = new Document();
        $document->title = $request->input('title');
        $document->description = $request->input('description');
        $document->achieved_date = $request->input('achieved_date');
        $document->expiry_date = $request->input('expiry_date');
        $document->doc_type = $request->doc_type;
        $document->user_id = 1;
        if ($request->file('attachment')) {
            $file = $request->file('attachment');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/Image'), $filename);
            $document['attachment'] = $filename;
        }
        $document->save();

        $document = new Document();
        $document->title = $request->input('title1');
        $document->description = $request->input('description1');
        $document->achieved_date = $request->input('achieved_date1');
        $document->expiry_date = $request->input('expiry_date1');
        $document->doc_type = $request->input('doc_type1');
        $document->user_id = 1;
        if ($request->file('attachment1')) {
            $file = $request->file('attachment1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/Image'), $filename);
            $document['attachment'] = $filename;
        }
        $document->save();
        // return response()->json(['result' => 'Record Inserted!']);
        return redirect("/contractors")->with(['success', 'Contractor added successfully']);
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
