@extends('layouts.app')
@section('content')
    <div>
        <h5>Dni powszednie</h5>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">przystanek</th>
            <th scope="col">odjazd</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">Rzeszow</th>
            <td>12:00</td>
        </tr>
        <tr>
            <th scope="row">Lancut</th>
            <td>
                <span class="badge bg-info text-dark">12:00</span>
                <span class="badge bg-info text-dark">12:00</span>
            </td>
        </tr>
        <tr>
            <th scope="row">Przeworsk</th>
            <td></td>
        </tr>
        </tbody>
    </table>
@endsection
