<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Barang;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function daftarUser(Request $request)
    {
        // Get the search query from the request
        $search = $request->input('search');
    
        // Query the User model, applying the search if provided
        $users = User::when($search, function ($query, $search) {
                return $query->where('name', 'like', "%{$search}%")
                             ->orWhere('email', 'like', "%{$search}%");
            })
            ->paginate(10); // Change the number as needed for pagination
    
        // Return the view with users and search query
        return view('superAdmin.daftar-user.index', compact('users', 'search'));
    }


    public function editUser(User $user, $id){
        $user = User::where('id', $id)->first();
        return view('superAdmin.daftar-user.edit', compact('user'));
    }


    public function userUpdate(Request $request, $id){
        $user = User::where('id', $id)->first();
        $user->update($request->all());
        return redirect()->back()->with('success', 'user Berhasil di ubah');
    }


    public function destroyUser(User $user, $id){
        $user = User::where('id', $id)->first();
        $user->delete();
        return redirect()->back()->with('success', 'user Berhasil di hapus');
    }

    public function daftarBarangAll(){
        $barang = barang::paginate(10);
        return view('superAdmin.daftar-barang.index', compact('barang'));
    }

    



    
}
