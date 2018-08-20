@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12 my-3 mb-3">
            <h4 class="font-weight-normal text-center"><i class="fa fa-users"></i> {{__($title)}}</h4>
        </div>
        @foreach ($teams as $team)
            <div class="col-sm-6 mb-4">
                <div class="card box-shadow mb-1">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal"><img src="{{$team->flag}}" class="img-fluid img-thumbnail" width="50"> {{__(' ' . $team->name)}}</h4>
                    </div>
                </div>
                <div class="row">
                    @foreach ($team->players as $player)
                        <div class="col-sm-6">
                            <div class="card box-shadow mb-3">
                                <div class="player-photo text-center">
                                    <a href="{{route('admin.players.show', $player->id)}}" class="text-dark">
                                        @if ($player->photo)
                                            <img class="card-img-top" src="{{$player->photo_url}}" alt="Card image cap">
                                        @else
                                            <i class="fa fa-user fa-5x"></i>
                                        @endif
                                    <h5 class="pt-2">
                                        {{$player->name}}
                                    </h5>
                                    </a>
                                </div>
                                <table class="table table-bordered mb-0 text-center">
                                    <tbody>
                                        @if ($player->nationality)
                                        <tr>
                                            <th>Nationalité</th>
                                            <td>{{$player->nationality}}</td>
                                        </tr>
                                        @endif
                                        @if ($player->place_of_birth)
                                        <tr>
                                            <th>Date de Naissance</th>
                                            <td>{{$player->place_of_birth}}</td>
                                        </tr>
                                        @endif
                                        @if ($player->height)
                                        <tr>
                                            <th>Hauteur</th>
                                            <td>{{$player->height}}</td>
                                        </tr>
                                        @endif
                                        @if ($player->pro_period)
                                        <tr>
                                            <th>Périod Pro</th>
                                            <td>{{$player->pro_period}}</td>
                                        </tr>
                                        @endif
                                        @if ($player->position)
                                        <tr>
                                            <th>Position</th>
                                            <td>{{$player->position}}</td>
                                        </tr>
                                        @endif
                                        @if ($player->strong_leg)
                                        <tr>
                                            <th>Pied Fort</th>
                                            <td>{{$player->strong_leg}}</td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                                <div class="card-footer">
                                    <a class="btn btn-lg btn-block btn-outline-dark" href="{{route('admin.players.edit', $player->id)}}"><i class="fa fa-edit"></i> {{__('Modifier')}}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
        <div class="col-sm-12">
            @if ($teams->total() > $teams->perPage())
                <div class="d-flex justify-content-center">
                    {{$teams->links()}}
                </div>
            @endif
        </div>
    </div>
@endsection
