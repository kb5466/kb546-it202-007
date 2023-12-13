<?php
require(__DIR__ . "/../../../partials/nav.php");
if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: " . get_url("home.php")));
}

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["action"]) && $_GET["action"] === "jokes") {
    // Fetch data from the API
    $result = get("https://punpal-random-joke-generator-api.p.rapidapi.com/random", "API_KEY", [], true, "punpal-random-joke-generator-api.p.rapidapi.com");
    error_log("Response: " . var_export($result, true));

    if (se($result, "status", 400, false) == 200 && isset($result["response"])) {
        $result = json_decode($result["response"], true);
        process_jokes($result);
        }
         else {
        flash("Failed to fetch jokes data.", "danger");
    }
}
?>
<div class="container-fluid">
    <h1>Joke Management</h1>
    <div class="row">
        <div class="col">
            <!-- Refresh button -->
            <form method="GET">
                <input type="hidden" name="action" value="jokes" />
                <input type="submit" class="btn btn-primary" value="Refresh jokes" />
            </form>
        </div>
    </div>
</div>
