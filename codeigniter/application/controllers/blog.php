<?php
class Blog extends CI_Controller {

    public function  __construct()
    {
        parent::__construct();
    }

    /*
     * override _remap()
     */
    /*
    public function _remap($method, $params = array())
    {
        $method = 'process_'.$method;
        if (method_exists($this, $method))
        {
            return call_user_func_array(array($this, $method), $params);
        }
        show_404();
    }
    */

    public function index()
    {
        $header_data = array(
            'title' => 'My Blog',
        );
        $header = 'Welcome to my Blog!';
        $body = new Blog_Body($header);
        $this->load->view('common/header', $header_data);
        $this->load->view('blogview', $body);
        $this->load->view('common/footer');
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

    public function _output($output)
    {
        if ($this->output->cache_expiration > 0)
        {
            $this->output->_write_cache($output);
        }
        echo $output;
    }

    // even if this medhod define as pulbic, we can't access method if it stats underscore.
    private function _test()
    {
        echo 'private method';
    }
}

class Blog_Body {

    public function __construct($header)
    {
        $this->header = $header;
    }

}
