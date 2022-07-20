<?php

function get_device(){
    $useragent = $_SERVER['HTTP_USER_AGENT'];

    if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $useragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent, 0, 4))){
        return 'mobile';
    }

    return 'desktop';

}

function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = '10.0.0.1';
    return $ipaddress;
}

function getPhone($source){
    switch($source){
        case "facebook_static":
            $res = "0772308880";
            break;
        case "google_search_brand":
            $res = "0772305095";
            break;
        case "google_gdn":
            $res = "0779966104";
            break;
        case "google_search_general":
            $res = "0779978381";
            break;
        case "google_search_competitors":
            $res = "0779978484";
            break;
        case "facebook_video":
            $res = "0772308870";
            break;
        case "facebook_static":
            $res = "0772308880";
            break;
        case "Instagram":
            $res = "0772307785";
            break;
        case "Responsive_Display_Ads":
            $res = "0772308886";
            break;
        case "dbmpg":
            $res = "0772309813";
            break;
        case "dbmpd":
            $res = "0772309819";
            break;
        case "dbmoa":
            $res = "0772305098";
            break;
        case "auto_campaign":
            $res = "0772309806";
            break;
        case "mako_banner":
            $res = "0772313477";
            break;
        case "mako_mobile":
            $res = "0772314916";
            break;
        case "ynet_content":
            $res = "0772317898";
            break;
        case "SDC":
            $res = "0779966103";
            break;
        case "Fortvision":
            $res = "0779972279";
            break;
        case "artimedia":
            $res = "0779979603";
            break;
        case "outbrain":
            $res = "0772316964";
            break;
        case "youtube_sponsored":
            $res = "0772313582";
            break;
        default:
            $res = "0779978381";
            break;
    }
    return $res;

}



function ctc_time() {
    $hour = date('H');
    $minutes = date('i');
    $weekDay = date('w');


//    $from_hour = 9;
//    $to_hour = 18;
//    $from_hour_wnd = 9;
//    $to_hour_wnd = 13;
  /*  if (date("z") == 98) {
      return false;
    }else {*/
      if ($weekDay == 6) {
          return false;
      }elseif ($weekDay == 5) {

              if ($hour == 8) {
                    if ($minutes >= 30)
                    return true;
                  else
                    return false;
              }elseif ($hour >= 9 && $hour < 13) {

                    return true;
              }else{
                    return false;
              }

      }else{

              if ($hour == 8) {
                    if ($minutes >= 30)
                    return true;
                  else
                    return false;
              }elseif ($hour == 18) {
                    if ($minutes < 30)
                    return true;
                  else
                    return false;
              }elseif ($hour >= 9 && $hour < 18) {
                    return true;
              }else{
                    return false;
              }

      }


    //}


}
