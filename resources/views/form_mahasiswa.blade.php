<form action="{{ route('krs.store') }}" method="POST">
    @csrf
    <!-- Form input sesuai field -->
</form>


<form method="POST" action="/krs">
    @csrf
    <!-- input NIM, Nama, dst. -->
    <button type="submit" class="btn btn-success">Lanjut Pilih Mata Kuliah</button>
</form>
