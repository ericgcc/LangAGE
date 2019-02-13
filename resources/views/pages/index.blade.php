@extends('layouts.master')

@section('vendor-styles')
    {!! Html::style("app-assets/vendors/css/nouislider/nouislider.min.css") !!}
    {!! Html::style("app-assets/vendors/css/UbaPlayer/ubaplayer.css") !!}
    {!! Html::style("app-assets/vendors/css/hopscotch/hopscotch.css") !!}
    {!! Html::style("app-assets/vendors/css/nouislider/noui-slider.css") !!}
    {!! Html::style("app-assets/vendors/css/nouislider/palette-noui.css") !!}
    {!! Html::style("app-assets/vendors/css/sweetalert2/sweetalert2.min.css") !!}
@endsection

@section('view-styles')
    {!! Html::style("assets/css/views/pages/index.css") !!}
@endsection

@section('content-header')
    <button id="tour" type="button" class="btn btn-primary btn-min-width mr-1 mb-1">
        <i class="icon-control-play"></i>&nbsp;&nbsp;Démarrer tour
    </button>
    @if ($is_admin === 1)
        <a role="button" class="btn btn-primary btn-min-width mr-1 mb-1" href="{{route('export')}}">
            <i class="icon-cloud-download"></i>&nbsp;&nbsp;Télecharger résultats
        </a>
    @endif
@endsection

@section('content')
    <section class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <section class="row questions">
                            <div class="col-3 offset-2">
                                <div id="q1-card">
                                    <div class="card border-blue-grey question front">
                                        <div class="card-header pb-0" style="margin-top: 6rem;">
                                            <h4 class="text-bold-600 mb-0 text-center">Relation et Interactivité</h4>
                                        </div>
                                        <div class="mr-5 ml-5"><hr></div>
                                        <div class="card-content">
                                            <div class="card-body text-center pt-0">
                                                <p class="card-text text-center font-medium-2">
                                                    Cette évaluation concerne la relation entre la personne
                                                    interviewée et l'interviewer
                                                </p>
                                                <a class="btn mr-1 btn-outline-primary btn-sm q1-btn" href="javascript:;">Afficher questions</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card border-blue-grey question back">
                                        <div class="card-header pb-0">
                                            <h4 class="text-bold-600 mb-0 text-center">Relation et Interactivité</h4>
                                        </div>
                                        <div class="mr-5 ml-5"><hr></div>
                                        <div class="card-content">
                                            <div class="card-body pt-0">
                                                <div class="card-text pl-2 mb-1">
                                                    <ul class="list-style-square">
                                                        <li>Est-ce que la personne interviewée vous semble "dans" la conversation ?</li>
                                                        <li>Est-elle impliquée dans la conversation ?</li>
                                                        <li>Les échanges avec l'interviewer vous semblent-ils spontanés et intéressés ?</li>
                                                        <li>Est-ce qu'elle participe ?</li>
                                                        <li>Vous semble-t-elle en relation avec l'interviewer ?</li>
                                                    </ul>
                                                </div>
                                                <div class="text-center">
                                                    <a class="btn mr-1 btn-outline-primary btn-sm q1-btn" href="javascript:;">Afficher description</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div id="q2-card">
                                    <div class="card border-blue-grey question front">
                                        <div class="card-header pb-0" style="margin-top: 6rem;">
                                            <h4 class="text-bold-600 mb-0 text-center">Manière et Qualité</h4>
                                        </div>
                                        <div class="mr-5 ml-5"><hr></div>
                                        <div class="card-content">
                                            <div class="card-body text-center pt-0">
                                                <p class="card-text text-center font-medium-2">
                                                    Cette évaluation concerne la qualité et la diversité du discours de la personne interviewée
                                                </p>
                                                <a class="btn mr-1 btn-outline-primary btn-sm q2-btn" href="javascript:;">Afficher questions</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card border-blue-grey question back">
                                        <div class="card-header pb-0">
                                            <h4 class="text-bold-600 mb-0 text-center">Manière et Qualité</h4>
                                        </div>
                                        <div class="mr-5 ml-5"><hr></div>
                                        <div class="card-content">
                                            <div class="card-body pt-0">
                                                <div class="card-text pl-2 mb-1">
                                                    <ul class="list-style-square">
                                                        <li>Les interventions de la personne interviewée vous semblent-elles fluides ?</li>
                                                        <li>Cherche-t-elle ses mots ?</li>
                                                        <li>Utilise-t-elle les mêmes mots ?</li>
                                                        <li>Les mêmes expressions ?</li>
                                                        <li>Est-ce que son discours est varié et riche ?</li>
                                                    </ul>
                                                </div>
                                                <div class="text-center">
                                                    <a class="btn mr-1 btn-outline-primary btn-sm q2-btn" href="javascript:;">Afficher description</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div id="q3-card">
                                    <div class="card border-blue-grey question front">
                                        <div class="card-header pb-0" style="margin-top: 6rem;">
                                            <h4 class="text-bold-600 mb-0 text-center">Information et Quantité</h4>
                                        </div>
                                        <div class="mr-5 ml-5"><hr></div>
                                        <div class="card-content">
                                            <div class="card-body text-center pt-0">
                                                <p class="card-text text-center font-medium-2">
                                                    Cette évaluation concerne le niveau de détails et d'information dans les interventions de la personne interviewée
                                                </p>
                                                <a class="btn mr-1 btn-outline-primary btn-sm q3-btn" href="javascript:;">Afficher questions</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card border-blue-grey question back">
                                        <div class="card-header pb-0">
                                            <h4 class="text-bold-600 mb-0 text-center">Information et Quantité</h4>
                                        </div>
                                        <div class="mr-5 ml-5"><hr></div>
                                        <div class="card-content">
                                            <div class="card-body pt-0">
                                                <div class="card-text pl-2 mb-1">
                                                    <ul class="list-style-square">
                                                        <li>Est-ce que la personne interviewée apporte des éléments nouveaux, des détails qui n'étaient pas demandés directement par l'interviewer mais qui sont pertinents et donnent ainsi une richesse à la conversation ?</li>
                                                        <li>Est-ce que la personne interviewée apporte des éléments pertinents à la question ?</li>
                                                        <li>Le contenu vous semble-t-il assez détaillé ou, au contraire, déviant par rapport au détails ?</li>
                                                    </ul>
                                                </div>
                                                <div class="text-center">
                                                    <a class="btn mr-1 btn-outline-primary btn-sm q3-btn" href="javascript:;">Afficher description</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1">
                            </div>
                        </section>

                        {!! Form::open(['class' => 'form form-horizontal form-custom-bordered']) !!}
                        <div class="row">
                            <div class="col-1 mb-1 offset-1 d-flex justify-content-end"> <!--align-items-center-->
                                <label>1.&nbsp;&nbsp;</label>
                                <div id="ubaplayer"></div>
                                <ul class="ubaplayer-controls">
                                    <li>
                                        <a id="hs-t-player" class="ubaplayer-button" href="{!! asset("assets/tracks/1_a053_début.mp3") !!}"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div id="hs-t-sliders-1" class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-1 mb-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-1 mb-1 offset-1 d-flex justify-content-end">
                                <label>2.&nbsp;&nbsp;</label>
                                <ul class="ubaplayer-controls">
                                    <li>
                                        <a class="ubaplayer-button" href="{!! asset("assets/tracks/2_e025_début.mp3") !!}"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-1 mb-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-1 mb-1 offset-1 d-flex justify-content-end">
                                <label>3.&nbsp;&nbsp;</label>
                                <ul class="ubaplayer-controls">
                                    <li>
                                        <a class="ubaplayer-button" href="{!! asset("assets/tracks/3_a048_début.mp3") !!}"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-1 mb-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-1 mb-1 offset-1 d-flex justify-content-end">
                                <label>4.&nbsp;&nbsp;</label>
                                <ul class="ubaplayer-controls">
                                    <li>
                                        <a class="ubaplayer-button" href="{!! asset("assets/tracks/4_q013_début.mp3") !!}"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-1 mb-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-1 mb-1 offset-1 d-flex justify-content-end">
                                <label>5.&nbsp;&nbsp;</label>
                                <ul class="ubaplayer-controls">
                                    <li>
                                        <a class="ubaplayer-button" href="{!! asset("assets/tracks/5_d011_début.mp3") !!}"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-1 mb-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-1 mb-1 offset-1 d-flex justify-content-end">
                                <label>6.&nbsp;&nbsp;</label>
                                <ul class="ubaplayer-controls">
                                    <li>
                                        <a class="ubaplayer-button" href="{!! asset("assets/tracks/6_c018_début.mp3") !!}"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-1 mb-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-1 mb-1 offset-1 d-flex justify-content-end">
                                <label>7.&nbsp;&nbsp;</label>
                                <ul class="ubaplayer-controls">
                                    <li>
                                        <a class="ubaplayer-button" href="{!! asset("assets/tracks/7_e047_début.mp3") !!}"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-1 mb-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-1 mb-1 offset-1 d-flex justify-content-end">
                                <label>8.&nbsp;&nbsp;</label>
                                <ul class="ubaplayer-controls">
                                    <li>
                                        <a class="ubaplayer-button" href="{!! asset("assets/tracks/8_a027_début.mp3") !!}"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-1 mb-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-1 mb-1 offset-1 d-flex justify-content-end">
                                <label>9.&nbsp;&nbsp;</label>
                                <ul class="ubaplayer-controls">
                                    <li>
                                        <a class="ubaplayer-button" href="{!! asset("assets/tracks/9_c053_début.mp3") !!}"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-1 mb-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-1 mb-1 offset-1 d-flex justify-content-end">
                                <label>10.&nbsp;&nbsp;</label>
                                <ul class="ubaplayer-controls">
                                    <li>
                                        <a class="ubaplayer-button" href="{!! asset("assets/tracks/10_c017_début.mp3") !!}"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-1 mb-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-1 mb-1 offset-1 d-flex justify-content-end">
                                <label>11.&nbsp;&nbsp;</label>
                                <ul class="ubaplayer-controls">
                                    <li>
                                        <a class="ubaplayer-button" href="{!! asset("assets/tracks/11_a025_début.mp3") !!}"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-1 mb-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-1 mb-1 offset-1 d-flex justify-content-end">
                                <label>12.&nbsp;&nbsp;</label>
                                <ul class="ubaplayer-controls">
                                    <li>
                                        <a class="ubaplayer-button" href="{!! asset("assets/tracks/12_d048_début.mp3") !!}"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-1 mb-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-1 mb-1 offset-1 d-flex justify-content-end">
                                <label>13.&nbsp;&nbsp;</label>
                                <ul class="ubaplayer-controls">
                                    <li>
                                        <a class="ubaplayer-button" href="{!! asset("assets/tracks/13_c027_début.mp3") !!}"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-1 mb-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-1 mb-1 offset-1 d-flex justify-content-end">
                                <label>14.&nbsp;&nbsp;</label>
                                <ul class="ubaplayer-controls">
                                    <li>
                                        <a class="ubaplayer-button" href="{!! asset("assets/tracks/14_c037_début.mp3") !!}"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-1 mb-1"></div>
                        </div>
                        <div class="row last">
                            <div class="col-1 mb-1 offset-1 d-flex justify-content-end">
                                <label>15.&nbsp;&nbsp;</label>
                                <ul class="ubaplayer-controls">
                                    <li>
                                        <a class="ubaplayer-button" href="{!! asset("assets/tracks/15_a013_début.mp3") !!}"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-3 mb-3">
                                <fieldset class="form-group slider">
                                </fieldset>
                            </div>
                            <div class="col-1 mb-1"></div>
                        </div>

                        <div class="form-actions right">
                            <div class="row">
                                <div class="col-xl-11 col-lg-11 col-md-11 mb-11 button-set">
                                    <button type="button" class="btn btn-warning mr-1" id="save">
                                        <i class="fa fa-save"></i> Enregistrer
                                    </button>
                                    <button type="submit" class="btn btn-primary" id="submit">
                                        <i class="fa fa-check-square-o"></i> Soumettre
                                    </button>
                                </div>
                                <div class="col-1 mb-1 button-set"></div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('vendor-scripts')
    {!! Html::script("app-assets/vendors/js/jquery/jquery.sticky.js") !!}
    {!! Html::script("app-assets/vendors/js/wNumb/wNumb.js") !!}
    {!! Html::script("app-assets/vendors/js/nouislider/nouislider.min.js") !!}
    {!! Html::script("app-assets/vendors/js/UbaPlayer/jquery.ubaplayer.min.js") !!}
    {!! Html::script("app-assets/vendors/js/sweetalert2/sweetalert2.min.js") !!}
    {!! Html::script("app-assets/vendors/js/hopscotch/hopscotch.min.js") !!}
    {!! Html::script("app-assets/vendors/js/app/detectmobilebrowser.js") !!}
    {!! Html::script("app-assets/vendors/js/jquery.matchHeight/jquery.matchHeight.min.js") !!}
    {!! Html::script("app-assets/vendors/js/flip/jquery.flip.min.js") !!}
@endsection

@section('view-scripts')
<script type="text/javascript">
    let current = '{!! $sliders !!}'.replace(/[\[\]"]+/g,'');
    current = current !== '' ? current.split(',') : null;
    const stamp = '{!! $stamp !!}';
</script>
{!! Html::script("assets/js/views/pages/index.js") !!}
@endsection