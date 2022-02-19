@if($url)
  <a class="btn" href="{{$url}}">
    {{$message}}
  </a>
@else
<button class="btn">
  {{$message}}
</button>
@endif