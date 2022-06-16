@extends('main')
@section('container')
  <link rel="stylesheet" href="../css/add.css">
<body>

@foreach($musics as $music)@endforeach
  <div class="wrapper">
    <form class="form" action="{{ url('music',$music->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PUT")
      <div class="pageTitle title">SOUND</div>
      <div class="secondaryTitle title">Masukkan Musik</div>
      <input type="text" class="harga formEntry" value="{{ $music->name }}" placeholder="Music Name" name="name"/>
      <h4 class="secondaryTitle title">MP3</h4>
      <label value="{{ $music->music }}" class="secondaryTitle title">Choose FIle
        <input type="file" id="music" name="music"  " >
      </label>
      <h4 class="secondaryTitle title">Cover</h4>
      <label value="{{ $music->image }}" class="secondaryTitle title">Choose FIle
        <input type="file" id="image" name="image"  " >
      </label>
      <input class="harga formEntry" value="{{ $music->composer }}" type="text" placeholder="Author" name="composer"/>
        <input class="harga formEntry" value="{{ $music->lyric }}" type="text" placeholder="Lyric" name="lyric"/>
     <input class="submit formEntry" type="submit" >

    </form>
  </div>
</body>

@endsection
