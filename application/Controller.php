<?php
abstract class Controller
{
    protected $_view;
    
    public function __construct() {
        $this->_view = new View(new Request);
        /*TWIG INPLEMENTATION*/
        require_once 'assets/twig/vendor/autoload.php';
        $loader = new Twig_Loader_Filesystem('./views');

        /*DISABLE DEBUG OPTION*/
        //$this->_twig = new Twig_Environment($loader);

        /*ENABLE DEBUG FUNCTION*/
        $this->_twig = new Twig_Environment(
            $loader, ['debug'=>true, 'cache'=>false, /*other options */]
        );
        $this->_twig->addExtension(new \Twig_Extension_Debug());

        /**/
        /*CONSTANTES*/
        $this->_const = array();
        $jsondata = file_get_contents('routes/config.json'); 
        $data = json_decode($jsondata, true);
        foreach ($data as $key => $value) {
            $this->_const[$key]=$value;
        }
        if (isset($_GET['url'])) {
            $url=$_GET['url'];
        }else{
            $url='index';
        }
        if (strlen($url)>=3 && $url!='index') {
            $lan_string = substr($url, -3);
            switch ($lan_string) {
                case '_es':
                    $this->_const['LAN']='_es';
                    break;
                case '_en':
                    $this->_const['LAN']='_en';
                    break;
                default:
                    $this->_const['LAN']='default';
                    break;
            }
        }else{
            $this->_const['LAN']='default';
        }
        $searchVal = array('_es','_en');
        $url_cleaned = str_replace($searchVal, '', $url);

        if ($url_cleaned==='admin' || $url_cleaned==='admin/') {
            header("Location: https://app.coti.mx/admin");
        }

        $this->_const['active_'.$url_cleaned]=true;
        $this->_const['active_complete']=$url;
        $this->_const['active']=$url_cleaned;
    }
    
    abstract public function index();

}

?>