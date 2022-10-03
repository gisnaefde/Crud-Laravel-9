<form action="/warga/store" method="POST" >
    @csrf
    <h1>Create Data Warga</h1>
    <label>Nama</label>
    <input type="text" name="name"/><br>
    <label>Nik</label>
    <input type="text" name="nik"/><br>
    <label>No KK</label>
    <input type="text" name="no_kk"/><br>
    <label>Jenis Kelamin</label>
    <select name="jenis_kelamin">
        <option value="L">Laki-Laki</option>
        <option value="P">Perempuan</option>
    </select><br>
    <label>Alamat</label>
    <textarea name="alamat"></textarea><br>
    <input type="submit" name="submit" value="save"></input>
</form>