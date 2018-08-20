@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <div class="card box-shadow mb-3">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">
                        <img src="{{$player->team->flag}}" class="img-fluid img-thumbnail" width="50">
                        {{__(' Joueur: ' . $player->name)}}
                        <a class="btn btn-light pull-right" href="{{route('admin.players.edit', $player->id)}}">Modifier</a>
                    </h4>
                </div>
                <div class="player-photo text-center">
                    @if ($player->photo)
                        <img class="card-img-top" src="{{$player->photo_url}}" alt="Card image cap">
                    @else
                        <i class="fa fa-user fa-5x"></i>
                    @endif
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
                        @if ($player->birthday)
                        <tr>
                            <th>Date de Naissance</th>
                            <td>{{$player->birthday_format}}</td>
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
                <div class="card-body text-right">
                    <form action="{{route('admin.players.delete', $player->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-lg btn-outline-danger" onclick="return confirm('{{__('Êtes-vous sûr ?')}}')">{{__('Effacer')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
