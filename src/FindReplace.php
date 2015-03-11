<?php

    class FindReplace {

        function replaceTarget($main, $target, $replacement)
        {
            $pattern = "*" . $target . "*";
            return preg_replace($pattern, $replacement, $main);
            // $temp = explode(" ", $main);
            // $results = array();
            // foreach($temp as $word) {
            //     if ($word == $target) {
            //         array_push($results, $replacement);
            //     } else {
            //         array_push($results, $word);
            //     }
            // }
            // return implode(" ", $results);
        }
    }

 ?>
