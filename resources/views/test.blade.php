@if(isset($filteredresult))
{{-- {{dd($filteredresult)}} --}}

<div>
@foreach ($filteredresult  as $result)
  <p>{{$result->name}}</p>
  <p>{{$result->id}}</p>
  @endforeach
 </div>
@endif
