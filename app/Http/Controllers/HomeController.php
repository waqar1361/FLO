<?php

namespace App\Http\Controllers;

use App\Report;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    public function index()
    {
        $report = new Report();
        
        return view('user.home', compact('report'));
    }
    
    public function settings()
    {
        return view('user.settings');
    }
    
    public function archived()
    {
        $reports = Report::latest()->status('archived')->get();
        
        return view('report.archived', compact('reports'));
    }
    
    public function pending()
    {
        $reports = Report::latest()->pending()->get();
        
        return view('report.pending', compact('reports'));
    }
    
    public function processing()
    {
        $reports = Report::latest()->status('processing')->get();
        
        return view('report.processing', compact('reports'));
    }
    
    
    /*
     *      Actions
     */
    public function verify(Report $report)
    {
        $report->verified = true;
        $report->reporter_id = auth()->id();
        $report->status = 'processing';
        $report->save();
        auth()->user()->activities()->create([
            'description' => 'Verify the report ID # ' . $report->id,
        ]);
        
        flash("Verified");
        
        return back();
    }
    
    public function completed(Report $report)
    {
        $report->status = 'archived';
        $report->save();
        auth()->user()->activities()->create([
            'description' => 'Report ID # ' . $report->id . " Completed",
        ]);
        
        flash("Archived");
        
        return back();
    }
    
}
