@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
        @foreach ($articel as $item)
            @include('partials.listpost', ['item' => $item])
        @endforeach


        <!-- Pager -->
        <div class="clearfix">
            {{-- <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a> --}}
            {{ $articel->links() }}
        </div>
    </div>
</div>

@endsection
