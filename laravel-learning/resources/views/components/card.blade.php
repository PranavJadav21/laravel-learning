{{-- <div>
    <h2>Card Title</h2>
    <p>Card Details</p>
</div> --}}
<div>
    <h2>{{$title}}</h2>
    <h4>{{$subtitle}}</h4>
    <p>{{$details}}</p>
</div>
<div>
    <p>{{$addNumber(50)}}</p>
    {{-- <h1 {{$attributes}}>Hello</h1> --}}
    {{-- how to pass default class --}}
    <h1 {{$attributes->merge(['class'=>'dclass'])}}>hello</h1>
</div>