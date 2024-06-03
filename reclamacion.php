<?php require_once './pagina/cabecera.php'; ?>
<!-- Formulario -->
<div class="row bg-secondary pt-5 pb-5 ">
    <div class="row justify-content-center">
        <div class="formulario w-50 p-4 rounded">
            <div class="row">
                <form action="" method="POST" class="p-4">
                    <div class="bg-light rounded fondo-title fondo-title-1 text-center">
                        <p class="text-capitalize fw-bold fs-5">datos personales</p>
                    </div>
                    <div class="mb-3">
                        <label for="nombreApellido" class="form-label text-capitalize text-light">nombres y apellidos</label>
                        <input type="text" class="form-control" id="nombreApellido" aria-describedby="emailHelp" placeholder="Ingrese su nombre aqui" required>
                    </div>
                    <div class="mb-3">
                        <label for="direccion" class="form-label text-capitalize text-light">correo</label>
                        <input type="text" class="form-control" id="direccion" placeholder="Ingrese su correo aqui" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-capitalize text-light">telefono</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su telefono aqui" required>
                    </div>

                    <div class="d-flex">
                        <div class="form-check m-3">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label text-light" for="flexRadioDefault1">
                                Hombre
                            </label>
                        </div>
                        <div class="form-check m-3">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label text-light" for="flexRadioDefault2">
                                Mujer
                            </label>
                        </div>
                        <div class="form-check m-3">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label text-light" for="flexRadioDefault2">
                                Otro
                            </label>
                        </div>
                    </div>

                    <div class="bg-light rounded fondo-title fondo-title-2 text-center mt-4">
                        <p class="text-capitalize fw-bold fs-5">informacion adicional</p>
                    </div>

                    <div class="form-group d-flex mt-4 mb-3">
                        <label for="area " class="text-light text-capitalize m-3">asunto</label>
                        <textarea class="form-control txt-area" id="area" rows="3" placeholder="Asunto"></textarea>
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-capitalize text-light">n° comprobante </label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su telefono aqui" required>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-lg btn-success text-capitalize ">enviar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<?php require_once './pagina/footer.php'; ?>
