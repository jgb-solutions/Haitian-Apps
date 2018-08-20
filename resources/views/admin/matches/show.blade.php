@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12 my-3 mb-3">
            <h2 class="font-weight-normal text-center"><i class="fa fa-futbol-o"></i> {{__($title)}}</h2>
        </div>
        <div class="col-sm-8 offset-2">
            <div class="card box-shadow mb-3">
                <div class="card-header">
                    <h4 class="my-0 p-2 font-weight-normal">
                        <a href="{{route('admin.teams.show', $match->team1->id)}}">
                            {{$match->team1->name}}
                        </a>
                        <b>VS</b>
                        <a href="{{route('admin.teams.show', $match->team2->id)}}">
                            {{$match->team2->name}}
                        </a>
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
                            {{-- <th scope="col">Groupe</th> --}}
                            <th scope="col">Stade</th>
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
                        {{__('Score')}}: <b>{!! $match->score ?: '<i class="fa fa-question"></i><i class="fa fa-question"></i><i class="fa fa-question"></i>'!!}</a></b>
                    </h4>
                </div>
                <div class="card-body">
                    @if ($match->summary)
                        <div class="match-summary">
                            <h4>Résumé du match</h4>
                            {!! $match->summary !!}
                        </div>
                    @endif
                </div>
                <div class="card box-shadow text-right">
                    <div class="card-body">
                        <form action="{{route('admin.matches.delete', $match->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-lg btn-outline-danger" onclick="return confirm('{{__('Êtes-vous sûr ?')}}')">{{__('Effacer')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
