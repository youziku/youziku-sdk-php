# 一、环境
PHP 5.2及以上版本

# 二、介绍

SDK适用于在PHP语言中调用service.youziku.com中的所有api<br />
SDK的返回值主要内容是@font-face语句（@font-face语句是所有浏览器天然支持的语句，它的作用是将一个远程字体文件加载到当前页面，并且定义成一个字体，当前页面能够像使用本地字体一样使用该字体。@font-face语句是实现在线字体效果的核心）。<br />
用户可以将@font-face与内容相对应保存至数据库，以便在内容被加载时，能随内容一起加载到前端页面；<br />
用户也可以不保存@font-face：有字库允许用户自定义字体存放路径，当需要引用字体效果时，可以根据自定义的路径拼出@font-face语句。
# 三、引用
1.requir_once 'lib/YouzikuServiceClient.php';

# 四、Sample
## 1.初始化YouzikuServiceClient实例,在全局配置一遍即可
```PHP 
$youzikuClient=new YouzikuServiceClient("xxxxxx");//xxxxxx为用户的apikey
```
## 2.单标签模式
### 2.1 getFontface()
#### 备注:直接返回所有格式的@fontface

``` PHP
$param=array("accessKey"=>"xxx","content"=>"有字库，让中文跃上云端！","tag"=>"#id1,.class1");
$response=$youzikuClient->GetFontFace($param);
```
### 2.2 getWoffBase64StringFontFace()
#### 备注：直接返回流（woff流）的@fontface

``` PHP
$param=array("accessKey"=>"xxx","content"=>"有字库，让中文跃上云端！","tag"=>"#id1,.class1");
$response=$youzikuClient->GetWoffBase64StringFontFace($param); 
```

## 3.多标签生成模式
### 1.getBatchFontFace()
#### 备注：直接返回所有格式的@fontface;可传递多个标签和内容一次生成多个@fontface

``` PHP
$params[0]=array("accessKey"=>"xxx","content"=>"有字库，让中文跃上云端！","tag"=>"#id1,.class1");
$params[1]=array("accessKey"=>"xxx","content"=>"有字库，让前端掌控字体！","tag"=>"h1,div");

$response = $youzikuClient->GetBatchFontFace($params);
```

### 2.getBatchWoffFontFace ()
#### 备注：直接返回仅woff格式的@fontface

``` PHP
$params[0]=array("accessKey"=>"xxx","content"=>"有字库，让中文跃上云端！","tag"=>"#id1,.class1");
$params[1]=array("accessKey"=>"xxx","content"=>"有字库，让前端掌控字体！","tag"=>"h1,div");

$response = $youzikuClient->GetBatchWoffFontFace($params);
```

## 4.自定义路径生成模式
### 1.CreateBatchWoffWebFontAsync()
#### 备注：自定义路径接口可以被程序异步调用，程序调用后可以直接向下执行，不需要等待返回值

``` PHP
$cusParams[0]=array("accessKey"=>"xxx","content"=>"有字库，让中文跃上云端！","url" => "youziku/test-1");
$cusParams[1]=array("accessKey"=>"xxx","content"=>"有字库，让前端掌控字体！","url" => "youziku/test-2";

$response =  $youzikuClient->GetCustomPathBatchWoffWebFont($cusParams);
```
