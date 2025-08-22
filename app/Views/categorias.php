
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Categorías</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- DataTables Bootstrap 5 CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="styles.css">
</head>
<body class="categorias-page">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <i class="fas fa-university me-2"></i>
                Instituto Superior 57
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto">
                     <li class="nav-item">
                        <a class="nav-link active" href="index.html">
                            <i class="fa-solid fa-house"></i> Institucional
                        </a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="estudiantes.html">
                            <i class="fas fa-user-graduate me-1"></i>Estudiantes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registrarCarrera.html">
                            <i class="fas fa-graduation-cap me-1"></i> Carreras
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-dark text-white py-5">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-4">Registro de Categorías</h1>
            <p class="lead">Sistema de gestión académica integral</p>
        </div>
    </header>

<main  class="container my-5">
    <section class="row justify-content-center mb-5">
        <div class="col-lg-9">
            <div class="card shadow">
                <div class="card-header bg-success text-white">
                    <h2 class="h4 mb-0">
                        <i class="fas fa-plus-circle me-2"></i>
                        Nueva Categoría
                    </h2>
                </div>
                <div class="card-body">
                    <form id="categoryForm">
                        <!-- Campo oculto para el ID solo en edición (puede mantenerse por si se edita una categoría) -->
                        <input type="hidden" id="categoryId">

                        <div class="mb-3">
                            <label for="categoryName" class="form-label">Nombre de la Categoría</label>
                            <input type="text" class="form-control" id="categoryName" required>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save me-1"></i> Guardar Categoría
                            </button>
                        </div>
                    </form>
                    <div id="alert" class="alert mt-3" style="display: none;"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Buscar Categoría por ID -->
<section class="row justify-content-center mb-5">
    <div class="col-lg-9">
        <div class="card shadow">
            <div class="card-header bg-info text-white">
                <h2 class="h5 mb-0"><i class="fas fa-search me-2"></i> Buscar Categoría por ID</h2>
            </div>
            <div class="card-body">
                <form id="searchCategoryForm">
                    <div class="mb-3">
                        <label for="searchCategoryId" class="form-label">ID de la Categoría</label>
                        <input type="number" class="form-control" id="searchCategoryId" required min="1" />
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                        <button type="submit" class="btn btn-info">
                            <i class="fas fa-search me-1"></i> Buscar
                        </button>
                    </div>
                </form>
                <div id="categoryDetails" class="mt-3 p-3 border rounded d-none">
                    <p class="mb-1"><strong>ID:</strong> <span id="detailCategoryId"></span></p>
                    <p class="mb-1"><strong>Nombre:</strong> <span id="detailCategoryName"></span></p>
                    <button id="clearCategoryDetails" class="btn btn-sm btn-outline-secondary mt-3">
                        <i class="fas fa-times me-1"></i> Limpiar
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Tabla para mostrar categorías registradas -->
     
    <section class="row justify-content-center">
        <div class="col-lg-9">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h2 class="h4 mb-0">
                        <i class="fas fa-list me-2"></i>
                        Categorías Registradas
                    </h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover" id="categoriesTable">
                            <thead class="table-dark">
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="categoriesTableBody">
                                <!-- Contenido dinámico -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5><i class="fas fa-university me-2"></i>Instituto Superior 57</h5>
                    <p class="mb-0">Formando profesionales desde 1990</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <h5>Contacto</h5>
                    <p class="mb-1"><i class="fas fa-phone me-2"></i> (123) 456-7890</p>
                    <p class="mb-0"><i class="fas fa-envelope me-2"></i> info@instituto.edu</p>
                </div>
            </div>
            <hr class="my-3" />
            <div class="text-center">
                <p class="mb-0">&copy; 2023 Gestión Instituto. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="app.js"></script>
</body>
</html>