@extends('layout.app')
@section('page-title, Home Page')
@section('content')
    <div class="my_container d-flex flex-column justify-content-center align-items-center p-4">

        <table>
            <tr class="p-3 text-center">
                <th class="p-3">id</th>
                <th class="p-3">company</th>
                <th class="p-3">departure_station</th>
                <th class="p-3">arrival_station</th>
                <th class="p-3">departure_time</th>
                <th class="p-3">arrival_time</th>
                <th class="p-3">train_code</th>
                <th class="p-3">carriage_number</th>
                <th class="p-3">on_time</th>
                <th class="p-3">canceled</th>

            </tr>
            @foreach ($trains as $train)
                <tr class="p-3 text-center bg-dark text-light">
                    <td class="p-3">{{ $train->id }} </td>
                    <td class="p-3">{{ $train->company }} </td>
                    <td class="p-3">{{ $train->departure_station }} </td>
                    <td class="p-3">{{ $train->arrival_station }} </td>
                    <td class="p-3">{{ $train->departure_time }} </td>
                    <td class="p-3">{{ $train->arrival_time }} </td>
                    <td class="p-3">{{ $train->train_code }} </td>
                    <td class="p-3">{{ $train->carriage_number }} </td>
                    <td class="p-3">{{ $train->on_time }} </td>
                    <td class="p-3">{{ $train->canceled }} </td>

                </tr>
            @endforeach


        </table>
    </div>
@endsection
