<?php
class Blog extends CI_Controller {

    public function index()
    {
        echo 'hello world !';
    }

    public function comments()
    {
        echo 'Look at this !';
    }

    public function get($get1, $get2 = null)
    {
        echo 'get1 param = ' . $get1 . "\n";
        echo 'get2 param = ' . $get2 . "\n";
    }
}
