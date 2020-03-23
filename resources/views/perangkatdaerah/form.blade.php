@extends('layouts.app')
@section('content')
    <div id="app">
        @if($act == 'edit')
            <perangkatdaerah-update 
                :perangkatdaerah='{!! json_encode($perangkatdaerah) !!}'
                :kabkota='{!! json_encode($kabkota) !!}'
                :route='{!! json_encode($route) !!}'
                :api='{!! json_encode($api) !!}'>
            </perangkatdaerah-update>
        @elseif ($act == 'create')
            <perangkatdaerah-create
                :api='{!! json_encode($api) !!}' 
                :kabkota='{!! json_encode($kabkota) !!}'
                :route='{!! json_encode($route) !!}'>
            </perangkatdaerah-create>
        @endif
    </div>
@stop