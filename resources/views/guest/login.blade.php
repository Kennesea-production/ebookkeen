@extends('layout.guest')
@section('content')


<div class="parent">
    <div class="wrapperr">
        <div class="leftwrapper">
            <img style="height:400px;" src="{{ asset('assets/img/bookstack.jpg') }}" alt="">
        </div>
        <div class="rightwrapper">
            <h3>Login</h3>
            <div class="form">
                <form method="POST" action="{{ route('auth') }}">
                    @csrf
                    <label class="label">Email</label>
                    <input class="form-control" type="email" name="email">

                    <label class="label">Password</label>
                    <input class="form-control" type="password" name="password">

                    <div class="buttonsub">
                         <a href="{{ url()->previous() }}" style="padding-right: 10px"><button type="button" class="btn" ">back</button></a>
                         <button type="submit" class="btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection