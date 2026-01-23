<!-- Modals -->
<div id="signinModaladd" class="modal-custom">
    <div class="modal-content-custom signup-modern">
        <span class="close-modal">&times;</span>
        <div class="modal-header-modern text-center mb-4">
            <h2 class="fw-bold text-dark-green">Sign Up</h2>
            <p class="text-muted">Create your account</p>
        </div>
        
<form class="modern-form" id="signupForm">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold text-dark-green">Full Name</label>
                    <input type="text" name="full_name" class="form-control-modern" placeholder="John Doe" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold text-dark-green">NIC</label>
                    <input type="text" name="nic" class="form-control-modern" placeholder="123456789V" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold text-dark-green">Phone Number</label>
                    <input type="tel" name="phone" class="form-control-modern" placeholder="+94 7X XXX XXXX" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold text-dark-green">Gender</label>
                    <select name="gender" class="form-control-modern" required>
                        <option value="" disabled selected>Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold text-dark-green">Email</label>
                    <input type="email" name="email" class="form-control-modern" placeholder="email@example.com" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold text-dark-green">Staff ID</label>
                    <input type="text" name="staff_id" class="form-control-modern" placeholder="SID12345" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold text-dark-green">Password</label>
                    <div class="position-relative">
                        <input type="password" name="password" class="form-control-modern" placeholder="Enter Password" id="signupPassword" required style="padding-right: 45px;">
                        <i class="fa-solid fa-eye password-toggle-icon" onclick="togglePassword('signupPassword', this)"></i>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <label class="form-label fw-semibold text-dark-green">Confirm Password</label>
                    <div class="position-relative">
                        <input type="password" name="confirm_password" class="form-control-modern" placeholder="Confirm Password" id="signupConfirmPassword" required style="padding-right: 45px;">
                        <i class="fa-solid fa-eye password-toggle-icon" onclick="togglePassword('signupConfirmPassword', this)"></i>
                    </div>
                </div>
            </div>
            
            <div class="d-flex gap-2 mb-3">
                <button type="submit" class="btn-signin-modern w-100">
                    Register <i class="fa-solid fa-user-plus ms-2"></i>
                </button>
                <button type="reset" class="btn btn-outline-secondary w-100">
                    Clear <i class="fa-solid fa-eraser ms-2"></i>
                </button>
            </div>
            
            <div class="text-center">
                <p class="signup-text">Already have an account? <a href="#" id="openLogin">Login</a></p>
            </div>
        </form>
    </div>
</div>
