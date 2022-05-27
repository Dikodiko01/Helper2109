<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class HomeController extends Controller
{

    public function welcome()
    {
      return view('welcome');
    }

    public function index()
    {
      $user_id = auth()->user()->id;
      $user = User::find($user_id);
      return view('home')->with('posts', $user->posts);
    }

    public function notion()
    {
      return view('notion');
    }
    public function download()
    {
      return view('download');
    }
    /*public function priceses()
    {
      return view('priceses');
    }
    */
    public function tools()
    {
      return view('tools');
    }
    public function community()
    {
      return view('community');
    }

    public function diko()
    {
      $data = student::all();

      return view('dikoplace', compact('data'));
    }


    public function upload(Request $request)
    {
      $student = new student;

      $student -> name = $request -> name;

      $student -> email = $request ->email;


      $image = $request->file;
      if ($image)
      {
        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->file->move('student', $imagename);

        $student -> image = $imagename;
      }

      $student -> save();

      return redirect() -> back();
    }

    public function view()
    {
      $data = student::all();

      return view('display', compact('data'));
    }


}
