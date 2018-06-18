<?php

namespace App\Http\Controllers;

use App\Http\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sort = request('sort','asc');
        $categories = Category::orderBy('name',$sort);        
        $str = $request->input('searchStr');
        if(!empty($str)){
            $categories->Where('name','LIKE','%'.$str.'%')
            ->orWhere('description','LIKE','%'.$str.'%')->get();
        }
        $categories=$categories->paginate(5);
        return view('categories.index', ['categories' => $categories,'sort'=>$sort]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|min:2|max:255', 
            'description' => 'required',            
        ]);
        Category::create($request->all());   
        return redirect()->route('categories.index')->with('success','Category created successfully');        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Http\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('categories.detail',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories.edit',compact('category')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Http\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request,[
            'name' => 'required|string|min:2|max:255', 
            'description' => 'required',            
        ]);
        $category->update($request->all());   
        return redirect()->route('categories.index')->with('success','Category updated successfully');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Http\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();   
        return redirect()->route('categories.index')->with('success','Category deleted successfully');
    }
}
