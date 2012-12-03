<?
class WildfireTwitterController extends WaxController{
    
    public $number_of_tweets = 1;

    public function __twitter(){
      $twitter = new WaxBackgroundCurl(array("url"=>"http://twitter.oneblackbear.com/".Config::get("twitter/username")."/statuses.sphp"));
      $this->tweets = array_slice((array)unserialize($twitter->fetch()), 0, $this->number_of_tweets);
    }

    public function __user_info(){
      $twitter = new WaxBackgroundCurl(array("url"=>"obbtwitter.dev/".Config::get("twitter/username")."/user_info.sphp","cache"=>false));
      $this->user_info = unserialize($twitter->fetch());
    }
}
?>