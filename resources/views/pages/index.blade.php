@extends('layouts.master')

@section('vendor-styles')
    {!! Html::style("app-assets/vendors/css/nouislider/nouislider.min.css") !!}
    {!! Html::style("app-assets/vendors/css/UbaPlayer/ubaplayer.css") !!}
    {!! Html::style("app-assets/vendors/css/webui-popover/jquery.webui-popover.min.css") !!}
    {!! Html::style("app-assets/vendors/css/hopscotch/hopscotch.css") !!}
    {!! Html::style("app-assets/vendors/css/nouislider/noui-slider.css") !!}
    {!! Html::style("app-assets/vendors/css/nouislider/palette-noui.css") !!}
    {!! Html::style("app-assets/vendors/css/sweetalert2/sweetalert2.min.css") !!}
@endsection

@section('admin-navs')
    @if ($is_admin === 1)
        <li class="nav-item">
            <a class="nav-link" href="{{route('download')}}">
                <i class="icon-cloud-download"></i>
                <span>Télécharger résultats</span>
            </a>
        </li>
    @endif
@endsection

@section('vendor-scripts')
    {!! Html::script("app-assets/vendors/js/jquery/jquery.sticky.js") !!}
    {!! Html::script("app-assets/vendors/js/wNumb/wNumb.js") !!}
    {!! Html::script("app-assets/vendors/js/nouislider/nouislider.min.js") !!}
    {!! Html::script("app-assets/vendors/js/UbaPlayer/jquery.ubaplayer.min.js") !!}
    {!! Html::script("app-assets/vendors/js/webui-popover/jquery.webui-popover.min.js") !!}
    {!! Html::script("app-assets/vendors/js/sweetalert2/sweetalert2.min.js") !!}
    {!! Html::script("app-assets/vendors/js/hopscotch/hopscotch.min.js") !!}
    {!! Html::script("app-assets/vendors/js/app/detectmobilebrowser.js") !!}
    {!! Html::script("app-assets/vendors/js/jquery.matchHeight/jquery.matchHeight.min.js") !!}
@endsection