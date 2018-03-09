<?php


 require_once 'lib/YouzikuServiceClient.php';
    //初始化YouzikuClient
    $youzikuClient=new YouzikuServiceClient("xxx");

   // Single
    // $param=array("accessKey"=>"xxx
    // ","content"=>"有字库，让中文跃上云端！","tag"=>"#single-id1,.class1","useRanFontFamily"=>"false");
    // $response=$youzikuClient->GetFontFace($param);
   
    // echo var_dump($response);
 

    //Batch
    // $params[0]=array("accessKey"=>"xxx","content"=>"有字库，让前端掌控字体！","tag"=>"#id1,.class1","useRanFontFamily"=>"true");
    // $params[1]=array("accessKey"=>"xxx","content"=>"有字库，让中文跃上云端！","tag"=>"h1,div","useRanFontFamily"=>"false");
    
    // $response = $youzikuClient->GetBatchFontFace($params);
    // echo var_dump($response);


    //CustomPath
    // $cusParams[0]=array("accessKey"=>"xxx","content"=>"有字库，让前端掌控字体！","url" => "youziku/php-test-1");
    // $cusParams[1]=array("accessKey"=>"xxx","content"=>"有字库，让中文跃上云端！","url" => "youziku/php-test-2");

    // $response =  $youzikuClient->GetCustomPathBatchWebFont($cusParams);
    // echo var_dump($response);
?>

