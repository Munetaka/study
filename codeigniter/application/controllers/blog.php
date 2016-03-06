<?php
class Blog extends CI_Controller {

    /*
     * override _remap()
     */
    public function _remap($method, $params = array())
    {
        $method = 'process_'.$method;
        if (method_exists($this, $method))
        {
            return call_user_func_array(array($this, $method), $params);
        }
        show_404();
    }

    public function process_index()
    {
        echo 'hello world !';
    }

    public function process_comments()
    {
        echo 'Look at this !';
    }

    public function process_get($get1, $get2 = null)
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
    }
}
