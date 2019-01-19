<?php

namespace App\Http\Controllers;


use App\Activity;
use App\Inquiry;
use App\Report;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    
    public function home()
    {
        $logs = Activity::latest()->paginate();
        $members = User::all()->count();
        $inquiries = Inquiry::NotAnswered()->count();
        $reports = Report::all()->count();
        return view('admin.home', compact('logs','members', 'inquiries','reports'));
    }
    
    public function index()
    {
        return view('admin.users')->with([
            'users' => User::latest()->get(),
        ]);
    }
    
    public function create()
    {
        return view('admin.create');
    }
    
    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name'    => 'required|string|max:255|min:3',
            'sur_name'      => 'required|string|max:255|min:3',
            'email'         => 'required|email|unique:users|max:255',
            'password'      => 'required|string|min:6|confirmed',
            'date_of_birth' => 'required|date_format:Y-m-d',//todo: valid 18 year
            'gender'        => 'required|string|in:male,female,Male,Female',
            'contact'       => ['required', 'string', 'regex:/^(03|\+923)[0-9]{2}?-[0-9]{7}$/i'],
            'cnic'          => ['required', 'string', 'regex:/^\d{5}-\d{7}-\d{1}$/i'],
            'address'       => 'required|string'
        ]);
        $data['password'] = Hash::make($data['password']);
        
        User::create($data);
        
        flash('Created Successfully');
        
        return back();
    }
    
    public function show(User $user)
    {
        return view('admin.show', compact('user'));
    }
    
    public function edit(User $user)
    {
        //
    }
    
    public function update(Request $request, User $user)
    {
        //
    }
    
    public function destroy(User $user)
    {
        $user->delete();
        flash("Deleted");
        
        return back();
    }
    
    public function reports()
    {
        $reports = Report::latest()->get();
        
        return view('admin.reports', compact('reports'));
    }
    
    public function report(Report $report)
    {
        return view('admin.report', compact('report'));
    }
    
}
