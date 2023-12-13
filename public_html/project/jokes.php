<?php
require(__DIR__ . "/../../partials/nav.php");
$result = get("https://punpal-random-joke-generator-api.p.rapidapi.com/random", "API_KEY",[],true, "punpal-random-joke-generator-api.p.rapidapi.com");
error_log("Response: " . var_export($result, true));
if (se($result, "status", 400, false) == 200 && isset($result["response"])) {
    $result = json_decode($result["response"], true);
} else {
    $result = [];
}
?>
<div class="container-fluid">
    <h1> Joke Demo </h1>
    <div class="row">
        <p class="card-text">
        <?php foreach($result as $item) : ?>
                <?php
                if (is_array($item)) {
                    foreach ($item as $key => $value) {

                        echo "key: " . $key . "<br>";
                        echo "value:  " . $value . "<br>"; // Display each value on a new line
                    }
                } else {
                    echo $item . "<br>"; // Display non-array values directly
                }
                ?>
            <?php endforeach; ?>
        </p>
    </div>
</div>