
@php

$alphabet = ['one'=>'A','two'=>'B','three'=>'C'];
// $alphabet = [];
$boolean = "true";
$value = "Hl";
@endphp

{{-- @include('pages.header',['name' => $alphabet]) --}}
{{-- @includeWhen(false,'pages.header',['name' => $alphabet]) --}}
{{-- @includeWhen($boolean,'pages.header',['name' => $alphabet]) --}}
{{-- @includeWhen(empty($value),'pages.header',['name' => $alphabet]) --}}
@includeUnless(empty($value),'pages.header',['name' => $alphabet])

<h1>Welcome Blade</h1>

@include('pages.footer')
@includeIf('pages.content') {{-- if file not found, It doesn't shows error--}}
// {{-- {{5+8}} --}}
// {{-- <br><br> --}}
// {{-- {{"Hello World"}}
// {{"<h1>Hello World</h1>"}} {{--very secure--}}
// {{-- {!!"<h1>Hello World</h1>"!!} for html and Javascript code --}}
// {{-- {!!"<script>alert('Yahoo Baba')</script>"!!} --}}
// {{-- {{"<script>alert('Yahoo Baba')</script>"}} --}} 

// {{-- @php
//     $user = "Sabahat Zainab";    
// @endphp  --}}
// {{-- <br><br> --}}
// {{-- @{{$user}} --}}
// {{-- {!!"<h1>$user</h1>"!!} --}}

// {{-- @php
//     $names = ['a','b','c']
// @endphp
// <ul> --}}
//     {{-- @foreach ($names as $n )
//         <li>{{$loop->index}}-{{$n}}</li>
//         <li>{{$loop->iteration}}-{{$n}}</li> --}}
//         {{-- $loop->index, $loop->count, $loop->even, $loop->odd, $loop->first,$loop->last
//              loop variable --}}
//     {{-- @endforeach --}}
// {{-- </ul> --}}