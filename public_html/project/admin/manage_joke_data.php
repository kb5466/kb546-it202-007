<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../../partials/nav.php");
if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: " . get_url("home.php")));
}

function insert_into_db($db,$jokes,$mappings)
{
    $query = "INSERT INTO `table_jokes` ";
    if(count($jokes)>0){
        $cols = array_keys($jokes[0]);
        $query .= "(" . implode(",", array_map(function ($col) {
            return "`$col`";
        }, $cols)) . ") VALUES ";
    }

    $values = [];
    foreach ($jokes as $i => $joke)
    {
        $jokeholder = array_map(function ($v) use ($i){
            return ":" . $v . $i;
        }, $cols);
        $values[] = "(" . implode("," , $jokeholder) . ")";
        $query .= implode(",",$values);

        $updates = array_reduce($cols, function($carry,$col){
            $carry[] = "`$col` = VALUES(`$col`)";
            return $carry;
        },[]);

        $query .= " ON DUPLICATE KEY UPDATE " . implode(",", $updates);
        $stmt = $db->prepare($query);
        foreach($jokes as $i => $joke){
            foreach($cols as $col){
                $placeholder = ":$col$i";
                $val = isset($joke[$col]) ? $joke[$col] : "";
                $param = PDO::PARAM_STR;
                if (str_contains($mappings[$col], "int")) {
                    $param = PDO::PARAM_INT;
                }
                $stmt->bindValue($placeholder, $val, $param);
            }
        }

        try{
            $stmt->execute();
        }catch(PDOException $e){
            error_log(var_export($e, true));
        }
    }
}

function process_jokes($result)
{
    $status = se($result, "status", 400, false);
    if($status !=200){
        return;
    }

    $data_string = html_entity_decode(se($result, "response", "{}", false));
    $wrapper = "{\"data\":$data_string}";
    $data = json_decode($wrapper, true);
    if (!isset($data["data"])) {
        return;
    }
    $data = $data["data"];
    error_log("data: " . var_export($data, true));
    $db = getDB();
    $stmt = $db->prepare("SHOW COLUMNS FROM table_jokes");
    $stmt->execute();
    $columnsData = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Preparing columns and mappings
    $columns = array_column($columnsData, 'Field');
    $mappings = [];
    foreach ($columnsData as $column) {
        $mappings[$column['Field']] = $column['Type'];
    }
    $ignored = ["id", "created", "modified"];
    $columns = array_diff($columns, $ignored);

    // Proccess joke
    $jokes = [];
    foreach ($data as $joke) {
        if (is_array($joke))
        {
            foreach ($joke as $key => $value)
            {
                switch ($key)
                {
                    case "body":
                        $record["body"] = $value;
                        break;
                    case "category":
                        $record["category"] = $value;
                        break;
                    case "id":
                        $record["id"] = $value;
                        break;
                    case "rating":
                        $record["rating"] = $value;
                        break;
                    default:
                        // Handle other cases or keys if needed
                        break;
                }
            }
            array_push($jokes, $record);
    }
    insert_into_db($db,$jokes,$mappings);
}
$action = se($_POST, "action", "", false);
if ($action) {
    switch ($action) {
        case "breeds":
            $result = get("https://punpal-random-joke-generator-api.p.rapidapi.com/random", "API_KEY",[],true, "punpal-random-joke-generator-api.p.rapidapi.com");
            process_jokes($result);
            break;
    }
}
?>
<div class="container-fluid">
    <h1>Joke Management</h1>
    <div class="row">
        <div class="col">
            <!-- Breed refresh button -->
            <form method="POST">
                <input type="hidden" name="action" value="jokes" />
                <input type="submit" class="btn btn-primary" value="Refresh jokes" />
            </form>
        </div>
    </div>
</div>
