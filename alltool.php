<?php
error_reporting(0);
session_start();
$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$yellow = "\033[0;33m";
$white = "\033[0;33m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$kongdz = $do."[".$luc."●".$do."] ".$trang."=> ";
$kongvip = $do."[".$luc."●".$do."]";
$thanhngang = $vang."==========================================================\n";
date_default_timezone_set("Asia/Ho_Chi_Minh");
$chay100 = 0;
system('clear');
echo $vang."\n";
}
echo $do."\n";
echo $thanhngang;
echo $kongdz."".$luc."Tool Auto Cày Xu Trao Đổi Sub Token Đa Luồng\n";
echo $kongdz."".$vang."Bản Quyền: Nguyễn Hồng Kông\n";
echo $kongdz."".$hong."Fb.com/100015473643989\n";
echo $kongdz."".$xnhac."Momo: 0376526267\n";
echo $thanhngang;
$dem = 0;
echo $kongdz."".$luc."Vào Web ".$trang."Traodoisub.com".$luc." Bấm Cài Đặt Trên Web\n";
echo $kongdz."".$luc."Sao Chép ".$vang."Access_token".$luc." Dán Vào\n";
  echo $kongdz."".$luc."Nhập Access_token: $vang";
  $tokenacc = trim(fgets(STDIN));
  echo $thanhngang;
//Token 
$khoToken = [];
if (file_exists('Token.txt')){
    echo $kongdz."".$luc."Nhập ".$vang."[".$trang." yes ".$vang."] ".$luc."Thêm Token Facebook Để Chạy\n";
    echo $kongdz."".$luc."Nhập ".$vang."[".$trang." no ".$vang." ] ".$luc."Vào Chạy Tool Vì Lần Trước Lưu Token Facebook Rồi\n";
    echo $kongdz."".$luc."Nhập ".$trang."yes ".$luc."Hoặc ".$trang."no: $vang";
    $choice=trim(fgets(STDIN));
    if ($choice=='yes'){
        @system('rm Token.txt');
        }
    }
if (!file_exists('Token.txt')){
echo $kongdz."".$luc."Nhập Token Facebook Nếu Muốn Dừng Bấm Xuống Hàng Nhé\n";
for($a = 1; $a < 999999;$a++){
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập Token Facebook Thứ $a: $vang";
$nhapck = (string)trim(fgets(STDIN));
if($nhapck == ''){break;}
array_push($khoToken,$nhapck);
    }
            $js=json_encode($khoToken);
            $demcki=count($khoToken);
            $k = fopen("Token.txt","a+");
fwrite($k, $js);
fclose($k);
echo $kongdz."".$luc."Tìm Thấy ".$vang.$demcki." ".$luc."Token Facebook\n";
echo $kongdz."".$luc."Đã Lưu Token Facebook Vào File ".$trang."Token.txt\n";
sleep(2);
    }else{
        $khoToken = json_decode(fread(fopen("Token.txt","r"),filesize("Token.txt")),true);
        $demcki = count($khoToken);
    }
//url
$urlinfo = "https://traodoisub.com/api/?fields=profile&access_token=$tokenacc";
$urllike = "https://traodoisub.com/api/?fields=like&access_token=$tokenacc";
$urlsub = "https://traodoisub.com/api/?fields=follow&access_token=$tokenacc";
$urlshare = "https://traodoisub.com/api/?fields=share&access_token=$tokenacc";
$urlcmt = "https://traodoisub.com/api/?fields=comment&access_token=$tokenacc";
//login
$info = api($urlinfo);
if ($info["error"]) {
    exit ($info["error"]);
}
//$thongtin
$user = strtolower($info["data"]["user"]);
$xuhientai = $info["data"]["xu"];
system('clear');
echo $vang."\n";
echo $do."\n";
echo $thanhngang;
echo $kongdz."".$luc."Tool Auto Cày Xu Trao Đổi Sub Token Đa Luồng\n";
echo $kongdz."".$vang."Bản Quyền: Nguyễn Hồng Kông\n";
echo $kongdz."".$hong."Fb.com/100015473643989\n";
echo $kongdz."".$xnhac."Momo: 0376526267\n";
echo $thanhngang;
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Thể Loại Tool Bạn Đang Chạy Là Tool: ".$vang."Token\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Số Facebook Chạy Tool ".$vang."Token ".$luc."Là: ".$vang.$demcki."\n";
echo $thanhngang;
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Tài Khoản TDS Của Bạn Là: ".$vang.$user."\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Số Xu Hiện Tại Của Bạn Là: ".$vang.$xuhientai."\n";
echo $thanhngang;
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập ".$do."[".$vang."1".$do."]".$luc." Để Chạy Nhiệm Vụ Like\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập ".$do."[".$vang."2".$do."]".$luc." Để Chạy Nhiệm Vụ Follow\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập ".$do."[".$vang."3".$do."]".$luc." Để Chạy Nhiệm Vụ Comment\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập ".$do."[".$vang."4".$do."]".$luc." Để Chạy Nhiệm Vụ Share\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Muốn Chạy Random Thì Ghép Mấy Số Nhiệm Vụ Bất Kỳ\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập Số Để Chạy Nhiệm Vụ: $vang";
$nhiemvu = trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Thời Gian Làm Nhiệm Vụ ".$trang."Min Max\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập Thời Gian Làm Nhiệm Vụ ".$trang."Min".$luc.": $vang";
$thoigianmin = trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập Thời Gian Làm Nhiệm Vụ ".$trang."Max".$luc.": $vang";
$thoigianmax = trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Sau Bao Nhiêu Nhiệm Vụ Thì Kích Hoạt Chống Block: $vang";
$nvblock = trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Sau ".$vang.$nvblock.$luc." Nhiệm Vụ Nghỉ Ngơi Bao Nhiêu Giây: $vang";
$thoigiannghi = trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Chuyển Nick Sau Bao Nhiêu Nhiệm Vụ: $vang";
$doinick = trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Chạy Bao Nhiêu Nhiệm Vụ Rồi Dừng Tool: $vang";
$dungtool = trim(fgets(STDIN));
while(true){
  if(count($khoToken) == 0){
    echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập Token Nếu Muốn Dừng Bấm Xuống Hàng Nhé\n";
for($a = 1; $a < 999999;$a++){
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập Token Thứ $a: $vang";
$nhapck = (string)trim(fgets(STDIN));
if($nhapck == ''){break;}
array_push($khoToken,$nhapck);
    }
            $js=json_encode($khoToken);
            $demcki=count($khoToken);
            $k = fopen("Token.txt","a+");
fwrite($k, $js);
fclose($k);
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Tìm Thấy ".$vang.$demcki." ".$luc."Token\n";
  }
  for($xz=0;$xz<count($khoToken);$xz++){
    $cookie = $khoToken[$xz];
$access_token = $cookie;
if (strpos($access_token, 'EAAAA') !== 0) {
    echo "Token lỗi!!?! \n";
}
$tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'name'};
$idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'id'};
$urlcauhinh = "https://traodoisub.com/api/?fields=run&id=$idfb&access_token=$tokenacc";
$cauhinh = api($urlcauhinh);
if ($cauhinh["data"]["msg"] == "Cấu hình thành công!") {
	echo $vang."==========================================================\n";
    echo $vang."Đang Cấu Hình ID: ".$luc.$idfb." ".$vang."Tên FB: ".$luc.$tenfb."".$res."\n";
    echo $vang."==========================================================\n";
} else {
    echo $do."Cấu hình thất bại token có thể bị die thay token tại file ".$trang."Token.txt\n";
    exit;
}
$spam = 0;
while (true) {
    if ($spam == 1) {
        break;
    }
    //listlike
    if (strpos($nhiemvu, '1') !== false) {
        for ($i = 0; $i < 30; $i++) {
            $listlike = api($urllike);
            if (count($listlike) !== 0) {
                break;
            }
        }
    }
    //listfollow
    if (strpos($nhiemvu, '2') !== false) {
        while (true) {
            $listsub = api($urlsub);
            if (count($listsub) !== 0) {
                break;
            }
        }}
    //listcmt
    if (strpos($nhiemvu, '3') !== false) {
        for ($i = 1; $i < 30; $i++) {
            $listcmt = api($urlcmt);
            if (count($listcmt) !== 0) {
                break;
            }}
    }
    //listshare
    if (strpos($nhiemvu, '4') !== false) {
        for ($i = 1; $i < 30; $i++) {
            $listshare = api($urlshare);
            if (count($listshare) > 0) {
                break;
            }}
    }
    for ($lap = 0; $lap < 20; $lap++) {
        // like
        if ($listlike !== NULL) {
            $idlike = $listlike[$lap]["id"];
            if ($idlike !== '') {
                $g = like($access_token, $idlike, $cookie);
                if ($g -> {'error'} -> {'code'} == 190) {
                    echo "Token die !!?!\n";
                    array_splice($khoToken,$xz,1);
                    $spam = 1; break;
                }
                if ($g -> {'error'} -> {'code'} == 368) {
                    echo "\033[1;91m".$g-> {'error'}-> {'message'};
                    echo "\n";
                    $spam = 1;
                    break;
                }
                if ($g -> {'error'} -> {'code'} == 405) {
                    echo "\033[1;91m"."Tài khoản bị checkpoint";
                    $spam = 1;
                    array_splice($khoToken,$xz,1);
                    break;
                }
                $nhanlike = nhantien('LIKE', $idlike, $tokenacc);
                if ($nhanlike["success"] == 200) {
                    $xu = $nhanlike["data"]["xu"];
                    $xujob = $nhanlike["data"]["msg"];
                    $dem++;
                    
                    hoanthanh($dem, 'LIKE', $idlike, $xujob, $xu, $dungtool);
                    if($dem % $doinick == 0){
                      $spam = 1; break;
                    }
                    if($dem % $nvblock == 0){
                      delay($thoigiannghi);
                    }
                    
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }
            }}
        //follow
        if ($listsub !== NULL) {
            $idsub = $listsub[$lap]["id"];
            if ($idsub !== '') {
                $g = follow($access_token, $idsub, $cookie);
                if ($g -> {'error'} -> {'code'} == 190) {
                    echo "Token die !!?!\n";
                    array_splice($khoToken,$xz,1);
                    $spam = 1; break;
                }
                if ($g -> {'error'} -> {'code'} == 368) {
                    echo "\033[1;91m".$g-> {'error'}-> {'message'};
                    echo "\n";
                    $spam = 1; break;
                }
                if ($g -> {'error'} -> {'code'} == 405) {
                    echo "\033[1;91m"."Tài khoản bị checkpoint";
                    array_splice($khoToken,$xz,1);
                    $spam = 1; break;
                }
                $nhansub = nhantien('FOLLOW', $idsub, $tokenacc);
                if ($nhansub["success"] == 200) {
                    $xu = $nhansub["data"]["xu"];
                    $xujob = $nhansub["data"]["msg"];
                    $dem++;
                    
                    hoanthanh($dem, 'FOLLOW', $idsub, $xujob, $xu, $dungtool);
                    if($dem % $doinick == 0){
                      $spam = 1; break;
                    }
                    if($dem % $nvblock == 0){
                      delay($thoigiannghi);
                    }
                    
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }
            }}
            // Đứa nào lấy cái này cả gia đình ra ngoài 
// Đường bị xe tông chết hết và đầu thay 
// làm chó 100 kiếp Nguyễn Hồng Kông 
// này trù ẻo hơi bị linh nghiệm địt mẹ tao bỏ 
// tiền ra mua mấy cái này chúng mày không làm 
// đòi có ăn thì ăn cái con mẹ mày đi
            if ($listshare !== NULL) {
                $idshare = $listshare[$lap]["id"];
                if (isset($idshare)) {
                    $g = share($access_token, $idshare);
                    if ($g -> {'error'} -> {'code'} == 190) {
                        echo "Token die !!?!\n";
                        array_splice($khoToken,$xz,1);
                        $spam = 1; break;
                    }
                    if ($g -> {'error'} -> {'code'} == 368) {
                        echo "\033[1;91m".$g-> {'error'}-> {'message'};
                        echo "\n";
                        array_splice($khoToken,$xz,1);
                        $spam = 1; break;
                    }
                    if ($g -> {'error'} -> {'code'} == 405) {
                        echo "\033[1;91m"."Tài khoản bị checkpoint";
                        array_splice($khoToken,$xz,1);
                        $spam = 1; break;
                    }
                        $nhanshare = nhantien('SHARE', $idshare, $tokenacc);
                        if ($nhanshare["success"] == 200) {
                            $xu = $nhanshare["data"]["xu"];
                            $xujob = $nhanshare["data"]["msg"];
                            $dem++;
                            hoanthanh($dem, 'SHARE', $idshare, $xujob, $xu, $dungtool);
                            if($dem % $doinick == 0){
                              $spam = 1; break;
                            }
                            if($dem % $nvblock == 0){
                      delay($thoigiannghi);
                    }
                    
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }}}
        //cmt
        if ($listcmt !== NULL) {
            $idcmt = $listcmt[$lap]["id"];
            $msg = $listcmt[$lap]["msg"];
            if ($idcmt !== '') {
                cmt($access_token, $idcmt, $cookie, $msg);
                $nhancmt = nhantien('COMMENT', $idcmt, $tokenacc);
                if ($nhancmt["success"] == 200) {
                    $xu = $nhancmt["data"]["xu"];
                    $xujob = $nhancmt["data"]["msg"];
                    $dem++;
                    hoanthanh($dem, 'CMT', $idcmt, $xujob, $xu, $dungtool);
                    if($dem % $doinick == 0){
                      $spam = 1; break;
                    }
                    if($dem % $nvblock == 0){
                      delay($thoigiannghi);
                    }
                    
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }
            }}
        }
}}}
function api($url) {
    $head = array(
        "Host: traodoisub.com",
        "cache-control: max-age=0",
        "upgrade-insecure-requests: 1",
        "user-agent: Mozilla/5.0 (Linux; Android 9; Mi A1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.110 Mobile Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "sec-fetch-site: none",
        "sec-fetch-mode: navigate",
        "sec-fetch-user: ?1",
        "sec-fetch-dest: document",
        //"accept-encoding: gzip, deflate, br",
        "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",
    );
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_SSL_VERIFYPEER => FALSE,
        CURLOPT_RETURNTRANSFER => 1
    ));
    $get = curl_exec($ch);
    curl_close($ch);
    return json_decode($get, true);
}
function nhantien($type, $id, $tokenacc) {
    $nhan = file_get_contents("https://traodoisub.com/api/coin/?type=$type&id=$id&access_token=$tokenacc");
    return json_decode($nhan, true);
}
function follow($access_token, $idtest, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$idtest.'/subscribers');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);
}
function like($access_token, $id, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/likes');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);

}
// Đứa nào lấy cái này cả gia đình ra ngoài 
// Đường bị xe tông chết hết và đầu thay 
// làm chó 100 kiếp Nguyễn Hồng Kông 
// này trù ẻo hơi bị linh nghiệm địt mẹ tao bỏ 
// tiền ra mua mấy cái này chúng mày không làm 
// đòi có ăn thì ăn cái con mẹ mày đi
function share($access_token,$id) {
 $ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v2.0/me/feed');
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
$data = array(
'privacy' => '{"value":"EVERYONE"}',
'message' => '',
'link' => 'https://mbasic.facebook.com/'.$id.'',
'access_token' => $access_token
);
curl_setopt($ch, CURLOPT_POST,count($data));
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
$a = json_decode(curl_exec($ch), true);                                    
curl_close($ch);
   return $a;
}
function cmt($access_token, $idcmt, $cookie, $msg) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$idcmt.'/comments');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('message' => $msg, 'access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);
}
function hoanthanh($dem, $type, $id, $xujob, $xu, $dungtool) {
    $a = "\033[1;93m[\033[1;93m".$dem."\033[1;93m]\033[1;91m ● \033[1;96m".date("H:i")."\033[1;91m ●\033[1;93m $type\033[1;91m ● \033[1;97m".$id."\033[1;91m ●\033[1;92m ".$xujob." \033[1;91m● \033[1;93m".$xu."\e[0m\n";
    $len = strlen($a);
    for ($x = 0; $x < $len; $x++) {
        echo $a[$x];
        usleep(1000);
    }
    if ( $dem >= $dungtool ){echo"\033[1;91mBạn đã làm xong \033[1;93m".$dem."\033[1;91m nhiệm vụ số xu bây giờ của bạn là \033[1;94m".$xu."\n";
    echo"\033[1;92mCảm ơn bạn đã ủng hộ Kông\n";
    exit;}
}
function delay($delay) {
    for ($time = $delay; $time > -1; $time--) {
        echo "\r\033[1;93m   ┗(•°_°•)\033[1;91m ~>       \033[1;92m L      \033[1;91m |\033[1;93m $time\033[1;91m | ";
        usleep(150000);

        echo "\r\033[1;91m   ┗(•°_°•)\033[0;33m   ~>     \033[0;37m LO     \033[0;31m |\033[0;33m $time\033[0;31m | ";
        usleep(150000);
        echo "\r\033[1;92m   ┗(•°_°•)\033[0;33m     ~>   \033[0;37m LOA    \033[0;31m |\033[0;33m $time\033[0;31m | ";
        usleep(150000);
        echo "\r\033[1;94m   ┗(•°_°•)\033[0;33m       ~> \033[0;37m LOAD   \033[0;31m |\033[0;33m $time\033[0;31m | ";
        usleep(150000);
        echo "\r\033[1;95m   ┗(•°_°•)\033[0;33m        ~>\033[0;37m LOAD.  \033[0;31m |\033[0;33m $time\033[0;31m | ";
        usleep(150000);
        echo "\r\033[1;95m   ┗(•°_°•)\033[0;33m        ~>\033[0;37m LOAD.. \033[0;31m |\033[0;33m $time\033[0;31m | ";
        usleep(150000);
        echo "\r\033[1;95m   ┗(•°_°•)\033[0;33m        ~>\033[0;37m LOAD...\033[0;31m |\033[0;33m $time\033[0;31m | ";
        usleep(100000);
        echo "\r                                          \r";
    }}
function laytoken($cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://m.facebook.com/composer/ocelot/async_loader/?publisher=feed');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $access = curl_exec($ch);
    curl_close($ch);
    if (explode('\",\"useLocalFilePreview', explode('accessToken\":\"', $access)[1])[0]) {
        $access_token = explode('\",\"useLocalFilePreview', explode('accessToken\":\"', $access)[1])[0];
    }
    return $access_token;
}
?>