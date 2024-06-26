function createMenu() {
    var menu = `
    <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-custom">
    <div class="container">
    <a class="navbar-brand bg-danger grow-on-hover" href="index.html" style="padding-left:20px; padding-right:20px; font-weight: 800; color:rgb(255, 255, 255);">  REASHI EDITS
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active grow-on-hover">
          <a class="nav-link" href="#">Anasayfa</a>
        </li>
        <li class="nav-item grow-on-hover">
          <a class="nav-link" href="hakkimda.html">Hakkımda</a>
        </li>
        <li class="nav-item grow-on-hover">
          <a class="nav-link" href="hizmetler.html">Hizmetlerim</a>
        </li>
        <li class="nav-item grow-on-hover">
          <a class="nav-link" href="İletişim.html">İletişim</a>
        </li>
        <li class="nav-item grow-on-hover">
          <a class="nav-link" href="https://www.youtube.com/@reashi_tv" target="_blank">Youtube</a>
        </li>
      </ul>
    </div>
  </div>
  </nav>
  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    `;
    document.getElementById("menu").innerHTML = menu;
  }
  
  