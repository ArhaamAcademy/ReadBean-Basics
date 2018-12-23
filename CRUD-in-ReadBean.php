CRUD in ReadBean


//CREATE

//READ

//Select with multiple conditions

$findall = R::getAll('select * from pagecontent where page_id= :page_id AND status = :status', 
array(':page_id'=>$page_id,':status' => $status));

$beans=R::find("books","active=? AND id=?",array(1,1));

$bean=R::findOne("books","active=? AND id=?",array(1,1));

$needles = R::find('needle',' haystack = :haystack ORDER BY :sortorder', 
    array( ':sortorder'=>$sortorder, ':haystack'=>$haystack ));

//UPDATE

//DELETE
