<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recipes = Recipe::with('user')->orderBy('id', 'desc')->get();

        return response()->json($recipes);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Ambil data resep berdasarkan ID, dengan relasi user
        $recipe = Recipe::with('user')->findOrFail($id);

        // Kembalikan data resep dalam format JSON, bersama dengan data user dan gambar profil
        return response()->json([
            "success" => true,
            "data" => [
                'id' => $recipe->id,
                'name' => $recipe->name,  // Nama resep
                'gambar' => $recipe->gambar,  // Gambar resep
                'tanggal' => $recipe->tanggal,  // Tanggal resep
                'keterangan' => $recipe->keterangan,  // Keterangan resep
                'user' => [
                    'name' => $recipe->user->name,  // Nama pengguna
                    'profile_image' => $recipe->user->image,  // Gambar profil pengguna
                ]
            ]
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
    public function update(Request $request, string $id)
    {
        //
    }

    public function uploadResep(Request $request)
    {
        $request->validate([
            'gambar' => 'required',
            'keterangan' => 'required',
        ]);

        $file = $request->file('gambar');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        // $file->storeAs('uploads', $filename, 'public');
        $file->move(public_path('assets/uploaded'), $filename);
        $userLogin = Auth::user();


        $recipe = new Recipe();
        $recipe->user_id = $userLogin->id; // Diisi id user yang login, karena agar tahu siapa yg bikin recipe
        $recipe->gambar = $filename;
        $recipe->keterangan = $request->input('keterangan');
        $recipe->tanggal = now()->format('Y-m-d'); // Menyimpan tanggal dengan format yyyy-mm-dd
        $recipe->save();

        return redirect()->back()->with('ResepSuccess', 'Upload successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try {
            Recipe::destroy($request->id);
            return response()->json([
                'success' => true,
                'message' => 'Resep berhasil dihapus!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat menghapus resep!'
            ], 500);
        }
    }
}
