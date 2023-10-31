<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .myclass{
            color: rebeccapurple;
        }
    </style>
</head>
<body>
    <p>welcome</p>
    <hr>
    @php 
        $det = "card details";
    @endphp
    <x-include.header />
    {{-- <x-card /> --}}
    <x-card title="Card title 1" subtitle="card subtitle 1" :details=$det class="myclass"/>
    <hr>
    <x-card title="Card title 2" subtitle="card subtitle 2" :details=$det/>
    <hr>
    {{-- <x-alert /> --}}
    {{-- slot and named slot  --}}
    <x-alert>
        <x-slot name="title">Alert title</x-slot>
        <span>This is span</span>
    </x-alert>
    @extends('components.adminlayout')
    @section('banner')
 <h1>Contact Page banner</h1>
 <hr>
@endsection

 <img src="images/mental.png" alt="">
 {{-- <img src={{asset("images/mental.png")}} alt=""> --}}
</body>
</html>