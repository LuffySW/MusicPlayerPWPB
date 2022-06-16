@extends('main')
@section('container')

<style>
    body{
        font-family:sans-serif;
        color:white;
    .button {
 /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 10px;
}

.button1 {
    background-color: #008CBA;
  color: white;
}

.button1:hover {

  background-color: white;
  color: black;
  border: 2px solid #008CBA;
}
.button2 {
    background-color: #f44336;
  color: white;
}

.button2:hover {

  background-color: white;
  color: black;
  border: 2px solid #f44336;
}
</style>

<div class="main">

    <div class="form">
        <div class="container">
        @foreach($musics as $music)@endforeach
        <a href="/detail/{{ ($music->id) }}"><img style="  width: 15em;height: 15em;" src="{{asset('storage/'.$music->image)}}" alt=""></a>
        @if ($music->user_id!= auth()->id())s

        <div class="container1">
            <h1>{{ $music->name }}</h1>
            <h3>Auhtor:{{ $music->composer }}</h3>
            <audio controls src=" {{asset('storage/'.$music->music)}} "></audio>
        </div>
        @else
        <div class="container1">
            <h1>{{ $music->name }}</h1>
            <h3>Auhtor:{{ $music->composer }}</h3>
            <audio  controls src=" {{asset('storage/'.$music->music)}} "></audio>
        </div>
        </div>
    <p style="margin-left:0em;">{{ $music->lyric }}</p>
    <a href="/edit/{{ ($music->id) }}"><button style="margin-left:0em;" class="button button1">Edit</button></a>
    <a href="/delete/{{ ($music->id) }}"><button class="button button2">Delete</button></a>
    </div>
@endif
</div>
@endsection
