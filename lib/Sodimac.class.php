<?php

setlocale(LC_ALL, 'es_ES.UTF-8');

class Sodimac 
{

  private $URL;
  private $ch;
  private $response;

  private $sku;

  public function __construct($s)
  {
    $this->sku = $s;

    $this->URL   = "http://www.sodimac.cl/sodimac-cl/product/".$this->sku."/";
    $this->ch = curl_init();
    curl_setopt($this->ch, CURLOPT_URL, $this->URL);
    curl_setopt($this->ch, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($this->ch, CURLOPT_USERAGENT,"Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.1) Gecko/2008070208 Firefox/3.0.1");
    curl_setopt($this->ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($this->ch, CURLOPT_SSL_VERIFYPEER, false);
    $this->response = curl_exec($this->ch);
  }

  public function isValid()
  {
    preg_match_all("(<div class=\"sku\" id=\"skuIdPicker\">\s+SKU: &nbsp;(.*)</div>)siU", $this->response,$s);
    $c = array('-','.','$');
    $r = (int) str_replace($c, '',$s[1][0]);
    if($this->sku == $r)
    {
      return true;
    }
    else
    {
      return false;
    }
  }

  public function getNombreProducto()
  {
    return $this->getMarca()." ".$this->getDescripcion();
  }

  public function getMarca()
  {
    preg_match_all("(<div class=\"marca\" style=\"word-wrap:break-word;white-space:nowrap;\">(.*)</div>)siU", $this->response,$marca);
    $t = array('&aacute;','&eacute;','&iacute;','&oacute;','&uacute;');
    $n = array('á','é','í','ó','ú');
    $r = str_replace($t,$n,$marca[1][0]);
    return trim($r);
  }

  public function getDescripcion()
  {
    preg_match_all("(<span id=\"productDecription\" style=\"word-wrap:break-word; word-break:normal;\">&nbsp;(.*)</span>)siU", $this->response,$productDecription);
    
    $t = array('&aacute;','&eacute;','&iacute;','&oacute;','&uacute;');
    $n = array('á','é','í','ó','ú');
    $r = str_replace($t,$n,$productDecription[1][0]);
    return trim($r);
  }

  public function getPrecioCMR()
  {
    preg_match_all("(<div style=\"\">\s*(.*)</div>)siU", $this->response,$precioCMR);

    $c = array(' ','.','$');
    $r = str_replace($c, '',$precioCMR[1][0]);

    return (int) $r;
  }

  public function getUnidadMedCMR()
  {
    preg_match_all("/<div\s+class=\"unidadVenta\"\s*>\s*(.*)</", $this->response, $unidadMedCMR);

    return trim($unidadMedCMR[1][0]);
  }

  public function getPrecioInternet()
  {
    preg_match_all("(<div style=\"\">\s*Internet:&nbsp;(.*)</div>)siU", $this->response,$precioInternet);

    $c = array(' ','.','$');
    $r = str_replace($c, '',$precioInternet[1][0]);
    return (int) $r;
  }

  public function getUnidadMedInt()
  {
    preg_match_all("(<div class=\"unidadVenta2\">\s*(.*)</div>)siU", $this->response,$unidadMedInt);
    return trim($unidadMedInt[1][0]);
  }

  public function close()
  {
    curl_close ($this->ch);
  }
  public function getError()
  {
    $error = curl_error($this->ch);
    return $error;
  }
  
}
?>