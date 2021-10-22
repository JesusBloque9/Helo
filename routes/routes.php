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

    public function home()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/home.html', compact('const'));
    }

    public function home_test1()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/home_test1.html', compact('const'));
    }

    public function creators()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/creators.html', compact('const'));
    }

    public function christine_ng()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/creators/christine_ng.html', compact('const'));
    }

    public function jeff_tremaine()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/creators/jeff_tremaine.html', compact('const'));
    }

    public function mike_marshall()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/creators/mike_marshall.html', compact('const'));
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

    public function contact()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/contact.html', compact('const'));
    }

    public function thankyou()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/thankyou.html', compact('const'));
    }
    
    public function news()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/news.html', compact('const'));
    }

    
    public function approach()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/approach.html', compact('const'));
    }

    public function new_mitsubishi()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/news/new-mitsubishi.html', compact('const'));
    }

    public function e404()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/404.html', compact('const'));
    }
    public function works()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/works.html', compact('const'));

    }

    public function privacy_terms()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/privacy_terms.html', compact('const'));

    }
    
    public function terms_of_use()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/terms_of_use.html', compact('const'));

    }

    public function home2()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/home_test2.html', compact('const'));

    }
}
?>
