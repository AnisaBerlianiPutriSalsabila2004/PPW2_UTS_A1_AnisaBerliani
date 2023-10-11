@extends('layouts.main_layout')
@section('content')

<h1>UPDATE TABEL</h1>
<form method="post" action="{{route('pemain.update', $pemain->id)}}">
    @csrf
    <div class="mt-4 ms-4 mb-3">
      <label class="form-label">idpemain</label>
      <input type="text" name="idpemain" value="{{$pemain->idpemain}}" aria-describedby="emailHelp">
    </div>
    <div class="mb-3 ms-4 ">
        <label class="form-label">namapemain</label>
        <input type="text" name="namapemain" value="{{$pemain->namapemain}}" aria-describedby="emailHelp">
      </div>
      <div class="mb-3 ms-4 ">
        <label class="form-label">nopunggung</label>
        <input type="text" name="nopunggung" value="{{$pemain->nopunggung}}" aria-describedby="emailHelp">
      </div>
      <div class="mb-3 ms-4 ">
        <label class="form-label">posisi</label>
        <input type="date" name="posisi" value="{{$pemain->posisi}}" aria-describedby="emailHelp">
      </div>
    <div  class="mb-3 ms-4 "><button type="submit" class="btn btn-primary">Simpan</button></div>
    <div  class="mb-3 ms-4 "><a href="/pemain">Batal</a></div>
</form>
@endsection;
