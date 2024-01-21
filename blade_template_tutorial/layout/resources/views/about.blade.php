@extends('layouts.masterLayout')
@section('title') About @endsection
@section('content')
        {{-- <h1>About Page</h1>
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Recusandae quia sunt quae aspernatur nulla. Harum animi id pariatur 
                officia adipisci tenetur praesentium a, 
            placeat fugiat ut impedit corrupti perferendis accusamus?
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Recusandae quia sunt quae aspernatur nulla. Harum animi id pariatur 
            officia adipisci tenetur praesentium a, 
            placeat fugiat ut impedit corrupti perferendis accusamus?
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Recusandae quia sunt quae aspernatur nulla. Harum animi id pariatur 
            officia adipisci tenetur praesentium a, 
            placeat fugiat ut impedit corrupti perferendis accusamus?
        </p> --}}
@endsection 

@section('sidebar')
        @parent
        <p>This is appended to the master sidebar.</p>
@endsection

@push('scripts')
        <script src="/example.js"></script>
        <script src="/jquery.js"></script>
        <script src="/bootstrap.js"></script>
@endpush

{{-- we can also use same stack name multiple time(we can use push multiple time--}}
@push('scripts')
        <script src="/vue.js"></script>
        
@endpush
@push('style')
        <link rel="stylesheet" href="css/bootstrap.css">
@endpush
{{-- style push se pahli ya css add hn wo name hum prepend ma denge --}}
@prepend('style')
        <style>
            #wrapper{
                background: blanchedalmond;
            }
        </style>    
@endprepend