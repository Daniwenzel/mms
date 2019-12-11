@extends('welcome')

@section('content')
    <div class="torres">
        @foreach($torres as $torre)
            <div class="torre">
                {{ $torre->RAZAOSOCIAL }}
                {{ $torre->DESSITE }}
            </div>
        @endforeach
    </div>
    {{--    <table class="table table-hover m-5">--}}
    {{--        <thead class="thead-dark">--}}
    {{--        <tr>--}}
    {{--            <th scope="col">#</th>--}}
    {{--            <th scope="col">Cliente</th>--}}
    {{--            <th scope="col">Torre</th>--}}
    {{--        </tr>--}}
    {{--        </thead>--}}
    {{--        <tbody>--}}
    {{--        @foreach($torres as $torre)--}}
    {{--            <tr>--}}
    {{--                <td>{{ $torre->CODIGO }}</td>--}}
    {{--                <td>{{ $torre->RAZAOSOCIAL }}</td>--}}
    {{--                <td>{{ $torre->DESSITE }}</td>--}}
    {{--            </tr>--}}
    {{--        @endforeach--}}
    {{--        </tbody>--}}
    {{--    </table>--}}
@endsection
