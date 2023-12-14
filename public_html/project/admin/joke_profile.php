<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../../partials/nav.php");

if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    //die(header("Location: " . get_url("home.php")));
    redirect("home.php");
}

if(isset($_POST["category"]) && isset($_POST["body"]))
{
    $category = se($_POST, "category", "", false);
    $body = se($_POST, "body", "", false);
    if(empty($category))
    {
        flash("Joke Category Required","warning");
    }
    else{
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO CA_jokes (name, description, is_active) VALUES(:name, :desc, 1)");
    }
}
?>
<h1>Create a Joke!</h1>
<form method = "POST">
    <div>
        <label for="category">Category</label>
        <input id="category" category="category" required />
    </div>
        <label for="joke">Joke</label>
        <textarea name="description" id="body"></textarea>
    <div></div>
    <input type="submit" value="Create joke">
<?php
//note we need to go up 1 more directory
require_once(__DIR__ . "/../../../partials/flash.php");
?>
