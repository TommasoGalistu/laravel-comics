@php
    $menuItems = config('menu');

@endphp


<div class="containerAll">
    <div class="mainContainer">
      <div class="contImg">
        <img src="{{ Vite::asset('public/img/dc-logo.png')}}" alt="logo dc" />

      </div>

      <ul>
        @foreach ($menuItems as $item)
            <li>{{$item['text']}}</li>
        @endforeach
      </ul>
    </div>
  </div>


