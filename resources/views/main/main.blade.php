@extends('layouts.mainlayout')


@section('nav')

@endsection


@section('content')
<div class="mainconteneer">
<a class="teacher"><div ><i class="fas fa-user-tie"></i>Nauczyciel</div></a>
<a class="student" href="{{route('main.youngerMain')}}"><div ><i class="fas fa-users"></i>Uczniowie</div></a>
</div>

@endsection