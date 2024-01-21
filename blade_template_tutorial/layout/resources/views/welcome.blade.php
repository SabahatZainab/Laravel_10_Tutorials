@extends('layouts.masterLayout')
@section('title') Home @endsection
@section('content')

        <h1>Home Page</h1>
        {{-- I want to print here javascript variable data dynamically --}}
        {{-- {{message}} generate error Undefined constant "message" --}}
        {{-- @verbatim
            {{-- {{message}} print same not variable value because this syntax also use in vue.js--}}
            {{-- @endverbatim  --}}

        @verbatim    
            <div id="app">{{ message }}</div>
        @endverbatim
@endsection

{{-- @section('content')

        {{-- ya section include nhi karega pahli wala section include hnga --}} 
         {{-- <h1>Another Page</h1> 
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
        </p>
@endsection  --}}

@push('manualScripts')
        {{-- var message = "hello world";    --}}
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script>
        const { createApp, ref } = Vue

        createApp({
            setup() {
            const message = ref('Hello vue!')
            return {
                message
            }
            }
        }).mount('#app')
        </script>
@endpush