<?php
/**
 * Created by PhpStorm.
 * User: kolsha
 * Date: 03.10.17
 * Time: 11:00
 */

class Auto_ru
{
    private $public_key = '';
    private $private_key = '';
    private $API_URL = '';

    #---------------------------------------------#
    public function __construct();
    #---------------------------------------------#
    public function GetCategoryList();
    #---------------------------------------------#
    public function GetSearchForm($category_id = 15);
    #---------------------------------------------#
    public function GetRegions($geo = null);
    #---------------------------------------------#
    public function GetAds($geo = 87, $category_id = 15, $offset = 0);
    #---------------------------------------------#
    public function GetAdDetails($sale_id, $category_id, $section_id);
    #---------------------------------------------#
    public function GetAdPhones($sale_id, $category_id, $section_id);
    #---------------------------------------------#
}

