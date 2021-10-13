@extends('app')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Distances btn two cities App</title>
  
  
    {{-- /* Styles pouyr le css */ --}}
    <style>
        /*styling.css*/
/*add font family, background image*/

body {
    color: orangered;
    font-family: "Poppins", sans-serif;
  }
  
  .fa-map-marker-alt,
  .fa-dot-circle {
    color: #7a8386;
  }
  
  /*Jumbotron*/
  .jumbotron {
    background-color: transparent;
    margin: 0;
    padding: 10px;
  }
  
  .jumbotron h1 {
    letter-spacing: 2.5px;
    font-size: 3.5em;
  }
  
  .jumbotron h1,
  .jumbotron p {
    text-align: center;
  }
  
  /*map*/
  #googleMap {
    width: 80%;
    height: 400px;
    margin: 10px auto;
  }
  
  /*output box*/
  #output {
    text-align: center;
    font-size: 2em;
    margin: 20px auto;
  }
  
  #mode {
    color: black;
  }
  
    </style>

 
</head>

<body>
   

    <div class="jumbotron">
        <div class="container">
            <h1>Find The Distance Between Two Places.</h1>
            <!-- <p> Calculate Routes Distances n have a range of Prices.</p> -->
            <form class="form-horizontal" >
                <div class="form-group">
                    <label for="from" class="col-xs-2 control-label"><i class="far fa-dot-circle "></i></label><br>
                    <div class="col-xs-4">
                        <input type="text" id="from" placeholder="Loading place" class="form-control">
                    </div>
               </div><br>
               <div class="form-group">
                
                    <label for="to" class="col-xs-2 control-label"><i class="fas fa-map-marker-alt"></i></label><br>
                    <div class="col-xs-4">
                        <input type="text" id="to"  placeholder="Unloading place" class="form-control">
                    </div>
                  
                 </div>
                 
            </form><br>

            <div class="col-xs-offset-2 col-xs-10">
                <button class="btn btn-warning btn-lg " onclick="calcRoute();"><i class="fas fa-map-signs"></i> Caclulate Route</button>
            </div>
        </div>
        <div class="container-fluid">
            <div id="output">
               
             
            </div>
            <div id="googleMap"></div>
           
        </div>

    </div>



    {{-- script pour calculer et afficher la map --}}
    

</body>
</html>
