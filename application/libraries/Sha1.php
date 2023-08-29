<?php
     if(!function_exists('sha1_file'))
     {
          function sha1_file($file = null)
          {
               if(is_null($file) || !file_exists($file))
               {
                    return trigger_error('File is null or does not exists');
               }

               return sha1(file_get_contents($file));
          }
     }
?>