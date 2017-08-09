<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class AdController extends Controller
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
    /**
     * 数据交换(app与第三方)
     * qiaohuan 2017年4月24
     * @return 给app返回json格式,给第三方post传递probuf协议格式
     */
    public function index(Request $request) {
        //Imp下banner参数
        $bannerData['width']= 114;
        $bannerData['height']= 122;
        //Imp参数
        $impData['imp_id'] = '1';
        $impData['adspace_id'] = 'xx';
        $impData['banner'] = $bannerData;
        $impData['ad_type']=\AdType::DEMO_CAROUSEL_FIGURE;

        //Geo参数
        $geoData['lat'] = 1;
        $geoData['lon'] = 2;
        $geoData['country'] = 'ss';
        $geoData['region'] = 'xx';
        $geoData['city'] = 'aa';
        $geoData['type'] = 'shouji';
        //Device参数
        $deviceData['dnt'] = 0;
        $deviceData['ua'] = 'sss';
        $deviceData['ip'] = 'sss';
        $deviceData['geo'] = $geoData;
        $deviceData['device_id'] = 'sss';
        $deviceData['device_id_md5'] = 'sss';
        $deviceData['carrier'] = 'sss';
        $deviceData['language'] = 'sss';
        $deviceData['make'] = 'sss';
        $deviceData['model'] = 'sss';
        $deviceData['os'] = 'sss';
        $deviceData['osv'] = 'sss';
        $deviceData['connection_type'] = \Device_ConnectionType::NT_4G;
        $deviceData['device_type'] = \Device_DeviceType::PHONE;
        $deviceData['js'] = 1;
        //userData参数
        $userData['id'] = 1;
        $userData['buyer_id'] = 1;
        $userData['yob'] = 2;
        $userData['keywords'] = '哈哈';
        $userData['gender'] = 'M';
        //App参数
        $appData['id'] = 1;
        $appData['name'] = 'A站';
        $appData['domain'] = 'http://www.DEMO.cn';
        $appData['ver'] = '2.3.1';
        $appData['bundle'] = 'ss';
        $appData['privacypolicy'] = 0;
        $appData['paid'] = 0;
        //BidRequest请求发送数据参数
        $data['request_id'] = '11';
        $data['api_version'] = '3.1.2';
        $data['imp'] = $impData;
        $data['device'] = $deviceData;
        $data['user'] = $userData;
        $data['app'] = $appData;
        //进行序列化
        $protoData = $this->setData($data);
        //$part = new \BidRequest();
        //$part->mergeFromString($protoData);
        //$s = $part->getApiVersion();

        $html=$this->thirdPost('http://www.guanggao.com/xx',['probuf_data'=>$protoData]);
        print_r($html);exit;

        try {
            $cnt=0;
            while($cnt < 3 && ($html=$this->thirdPost('http://www.guanggao.com/xx',['probuf_data'=>$protoData]))===false){
                $cnt++;
            }
            //运行得到压缩过后的字符串
            $dt = $this->getData($html);
            return $this->responseFormat($dt, $request->url(),'addUserBless');
            // 获取到$age的值
        } catch (Exception $ex) {
            die('Upss.. there is a bug in this example');
        }
    }
    /**
     * 对数据序列化
     * qiaohuan 2017年4月24
     * @return
     */
    public function setData($data) {
        $part = new \BidRequest();
        $imp = new \Imp();
        $device = new \Device();
        $user = new \User();
        $impBanner = new \Imp_Banner();
        $geo = new \Geo();
        $app = new \App();
        //设置参数
        $part->setRequestId($data['request_id']);
        $part->setApiVersion($data['api_version']);
        $part->setImp($imp);
        $part->setDevice($device);
        $part->setUser($user);
        $part->setApp($app);
        //banner
        $impBanner->setWidth($data['imp']['banner']['width']);
        $impBanner->setHeight($data['imp']['banner']['height']);
        //imp
        $imp->setImpId($data['imp']['imp_id']);
        $imp->setAdspaceId($data['imp']['adspace_id']);
        $imp->setBanner($impBanner);
        //device相关数据
        $device->setDnt($data['device']['dnt']);
        $device->setUa($data['device']['ua']);
        $device->setIp($data['device']['ip']);
        $device->setGeo($geo);
        $device->setDeviceId($data['device']['device_id']);
        $device->setDeviceIdMd5($data['device']['device_id_md5']);
        $device->setCarrier($data['device']['carrier']);
        $device->setLanguage($data['device']['language']);
        $device->setMake($data['device']['make']);
        $device->setModel($data['device']['model']);
        $device->setOs($data['device']['os']);
        $device->setOsv($data['device']['osv']);
        $device->setConnectionType($data['device']['connection_type']);
        $device->setDeviceType($data['device']['device_type']);
        $device->setJs($data['device']['js']);
        //user相关数据
        $user->setId($data['user']['id']);
        $user->setBuyerId($data['user']['buyer_id']);
        $user->setYob($data['user']['yob']);
        $user->setKeywords($data['user']['keywords']);
        $user->setGender($data['user']['gender']);
        //app相关数据
        $app->setId($data['app']['id']);
        $app->setName($data['app']['name']);
        $app->setDomain($data['app']['domain']);
        $app->setVer($data['app']['ver']);
        $app->setBundle($data['app']['bundle']);
        $app->setPrivacypolicy($data['app']['privacypolicy']);
        $app->setPaid($data['app']['paid']);
        $protoData = $part->serializeToString();
        return $protoData;
    }
    /**
     * 对数据进行解析
     * qiaohuan 2017年4月24
     * @return
     */
    public function getData($html){
        $resPonse = new \BidResponse();
        $resPonse->mergeFromString($html);
        //$resPonse->getRequestId();
        //$resPonse->getSeatbids();
        //$resPonse->getErrorCode();
        print_r($resPonse->getRequestId());exit;
        $dt['vdata']['request_id'] = $resPonse->getRequestId();
        $dt['vdata']['seatbid'] = $resPonse->getSeatbids();


        $dt[] = $resPonse->getRequestId();
        return $dt;
    }
    /*
     * 发送post请求
     * qiaohuan 2017年5月
     * @return
     */
    public function thirdPost($url, $post = null){
        $context = array();
        if (is_array($post)) {
            ksort($post);
            $context['http'] = array(
                'timeout'=>60,
                'method' => 'POST',
                'header'=>"Content-type: application/x-www-form-urlencoded",
                'content' =>http_build_query($post, '', '&'),
            );
        }
        return file_get_contents($url, false, stream_context_create($context));
    }
}