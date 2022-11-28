@extends('layout.app')

@section('content')
<form action="{{route('registerUser')}}" method="POST">
    @csrf
<section class="vh-100 gradient-custom">
<style>
    .gradient-custom {
/* fallback for old browsers */
background: #6a11cb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}
</style>
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Register Now</h2>
              <p class="text-white-50 mb-5">Please register yourself for daily updates!</p>
              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typeEmailX">Name</label>
                <input type="text" name="name" id="typeEmailX" class="form-control form-control-lg @error('name') is-invalid @enderror" />
                @error('name')
                <div class="invalid-feedback">
                {{$message}}
                </div>
                @enderror
              </div>

              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typeEmailX">Email</label>
                <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg @error('email') is-invalid @enderror" />
                @error('email')
                <div class="invalid-feedback">
                {{$message}}
                </div>
                @enderror
              </div>

              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typePasswordX">Password</label>
                <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg @error('password') is-invalid @enderror" />
                @error('password')
                <div class="invalid-feedback">
                {{$message}}
                </div>
                @enderror
              </div>

              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

              <button class="btn btn-outline-light btn-lg px-5" type="submit">Register</button>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

            

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
@endsection