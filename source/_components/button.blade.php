@if($url)
  <a class="btn @if($size){{$size === 'lg' ? 'btn-lg' : 'btn-sm'}}@else btn-lg @endif" href="{{$url}}">
    {{$message}}
  </a>
@else

<button class="btn @if($size){{$size === 'lg' ? 'btn-lg' : 'btn-sm'}}@else btn-lg @endif">
  {{$message}}
</button>
@endif