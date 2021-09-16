<?php
    function webinfo($param='')
    {
        $ci     =& get_instance();
        $db     =  $ci->db->query("SELECT * FROM tbl_web WHERE id='1' ")->row_array();
        return $db[$param];
    }

    function social_media($url='')
    {
        $html = '
            <div class="social-links">
                <ul>
                    <li><a class="facebook" target="_blank" href="'.base_url().'/'.$url.'"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a class="twitter"  target="_blank" href="'.base_url().'/'.$url.'"><i class="fab fa-twitter"></i></a></li>
                    <li><a class="dribbble" target="_blank" href="'.base_url().'/'.$url.'"><i class="fab fa-dribbble"></i></a></li>
                    <li><a class="linkedin" target="_blank" href="'.base_url().'/'.$url.'"><i class="fab fa-linkedin"></i></a></li>
                    <li><a class="youtube"  target="_blank" href="'.base_url().'/'.$url.'"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        ';
        return $html;
    }
?>