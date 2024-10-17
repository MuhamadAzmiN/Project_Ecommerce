<div class="flex flex-col justify-between fixed left-0 top-0 w-64 h-full bg-gray-900 p-4">
    <div>
        <a href="{{ route('admin') }}" class="flex item-center pb-4 border-b border-b-gray-800">
            {{-- <img src="/images/favicon.png" alt="Portal Berita Logo" class="w-7 h-7 object-cover"> --}}
            <span class="text-lg font-bold text-white ml-3">Kelola Super Admin</span>
        </a>
        <ul class="mt-4">

                @can('superAdmin')
                    
                <li class="mb-1">
                    <a href="{{ route('daftarUser') }}"
                        class="flex item-center py-2 px-4 text-gray-300 hover:text-gray-100 hover:bg-gray-950 rounded-md">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 18 20"  width="5" height="5">
                            <path d="M16 0H4a2 2 0 0 0-2 2v1H1a1 1 0 0 0 0 2h1v2H1a1 1 0 0 0 0 2h1v2H1a1 1 0 0 0 0 2h1v2H1a1 1 0 0 0 0 2h1v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4.5a3 3 0 1 1 0 6 3 3 0 0 1 0-6ZM13.929 17H7.071a.5.5 0 0 1-.5-.5 3.935 3.935 0 1 1 7.858 0 .5.5 0 0 1-.5.5Z"/>
                        </svg>                        
                        <span class="ml-2">Daftar User</span>
                    </a>
                </li>


                <li class="mb-1">
                    <a href="{{ route('daftarBarangAll') }}"
                        class="flex item-center py-2 px-4 text-gray-300 hover:text-gray-100 hover:bg-gray-950 rounded-md">
                        <svg class="mr-2 w-5 h-5" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z"></path>
                        </svg>
                        <span>Daftar Barang</span>
                    </a>
                </li>
                @endcan
            {{-- @endcan --}}
        </ul>
    </div>
    <form action="{{ route('logout') }}">
        @csrf
        <button type="submit" onclick="return confirm('Apakah anda yakin ingin keluar?')"
            class="flex item-center w-full py-2 px-4 text-gray-300 hover:text-gray-100 hover:bg-red-500 rounded-md">
            <svg class="mr-2 w-5 h-5" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-line join="round"
                    d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15">
                </path>
            </svg>
            <span>Logout</span>
        </button>
    </form>
</div>
