<?php
$currentPage = "innovation";
include_once('../components/header.php');
?>

    <main class="pt-header-offset">
      <!-- HERO SECTION -->
      <section id="innovation-hero" class="hero-section">
        <div class="container py-5">
          <div class="row align-items-center min-vh-60">
            <div class="col-lg-6 col-md-12 order-2 order-lg-1">
              <div class="hero-content py-4">
                <h1 class="display-4 fw-bold text-primary mb-4">
                  Innovación y Tecnología Boeing
                </h1>
                <p class="lead text-dark mb-4">
                  Desde materiales compuestos hasta inteligencia artificial,
                  <span class="fw-bold text-primary">Boeing</span> está
                  redefiniendo el futuro de la aviación con tecnologías
                  revolucionarias que hacen volar más seguro, eficiente y
                  sostenible.
                </p>
                <div class="d-flex gap-3 mt-4">
                  <a href="#emerging-tech" class="btn btn-boeing">
                    <i class="bi bi-rocket-takeoff me-2"></i>Tecnologías
                  </a>
                  <a href="#sustainability" class="btn btn-outline-primary">
                    <i class="bi bi-leaf me-2"></i>Sostenibilidad
                  </a>
                </div>
                <div class="mt-4 d-flex align-items-center gap-4">
                  <div class="text-center">
                    <div class="h3 text-primary fw-bold mb-0">50%</div>
                    <small class="text-muted">Menos Combustible</small>
                  </div>
                  <div class="text-center">
                    <div class="h3 text-primary fw-bold mb-0">20%</div>
                    <small class="text-muted">Menos Emisiones</small>
                  </div>
                  <div class="text-center">
                    <div class="h3 text-primary fw-bold mb-0">AI</div>
                    <small class="text-muted">Tecnología Avanzada</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 order-1 order-lg-2">
              <div class="hero-image py-4">
                <img
                  src="../assets/innovation_logo.jpg"
                  alt="Innovación"
                  class="img-fluid rounded shadow-lg"
                />
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- TECNOLOGÍAS EMERGENTES -->
      <section id="emerging-tech" class="bg-light">
        <div class="container py-5">
          <h2 class="text-center mb-5">Tecnologías Emergentes</h2>
          <div class="row g-4">
            <div class="col-lg-4 col-md-6">
              <div class="card border-0 shadow h-100">
                <div class="card-body text-center">
                  <div class="mb-3">
                    <i
                      class="bi bi-cpu text-primary"
                      style="font-size: 3rem"
                    ></i>
                  </div>
                  <h4 class="card-title text-primary">
                    Inteligencia Artificial
                  </h4>
                  <p class="card-text">
                    Boeing está implementando IA para optimizar rutas de vuelo,
                    mantenimiento predictivo y sistemas de navegación autónoma.
                    Los algoritmos de aprendizaje automático mejoran la
                    eficiencia operacional y reducen costos.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card border-0 shadow h-100">
                <div class="card-body text-center">
                  <div class="mb-3">
                    <i
                      class="bi bi-lightning-charge text-primary"
                      style="font-size: 3rem"
                    ></i>
                  </div>
                  <h4 class="card-title text-primary">Propulsión Eléctrica</h4>
                  <p class="card-text">
                    Desarrollo de sistemas de propulsión híbrida y totalmente
                    eléctrica para reducir emisiones. Boeing trabaja en baterías
                    de alta densidad energética y motores eléctricos para vuelos
                    regionales sostenibles.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card border-0 shadow h-100">
                <div class="card-body text-center">
                  <div class="mb-3">
                    <i
                      class="bi bi-gear text-primary"
                      style="font-size: 3rem"
                    ></i>
                  </div>
                  <h4 class="card-title text-primary">Materiales Avanzados</h4>
                  <p class="card-text">
                    Innovación en fibras de carbono, aleaciones ultraligeras y
                    nanomateriales. Estos materiales compuestos reducen el peso
                    estructural hasta un 20% manteniendo la máxima resistencia.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card border-0 shadow h-100">
                <div class="card-body text-center">
                  <div class="mb-3">
                    <i
                      class="bi bi-cloud text-primary"
                      style="font-size: 3rem"
                    ></i>
                  </div>
                  <h4 class="card-title text-primary">
                    Computación en la Nube
                  </h4>
                  <p class="card-text">
                    Sistemas de gestión de datos en tiempo real para análisis de
                    vuelo, mantenimiento remoto y conectividad global. La nube
                    permite operaciones más eficientes y seguras.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card border-0 shadow h-100">
                <div class="card-body text-center">
                  <div class="mb-3">
                    <i
                      class="bi bi-eye text-primary"
                      style="font-size: 3rem"
                    ></i>
                  </div>
                  <h4 class="card-title text-primary">Realidad Aumentada</h4>
                  <p class="card-text">
                    Herramientas de AR para mantenimiento, entrenamiento de
                    pilotos y asistencia en fabricación. Los técnicos pueden
                    visualizar instrucciones superpuestas en componentes reales.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card border-0 shadow h-100">
                <div class="card-body text-center">
                  <div class="mb-3">
                    <i
                      class="bi bi-shield-check text-primary"
                      style="font-size: 3rem"
                    ></i>
                  </div>
                  <h4 class="card-title text-primary">Ciberseguridad</h4>
                  <p class="card-text">
                    Sistemas avanzados de protección contra amenazas
                    cibernéticas en aviación. Protección de datos críticos de
                    vuelo y sistemas de navegación contra ataques maliciosos.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- SOSTENIBILIDAD -->
      <section id="sustainability" class="bg-white">
        <div class="container py-5">
          <div class="text-center mb-5">
            <h2 class="section-title">Compromiso con la Sostenibilidad</h2>
            <p class="lead text-muted">
              Construyendo un futuro más verde para la aviación
            </p>
          </div>

          <div class="row align-items-center mb-5">
            <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
              <div class="position-relative">
                <img
                  src="../assets/boeing_green.webp"
                  alt="Boeing sostenible"
                  class="img-fluid rounded shadow-lg"
                />
                <div class="position-absolute top-0 start-0 m-3">
                  <span class="badge bg-success px-3 py-2">
                    <i class="bi bi-leaf me-1"></i>Eco-Friendly
                  </span>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="sustainability-content">
                <div class="d-flex align-items-center mb-3">
                  <div class="icon-circle bg-primary text-white me-3">
                    <i class="bi bi-fuel-pump"></i>
                  </div>
                  <h3 class="text-primary mb-0">Combustibles Sostenibles</h3>
                </div>
                <p class="mb-4 lead">
                  Boeing está desarrollando y certificando combustibles de
                  aviación sostenibles (SAF) que pueden reducir las emisiones de
                  carbono hasta en un 80% comparado con combustibles fósiles
                  tradicionales.
                </p>
                <div class="row g-3">
                  <div class="col-md-6">
                    <div class="feature-item p-3 bg-light rounded">
                      <div class="d-flex align-items-center">
                        <i
                          class="bi bi-check-circle-fill text-success me-2"
                        ></i>
                        <span class="fw-medium">80% menos CO₂</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="feature-item p-3 bg-light rounded">
                      <div class="d-flex align-items-center">
                        <i
                          class="bi bi-check-circle-fill text-success me-2"
                        ></i>
                        <span class="fw-medium">Motores compatibles</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="feature-item p-3 bg-light rounded">
                      <div class="d-flex align-items-center">
                        <i
                          class="bi bi-check-circle-fill text-success me-2"
                        ></i>
                        <span class="fw-medium">Residuos orgánicos</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="feature-item p-3 bg-light rounded">
                      <div class="d-flex align-items-center">
                        <i
                          class="bi bi-check-circle-fill text-success me-2"
                        ></i>
                        <span class="fw-medium">Certificación global</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row g-4">
            <div class="col-lg-4 col-12">
              <div class="card border-0 shadow h-100 sustainability-card">
                <div class="card-body text-center p-4">
                  <div class="sustainability-icon mb-4">
                    <div
                      class="icon-circle-large bg-gradient-primary text-white mx-auto"
                    >
                      <i class="bi bi-bullseye"></i>
                    </div>
                  </div>
                  <h5 class="card-title text-primary mb-3">
                    Meta Cero Emisiones
                  </h5>
                  <p class="card-text">
                    Boeing se ha comprometido a alcanzar emisiones netas cero
                    para 2050, invirtiendo en tecnologías limpias y procesos de
                    manufactura sostenibles.
                  </p>
                  <div class="mt-3">
                    <span class="badge bg-success px-3 py-2"
                      >2050 Net Zero</span
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-12">
              <div class="card border-0 shadow h-100 sustainability-card">
                <div class="card-body text-center p-4">
                  <div class="sustainability-icon mb-4">
                    <div
                      class="icon-circle-large bg-gradient-success text-white mx-auto"
                    >
                      <i class="bi bi-arrow-repeat"></i>
                    </div>
                  </div>
                  <h5 class="card-title text-primary mb-3">
                    Economía Circular
                  </h5>
                  <p class="card-text">
                    Implementación de procesos de reciclaje de materiales
                    aeronáuticos, reutilización de componentes y reducción de
                    residuos en la fabricación.
                  </p>
                  <div class="mt-3">
                    <span class="badge bg-info px-3 py-2">100% Reciclable</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-12">
              <div class="card border-0 shadow h-100 sustainability-card">
                <div class="card-body text-center p-4">
                  <div class="sustainability-icon mb-4">
                    <div
                      class="icon-circle-large bg-gradient-warning text-white mx-auto"
                    >
                      <i class="bi bi-lightning-charge"></i>
                    </div>
                  </div>
                  <h5 class="card-title text-primary mb-3">
                    Energías Renovables
                  </h5>
                  <p class="card-text">
                    Comprometida con la transición hacia energías renovables en
                    todas las instalaciones de producción, con el objetivo de
                    ser 100% renovable para 2030.
                  </p>
                  <div class="mt-3">
                    <span class="badge bg-warning px-3 py-2">2030 Goal</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- PROYECTOS FUTUROS -->
      <section id="future-projects" class="bg-light">
        <div class="container py-5">
          <div class="text-center mb-5">
            <h2 class="section-title">Proyectos del Futuro</h2>
            <p class="lead text-muted">
              Innovaciones que transformarán la aviación del mañana
            </p>
          </div>
          <div class="row g-4">
            <div class="col-lg-6 col-md-12">
              <article class="card border-0 shadow h-100 future-card">
                <div class="card-body p-4">
                  <div class="d-flex align-items-center mb-3">
                    <div class="icon-circle bg-primary text-white me-3">
                      <i class="bi bi-airplane"></i>
                    </div>
                    <h3 class="card-title text-primary mb-0">
                      Aviones Supersónicos Comerciales
                    </h3>
                  </div>
                  <p class="card-text text-muted mb-4">
                    Boeing está desarrollando la próxima generación de aviones
                    supersónicos comerciales que reducirán los tiempos de vuelo
                    transcontinentales a la mitad, utilizando tecnologías de
                    reducción de ruido sónico.
                  </p>
                  <div class="row g-2">
                    <div class="col-6">
                      <div class="future-spec p-2 bg-white rounded">
                        <small class="text-muted d-block">Velocidad</small>
                        <strong class="text-primary">Mach 1.7</strong>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="future-spec p-2 bg-white rounded">
                        <small class="text-muted d-block">Capacidad</small>
                        <strong class="text-primary">250-300 pax</strong>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="future-spec p-2 bg-white rounded">
                        <small class="text-muted d-block">Alcance</small>
                        <strong class="text-primary">8,000 km</strong>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="future-spec p-2 bg-white rounded">
                        <small class="text-muted d-block">Lanzamiento</small>
                        <strong class="text-primary">2035</strong>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-lg-6 col-md-12">
              <article class="card border-0 shadow h-100 future-card">
                <div class="card-body p-4">
                  <div class="d-flex align-items-center mb-3">
                    <div class="icon-circle bg-success text-white me-3">
                      <i class="bi bi-buildings"></i>
                    </div>
                    <h3 class="card-title text-primary mb-0">
                      Taxi Aéreo Autónomo
                    </h3>
                  </div>
                  <p class="card-text text-muted mb-4">
                    Desarrollo de vehículos aéreos urbanos eléctricos y
                    autónomos para transporte de pasajeros en ciudades,
                    reduciendo la congestión urbana y ofreciendo una nueva
                    modalidad de transporte.
                  </p>
                  <div class="row g-2">
                    <div class="col-6">
                      <div class="future-spec p-2 bg-white rounded">
                        <small class="text-muted d-block">Autonomía</small>
                        <strong class="text-success">100 km</strong>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="future-spec p-2 bg-white rounded">
                        <small class="text-muted d-block">Pasajeros</small>
                        <strong class="text-success">2-4 personas</strong>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="future-spec p-2 bg-white rounded">
                        <small class="text-muted d-block">Altitud</small>
                        <strong class="text-success">150-300 m</strong>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="future-spec p-2 bg-white rounded">
                        <small class="text-muted d-block">Estado</small>
                        <strong class="text-success">En pruebas</strong>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-lg-6 col-md-12">
              <article class="card border-0 shadow h-100 future-card">
                <div class="card-body p-4">
                  <div class="d-flex align-items-center mb-3">
                    <div class="icon-circle bg-warning text-white me-3">
                      <i class="bi bi-rocket"></i>
                    </div>
                    <h3 class="card-title text-primary mb-0">
                      Exploración Espacial
                    </h3>
                  </div>
                  <p class="card-text text-muted mb-4">
                    Boeing continúa su legado espacial con el desarrollo de
                    naves para misiones a la Luna y Marte, incluyendo el sistema
                    SLS (Space Launch System) para la NASA.
                  </p>
                  <div class="row g-2">
                    <div class="col-6">
                      <div class="future-spec p-2 bg-white rounded">
                        <small class="text-muted d-block">Artemis</small>
                        <strong class="text-warning">Luna 2026</strong>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="future-spec p-2 bg-white rounded">
                        <small class="text-muted d-block">Starliner</small>
                        <strong class="text-warning">ISS Crew</strong>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="future-spec p-2 bg-white rounded">
                        <small class="text-muted d-block">Gateway</small>
                        <strong class="text-warning">Estación lunar</strong>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="future-spec p-2 bg-white rounded">
                        <small class="text-muted d-block">Mars</small>
                        <strong class="text-warning">2030s</strong>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-lg-6 col-md-12">
              <article class="card border-0 shadow h-100 future-card">
                <div class="card-body p-4">
                  <div class="d-flex align-items-center mb-3">
                    <div class="icon-circle bg-info text-white me-3">
                      <i class="bi bi-robot"></i>
                    </div>
                    <h3 class="card-title text-primary mb-0">
                      Manufactura Digital
                    </h3>
                  </div>
                  <p class="card-text text-muted mb-4">
                    Implementación de fábricas completamente digitalizadas con
                    robots colaborativos, impresión 3D industrial y gemelos
                    digitales para optimizar la producción aeronáutica.
                  </p>
                  <div class="row g-2">
                    <div class="col-6">
                      <div class="future-spec p-2 bg-white rounded">
                        <small class="text-muted d-block">Robots</small>
                        <strong class="text-info">500+ unidades</strong>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="future-spec p-2 bg-white rounded">
                        <small class="text-muted d-block">Impresión 3D</small>
                        <strong class="text-info">Críticos</strong>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="future-spec p-2 bg-white rounded">
                        <small class="text-muted d-block">Gemelos</small>
                        <strong class="text-info">Completos</strong>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="future-spec p-2 bg-white rounded">
                        <small class="text-muted d-block">Mejora</small>
                        <strong class="text-info">+30% velocidad</strong>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php include_once('../components/footer.php'); ?>
