CRUD in ReadBean


//CREATE

//READ

//Select with multiple conditions

$findall = R::getAll('select * from pagecontent where page_id= :page_id AND status = :status', 
array(':page_id'=>$page_id,':status' => $status));

//UPDATE

//DELETE
