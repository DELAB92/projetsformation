    <?php
    require_once __DIR__ ."/lib/article.php";
    require_once __DIR__ . "/templates/header.php";


    ?>

    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="assets/images/logo-tech-trendz.png" class="d-block mx-lg-auto img-fluid" alt="logo tech-trendz" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">ADEL LE ROI DE NOTRE DAME</font>
          </font>
        </h1>
        <p class="lead">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">SI VOUS VOYEZ ADEL VOUS DEVEZ LE SALUEZ. LE RESPECT EST LA BASE DE LA VIE EN SOCIETE.</font>
          </font>
        </p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a href="actualites.php" class="btn btn-primary btn-lg px-4 me-md-2">Voir toutes les actualités</a>
           
          
         
        </div>
      </div>
    </div>

    <div class="row text-center">
    <?php foreach ($articles as $key => $article) {  
        require __DIR__."/templates/article_part.php";
        
      } ?>

    </div>

    <?php
    require_once __DIR__ . "/templates/footer.php";
    ?>