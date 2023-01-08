<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Member Area</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body mx-3">
        <!-- Pills content -->
        <div class="tab-content">
            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
            <form action="{{route('login-success')}}" method="POST">
              @csrf
                <div class="text-center mb-3">
                <p>Sign in with:</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                </button>
        
                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                </button>
        
                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                </button>
        
                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                </button>
                </div>
        
                <p class="text-center">or:</p>
        
                <!-- Email input -->
                <div class="form-outline mb-4">
                <label class="form-label" for="loginName">Email or username</label>
                <input type="email" name="email" id="loginName" class="form-control" />
                </div>
        
                <!-- Password input -->
                <div class="form-outline mb-4">
                <label class="form-label" for="loginPassword">Password</label>
                <input type="password" name="password" id="loginPassword" class="form-control" />
                </div>
        
                <!-- 2 column grid layout -->
                <div class="row mb-4">
                <div class="col-md-6 d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check mb-3 mb-md-0">
                      <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                    </div>
                </div>
        
                <div class="col-md-6 d-flex justify-content-center">
                    <!-- Simple link -->
                    <a href="{{ route('password.request') }}">Forgot password?</a>
                </div>
                </div>
        
                <!-- Submit button -->
                <div class="text-center">
                    <button type="submit" class="w-25 btn btn-primary btn-block mb-4">Sign in</button>
                </div>
        
                <!-- Register buttons -->
                <div class="text-center">
                <p>Not a member? <a href="{{route('register-user')}}">Register</a></p>
                </div>
            </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>