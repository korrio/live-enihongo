<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Users;
use App\Http\Requests;
use Illuminate\Validation\Rule;
use Intervention\Image\ImageManagerStatic as Image;
use Storage;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $objs = users::all();
        $data['objs'] = $objs;
        $data['datahead'] = "รายชื่อในระบบทั้งหมด";
        return view('admin.formuser.user', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['method'] = "post";
        $data['url'] = url('admin/user');
        $data['header'] = "เพิ่มรายชื่อผู้ใช้งาน";
        return view('admin.formuser.index', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $image = $request->file('image');


     if($image == NULL){

      $this->validate($request, [
       'name' => 'required|unique:users|max:255',
       'email' => 'required|email|max:255|unique:users',
       'password' => 'required|min:6|confirmed',
       'position' => 'required'

     ]);
        //
        $package = new Users();
        $package->name = $request['name'];
        $package->first_name = $request['first_name'];
        $package->last_name = $request['last_name'];
        $package->email = $request['email'];
        $package->position = $request['position'];
        $package->address = $request['address'];
        $package->phone = $request['phone'];
        $package->provider = 'email';
        $package->save();
        return redirect(url('admin/user'))->with('success','เพิ่มบัญชีผู้ใช้งาน'.$request['name'].'เสร็จเรียบร้อยแล้ว');


  }else{


    $this->validate($request, [
     'image' => 'required|mimes:jpg,jpeg,png,gif|max:2048',
     'name' => 'required|unique:users|max:255',
     'email' => 'required|email|max:255|unique:users',
     'password' => 'required|min:6|confirmed',
     'position' => 'required'

   ]);


   $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

    $destinationPath = asset('assets/images/avatar');
    $img = Image::make($image->getRealPath());
    $img->resize(300, 300, function ($constraint) {
    $constraint->aspectRatio();
  })->save('assets/images/avatar/'.$input['imagename']);

    $package = new Users();
   $package->avatar = $input['imagename'];
   $package->name = $request['name'];
   $package->first_name = $request['first_name'];
   $package->last_name = $request['last_name'];
   $package->email = $request['email'];
   $package->position = $request['position'];
   $package->address = $request['address'];
   $package->phone = $request['phone'];
   $package->provider = 'email';
   $package->save();

   return redirect(url('admin/user'))->with('success','เพิ่มบัญชีผู้ใช้งาน'.$request['name'].'เสร็จเรียบร้อยแล้ว');

  }
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
        //
        $obj = DB::table('users')
          ->select(
             'users.*'
             )
          ->where('users.id', $id)
          ->first();

        $score = 0;
      if($obj->first_name != NULL){
        $score += 20;
      }
      if($obj->last_name != NULL){
        $score += 20;
      }
      if($obj->address != NULL){
        $score += 20;
      }
      if($obj->position != NULL){
        $score += 20;
      }
      if($obj->phone != NULL){
        $score += 20;
      }

        $data['url'] = url('admin/user/'.$id);
        $data['header'] = "แก้ไขบัญชีผู้ใช้งาน";
        $data['method'] = "put";
        $data['score'] = $score;
        $data['objs'] = $obj;
        return view('admin.formuser.edit', $data);
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
      $image = $request->file('image');


     if($image == NULL){

       $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'position' => 'required',
        ]);

        $package = users::find($id);
        $package->name = $request['name'];
        $package->first_name = $request['first_name'];
        $package->last_name = $request['last_name'];
        $package->email = $request['email'];
        $package->position = $request['position'];
        $package->address = $request['address'];
        $package->phone = $request['phone'];
        $package->save();

      return redirect(url('admin/user/'.$id.'/edit'))->with('success','Edit user successful');

      }else{

        $this->validate($request, [
             'image' => 'required|mimes:jpg,jpeg,png,gif|max:2048',
             'name' => 'required',
             'email' => 'required',
             'position' => 'required',
         ]);

         $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

          $destinationPath = asset('assets/images/avatar');
          $img = Image::make($image->getRealPath());
          $img->resize(300, 300, function ($constraint) {
          $constraint->aspectRatio();
        })->save('assets/images/avatar/'.$input['imagename']);

         $package = users::find($id);
         $package->avatar = $input['imagename'];
         $package->name = $request['name'];
         $package->first_name = $request['first_name'];
         $package->last_name = $request['last_name'];
         $package->email = $request['email'];
         $package->position = $request['position'];
         $package->address = $request['address'];
         $package->phone = $request['phone'];
         $package->save();
         return redirect(url('admin/user/'.$id.'/edit'))->with('success','Edit user successful');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $obj = Users::find($id);
        $obj->delete();
        return redirect(url('admin/user'));
    }
}
