@extends('layouts.mainlayout')



@section('nav')
<ul class="menuItem">
    <li><i class="fas fa-calendar-alt"></i>PLAN LEKCJI</li>
    <li> <i class="fas fa-pen"></i> OCENY</li>
    <li> <i class="fas fa-atlas"></i> NOTATKI</li>   
</ul> 

</ul>
<ul class="login">
    @if (Auth::check())
        <li>{{Auth::user()->name}}</li>

    
      <a  href="{{ route('logout') }}"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();"
        {{ __('Logout') }}>
         <li>WYLOGUJ<i class="fas fa-sign-out-alt"></i></li>
        
            
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

    
    @else
    <li>ZALOGUJ<i class="fas fa-sign-in-alt"></i></li>
    
    @endif
</ul>
@endsection



@section('content')

<div class="container">
<div class="board">
    <img src="/images/board.png">
 <div class="menu">
     <div>Plan lekcji</div>
     <div>Oceny</div>
     <div>Notatki</div>
 </div>
</div>
<div class="desk1">
    <img src='/images/svg/desk.svg'>
</div>
<div class="window1">
    <img src='/images/svg/window.svg'>
    
</div>

<div class="clock">
    <img  src='/images/svg/clock-1200.svg'>
    <img  src='/images/svg/clock-1230.svg'>
    <img  src='/images/svg/clock-1330.svg'>
    <img  src='/images/svg/clock-1540.svg'>
    <img  src='/images/svg/clock-1700.svg'>
    <img  src='/images/svg/clock-8000.svg'>
</div>
<div class="desk2">
    <img src='/images/svg/desk.svg'>
</div>
<div class="window2">
    <img src='/images/svg/window.svg'>
</div>

<div class="bell">
    <img src="/images/svg/bell.svg">
</div>
@endsection