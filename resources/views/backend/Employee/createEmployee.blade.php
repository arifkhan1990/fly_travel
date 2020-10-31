@extends('backend.master')

@section('breadcrumb-title', 'Create Employee Information')
@section('main_content')
    <h2 class="intro-y text-lg font-medium mt-10">
       Create Employee
    </h2>
    <br>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Horizontal Form -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">
                        Create Employee
                    </h2>
                </div>
                <div class="p-5" id="horizontal-form">
                    <div class="preview">
                        <div class="flex flex-col sm:flex-row items-center">
                            <label class="w-full sm:w-20 sm:text-right sm:mr-5">Email</label>
                            <input type="email" class="input w-full border mt-2 flex-1" placeholder="example@gmail.com">
                        </div>
                        <div class="flex flex-col sm:flex-row items-center mt-3">
                            <label class="w-full sm:w-20 sm:text-right sm:mr-5">Password</label>
                            <input type="password" class="input w-full border mt-2 flex-1" placeholder="secret">
                        </div>
                        <div class="flex items-center text-gray-700 dark:text-gray-500 mt-5 sm:ml-20 sm:pl-5">
                            <input type="checkbox" class="input border mr-2" id="horizontal-remember-me">
                            <label class="cursor-pointer select-none" for="horizontal-remember-me">Remember me</label>
                        </div>
                        <div class="sm:ml-20 sm:pl-5 mt-5">
                            <button type="button" class="button bg-theme-1 text-white">Login</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Horizontal Form -->
        </div>
    </div>
@endsection
