<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/common-css/styles.css')?>">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <style>
    .form-holder{
        width: 70%;
        margin: auto;

    }
    .active {
      border-bottom: 2px solid #1F43A7;
    }
    .nav-link {
      color: black;
      font-size: 16px;
      font-family: roboto;
    }
        /* .preview{
            width: 4em;
            height: 4em;
        }
        .preview img {
            height: 80%;
            width: 80%;
            margin-top: .5em;
        } */
    </style>
    <title>Document</title>
</head>
<body>
      <header>

    <nav class="navbar navbar-light  shadow-sm bg-body rounded ">
        <div class="d-flex justify-content-around w-100">
        <div class="logo">
            <a href="#" class="navbar-brand">
            <img src="<?php echo base_url('/assets/images/iconfinder_1851816_agent_exhibition_gallery_model_property_icon_512px.png')?>" class="logo" width="30">
            co-exhi
            </a>
        </div>
        <div class="d-flex flex-row" id="navBar">
        
             <div>
                  <a class="nav-link text-dark" aria-current="page" href="dashboard"><i class="fas fa-list-alt"></i> &nbsp;    Dashboard</a>
             </div>
            <div>
                <a class="nav-link  text-dark " href="discover"> <i class="fas fa-search-location"></i> &nbsp;Discover</a>

            </div>
            <div> 

                <a class="nav-link  text-dark " href="#">   <i class="fas fa-fire"></i> &nbsp; Trending</a>
            </div>
            <div>

                <a class="nav-link  text-dark " href="#" tabindex="-1"> <i class="fas fa-cogs"></i>  &nbsp;Settings</a>
            </div>
         

        </div>
        <div class="buttons">
            <button class="btn btn-info text-white">Exhibit</button>
            <div></div>
        </div>
        </div>

      
</nav>
    </header>

    <div class="content d-flex bg-body col-sm-12">

  <div class=" p-5 col-sm-10">
        <div class="form-holder shadow p-5 bg-light rounded ">
            <h1 class="text-center">Showcase <span class="text-primary">your</span> project</h1>
           
            <form method="POST"class="py-5" action="<?=base_url('image-upload')?>" enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="project-title">Project title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="">Project base</label>
                    <select name="project_base" class="form-select" required>
                        <option value="1">Web Development</option>
                        <option value="2">Designer</option>
                        <option value="3">Game Developer</option>
                        <option value="4">Photographer</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="summary">Summary</label>
                    <input type="text" name="summary" class="form-control" required>
                </div>
               
                <div class="mb-3">
                    <label for="file">Upload project file</label>
                    <input type="file" name="project_file" class="form-control" accept="image/*" required>
                </div>
                <input name="save" type="submit" class="btn btn-info text-white" value="Make a post">
            </form>
        </div>

    </div>

    <div class="col-sm-2">
      <div class="right-sidebar d-flex flex-column">
        <?php foreach($user as $details){?>
        <div class="card text-center relation-div shadow-sm">
          <div class="card-body">
            <h6 class="card-title fs-6"><?=$details->description?></h6>
            <span class="relations card-text">
              <p class="likes">
              <i class="fa fa-heart" aria-hidden="true"></i><?=$details->likes?>
              </p>
              <p class="followers">
              <i class="fa fa-users" aria-hidden="true"></i><?=$details->likes?>
              </p>
            </span>
          </div>
          
        </div>
        <?php }?>
        <div class="trending">
          <h2 class="trend-header fs-5 fw-bold">Recent Activities</h2>
          <div class="card recent-card shadow-sm">
            <ul class="list-group list-group-flush ">
              
                <li class="list-group-item border-0 fw-bold">
                 
                   <i class="text-danger fas fa-fire"></i> Amogi Coders is firing
                </li>
                <li class="list-group-item border-0 fw-bold">
                <i class="fa fa-calendar-o text-success" aria-hidden="true"></i> Today's posts: 4
                </li>
                <li class="list-group-item border-0 fw-bold text-warning">
                <i class="fas fa-crown text-warning"></i> GOAT : Belyse
                </li>
            </ul>
          </div>
        </div>
        <div class="trending">
          <h2 class="trend-header fs-5 fw-bold">Trending</h2>
          <ul class="list-group">
            <?php foreach ($trending as $row) { ?>
              <li class="list-group-item border-0">
                <span class="list-group-img">
                  <img src="<?php echo base_url('assets/images/again.jpeg') ?>" alt="">
                  <div>
                    <span class="username fw-bold"><?= $row->description ?></span>
                    <p class="projectName">by <?= $row->username ?></p>
                  </div>
                </span>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
        </div>
    </div>
  
        <div class="footer bg-dark text-white">
            <p class="p-3 mb-0 text-center">@Copyright. Co-exhi project. 2021</p>
        </div>
</body>
</html>