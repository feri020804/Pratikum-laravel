@extends('main')

@section('content')
    <h1>Ini Tampilannya</h1>

    @if ($peran === 'mahasiswa')
        <h3>saya adalah {{ $name }} peran saya adalah {{ $peran }}</h3>
    @else
        <h3>nama saya adalah {{ $name }}</h3>
    @endif
@endsection
