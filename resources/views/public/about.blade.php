<h1>ABOUT {{ $name }}  </h1>

@{{ $noeevaluar }}
<br>
@isset($name)
    <span>si existe la variable nombre</span>
@endisset
<br>

@if(true)

    <a  href='{{ route('about')  }}' > About </a>
@else if(5>2)
    <a> es falso</a>
@endif

<br>

@foreach($numbers as $numero)
    {{ $numero }} <br>
@endforeach


<br>
@php

    $a=5;
    $b=6;
    $c=$a*$b;
    echo "resultado ".$b;

@endphp


<script>
    let numbers=@json($numbers);
    console.log(numbers);
</script>