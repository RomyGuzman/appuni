<!-- 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Gestión de Estudiantes - Instituto Superior</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" />
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" />
</head>
<body class="estudiantes-page">
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
                        <a class="nav-link" href="registrarCarrera.html">
                            <i class="fas fa-graduation-cap me-1"></i> Carreras
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categorias.html">
                            <i class="fas fa-list me-1"></i>Categorías
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-dark text-white py-5">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-4">Gestión de Estudiantes</h1>
            <p class="lead">Sistema de administración integral de alumnos</p>
        </div>
    </header>

    <main class="container my-5">
        
        <section class="row justify-content-center mb-5">    
            <div class="col-lg-9">
                <div class="card shadow">
                    <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                        <h2 class="h5 mb-0"><i class="fas fa-user-plus me-2"></i> Registrar Nuevo Estudiante</h2>
                    </div>
                    <div class="card-body">
                        <form id="studentForm">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre Completo</label>
                                <input type="text" class="form-control" id="name" required />
                            </div>
                            <div class="mb-3">
                                <label for="dni" class="form-label">DNI</label>
                                <input type="number" class="form-control" id="dni" required />
                            </div>
                            <div class="mb-3">
                                <label for="age" class="form-label">Edad</label>
                                <input type="number" class="form-control" id="age" required />
                            </div>
                            <div class="mb-3">
                                <label for="career" class="form-label">Carrera</label>
                                <select class="form-select" id="career" required>
                                    <option value="">Seleccione una carrera</option>
                                </select>
                            </div>
                            <div class="d-flex justify-content-end mt-4">
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-save me-1"></i> Registrar Estudiante
                                </button>
                            </div>
                            <div id="validationAlert-studentForm" class="text-danger text-sm mt-2 d-none"></div>
                        </form>
                        <div id="registerResult" class="mt-3"></div>
                    </div>
                </div>
            </div>

    </section>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-9">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card shadow h-100">
                            <div class="card-header bg-info text-white">
                                <h2 class="h5 mb-0"><i class="fas fa-search me-2"></i> Buscar Estudiante por ID</h2>
                            </div>
                            <div class="card-body">
                                <form id="searchStudentForm">
                                    <div class="mb-3">
                                        <label for="searchStudentId" class="form-label">ID del Estudiante</label>
                                        <input type="number" class="form-control" id="searchStudentId" required min="1" />
                                    </div>
                                    <div class="d-flex justify-content-end mt-3">
                                        <button type="submit" class="btn btn-info">
                                            <i class="fas fa-search me-1"></i> Buscar
                                        </button>
                                    </div>
                                    <div id="validationAlert-searchStudentForm" class="text-danger text-sm mt-2 d-none"></div>
                                </form>
                                <div id="studentDetails" class="mt-3 p-3 border rounded d-none">
                                    <p class="mb-1"><strong>ID:</strong> <span id="detailId"></span></p>
                                    <p class="mb-1"><strong>Nombre:</strong> <span id="detailName"></span></p>
                                    <p class="mb-1"><strong>Carrera:</strong> <span id="detailCareer"></span></p>
                                    <p class="mb-0"><strong>Categoría:</strong> <span id="detailCategory"></span></p>
                                    <button id="clearStudentDetails" class="btn btn-sm btn-outline-secondary mt-3"><i class="fas fa-times me-1"></i> Limpiar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card shadow h-100">
                            <div class="card-header bg-primary text-white">
                                <h2 class="h5 mb-0"><i class="fas fa-search me-2"></i> Buscar Estudiante por Carrera</h2>
                            </div>
                            <div class="card-body">
                                <form id="searchStudentByCareerForm">
                                    <div class="mb-3">
                                        <label for="searchCareer" class="form-label">Carrera</label>
                                        <select class="form-select" id="searchCareer" required>
                                            <option value="">Seleccione una carrera</option>
                                        </select>
                                    </div>
                                    <div class="d-flex justify-content-end mt-3">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-search me-1"></i> Buscar
                                        </button>
                                    </div>
                                    <div id="validationAlert-searchStudentByCareerForm" class="text-danger text-sm mt-2 d-none"></div>
                                </form>
                                <div id="studentsByCareerResults" class="row mt-4 g-3"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        <div class="row justify-content-center mt-5">
            <div class="col-9">
                <div class="card shadow">
                    <div class="card-header bg-secondary text-white d-flex justify-content-between align-items-center">
                        <h2 class="h5 mb-0"><i class="fas fa-list me-2"></i> Listado de Estudiantes</h2>
                        <button id="refreshStudentsBtn" class="btn btn-sm btn-light float-end">
                            <i class="fas fa-sync-alt me-1"></i> Recargar Todos
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="studentsTable" class="table table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Carrera</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="studentsTableBody">
                            
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="app.js"></script>
</body>
</html> -->


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Gestión de Estudiantes - Instituto Superior</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="<?= base_url('styles.css') ?>" /> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" />
</head>
<body class="estudiantes-page">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('index') ?>"> <i class="fas fa-university me-2"></i>
                Instituto Superior 57
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url('home/index'); ?>">
                            <i class="fa-solid fa-house"></i> Institucional
                        </a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('registrarCarrera'); ?>"> <i class="fas fa-graduation-cap me-1"></i> Carreras
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('categorias'); ?>"><i class="fas fa-list me-1"></i>Categorías</a>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="bg-dark text-white py-5">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-4">Gestión de Estudiantes</h1>
            <p class="lead">Sistema de administración integral de alumnos</p>
        </div>
    </header>
    <main class="container my-5">
        <section class="row justify-content-center mb-5">    
            <div class="col-lg-9">
                <div class="card shadow">
                    <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                        <h2 class="h5 mb-0"><i class="fas fa-user-plus me-2"></i> Registrar Nuevo Estudiante</h2>
                    </div>
                    <div class="card-body">
                        <form id="studentForm">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre Completo</label>
                                <input type="text" class="form-control" id="name" required />
                            </div>
                            <div class="mb-3">
                                <label for="dni" class="form-label">DNI</label>
                                <input type="number" class="form-control" id="dni" required />
                            </div>
                            <div class="mb-3">
                                <label for="age" class="form-label">Edad</label>
                                <input type="number" class="form-control" id="age" required />
                            </div>
                            <div class="mb-3">
                                <label for="career" class="form-label">Carrera</label>
                                <select class="form-select" id="career" required>
                                    <option value="">Seleccione una carrera</option>
                                </select>
                            </div>
                            <div class="d-flex justify-content-end mt-4">
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-save me-1"></i> Registrar Estudiante
                                </button>
                            </div>
                            <div id="validationAlert-studentForm" class="text-danger text-sm mt-2 d-none"></div>
                        </form>
                        <div id="registerResult" class="mt-3"></div>
                    </div>
                </div>
            </div>
        </section>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-9">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card shadow h-100">
                            <div class="card-header bg-info text-white">
                                <h2 class="h5 mb-0"><i class="fas fa-search me-2"></i> Buscar Estudiante por ID</h2>
                            </div>
                            <div class="card-body">
                                <form id="searchStudentForm">
                                    <div class="mb-3">
                                        <label for="searchStudentId" class="form-label">ID del Estudiante</label>
                                        <input type="number" class="form-control" id="searchStudentId" required min="1" />
                                    </div>
                                    <div class="d-flex justify-content-end mt-3">
                                        <button type="submit" class="btn btn-info">
                                            <i class="fas fa-search me-1"></i> Buscar
                                        </button>
                                    </div>
                                    <div id="validationAlert-searchStudentForm" class="text-danger text-sm mt-2 d-none"></div>
                                </form>
                                <div id="studentDetails" class="mt-3 p-3 border rounded d-none">
                                    <p class="mb-1"><strong>ID:</strong> <span id="detailId"></span></p>
                                    <p class="mb-1"><strong>Nombre:</strong> <span id="detailName"></span></p>
                                    <p class="mb-1"><strong>Carrera:</strong> <span id="detailCareer"></span></p>
                                    <p class="mb-0"><strong>Categoría:</strong> <span id="detailCategory"></span></p>
                                    <button id="clearStudentDetails" class="btn btn-sm btn-outline-secondary mt-3"><i class="fas fa-times me-1"></i> Limpiar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow h-100">
                            <div class="card-header bg-primary text-white">
                                <h2 class="h5 mb-0"><i class="fas fa-search me-2"></i> Buscar Estudiante por Carrera</h2>
                            </div>
                            <div class="card-body">
                                <form id="searchStudentByCareerForm">
                                    <div class="mb-3">
                                        <label for="searchCareer" class="form-label">Carrera</label>
                                        <select class="form-select" id="searchCareer" required>
                                            <option value="">Seleccione una carrera</option>
                                        </select>
                                    </div>
                                    <div class="d-flex justify-content-end mt-3">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-search me-1"></i> Buscar
                                        </button>
                                    </div>
                                    <div id="validationAlert-searchStudentByCareerForm" class="text-danger text-sm mt-2 d-none"></div>
                                </form>
                                <div id="studentsByCareerResults" class="row mt-4 g-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-9">
                <div class="card shadow">
                    <div class="card-header bg-secondary text-white d-flex justify-content-between align-items-center">
                        <h2 class="h5 mb-0"><i class="fas fa-list me-2"></i> Listado de Estudiantes</h2>
                        <button id="refreshStudentsBtn" class="btn btn-sm btn-light float-end">
                            <i class="fas fa-sync-alt me-1"></i> Recargar Todos
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="studentsTable" class="table table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Carrera</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="studentsTableBody">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="<?= base_url('app.js') ?>"></script>
</body>
</html>