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

    public function home_ss()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/home_ss.html', compact('const'));
    }

    public function home_test1()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/home_test1.html', compact('const'));
    }

    public function home_test2()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/home_test2.html', compact('const'));
    }

    public function home_test3()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/home_test3.html', compact('const'));
    }

    public function home_test4()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/home_test4.html', compact('const'));
    }

    public function home_test5()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/home_test5.html', compact('const'));
    }

    public function sustainability()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/sustainability.html', compact('const'));
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

    public function approach()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/approach.html', compact('const'));
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

    /*NEWS*/
    public function news()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/news.html', compact('const'));
    }
    
    public function creator_detail()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/creator_detail.html', compact('const'));
    }

    public function new_mitsubishi()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/news/new-mitsubishi.html', compact('const'));
    }

    public function set_free_richardson()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/news/free-richardson.html', compact('const'));
    }

    public function mama_hotdog_rocks()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/news/bobbi_rich.html', compact('const'));
    }

    public function lola_tangos()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/news/lola_tangos.html', compact('const'));
    }

    /*CREADORES*/
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

    public function sara_nesson()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/creators/sara_nesson.html', compact('const'));
    }

    public function kyle_ruddick()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/creators/kyle_ruddick.html', compact('const'));
    }

    public function daniel_junge()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/creators/daniel_junge.html', compact('const'));
    }

    public function william_maher()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/creators/william_maher.html', compact('const'));
    }

    public function nathan_crowley()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/creators/nathan_crowley.html', compact('const'));
    }

    public function glenn_kitson()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/creators/glenn_kitson.html', compact('const'));
    }

    public function sebastian_kite()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/creators/sebastian_kite.html', compact('const'));
    }
    
    //public function marissa_shrum()
    //{
    //    /*CONSTANTS*/$const=$this->_const;
    //    echo $this->_twig->render('sections/creators/marissa_shrum.html', compact('const'));
    //}

    public function michael_young()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/creators/michael_young.html', compact('const'));
    }
    
    public function free_richardson()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/creators/free_richardson.html', compact('const'));
    }

    public function roz()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/creators/roz.html', compact('const'));
    }

    public function craig_winslow()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/creators/craig_winslow.html', compact('const'));
    }

    public function bobbi_rich()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/creators/bobbi_rich.html', compact('const'));
    }

    public function les_enfants_terribles()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/creators/les_enfants_terribles.html', compact('const'));
    }

    public function marissa_shrum()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/creators/marissa_shrum_.html', compact('const'));
    }

    public function joseph_bennett()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/creators/joseph_bennett.html', compact('const'));
    }

    public function lola_tango()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/creators/lola_tango.html', compact('const'));
    }

    public function nepyru()
    {
        /*CONSTANTS*/$const=$this->_const;
        echo $this->_twig->render('sections/creators/nepyru.html', compact('const'));
    }


}
?>
