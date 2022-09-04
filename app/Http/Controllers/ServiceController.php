<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Service::all() ;
        return response()->view('cms.services.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cms.services.create');
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
            'email' => 'required|email|string|unique:services,email',
            'password' => 'required|string|min:6|max:15',
            'phone' => 'required|numeric|digits:10',
            'address' => 'required|string|min:3',
        ]);
        if (!$validator->fails()) {
            $service = new Service();
            $service->name = $request->get('name');
            $service->email = $request->get('email');
            $service->password = $request->get('password');
            $service->phone = $request->get('phone');
            $service->address = $request->get('address');
            $is_saved = $service->save();
            return response()->json(
                [
                    'message' => $is_saved ? 'تم إنشاء مقدم الخدمة بنجاح' : 'فشل في إنشاء مقدم الخدمة '
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
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return response()->view('cms.services.edit', ['service' => $service]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $validator = Validator($request->all(), [
            'name' => 'required|string|min:3|max:40',
            'email' => 'required|email|string|unique:services,email',
            'phone' => 'required|numeric|digits:10',
            'address' => 'required|string|min:3',
        ]);
        if (!$validator->fails()) {
            $service->name = $request->get('name');
            $service->email = $request->get('email');
            $service->phone = $request->get('phone');
            $service->address = $request->get('address');
            $is_saved = $service->save();
            return response()->json(
                [
                    'message' => $is_saved ? 'تم تعديل مقدم الخدمة بنجاح' : 'فشل في تعديل مقدم الخدمة '
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
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $is_deleted = $service->delete();
        return response()->json(
            [
                'icon' => $is_deleted ? 'success' : 'danger',
                'title' => $is_deleted ? 'تم حذف مقدم الخدمة بنجاح' : 'فشل في حذف مقدم الخدمة',
            ],
            $is_deleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST
        );
    }
}
