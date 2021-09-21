<?php
class routes extends Controller
{
    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/home.html', compact('const'));
    }

    public function creators()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/creators.html', compact('const'));
    }

    public function news()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/news.html', compact('const'));
    }

}
?>
