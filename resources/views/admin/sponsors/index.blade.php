@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12 my-3 mb-3">
            <h2 class="font-weight-normal text-center">
                <i class="fa fa-building-o"></i> {{__($title)}}<br>
                <a class="btn btn-secondary" href="{{route('admin.sponsors.create')}}">
                    <i class="fa fa-edit"></i> {{__('Ajouter Un sponseur')}}
                </a>
            </h2>
        </div>
        @foreach ($sponsors as $sponsor)
            <div class="col-sm-6">
                <div class="card box-shadow mb-3">
                    <div class="card-header">
                        <h4 class="my-0 p-2 font-weight-normal">
                            <i class="fa fa-money"></i>
                            {{$sponsor->name}} ({{ucfirst($sponsor->level->name)}})
                            <a class="btn btn-light pull-right" href="{{route('admin.sponsors.edit', $sponsor->id)}}"><i class="fa fa-edit"></i></a>
                        </h4>
                    </div>
                    <div class="card-body text-center">
                        <a href="{{route('admin.sponsors.show', $sponsor->id)}}" class="text-dark">
                            @if ($sponsor->logo)
                                <img class="card-img-top" src="{{$sponsor->logo_url}}" alt="Card image cap">
                            @else
                                <i class="fa fa-building-o fa-5x"></i>
                            @endif
                        </a>
                    </div>
                    @if ($sponsors->total() > $sponsors->perPage())
                        <div class="card-footer d-flex justify-content-center">
                            {{$sponsors->links()}}
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
@endsection
