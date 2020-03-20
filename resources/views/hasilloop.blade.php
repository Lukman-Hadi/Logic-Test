@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{"$result"}}</div>

                <div class="card-body">
                    @php
                        $num = str_split($result);
                        $j=strlen($result)-1;
                        for($i=0;$i<=$j;$i++){
                            $digit = $num[$i];
                            for($m=$j;$m>$i;$m--){
                                $digit = $digit * 10;
                            }
                            echo $digit;
                            echo "<br>";
                        }
                    @endphp
                </div>
            </div>
        </div>
    </div>
</div>
@endsection