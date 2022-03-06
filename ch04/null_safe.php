<?php

$name = null;
if($payload !== null) {
  $user = $payload->user;

  if ($user !== null) {
    $data = $user->getData();

    if ($data !== null) {
      $name = $data->$name;
    }
  }
}

echo $name;