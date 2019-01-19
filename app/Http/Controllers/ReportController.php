<?php

namespace App\Http\Controllers;

use App\Report;
use App\Reporter;
use Illuminate\Http\Request;

class ReportController extends Controller {
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('report.create');
    }
    
    public function store(Request $request)
    {
        $reporter_data = $this->validate_reporter();
        $data = $request->validate([
            'first_name'  => 'nullable',
            'last_name'   => 'nullable',
            'description' => 'required',
            'age'         => 'required',
            'missing_at'  => 'nullable|date_format:Y-m-d',
            'gender'      => 'required',
            'place'       => 'required',
            'image'       => 'required|mimes:png,jpg,jpeg|max:2048'
        ]);
        
        $data['image'] = now()->format('YmdU') . "." . $request->image->getClientOriginalExtension();
        $request->image->storeAs('public', $data['image']);
        $data['type'] = $request->type;
        
        $reporter = Reporter::create($reporter_data);
        $reporter->report()->create($data);
        
        flash('Stored successfully');
        
        return back();
        
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Report $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        return view('report.show', compact('report'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Report $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Report              $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Report $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        $report->reporter()->delete();
        unlink("storage/".$report->image);
        $report->delete();
        flash('deleted');
        
        return back();
    }
    
    public function validate_reporter()
    {
        request()->validate([
            'reporter_first_name' => 'required|string',
            'reporter_last_name'  => 'required|string',
            'contact'             => ['required','string','regex:/^(03|\+923)[0-9]{2}?-[0-9]{7}$/i'],
            'cnic'                => ['required','string','regex:/^\d{5}-\d{7}-\d{1}$/i'],
            'address'             => 'required|string'
        ]);
        
        return [
            'first_name' => request()->reporter_first_name,
            'last_name'  => request()->reporter_last_name,
            'contact'    => request()->contact,
            'cnic'       => request()->cnic,
            'address'    => request()->address
        ];
    }
    
}
