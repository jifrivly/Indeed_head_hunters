<?php  
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
| ------------------------------------------------------------------- 
| EMAIL CONFING 
| ------------------------------------------------------------------- 
| Configuration of outgoing mail server. 
| */


    $config['protocol'] = 'smtp';
    $config['smtp_host'] = 'smtp.sparkpostmail.com';  
    $config['smtp_port'] = '587';
    $config['validate'] = TRUE;
    $config['smtp_timeout'] = '30';
    $config['smtp_user'] = 'SMTP_Injection';
    $config['smtp_pass'] = '90bdc3bef18c1747f6eac041504a9dcba75f1e4f';
    $config['charset'] = 'utf-8';
    // $config['charset'] = 'iso-8859-1';
    $config['mailtype'] = 'html';
    $config['wordwrap'] = TRUE;
    $config['smtp_crypto'] = 'tls';
    $config['newline'] = "\r\n";
    $config['crlf'] = "\r\n";

    
    

//     $config['protocol'] = 'smtp';
// $config['smtp_host'] = 'smtp.gmail.com';  
// // $config['smtp_host'] = 'ssl://smtp.googlemail.com';  
// // $config['smtp_port'] = '465';
// $config['smtp_port'] = '587';
// $config['smtp_timeout'] = '30';
// $config['smtp_crypto'] = 'tls';
// $config['smtp_user'] = 'headhunters.indeed.com';  
// $config['smtp_pass'] = '9744344978';
// $config['charset'] = 'utf-8';
// $config['mailtype'] = 'html';
// $config['wordwrap'] = TRUE;
// $config['newline'] = "\r\n";



/* End of file email.php */  
/* Location: ./system/application/config/email.php */


?>


<!-- stream_socket_enable_crypto(): SSL operation failed with code 1. OpenSSL Error messages: error:14090086:SSL routines:ssl3_get_server_certificate:certificate verify failed -->
<!-- Error in sending Email.220 smtp.googlemail.com ESMTP i127sm19983155pgc.12 - gsmtp 
hello: 250-smtp.googlemail.com at your service, [137.97.189.109]
250-SIZE 35882577
250-8BITMIME
250-STARTTLS
250-ENHANCEDSTATUSCODES
250-PIPELINING
250-CHUNKING
250 SMTPUTF8
starttls: 220 2.0.0 Ready to start TLS
The following SMTP error was encountered: KGA��yh��;S���4�q.�h,������qV^�=��n�75������7�D��u�^������"�%���n6��E9#�˟�@V�@ �!� ��'���_��{]�9D	�9Ʈ�z�d�S�7q�H��d�&�8E�UY�N	Z��በ��k�%Y��- � �X���}jzno"�z:׃)�	�����a�a薵��4���h�C��-%�v�n�\_4c��^诱�<��F��  -->
