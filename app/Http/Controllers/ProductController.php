<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::with('category')->get();
        return response()->view('cms.products.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Category::where('active', true)->get();
        return response()->view('cms.products.create', ['data' => $data]);
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
            'name' => 'required|string|min:3|max:50',
            'description' => 'nullable|string|min:3|max:50',
            'price' => 'required|numeric',
            'active' => 'required|in:true,false',
            'image' => 'nullable|image|mimes:jpg,png|max:2048',
            'category_id' => 'required|integer|exists:categories,id'
        ]);
        if (!$validator->fails()) {
            $product = new Product();
            $product->name = $request->get('name');
            $product->description = $request->get('description');
            $product->price = $request->get('price');
            $product->active = $request->get('active');
            $product->category_id = $request->get('category_id');
            if($request->hasFile('image')){
               $image= $request->file('image');
               $imageName = time().'_'.$product->name.'.'.$image->getClientOriginalExtension();
               $request->file('image')->storePubliclyAs('products',$imageName,['disk'=>'public']);
               $product->image = $imageName;
            }
            $is_saved = $product->save();
            return response()->json(
                [
                    'message' => $is_saved ? 'تم إنشاء المنتج بنجاح' : 'فشل في إنشاء المنتج'
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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $data = Category::where('active', true)->get();
        return response()->view('cms.products.edit', [
            'product' => $product,
            'data' => $data

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validator = Validator($request->all(), [
            'name' => 'required|string|min:3|max:50',
            'description' => 'nullable|string|min:3|max:50',
            'price' => 'required|numeric',
            'active' => 'required|in:true,false',
            'image' => 'nullable|image|mimes:jpg,png|max:2048',
            'category_id' => 'required|integer|exists:categories,id'
        ]);
        if (!$validator->fails()) {
            $product->name = $request->get('name');
            $product->description = $request->get('description');
            $product->price = $request->get('price');
            $product->active = $request->get('active');
            $product->category_id = $request->get('category_id');
            if ($request->hasFile('image')) {
                Storage::disk('public')->delete("products/$product->image");
                $image = $request->file('image');
                $imageName = time() . '_' . $product->name . '.' . $image->getClientOriginalExtension();
                $request->file('image')->storePubliclyAs('products', $imageName, ['disk' => 'public']);
                $product->image = $imageName;
            }
            $is_saved = $product->save();
            return response()->json(
                [
                    'message' => $is_saved ? 'تم تعديل المنتج بنجاح' : 'فشل في تعديل المنتج'
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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Storage::disk('public')->delete("products/$product->image");
        $is_deleted = $product->delete();
        return response()->json(
            [
                'icon' => $is_deleted ? 'success' : 'danger',
                'title' => $is_deleted ? 'تم حذف المنتج بنجاح' : 'فشل في تعديل المنتج',
            ],
            $is_deleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST
        );
    }
}
