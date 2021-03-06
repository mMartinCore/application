@extends('layouts.backend')



@section('topic')
    

            <div class="p-0">
                <div class="flex justify-start items-baseline flex-wrap">
                    <div class="flex m-2">
                        <a href="{{ route('users.index') }}" class="text-base  rounded-r-none  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer
                    hover:bg-teal-700 hover:text-teal-100
                    bg-teal-100
                    text-teal-700
                    border duration-200 ease-in-out
                    border-teal-600 transition">
                            <div class="flex leading-5">
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-save w-5 h-5 mr-1">
                                    <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
                                    <polyline points="17 21 17 13 7 13 7 21"></polyline>
                                    <polyline points="7 3 7 8 15 8"></polyline>
                                </svg> --}}
                                 User
                            </div>
                        </a>


                        <a href="{{ URL::to('roles') }}" class="text-base  rounded-r-none  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer
                        hover:bg-teal-700 hover:text-teal-100
                        bg-teal-100
                        text-teal-700
                        border duration-200 ease-in-out
                        border-teal-600 transition">
                                <div class="flex leading-5">
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-save w-5 h-5 mr-1">
                                        <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
                                        <polyline points="17 21 17 13 7 13 7 21"></polyline>
                                        <polyline points="7 3 7 8 15 8"></polyline>
                                    </svg> --}}
                                      Role
                                </div>
                            </a>
                        <a href="{{ URL::to('permissions') }}"  class="text-base  rounded-l-none  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer
                    hover:bg-teal-700 hover:text-teal-100
                    bg-teal-100
                    text-teal-700
                    border duration-200 ease-in-out
                    border-teal-600 transition">
                            <div class="flex leading-5">
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye w-5 h-5 mr-1">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg> --}}
                             Permissions
                            </div>
                        </a>
                    </div>
                </div>

            </div>      
           <span class="text-lg font-semibold inline-block py-1 px-2 uppercase rounded text-gray-900  uppercase last:mr-0 mr-1">
            Create Role <hr>
          </span>

@endsection






@section('content')



<div class="container max-w-full mx-auto py-0 px-6">
  <div class="font-sans">
  <div class="max-w-sm mx-auto px-6">
    <div class="relative flex flex-wrap">
      <div class="w-full relative">
        {{-- bg-blue-300  --}}


<div class="bg-gray-100  shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2 ">

          <div class="text-center  font-semibold text-black">
            Assign Permission
          </div>

          {{ Form::open(array('url' => 'roles')) }}
                @csrf

            <div class="mx-auto max-w-lg mt-8 ">
              <div class="py-2">
                <span class="px-1 text-sm text-gray-900">Permission</span>
                <input name="name"  type="text"
                  class="text-lg block px-3 py-2  rounded-lg w-full
                    bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                    text-black
                    focus:placeholder-gray-500
                    focus:bg-white focus:border-gray-600
                    focus:outline-none">

                    @error('name')
                    <p class="text-red-500 text-md italic mt-4">
                        {{ $message }}
                    </p>
                   @enderror


              </div>




              <style>
                .custom-label input:checked + svg {
                    display: block !important;
                }
                </style>

            <div class='form-group'>
                <span class="px-1 text-md text-gray-900">Assign Permission  to Role</span><hr><br>
                @foreach ($permissions as $permission)
                        <label class="custom-label flex">
                            <div class="
                            shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
                            <input type="checkbox" name="permissions[]" class="hidden"  value="{{ $permission->id }}">
                            <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
                            </div>
                            <span class="select-none  text-black">{{ Form::label($permission->name, $permission->name) }}<br></span>
                    </label>
                @endforeach
                <br>
            </div>


                <button type="submit" class="mt-3 text-lg font-semibold
                bg-gray-800 w-full text-white rounded-lg
                px-6 py-3 block shadow-xl hover:text-white hover:bg-black">
                Save
              </button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
