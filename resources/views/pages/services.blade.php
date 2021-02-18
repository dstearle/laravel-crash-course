@extends('layouts.app')

@section('content')

    {{-- Title --}}
    <h1>{{ $title }}</h1>

    {{-- If there are any items in the services array show content --}}
    @if(count($services) > 0)

        {{-- List of items in the services array --}}
        <ul>

            {{-- Foreach loop in the services array --}}
            @foreach ($services as $service)

                <li>{{ $service }}</li>
                
            @endforeach

        </ul>

    @endif
    
@endsection