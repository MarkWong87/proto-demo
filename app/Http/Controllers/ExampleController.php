<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        spl_autoload_register(function ($class) {
            require_once(__DIR__ . "/../../AdGenerate/{$class}.php");
        });
    }

    //
    public function  index(Request $request){

        $a =  $request->input();
        $part = new \BidRequest();
        $part->mergeFromString($a['probuf_data']);
        $abc = $part->getApiVersion();

        if($abc){
            $resPonse = new \BidResponse();
            $seatbid =  new \SeatBid();
            $bid = new \Bid();
            $mater = new \MaterialMeta();
            $image = new \MaterialMeta_ImageMeta();
            $external = new \MaterialMeta_ExternalMeta();
            $ios = new \MaterialMeta_IosApp();
            $android = new \MaterialMeta_AndroidApp();
            //AndroidApp对象字段
            $android->setAppName('安卓');
            $android->setDownloadUrl('www.sss.com');
            //iosApp对象字段
            $ios->setAppName('ios设备');
            $ios->setDownloadUrl('www.down.com');
            //external对象
            $external->setUrl('aaa');
            //image对象
            $image->setWidth(112);
            $image->setHeight(11);
            $image->setDescription('这表示图片');
            $image->setUrl('www.url.com');
            $image->setUrls('www.ada.com/aaa/sa');
            $image->setDateTimestamp(221);
            $image->setStartTimestamp(333);
            $image->setEndTimestamp(23);
            //MaterialMeta对象数据
            $mater->setAdType('333');
            $mater->setNurl('www.baidu.com');
            $mater->setTitle('测试标题');
            $mater->setSource('来自京东');
            $mater->setImageBanner($image);
            $mater->setExternal($external);
            $mater->setAndroidApp($android);
            $mater->setIosApp($ios);
            $mater->setShowUrl('wwww.aaa.com');
            $mater->setClickUrl('www.dianji.com');

            //bid对象
            $bid->setId('1');
            $bid->setImpId('1');
            $bid->setPrice(222);
            $bid->setAdid(33);
            $bid->setMaterial($mater);

            //seatbid对象
            $bid = array($bid);
            $seatbid->setBid($bid);
            $seatbid->setSeat('jingdong1111');
            //bid response
            $resPonse->setRequestId(11);
            $seatbid = array($seatbid);
            $resPonse->setSeatbids($seatbid);
            $resPonse->setErrorCode(2121211);
            $protoData = $resPonse->serializeToString();

            print_r($protoData);exit;


        }else{

            $protoData = 0;
        }
        //运行得到压缩过后的字符串
        /*  $a =  $request->input();

          $app1 = new \App();
          $part2 = new \SearchRequest();
          $part2->mergeFromString($a['probuf_data']);
          $abc = $part2->getPageNumber();
          if($abc == '111'){
              //序列化之后返回
              $app1->setName('xiaoming');
              $app1->setkeywords('xiaoming关键字');
              $protoData = $app1->serializeToString();
          }else{
              $app1->setName('bushixiaoming');
              $app1->setkeywords('wuguanjianzi');
              $protoData = $app1->serializeToString();
          }*/
        echo($protoData);exit;

    }
}
