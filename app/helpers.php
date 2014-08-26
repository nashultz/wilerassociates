<?php

function protected_link($text, $url, $permission, $attributes = null) {
  if (Auth::user()->can($permission)) {
        $attributes = HTML::attributes($attributes);
    return "<a href='{$url}' {$attributes}>{$text}</a>";
  }
}

function css($file) {
  $path = URL::to("assets/css/{$file}");
  return "<link href='{$path}' rel='stylesheet' type='text/css' />";
}

function js($file) {
  $path = URL::to("assets/js/{$file}");
  return "<script src='{$path}' type='text/javascript'></script>";
}

function img($location, $file, $attributes = array()) {
  $path = URL::to("assets/{$location}/img/{$file}");
  $attributes = HTML::attributes($attributes);
  return "<img src='{$path}' {$attributes} />";
}

function showimg($file, $attributes = array()) {
  $path = URL::to("{$file}");
  $attributes = HTML::attributes($attributes);
  return "<img src='{$path}' {$attributes} />";
}

function spacer($text) {
  return "<div class='clearfix spacer-{$text}'></div>";
}

function angularjs($file) {
  $path = URL::to("angularjs/{$file}");
  return "<script src='{$path}' type='text/javascript'></script>";
}

?>