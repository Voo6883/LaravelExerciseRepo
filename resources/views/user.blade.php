{{-- <x-header data="Users" />

@if($user=="YL Loo")
<h2> Hello {{$user}} </h2>
@elseif($user=="Peter")
<h2> Hi {{$user}} </h2>
@elseif($user=="Nigel")
<h2> Bonjour, {{$user}} </h2>
@else
<h2> Unkown User </h2>
@endif

@include('userInner')

@foreach($users as $user)
<h1> {{$user}} </h1>
@endforeach

<script>
    var data=@json($users);
    console.log(data);
</script>

@csrf --}}

<!-- user.blade.php -->

<x-header data="Users" />

@include('userInner')

@csrf
