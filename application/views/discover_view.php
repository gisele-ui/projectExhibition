<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <title>Welcome to CodeIgniter</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/common-css/styles.css')?>">
  <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> -->
  <style type="text/css">
    body{
      font-family: "SegoeUI";
    }
    .active {
      border-bottom: 2px solid #1F43A7;
    }

    .navbar {
      height: 50px;
    }

    .nav-link {
      color: black;
      font-size: 16px;
      font-family: roboto;
      padding: 10px auto;
    }

    .user-card{
      width: 210px;
      height: 190px;
      border: none;
      margin: 20px;
    }

    .user-card img {
      border-radius: 10px;
      width: 40%;
      height: 40%;
      margin: 0 auto;
      object-fit: cover;
      position: relative;
      top: -20px;
    }

    .cart .cart-text {
      text-align: center;
    }

    .date-added {
      color: grey;
      font-size: 12px;
    }

    .main-container .content-container {
      /* background-color: purple; */
      margin: 0 auto;
      border: 1px solid whitesmoke;
      margin-top: 30px;
      border-radius: 10px;
    }

    .main-container .content-container .content-header {
      padding: 25px;
      display: flex;
      align-items: center;
      justify-content: space-around;

    }

    .recommend,
    .others {
      display: flex;
      flex-direction: row;
      justify-content: space-around;
      flex-wrap: wrap;
    }
    

    .category-header {
      font-size: 20px;
      padding: 60px;
      font-weight: bold;
    }

    .search {
      width: 50%;
      margin-bottom: auto;
      margin-top: 20px;
      height: 50px;
      background: whitesmoke;
      padding: 10px;
      border-radius: 5px
    }

    .search-input {
      color: white;
      border: 0;
      outline: 0;
      background: none;
      width: 0;
      margin-top: 5px;
      line-height: 20px;
    }

    .search .search-input {
      padding: 0 10px;
      width: 100%;
      caret-color: #536bf6;
      font-size: 19px;
      font-weight: 300;
      color: black;
      transition: width 0.4s linear
    }

    .search-icon {
      height: 34px;
      width: 34px;
      float: right;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      background-color: #1F43A7;
      font-size: 10px;
      bottom: 30px;
      position: relative;
      border-radius: 5px
    }

    .main {
      display: flex;
    }


    .list-group-item {
      background-color: transparent;
    }

    .nav-item{
      height: 100%;
    }
    .navbar-nav, .navbar-collapse{
      height: 100%;
    }
    .relation-div{
    height: 10%;
    width: 90%;
    margin: 40px auto;
    }
    
   
  </style>
</head>

<body class="col-sm-12">
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
              <a class="nav-link text-dark" href="dashboard"><i class="fas fa-list-alt"></i> &nbsp;    Dashboard</a>
         </div>
        <div>
            <a class="nav-link text-dark active" href="discover" aria-current="page"> <i class="fas fa-search-location "></i> &nbsp;Discover</a>

        </div>
        <div> 

            <a class="nav-link text-dark" href="trending" > <i class="fas fa-fire"></i> &nbsp; Trending</a>
        </div>
        <div>

            <a class="nav-link text-dark " href="#" tabindex="-1"> <i class="fas fa-cogs"></i>  &nbsp;Settings</a>
        </div>
     

    </div>
    <div class="buttons">
        <a href="exhibit" class="btn btn-info text-white">Exhibit</a>
        <div></div>
    </div>
    </div>
</nav>
</header>
  <div class="main col-sm-12">
    <div class="main-container col-sm-10">
      <div class="content-container col-sm-11 shadow-sm">
        <div class="content-header">
          <h2>Discover</h2>

          <div class="search"> <input type="text" class="search-input" placeholder="Search..." name=""> <a href="#" class="search-icon"> <i class="fa fa-search"></i> </a> </div>

        </div>
        <h4 class="category-header">Recommended Collegues</h4>
        <div class="recommend">
          <?php 
          if($recommend){
          foreach ($recommend as $row) {?>
            <div class="card user-card shadow">
              <img src="<?php echo base_url('assets/images/again.jpeg') ?>" class="card-img-top" alt="my pic">
              <div class="card-body">
                <p href="#" class="card-text text-center fw-bold"><a href="?userId=<?=$row->userId?>"><?= $row->username?></a></p>
                <h6 class="date-added card-text text-center">Joined on <?= $row->added_time ?></h6>
                <div class="mx-auto col-4"><a href="#" role="button" class="btn btn-primary btn-sm mx-auto">Follow</a></div>
              </div>
            </div>

          <?php }}else{  ?>
              <div>
                No users from you class
              </div>
       <?php    }?>
        </div>
        <h4 class="category-header">Others</h4>
        <div class="others">
          <?php foreach ($others as $row) { ?>
            <div class="card user-card shadow">
              <img src="<?php echo base_url('assets/images/again.jpeg') ?>" class="card-img-top" alt="my pic">
              <div class="card-body">
                <p class="card-text text-center fw-bold"><a href="project/?userId=<?=$row->userId?>"><?= $row->username ?></a></p>
                <h6 class="date-added card-text text-center">Joined on <?= $row->added_time ?></h6>
                <div class="mx-auto col-4"><a href="#" role="button" class="btn btn-primary btn-sm mx-auto">Follow</a></div>
              </div>
            </div>

          <?php } ?>
        </div>
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
          <div class="card recent-card shadow-sm w-75 my-5 mx-auto">
            <ul class="list-group side-list list-group-flush">
              
                <li class="list-group-item border-0 fw-bold">
                 
                   <i class="text-danger fas fa-fire"></i> Amogi Coders is firing
                </li>
                <li class="list-group-item border-0 fw-bold">
                  Today's posts: 4
                </li>
                <li class="list-group-item border-0 fw-bold text-warning">
                <i class="fas fa-crown text-warning"></i> GOAT : Belyse
                </li>
            </ul>
          </div>
        </div>
        <div class="trending">
          <h2 class="trend-header fs-5 fw-bold">Trending</h2>
          <ul class="list-group my-2">
            <?php foreach ($trending as $row) { ?>
              <li class="list-group-item border-0">
                <span class="list-group-img">
                  <img src="<?php echo base_url('assets/images/again.jpeg') ?>" alt="">
                  <div>
                    <span class="username text-decoration-none text-dark fw-bold text-capitalize"><?= $row->description ?></span>
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
</body>

</html>