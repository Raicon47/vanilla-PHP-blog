<?php 
include("path.php");
include(ROOT_PATH . '/app/inc/header.php');

$posts = 'posts';
$topics = 'topics';
// create query
$query = "SELECT * FROM $posts";
$query1 = "SELECT * FROM $topics";
// get result 
$result = mysqli_query($conn, $query);
$result1 = mysqli_query($conn, $query1);
// fetch data 
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
$topics = mysqli_fetch_all($result1, MYSQLI_ASSOC);
// free result 
mysqli_free_result($result);
mysqli_free_result($result1);
// close connection 
mysqli_close($conn);


?>  

<link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/style.css' ?>">
<title>Tangul - Home</title>

<div class="container-fluid bg-white p-5" id="index-intro">
<h2 class="font-weight-bold">WELCOME TO TANGUL</h2>
    <img src="assets/images/author.jpg" alt="" class="img-fluid"><br>
    <i><small>Cyprian Jacob Nwaerema</small></i> <br>
   <a href="https://www.linkedin.com/in/cyprian-dev-40339772/" target="_blank">
   <div class="container">
   <img src="<?php echo BASE_URL . '/assets/images/icons/linkedin.png' ?>" height="30" alt="">  
   </a>
   <a href="https://twitter.com/CyprianDev" target="_blank">
   <img src="<?php echo BASE_URL . '/assets/images/icons/twitter.png' ?>" height="30" alt="">  
   </a>
   <a href="https://github.com/Raicon47" target="_blank">
   <img src="<?php echo BASE_URL . '/assets/images/icons/github.png' ?>" height="30" alt="">  
   </div>
   </a>
     <p>
     As a web developer, personal projects are important to us, so also are things we
     as individuals are passionate about. so Tangul is just one of those things for me.
     </p>

     <h4 class="font-weight-bold text-warning"">WHAT INSPIRED TANGUL?</h4>
     <p>
     My aim is to build a fully functional blog using vanilla PHP, to be able to just write
     codes and enjoy the pain in building applications without their framework. and also 
     a place where writers can share their amazing works. To me, it is an open
     source playground for creatives.
     </p>
     <h4 class="font-weight-bold text-warning"">THE FUTURE OF TANGUL</h4>
     <p>
    to be very honest with you i really do not carry any high hopes for Tangul, that is why
    i had to publish without so many parts of it incomplete. The aim is to not put in
    too much expecting too much. I mean, it should show prove to me it is worth giving
    more energy.
    But i also think it is an interesting project even for those who would use it to write 
    and also those who would read from it.
     </p>
     <p>
    Generally, i feel fulfilled. Yes, absolutely as i continue in my journey as a web developer
    and user of technology. It has been interesting, and yea i will be updating every part of this 
    project on the basis of whichever part requires it.
     </p>

</div>

<div class="container mt-4 bg-white p-4">
        <div class="row">

            <div class="col-lg-8 col-left">
                <h2 class="font-weight-bold">LATEST POSTS</h2>
                <hr>
               <div class="body mt-4">

               <?php foreach ($posts as $post): ?>   
                <div class="jumbotron p-4" id="article">

                 <div class="container">                  
                   <h5><?php echo $post['title']; ?></h5>
                      <p class="mt-1">
                    <img src="<?php echo BASE_URL . '/assets/images/post-images/' . $post['image']; ?>" id="article-img" alt="" ALIGN="left" class="post-image" alt="">
                      <?php echo html_entity_decode(substr($post['body'], 0, 150) . '...'); ?>
                    </p>
                    <small> <i><span id="quote">Quote -</span> 
                    <?php echo html_entity_decode(substr($post['quote'], 0, 50) . '...'); ?>
                    </i>
                    </small> <br>
                    <small class="text-secondary mr-3 ml-3">
                    <img src="<?php echo BASE_URL . '/assets/images/icons/user.png' ?>" height="15" alt="">  
                      <?php echo $post['author']; ?>
                    </small>
                    <small>
                     <img src="<?php echo BASE_URL . '/assets/images/icons/calendar-event.png' ?>" height="10" alt="">  
                    <?php echo date('F j, Y', strtotime($post['created_at'])); ?> 
                    </small> 
                     <br>
                    <a href="single.php?id=<?php echo $post['id']; ?>" class="btn mt-1 text-light shadow" id="custom-btn">Read More</a>
                 </div>

                 
                  
                  </div>
              <?php endforeach; ?>

               </div>
            </div>

            <div class="col-lg-4 col-right">
             <h3 class="text-warning font-weight-bold">Most Read - <small class="text-secondary">this week</small></h3>
             <div class="body p-4">

             <?php foreach ($posts as $post): ?>
             <div class="col-right-article">
             <strong><?php echo $post['title'] ?></strong> <br>
                 <a href="single.php?id=<?php echo $post['id']; ?>" id="underline">
              <?php echo html_entity_decode(substr($post['body'], 0, 30) . '...'); ?>
            </a>
             </div>
             <?php endforeach; ?>


             <div class="topics-container"> 
               <ul>
             <h3 class="text-warning font-weight-bold">Topics</h3>
                 <hr>
          <?php foreach ($topics as $topic): ?>
            <li id="topics-item"><a href="#"><?php echo $topic['topic_name']; ?></a></li>
            <small class="text-secondary" style="font-size:10px;"><?php echo $topic['descript']; ?></small>
            <hr>
          <?php endforeach; ?>
               </ul>
             </div>

             </div>
            </div>

    </div>
</div>

<!-- Posts Slider -->
<div class="container-fluid bg-light mt-5">
          <div class="posts-slider p-5">
            <h1 class="text-secondary">THEMES FOR FREE</h1>
      
            <div class="posts-wrapper">
              <div class="post text-center">
                <div class="inner-post p-2">
                  <img src="<?php echo BASE_URL . '/assets/images/slider-images/one.png' ?>" alt="" class="img-fluid inner-post-img">
            <a href="" class="btn btn-success mt-3">Download Now</a>
                </div>
              </div>
              <div class="post text-center">
                <div class="inner-post p-2">
                  <img src="<?php echo BASE_URL . '/assets/images/slider-images/two.png' ?>" alt=""  class="img-fluid inner-post-img">
            <a href="" class="btn btn-success mt-3">Download Now</a>
                </div>
              </div>
              <div class="post text-center">
                <div class="inner-post p-2">
                  <img src="<?php echo BASE_URL . '/assets/images/slider-images/three.png' ?>" alt=""  class="img-fluid inner-post-img">
            <a href="" class="btn btn-success mt-3">Download Now</a>
                </div>
              </div>
              <div class="post text-center">
                <div class="inner-post p-2">
                  <img src="<?php echo BASE_URL . '/assets/images/slider-images/four.png' ?>" alt=""  class="img-fluid inner-post-img">
            <a href="" class="btn btn-success mt-3">Download Now</a>
                </div>
              </div>
            </div>
          </div>
</div>
          
    
<?php 
include(ROOT_PATH . '/app/inc/footer.php');
?>