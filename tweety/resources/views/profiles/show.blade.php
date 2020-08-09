
@extends('layouts.app')

@section('content')
    <header class="mb-6 relative">
 <img
     src="/images/cover.jpg"
     alt=""
     class="mb-2"
     >
        <div class="flex justify-between items-center mb-4">

            <div>

                <h2 class="font-bold text-2xl mb=0">{{$user->name}}</h2>
                <p class="text-sm">joined{{$user->created_at->diffforHumans()}}</p>
            </div>

            <div>

                <a href="" class="rounded-full shadow py-2 px-4 text-black text-xs">Edit Profile</a>
                <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">Follow me</a>

            </div>
        </div>
        <p class="text-sm">

            If you and I as individuals can see the whole working of the self, then we shall know what love is
        </p>


        <img
            src="{{$user->avatar}}"
            alt=""
            class="rounded-full mr-2 absolute"
            style="width: 150px;left: calc(50% - 75px);top: 260px"
            >



    </header>

    @include('timeline',[
    'tweets'=>$user->tweets
])



@endsection

