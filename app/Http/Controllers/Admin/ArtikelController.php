<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use HasFactory;
use Intervention\Image\Facades\Image;
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
        return view(
            'admin.artikel',
            [
                'data' => Artikel::all()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create_artikel');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'judul' => 'string',
            'description' => 'string',
            'conten' => 'string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $randomString = Str::random(5);
            $name_file = $randomString . "_" . $file->getClientOriginalName();
            $file->storeAs('public/image/', $name_file);
            $validatedData['image'] = $name_file;
        };

        if (strpos($validatedData['conten'], '<img') !== false) {
            $contenWithImages = $this->processImagesInConten($validatedData['conten']);
            $validatedData['conten'] = $contenWithImages;
        }

        Artikel::create($validatedData);

        session()->flash('success', 'New artikel created successfully');
        return redirect('/app/admin/artikel');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.artikel_show', [
            'data' => Artikel::find($id)
        ]);
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
        //     'description' => 'required|string',
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
        $data->description = $request->updateDescription;
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

    public function processImagesInConten($conten)
    {
        $dom = new \DOMDocument();
        $dom->loadHTML($conten);

        // Cari gambar
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $image) {
            $imageSrc = $image->getAttribute('src');

            if (strpos($imageSrc, 'data:image') !== false) {
                // Decode gambar
                list($type, $data) = explode(';', $imageSrc);
                list(, $data) = explode(',', $data);
                $data = base64_decode($data);

                $randomString = Str::random(5);
                $imageName = $randomString . '_' . time() . '.png';
                $imagePath = storage_path('app/public/image/content/' . $imageName);
                file_put_contents($imagePath, $data);

                // Ganti "src" dengan URL gambar yang disimpan
                $image->setAttribute('src', asset('storage/image/content/' . $imageName));
            }
        }

        // Uncode gambar ke HTML string
        $contenWithImages = $dom->saveHTML();

        return $contenWithImages;
    }
}

    // public function storeImage($image)
    // {
    //     $randomString = Str::random(5);
    //     $imageName = $randomString . '_' . time() . '.png';
    //     $imagePath = storage_path('app/public/image/content/' . $imageName);

    //     // Resize and store the image
    //     $img = Image::make($image);
    //     $img->resize(300, 200); // Atur ukuran yang diinginkan
    //     $img->save($imagePath);

    //     return $imageName;
    // }
