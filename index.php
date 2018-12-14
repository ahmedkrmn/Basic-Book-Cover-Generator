<!DOCTYPE html>
<html>
   <head>
      <link href="./css/custom.css" rel="stylesheet">
      <script type="text/javascript" src="./js/generate.js"></script>
   </head>
   <?php include_once('./components/head.php') ?>
   <body>
      <div class="container">
         <div class="row">
            <div class="col-xs-6 col-sm-6 left">
               <div class="form-group">
                  <label for="name">Author Name:</label>
                  <input type="text" name="name" placeholder="Enter author's name" class="form-control" id="name">
               </div>
               <div class="form-group">
                  <label for="sub">Book Subtitle:</label>
                  <input type="text" name="sub" placeholder="Optional: Enter a book subtitle" class="form-control" id="sub">
               </div>
               <div class="form-group">
                  <label for="book">Book Title:</label>
                  <input type="text" name="book" placeholder="Enter book title" class="form-control" id="book">
               </div>
               <div class="form-group">
                  <label for="pub">Publisher</label>
                  <input type="text" name="pub" placeholder="Enter publisher" class="form-control" id="pub">
               </div>
               <div class="form-group">
                  <label for="year">Publication Year</label>
                  <input type="text" name="year" placeholder="Enter publication year" class="form-control" id="year">
               </div>
               <div class="form-group">
                  <label for="color">Choose a color:  </label>
                  <input type="color" value="#0000FF" id="color">
               </div>
               <div class="form-group">
                  <label for="info">Optional info</label>
                  <input type="text" name="info" placeholder="Default: A New York Times Best Seller" class="form-control" id="info">
               </div>
               <button type="submit" class="btn btn-primary" id="Generate">Generate</button>
            </div>
            <div class="col-xs-6 col-sm-6 right">
               <div id="main_fraim">
                  <div id="upper1">
                     <div id="upper2">
                        <h4 id="aname">
                           <div id="rname"></div>
                        </h4>
                        <h6>
                           <div id="rsub"></div>
                        </h6>
                     </div>
                  </div>
                  <div id="center">
                     <p>
                     <div id="rpub"></div>
                     </p>
                     <div id="center2">
                        <h1>
                        <div id="rbook"></div>
                        <h1>
                     </div>
                     <p>
                     <div id="ryear"></div>
                     </p>
                  </div>
                  <div id="bottom">
                     <div id="bottom2">
                        <h5 id="ainfo">
                           <div id="rinfo"></div>
                        </h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>
<script>
   document.getElementById('Generate').addEventListener('click', generate);
</script>
<?php include_once('./components/tail.php') ?>