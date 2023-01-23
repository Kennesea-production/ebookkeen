<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    //
    public function dashboardAdmin()
    {
        $users = User::all();

        return view('admin.dashboard')->with('users', $users);
    }

    public function bookAdmin()
    {

        $books = Book::all();
        $categories = Category::all();

        return view('admin.book')->with('books', $books)->with('categories', $categories);
    }

    public function storeBook(Request $request)
    {

        // @dd($request->all());
        $request->validate([
            'title'              => 'required',
            'writter'            => 'required',
            'category'            => 'required',
            'publisher'          => 'required',
            'ISBN'               => 'required',
            'synopsis'           => 'required',
            'cover_book'         => 'required',
        ]);


            // Book::create([
            //     'title'              => $request->title,
            //     'writter'            => $request->writter,
            //     'category'           => $request->category,
            //     'publisher'          => $request->publisher,
            //     'ISBN'               => $request->ISBN,
            //     'synopsis'           => $request->synopsis,
            // ]);

            $input = $request->all();
            if($image = $request->file('cover_book')) {
                $destinationPath = 'img/';
                $coverImage = date('YmdHis').'.'. $image->getCLientOriginalExtension();
                $image->move($destinationPath, $coverImage);
                $input['cover_book'] = "$coverImage";
            }

            Book::create($input);

            // dd($request);

        


        return redirect('/admin/books');
    }

    public function categoryAdmin()
    {
        $categories = Category::all();

        return view('admin.category')->with('categories', $categories);
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'categoryName'   => 'required',
        ]);

        Category::create([
            'categoryName' => $request->categoryName,
        ]);

        return redirect('/admin/category');
    }

    public function destroyBook(Book $book, $id)
    {
        //
        $book = Book::where('bookID', $id);
        $book->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus');
    }

    public function destroyCategory(Category $category, $id)
    {
        //
        $category = Category::where('categoryID', $id);
        $category->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus');
    }

    public function destroyUser(User $user, $id)
    {
        //
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus');
    }
}
