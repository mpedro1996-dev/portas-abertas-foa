@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('img/mascote-home.png')}}" alt="Mascote Home">
            </div>
            <div class="py-lg-5">
                <div class="col-md-6">
                    <img src="{{asset('img/logo-portas-abertas-home.png')}}" alt="Portas Abertas">
                    <div class="row">
                        <div class="col-md-4 ml-auto">
                            <div class="mt-lg-5">
                                <img src="{{asset('img/logo-unifoa.png')}}" alt="UniFOA">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
