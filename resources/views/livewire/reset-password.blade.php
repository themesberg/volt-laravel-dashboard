<main>
    <title>Volt Laravel Dashboard - Reset Password</title>
    <!-- Section -->
    <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center form-bg-image">
                <p class="text-center"><a href="{{ route('login') }}" class="text-gray-700"><i class="fas fa-angle-left me-2"></i> Back to log in</a></p>
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="bg-white shadow border-0 rounded p-4 p-lg-5 w-100 fmxw-500">
                        <h1 class="h3 mb-4">Reset password</h1>
                        <form wire:submit.prevent="resetPassword" action="#" method="POST">
                            {{-- <input wire:model="token" type="hidden" name="token" value="..."> --}}
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="email">Your Email</label>
                                <div class="input-group">
                                    <input wire:model="email" type="email" class="form-control" placeholder="example@company.com" id="email" required autofocus>
                                </div>  
                                @error('email') <div class="invalid-feedback"> {{ $message }} </div> @enderror 
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="form-group mb-4">
                                <label for="password">Your Password</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon4"><svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg></span>
                                    <input wire:model.lazy="password" type="password" placeholder="Password" class="form-control" id="password" required>
                                </div>  
                                @error('password') <div class="invalid-feedback"> {{ $message }} </div> @enderror 
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="form-group mb-4">
                                <label for="password_confirmation">Confirm Password</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon5"><svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg></span>
                                    <input wire:model.lazy="passwordConfirmation" type="password" placeholder="Confirm Password" class="form-control" id="password_confirmation" required>
                                </div>  
                            </div>
                            <!-- End of Form -->
                            @if($isPasswordChanged)
                                <div class="alert alert-success" role="alert">
                                    Your password has been changed.
                                </div>
                            @endif
                            @if($wrongEmail)
                                <div class="alert alert-danger" role="alert">
                                    Please insert the correct email address.
                                </div>
                            @endif
                            <div class="d-grid">
                                <button type="submit" class="btn btn-gray-800">Reset password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>