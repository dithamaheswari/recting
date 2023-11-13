<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

class Filmselected extends Controller {
    public function index() {

        $data['title'] = "Halaman Filmselected";
        $data['movies_recent'] = $this->model('film_model')->getAllMovies();
        $data['movies_rating'] = $this->model('film_model')->getAllMoviesRating();
        $data['comment'] = $this->model("film_model")->getAllComment();
        

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
          
            $data['movieDetails'] = $this->model("film_model")->getMovie($id);
            if ($data['movieDetails']) {
               
                $this->view("Templates/header", $data);
                $this->view("home/filmselected", $data);
                $this->view("Templates/footer", $data);
            } else {
                $data['title'] = 'Movie not found';
                $this->view("Templates/header", $data);
                $this->view("home/filmselected", $data);
                $this->view("Templates/footer", $data);
            }
        } else {
            
            $data['title'] = 'Movie ID ngga masuk URL.';
            $this->view("Templates/header", $data);
            $this->view("home/filmselected", $data);
            $this->view("Templates/footer", $data);
        }
    } 
    


}


    
        

