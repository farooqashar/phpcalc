function calc($first, $opt, $second) {
    $result;

    switch ($opt) {
        case "add":
            $result = $first + $second;
            break;
        case "subtract":
            $result = $first - $second;
            break;
        case "multiply":
            $result = $first * $second;
            break;
        case "divide":
            $result = $first / $second;
            break;
        default: 
            $result = "Unable to complete request. Please try again. "
            break;
    }
}