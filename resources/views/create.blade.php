@extends('layouts.main_layout')
@section('content')
<form method="post" action="{{route('pemain.store')}}">
    @csrf
    <div class="mt-4 ms-4 mb-3">
      <label class="form-label">idpemain</label>
      <input type="text" name="idpemain" aria-describedby="emailHelp">
    </div>
    <div class="mb-3 ms-4 ">
        <label class="form-label">namapemain</label>
        <input type="text" name="namapemain" aria-describedby="emailHelp">
      </div>
      <div class="mb-3 ms-4 ">
        <label class="form-label">nopunggung</label>
        <input type="text" name="nopunggung" aria-describedby="emailHelp">
      </div>
      <div class="mb-3 ms-4 ">
        <label class="form-label">posisi</label>
        <input type="date" name="posisi" aria-describedby="emailHelp">
      </div>
    <div  class="mb-3 ms-4 "><button type="submit" class="btn btn-primary">Simpan</button></div>
    <div  class="mb-3 ms-4 "><a href="/pemain">Batal</a></div>
</form>
@endsection
