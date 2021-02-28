@extends('layouts.mainlayout')


@section('nav')

@endsection


@section('content')
@if(session()->has('message'))

<div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{session()->get('message')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

<div class="students_links">
<a class="studentY" href="{{route('youngerMain')}}"><div ><i class="fas fa-dice-one"></i>klasa I-III</div></a>
<a class="studentO" href="{{route('olderMain')}}"><div><i class="fas fa-dice-four"></i>klasa IV-VIII</div></a>
</div>

<div class="mainconteneer">
<a class="teacher"><div ><i class="fas fa-user-tie"></i>Nauczyciel</div></a>
<div class="student"><div ><i class="fas fa-users"></i>Uczniowie</div></div>
</div>



@endsection