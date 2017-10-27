<?php

	// INSERT INTO
	function insert_db($nameTable, $data){
        while($element = each($data)){
            $insert[$element["key"]]="'".$element["value"]."'";
        }
        return $sql = "INSERT INTO `".$nameTable."` (".implode(",",array_keys($insert)).") VALUES (".implode(",",array_values($insert)).")";
    }


    // UPDATE
    function update_db($nameTable, $where, $data){
        while($element = each($data)){
            $update[$element["key"]]="`".$element["key"]."`='".$element["value"]."'";
        }
        while($element2 = each($where)){
            $where[$element2["key"]]=$element2["key"]."'".$element2["value"]."'";
        }
        return $sql = "UPDATE `".$nameTable."` SET ".implode(",",$update)." WHERE ".implode(",",$where);
    }


    // DELETE
     function delete_db($nameTable, $where){
        while($element = each($where)){
            $where[$element["key"]]=$element["key"]."'".$element["value"]."'";
        }
        return $sql = "DELETE FROM ".$nameTable." WHERE ".implode(",",$where);
    } 