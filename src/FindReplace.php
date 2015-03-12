<?php

    class FindReplace {

        function replaceTarget($main, $target, $replacement)
        {

            $target_size = strlen($target);
            $final = $main;

            for ($i = 0; $i < strlen($main); $i++) {
                $main_temp = substr($final, $i, $target_size);
                if (strtolower($main_temp) == strtolower($target)) {
                    $final = substr($final, 0, $i) . $replacement . substr($final, ($i + $target_size));
                    $i += strlen($replacement);
                }
            }
            return $final;
        }
    }

 ?>
