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
    public function sustainability()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/sustainability.html', compact('const'));
    }

    public function creator_detail()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/creator_detail.html', compact('const'));
    }

<<<<<<< HEAD
    public function contact()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/contact.html', compact('const'));
    }

    public function thankyou()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/thankyou.html', compact('const'));
=======
    public function news()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/news.html', compact('const'));
>>>>>>> 5956c0a9bfdecf1198d8fd5aba2d17169a169a21
    }

}
?>
