export default function Footer(){
    const containerFooter = document.createElement('div');
    containerFooter.innerHTML =
    `
    <!-- Footer -->
        <footer class="text-center text-lg-start bg-body-tertiary text-muted">
    <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
        <span>Conecte-se conosco nas redes sociais:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
    </section>
        <!-- Section: Social media -->

    <!-- Section: Links  -->
        <section class="">
    <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
    <div class="row mt-3">
        <!-- Grid column -->
    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
        <!-- Content -->
        <h6 class="text-uppercase fw-bold mb-4">
        <i class="fas fa-gem me-3"></i> Empresa
        </h6>
        <p>
         <a href="#!" class="text-reset">sobre</a>
        </p>
         <p>
         <a href="#!" class="text-reset">Emprego</a>
        </p>
         <p>
         <a href="#!" class="text-reset">Aplicativo</a>
        </p>
         <p>
         <a href="#!" class="text-reset">Como trabalhamos</a>
        </p>
        
    </div>
        <!-- Grid column -->

        <!-- Grid column -->
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contatos
          </h6>
          <p>
            <a href="#!" class="text-reset">Ajuda</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Empresa</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Afiliados</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Parceiros</a>
          </p>
    </div>
        <!-- Grid column -->

        <!-- Grid column -->
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
    </div>
        <!-- Grid column -->

        <!-- Grid column -->
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> Sorocaba, SP 18075-300, BR</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            OcenaniaHotel@hotmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 15 98832-4576</p>
          <p><i class="fas fa-print me-3"></i> + 15 99721-8909</p>
    </div>
        <!-- Grid column -->
    </div>
      <!-- Grid row -->
    </div>
        </section>
            <!-- Section: Links  -->

        <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
        <!-- Copyright -->
        </footer>
        <!-- Footer -->
    `
        return containerFooter;     
}