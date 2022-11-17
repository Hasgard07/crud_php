<?php require_once('view/layout/header.php'); ?>
<link rel="stylesheet" href="./view/css/login.css">
<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="images/draw2.webp" class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form method="POST" action="login.php?m=login">
                    <div class="divider d-flex align-items-center my-4">
                    </div>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="userName" name="userName" class="form-control form-control-lg"
                            placeholder="Ingresa un email valido" />
                        <label class="form-label" for="form3Example3">Usuario</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <input type="password" id="paswordData" name="paswordData" class="form-control form-control-lg"
                            placeholder="Enter password" />
                        <label class="form-label" for="form3Example4">Password</label>
                        <?php if (!empty($message)) {
                            echo "<span>Usuario invalido</span>";
                        }
                        ?>
                    </div>
                    <?php if (!empty($message)) {
                            echo "<div class>";
                            echo "<span class='text-danger fw-bold'>Usuario invalido</span>";
                            echo "</div>";
                        }
                        ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Checkbox -->
                        <div class="form-check mb-0">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                            <label class="form-check-label" for="form2Example3">
                                Recordarme </label>
                        </div>
                        <!--<a href="#!" class="text-body">Olvido password?</a>-->
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" id="buttonIn" name="buttonIn" class="btn btn-primary btn-lg"
                            style="padding-left: 2.5rem; padding-right: 2.5rem;">Ingresar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</div>
</body>
</html>