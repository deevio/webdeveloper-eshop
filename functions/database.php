<?php
/**
 * Get specific value from column of table
 *
 * @param int $id - id of query
 * @param string $tableColumn - column in table
 *
 * @return void $resultColumn - data from column of id 
 */


/*
     function getDataFromColumn($id, $tableColumn) {

        $sql = ' SELECT ' . $tableColumn . ' FROM ' .  self::TABLE_NAME . '  WHERE 

        id =  :id  LIMIT 1 ';

        $query = $this->db->prepare($sql);


        $query->execute(array( 

            ':id' => $id,
            
        ));

        $result = $query->fetchAll();
   
        $resultColumn =  $result[0][$tableColumn];

        return  $resultColumn;

    }

    */

    // dokoncit
?>