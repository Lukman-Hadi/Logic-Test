@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Siswa</div>

                <div class="card-body">
                    <form action="{{url('student')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" placeholder="Masukan Nama" name="name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input type="text" class="form-control" placeholder="Masukan Alamat" name="alamat">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telp</label>
                            <input type="text" class="form-control" placeholder="Masukan No Telp" name="telp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nama Sekolah</label>
                            <select class="form-control" name="id_sekolah">
                                <option value="">PILIH</option>
                                @foreach($schools as $sc)
                                <option value="{{ $sc->id }}">{{ $sc->nama_sekolah }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Sekolah</div>

                <div class="card-body">
                    <form action="{{url('school')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Sekolah</label>
                            <input type="text" class="form-control" placeholder="Masukan Nama Sekolah" name="nama_SC">
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <div class="col-md-12">
    <div class="card">
        <div class="card-header">Data Siswa</div>
        <div class="card-body">
            <table id="data_users_side" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Telp</th>
                        <th>Sekolah</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    </div>
    <script>
        $(function() {
            $('#data_users_side').DataTable({
                processing: true,
                serverSide: true,
                ajax: "/getstudent",
                columns: [
                    { data: 'nama', name: 'students.nama' },
                    { data: 'alamat', name: 'students.alamat' },
                    { data: 'telp', name: 'students.telp' },
                    { data: 'nama_sekolah', name: 'students.nama_sekolah' }
                ]
            });
        });
    </script>
</div>
</div>
@endsection