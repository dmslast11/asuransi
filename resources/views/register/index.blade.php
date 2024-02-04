@extends ('includes.master')

@section('content')

<div class="wrapper vh-100">
    <div class="row align-items-center h-100">
        <form action="{{route('register_proses')}}" method="post" class="col-lg-6 col-md-8 col-10 mx-auto">
          {{ csrf_field() }}
            <div class="mx-auto text-center my-4">
                <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="">
                    <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120"
                        xml:space="preserve">
                        <g>
                            <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                            <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                            <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                        </g>
                    </svg>
                </a>
                <h2 class="my-3">Register</h2>
            </div>
            <div class="form-group">
                <label for="fullname">Fullname</label>
                <input type="text" class="form-control" id="fullname" name="fullname">
            </div>
            <div class="form-group">
                <label for="level">Level</label>
                <select class="form-control" id="level" name="level">
                    <option value="admin">admin</option>
                    <option value="siswa">siswa</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
            <div class="form-group">
                <label for="nis">NIS</label>
                <input type="text" class="form-control" id="nis" name="nis">
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" class="form-control" id="inputPassword" name="password">
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
            <p class="mt-5 mb-3 text-muted text-center">© 2020</p>
        </form>
    </div>
</div>
@endsection
