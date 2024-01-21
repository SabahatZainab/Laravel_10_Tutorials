<h1>Header Blade</h1>

{{-- @foreach ($name as $key => $value)
    <p>{{$key}} - {{$value}}</p>
    
    @endforeach --}}
    
@forelse ($name as $key => $value)    
    <p>{{$key}} - {{$value}}</p>
@empty
    <p>No Value Found</p>
@endforelse