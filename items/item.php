<div injection-id-url-active="/nav-menu.html"></div>
<div style='height: 5%; background-color: black;'></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
<script src="/libs/js/inject.js"></script>

<?php 
include($_SERVER['DOCUMENT_ROOT'].'/libs/php/session_checker.php');
include($_SERVER['DOCUMENT_ROOT'].'/libs/php/add_to_cart.php');

$connect = mysqli_connect("localhost", "root", "", "test");
?>
<!--    -->
<?php
    if(isset($_GET["item_id"])){
        $query = "SELECT * FROM item_list WHERE id =".$_GET["item_id"];
        $result = mysqli_query($connect, $query);
        if(mysqli_num_rows($result) == 1)
        {
            while($row = mysqli_fetch_array($result))
            {

                $query1 = "SELECT *
                FROM item_img_list
                INNER JOIN item_img_transaction ON item_img_list.id=item_img_transaction.item_img_id1
                WHERE item_img_transaction.item_id = ".$_GET["item_id"];
                $result1 = mysqli_query($connect, $query1);
                if(mysqli_num_rows($result1) > 0)
                    {
                        ?>
                        
                



                <link rel="stylesheet" type="text/css" href="item.css">
                <section class="items" id="items">
                  <ul>
                  <li>

                  

                  <link rel="stylesheet" href="/swiper.min.css">
<div class="swiper-container gallery-top">
    <div class="swiper-wrapper">
    <?php
    while($row1 = mysqli_fetch_array($result1))
                        { ?>
                        <?php echo $row1['path'].$row1['file'].'.'.$row1['extension'];?>
      <div class="swiper-slide" style="background-image:url(<?php echo $row1['path'].$row1['file'].'.'.$row1['extension'];?>)"></div>
      <?php } ?>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
  </div>
  <div class="swiper-container gallery-thumbs">
    <div class="swiper-wrapper">
    <?php
    while($row1 = mysqli_fetch_array($result1))
                        { ?>
      <div class="swiper-slide" style="background-image:url(<?php echo $row1['path'].$row1['file'].'.'.$row1['extension'];?>)"></div>
      <?php } ?>
    </div>
  </div>
                        

  <!-- Swiper JS -->
  <script src="/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      slidesPerView: 4,
      loop: true,
      freeMode: true,
      loopedSlides: <?php echo intdiv(mysqli_num_rows($result1),2); ?>, //looped slides should be the same
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      loop:true,
      loopedSlides: <?php echo intdiv(mysqli_num_rows($result1),2); ?>, //looped slides should be the same
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      thumbs: {
        swiper: galleryThumbs,
      },
    });
  </script>
                      
                            <?php
                        }else{
                            ?>
                                            <link rel="stylesheet" type="text/css" href="item.css">
                <section class="items" id="items">
                  <ul>
                  <li>

                  

                  <link rel="stylesheet" href="/swiper.min.css">
<div class="swiper-container gallery-top">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image:url(https://swiperjs.com/demos/images/nature-1.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(https://swiperjs.com/demos/images/nature-2.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(https://swiperjs.com/demos/images/nature-3.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(https://swiperjs.com/demos/images/nature-4.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(https://swiperjs.com/demos/images/nature-5.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(https://swiperjs.com/demos/images/nature-6.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(https://swiperjs.com/demos/images/nature-7.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(https://swiperjs.com/demos/images/nature-8.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(https://swiperjs.com/demos/images/nature-9.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(https://swiperjs.com/demos/images/nature-10.jpg)"></div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
  </div>
  <div class="swiper-container gallery-thumbs">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image:url(https://swiperjs.com/demos/images/nature-1.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(https://swiperjs.com/demos/images/nature-2.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(https://swiperjs.com/demos/images/nature-3.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(https://swiperjs.com/demos/images/nature-4.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(https://swiperjs.com/demos/images/nature-5.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(https://swiperjs.com/demos/images/nature-6.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(https://swiperjs.com/demos/images/nature-7.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(https://swiperjs.com/demos/images/nature-8.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(https://swiperjs.com/demos/images/nature-9.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(https://swiperjs.com/demos/images/nature-10.jpg)"></div>
    </div>
  </div>


  <!-- Swiper JS -->
  <script src="/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      slidesPerView: 4,
      loop: true,
      freeMode: true,
      loopedSlides: 5, //looped slides should be the same
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      loop:true,
      loopedSlides: 5, //looped slides should be the same
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      thumbs: {
        swiper: galleryThumbs,
      },
    });
  </script>

                        <?php
                        }
                      ?>


                    </li>
                
                    <li>
                    <h1>
                        <?php echo $row["name"]; ?>
                    <h1>
                        <h2>
                        $<?php echo $row["price"]; ?>
                    </h2>
                      <p>
                        <?php echo $row["description"]; ?>
                      </p>
                      <button type="hidden"onclick="this.children[0][0].click();">
                        add to cart
                        <form style="display: none" action="" method="POST">
                          <input style="display: none" type="submit" name="add_to_cart" value="<?php echo $row["id"];?>" />
                        </form>
                      </button>
                    </li>
                
                    </ul>
                </section>



                <?php
            }
        }else{
            echo "no item id";
        }
        ?>
        <?php
    }else{
        echo "no item id";
    }
?>

<div injection-id-url-active="/footer.html"></div>
<script>history.pushState({}, "", "")</script>

