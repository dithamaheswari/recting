<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title']; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
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
                <!-- kurapikan agar winda tidak bingung...-->
                <section class="header">
                    <div style="width: 1417px; height: 429.67px; position: relative">
                        <div style="width: 951.30px; height: 429.67px; left: 0px; top: 0px; position: absolute">
                            <div style="width: 642.92px; height: 429.67px; left: 0px; top: 0px; position: absolute">
                            
                            <!-- trailer -->
                            <iframe style="width: 642.92px; height: 429.67px; left: 0px; top: 0px; position: absolute; border: 1px solid" 
                            src=""></iframe>
                            
                            <div style="width: 47.57px; height: 47.57px; left: 20.61px; top: 368.63px; position: absolute">
                               
                            </div>
                            </div>

                            <!-- thumbnail -->
                            <img style="width: 298.87px; height: 429.67px; left: 652.43px; top: -0px; position: absolute; border: 1px solid" 
                            src="<?= isset($data['movieDetails']) ? $data['movieDetails']['thumbnail'] : ''; ?>
                            http://localhost/recting/public/assets/img/thumbnails/download.jpeg" />
                        </div>

                        <div style="width: 428px; height: 324.35px; left: 989px; top: 0.49px; position: absolute">
                            <div style="width: 427.65px; height: 130.35px; left: 0.35px; top: 0px; position: absolute">
                                <div style="width: 424.15px; height: 62.66px; left: 3.50px; top: 67.69px; position: absolute">
                               
                                    <div style="width: 94.01px; height: 38.23px; left: 0px; top: 5.15px; position: absolute">
                                        
                                        <!-- star icon -->
                                        <div style="width: 34.28px; height: 32.65px; left: 0px; top: 0.65px; position: absolute;">
                                        <svg width="36" height="33" viewBox="0 0 36 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M27.5154 32.7895C27.2407 32.7906 26.9698 32.7258 26.7253 32.6005L17.9654 28.0145L9.20547 32.6005C8.92102 32.7501 8.60031 32.8169 8.2798 32.7933C7.95929 32.7696 7.65184 32.6566 7.39239 32.4669C7.13295 32.2772 6.93191 32.0186 6.81215 31.7203C6.69239 31.4221 6.6587 31.0963 6.71492 30.7798L8.43255 21.1096L1.35591 14.2391C1.13512 14.0187 0.978499 13.7425 0.902846 13.4399C0.827194 13.1373 0.835375 12.8198 0.926502 12.5214C1.02606 12.2162 1.20918 11.9449 1.4551 11.7385C1.70102 11.532 1.99989 11.3986 2.31778 11.3535L12.1083 9.92782L16.4195 1.11639C16.5602 0.825985 16.7798 0.581073 17.0532 0.409711C17.3266 0.238342 17.6427 0.147461 17.9654 0.147461C18.288 0.147461 18.6042 0.23835 18.8776 0.409711C19.151 0.58108 19.3706 0.825985 19.5113 1.11639L23.874 9.91065L33.6645 11.3363C33.9824 11.3815 34.2813 11.5149 34.5272 11.7213C34.7731 11.9278 34.9562 12.199 35.0558 12.5043C35.1469 12.8026 35.1551 13.1201 35.0794 13.4227C35.0038 13.7253 34.8472 14.0016 34.6264 14.2219L27.5498 21.0924L29.2674 30.7627C29.3287 31.0847 29.2966 31.4175 29.1749 31.7219C29.0531 32.0262 28.8468 32.2894 28.5803 32.4803C28.2693 32.6983 27.8948 32.807 27.5154 32.7895Z" fill="#FBB500"/>
                                        </svg>
                                        </div>

                                        <!-- rating -->
                                        <div style="width: 56.29px; height: 22.99px; left: 37.73px; top: 15.24px; position: absolute; color: white; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 29px; word-wrap: break-word"> 
                                        <p><?= isset($data['movieDetails']) ? $data['movieDetails']['rating'] : ''; ?>8.7/10</p></div>
                                    
                                        <div style="width: 55.49px; height: 13.48px; left: 38.52px; top: 0px; position: absolute; color: white; font-size: 14px; font-family: Inter; font-weight: 400; line-height: 17px; word-wrap: break-word">
                                        Rating</div>

                                    </div>

                                        <!-- producer -->
                                        <div style="width: 233px; height: 38px; left: 191.15px; top: 24.66px; position: absolute; color: white; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word"> 
                                        <p>Sutradara :  <?= isset($data['movieDetails']) ? $data['movieDetails']['producer'] : ''; ?>Christopher Nolan</p></div>

                                        <!-- year_release -->
                                        <div style="width: 216.42px; height: 19.03px; left: 190.73px; top: 0px; position: absolute; color: white; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word"> 
                                        <p> <?= isset($data['movieDetails']) ? $data['movieDetails']['year_release'] : ''; ?>2014</p></div>
                                </div>
                                
                                <!-- title -->
                                <div style="width: 283.81px; height: 45.98px; left: 0px; top: 0px; position: absolute; color: white; font-size: 32px; font-family: Inter; font-weight: 400; line-height: 58px; word-wrap: break-word"> 
                                <h2><?= isset($data['movieDetails']) ? $data['movieDetails']['title'] : ''; ?>INTERSTELLAR</h2></div>
                            </div>

                            <div style="width: 428px; height: 191px; left: 0px; top: 133.35px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 10px; display: inline-flex">
                                <div style="width: 428px; height: 0px; border: 0.50px white solid"></div>
                                
                                <!-- sinopsis -->
                                <div style="width: 410.65px; height: 88.91px; color: white; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 19px; word-wrap: break-word"> 
                                <p> <?= isset($data['movieDetails']) ? $data['movieDetails']['sinopsis'] : ''; ?>When Earth becomes uninhabitable in the future, a farmer and ex-NASA pilot, Joseph Cooper, is tasked to pilot a spacecraft, along with a team of researchers, to find a new planet for humans.</p></div>
                               
                                <!-- Genre -->
                                <div style="width: 411px; height: 30px; color: white; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 19px; word-wrap: break-word"> 
                                <p>Genre :   <?= isset($data['movieDetails']) ? $data['movieDetails']['rating'] : ''; ?>Petualangan , Drama , Sci-Fi</p></div>
                                
                                <!-- Aktor -->
                                <div style="width: 411px; height: 41px; color: white; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 19px; word-wrap: break-word"> 
                                <p>Aktor :   <?= isset($data['movieDetails']) ? $data['movieDetails']['actor'] : ''; ?>Matthew McConaughey , Anne Hathaway , Jessica Chastain</p></div>
                            </div>
                        </div>
                    </div>

                </section>

                <div class="row flex-row">
                    <div class="col-9 col-5 mt-5">

                        <section class="favorite">
                            <h2 class="text-warning text-semibold">Rekomendasi</h2>
            

                            <div class="row mt-5">
                                <div class="col-12">
                                    <div class="swiper mySwiper">
                                        <div class="swiper-wrapper">
                                            <?php foreach ($data['movies_rating'] as $movie) { ?>
                                                <div class="swiper-slide">
                                                    <img src="<?= BASEURL ?>assets/img/thumbnails/<?= $movie['thumbnail'] ?>" alt="Thumbnail Movie" class="img-fluid rounded" style="aspect-ratio: 2.9/4;">
                                                    <a href="<?= BASEURL ?>filmselected?id=<?= $movie['id']; ?>">
                                                        <div class="wrapper p-3 rounded-bottom" style="background-color: rgba(255,255,255,0.04);">
                                                            <p class="text-light mb-0"><?= $movie['title']; ?> <span class="text-secondary">(<?= $movie['rating']; ?>)</span></p>
                                                        </div>
                                                    </a>
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
                                       
                    <?php endforeach; ?>
            </div>
        </div>
        
    </div>

</main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

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

