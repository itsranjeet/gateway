<?php include("include/header.php"); ?>

<section id="inner-headline">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="inner-heading">
          <ul class="breadcrumb">
            <li><a href="index.php">Home</a> <i class="icon-angle-right"></i></li>

            <li class="active">Career</li>
          </ul>
          <h2>Career</h2>
        </div>
      </div>
    </div>
  </div>
</section>







<!-- career start -->
<section id="content">
  <div class="container">
    <div class="row demobtn">
      <div class="span12">

       <div class="row">

        <div class="span8">

          <h4>Make Career With Us...</h4>
          <div class="tabs">
            <ul class="nav nav-tabs">
              <li class="active"><a href="" data-toggle="tab"><i class="icon-briefcase"></i>  Designer</a></li>
              <li><a href="#two" data-toggle="tab"><i class="icon-desktop"></i> Developer</a></li>
              <li><a href="#three" data-toggle="tab"><i class="icon-lightbulb"></i> Internship</a></li>
              <li><a href=""  data-toggle="modal" data-target="#myModal"><i class="icon-building"></i> Upload Resume</a></li>
              <li><a href="#three" data-toggle="tab"><i class="icon-laptop"></i> Digital Marketing</a></li>

            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="one">
                <p>
                  <strong>Augue iriure</strong> dolorum per ex, ne iisque ornatus veritus duo. Ex nobis integre lucilius sit, pri ea falli ludus appareat. Eum quodsi fuisset id, nostro patrioque qui id. Nominati eloquentiam in mea.
                </p>
                <p>
                  No eum sanctus vituperata reformidans, dicant abhorreant ut pro. Duo id enim iisque praesent, amet intellegat per et, solet referrentur eum et.
                </p>
              </div>
              <div class="tab-pane" id="two">
                <p>
                  Tale dolor mea ex, te enim assum suscipit cum, vix aliquid omittantur in. Duo eu cibo dolorum menandri, nam sumo dicit admodum ei. Ne mazim commune honestatis cum, mentitum phaedrum sit et.
                </p>
              </div>
              <div >
                <p>
                  Cu cum commodo regione definiebas. Cum ea eros laboramus, audire deseruisse his at, munere aeterno ut quo. Et ius doming causae philosophia, vitae bonorum intellegat usu cu.
                </p>
              </div>
            </div>
          </div>
        </div>





        <div class="span4">
          <div class="post-slider">
            <div class="post-heading">
              <h3><a href="#">This is an example of slider post format</a></h3>
            </div>
            <div class="clear"></div>
            <!-- start flexslider -->
            <div class="flexslider">
              <ul class="slides">
                <li>
                  <img src="img/dummies/blog/img1.jpg" alt="" />
                </li>
                <li>
                  <img src="img/dummies/blog/img2.jpg" alt="" />
                </li>
                <li>
                  <img src="img/dummies/blog/img3.jpg" alt="" />
                </li>
              </ul>
            </div>
            <!-- end flexslider -->
          </div>
        </div>
      </div>


      <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Upload Resume</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form action="" method="post" enctype="multipart/form-data">
           <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input type="name" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Enter Name"><span id="name" style="color: red;"></span><br><br>

          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" id="eid" aria-describedby="emailHelp" placeholder="Enter email"><span id="email" style="color: red;"></span>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPhnno.">Phone No.</label>
            <input type="text" class="form-control" id="phone no." name="phno" placeholder="Enter Phone Number"><span id="number" style="color: red;"></span><br>
          </div>
          <div class="form-group">
            <label for="exampleInputPayment.">Upload File</label>
           <input type="file" name="file" class="form-control">
            <span id="payment" style="color: red;"></span><br>
          </div>
           <div class="form-group">
            <label for="exampleInputPayment.">Any Experience</label>
           <input type="text" name="experience" class="form-control">
            <span id="payment" style="color: red;"></span><br>
          </div>




          <div class="form-group">
            <label for="exampleInputDesc.">Description</label>
            <textarea name="desc" rows="5"  data-msg="Please write something for us"
            placeholder="Description"></textarea>
          </div>
        </form>
        </div>
      
        <div class="modal-footer">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>

          <input type="submit" name="submit" class="btn btn-primary" >
          <input type="reset" class="btn btn-primary"   name="reset">
        </div>
    
     
  </div>
</div>
</div>
</div>

</section>



<?php include("include/footer.php"); ?>