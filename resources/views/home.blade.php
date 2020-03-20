@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Selamat Datang {{ Auth::user()->name }} !<br>
                    <div class="row-center">
                        <a href="{{url('/logic')}}" class="btn btn-primary" >Logic</a>
                        <a href="{{route('student.index')}}" class="btn btn-primary" >Database</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
