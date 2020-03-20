@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Logic Test</div>

                <div class="card-body">
                    <form action="{{url('/logicre')}}" method="POST">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Masukan Angka</label>
                            <input type="text" class="form-control" placeholder="Masukan Angka" name="angka">
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection