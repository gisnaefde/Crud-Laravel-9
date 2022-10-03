<a href="/warga/create">Add Warga</a>

<table border="1">
    <tr >
        <th>No</th>
        <th>Nama</th>
        <th>NIK</th>
        <th>No KK</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    @foreach($warga as $w)
        <tr>
            <td>{{$w->id}}</td>
            <td>{{$w->name}}</td>
            <td>{{$w->nik}}</td>
            <td>{{$w->no_kk}}</td>
            <td>{{$w->jenis_kelamin}}</td>
            <td>{{$w->alamat}}</td>
            <td> <a href="/warga/{{$w->id}}/edit">Edit</a></td>
        </tr>
    @endforeach
</table>