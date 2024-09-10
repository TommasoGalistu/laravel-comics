@php
    $menuItems = config('menu');

@endphp


<div class="containerAll header">
    <div class="mainContainer">
      <div class="contImg">
        <img src="{{ Vite::asset('public/img/dc-logo.png')}}" alt="logo dc" />

      </div>

      <ul>
        @foreach ($menuItems as $item)
            <li><a href="{{ route($item['name']) }}">{{ $item['text'] }}</a></li>
        @endforeach
      </ul>
    </div>
  </div>


