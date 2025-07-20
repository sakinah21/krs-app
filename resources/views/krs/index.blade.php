<form action="{{ route('mahasiswa.store') }}" method="POST">
    @csrf
    <label>NIM</label>
    <input type="text" name="nim" required>

    <label>Nama</label>
    <input type="text" name="nama" required>

    <label>Jurusan</label>
    <input type="text" name="jurusan" required>

    <label>Tanggal Lahir</label>
    <input type="date" name="tanggal_lahir">

    <label>Agama</label>
    <select name="agama">
        <option>-- Pilih Agama --</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Hindu">Hindu</option>
        <option value="Budha">Budha</option>
    </select>

    <label>Email</label>
    <input type="email" name="email">

    <label>No Telepon</label>
    <input type="text" name="no_telepon">

    <label>Tempat Tinggal</label>
    <input type="text" name="tempat_tinggal">

    <label>Angkatan</label>
    <input type="text" name="angkatan">

    <button type="submit">Lanjut Pilih Mata Kuliah</button>
</form>
