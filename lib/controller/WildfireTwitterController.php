<?
class WildfireTwitterController extends WaxController{

    public function __twitter(){
      $twitter = new WaxBackgroundCurl(array("url"=>"http://twitter.oneblackbear.com/".Config::get("twitter/username")."/statuses.sphp"));
      $this->tweets = unserialize($twitter->fetch());
    }

}
?>