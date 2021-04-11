<?php

// define("BASE_URL", "http://localhost:8080/labdanny/");
define("BASE_URL", "https://labdanny.herokuapp.com/");


function url(string $uri = null){
  if($uri){
    return BASE_URL . $uri;
  }
  return BASE_URL;
}