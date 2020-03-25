@extends('admin.main')
@section('content')

    <div class="warningOrder py-3 m-2">
        <p>Ar tikrai norite pašalinti šias atostogas?</p>
        <div class="warningOrder">
            <a class="btn btn-primary" href="/delete-holiday/ {{$holiday->id}}" role="button">trinti</a>
        </div>
    </div>
@stop
