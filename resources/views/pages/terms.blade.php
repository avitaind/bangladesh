@extends('layouts.app')

@section('title')
    {{ $title }}
@stop

@section('content')
    <main>
        <section class="top-nav-padding terms-panel">
            <div class="container">
                <div class=" py-4">
                    <h2 class="mb-4 font-weight-light ls-0">{{ $title }}</h2>

                    <div class="terms-wrap ls-0">
                        {!! $content !!}
                    </div>
                </div>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>
    </main>

@endsection
