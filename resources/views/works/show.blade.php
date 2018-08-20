@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <div class="card box-shadow">
                <div class="card-header" id="headingOne">
                    <h4 class="my-0 font-weight-normal">
                        <img src="{{$work->flag}}" class="img-fluid" width="30">
                        {{__($title)}}
                        <a class="btn btn-light" href="{{route('admin.works.edit', $work->id)}}"><i class="fa fa-edit"></i></a>
                        | &nbsp;
                        <button class="btn btn-info" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            {{__('Détails')}}
                        </button>
                        <button class="btn btn-secondary collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            {{__('Présentation')}}
                        </button>
                        <button class="btn btn-dark collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            {{__('Matchs')}}
                        </button>
                    </h4>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <ul class="list-group">
                        <li class="list-group-item">Code: <b>{{$work->code}}</b></li>
                        <li class="list-group-item">Groupe: <b>{{$work->group}}</b></li>
                    </ul>
                </div>
            </div>
            <div class="card box-shadow">
                <div class="card-header" id="headingTwo">
                    <h4 class="my-0 font-weight-normal">
                        {{__('Présentation')}}
                    </h4>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        {!!$work->presentation!!}
                    </div>
                </div>
            </div>
            <div class="card box-shadow">
                <div class="card-header" id="headingThree">
                    <h4 class="my-0 font-weight-normal">
                        {{__('Matchs')}}
                    </h4>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <ul class="list-group">
                        @foreach ($matches as $match)
                            <li class="list-group-item">Code: <b>{{$work->code}}</b></li>
                            <li class="list-group-item">Groupe: <b>{{$work->group}}</b></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="card box-shadow text-right">
                <div class="card-body">
                    <form action="{{route('admin.works.delete', $work->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-lg btn-outline-danger" onclick="return confirm('{{__('Êtes-vous sûr ?')}}')">{{__('Effacer')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
