<html>
<thead>
    <title> TODO List</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</thead>
<tbody>
    {{-- <h5> TODO LIST</h5> --}}
    <div class="row" style="margin-top: 10px; margin-left:10px">
        <div class="col-md-6">
            <h5> TO DO LIST</h5>
        </div>
        <div class="col-md-6" style="display: flex; justify-content: flex-end">
            <a href="{{ url('to-do/create')}}" class="btn btn-primary btn-sm" style="margin-right: 20px;"> Tambah </a>
        </div>
    </div>
    <div class="row" style="margin-left:10px">
        <table class="table table-striped">
            <thead>
                <tr>
                    <td> No </td>
                    <td> Judul </td>
                    <td> Deskripsi </td>
                    <td> Status </td>
                    <td> Aksi </td>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item => $value)
                    <tr>
                        <td> {{ $item + 1 }} </td>
                        <td> {{ $value->title }} </td>
                        <td> {{ $value->description }} </td>
                        <td> {{ $value->status }} </td>
                        <td>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ url('to-do', $value->id) }}" method="POST">
                                <a href="{{ url('to-do/'.$value->id.'/edit')}}" class="btn btn-warning btn-sm"> Edit </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</tbody>

</html>
