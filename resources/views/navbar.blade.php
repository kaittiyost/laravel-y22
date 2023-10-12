<nav class="navbar bg-warning shadow mb-4">
    <div class="container">
      <a class="navbar-brand text-dark logo" style="font-size: 40px" href="#">
        <i class="fas fa-gamepad animate"></i> Computer Departmant</a>
      <div class="ml-auto ">
        @if (session('user'))
            <div class="text-dark">{{session('user')->username}}
                <a type="button" href="{{url('logout')}}" class="btn btn-dark"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </div>
        @endif
    </div>
    </div>
</nav>
