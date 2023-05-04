<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }
    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about');
    }
    public function chat()
    {
        return view('chat');
    }
    public function tech()
    {
        return view('tech');
    }
    public function message(Request $request){
        // print_r($request->all());
        //         die;


$message=new Message;
$message->message= $request['message'];
$message->save();

return redirect()->back();
}
public function chats(){
    $message = Message::all();
    $data= compact('message');

    return view('chat')->with($data);
}
}
