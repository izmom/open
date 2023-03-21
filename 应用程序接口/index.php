<?php
const ALLOW_RAW_OUTPUT = false;
// 是否开启 ?raw 选项，可能会消耗服务器较多流量
  $url = 'https://chat.huaqq.cn/api/stream';

  $data = array(
    'key' => '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',
       
"messages"=> array(

  "role"=>"user",
"prompt"=> "芒果"
),
"temperature"=>"0",
         
         
         
         
            
            
            
            
);
  
  
  //使用curl发送请求
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $data); 
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $output = curl_exec($curl);
  curl_close($curl);
  //解析json
  $result = json_decode($output,true);
  //输出结果
  echo $result;

exit();
