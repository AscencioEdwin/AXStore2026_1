<?php
// 1. Definimos el título dinámico antes de cargar el header
include "./app/views/inc/head.php";
// 2. Cargamos la cabecera
include "./app/views/inc/header.php";
?>

<section class="container fade-in" style="margin-top: 120px;">
    <div class="d-flex" style="justify-content: space-between; align-items: center; margin-bottom: 40px;">
        <h2 class="section-title">Categorías Registradas</h2>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCategoria">
            <i class="fas fa-plus"></i> Nueva Categoría
        </button>
    </div>

    <div class="luxury-table-container">
        <table class="luxury-table table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="tablaCategorias">
                <tr>
                    <td style="font-family: 'Playfair Display', serif; font-weight: 600;">Accesorios de Carro</td>
                    <td style="color: var(--text-light);">Pasillo A</td>
                    <td>
                        </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<div class="modal fade" id="modalCategoria" tabindex="-1" aria-labelledby="modalCategoriaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered"> <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCategoriaLabel">Registrar Categoría</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formCategoria">
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descripción</label>
                        <textarea name="ubicacion" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="d-flex justify-content-end gap-2">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar Categoría</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
// 3. Cargamos el pie de página (asegúrate de que aquí se incluya el JS de Bootstrap)
require_once "./app/views/inc/footer.php";
?>