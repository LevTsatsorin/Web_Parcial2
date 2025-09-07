    <footer class="bg-primary text-white py-4">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <p class="mb-1">Parcial I, Programación Web II</p>
            <p class="mb-0">Realizado por Tsatsorin Lev</p>
          </div>
        </div>
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
      integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK"
      crossorigin="anonymous"
    ></script>

    <script>
      // Airplane progress indicator for carousel
      const carousel = document.getElementById("historyCarousel");
      const airplaneContainer = document.querySelector(
        ".airplane-progress-container"
      );

      if (carousel && airplaneContainer) {
        // Update airplane position on slide change
        carousel.addEventListener("slid.bs.carousel", function (event) {
          const activeIndex = event.to;
          airplaneContainer.setAttribute("data-slide", activeIndex);
        });

        // Set initial position
        airplaneContainer.setAttribute("data-slide", "0");
      }
    </script>
  </body>
</html>
