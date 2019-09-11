
@extends('temp.app')


@section('content')
<div class="container-fluid">
            <div class="block-header">
                <a href="{{url('/action')}}">Mon Espace </a>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content" >
                            <div  class="text" >Mes Cours</div>
                            <div class="number count-to" data-from="0" data-to="5" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">Questions</div>
                            <div class="number count-to" data-from="0" data-to="10" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">feedback</i>
                        </div>
                        <div class="content">
                            <div class="text">Feedback</div>
                            <div class="number count-to" data-from="0" data-to="3" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">Visiteurs</div>
                            <div class="number count-to" data-from="0" data-to="15" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            </div>
        </div>
        @endsection