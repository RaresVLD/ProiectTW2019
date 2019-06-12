<?php
/**
 * Created by PhpStorm.
 * User: Tudor
 * Date: 11-May-19
 * Time: 12:43 AM
 */

class Faq extends Model {

    public function getAllFaqs(){
        $result = $this->query('SELECT * FROM faq;');

        return $result;
    }

}
