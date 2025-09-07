<?php
$currentPage = "contacto";

date_default_timezone_set('America/Argentina/Buenos_Aires');

$formData = array();
$uploadedFile = null;

// Procesar los datos del formulario enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formData = array(
        'nombre' => htmlspecialchars($_POST['firstName'] ?? ''),
        'apellido' => htmlspecialchars($_POST['lastName'] ?? ''),
        'email' => htmlspecialchars($_POST['email'] ?? ''),
        'telefono' => htmlspecialchars($_POST['phone'] ?? ''),
        'empresa' => htmlspecialchars($_POST['company'] ?? ''),
        'cargo' => htmlspecialchars($_POST['position'] ?? ''),
        'asunto' => htmlspecialchars($_POST['subject'] ?? ''),
        'mensaje' => htmlspecialchars($_POST['message'] ?? ''),
        'fecha' => date('d/m/Y H:i:s')
    );

    // Procesar archivo subido
    if (isset($_FILES['attachment'])) {
        $uploadDir = '../archivos/';

        // Obtener extensión del archivo
        $fileExtension = pathinfo($_FILES['attachment']['name'], PATHINFO_EXTENSION);

        // Crear nombre con timestamp
        $fileName = time() . '.' . $fileExtension;
        $uploadPath = $uploadDir . $fileName;

        // Mover archivo subido
        if (move_uploaded_file($_FILES['attachment']['tmp_name'], $uploadPath)) {
            $uploadedFile = array(
                'name' => $_FILES['attachment']['name'],
                'path' => $fileName,
                'size' => $_FILES['attachment']['size'],
                'type' => $_FILES['attachment']['type']
            );
        }
    }
} else {
    // Si acceden directamente sin enviar formulario, redirigir a contacto
    header('Location: contacto.php');
    exit();
}

include_once('../components/header.php');
?>

<main class="pt-header-offset">
    <section class="hero-section hero-section-compact bg-success text-white">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <i class="bi bi-check-circle display-1 mb-4"></i>
                    <h1 class="display-4 fw-bold mb-4">¡Gracias por contactarnos!</h1>
                    <p class="lead mb-4">Hemos recibido tu mensaje correctamente. Nuestro equipo se pondrá en contacto contigo pronto.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-0 shadow">
                        <div class="card-header bg-primary text-white">
                            <h3 class="mb-0"><i class="bi bi-file-earmark-text me-2"></i>Resumen de tu consulta - <?php echo $formData['fecha']; ?></h3>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <strong>Nombre completo:</strong><br>
                                    <span class="text-muted"><?php echo $formData['nombre'] . ' ' . $formData['apellido']; ?></span>
                                </div>
                                <div class="col-md-6">
                                    <strong>Email:</strong><br>
                                    <span class="text-muted"><?php echo $formData['email']; ?></span>
                                </div>
                                <?php if (!empty($formData['telefono'])): ?>
                                    <div class="col-md-6">
                                        <strong>Teléfono:</strong><br>
                                        <span class="text-muted"><?php echo $formData['telefono']; ?></span>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($formData['empresa'])): ?>
                                    <div class="col-md-6">
                                        <strong>Empresa:</strong><br>
                                        <span class="text-muted"><?php echo $formData['empresa']; ?></span>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($formData['cargo'])): ?>
                                    <div class="col-md-6">
                                        <strong>Cargo:</strong><br>
                                        <span class="text-muted"><?php echo $formData['cargo']; ?></span>
                                    </div>
                                <?php endif; ?>
                                <div class="col-md-6">
                                    <strong>Asunto:</strong><br>
                                    <span class="text-muted"><?php echo $formData['asunto']; ?></span>
                                </div>
                                <div class="col-12">
                                    <strong>Mensaje:</strong><br>
                                    <div class="bg-light p-3 rounded mt-2">
                                        <span class="text-muted"><?php echo nl2br($formData['mensaje']); ?></span>
                                    </div>
                                </div>
                                <?php if ($uploadedFile): ?>
                                    <div class="col-12">
                                        <strong>Archivo adjunto:</strong><br>
                                        <div class="card mt-2">
                                            <div class="card-body">
                                                <h6 class="card-title">
                                                    <i class="bi bi-paperclip me-2"></i><?php echo htmlspecialchars($uploadedFile['name']); ?>
                                                </h6>
                                                <p class="card-text">
                                                    <small class="text-muted">
                                                        Tamaño: <?php echo number_format($uploadedFile['size'] / 1024, 2); ?> KB |
                                                        Tipo: <?php echo htmlspecialchars($uploadedFile['type']); ?>
                                                    </small>
                                                </p>
                                                <div class="mt-3">
                                                    <img src="../archivos/<?php echo htmlspecialchars($uploadedFile['path']); ?>"
                                                        alt="Archivo adjunto"
                                                        class="img-fluid rounded w-100"
                                                        style="max-height: 500px; object-fit: contain;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="text-center mt-4">
                                <a href="contacto.php" class="btn btn-primary rounded-pill me-3 mb-2">
                                    <i class="bi bi-envelope me-2"></i>Enviar otra consulta
                                </a>
                                <a href="../index.php" class="btn btn-outline-primary rounded-pill mb-2">
                                    <i class="bi bi-house me-2"></i>Volver al inicio
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    // Mostrar galería de archivos subidos anteriormente
    $uploadDir = '../archivos/';
    $uploadedFiles = array();


    $files = scandir($uploadDir);
    foreach ($files as $file) {
        if (is_file($uploadDir . $file)) {
            $filePath = $uploadDir . $file;
            
            $uploadedFiles[] = array(
                'name' => $file,
                'size' => filesize($filePath),
                'date' => filemtime($filePath)
            );
        }
    }

    // Ordenar por fecha (más recientes primero)
    usort($uploadedFiles, function ($a, $b) {
        return $b['date'] - $a['date'];
    });

    ?>

    <?php if (!empty($uploadedFiles)): ?>
        <section class="bg-white">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="text-center mb-5">
                            <h2 class="display-5 fw-bold text-primary mb-3">
                                <i class="bi bi-images me-2"></i>Galería de Archivos Subidos
                            </h2>
                            <p class="lead text-muted">Archivos enviados previamente por usuarios</p>
                        </div>

                        <div class="row g-4">
                            <?php foreach ($uploadedFiles as $index => $file): ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card border-0 shadow-sm h-100">
                                        <div class="position-relative overflow-hidden" style="height: 200px;">
                                            <img src="../archivos/<?php echo htmlspecialchars($file['name']); ?>"
                                                alt="Archivo subido"
                                                class="w-100 h-100"
                                                style="object-fit: cover; cursor: pointer;"
                                                data-bs-toggle="modal"
                                                data-bs-target="#imageModal<?php echo $index; ?>">
                                            <div class="position-absolute top-0 end-0 p-2">
                                                <span class="badge bg-primary rounded-pill">
                                                    <?php echo number_format($file['size'] / 1024, 1); ?> KB
                                                </span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-title text-truncate">
                                                <i class="bi bi-file-image me-2"></i><?php echo htmlspecialchars($file['name']); ?>
                                            </h6>
                                            <p class="card-text">
                                                <small class="text-muted">
                                                    <i class="bi bi-calendar3 me-1"></i>
                                                    <?php echo date('d/m/Y H:i', $file['date']); ?>
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal para imagen ampliada -->
                                <div class="modal fade" id="imageModal<?php echo $index; ?>" tabindex="-1">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title"><?php echo htmlspecialchars($file['name']); ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <img src="../archivos/<?php echo htmlspecialchars($file['name']); ?>"
                                                    alt="Archivo subido"
                                                    class="img-fluid rounded">
                                            </div>
                                            <div class="modal-footer">
                                                <p class="text-muted mb-0">
                                                    Tamaño: <?php echo number_format($file['size'] / 1024, 2); ?> KB |
                                                    Subido: <?php echo date('d/m/Y H:i:s', $file['date']); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
</main>

<?php include_once('../components/footer.php'); ?>