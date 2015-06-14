<?php
class Rss_model extends CI_Model {

        public function get_rss()
        {
                $data = [];
                $response = file_get_contents("http://news.google.com/?output=rss");
                $xml = simplexml_load_string($response);
                foreach ($xml->channel->item as $story){
                    $data["rssItem"][]=$story;
                }
                return $data;

        }//end get_rss
   
}//end Rss_model

