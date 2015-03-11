<?php

    require_once 'src/FindReplace.php';

    class FindReplaceTest extends PHPUnit_Framework_TestCase
    {
        /*
        input: one main letter, letter to target,  and one letter to replace target
        output: second letter

        input: “a”, “a”, “b”
        output: “b”

        Spec: find target letter (a) and replace with new letter (b)
        */
        function test_findTarget_oneLetter()
        {
            $test_FindReplace = new FindReplace;
            $input1 = 'a';
            $input2 = 'a';
            $input3 = 'b';

            $result = $test_FindReplace->replaceTarget($input1, $input2, $input3);

            $this->assertEquals('b', $result);
        }

        /*
        input: "a b", "a", "b"
        output: "b b"

        Spec: Replace a letter in a multiple lettered word with another letter
        */
        function test_findTarget_multipleLetter()
        {
            $test_FindReplace = new FindReplace;
            $input1 = 'a b';
            $input2 = 'a';
            $input3 = 'b';

            $result = $test_FindReplace->replaceTarget($input1, $input2, $input3);

            $this->assertEquals('b b', $result);
        }

    }


 ?>
