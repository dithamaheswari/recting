<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page | Recting Application</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="<?= BASEURL; ?>assets/css/style.css" rel="stylesheet">
</head>

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


<body class="bg-dark text-light">
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark py-3" data-bs-theme="dark">
        <div class="container">
        <img src="http://localhost/recting/public/assets/img/brand-logo-danger.svg" alt="Brand Logo" class="img-fluid brand-logo" width="62">
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

    <main class="home mt-5">
    

<div class="container">



    <!-- header-->
    
                
    <section class="header">
    <div class="header-container">
        <div class="left-section">
            <div class="movie-trailer-section">
                <iframe class="movie-trailer" src="<?= isset($data['movieDetails']) ? $data['movieDetails']['trailer'] : ''; ?>"></iframe>
              
                <div class="thumbnail-image">
                    <img src="<?= isset($data['movieDetails']) ? $data['movieDetails']['thumbnail'] : ''; ?>" />
                </div>
            </div>
        </div>

        <div class="right-section">
            <div class="rating-section">
                <div class="rating-box">
                    <div class="rating-circle"></div>
                    <div class="rating-value">
                        <p><?= isset($data['movieDetails']) ? $data['movieDetails']['rating'] : ''; ?></p>
                    </div>
                    <p class="rating-text">Rating</p>
                </div>
                <div class="director-info">
                    <p>Sutradara: <?= isset($data['movieDetails']) ? $data['movieDetails']['producer'] : ''; ?></p>
                </div>
                <div class="release-info">
                    <p><?= isset($data['movieDetails']) ? $data['movieDetails']['year_release'] : ''; ?></p>
                </div>
            </div>
            <div class="movie-title">
                <h2><?= isset($data['movieDetails']) ? $data['movieDetails']['title'] : ''; ?> judul ni bang</h2>
            </div>
            <div class="movie-description">
                <div class="separator-line"></div>
                <div class="movie-synopsis">
                    <p><?= isset($data['movieDetails']) ? $data['movieDetails']['sinopsis'] : ''; ?>sinopsis</p>
                </div>
                <div class="genre-info">
                    <p>Genre: <?= isset($data['movieDetails']) ? $data['movieDetails']['rating'] : ''; ?></p>
                </div>
                <div class="actor-info">
                    <p>Aktor: <?= isset($data['movieDetails']) ? $data['movieDetails']['actor'] : ''; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>


                <div class="row flex-row">
                    <div class="col-9 col-5 mt-5">

            <section class="recent">
                        <h2 class="text-warning">Rekomendasi Film</h2>
                        <div class="row mt-5">
                            <div class="col-12">
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                    <?php foreach ($data['movies_recent'] as $movie) { ?>
                                        
                                        <div class="swiper-slide">
                                        
                                        <img src="<?= BASEURL ?>img/thumbnails/<?= $movie['thumbnail'] ?>" alt="Thumbnail Movie" class="img-fluid rounded" style="aspect-ratio: 2.9/4;">
                                        <div class="wrapper p-3 rounded-bottom" style="background-color: rgba(255,255,255,0.04);">
                                        
                                        <a href="<?= BASEURL ?>filmselected?id=<?= $movie['id'] ?>"> <p class="text-light mb-0"><?= $movie['title']; ?> 
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
                    </section></div>

                


    <!-- Comment-->
    <div class="col-3 ">
    <div class="row mb-5 mt-5 d-flex">
            
            <h2 class="text-warning mb-5">Comments</h2>
                <form action="" method="post">
                                   
                    <div class="rateyo" id= "rating"
                    data-rateyo-rating="4"
                    data-rateyo-num-stars="5"
                    data-rateyo-score="3">
                    </div>
                    <span class='result'>0</span>
                    <input type="hidden" name="user_rating">

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
                  <textarea class="form-control" name="comment" id="" rows="3" placeholder="add comment"></textarea>
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Tanggal</label>
                  <input type="date"
                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="">

                </div>
                
                <button type="submit" class="btn btn-danger mb-3">Submit</button>
                
            </form>
                      
                        <hr>
                <?php foreach($data['comment'] as $comment) :?>
                <ul>
                <li><?= $comment['username'];?></li>
                    <li><?= $comment['user_rating'];?></li>
                    <li><?= $comment['comment'];?></li>
                    <li><?= $comment['tgl'];?></li>
                    
                
                </ul>
                <form action="" method="POST">
                
                <?php endforeach; ?>
            </div>
        </div>
     
                </div>

</div>

</div></main>

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

