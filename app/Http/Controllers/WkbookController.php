<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class WkbookController extends Controller
{
    //

    public function index()
    {
        return view('freeaccess.landing');
    }

    public function register()
    {
        return view('guest.register');
    }

    public function userRegis(Request $request)
    {
        $request->validate([
            'name'               => 'required',
            'email'              => 'required|unique:users,email',
            'address'            => 'required',
            'phone_number'       => 'required',
            'password'           => 'required',
        ]);

        User::create([
            'name'               => $request->name,
            'email'              => $request->email,
            'address'            => $request->address,
            'phone_number'       => $request->phone_number,
            'password'           => Hash::make($request->password),
        ]);

        return redirect('/login');
    }

    public function login()
    {
        return view('guest.login');
    }

    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ]);

        $user = $request->only('email', 'password');

        if (Auth::attempt($user)){
            if(Auth::user()->role == '1') {
                return redirect('/admin/dashboard');
            }else{
            return redirect('/dashboard');
            }
        }else{
            return back();
        }; 
    }

    public function dashboardUser()
    {
        $books = Book::all();
        $categories = Category::all();
        
        return view('user.dashboard')->with('books', $books)->with('categories', $categories);
    }

    public function readBook($id)
    {
        $read = Book::where('bookID', $id)->first();
        return view('user.read')->with('read', $read);
    }

    public function printPDF($id)
    {
        $read = Book::where('bookID', $id)->first();
        return view('user.download')->with('read', $read);
    }

    public function bookCat(Request $request)
    {
        $categoryID = $request->categoryID;

        $data = DB::table('categories')
        ->join('books','books.category','categories.categoryID')
        ->where('categories.categoryID',$categoryID)
        ->get();
        return view('user.bookpage',[
            'data' => $data
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
