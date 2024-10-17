@extends('layout-superAdmin.admin-section.master')
@section('title', 'Edit User')
@section('nav-title', 'Edit User')
@section('content')
<div class="p-6">
    <form action="{{ route('userUpdate', $user->id) }}" method="POST" enctype="multipart/form-data" class="flex flex-col flex-wrap w-full gap-2">
        @csrf
        @method('PUT')

        <!-- Input Nama User -->
        <div class="mb-5 w-2/5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama User</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Contoh: John Doe" required />
        </div>

        <!-- Input Email User -->
        <div class="mb-5 w-2/5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email User</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="johndoe@example.com" required />
        </div>

        <!-- Input Foto Profil User -->
        <div class="mb-5 w-2/5">
            <label for="profile_picture" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto Profil User</label>
            <input type="file" name="profile_picture" accept="image/*" id="profilePictureInput" 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                onchange="previewProfilePicture(event)" />

            <!-- Preview Foto Profil -->
            <div id="profilePicturePreview" class="mt-3">
                @if($user->profile_picture)
                    @if (substr($user->profile_picture, 0, 5) !== 'https')
                    <img id="existingProfilePicturePreview" src="{{ asset('storage/' . $user->profile_picture) }}" width="150px" height="150px">
                    @else
                    <img id="existingProfilePicturePreview" src="{{ $user->profile_picture }}" width="150px" height="150px">
                    @endif
                @endif
            </div>
        </div>

        <!-- Input Keterangan User -->

        <!-- Tombol Submit -->
        <div class="mb-5 w-2/5">
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Update
                User</button>
        </div>
    </form>
</div>

<script>
     function previewProfilePicture(event) {
        const reader = new FileReader();
        reader.onload = function(){
            const preview = document.getElementById('profilePicturePreview');
            preview.innerHTML = '<img src="' + reader.result + '" alt="Preview" class="h-32 w-32 object-cover rounded">';
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection
