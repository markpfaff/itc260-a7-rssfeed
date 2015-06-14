<?php
//rss index.php
$this->load->view($this->config->item('theme') . 'header');
?>

<?php 

foreach($stories['rssItem'] as $rssItem => $item){
  echo '<a href="' . $item->link . '">' . $item->title . '</a><br />'; 
  echo '<p>' . $item->description . '</p><br /><br />';
}
$this->load->view($this->config->item('theme') . 'footer');

?>