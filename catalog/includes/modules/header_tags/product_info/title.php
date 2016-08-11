<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of title
 *
 * @author Abhijeet
 */
class ht_productInfo_title
{

    function parse()
    {
        global $oscTemplate;
        /* module specific code goes here */
        $oscTemplate->setTitle('New Page Title Name, ' . $oscTemplate->getTitle());
    }

}

?>