<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    function blog2()
    {
        $blog2 = DB::table('blogs')->paginate(10);  
        return view('blog2', compact('blog2'));
    }

    function about2()
    {
        $name = 'Pornnutcha Kokaew';
        $data = '6 กรกฎาคม 2026';
        return view('about2', compact('name', 'data'));
    }
    function form()
    {
        return view('form');
    }

    function insert(Request $request)
    {
        $request->validate([
            'title' => 'required|max:50',
            'content' => 'required',
        ],[
            'title.required'=> 'กรุณาระบุชื่อบทความ',
            'title.max'=> 'ชื่อบทความต้องไม่เกิน 50 ตัวอักษร',
            'content.required' => 'กรุณาระบุเนื้อหาบทความ',
        ]); 
        Blog::insert([
            'title' => $request->title,
            'content' => $request->content,
            'status' => $request->status ?? 1,
        ]);
        return redirect()->route('author.blog');
    }

    function delete($id)
    {
        $blog = Blog::find($id);
        abort_if(!$blog, 404);
        $blog->delete();
        return redirect()->route('author.blog');
    }

     function claim(    Request $request){
        $request->validate([
            'serial_number' => 'required|max:50',
            'email' => 'required|email',
            'problem' => 'required',
            'priority' => 'required',
        ],[
            'serial_number.required'=> 'กรุณาระบุหมายเลขซีเรียล',
            'serial_number.max'=> 'หมายเลขซีเรียลต้องไม่เกิน 50 ตัวอักษร',
            'email.required' => 'กรุณาระบุอีเมล',
            'email.email' => 'กรุณาระบุอีเมลให้ถูกต้อง',
            'problem.required' => 'กรุณาระบุอาการชำรุด',
            'priority.required' => 'กรุณาระดับความเร่งด่วน',
        ]); 
        DB::table('claim')->insert([
            'serial_number' => $request->serial_number,
            'email' => $request->email,
            'problem' => $request->problem,
            'priority' => $request->priority,
        ]);
        return redirect()->route('author.create');
    }
    function change($id){
    $blog = Blog::find($id);
    abort_if(!$blog, 404);
    $blog->status = $blog->status == 0 ? 1 : 0;
    $blog->save();
    return redirect()->route('author.blog');
    }
    function edit($id){
    $blog = Blog::find($id);
    abort_if(!$blog, 404);
    return view('edit', compact('blog'));
    }
    function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required|max:50',
            'content' => 'required',
        ],[
            'title.required'=> 'กรุณาระบุชื่อบทความ',
            'title.max'=> 'ชื่อบทความต้องไม่เกิน 50 ตัวอักษร',
            'content.required' => 'กรุณาระบุเนื้อหาบทความ',
        ]); 
        $blog = Blog::find($id);
        abort_if(!$blog, 404);
        $blog->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return redirect()->route('author.blog');
        
    }

};
