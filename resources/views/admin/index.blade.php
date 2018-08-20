@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-4">
            <div class="card box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">{{__('Équipes')}}</h4>
                </div>
                <ul class="list-group">
                    @foreach ($teams as $team)
                        <li class="list-group-item">
                            <h5>
                                <a href="{{route('admin.teams.show', $team->id)}}">
                                    <img src="{{$team->flag}}" class="img-fluid" width="30">
                                    {{$team->name}}
                                </a>
                            </h5>
                        </li>
                    @endforeach
                </ul>
                <div class="card-footer">
                    <a class="btn btn-lg btn-block btn-outline-primary" href="{{route('admin.teams.index')}}">{{__('Gestion Équipes')}}</a>
                </div>
            </div>
        </div>
    </div>
@endsection
