@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <div class="card box-shadow">
                <div class="card-header" id="headingOne">
                    <h4 class="my-0 font-weight-normal">
                        <img src="{{$team->flag}}" class="img-fluid" width="30">
                        {{__($title)}}
                        <a class="btn btn-light" href="{{route('admin.teams.edit', $team->id)}}"><i class="fa fa-edit"></i></a>
                    </h4>
                </div>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase" id="presentation-tab" data-toggle="tab" href="#presentation" role="tab" aria-controls="presentation" aria-selected="true"><i class="fa fa-info-circle"></i> Présentation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" id="matches-tab" data-toggle="tab" href="#matches" role="tab" aria-controls="matches" aria-selected="false"><i class="fa fa-futbol-o"></i> Matches</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="presentation" role="tabpanel" aria-labelledby="presentation-tab">
                        <ul class="list-group">
                            <li class="list-group-item">Code: <b>{{$team->code}}</b></li>
                            <li class="list-group-item">Groupe: <b>{{$team->group}}</b></li>
                        </ul>
                        @if ($team->presentation)
                            <div class="card-body">
                                {!!$team->presentation!!}
                            </div>
                        @endif
                    </div>
                    <div class="tab-pane fade" id="matches" role="tabpanel" aria-labelledby="matches-tab">
                        @foreach ($matches as $match)
                            <div class="card box-shadow mb-3">
                                <div class="card-header">
                                    <h4 class="my-0 p-2 font-weight-normal">
                                        <i class="fa fa-calendar"></i>
                                        {{$match->match_day_format}}
                                        <a class="btn btn-light pull-right" href="{{route('admin.matches.edit', $match->id)}}"><i class="fa fa-edit"></i></a>
                                    </h4>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="row text-center">
                                        <div class="col-5">
                                            <h4>
                                                <a href="{{route('admin.teams.show', $match->team1->id)}}">
                                                    <img src="{{$match->team1->flag}}" class="img-fluid img-thumbnail mb-2" width="150"><br>
                                                    {{$match->team1->name}}
                                                </a>
                                            </h4>
                                        </div>
                                        <div class="col-2">
                                            <br>
                                            <b>VS</b>
                                        </div>

                                        <div class="col-5">
                                            <h4>
                                                <a href="{{route('admin.teams.show', $match->team2->id)}}">
                                                    <img src="{{$match->team2->flag}}" class="img-fluid img-thumbnail mb-2" width="150"><br>
                                                    {{$match->team2->name}}
                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-bordered mb-0 text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">Stade</th>
                                            <th scope="col">Ville</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{$match->stadium}}</td>
                                            <td>{{$match->city}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">
                                        <i class="fa fa-futbol-o"></i>
                                        {{__('Score')}}: <b>{!! $match->score ?: '<i class="fa fa-question"></i><i class="fa fa-question"></i><i class="fa fa-question"></i>'!!}</b>
                                    </h4>
                                </div>
                            </div>
                        @endforeach
                    </div>
            </div>

            </div>
            <div class="card box-shadow text-right">
                <div class="card-body">
                    <form action="{{route('admin.teams.delete', $team->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-lg btn-outline-danger" onclick="return confirm('{{__('Êtes-vous sûr ?')}}')">{{__('Effacer')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
