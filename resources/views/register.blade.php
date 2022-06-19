@extends("layouts.app")

@section('content')
    <h1>Register Form</h1>
    <form method="POST" action="register" class="form">
        @csrf
        <div>
            <input type="text" name="name" placeholder="Name"/>
        </div>
        @error('email')
        <p style="color:red">성명이 잘못됐습니다</p>
        @enderror
        <div>
            <input type="password" name="password" placeholder="Password"/>
        </div>
        @error('email')
        <p style="color:red">패스워드가 잘못됐습니다</p>
        @enderror
        <div>
            <input type="password" name="password_confirmation" placeholder="Confirmation Password"/>
        </div>
        @error('email')
        <p style="color:red">패드워드가 일치 하지 않습니다</p>
        @enderror
        <div>
            <input type="email" name="email" placeholder="Email">
        </div>
        @error('email')
        <p style="color:red">이메일이 잘못됐습니다</p>
        @enderror
        <button>Submit</button>
    </form>
@endsection
