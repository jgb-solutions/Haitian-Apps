@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12 my-3 mb-3">
            <h4 class="font-weight-normal text-center"><i class="fa fa-bell"></i> {{__($title)}}</h4>
        </div>
        <div class="col-sm-6">
            <div class="card box-shadow mb-3">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal"> {{__('Envoyer Une Notification Push')}}</h4>
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

                    <form action="{{route('admin.pushes.send')}}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="name">Titre ou Sujet</label>
                            <input type="text"
                                class="form-control"
                                id="name"
                                name="title"
                                placeholder="Entrer le titre"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control"
                                id="message" rows="3"
                                name="message"
                                placeholder="Entrer le message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-bell"></i> {{__('Envoyer')}}</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card box-shadow mb-3">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal"> {{__('Notifications Push Envoyées')}}</h4>
                </div>
                <div class="card-body p-0">
                    <div class="card">
                        <div class="card-body">
                            @if ($notifications->count())
                                @foreach ($notifications as $notification)
                                            <h5 class="card-title">{{$notification->title}}</h5>
                                            <p class="card-text">{{$notification->message}}</p>
                                            <p class="text-muted text-right"><small>{{$notification->created_at}}</small></p>
                                @endforeach
                            @else
                                <h5 class="text-info"><i class="fa fa-info-circle"></i> Pas encore de notifications push.</h5>
                            @endif
                        </div>
                    </div>
                </div>

                @if ($notifications->total() > $notifications->perPage())
                    <div class="card-footer d-flex justify-content-center">
                        {{$notifications->links()}}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
