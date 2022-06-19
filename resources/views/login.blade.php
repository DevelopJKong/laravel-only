@extends("layouts.app")

@section('content')
    <h1>login Form</h1>
    <form method="POST" action="login" class="form">
        @csrf
        <div>
            <input type="email" name="email" placeholder="Email">
        </div>
        @error('email')
            <p style="color:red">이메일이 잘못됐습니다</p>
        @enderror
        <div>
            <input type="password" name="password" placeholder="Password"/>
        </div>
        @error('password')
            <p style="color:red">패스워드가 잘못됐습니다</p>
        @enderror
        <button>Submit</button>
    </form>
@endsection
