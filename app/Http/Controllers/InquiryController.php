<?php

namespace App\Http\Controllers;

use App\Inquiry;
use App\Mail\InquiryAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InquiryController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:admin')->except("store");
    }
    
    
    public function index()
    {
        $inquiries = Inquiry::latest()->notAnswered()->get();
        
        return view('inquiry.index', compact('inquiries'));
    }
   
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        Inquiry::create($request->validate([
            'name'    => 'required|string|min:3|max:255',
            'email'   => 'required|email|max:255',
            'message' => 'required|string|min:5'
        ]));
        
        flash("Saved");
        
        return back();
    }
    
    public function show(Inquiry $inquiry)
    {
        //
    }
    
   
    public function edit(Inquiry $inquiry)
    {
        //
    }
    
   
    public function update(Request $request, Inquiry $inquiry)
    {
        $request->validate([
            'answer' => 'required|string|min:5'
        ]);
        
        $inquiry->answered = true;
        $inquiry->save();
        Mail::to($inquiry->email)->send(new InquiryAnswer($inquiry->message, $request->answer));
        
        flash("Answered");
        
        return back();
    }
    
    public function destroy(Inquiry $inquiry)
    {
        $inquiry->delete();
        flash("Deleted");
        
        return back();
    }
}
