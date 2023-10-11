@php
    use Carbon\Carbon;
@endphp
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <table class="table">
        <thead>
            <tr>
            <th>id</th>
            <th>NamaPemain</th>
            <th>NoPunggung</th>
            <th>Posisi</th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_pemain as $pemain)
            <tr>
                <td>{{++$no}}
                <td>{{$pemain->id}}</td>
                <td>{{$pemain->namapemain}}</td>
                <td>{{"No ".number_format($pemain->nopunggung, 2, ',', '.')}}</td>
                <td>{{Carbon::parse($pemain->posisi)}}</td>
                <td>
                  <div> <form action="{{route('pemain.destroy', $pemain->id)}}" method="post">
                    @csrf
                  <button onclick="return confirm('yakin mau di hapus?')">Hapus</button>
                </form></div>
                </td>

                <td>
                  <div><a href="{{route('pemain.edit', $pemain->id)}}">Update</a></div>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <h1>id data = {{$id_pemain}}</h1>
      <h1>nama pemain = {{$nama_pemain}}</h1>
      <p><a href="{{route('pemain.create')}}"> Tambah Pemain </a> </p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
