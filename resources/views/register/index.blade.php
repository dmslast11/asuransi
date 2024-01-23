@extends ('includes.master')

@section('content')

<section class="section">
          <div class="section-header">
            <h1>Register</h1>    
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Register</h4>
                  </div>
                  <div class="card-body">
                  <form action="/register" method="POST">
    @csrf
    <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Username</label>
                      <div class="col-sm-12 col-md-7">
                  
                      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Username" required>
                      </div>
                    </div>
    @error('name')
    <div class="invalid-feedback">
        {{$message}}
    </div>
        @enderror
                    </div>

                     <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                      <div class="col-sm-12 col-md-7">
                  
                      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" required>
                      </div>
                    </div>
    @error('email')
    <div class="invalid-feedback">
        {{$message}}
    </div>
        @enderror
</div>


                    <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password</label>
                      <div class="col-sm-12 col-md-7">
                  
                      <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
                      </div>
                    </div>
    @error('password')
    <div class="invalid-feedback">
        {{$message}}
    </div>
        @enderror
                    </div>

                   

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                      <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                      </div>
                      
          </div>
        </section>   
           </form>                 
        </div>
    </div>  
@endsection