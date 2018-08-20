@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <div class="card box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal"><i class="fa fa-edit"></i> {{__($title)}}</h4>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('admin.teams.update', $team->id)}}" method="POST">
                        @csrf
                        @method('PUT')

                        @include('admin.teams.form-inputs')
                        <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> {{__('Modifier')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
