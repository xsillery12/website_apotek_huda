<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();

        return response()->json([
            'succes' => true,
            'data' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $categoryData = [
            'name' => $validated['name']
        ];

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Pindahkan file ke folder public/assets/uploaded
            $image->move(public_path('assets/uploaded'), $imageName);
            $categoryData['image'] = $imageName;
        }


        try {
            Category::create($categoryData);
            return response()->json([
                'success' => true,
                'message' => 'Kategori berhasil ditambahkan!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan!'
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::find($id);
        return response()->json([
            "success" => true,
            "data" => $category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $category = Category::findOrFail($request->id);

        $categoryData = [
            'name' => $validated['name']
        ];

        // Jika ada gambar yang diunggah
        if ($request->hasFile('image')) {
            // Hapus image lama jika ada
            if ($category->image) {
                $oldImagePath = public_path('assets/uploaded/' . $category->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath); // Menghapus file image lama
                }
            }

            // Upload image baru
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Pindahkan file ke folder public/assets/uploaded
            $image->move(public_path('assets/uploaded'), $imageName);
            $categoryData['image'] = $imageName; // Update field image
        }

        try {
            // Update kategori di database
            $category->update($categoryData);

            return response()->json([
                'success' => true,
                'message' => 'Kategori berhasil diperbarui!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat memperbarui Kategori!'
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try {
            Category::destroy($request->id);
            return response()->json([
                'success' => true,
                'message' => 'Kategori berhasil dihapus!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat menghapus Kategori!'
            ], 500);
        }
    }
}
