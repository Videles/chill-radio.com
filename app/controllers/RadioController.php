<?php

class RadioController extends \Phalcon\Mvc\Controller
{
  public $url = 'http://chill-radio.com:8200';
  public $json = 'http://chill-radio.com/data.json';

  public function indexAction()
  {
    echo 'test';
  }

  public function getUrl() 
  {
    return $this->url;
  }

  public function getJson() 
  {
    return $this->json;
  }

  public function getContent()
  {
    $output = file_get_contents($this->getUrl());

    $temp_array = array();
    $search_for = "<td\s[^>]*class=\"streamstats\">(.*)<\/td>";
    $search_td = array('<td class="streamstats">','</td>');
    if(preg_match_all("/$search_for/siU",$output,$matches)) {
      foreach($matches[0] as $match) {
        $to_push = str_replace($search_td,'',$match);
        $to_push = trim($to_push);
        array_push($temp_array,$to_push);
	    }
    }

    return $temp_array;
  }

  public function loadJson()
  {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $this->getJson());
    $result = curl_exec($ch);
    curl_close($ch);

    return json_decode($result);
  }

  public function currentSongAction()
  {
    $content = $this->getContent();
    return $content[6];
  }

  public function currentViewersAction()
  {
    $content = $this->getContent();
    return $content[2];
  }

  public function recentSongsAction()
  {
    $json = $this->loadJson();
    return json_encode($json->recentSongs);
  }
}

