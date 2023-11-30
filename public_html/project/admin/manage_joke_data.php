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

function process_joke($joke,$columns,$mappings)
{
    $record = [];
    $record["body"] = $joke["body"];
    $record["category"] = $joke["category"];
    $record["id"] = $joke["id"];
    $record["rating"] = $joke["rating"];
    $record["success"] = $joke["success"];

    foreach($columns as $column){
        if(in_array($columns, ["id", "api_id", "urls"])){
            continue;
        }
        if(array_key_exists($column,$joke)){
            $record[$column] = $joke[$column];
            if(empty($record[$column])){
                if(str_contains($mappings[$column], "int")){
                    $record[$column] = "0";
                }
            }
        }
    }
    error_log("Record: " . var_export($record, true));
    return $record;     
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
    $stmt = $db->prepare("SHOW COLUMNS FROM t_jokes");
    $stmt->execute();
    $columnsData = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $columns = array_column($columnsData, 'Field');
    $mappings = [];
    foreach ($columnsData as $column) {
        $mappings[$column['Field']] = $column['Type'];
    }
    $ignored = ["id", "created", "modified"];
    $columns = array_diff($columns, $ignored);

    $jokes = [];
    foreach ($data as $breed) {
        $record = process_joke($breed, $columns, $mappings);
        array_push($breeds, $record);
    }
    insert_into_db($db,$jokes,$mappings);
}
$action = se($_POST, "action", "", false);
if ($action) {
    switch ($action) {
        case "breeds":
            $result = get("https://punpal-random-joke-generator-api.p.rapidapi.com/random", "API_KEY");
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
