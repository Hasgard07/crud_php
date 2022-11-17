<?php require_once('view/layout/header.php'); ?>
    <!-- Wrapper container -->
    <div class="container-sm py-4">

        <!-- Bootstrap 5 starter form -->
        <form id="contactForm">

            <!-- Name input -->
            <div class="mb-3">
                <label class="form-label" for="name">Nombre</label>
                <input class="form-control" id="name" type="text" placeholder="Digita tu nombre" />
            </div>

            <!-- Email address input -->
            <div class="mb-3">
                <label class="form-label" for="emailAddress">Email</label>
                <input class="form-control" id="emailAddress" type="email" placeholder="Email" />
            </div>

            <!-- Message input -->
            <div class="mb-3">
                <label class="form-label" for="message">Mensaje</label>
                <textarea class="form-control" id="message" type="text" placeholder="Digita tu mensaje"
                    style="height: 10rem;"></textarea>
            </div>

            <!-- Form submit button -->
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" type="submit">Enviar</button>
            </div>

        </form>

    </div>
</body>

</html>