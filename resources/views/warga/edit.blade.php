<h1>Edit Data</h1>

<form action="/warga/{{$warga->id}}" method="POST" >
    @method('put');
    @csrf
    <h1>Create Data Warga</h1>
    <label>Nama</label>
    <input type="text" name="name" value={{$warga->name}}><br>
    <label>Nik</label>
    <input type="text" name="nik" value={{$warga->nik}}><br>
    <label>No KK</label>
    <input type="text" name="no_kk" value={{$warga->no_kk}}><br>
    <label>Jenis Kelamin</label>
    <select name="jenis_kelamin">
        <option value="L" @if($warga->jenis_kelamin == "L") selected @endif>Laki-Laki</option>
        <option value="P" @if($warga->jenis_kelamin == "P") selected @endif>Perempuan</option>
    </select><br>
    <label>Alamat</label>
    <textarea name="alamat" value={{$warga->alamat}}></textarea><br>
    <input type="submit" name="submit" value="save"></input>
</form>