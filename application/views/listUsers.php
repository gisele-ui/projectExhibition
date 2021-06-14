<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<style>
 
  .nav{
    width: 100%;
    height: 70px;
    background-color:rgb(255, 255, 255);
    display: flex;
    text-align: left;
    box-shadow: rgb(207, 198, 198) 0px 5px 5px 0px; 
    
}
.nav ul{
text-decoration: none;
list-style: none;
display: flex;
float: right;

}
.nav li{
  
    padding: 30px;
    color: white;
    font-size: 20px;
   
}

    .nav ul li a{
        color:black;
        text-decoration: none;
    }

    .button{
      background-color: rgb(12, 132, 180);
      border-radius: 10px;
      float:right;

    }
    #button{
      float:right;

    }
  h3{
    margin-left: 20px;
  }
.amogi{
  width: 20%;
      height: 700px;
    float: right;
    margin-top: 0px;
    background-color:whitesmoke;

}

.likes{
  width: 90%;
    height: 100px;
    border-radius: 10px 10px 10px 10px;
    background-color:#ffffff;
    margin-top: 40px;
    margin-left: 10px;
    
}

.likes ul{
  display: flex;
  list-style: none;
  
}

.likes ul li{
margin-top: 20px;
  padding: 10px;
}
.one{
  width: 30%;
    height: 200px;
    border-radius: 10px 10px 10px 10px;
    background-color:whitesmoke;
    margin-top: 40px;
    margin-left: 80px;

}
hr{
  margin-left: 80px;
}
.prj1{
  width: 30%;
    height: 200px;
    border-radius: 10px 10px 10px 10px;
    background-color:whitesmoke;
    margin-top: 40px;
    float: left;
    margin-left: 10px;

}
.prj2{
  width: 30%;
    height: 200px;
    border-radius: 10px 10px 10px 10px;
    background-color:whitesmoke;
    margin-top: 40px;
    float: left;
    margin-left: 80px;
  

}
#form{
  margin-left:60px;
}
.projects{
  margin-top: 40px;
    margin-left: 80px;

}
#submit{
  margin-left:100px;
}
#exhibit{
  margin-left:300px;
  margin-top:-20px;
}
.sidebar ul{
list-style: none;
}
.sidebar li .fa{
margin: 15px;
}
.sidebar  li{
margin-left: 0px;
color: black;
font-size: 15px;
text-decoration: none;
}
.sidebar li a{
    color: white;
    text-decoration:none;
}
.sidebar li:hover{
    background-color: skyblue;
}
.elements{
  margin-top:20px;
}
i{
  color:black;
}
</style>
<body>
<?php
  $i=1;
  foreach($data as $row)
  {
  ?>
  <div class="nav">
    <ul>
      <li><a href="user2.php">Co-EXHI</a></li>
      <li><a href="user2.php">Dashboard</a></li>
      <li><a href="outgoing_bk.php">Discover</a></li>
      <li><a href="inventory_bk.php">Trending</a></li>
      <li><a href="index.php">settings</a></li>
      <li>
          <button class="btn btn-primary btn-lg btn-block w-25 p-7 text-white" id="exhibit">Exhibit</button>
      </li>
       <li><i class="fa fa-user-circle" aria-hidden="true"></i><i class="arrow left"></i></li>
     
    </ul>
  </div>
  <div class="amogi">
    <div class="likes">
<ul>
  <li class="text-danger">Likes</li>
  <li class="text-success">Followers</li>
  <li class="text-primary">views</li></ul>
    </div>
    <div class="elements">
      <h3>Recent activities</h3>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <div class="sidebar">
                    <ul>
                            <li><i class="fa fa-tachometer" aria-hidden="true"></i>Igihozo <i class="arrow left"></i></li>
                            <li><i class="fa fa-users" aria-hidden="true"></i>Gizzo<i class="arrow left" id="arre"></i></li>
                            <li><i class="fa fa-stack-overflow" aria-hidden="true"></i>jost<i class="arrow left" id="arrsa"></i></li>
                   
                </ul></div>
    </div>
    <div class="elements2">
      <h3>Trending</h3>
      <div class="sidebar">
        <ul>
        
             
           <li><i class="fa fa-tachometer" aria-hidden="true"></i>Igihozo <i class="arrow left"></i></li>
           
           <li><i class="fa fa-users" aria-hidden="true"></i>Gizzo<i class="arrow left" id="arre"></i></li>
           <li><i class="fa fa-stack-overflow" aria-hidden="true"></i>jost<i class="arrow left" id="arrsa"></i></li>
                     
           <li><i class="fa fa-money" aria-hidden="true"></i>finance<i class="arrow left" id="arrfi"></i></li>
    
         <li><i class="fa fa-commenting" aria-hidden="true"></i>message Center<i class="arrow left" id="arrm"></i></li> 
       
    </ul></div>
    </div>
 
</div>
<div class="one">
</div>
  
<hr>
<div class="form">

   <table width="600" border="1" cellspacing="5" cellpadding="5" >
  <tr style="background:#CCC" >
    <th>username</th>
    <th>email</th>
    <th>Bio</th>
   <th>Update</th>
   <th>Delete</th>
  </tr>
  <?php
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->username."</td>";
  echo "<td>".$row->email."</td>";
  echo "<td>".$row->Bio."</td>";
//   echo "<td>".$row->classId."</td>";
  echo "<td><a href=updatedata?userId=".$row->userId.">Update</a></td>";
  echo "<td><a href='deletedata?userId=".$row->userId."'>Delete</a></td>";
  echo "</tr>";
  $i++;
  }
   ?>
</table>
<?php } ?>
</div>



<!-- <div class="projects">
<h1>Notable Projects</h1>
<div class="prj1">

</div>
<div class="prj2">
<h4>Abistore</h4>
<img src="" >
<p>This is abi's project</p>
</div>
</div> -->


</body>
</html>