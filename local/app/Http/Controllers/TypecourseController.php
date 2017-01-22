<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\typecourses;
use App\Http\Requests;

class TypecourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objs = typecourses::all();
        $data['objs'] = $objs;
        $data['datahead'] = "รายชื่อประเภทคอร์ส";
        return view('admin.typecourse.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['method'] = "post";
        $data['url'] = url('admin/typecourse');
        $data['header'] = "เพิ่มประเภทคอร์ส";
        return view('admin.typecourse.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $package = new typecourses();
       $package->type_name = $request['name'];
       $package->save();
       return redirect(url('admin/typecourse'))->with('success','เพิ่ม'.$request['name'].' เสร็จเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = typecourses::find($id);    
        $data['url'] = url('admin/typecourse/'.$id);
        $data['header'] = "แก้ไขประเภทคอร์ส";
        $data['method'] = "put";
        $data['objs'] = $obj;
        return view('admin.typecourse.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $package = typecourses::find($id);
         $package->name = $request['name'];
         $package->save();
         return redirect(url('admin/typecourse'))->with('success','Edit successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = typecourses::find($id);
        $obj->delete();
        return redirect(url('admin/typecourse'))->with('delete','Delete successful');
    }
}
