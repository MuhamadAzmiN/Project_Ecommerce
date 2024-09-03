@php
    $active = 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 dark:border-indigo-600 text-sm font-medium leading-5 text-gray-900 dark:text-gray-100 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out';
    $NonActive =  'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-700 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out';
@endphp

<a href="{{ route('dashboard') }}" class="{{ request()->is('dashboard') ? $active : $NonActive }}text-sm hover:bg-sky-300 hover:bg-opacity-35 rounded-t-md py-1 px-2 duration-200 shadow-sm p-0 max-sm:border-r max-sm:border-b-0 max-sm:border-gray-200 max-sm:rounded-e-none">
    Dashboard
</a>



<a href="{{ route('cart') }}" class="{{ request()->is('cart') ? $active : $NonActive }} text-sm hover:bg-sky-300 hover:bg-opacity-35 rounded-t-md py-1 px-2 duration-200 shadow-sm p-0 max-sm:border-r max-sm:border-b-0 max-sm:border-gray-200 max-sm:rounded-e-none">
    Cart
</a>



<a href="{{ route('service') }}" class="{{ request()->is('service') ? $active : $NonActive }} text-sm hover:bg-sky-300 hover:bg-opacity-35 rounded-t-md py-1 px-2 duration-200 shadow-sm p-0 max-sm:border-r max-sm:border-b-0 max-sm:border-gray-200 max-sm:rounded-e-none">
    Services
</a>


<a href="{{ route('service') }}" class="{{ request()->is('service') ? $active : $NonActive }} text-sm hover:bg-sky-300 hover:bg-opacity-35 rounded-t-md py-1 px-2 duration-200 shadow-sm p-0 max-sm:border-r max-sm:border-b-0 max-sm:border-gray-200 max-sm:rounded-e-none">
    Services
</a>


