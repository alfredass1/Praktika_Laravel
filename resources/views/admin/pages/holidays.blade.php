@extends('admin/main')
@section('content')

    <div class="site-section bg-light py-4">
        <div class="container">
            <div class="row justify-content-center">
                <h3 class="mb-4 text-black">Valdykite atostogas</h3>
            </div>
            <div class="row">
                <div class="col-sm-8 offset-md-2">
                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">Pavadinimas</th>
                            <th scope="col">Aprasymas</th>
                            <th scope="col">Nuotrauka</th>
                            <th scope="col">Data</th>
                            <th scope="col">Šalinimas</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($holidays as $holiday)
                            <tr>
                                <td>{{$holiday->title}}</td>
                                <td>{{$holiday->description}}</td>
                                <td>{{$holiday->img }}</td>
                                <td>{{$holiday->created_at}}</td>
                                <td><a href="/warning-holiday/{{$holiday->id}}">Šalinti</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <br>
                </div>
            </div>
        </div>
    </div>
@stop
