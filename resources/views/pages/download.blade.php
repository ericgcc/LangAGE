@extends('layouts.master')

@section('content')
    <div class="text-center">
        <a role="button" class="btn btn-primary btn-min-width mr-1 mb-1" href="{{route('export')}}">
            <i class="icon-cloud-download"></i>&nbsp;&nbsp;Télecharger résultats
        </a>
    </div>
@endsection