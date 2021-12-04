<?php    

    if (
        isset($_POST['name'])
        && isset($_POST['email'])
        && $_POST['name']!=='' 
        && $_POST['email']!=='' 
        && isset($_POST['subject']) 
        && isset($_POST['message']) 
      ){
        $html_nombre='<p style ="margin:5px 0;"><strong>Name:</strong> '.$_POST["name"].'</p>';
        $html_email='<p style ="margin:5px 0;"><strong>Email:</strong> '.$_POST["email"].'</p>';
        $html_subject='<p style ="margin:5px 0;"><strong>Telephone:</strong> '.$_POST["subject"].'</p>';
        $html_message='<p style ="margin:5px 0;"><strong>Message:</strong> '.$_POST["message"].'</p>';
    }else{
      die('campos vacios');
    }

    $html = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
          <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
          <title></title>
        </head>
        <body>
        <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td>
            <table border="0" cellspacing="0" cellpadding="0" width="600" align="center">
          <tr style="background:#1994ff; height:21px;">
            <td colspan="5" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight: 500; color: #1994ff;"></td>
          </tr>
              <tr>
                <td width="17"></td>
                <td width="569" colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">
                  '.$html_nombre.'
                  '.$html_email.'
                  '.$html_subject.'
                  '.$html_message.'
                  </td>
                <td width="14"></td>
              </tr>
          <tr style="background:#1994ff; height:21px;">
            <td colspan="5"></td>
          </tr>
        </table></td>
          </tr>
        </table>
        </body>
        </html>
    ';
    $url = 'https://bloque9.email/v1/send/';
    $post = array(
        //'id'      => 'rhpjv5wejb40ywmw',//test
        //'key'     => 'jvfhku3tdfzjyg3r',//test
        'id'      => 'eckocojlaxxnsrxc',//produccion
        'key'     => 'qhq2uzbi4r74wezg',//produccion
        'subject' => 'Contact Form',
        'message' => $html
    );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $result=curl_exec ($ch);
    curl_close ($ch);
    $result=json_decode($result, true);
    print_r($result['status']);
?>
