<?php

function alert_show($msg, $type){

    $str = "";
    if ($msg != ""){

        $str = '<div class="alert alert-'.$type.' alert-dismissible fade show" role="alert" style="        position:fixed; top: 0px; left: 0px; width: 100%; z-index:9999;border-radius:0px;">
    '.$msg.'
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';

    }
    return $str;
}