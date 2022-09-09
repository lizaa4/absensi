<?php  
  
namespace App\Http\Controllers;  
  
use App\Models\Absensi;  
use Illuminate\Http\Request;  
use Illuminate\Support\Facades\Storage;  
  
class AbsensiController extends Controller  
{      
    /**  
     * index  
     *  
     * @return void  
     */  
    public function index()  
    {  
        //get posts= mengakses model(memanipulasi data update, delete, tambah, lihat)  
        $absensi = Absensi::latest()->paginate(5);  
        //render view with posts  
        return view('absensi.index', compact('absensi'));   
    }  
      
    /**  
     * create  
     *  
     * @return void  
     */  
    public function create()  
    {  
        return view('absensi.create');  
    }  
  
    /**  
     * store  
     *  
     * @param Request $request  
     * @return void  
     */  
    public function store(Request $request)  
    {  
        //validate form  
        $this->validate($request, [  
            'id'     => 'required|max:2048',  
            'title'     => 'required|min:5',  
            'content'   => 'required|min:10'  
        ]);  
  
        //upload image  
        $image = $request->file('image');  
        $image->storeAs('public/absensi', $image->hashName());  
  
        //create post  
        Absensi::create([  
            'image'     => $image->hashName(),  
            'title'     => $request->title,  
            'content'   => $request->content  
        ]);  
  
        //redirect to index  
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);  
    }  
      
    /**  
     * edit  
     *  
     * @param  mixed $post  
     * @return void  
     */  
    public function edit(Absensi $absensi)  
    {  
        return view('absensi.edit', compact('absensi'));  
    }  
      
    /**  
     * update  
     *  
     * @param  mixed $request  
     * @param  mixed $post  
     * @return void  
     */  
    public function update(Request $request, Absensi $absensi)  
    {  
        //dd($request->file('image')); 
        //validate form  
        $this->validate($request, [  
            'image'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',  
            'title'     => 'required|min:5',  
            'content'   => 'required|min:10'  
        ]);  
  
        //check if image is uploaded  
        if ($request->hasFile('image')) {  
  
            //upload new image  
            $image = $request->file('image');  
            $image->storeAs('public/posts', $image->hashName());  
  
            //del ete old image  
            Storage::delete('public/posts/'.$absensi->image);  
  
            //update post with new image  
            $absensi->update([  
                'image'     => $image->hashName(),  
                'title'     => $request->title,  
                'content'   => $request->content  
            ]);  
  
        } else {  
  
            //update post without image  
            $absensi->update([  
                'title'     => $request->title,  
                'content'   => $request->content  
            ]);  
        }  
  
        //redirect to index  
        return redirect()->route('absensi.index')->with(['success' => 'Data Berhasil Diubah!']);  
    }  
      
    /**  
     * destroy  
     *  
     * @param  mixed $post  
     * @return void  
     */  
    public function destroy(Absensi $absensi)  
    {  
        //delete image  
        Storage::delete('public/absensi/'. $absensi->image);  
  
        //delete post  
        $absensi->delete();  
  
        //redirect to index  
        return redirect()->route('absensi.index')->with(['success' => 'Data Berhasil Dihapus!']);  
    }
    }