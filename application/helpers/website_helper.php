<?php
    function webinfo($param='')
    {
        $ci     =& get_instance();
        $db     =  $ci->db->query("SELECT * FROM tbl_web WHERE id='1' ")->row_array();
        return $db[$param];
    }
?>