<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pendaftaran::all()->where('user_id', Auth::user()->id)->first();
        // dd($data);
        return view('pages.siswa.pendaftaran.index', compact('data'));
        
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.siswa.pendaftaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'user_id' => 'required',
            'nama_siswa' => 'required',
            'nisn' => 'required|unique:pendaftaran|numeric|digits:10',
            'nik' => 'required|unique:pendaftaran|numeric|digits:16',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'foto_akte' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'agama' => 'required',
            'alamat' => 'required',
            'nohp' => 'required|numeric',
            'nama_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'nohp_ayah' => 'required|numeric',
            'nama_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'nohp_ibu' => 'required|numeric',
            'asal_sekolah' => 'required',
            'foto_ijazah' => 'required|mimes:pdf',
        ]);

        $input = $request->all();
     
        if ($foto = $request->file('foto')){
            $destinationPath = 'img/foto_siswa/';
            $profileImage = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileImage);
            $input['foto'] = "$profileImage";
        }
        if ($foto = $request->file('foto_akte')){
            $destinationPath = 'img/foto_akte/';
            $profileImage = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileImage);
            $input['foto_akte'] = "$profileImage";
        }
        if ($foto = $request->file('foto_ijazah')){
            $destinationPath = 'img/foto_ijazah/';
            $profileImage = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileImage);
            $input['foto_ijazah'] = "$profileImage";
        }

        Pendaftaran::create($input);

        return redirect()->route('pendaftaran.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendaftaran $pendaftaran)
    {
        return view('pages.siswa.pendaftaran.edit',compact('pendaftaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        //
        $request->validate([
            'user_id' => 'required',
            'nama_siswa' => 'required',
            'nisn' => 'required|numeric|digits:10',
            'nik' => 'required|numeric|digits:16',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            // 'foto' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            // 'foto_akte' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'agama' => 'required',
            'alamat' => 'required',
            'nohp' => 'required|numeric',
            'nama_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'nohp_ayah' => 'required|numeric',
            'nama_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'nohp_ibu' => 'required|numeric',
            'asal_sekolah' => 'required',
            // 'foto_ijazah' => 'required|mimes:pdf',
        ]);

        $input = $request->all();
     
        if ($foto = $request->file('foto')){
            $destinationPath = 'img/foto_siswa/';
            $profileImage = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileImage);
            $input['foto'] = "$profileImage";
        } else {
            unset($input['foto']);
        }
        if ($foto = $request->file('foto_akte')){
            $destinationPath = 'img/foto_akte/';
            $profileImage = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileImage);
            $input['foto_akte'] = "$profileImage";
        } else {
            unset($input['foto_akte']);
        }
        if ($foto = $request->file('foto_ijazah')){
            $destinationPath = 'img/foto_ijazah/';
            $profileImage = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileImage);
            $input['foto_ijazah'] = "$profileImage";
        } else {
            unset($input['foto_ijazah']);
        }

        $pendaftaran->update($input);

        return redirect()->route('pendaftaran.index')
                        ->with('success','Product created successfully.');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function view_dashboard()
    {
        $data = Pendaftaran::all()->where('user_id', Auth::user()->id)->first();
        // dd($data);
        return view('pages.siswa.dashboard', compact('data'));
    }

    public function view_data_formulir()
    {
        $data = Pendaftaran::latest()->paginate(5);

        return view('pages.admin.pendaftaran.index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
