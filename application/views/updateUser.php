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
                    <ul class="padding">
                            <li>Igihozo colombe</li>
                            <li>Gizzo emen</i></li>
                            <li>jost chance</li>
                   
                </ul></div>
     
    </div>
    <div class="elements2">
      <h3>Trending</h3>
      <div class="sidebar">
        <ul class=padding2>
        
             
                <li>Igihozo colombe</li>
           
           <li>Gizzo amen</i></li>
             <li>jost chance</li>
                     
                <li>emmy emmy</li>
       
    </ul></div>
    </div>
 
</div>
<div class="one">
</div>
  
<hr>
<div class="form">

   <div class="container form-group form-control-lg form-floating w-75 p-3" id="form"> 
<form action="" method="POST" class="form-control">
<div class="rounded p-5 mb-2 bg-white text-dark border-primary">

  <label for="name">Username</label>
  <input type="text" name="username" id="username" placeholder="Username" class="form-control w-75 p-3" value="<?php echo $row->username; ?>">
  <label for="name">Email</label>
  <input type="text" name="email" id="email" placeholder="Email" class="form-control w-75 p-3" value="<?php echo $row->email; ?>">
  <label for="Bio">Bio</label>
  <input type="text" name="Bio" id="Bio" placeholder="Insert bio" class="form-control w-75 p-3" value="<?php echo $row->Bio; ?>">
  <label for="Bio">Profile</label>
  <input type="file" name="filename" id="filenaname" placeholder="upload" class="form-control w-75 p-3" value="<?php echo $row->Bio; ?>">
</div>
<input type="submit" name="update" value="Update_Records" class="btn btn-primary btn-lg btn-block w-50 p-7"/></td>
       
</div>
</form>
<?php } ?>
</div>

<div class="projects">
<h1>Notable Projects</h1>
<div class="prj1">

</div>
<div class="prj2">
<h4>Abistore</h4>
<img src="" >
<p>This is abi's project</p>
</div>
</div>


</body>
</html>

<!-- -- MySQL dump 10.13  Distrib 8.0.25, for Linux (x86_64)
--
-- Host: localhost    Database: exhibitionProject
-- ------------------------------------------------------
-- Server version   8.0.25
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
--
-- Table structure for table `cells`
--
DROP TABLE IF EXISTS `cells`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cells` (
  `cellId` int NOT NULL,
  `cellName` varchar(50) NOT NULL,
  `sectorId` int NOT NULL,
  PRIMARY KEY (`cellId`),
  KEY `FK_C363362019` (`sectorId`),
  CONSTRAINT `FK_C363362019` FOREIGN KEY (`sectorId`) REFERENCES `sectors` (`sectorId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
--
-- Dumping data for table `cells`
--
LOCK TABLES `cells` WRITE;
/*!40000 ALTER TABLE `cells` DISABLE KEYS */;
INSERT INTO `cells` VALUES (1010101,'Akabahizi ',10101),(1010102,'Akabeza ',10101),(1010103,'Gacyamo ',10101),(1010104,'Kigarama ',10101),(1010105,'Kinyange ',10101),(1010106,'Kora ',10101),(1010201,'Nyamweru ',10102),(1010202,'Nzove ',10102),(1010203,'Taba ',10102),(1010301,'Kigali ',10103),(1010302,'Mwendo ',10103),(1010303,'Nyabugogo ',10103),(1010304,'Ruriba ',10103),(1010305,'Rwesero ',10103),(1010401,'Kamuhoza ',10104),(1010402,'Katabaro ',10104),(1010403,'Kimisagara ',10104),(1010501,'Kankuba ',10105),(1010502,'Kavumu ',10105),(1010503,'Mataba ',10105),(1010504,'Ntungamo ',10105),(1010505,'Nyarufunzo ',10105),(1010506,'Nyarurenzi ',10105),(1010507,'Runzenze ',10105),(1010601,'Amahoro ',10106),(1010602,'Kabasengerezi ',10106),(1010603,'Kabeza ',10106),(1010604,'Nyabugogo ',10106),(1010605,'Rugenge ',10106),(1010606,'Tetero ',10106),(1010607,'Ubumwe ',10106),(1010701,'Munanira I ',10107),(1010702,'Munanira Ii ',10107),(1010703,'Nyakabanda I ',10107),(1010704,'Nyakabanda Ii ',10107),(1010801,'Cyivugiza ',10108),(1010802,'Gasharu ',10108),(1010803,'Mumena ',10108),(1010804,'Rugarama ',10108),(1010901,'Agatare ',10109),(1010902,'Biryogo ',10109),(1010903,'Kiyovu ',10109),(1010904,'Rwampara ',10109),(1011001,'Kabuguru I ',10110),(1011002,'Kabuguru Ii ',10110),(1011003,'Rwezamenyo I ',10110),(1011004,'Rwezamenyo Ii ',10110),(1020101,'Kinyaga ',10201),(1020102,'Musave ',10201),(1020103,'Mvuzo ',10201),(1020104,'Ngara ',10201),(1020105,'Nkuzuzu ',10201),(1020106,'Nyabikenke ',10201),(1020107,'Nyagasozi ',10201),(1020201,'Karuruma ',10202),(1020202,'Nyamabuye ',10202),(1020203,'Nyamugari ',10202),(1020301,'Gasagara ',10203),(1020302,'Gicaca ',10203),(1020303,'Kibara ',10203),(1020304,'Munini ',10203),(1020305,'Murambi ',10203),(1020401,'Musezero ',10204),(1020402,'Ruhango ',10204),(1020501,'Akamatamu ',10205),(1020502,'Bweramvura ',10205),(1020503,'Kabuye ',10205),(1020504,'Kidashya ',10205),(1020505,'Ngiryi ',10205),(1020601,'Agateko ',10206),(1020602,'Buhiza ',10206),(1020603,'Muko ',10206),(1020604,'Nkusi ',10206),(1020605,'Nyabuliba ',10206),(1020606,'Nyakabungo ',10206),(1020607,'Nyamitanga ',10206),(1020701,'Kamatamu ',10207),(1020702,'Kamutwa ',10207),(1020703,'Kibaza ',10207),(1020801,'Kamukina ',10208),(1020802,'Kimihurura ',10208),(1020803,'Rugando ',10208),(1020901,'Bibare ',10209),(1020902,'Kibagabaga ',10209),(1020903,'Nyagatovu ',10209),(1021001,'Gacuriro ',10210),(1021002,'Gasharu ',10210),(1021003,'Kagugu ',10210),(1021004,'Murama ',10210),(1021101,'Bwiza ',10211),(1021102,'Cyaruzinge ',10211),(1021103,'Kibenga ',10211),(1021104,'Masoro ',10211),(1021105,'Mukuyu ',10211),(1021106,'Rudashya ',10211),(1021201,'Butare ',10212),(1021202,'Gasanze ',10212),(1021203,'Gasura ',10212),(1021204,'Gatunga ',10212),(1021205,'Muremure ',10212),(1021206,'Sha ',10212),(1021207,'Shango ',10212),(1021301,'Nyabisindu ',10213),(1021302,'Nyarutarama ',10213),(1021303,'Rukiri I ',10213),(1021304,'Rukiri Ii ',10213),(1021401,'Bisenga ',10214),(1021402,'Gasagara ',10214),(1021403,'Kabuga I ',10214),(1021404,'Kabuga Ii ',10214),(1021405,'Kinyana ',10214),(1021406,'Mbandazi ',10214),(1021407,'Nyagahinga ',10214),(1021408,'Ruhanga ',10214),(1021501,'Gasabo ',10215),(1021502,'Indatemwa ',10215),(1021503,'Kabaliza ',10215),(1021504,'Kacyatwa ',10215),(1021505,'Kibenga ',10215),(1021506,'Kigabiro ',10215),(1030101,'Gahanga ',10301),(1030102,'Kagasa ',10301),(1030103,'Karembure ',10301),(1030104,'Murinja ',10301),(1030105,'Nunga ',10301),(1030106,'Rwabutenge ',10301),(1030201,'Gatenga ',10302),(1030202,'Karambo ',10302),(1030203,'Nyanza ',10302),(1030204,'Nyarurama ',10302),(1030301,'Kagunga ',10303),(1030302,'Kanserege ',10303),(1030303,'Kinunga ',10303),(1030401,'Kanserege ',10304),(1030402,'Muyange ',10304),(1030403,'Rukatsa ',10304),(1030501,'Busanza ',10305),(1030502,'Kabeza ',10305),(1030503,'Karama ',10305),(1030504,'Rubirizi ',10305),(1030601,'Gasharu ',10306),(1030602,'Kagina ',10306),(1030603,'Kicukiro ',10306),(1030604,'Ngoma ',10306),(1030701,'Bwerankori ',10307),(1030702,'Karugira ',10307),(1030703,'Kigarama ',10307),(1030704,'Nyarurama ',10307),(1030705,'Rwampara ',10307),(1030801,'Ayabaraya ',10308),(1030802,'Cyimo ',10308),(1030803,'Gako ',10308),(1030804,'Gitaraga ',10308),(1030805,'Mbabe ',10308),(1030806,'Rusheshe ',10308),(1030901,'Gatare ',10309),(1030902,'Niboye ',10309),(1030903,'Nyakabanda ',10309),(1031001,'Kamashashi ',10310),(1031002,'Nonko ',10310),(1031003,'Rwimbogo ',10310),(2010101,'Gahondo ',20101),(2010102,'Kavumu ',20101),(2010103,'Kibinja ',20101),(2010104,'Nyanza ',20101),(2010105,'Rwesero ',20101),(2010201,'Gitovu ',20102),(2010202,'Kimirama ',20102),(2010203,'Masangano ',20102),(2010204,'Munyinya ',20102),(2010205,'Rukingiro ',20102),(2010206,'Shyira ',20102),(2010301,'Kadaho ',20103),(2010302,'Karama ',20103),(2010303,'Nyabinyenga ',20103),(2010304,'Nyarurama ',20103),(2010305,'Rubona ',20103),(2010401,'Cyeru ',20104),(2010402,'Mbuye ',20104),(2010403,'Mututu ',20104),(2010404,'Rwotso ',20104),(2010501,'Butansinda ',20105),(2010502,'Butara ',20105),(2010503,'Gahombo ',20105),(2010504,'Gasoro ',20105),(2010505,'Mulinja ',20105),(2010601,'Cyerezo ',20106),(2010602,'Gatagara ',20106),(2010603,'Kiruli ',20106),(2010604,'Mpanga ',20106),(2010605,'Ngwa ',20106),(2010606,'Nkomero ',20106),(2010701,'Gati ',20107),(2010702,'Migina ',20107),(2010703,'Nyamiyaga ',20107),(2010704,'Nyamure ',20107),(2010705,'Nyundo ',20107),(2010801,'Bugali ',20108),(2010802,'Cyotamakara ',20108),(2010803,'Kagunga ',20108),(2010804,'Katarara ',20108),(2010901,'Gahunga ',20109),(2010902,'Kabirizi ',20109),(2010903,'Kabuga ',20109),(2010904,'Kirambi ',20109),(2010905,'Rurangazi ',20109),(2011001,'Gacu ',20110),(2011002,'Gishike ',20110),(2011003,'Mubuga ',20110),(2011004,'Mushirarungu ',20110),(2011005,'Nyarusange ',20110),(2011006,'Runga ',20110),(2020101,'Cyiri ',20201),(2020102,'Gasagara ',20201),(2020103,'Gikonko ',20201),(2020104,'Mbogo ',20201),(2020201,'Gabiro ',20202),(2020202,'Nyabitare ',20202),(2020203,'Nyakibungo ',20202),(2020204,'Nyeranzi ',20202),(2020301,'Akaboti ',20203),(2020302,'Bwiza ',20203),(2020303,'Sabusaro ',20203),(2020304,'Umunini ',20203),(2020401,'Duwani ',20204),(2020402,'Kibirizi ',20204),(2020403,'Muyira ',20204),(2020404,'Ruturo ',20204),(2020501,'Agahabwa ',20205),(2020502,'Gatovu ',20205),(2020503,'Impinga ',20205),(2020504,'Nyabikenke ',20205),(2020505,'Rubona ',20205),(2020506,'Rusagara ',20205),(2020601,'Gakoma ',20206),(2020602,'Kabumbwe ',20206),(2020603,'Mamba ',20206),(2020604,'Muyaga ',20206),(2020605,'Ramba ',20206),(2020701,'Cyumba ',20207),(2020702,'Muganza ',20207),(2020703,'Remera ',20207),(2020704,'Rwamiko ',20207),(2020705,'Saga ',20207),(2020801,'Baziro ',20208),(2020802,'Kibayi ',20208),(2020803,'Kibu ',20208),(2020804,'Mugombwa ',20208),(2020805,'Mukomacara ',20208),(2020901,'Gitega ',20209),(2020902,'Mukiza ',20209),(2020903,'Nyabisagara ',20209),(2020904,'Runyinya ',20209),(2021001,'Bukinanyana ',20210),(2021002,'Gatovu ',20210),(2021003,'Kigarama ',20210),(2021004,'Kimana ',20210),(2021101,'Bweya ',20211),(2021102,'Cyamukuza ',20211),(2021103,'Dahwe ',20211),(2021104,'Gisagara ',20211),(2021105,'Mukande ',20211),(2021201,'Higiro ',20212),(2021202,'Nyamugari ',20212),(2021203,'Nyaruteja ',20212),(2021204,'Umubanga ',20212),(2021301,'Gatoki ',20213),(2021302,'Munazi ',20213),(2021303,'Rwanza ',20213),(2021304,'Shyanda ',20213),(2021305,'Zivu ',20213),(2030101,'Kirarangombe ',20301),(2030102,'Nkanda ',20301),(2030103,'Nteko ',20301),(2030104,'Runyombyi ',20301),(2030105,'Shororo ',20301),(2030201,'Coko ',20302),(2030202,'Cyahinda ',20302),(2030203,'Gasasa ',20302),(2030204,'Muhambara ',20302),(2030205,'Rutobwe ',20302),(2030301,'Gakoma ',20303),(2030302,'Kibeho ',20303),(2030303,'Mbasa ',20303),(2030304,'Mpanda ',20303),(2030305,'Mubuga ',20303),(2030306,'Nyange ',20303),(2030401,'Cyanyirankora ',20304),(2030402,'Gahurizo ',20304),(2030403,'Kimina ',20304),(2030404,'Kivu ',20304),(2030405,'Rugerero ',20304),(2030501,'Gorwe ',20305),(2030502,'Murambi ',20305),(2030503,'Nyamabuye ',20305),(2030504,'Ramba ',20305),(2030505,'Rwamiko ',20305),(2030601,'Muganza ',20306),(2030602,'Rukore ',20306),(2030603,'Samiyonga ',20306),(2030604,'Uwacyiza ',20306),(2030701,'Giheta ',20307),(2030702,'Ngarurira ',20307),(2030703,'Ngeri ',20307),(2030704,'Ntwali ',20307),(2030705,'Nyarure ',20307),(2030801,'Bitare ',20308),(2030802,'Mukuge ',20308),(2030803,'Murama ',20308),(2030804,'Nyamirama ',20308),(2030805,'Nyanza ',20308),(2030806,'Yaramba ',20308),(2030901,'Fugi ',20309),(2030902,'Kibangu ',20309),(2030903,'Kiyonza ',20309),(2030904,'Mbuye ',20309),(2030905,'Nyamirama ',20309),(2030906,'Rubona ',20309),(2031001,'Gihemvu ',20310),(2031002,'Kabere ',20310),(2031003,'Mishungero ',20310),(2031004,'Nyabimata ',20310),(2031005,'Ruhinga ',20310),(2031101,'Maraba ',20311),(2031102,'Mwoya ',20311),(2031103,'Nkakwa ',20311),(2031104,'Nyagisozi ',20311),(2031201,'Gitita ',20312),(2031202,'Kabere ',20312),(2031203,'Remera ',20312),(2031204,'Ruyenzi ',20312),(2031205,'Uwumusebeya ',20312),(2031301,'Gabiro ',20313),(2031302,'Giseke ',20313),(2031303,'Nyarugano ',20313),(2031304,'Rugogwe ',20313),(2031305,'Ruramba ',20313),(2031401,'Bunge ',20314),(2031402,'Cyuna ',20314),(2031403,'Gikunzi ',20314),(2031404,'Mariba ',20314),(2031405,'Raranzige ',20314),(2031406,'Rusenge ',20314),(2040101,'Nyakibanda ',20401),(2040102,'Nyumba ',20401),(2040103,'Ryakibogo ',20401),(2040104,'Shori ',20401),(2040201,'Muyogoro ',20402),(2040202,'Nyakagezi ',20402),(2040203,'Rukira ',20402),(2040204,'Sovu ',20402),(2040301,'Buhoro ',20403),(2040302,'Bunazi ',20403),(2040303,'Gahororo ',20403),(2040304,'Kibingo ',20403),(2040305,'Muhembe ',20403),(2040401,'Gishihe ',20404),(2040402,'Kabatwa ',20404),(2040403,'Kabuga ',20404),(2040404,'Karambi ',20404),(2040405,'Musebeya ',20404),(2040406,'Nyabisindu ',20404),(2040407,'Rugarama ',20404),(2040408,'Shanga ',20404),(2040501,'Byinza ',20405),(2040502,'Gahana ',20405),(2040503,'Gitovu ',20405),(2040504,'Kabona ',20405),(2040505,'Sazange ',20405),(2040601,'Buremera ',20406),(2040602,'Gasumba ',20406),(2040603,'Kabuye ',20406),(2040604,'Kanyinya ',20406),(2040605,'Shanga ',20406),(2040606,'Shyembe ',20406),(2040701,'Gatobotobo ',20407),(2040702,'Kabuga ',20407),(2040703,'Mutunda ',20407),(2040704,'Mwulire ',20407),(2040705,'Rugango ',20407),(2040706,'Rusagara ',20407),(2040707,'Tare ',20407),(2040801,'Bukomeye ',20408),(2040802,'Buvumu ',20408),(2040803,'Icyeru ',20408),(2040804,'Rango A ',20408),(2040901,'Butare ',20409),(2040902,'Kaburemera ',20409),(2040903,'Matyazo ',20409),(2040904,'Ngoma ',20409),(2041001,'Busheshi ',20410),(2041002,'Gatovu ',20410),(2041003,'Karama ',20410),(2041004,'Mara ',20410),(2041005,'Muhororo ',20410),(2041006,'Rugogwe ',20410),(2041007,'Ruhashya ',20410),(2041101,'Buhimba ',20411),(2041102,'Gafumba ',20411),(2041103,'Kimirehe ',20411),(2041104,'Kimuna ',20411),(2041105,'Kiruhura ',20411),(2041106,'Mugogwe ',20411),(2041201,'Gatwaro ',20412),(2041202,'Kamwambi ',20412),(2041203,'Kibiraro ',20412),(2041204,'Mwendo ',20412),(2041205,'Nyamabuye ',20412),(2041206,'Nyaruhombo ',20412),(2041207,'Shyunga ',20412),(2041301,'Cyendajuru ',20413),(2041302,'Gisakura ',204... -->