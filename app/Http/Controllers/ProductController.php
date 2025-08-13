<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function JudulProduct(Request $request)
    {
        // Ambil kategori berdasarkan ID atau slug
        $categoryId = $request->query('category_id'); // Misalnya parameter ini dikirim lewat URL
        $category = null;

        if ($categoryId) {
            $category = Category::find($categoryId);
            $products = Product::where('category_id', $categoryId)->get();
        } else {
            $products = Product::all();
        }

        return view('products', [
            'products' => $products,
            'category' => $category, // Dikirim ke view
        ]);
    }
    public function filterProducts(Request $request)
    {
        // Ambil kategori yang dipilih dari query string
        $selectedCategories = $request->input('category', []);

        // Query produk
        $products = Product::query();

        // Jika kategori dipilih, tambahkan filter berdasarkan ID kategori
        if (!empty($selectedCategories)) {
            $products->whereHas('category', function ($query) use ($selectedCategories) {
                $query->whereIn('id', $selectedCategories); // Ganti 'name' dengan 'id'
            });
        }

        // Ambil data semua kategori
        $categories = Category::all();

        // Kirim data ke view
        return view('product', [
            'products' => $products->get(),
            'categories' => $categories,
            'selectedCategories' => $selectedCategories,
        ]);
    }

    public function showByCategory($category_id = null)
    {
        $categories = Category::all(); // Ambil semua kategori

        if ($category_id) {
            $category = Category::find($category_id);

            if (!$category) {
                abort(404); // Jika kategori tidak ditemukan, tampilkan halaman 404
            }

            $products = Product::where('category_id', $category->id)->get();
        } else {
            // Jika tidak ada category_id, tampilkan semua produk
            $category = null;
            $products = Product::all();
        }

        return view('product', [
            'category' => $category,
            'products' => $products,
            'categories' => $categories, // Kirim kategori ke view
        ]);
    }

    public function lihat($category_id)
    {
        // Ambil produk berdasarkan id_category
        $products = Product::where('category_id', $category_id)->get();

        // Ambil semua kategori untuk filter
        $categories = Category::all();

        // Kirim data kategori dan produk ke view
        return view('product', compact('category_id', 'products', 'categories'));
    }
    public function search(Request $request)
    {
        $query = strtolower($request->input('q'));

        $products = Product::whereRaw('LOWER(name) LIKE ?', ["$query%"])
            ->orWhereRaw('LOWER(deskripsi) LIKE ?', ["%$query%"])
            ->get();

        // Ambil semua kategori
        $categories = Category::all();

        return view('product', compact('products', 'categories'));
    }

    public function ProductOverview()
    {
        // Ambil semua produk untuk bagian "Obat Promo Bulan Ini"
        $allProducts = Product::with('category')->inRandomOrder()->take(4)->get(); // Ambil 4 produk acak

        // Ambil produk berdasarkan kategori "Sakit Kepala"
        $headacheProducts = Product::whereHas('category', function ($query) {
            $query->where('name', 'Batuk & Flu');
        })->take(4)->get(); // Batasi hanya 4 produk

        // Ambil semua kategori
        $categories = Category::all();

        // Kirim data ke view
        return view('index', compact('allProducts', 'headacheProducts', 'categories'));
    }

    public function tampilkan($id)
    {
        // Ambil data produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Kirim data produk ke view
        return view('overview', compact('product'));
    }
    public function showProductsForUser()
    {
        $categories = Category::all();

        $products = Product::with('category')->get();

        // Pastikan view mengarah ke file product.blade.php
        return view('product', compact('categories', 'products'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category')->orderBy('id', 'desc')->get();

        return response()->json($products);
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
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'harga' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required',
            'tanggal_obat_dibuat' => 'required',
            'tanggal_obat_expired' => 'required',
            'category_id' => 'required',
        ]);

        $productData = [
            'name' => $validated['name'],
            'harga' => $validated['harga'],
            'stok' => $validated['stok'],
            'deskripsi' => $validated['deskripsi'],
            'tanggal_obat_dibuat' => $validated['tanggal_obat_dibuat'],
            'tanggal_obat_expired' => $validated['tanggal_obat_expired'],
            'category_id' => $validated['category_id'],
        ];

        if ($request->hasFile('gambar')) {

            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Pindahkan file ke folder public/assets/uploaded
            $image->move(public_path('assets/uploaded'), $imageName);
            $productData['gambar'] = $imageName;
        }


        try {
            Product::create($productData);
            return response()->json([
                'success' => true,
                'message' => 'Produk berhasil ditambahkan!'
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
        $product = Product::find($id);
        $category = Category::all();
        return response()->json([
            "success" => true,
            "data" => $product,
            "categories" => $category
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
            'id' => 'required',
            'name' => 'required',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'harga' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required',
            'tanggal_obat_dibuat' => 'required',
            'tanggal_obat_expired' => 'required',
            'category_id' => 'required',
        ]);


        // Cari produk berdasarkan ID
        $product = Product::findOrFail($request->id);

        $productData = [
            'name' => $validated['name'],
            'harga' => $validated['harga'],
            'stok' => $validated['stok'],
            'deskripsi' => $validated['deskripsi'],
            'tanggal_obat_dibuat' => $validated['tanggal_obat_dibuat'],
            'tanggal_obat_expired' => $validated['tanggal_obat_expired'],
            'category_id' => $validated['category_id'],
        ];


        // Jika ada gambar yang diunggah
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($product->gambar) {
                $oldImagePath = public_path('assets/uploaded/' . $product->gambar);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath); // Menghapus file gambar lama
                }
            }

            // Upload gambar baru
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Pindahkan file ke folder public/assets/uploaded
            $image->move(public_path('assets/uploaded'), $imageName);
            $productData['gambar'] = $imageName; // Update field gambar
        }

        // Simpan perubahan
        try {
            // Update produk di database
            $product->update($productData);

            return response()->json([
                'success' => true,
                'message' => 'Produk berhasil diperbarui!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat memperbarui produk!'
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {

        try {
            Product::destroy($request->id);
            return response()->json([
                'success' => true,
                'message' => 'Produk berhasil dihapus!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat menghapus produk!'
            ], 500);
        }
    }
}
