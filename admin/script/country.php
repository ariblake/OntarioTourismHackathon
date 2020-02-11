<?php

require_once 'config.php';

// fetch

$query = "SELECT * FROM tbl_country ORDER BY country_name ASC"; 
// $result = $db->query($query); 


// if($result->num_rows > 0){ 
//     while($row = $result->fetch_assoc()){  
//         echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>'; 
//     } 
// }else{ 
//     echo '<option value="">Country not available</option>'; 
// } 


