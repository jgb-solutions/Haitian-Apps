@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12 my-3 mb-3">
            <h2 class="font-weight-normal text-center">
                <i class="fa fa-flag"></i> {{__($title)}}<br>
                <a class="btn btn-secondary" href="{{route('admin.matches.create')}}">
                    <i class="fa fa-edit"></i> {{__('Ajouter Un Match')}}
                </a>
            </h2>
        </div>
        @foreach ($matches as $match)
            <div class="col-sm-6">
                <div class="card box-shadow mb-3">
                    <div class="card-header">
                        <h4 class="my-0 p-2 font-weight-normal">
                            <i class="fa fa-calendar"></i>
                            <a href="{{route('admin.matches.show', $match->id)}}">
                                {{$match->match_day_format}}
                            </a>
                            <a class="btn btn-light pull-right" href="{{route('admin.matches.edit', $match->id)}}"><i class="fa fa-edit"></i></a>
                        </h4>
                    </div>
                    <div class="card-body pb-0">
                        <div class="row text-center">
                            <div class="col-5">
                                <h4>
                                    {{-- {{dd($match->team1)}} --}}
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
{{--                                 <th scope="col">Groupe</th>
 --}}                                <th scope="col">Stade</th>
                                <th scope="col">Ville</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                {{-- <td><a href="{{route('admin.groups.show', $match->group)}}">{{$match->group}}</a></td> --}}
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
                   {{--  <div class="card-header">
                        <h4 class="my-0 font-weight-normal">
                            <i class="fa fa-futbol-o"></i>
                            {{__('Buteurs')}}
                        </h4>
                    </div>
                    <table class="table table-bordered mb-0 text-centerƒ">
                        <thead>
                            <tr>
                                <th scope="col">Équipe</th>
                                <th scope="col">Joueur</th>
                                <th scope="col">Numéro</th>
                                <th scope="col">Buts</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="{{$match->team1->flag}}" class="img-fluid img-thumbnail" width="50"></td>
                                <td>DZYUBA</td>
                                <td>22</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td><img src="{{$match->team1->flag}}" class="img-fluid img-thumbnail" width="50"></td>
                                <td>SMOLOV</td>
                                <td>10</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td><img src="{{$match->team2->flag}}" class="img-fluid img-thumbnail" width="50"></td>
                                <td>ALKHAIBARI</td>
                                <td>15</td>
                                <td>2</td>
                            </tr>
                        </tbody>
                    </table> --}}
                </div>
            </div>
        @endforeach
    </div>
@endsection
