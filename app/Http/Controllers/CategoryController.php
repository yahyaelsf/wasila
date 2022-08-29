<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data=Category::all();
        return view('cms.categories.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validator =Validator ($request->all(),[
            'name' => 'required|string|min:3|max:40',
            'description' =>'nullable|string|min:3|max:50',
            'active' =>'required|boolean'
        ]);
        if(!$validator->fails()){
            $category = new Category();
            $category->name = $request->get('name');
            $category->description = $request->get('description');
            $category->active = $request->has('active_status');
            $is_saved=$category->save();
            return response()->json(
                [
                    'message' => $is_saved ? 'تم حفظ التصنيف بنجاح' : 'فشل في إنشاء التصنيف'
                ],
                $is_saved ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST
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
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('cms.categories.edit' , ['category' => $category]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $validator = Validator($request->all(), [
            'name' => 'required|string|min:3|max:40',
            'description' => 'nullable|string|min:3|max:50',
            'active' => 'required|boolean'
        ]);
        if (!$validator->fails()) {
            $category->name = $request->get('name');
            $category->description = $request->get('description');
            $category->active = $request->get('active');
            $is_saved = $category->save();
            return response()->json(
                [
                    'message' => $is_saved ? 'تم تعديل التصنيف بنجاح' : 'فشل في تعديل التصنيف'
                ],
                $is_saved ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST
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
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Category $category)
    {
        $is_deleted = $category->delete();
        return response()->json(
            [
                'icon' => $is_deleted ? 'success' : 'danger',
                'title' => $is_deleted ? 'تم الحذف بنجاح' : 'فشل في عملية الحذف',
            ],
            $is_deleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST
        );
    }
}
