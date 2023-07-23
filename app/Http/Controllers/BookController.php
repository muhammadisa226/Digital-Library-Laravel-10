<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\UserBooksExport;
use Maatwebsite\Excel\Facades\Excel;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::where('user_id', auth()->user()->id);
        if(request('category')){
            $books->where('category_id', 'like', '%' . request('category') . '%');
        }
        return view('dashboard.user.books.index',[
            "title" => 'My Books',
            "categories" => Category::All(),
            "books" => $books->get()->sortBy('title'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.user.books.create',[
            "title" => 'My Books',
            "categories" => Category::All()->sortBy('name')

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            "title" => "required|max:255",
            "amount" => "required|numeric",
            "category_id" => "required",
            "cover" => 'required|image|file|max:2048',
            "filebook" => 'required|mimes:pdf|max:20480',
            "description" => "required"
        ]);

        if($request->file('cover') && $request->file('filebook')){
            $validatedData['cover'] = $request->file('cover')->store('cover-images');
            $validatedData['filebook'] = $request->file('filebook')->store('filebook');
        }
        $validatedData['user_id'] = auth()->user()->id;
        Book::create($validatedData);

        return redirect(route('user.books.index'))->with('success', 'Book has ben added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
       return view('dashboard.user.books.show',[
            'book' => $book,
            'title' => 'My Books'
       ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('dashboard.user.books.edit',[
            "title" => 'My Books',
            "book" => $book,
            "categories" => Category::All()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $rules = [
            "title" => "required|max:255",
            "amount" => "required|numeric",
            "category_id" => "required",
            "cover" => 'image|file|max:2048',
            "filebook" => 'mimes:pdf|max:20480',
            "description" => "required"
        ];
        $validatedData = $request->validate($rules);
        if($request->file('cover') && $request->file('filebook')){
            if($request->oldcover && $request->oldfilebook){
                Storage::delete($request->oldcover);
                Storage::delete($request->oldfilebook);
            }
            $validatedData['cover'] = $request->file('cover')->store('cover-images');
            $validatedData['filebook'] = $request->file('filebook')->store('filebook');
        }
        $validatedData['user_id'] = auth()->user()->id;
        Book::where('id', $book->id)->update($validatedData);
        return redirect(route('user.books.index'))->with('success', 'Book has ben updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        if($book->cover && $book->filebook){
            Storage::delete($book->cover);
            Storage::delete($book->filebook);
        }
        Book::destroy($book->id);
        return redirect(route('user.books.index'))->with('success', 'Book has ben Deleted');
    }
    public function exportpdf(){
        $category = Category::All();
        $books = Book::where('user_id', auth()->user()->id)->get()->sortBy('title');
        view()->share([
            'books' => $books ,
            'category' => $category,
        ]);
        $pdf = PDF::Loadview('dashboard.user.books.exportpdf');
        return $pdf->download('My Databooks.pdf');
    }
    public function exportexcel(){
        return Excel::download(new UserBooksExport, 'DataBooks.xlsx');
    }
}
