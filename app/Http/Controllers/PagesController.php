<?php

namespace App\Http\Controllers;

use App\Report;

class PagesController extends Controller {
    
    public function index()
    {
        $reports = Report::latest()->status("processing")->take(24)->get();
        $list = Report::latest()->status("processing")->take(5)->get();
        
        return view('welcome', compact('reports', 'list'));
    }
    
    public function missing()
    {
        $query = Report::latest()->status("processing");
        $search = request('search');
        $keys = explode(' ', $search);
        
        if (request()->has('search'))
        {
            $query->where('first_name', 'like', "%$search%");
            foreach ($keys as $key)
            {
                $query->orWhere('first_name', 'like', "%$key%");
                $query->orWhere('last_name', 'like', "%$key%");
                $query->orWhere('place', 'like', "%$key%");
            }
        }
        $reports = $query->paginate(16)
            ->appends(request()->query());
        
        
        return view('reports', compact('reports'));
    }
    
    public function details(Report $report)
    {
        return view('report_details', compact('report'));
    }
    
    public function about()
    {
        return view('about');
    }
    
    public function contact()
    {
        return view('contact');
    }
    
    
}
