<?php if (stripos($isi, 'detail') !== FALSE) { ?>
<?php } else { ?>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-cadetblue">
    <div class="container col-md-6">
      <a class="navbar-brand" href="#">MY FILM</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav">
          <li class="nav-item <?php if ($isi == 'home') { echo 'active'; }; ?>">
            <a class="nav-link" href="<?php echo base_url('home')?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item <?php if ($isi == 'search_film') { echo 'active'; }; ?>">
            <a class="nav-link" id="search-menu" href="<?php echo base_url('search_film')?>">Search Film</a>
          </li>

          <li class="nav-item dropdown <?php if ($isi == 'category') { echo 'active'; }; ?>">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
              Category
            </a>
            <div class="dropdown-menu">
              <?php foreach($dataCategory as $dataCategory) { ?>
                <?php if (stripos($dataCategory['nama_kategori'], 'Movie') !== FALSE){ ?>
                  <a class="dropdown-item text-cadetblue" href="<?php echo base_url('home/category/'.$dataCategory['nama_kategori']) ?>">
                    <?php echo $dataCategory['nama_kategori'] ?>
                  </a>
                <?php } else { ?>
                  <a class="dropdown-item text-orange" href="<?php echo base_url('home/category/'.$dataCategory['nama_kategori']) ?>">
                    <?php echo $dataCategory['nama_kategori'] ?>
                  </a>
                <?php } ?>
              <?php } ?>
            </div>
          </li> 
        </ul>
      </div>
    </div>
  </nav>
<?php } ?>
