<?php
	
    //引用请求文件
	require_once 'lib/YouzikuServiceClient.php';
	
	//初始化方式   第一个参数为apiKey,第二个参数是host 如果不传使用默认的 http://service.youziku.com
	$youzikuClient=new YouzikuServiceClient("18d863e96d1fe72c798bef272220447e");
	
	
	
	
	//1.GetFontface()接口
	$params1=array("accessKey"=>"b7d943cc486c43c4a6c446612d9faa1b","content"=>"我是中国人","tag"=>"#gg");
	$response=$youzikuClient->GetFontFace($params1);
	
	print_r($response);
    echo "</br>------------------</br>";
	
	//2.GetWoffBase64StringFontFace()接口
	$params2=array("accessKey"=>"b7d943cc486c43c4a6c446612d9faa1b","content"=>"我是中国人","tag"=>"#gg");
    $response2=$youzikuClient->GetWoffBase64StringFontFace($params2);
    
    print_r($response2);
    echo "</br>------------------</br>";
    
    
     //3.GetBatchFontFace()接口
      $params3[0]=array("accessKey"=>"b7d943cc486c43c4a6c446612d9faa1b","content"=>"我我我我是中国人","tag"=>"#gg");
      $params3[1]=array("accessKey"=>"b7d943cc486c43c4a6c446612d9faa1b","content"=>"我是我我中国人","tag"=>"#gg");
       $params3[2]=array("accessKey"=>"b7d943cc486c43c4a6c446612d9faa1b","content"=>"我是中中中中国人","tag"=>"#gg");
       
       
      $response3 = $youzikuClient->GetBatchFontFace($params3);
      
      print_r($response3);
      echo "</br>------------------</br>";
      
      
         //4.批量自定义路径 CreateBatchWoffWebFontAsync接口 
         $cusParam[0] =array(
                "accessKey" => "18d863e96d1fe72c798bef272220447e",
                "content" => "你好世界人民",
                "url" => "jamesbing/test-1"
            );
           $cusParam[1] =array(
                "accessKey" => "18d863e96d1fe72c798bef272220447e",
                "content" => "你好世界人民",
                "url" => "jamesbing/test-1"
            );
            $cusParam[2] =array(
                "accessKey" => "18d863e96d1fe72c798bef272220447e",
                "content" => "你好世界人民",
                "url" => "jamesbing/test-1"
            );

         $response4 =  $youzikuClient->GetCustomPathBatchWoffWebFont($cusParam);
         print_r($response4);
         
         echo "</br>------------------</br>";
      
?>