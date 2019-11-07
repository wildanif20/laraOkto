{{-- @extends('') --}}
@include('shared.head_nav')
@section('head')
@if (Sentinel::check())
<li><a class="nav-link active" href="{{url('/')}}">Home</a></li>
<li><a href="{{url('profile')}}">Profile</a></li>
<li><a href="{{url('gallery')}}">Gallery</a></li>
<li><a href="{{url('contact')}}">Contact</a></li>
<li><a href="{{url('logout.session')}}">Logout</a></li>
{{-- <li>{{!! link_to(route('logout'), 'logout') !!}}</li> --}}
{{-- <li><a>Welcome{{!! Sentinel::getUser()->email !!}}</a></li> --}}
@else
<li><a href="{{url('signup')}}">SignUp</a></li>
<li><a href="{{url('login')}}">Login</a></li>
@endif
@endsection