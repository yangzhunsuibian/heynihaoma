<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\controller\Auser as AuserModel;
use aliyun\src\OSS\Core\OssException;
use aliyun\src\OSS\OssClient;
/**
* 视频管理
*/
class Video extends AuserModel
{
    //上传视频
    public function uploadimg(){
      if($_FILES['video']['type']=='video/mp4'){ 
        $accessKeyId = "LTAIPAVDNj9I8XYd";//去阿里云后台获取秘钥id
        $accessKeySecret = "IVVAWAXkn2lX76kjMVz1tbb9hUkDtc";//去阿里云后台获取秘钥
        $isunlink=false;
        $bucket = 'ccccdde';
        $endpoint = "oss-cn-hangzhou.aliyuncs.com";//你的阿里云OSS地址
        $ossClient = new OssClient($accessKeyId, $accessKeySecret, $endpoint);
        //判断bucketname是否存在，不存在就去创建
        
        if( !$ossClient->doesBucketExist($bucket)){
            $ossClient->createBucket($bucket);
        }
         $name=explode('.', $_FILES['video']['name']);
         $object=md5($name[0].time()).'.'.$name[1];
        
        //想要保存文件的名称
        $file=$_FILES['video']['tmp_name'];
        //echo $file;
        //文件路径，必须是本地的。//文件路径，必须是本地的。
        try{
            $filename = $ossClient->uploadFile($bucket,$object,$file);
           
            $video=$filename['oss-request-url'];
            //echo $video;
            if ($isunlink==true){
                unlink($file);
            }
          }catch (OssException $e){
            $e->getErrorMessage();
            return;
        }   
    }
  }
}