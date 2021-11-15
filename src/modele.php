<?php  
    function display($list) {
        for ($i = 0; $i<count($list);$i++){
            echo"<option value='".$list[$i]["name"]."'>".$list[$i]["name"]."</option>;";           
            }
    }

    function loadmeat() {
        global $c;
        $sql = "SELECT * FROM viande";
        $res = mysqli_query($c, $sql);
        $list = [];
        while($row = mysqli_fetch_assoc($res)) {
            $list[] = $row;
        }
        return $list;
        
    
    }
    
    function loadbread() {
        global $c;
        $sql = "SELECT * FROM pain";
        $res = mysqli_query($c, $sql);
        $list = [];
        while($row = mysqli_fetch_assoc($res)) {
            $list[] = $row;
        }
        return $list;
        
    
    }
    
    
    function loaddrinks() {
        global $c;
        $sql = "SELECT * FROM boissons";
        $res = mysqli_query($c, $sql);
        $list = [];
        while($row = mysqli_fetch_assoc($res)) {
            $list[] = $row;
        }
        return $list;
        
    
    }
    
    function displaydrinks($list) {
        for ($i = 0; $i<count($list);$i++){
            // echo "<br/><li>Boissons : ".$list[$i]["name"].$list[$i]["volume"]."</li>";
            //echo "<li>Volume : ".$list[$i]["volume"]."</li>";
            echo"<option value='".$list[$i]["name"]."'>".$list[$i]["name"].$list[$i]["volume"]."</option>;"; 
            }
    }
    function loadsauce() {
        global $c;
        $sql = "SELECT * FROM sauce";
        $res = mysqli_query($c, $sql);
        $list = [];
        while($row = mysqli_fetch_assoc($res)) {
            $list[] = $row;
        }
        return $list;
        
    
    }
?>
