{{-- <h1>Users Page - Its {{$user}}</h1>
<h2>Hey {{$user}} !</h2>
<h3>Worked As : {{ !empty($workAs) ? $workAs : '"No Work Place"' }}
</h3> {!!$alert!!} --}}

<h1>Users Page - Use of Multi Dimensional Array</h1>
@foreach ($user as $key => $value)
    <h3>{{$key}}. 
        {{$value['name']}} | 
        {{$value['Designation']}} | 
        <a href="{{route('view.user',$key)}}">Show</a></h3>
@endforeach