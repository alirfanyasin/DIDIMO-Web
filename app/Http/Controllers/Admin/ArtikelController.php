<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use HasFactory;
use Illuminate\Http\Request;
use illuminate\Support\Str;

class ArtikelController extends Controller
{
    protected $guarded = ['id'];
    // protected $fillable = ['_token', '_method'];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('admin.artikel')->with([
        //     'artikel' => Artikel::all()
        // ]);
        return view(
            'admin.artikel',
            // get isi table as $data
            ["data" => Artikel::all()]
        );
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

        $validatedData = $request->validate([
            'judul' => 'required|string',
            'kategori' => 'required|string',
            'conten' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Ubah jenis dan ukuran sesuai kebutuhan
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $randomString = Str::random(5);
            $name_file = $randomString . "_" . $file->getClientOriginalName();
            $file->storeAs('public/image/', $name_file);
            $validatedData['image'] = $name_file;
        };

        Artikel::create($validatedData);

        return redirect('app/admin/artikel')->with('success', 'New artikel created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // return view('admin.artikel', [
        //     'title' => 'Detail Product',
        //     'data' => Product::find($id)
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Artikel::find($id);

        return view('admin.artikel.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $validatedData = $request->validate([
        //     'judul' => 'required|string',
        //     'kategori' => 'required|string',
        //     'conten' => 'required|string',
        //     'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Ubah jenis dan ukuran sesuai kebutuhan
        // ]);

        // if ($request->hasFile('image')) {
        //     $file = $request->file('image');
        //     $randomString = Str::random(5);
        //     $name_file = $randomString . "_" . $file->getClientOriginalName();
        //     $file->storeAs('public/image/', $name_file);
        //     $validatedData['image'] = $name_file;
        // };

        $data = Artikel::find($id);
        $data->judul = $request->updateJudul;
        $data->kategori = $request->updateKategori;
        $data->image = $request->updateImage;
        $data->conten = $request->updateConten;
        $data->save();
        // $data->update($validatedData);
        // return dd($data);
        return redirect('app/admin/artikel')->with('update', 'Artikel updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        Artikel::destroy($id);

        return redirect('app/admin/artikel')->with('delete', 'Artikel deleted successfully');
    }
}
