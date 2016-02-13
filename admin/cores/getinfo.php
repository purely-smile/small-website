<?php 
function getBrowser(){
    $agent=$_SERVER["HTTP_USER_AGENT"];
    if(strpos($agent,'MSIE')!==false || strpos($agent,'rv:11.0')) //ie11判断
    return "ie";
    else if(strpos($agent,'Firefox')!==false)
    return "firefox";
    else if(strpos($agent,'Chrome')!==false)
    return "chrome";
    else if(strpos($agent,'Opera')!==false)
    return 'opera';
    else if((strpos($agent,'Chrome')==false)&&strpos($agent,'Safari')!==false)
    return 'safari';
    else
    return 'unknown';
}
 
function getBrowserVer(){
    if (empty($_SERVER['HTTP_USER_AGENT'])){    //当浏览器没有发送访问者的信息的时候
        return 'unknow';
    }
    $agent= $_SERVER['HTTP_USER_AGENT'];
      
    if (preg_match('/MSIE\s(\d+)\..*/i', $agent, $regs))
        return $regs[1];
    elseif (preg_match('/FireFox\/(\d+)\..*/i', $agent, $regs))
        return $regs[1];
    elseif (preg_match('/Opera[\s|\/](\d+)\..*/i', $agent, $regs))
        return $regs[1];
    elseif (preg_match('/Chrome\/(\d+)\..*/i', $agent, $regs))
        return $regs[1];
    elseif ((strpos($agent,'Chrome')==false)&&preg_match('/Safari\/(\d+)\..*$/i', $agent, $regs))
        return $regs[1];
    else
        return 'unknow';
}
 
$browser = getBrowser();
$version = getBrowserVer();
$timeline = time();
//var_dump($_SERVER) ;
if(isset($_SERVER['HTTP_REFERER'])){
    $host = $_SERVER['HTTP_REFERER'];

 $ip=$_SERVER["REMOTE_ADDR"];
  if($ip == '::1'){
    $ip = '42.224.200.104';
  }elseif(substr($ip,0,3) == '192'){
    $ip = '42.224.200.104';
  }

  $content = file_get_contents("http://api.map.baidu.com/location/ip?ak=XtagQAxjHG8uQeT9nhGYHHlf&ip=$ip&coor=bd09ll");
  $json = json_decode($content);

  $location =  $json->{'content'}->{'address'};//按层级关系提取address数据

  $sql="insert into visitors(ip,location,host,browser,version,timeline) values('$ip','$location','$host','$browser','$version','$timecur')";
  $res=$pdo->exec($sql);
  echo $sql;
  }
   ?>