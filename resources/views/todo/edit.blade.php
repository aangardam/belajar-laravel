<html>
<thead>
    <title> TODO List</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</thead>
<tbody>
    {{-- <h5> TODO LIST</h5> --}}
    <div class="row" style="margin-top: 10px; margin-left:10px">
        <div class="col-md-6">
            <h5> Update TO DO LIST</h5>
        </div>
        <div class="col-md-6" style="display: flex; justify-content: flex-end">
            <a href="{{ url('to-do')}}" class="btn btn-danger btn-sm" style="margin-right: 20px;"> Kembali </a>
        </div>
    </div>
    <div class="row" style="margin-left:10px">
        <form action="{{ url('to-do/'.$data->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <label> Judul </label>
                <div class="col-md-12">
                    <input type="text" class="form-control" placeholder="Judul" required="" name="title" value="{{ $data->title }}">
                </div>
            </div>
            <div class="row" style="margin-top:10px">
                <label> Deskripsi </label>
                <div class="col-md-12">
                    <input type="text" class="form-control" placeholder="Deskripsi" name="description" value="{{ $data->description }}">
                </div>
            </div>
            <div class="row" style="margin-top:10px">
                <label> Status </label>
                <div class="col-md-12">
                    <select name="status" class="form-control">
                        <option value="pending" {{ $data->status == 'pending' ? 'selected' : '' }}> Pending </option>
                        <option value="on progres" {{ $data->status == 'on progres' ? 'selected' : '' }}> On progress </option>
                        <option value="done" {{ $data->status == 'done' ? 'selected' : '' }}> Done </option>
                    </select>
                </div>
            </div>
            <div class="row" style="margin-top: 10px">
                <button type="submit" class="btn btn-primary"> Simpan </button>
            </div>

        </form>
    </div>

</tbody>

</html>
