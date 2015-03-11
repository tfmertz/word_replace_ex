<?php

    class FindReplace {

        function replaceTarget($main, $target, $replacement)
        {
            // $pattern = "*" . $target . "*";
            // return preg_replace($pattern, $replacement, $main);
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

            $target_size = strlen($target);
            $final = $main;

            for ($i = 0; $i < strlen($main); $i++) {
                $main_temp = substr($main, $i, $target_size);

                if ($main_temp == $target) {
                    $final = substr($final, 0, $i) . $replacement . substr($final, ($i + $target_size), (strlen($main) - ($i + $target_size)));
                }
            }
            return $final;
        }
    }

 ?>
