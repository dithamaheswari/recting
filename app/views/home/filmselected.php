<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title']; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
    .swiper-button-next,
    .swiper-button-prev {
        background-color: rgba(33, 37, 41, 1);
        width: 42px;
        height: 42px;
        border-radius: 9999px;
    }

    .swiper-button-next:after,
    .swiper-button-prev:after {
        font-size: 1rem;
        color: white;
    }
</style>
</head>

<body class="bg-dark">
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark py-3" data-bs-theme="dark">
        <div class="container">
            <img src="img/recting.png" alt="Recting" width="110" height="70">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav d-flex justify-content-between align-items-center w-100">
                    <a class="nav-link" href="<?= BASEURL; ?>">Home</a>
                    <input type="text" class="form-control" placeholder="Searching movie" style="width: 300px !important;">
                    <a class="nav-link" href="<?= BASEURL; ?>login">Login</a>
                </div>
            </div>
        </div>
    </nav>

<div style="margin:10px;" class="bg-dark">

<div class="container">



    <!-- header-->
    
  
<div style="width: 1417px; height: 429.67px; position: relative">
  <div style="width: 951.30px; height: 429.67px; left: 0px; top: 0px; position: absolute">
    <div style="width: 642.92px; height: 429.67px; left: 0px; top: 0px; position: absolute">
    <iframe style="width: 642.92px; height: 429.67px; left: 0px; top: 0px; position: absolute; border: 1px solid" src="<?= isset($data['movieDetails']) ? $data['movieDetails']['trailer'] : ''; ?>"></iframe>


      <div style="width: 133px; height: 19px; left: 74px; top: 384.84px; position: absolute; color: white; font-size: 20px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Play Trailer</div>
      <div style="width: 47.57px; height: 47.57px; left: 20.61px; top: 368.63px; position: absolute">
        <div style="width: 47.57px; height: 47.57px; left: 0px; top: 0px; position: absolute; background: white; border: 1px solid"></div>
      </div>
    </div>
    <img style="width: 298.87px; height: 429.67px; left: 652.43px; top: -0px; position: absolute; border: 1px solid" src="<?= isset($data['movieDetails']) ? $data['movieDetails']['thumbnail'] : ''; ?>" />
  </div>
  <div style="width: 428px; height: 324.35px; left: 989px; top: 0.49px; position: absolute">
    <div style="width: 427.65px; height: 130.35px; left: 0.35px; top: 0px; position: absolute">
      <div style="width: 424.15px; height: 62.66px; left: 3.50px; top: 67.69px; position: absolute">
        <div style="width: 94.01px; height: 38.23px; left: 0px; top: 5.15px; position: absolute">
          <div style="width: 34.28px; height: 32.65px; left: 0px; top: 0.65px; position: absolute; background: #FBB500; border: 1px solid"></div>
          <div style="width: 56.29px; height: 22.99px; left: 37.73px; top: 15.24px; position: absolute; color: white; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 29px; word-wrap: break-word"> <p><?= isset($data['movieDetails']) ? $data['movieDetails']['rating'] : ''; ?></p></div>
          <div style="width: 55.49px; height: 13.48px; left: 38.52px; top: 0px; position: absolute; color: white; font-size: 14px; font-family: Inter; font-weight: 400; line-height: 17px; word-wrap: break-word">Rating</div>
        </div>
        <div style="width: 233px; height: 38px; left: 191.15px; top: 24.66px; position: absolute; color: white; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word"> <p>Sutradara :  <?= isset($data['movieDetails']) ? $data['movieDetails']['producer'] : ''; ?></p></div>
        <div style="width: 216.42px; height: 19.03px; left: 190.73px; top: 0px; position: absolute; color: white; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word"> <p> <?= isset($data['movieDetails']) ? $data['movieDetails']['year_release'] : ''; ?></p></div>
      </div>
      <div style="width: 283.81px; height: 45.98px; left: 0px; top: 0px; position: absolute; color: white; font-size: 32px; font-family: Inter; font-weight: 400; line-height: 58px; word-wrap: break-word"> <h2><?= isset($data['movieDetails']) ? $data['movieDetails']['title'] : ''; ?></h2></div>
    </div>
    <div style="width: 428px; height: 191px; left: 0px; top: 133.35px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 10px; display: inline-flex">
      <div style="width: 428px; height: 0px; border: 0.50px white solid"></div>
      <div style="width: 410.65px; height: 88.91px; color: white; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 19px; word-wrap: break-word"> <p> <?= isset($data['movieDetails']) ? $data['movieDetails']['sinopsis'] : ''; ?></p></div>
      <div style="width: 411px; height: 30px; color: white; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 19px; word-wrap: break-word"> <p>Genre :   <?= isset($data['movieDetails']) ? $data['movieDetails']['rating'] : ''; ?></p></div>
      <div style="width: 411px; height: 41px; color: white; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 19px; word-wrap: break-word"> <p>Aktor :   <?= isset($data['movieDetails']) ? $data['movieDetails']['actor'] : ''; ?></p></div>
    </div>
  </div>
</div>

<div class="container mt-5">
<section class="recent" style="margin-top: 120px;">
            <h2 class="text-warning">Terbaru Untukmu</h2>
            <p class="text-light">Film populer terbaru hanya untukmu</p>

            <div class="row mt-5">
                <div class="col-12">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                          <?php foreach ($data['movies_recent'] as $movie) { ?>
                            
                                <div class="swiper-slide">
                               
                                    <img src="<?= BASEURL ?>img/thumbnails/<?= $movie['thumbnail'] ?>" alt="Thumbnail Movie" class="img-fluid rounded" style="aspect-ratio: 2.9/4;">
                                    <div class="wrapper p-3 rounded-bottom" style="background-color: rgba(255,255,255,0.04);">
                                    
                                    <a href="<?= BASEURL ?>filmselected.php?id=<?= $movie['id'] ?>"> <p class="text-light mb-0"><?= $movie['title']; ?> 
                                    <span class="text-secondary">(<?= $movie['rating']; ?>)</span></p>    </a>
                                    </div>
                                </div>
                        
                        <?php } ?>

                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </section>
</div>
    


    <!-- Comment-->
    <div class="row mb-5">
            <div class="col-6">
                <h3>comment</h3>
                <form action="" method="post">
                                   
                    <div class="rateyo" id= "rating"
                    data-rateyo-rating="4"
                    data-rateyo-num-stars="5"
                    data-rateyo-score="3">
                    </div>
                    <span class='result'>0</span>
                    <input type="hidden" name="rating">

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

                    <script>


                        $(function () {
                            $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
                                var rating = data.rating;
                                $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
                                $(this).parent().find('.result').text('rating :'+ rating);
                                $(this).parent().find('input[name=rating]').val(rating);
                            });
                        });

                    </script>

                <div class="mb-3">
                  <label for="comment" class="form-label">Comment</label>
                  <textarea class="form-control" name="comment" id="" rows="3"></textarea>
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Tanggal</label>
                  <input type="date"
                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="">

                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
                
            </form>

                <?php foreach($data['comment'] as $comment) :?>
                <ul>
                <li><?= $comment['nama'];?></li>
                    <li><?= $comment['user_rating'];?></li>
                    <li><?= $comment['comment'];?></li>
                    <li><?= $comment['tgl'];?></li>
                    
                
                </ul>
                <form action="" method="POST">
                
                <?php endforeach; ?>
            </div>
        </div>
     




</div>

<script>
        var swiper = new Swiper(".mySwiperHero", {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next-hero",
                prevEl: ".swiper-button-prev-hero",
            },
        });

        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 5,
            spaceBetween: 20,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>

</html>

