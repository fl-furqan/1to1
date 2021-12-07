<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FavoriteTime;
use Illuminate\Support\Facades\DB;

class FavoriteTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $favorite_times = FavoriteTime::query()->get();
        return view('dashboard.favorite-times.index', ['favorite_times' => $favorite_times]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.favorite-times.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rule = [
            'title_ar' => 'required|string',
            'title_en' => 'required|string',
        ];

        $messages = [
            'title_ar.required' => 'عنوان التوقيت باللغة العربية مطلوب',
            'title_ar.string' => 'يجب التأكد من إدخال عنوان التوقيت باللغة العربية بشكل صحيح',
            'title_en.required' => 'عنوان التوقيت باللغة الانجليزية مطلوب',
            'title_en.string' => 'يجب التأكد من إدخال عنوان التوقيت باللغة الانجليزية بشكل صحيح',
        ];

        $favorite_time = $this->validate($request, $rule, $messages);

        FavoriteTime::create([
            'title' => ['ar' => $request->title_ar, 'en' => $request->title_en],
        ]);

        session()->flash('success', 'تمت الاضافة بنجاح');

        return redirect(route('dashboard.favorite-times.index'));
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
    public function edit(Admin $admin)
    {
        return view('admins.admins.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $rule = [
            'name'     => 'required|string',
            'email'    => 'required|email|unique:admins,email,' . $admin->id,
            'password' => 'sometimes|nullable|min:6',
        ];

        $messages = [
            'name.required'  => 'يجب التأكد من إدخال الأسم بالكامل',
            'name.string'    => 'يجب التأكد من إدخال الأسم بالكامل بشكل صحيح',
            'email.required' => 'يجب التأكد من إدخال البريد الإلكتروني',
            'email.email'    => 'يجب التأكد من إدخال البريد الإلكتروني',
            'email.unique'   => 'البريد الإلكتروني المدخل مستخدم مسبقا',
            'password.required' => 'يجب التأكد من إدخال كلمة المرور',
            'password.min'      => 'يجب أن تكون كلمة المرور 6 حروف على الأقل ',
        ];

        $adminData = $this->validate($request, $rule, $messages);

        if ($request->password){
            $adminData['password'] = bcrypt($request->password);
            $admin->update($adminData);
        }else{
            $admin->update([
                'name'  => $adminData['name'],
                'email' => $adminData['email'],
            ]);
        }

        session()->flash('success', 'تم تحديث البيانات بنجاح');

        return redirect(route('admins.admins.edit', $admin->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        Admin::find($id)->delete();
        session()->flash('success', trans('تم الحذف بنجاح'));
        return redirect(route('admins.admins.index'));
    }

    public function deleteAll() {
        if (is_array(request('item'))) {
            Admin::destroy(request('item'));
        } else {
            Admin::find(request('item'))->delete();
        }
        session()->flash('success', 'تم الحذف بنجاح');
        return redirect(route('admins.admins.index'));
    }

    public function disableTeachersLogin(Request $request)
    {
        DB::beginTransaction();
        try {
            Teacher::query()->update(['status' => $request->status]);
            DB::commit();
        }catch (Throwable $e){
            DB::rollBack();
            return response()->json(['status' => 'Expectation Failed'], 417);
        }
        return response()->json(['status' => 'success'], 200);
    }
}
