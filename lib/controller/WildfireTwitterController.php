<?
class WildfireTwitterController extends WaxController{
    
    public $number_of_tweets = 1;

    public function __twitter(){
      $twitter = new WaxBackgroundCurl(array("url"=>"http://twitter.oneblackbear.com/".Config::get("twitter/username")."/statuses.sphp"));
      $this->tweets = array_slice((array)unserialize($twitter->fetch()), 0, $this->number_of_tweets);
    }

}
?>