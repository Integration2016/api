<?php
function get_all_menus(){
require_once 'db.php';

    $db = new DB();
    $conn = $db->connect();

    if ($conn != FALSE) {
        $result = mysqli_query($conn, "SELECT * FROM hc4nmefvp_menus");
        $menus = array();

        if($result != FALSE) { 
            while ($menu = mysqli_fetch_array($result)) {
                $menus[] = $menu;
            }
            return $menus;
        }else{
            // TODO: better error handling
            return "failed select.";
        }
    }
    else {
        return "failed connect.";
    }
}
?>
