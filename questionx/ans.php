<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleans.css">
    <title>Document</title>
</head>

<body class="center-items">
    <?php
    $ans1 = trim($_POST['question_1']);
    $ans2 = trim($_POST['question_2']);
    $ans3 = trim($_POST['question_3']);
    $ans4 = trim($_POST['question_4']);
    $ans5 = trim($_POST['question_5']);

    // $file_path = 'b1.txt';
    
    // // Open the file for reading
    // $file_handle = fopen($file_path, 'r');
    // $answer = array();
    // $i = 0;
    
    // if ($file_handle === false) {
    //     // Error handling if the file could not be opened
    //     echo "Failed to open the file.";
    // } else {
    //     // Read the file line by line
    //     while (($line = fgets($file_handle)) !== false) {
    //         $answer[$i] = trim($line); // Trim any extra whitespace
    //         $i++;
    //     }
    
    //     // Close the file handle
    //     fclose($file_handle);
    // }
    

    $mark = 0;
    $file_path = 'b.txt';

    // Open the file for reading
    $file_handle = fopen($file_path, 'r');
    $anshu = array();
    $i = 0;

    if ($file_handle === false) {
        // Error handling if the file could not be opened
        echo "Failed to open the file.";
    } else {
        // Read the file line by line
        while (($line = fgets($file_handle)) !== false) {
            $anshu[$i] = trim($line);
            $i = $i + 1;
        }
    }

    // Close the file handle
    fclose($file_handle);

    function getLastWord($string)
    {
        // Trim any leading or trailing whitespace
        $string = trim($string);

        // Split the string into an array of words
        $words = array();
        $words = explode(' ', $string);

        // Get the last word from the array
        $lastWord = end($words);

        return $lastWord;
    }


    if ((string) $ans1 === ($lastWord = getLastWord($answer[5]))) {
        $mark = $mark + 1;
        echo "1";
    }
    if ((string) $ans2 === ($lastWord = getLastWord($answer[12]))) {
        $mark = $mark + 1;
        echo "2";
    }
    if ((string) $ans3 === ($lastWord = getLastWord($answer[19]))) {
        $mark = $mark + 1;
        echo "3";
    }
    if ((string) $ans4 === ($lastWord = getLastWord($answer[26]))) {
        $mark = $mark + 1;
        echo "4";
    }
    if ((string) $ans5 === (string)($lastWord = getLastWord($answer[33]))) {
        $mark = $mark + 1;
        echo "5";
    }

    ?>
    <div class="main-sucess">
        <div class="quiz-sucess-container center-items">
            <div class="quiz-sucess-header">
                <h2 class="headerText">Your Marks</h2>
            </div>
            <div class="quiz-marks center-items">
                <div class="marks">
                    <?php echo $mark; ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>