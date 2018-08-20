@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12 my-3 mb-3">
            <h2 class="font-weight-normal text-center">
                <i class="fa fa-building-o"></i> {{__($title)}}<br>
            </h2>
        </div>
            <div class="col-sm-8 offset-sm-2">
                <div class="card box-shadow mb-3">
                    <div class="card-header">
                        <h4 class="my-0 p-2 font-weight-normal">
                            <i class="fa fa-money"></i>
                            {{$sponsor->name}} ({{ucfirst($sponsor->level->name)}})
                            <a class="btn btn-light pull-right" href="{{route('admin.sponsors.edit', $sponsor->id)}}"><i class="fa fa-edit"></i></a>
                        </h4>
                    </div>
                    <div class="card-body">
                        @if ($sponsor->logo)
                            <img class="card-img-top" src="{{$sponsor->logo_url}}" alt="{{$sponsor->name}}">
                        @else
                            <i class="fa fa-building-o fa-5x"></i>
                        @endif
                        <hr>
                        <div class="sponsor-description">
                            {!! $sponsor->description !!}
                        </div>
                        @if ($sponsor->phones)
                            <hr>
                            <div class="sponsor-phones">
                                Téléphones:
                                @foreach ($sponsor->phones_as_array as $phone)
                                    <a class="btn btn-link" href="tel:{{$phone}}"><i class="fa fa-phone"></i>   {{$phone}}</a>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
    </div>
@endsection
