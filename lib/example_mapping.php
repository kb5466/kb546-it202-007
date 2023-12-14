<?php
function map_data($api_data)
{
    $records = [];
    foreach ($api_data as $data)
    {
        $record = []; // Initialize $record for each iteration

        if (is_array($data))
        {
            foreach ($data as $key => $value)
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
            array_push($records, $record);
        }
    }
    return $records;
}
?>