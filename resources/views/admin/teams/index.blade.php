@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <div class="card box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal"><i class="fa fa-flag"></i> {{__($title)}}</h4>
                </div>
                <ul class="list-group">
                    @foreach ($teams as $team)
                        <li class="list-group-item">
                            <h4>
                                <a href="{{route('admin.teams.show', $team->id)}}">
                                    <img src="{{$team->flag}}" class="img-fluid" width="30">
                                    {{$team->name}}
                                </a>
                                <a class="btn btn-light" href="{{route('admin.teams.edit', $team->id)}}"><i class="fa fa-edit"></i> Modifier</a>
                            </h4>
                        </li>
                    @endforeach
                </ul>
                {{-- <div class="card-footer">
                    <a class="btn btn-lg btn-block btn-outline-primary" href="{{route('admin.teams.create')}}">{{__('Ajouter Une Équipe')}}</a>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
