<?php
namespace App\Http\Controllers\Example;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Example\SecondController;
use Illuminate\Http\Request;
class FirstController extends Controller
{
    //_index method_//
    public function index()
    {
       return view('contact');
    }
    public function phone()
    {
        return response("shamim sorkar");
    }
 //country method//
    public function country2()
    {
        return view('country');
    } 
 //..student.store..//
    public function Student(Request $request){
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        return redirect()->action([SecondController::class, 'test']);
        //return redirect('/');
        //dd($data);
        //dd($request->url());
        // dd($request->path());
        //dd($request->host());
        //dd($request->httpHost());
        // dd($request->ip(),
        // $request->bearerToken(),
        // $request->all(),
        // $request->collect(),
        // $request->input('name'),
        // $request->input(),
        // $request->query('name'),
        // $request->input('user.name'),
        // $request->date('birthday'),
        // $request->old('username'),
        // $request->cookie('name')

    // );

    }
    public function Laravel(){
        return view('laravel');
    }
}
