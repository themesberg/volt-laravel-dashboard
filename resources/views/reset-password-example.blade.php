<main>
    <!-- Section -->
    <section class="bg-soft d-flex align-items-center my-5 mt-lg-6 mb-lg-5">
        <div class="container">
            <div class="row justify-content-center form-bg-image">
                <p class="text-center"><a href="{{ route('login') }}" class="text-gray-700"><i class="fas fa-angle-left me-2"></i> Back to log in</a></p>
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                        <h1 class="h3 mb-4">Reset password</h1>
                        <form action="#" method="POST">
                            {{-- <input wire:model="token" type="hidden" name="token" value="..."> --}}
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="email">Your Email</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="example@company.com" id="email" required autofocus>
                                </div>  
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="password">Your Password</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon4"><span class="fas fa-unlock-alt"></span></span>
                                    <input type="password" placeholder="Password" class="form-control" id="password" required>
                                </div>                                
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="password_confirmation">Confirm Password</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon5"><span class="fas fa-unlock-alt"></span></span>
                                    <input type="password" placeholder="Confirm Password" class="form-control" id="password_confirmation" required>
                                </div>  
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-dark">Reset password</button>
                            </div>
                            <!-- End of Form -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>