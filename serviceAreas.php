<?php
include 'header.php';
include 'navbar.php';
include 'hero_section.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Areas</title>

<style>

  .text{
    color: #243965;
    text-align: left; 
    font-size: 2.2em;
    font-family: Cursive;
    margin: 40px;
    padding: 45px;
  }
    .banner1 {
  text-align: center;
  padding: 14px;
  font-size: 18px;
  color:#243965;
  background-size: center;
}

.info-block {
  display: inline-block;
  height: 170px;
  width: 30%;
  margin: 10px;
  padding: 5px;
  background-color: #f2f2f2;
  border-radius: 15px;
  text-align: left;
}

.info-block h2 
{
    text-align: center;
  color: #243965;
  font-size: 2em;
  
}

.info-block p {
  color: #46587C;
  font-size: 18px;
}
    .container {
        max-width: 1000px;
        margin: auto;
        
  color: #46587C;
    }
    
    h2 {
        font-size: 24px;
        color:  #243965;
    }
    
    
    .cities {
        display: flex;
    }
    
    .column {
        flex-basis: 33.33%;
    }
    
    .column p {
       margin-bottom: 10px; 
    }
    .container5 {
    display: flex;
    width: 100%;
    align-items: center;
    justify-content: center;
  }
 
  .image-div {
    width: 50%;
    padding: 20px;
  }
  img {
    width: 100%;
    height: auto;
  }
  .text-div {
    
  margin-left: 40px;
  margin-right: 40px;
    width: 50%;
    padding: 10px;
    font-size: 32px;
    color:  #243965;
  }
  .text-div p{
    color: #46587C;
    font-size: 18px;
  }
  .btn-gs {
  font-size: large;
  height: 60px;
  border: none;
  border-radius: 25px 25px 25px 25px;
  width: 130px;
  height: 40px;
  color: #243965;
  background-color:#3A96DB;
  text-decoration: none;
}
.btn-gs a{
    
  padding-bottom: 2px;
  border-bottom: 1px solid #62C6C3;
  color: #243965;
  text-decoration: none;
}

.btn-gs a:hover{
    
  text-decoration: none;
  border-bottom: none;
}

.btn-gs:hover{   
  color: #243965;
  background-color:#3A96DB;
  text-decoration: none;
  border-bottom: none;
}
    </style>
    
</head>
<body>

</div>
    <div class="banner1">
        <h1><strong>Let Us Take Care of Everything</strong></h1>
        <p>Our team is committed to delivering first-class service to families at their greatest time of need. We are proud of our dedication and care.</p>
      </div>
      
      <div class="info-block">
        <h2><b>A Simple Process</b></h2>
        <p>We offer a simple funeral that we provide directly to families in need, which can be made by phone or online with the help of a care specialist.</p>
      </div>
      
      <div class="info-block">
        <h2><b>Transparent Pricing</b></h2>
        <p>Farewellz transparent pricing means no hidden charges or location costs.You can plan for funeral services with clarity and confidence.</p>
        
        <p></p>
      </div>
      
      <div class="info-block">
        <h2><b>Dedication and Care</b></h2>
        <p>Our dedicated care team works 24/7 to bring families comfort and compassion when they need it most.</p>
      </div>
    <div class="container">
        <h2>Punjab</h2>
        <div class="cities">
            <div class="column">
                <p>Lahore</p>
                <p>Islamabad</p>
                <p>Rawalpindi</p>
                <p>Bahawalpur</p>
            </div>
            <div class="column">
                <p>Multan</p>
                <p>Sialkot</p>
                <p>Gujaranswala</p>
</div>
        </div>
    </div>
    <hr>

    <div class="container">
        <h2>Sindh</h2>
        <div class="cities">
            <div class="column">
                <p>Karachi</p>
                <p>Hyderabad</p>
                <p>Jamshoro</p>
                <p>Thatta</p>
               
            </div>
            <div class="column">
                <p>Sakhar</p>
                <p>larkana</p>
                <p>Khairpur</p>
            </div>
           
        </div>
    </div>
    <hr>

    <div class="container">
        <h2></a></h2>
        <div class="cities">
            <div class="column">
                <p>Peshawar</p>
                <p>Sawabi</p>
                <p>Dera Ismail Khan</p>
                <p>Abbottabad</p>
            </div>
            <div class="column">
                <p>Charsdda</p>
                <p>Bannu</p>
                <p>Nowshera</p>
</div>
        </div>
    </div>
    <hr>

    <div class="container">
        <h2>Balochistan</a></h2>
        <div class="cities">
            <div class="column">
                <p>Quetta</p>
                <p>Gawadr</p>
                <p>Turbat</p>
                <p>Chaman</p>
            </div>
            <div class="column">
                <p>Hub</p>
                <p>Kalat</p>
                <p>Khuzdar</p>
            </div>
        </div>
    </div>
    <br>
 <div class="container5">
    <div class="image-div">
      <img src="./resources/arrange.png" alt="Arrangements Image">
    </div>
    <div class="text-div">
        <h1>Start Your Arrangements</h1>
        <p>After a few questions, we’ll show you the price you’ll pay right up front—no hidden fees, ever.</p>
        <button class="btn-gs" ><a href="./pricing.php"><b>Arrange</b></a></button>
  </div>
  </div>
</body>
</html>
<?php 
include 'footer.php'
?>