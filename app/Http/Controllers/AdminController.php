<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Admin::where('id', '!=', auth('admin')->id())->get();
        return response()->view('cms.admins.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $data = Role::where('guard_name', 'admin')->get();, ['data' => $data]
        return response()->view('cms.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all(), [
            'name' => 'required|string|min:3|max:40',
            'email' => 'required|email|string|unique:admins,email',
            'password'=> 'required|string|min:6|max:15'
        ]);
        if (!$validator->fails()) {
            $admin = new Admin();
            $admin->name = $request->get('name');
            $admin->email = $request->get('email');
            $admin->password = $request->get('password');
            $is_saved = $admin->save();
            return response()->json(
                [
                    'message' => $is_saved ? 'تم إنشاء المسؤول بنجاح' : 'فشل في إنشاء المنتج '
                ],
                $is_saved ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST

            );
        } else {
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        return response()->view('cms.admins.edit', ['admin' => $admin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $validator = Validator($request->all(), [
            'name' => 'required|string|min:3|max:40',
            'email' => 'required|email|string|unique:admins,email',
        ]);
        if (!$validator->fails()) {
            $admin->name = $request->get('name');
            $admin->email = $request->get('email');
            $is_saved = $admin->save();
            return response()->json(
                [
                    'message' => $is_saved ? 'تم تعديل المسؤول بنجاح' : 'فشل في تعديل المسؤول'
                ],
                $is_saved ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST

            );
        } else {
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        $is_deleted = $admin->delete();
        return response()->json(
            [
                'icon' => $is_deleted ? 'success' : 'danger',
                'title' => $is_deleted ? 'تم حذف المسؤول بنجاح' : 'فشل في حذف المنتج',
            ],
            $is_deleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST
        );
    }
}
