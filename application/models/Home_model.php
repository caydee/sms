<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }

    public function getCounties()
    {
        $dbh = $this->db->get("counties");
        return $dbh->result();
    }

    public function getConstituencies($countyid)
    {
        $dbh = $this->db->where("county_id", $countyid)
            ->get("constituencies");
        return $dbh->result();
    }

    public function saveMsglist()
    {

    }

    public function saveMsgtemplate()
    {

    }
}