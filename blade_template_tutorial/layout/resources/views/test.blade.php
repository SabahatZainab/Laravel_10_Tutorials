<h1>How to Use Javascript in Blade Template</h1>
<h2>How to Use JS in Template Inheritance</h2>

@php
    $user = "I want to print this variable using Javascript";
    $fruits = ['Apple','Banana','Grapes','Orange'];
@endphp

<script>
    // var data = {{$user}};
    // console.log(data);
    // from above two lines we found syntax error b/c we cannot 
    //use this blade template in javascript directly we can use here directive json

    var user = @json($user);
    // console.log(user);

    // var fruits = @json($fruits);
    //new method
    var fruits = {{Js::from($fruits)}}
    fruits.forEach(function(value){
        
        console.log(value);
    });
</script>