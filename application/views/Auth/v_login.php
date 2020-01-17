<div class="mb-5 pb-5">
    <!-- Default form login -->
    <form class="text-center border border-light p-5 col-4 offset-4 mt-5 mb-5" method="post" action="<?= base_url('auth/'); ?>">

    <?php if($this->session->flashdata('alert')): ?>
    <div class="alert-warning p-5 col-12 text-center">
        <strong><?= $this->session->flashdata('alert'); ?></strong>
    </div>
    <?php endif; ?>

        <p class="h4 mb-4">Sign in</p>

        <!-- Email -->
        <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail" name="email">

        <!-- Password -->
        <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" name="password">

        <div class="">
            <div>
                <!-- Remember me -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                    <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                </div>
            </div>
        </div>

        <!-- Sign in button -->
        <button class="btn btn-info my-4" type="submit">Sign in</button>

        <!-- Social login -->
        <p>or sign in with:</p>

        <a type="button" class="btn-sm light-blue-text mx-2">
            <i class="fab fa-facebook"></i>
        </a>
        <a type="button" class="btn-sm light-blue-text mx-2">
            <i class="fab fa-twitter"></i>
        </a>
        <a type="button" class="btn-sm light-blue-text mx-2">
            <i class="fab fa-github"></i>
        </a>

    </form>
    <!-- Default form login -->
</div>