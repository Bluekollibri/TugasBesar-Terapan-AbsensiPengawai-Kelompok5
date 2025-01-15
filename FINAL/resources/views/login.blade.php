<div class="box">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <span class="borderLine"></span>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <h2>Log in</h2>
        <div class="inputBox">
            <input type="text" name="username" required>
            <span>Username</span>
            <i></i>
        </div>
        <div class="inputBox">
            <input type="password" name="password" required>
            <span>Password</span>
            <i></i>
        </div>
        <div class="links">
            <!-- You can add forgot password or registration links here -->
        </div>
        <input type="submit" id="submit" value="Login">
    </form>
</div>
