@extends('layouts.admin')

@section('content')
    <h1 class="text-center py-2"><strong>Ti sei Loggato!</strong></h1>
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-4">
                <div class="card">
                    <div class="card-header">{{ __('La mia Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Sei Loggato!') }}
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
