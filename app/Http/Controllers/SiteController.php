<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sites = Site::all();

        return view('admin.sites.index', compact('sites'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sites.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'link' => 'required|max:255',
        ]);


        $extension = $request->file('photo')->getClientOriginalExtension();

        $newname = str_replace(' ', '-', $request->name) . ".$extension";

        $request->file('photo')->storeAs('sites', $newname);

        $image_path = "/storage/sites/$newname";

        $site = Site::create([
            'name' => $request->name,
            'link' => $request->link,
            'image' => $image_path,
        ]);

        if ($site) {
            Session::flash('status', 'success');
            Session::flash('message', 'Berhasil Membuat Situs Baru');

            return redirect()->route('sites.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Site $site)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Site $site)
    {
        return view('admin.sites.edit', compact('site'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Site $site)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'link' => 'required|string|max:255',
        ]);

        if ($request->file('photo')) {
            $storage_path = substr($site->image, 9);
            Storage::delete($storage_path);

            $extension = $request->file('photo')->getClientOriginalExtension();

            $newname = str_replace(' ', '-', $request->name) . ".$extension";

            $request->file('photo')->storeAs('sites', $newname);

            $image_path = "/storage/sites/$newname";
            $site->image = $image_path;
        }

        $site->name = $request->name;
        $site->link = $request->link;
        $site->save();

        Session::flash('status', 'success');
        Session::flash('message', 'Berhasil Mengupdate Situs');

        return redirect()->route('sites.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Site $site)
    {
        $storage_path = substr($site->image, 9);
        Storage::delete($storage_path);

        $site->delete();

        Session::flash('status', 'warning');
        Session::flash('message', 'Berhasil Menghapus Situs');

        return redirect()->route('sites.index');
    }
}
