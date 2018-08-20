@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12 my-3 mb-3">
            <h4 class="font-weight-normal text-center"><i class="fa fa-flag"></i> {{__($title)}}</h4>
        </div>
        @foreach ($works as $work)
            <div class="col-sm-6">
                <div class="card box-shadow mb-3">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal"><i class="fa fa-folder"></i> {{__('Groupe ' . $work->name)}}</h4>
                    </div>
                    <ul class="list-group">
                        @foreach ($work->teams as $team)
                            <li class="list-group-item">
                                <h5>
                                    <a href="{{route('admin.teams.show', $team->id)}}">
                                        <img src="{{$team->flag}}" class="img-fluid" width="30">
                                        {{$team->name}}
                                    </a>
                                    <a class="btn btn-light" href="{{route('admin.teams.edit', $team->id)}}"><i class="fa fa-edit"></i> Modifier</a>
                                </h5>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
@endsection
