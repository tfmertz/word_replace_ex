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

        /*
        input: "cat", "cat", "dog"
        output: "dog"

        Spec: Replace a letter in a multiple lettered word with another letter
        */
        function test_findTarget_word()
        {
            $test_FindReplace = new FindReplace;
            $input1 = 'cat';
            $input2 = 'cat';
            $input3 = 'dog';

            $result = $test_FindReplace->replaceTarget($input1, $input2, $input3);

            $this->assertEquals('dog', $result);
        }

        /*
        input: "The cat is in the hat", "cat", "dog"
        output: "The dog is in the hat"

        Spec: Replace a letter in a multiple lettered word with another letter
        */
        function test_findTarget_multipleWords()
        {
            $test_FindReplace = new FindReplace;
            $input1 = 'The cat is in the hat';
            $input2 = 'cat';
            $input3 = 'dog';

            $result = $test_FindReplace->replaceTarget($input1, $input2, $input3);

            $this->assertEquals('The dog is in the hat', $result);
        }


        /*
        input: "The cat is in the hat", "a", "o"
        output: "The cot is in the hot"

        Spec: swap all instances of a target with the instances of the replacement
        */
        function test_findTarget_partialWord()
        {
            $test_FindReplace = new FindReplace;
            $input1 = "The cat is in the hat";
            $input2 = "a";
            $input3 = "o";

            $result = $test_FindReplace->replaceTarget($input1, $input2, $input3);

            $this->assertEquals("The cot is in the hot", $result);
        }

        /*
        input: "The cat is in the hat", "CAt", "dog"
        output: "The dog is in the hat"
        Spec: swap all instances of a target with the instances of the replacement when case is inconsistent
        */
        function test_findTarget_partialWordCaseInsensitive()
        {
            $test_FindReplace = new FindReplace;
            $input1 = "The cat is in the hat";
            $input2 = "CAt";
            $input3 = "dog";

            $result = $test_FindReplace->replaceTarget($input1, $input2, $input3);

            $this->assertEquals("The dog is in the hat", $result);
        }

        /*
        input: "The cat is in ThE hat", "cat", "dog"
        output: "The dog is in ThE hat"
        Spec: swap all instances of a target with the instances of the replacement
        when case is inconsistent and save previous capitalizations
        */
        function test_findTarget_partialWordCaseInsensitiveIgnore()
        {
            $test_FindReplace = new FindReplace;
            $input1 = "The cat is in ThE hat";
            $input2 = "cat";
            $input3 = "dog";

            $result = $test_FindReplace->replaceTarget($input1, $input2, $input3);

            $this->assertEquals("The dog is in ThE hat", $result);
        }

        function test_findTarget_partialWordCaseInsensitiveIgnoreXCS()
        {
            $test_FindReplace = new FindReplace;
            $input1 = "I am walking my CaT to the catheDRal";
            $input2 = "cat";
            $input3 = "do";

            $result = $test_FindReplace->replaceTarget($input1, $input2, $input3);

            $this->assertEquals("I am walking my do to the doheDRal", $result);
        }
    }


 ?>
