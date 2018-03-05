<?php
  if(!function_exists('get_instance'))
  {
      function get_instance()
      {
          $CI = &get_instance();
      }
  }

  if(!function_exists('lable'))
  {
      function lable($lable)
      {
        $ci = get_instance();
        $rs = $ci->lang->line($lable);
        if ($rs) {
          return  $rs;
        }
        else {
          return $lable;
        }
      }
  }






 ?>
