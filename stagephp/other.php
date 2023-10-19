



  
 <section>

   <div class="container-fluid ">

   <div class="row">

        
   <div class="col-lg-12  col-md-12 text-center mt-4">
          
    <div class="bgvideo">
      <video src="source/images/vid.mp4" type="video/mp4" autoplay muted loop></video>

      <div class="effect">

      </div>

      <div class="video-text">

<?php
if($_SERVER["REQUEST_URI"]=='/contact'){include 'articles/contact.php';}


for($i=1;$i<6;$i++){
  if($_SERVER["REQUEST_URI"]=="/news$i"){include "articles/$i.php";}
}













?>



      </div>


      

     
    
             



    </div>


     </div>




         <div class="container-fluid mt-4">
           <div class="row">


        <div class="col-lg-3  col-md-12 text-center mt-4">
          <button type="button" class="btn btn-primary">See more</button>
        </div>


        <div class="col-lg-12  col-md-12 text-center mt-4">

          <p>Can i help you ?</p>
        </div>


        <div class="col-lg-12  col-md-12 text-center">

          <img class="call-anim" src="source/images/tg.png" alt="" width="42px">
        </div>


      </div>



</section>











  