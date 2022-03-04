<?php
namespace controllers;
 use Ubiquity\attributes\items\router\Route;

 /**
  * Controller TestSecurity
  */
class TestSecurity extends \controllers\ControllerBase{

	public function index(){
		
	}
#[Route('hash')]
    public function hash(){
        $password='Hj4L)_df4G59';

        echo '<h2>md5</h2>';
        echo \md5($password).'<br>';
        echo \md5('azerty');
        echo '<h2>sha-1</h2>';
        echo \sha1($password).'<br>';
        echo \sha1('azerty');
        echo '<h2>sha-256</h2>';
        echo \hash('sha256',$password).'<br>';
        echo \hash('sha256','azerty');

        echo '<h2>password_hash</h2>';
        echo \password_hash($password, PASSWORD_DEFAULT).'<br>';
        echo $p1=\password_hash('azerty',PASSWORD_DEFAULT );
        echo $p2=\password_hash('azerty1234',PASSWORD_DEFAULT );
        if (\password_verify('azerty1234',$p2)){
            echo '<br> est ok';

        }

    }

}
