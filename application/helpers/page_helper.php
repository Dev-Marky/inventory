<?php
function redirect_if($condition, $url) {
  if ($condition) {
    redirect($url);
  }
}