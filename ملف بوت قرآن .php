<?php 
ob_start(); 
$token = "7851164121:AAFsBmGQm_OXzLI6nFtoVAfenF7HZ14D25w"; # Token
define("API_KEY", $token);
echo "setWebhook ~> <a href=\"https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."\">https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."</a>";

function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}}
#ــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــ
$amrq = "elmasr7"; #معرف قناتك بدون @
$amrMr = "@Y_T5U"; معرف حسابك 
$amrMr1= "@Y_T5U"; معرف الدعمي ¹
$amrMr2 = "@Y_T6U";  معرف الدعمي ²
$amrMr3 = "@Y_T6U";  معرف الدعمي ³
#ــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــ
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$id = $message->from->id;
$text = $message->text;
$chat_id = $message->chat->id;
$user = $message->from->username;
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$name = $update->message->from->first_name;
$from_id = $update->message->from->id;
####لوحة الادمن###
$admin = "7284467034"; ###ايديك###
$sudo = array("7284467034","7837189897","7837189897");
$AMR = file_get_contents("AMR.txt");
$AMR0 = file_get_contents("AMR0.txt");
$AMR1= file_get_contents("AMR1.txt");
$AMR5 = file_get_contents("AMR2.txt");
$AMR6 = file_get_contents("AMR3.txt");
$AMR20 = json_decode(file_get_contents('php://input'));
$AMR18 = $update->message;
$AMR13 = $AMR18->chat->id;
$AMR17 = $AMR18->text;
$AMRD = $AMR20->callback_query->data;
$AMR12 = $AMR20->callback_query->message->chat->id;
$AMR14 =  $AMR20->callback_query->message->message_id;
$AMR15 = $AMR18->from->first_name;
$AMR16 = $AMR18->from->username;
$AMR11 = $AMR18->from->id;
$AMR2 = explode("\n",file_get_contents("AMR4.txt"));
$AMR3 = count($AMR2)-1;
if ($AMR18 && !in_array($AMR11, $AMR2)) {
file_put_contents("AMR4.txt", $AMR11."\n",FILE_APPEND);
  }
$AMR9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$AMR0&user_id=".$AMR11);
$AMR10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$AMR1&user_id=".$AMR11);
if($AMR18 && (strpos($AMR9,'"status":"left"') or strpos($AMR9,'"Bad Request: USER_ID_INVALID"') or strpos($AMR9,'"status":"kicked"') or strpos($AMR10,'"status":"left"') or strpos($AMR10,'"Bad Request: USER_ID_INVALID"') or strpos($AMR10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$AMR13,
'text'=>'- ▫️ عذراً عزيزي  ، 🔰
▪️ يجب عليك الإشتراك في قناة المطور أولاً ⚜️؛

- اشترك ثم ارسل { /start }📛!

'.$AMR0.'
'.$AMR1,
]);return false;}
if($text == "/start" and in_array($from_id,$sudo)){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>"
~ اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖

~ يمكنك التحكم في جميع اوامر البوت من هنا 
------------------------------------
",
'reply_to_message_id'=>$php_aba->message_id,
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'تعين قناة اشتراك اجباري ¹ 📢' ,'callback_data'=>"AMR"]],
[['text'=>'وضع قناة الاشتراك ¹★' ,'callback_data'=>"AMR0"],['text'=>'حذف قناة الاشتراك ¹★' ,'callback_data'=>"delete11"]],
[['text'=>'تعين قناة اشتراك اجباري ² 📢' ,'callback_data'=>"AMR"]],
[['text'=>'وضع قناة الاشتراك ²★' ,'callback_data'=>"AMR2"],['text'=>'حذف قناة الاشتراك ²★' ,'callback_data'=>"delete22"]],
[['text'=>'عرض قنوات الإشتراك 💎' ,'callback_data'=>"AMR4"]],
[['text'=>'قسم توجيه الرسال من الاعضاء 🔙' ,'callback_data'=>"AMR"]],
[['text'=>'تفعيل التوجيه 🔙' ,'callback_data'=>"AMR11"],['text'=>'قفل التوجيه ❎' ,'callback_data'=>"AMR12"]],
[['text'=>'إذاعة توجيه 🔄' ,'callback_data'=>"AMR5"],['text'=>'إذاعة عامه 🔱' ,'callback_data'=>"AMR6"]],
[['text'=>'احصائيات البوت 👤' ,'callback_data'=>"AMR7"]],
] 
])
]);
}
if($AMRD == "AMR" ){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
"text"=>"
~ اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖

~ يمكنك التحكم في جميع اوامر البوت من هنا 
------------------------------------
",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'تعين قناة اشتراك اجباري ¹ 📢' ,'callback_data'=>"AMR"]],
[['text'=>'وضع قناة الاشتراك ¹★' ,'callback_data'=>"AMR0"],['text'=>'حذف قناة الاشتراك ¹★' ,'callback_data'=>"delete11"]],
[['text'=>'تعين قناة اشتراك اجباري ² 📢' ,'callback_data'=>"AMR"]],
[['text'=>'وضع قناة الاشتراك ²★' ,'callback_data'=>"AMR2"],['text'=>'حذف قناة الاشتراك ²★' ,'callback_data'=>"delete22"]],
[['text'=>'عرض قنوات الإشتراك 💎' ,'callback_data'=>"AMR4"]],
[['text'=>'قسم توجيه الرسال من الاعضاء 🔙' ,'callback_data'=>"AMR"]],
[['text'=>'تفعيل التوجيه 🔙' ,'callback_data'=>"AMR11"],['text'=>'قفل التوجيه ❎' ,'callback_data'=>"AMR12"]],
[['text'=>'إذاعة توجيه 🔄' ,'callback_data'=>"AMR5"],['text'=>'إذاعة عامه 🔱' ,'callback_data'=>"AMR6"]],
[['text'=>'احصائيات البوت 👤' ,'callback_data'=>"AMR7"]],
] 
])
]);
unlink("AMR.txt");
}
if($AMRD == "AMR0"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك من ثم  قم برفع البوت ادمن في القناة ',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR.txt","AMR0");
}
if($AMR17 and $AMR == "AMR0" and $AMR11 == $admin){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>'لقد تم وضع القناة بنجاح ✅',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR0.txt","$AMR17");
unlink("AMR.txt");
}
if($AMRD == "delete11"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'~ هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ؟؟؟
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'AMR'],
['text'=>'• نعم ، ✅','callback_data'=>'AMR1'],
]
]])
]);
}
if($AMRD == "AMR1"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'- لقد تم حذف القناة  من الإشتراك الإجباري بنجاح 📮',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
️[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
unlink("AMR0.txt");
}
if($AMRD == "AMR2"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك من ثم  قم برفع البوت ادمن في القناة ',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR.txt","AMR1");
}
if($AMR17 and $AMR == "AMR1" and $AMR11 == $admin){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>'لقد تم وضع القناة بنجاح ✅',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR1.txt","$AMR17");
unlink("AMR.txt");
}
if($AMRD == "delete22"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'~ هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ؟؟؟',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'AMR'],
['text'=>'• نعم ، ✅','callback_data'=>'AMR3'],
]
]])
]);
}
if($AMRD == "AMR3"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'- لقد تم حذف القناة  من الإشتراك الإجباري بنجاح 📮',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
unlink("AMR1.txt");
}
if($AMRD == "AMR4"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"
هلا بك عزيزي 
قنوات الاشتراك الاجباري
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــ
قناة ¹ => $AMR0 √
قناة ² => $AMR1 √
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــ
",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
}
if($AMRD == "AMR5"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"قم برسال التوجيه الان 💚",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR.txt","AMR2");
}
if($AMR18 and $AMR == "AMR2" and $AMR11 == $admin){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>"تم توجيه الرساله ",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
for($i=0;$i<count($AMR2); $i++){
bot('forwardMessage', [
'chat_id'=>$AMR2[$i],
'from_chat_id'=>$AMR11,
'message_id'=>$AMR18->message_id
]);
unlink("AMR.txt");
}
}
if($AMRD == "AMR6"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"قم برسال المراد الاذاعه له الان 💛",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR.txt","AMR3");
}
if($AMR17 and $AMR == "AMR3" and $AMR11 == $admin){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>'تم النشر بنجاح  ✅',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
for($i=0;$i<count($AMR2); $i++){
bot('sendMessage', [
'chat_id'=>$AMR2[$i],
'text'=>$AMR17
]);
unlink("AMR.txt");
}
}
if($AMRD == "AMR7"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"هلا بك في قسم الاحصايات  💛
ــــــــــــــــــــ؍.َِ⇣𖤍🖤ء͡⇣ــــــــــــــــــ

 عدد مشتركين البوت  [ $AMR3 ]

حاله سرعه البوت -: 100%
ــــــــــــــــــــ؍.َِ⇣𖤍🖤ء͡⇣ــــــــــــــــــ",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
}

if($AMRD == "AMR10"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'تم تنفيذ الامر ❎',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
unlink("AMR2.txt");
}
if($AMRD == "AMR11"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'تم تنفيذ الامر ✅',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR3.txt","AMR");
}
if($AMR18 and $AMR6 == "AMR" and $AMR11 != $admin){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$AMR11,
'message_id'=>$AMR18->message_id
]);
}
if($AMR18 and $AMR6 == "AMR" and $AMR11 == $admin){
bot('sendMessage',[
'chat_id'=>$AMR18->reply_to_message->forward_from->id,
'text'=>$AMR17,
]);
}
if($AMRD == "AMR12"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'تم تنفيذ الامر ❎',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
unlink("AMR3.txt");
} 

$update = json_decode(file_get_contents('php://input')); 
$message = $update->message; 
$chat_id = $message->chat->id; 
$text = $message->text; 
$chat_id2 = $update->callback_query->message->chat->id; 
$message_id = $update->callback_query->message->message_id; 
$data = $update->callback_query->data; 
 

if($text=="/start"){ 
 bot('sendmessage',[ 
 'chat_id'=>$chat_id, 
 'text'=>"*
السلام عليكم ورحمة الله 👋
 
 هلا بكم في بوت القرآن الكريم 🌸
 
 يمكنك الاستمع القرآن و الاذكار من خلال البوت 
 
كل ما عليك تحديد خيارك ⬇️
 *
 ",
          'parse_mode'=>"markdown",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'صفحات من القرآن 🌻','callback_data'=>'amr7']],
[['text'=>'الاذكار 🌸','callback_data'=>'amr4'],['text'=>' الايات القرانيه 🤲','callback_data'=>'amr1']],
[['text'=>'اوامر البوت 💡','callback_data'=>'amr6'],['text'=>'شرح البوت ⭐','callback_data'=>'amr5']],
[['text'=>'تحديثات البوت 📢','url'=>'https://t.me/$amrq'],['text'=>'المطور 🇪🇬','url'=>'https://t.me/$amrMr']],
[['text'=>'الدعم الفني ✅','callback_data'=>'amrHg']],
]
])
]);
}


$n1hrby = file_get_contents("http://hrby.ml/api/athkar.php");
$krankran88 = rand(2,164); 
    if($data ==  'amr7' ){
 bot('sendmessage',[ 
'chat_id'=>$chat_id2,
'audio'=>"$krankran8",
"caption"=>"$n1hrby",
'reply_to_message_id'=>$message->message_id,
 'message_id'=>$message->message_id,
 'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'- dev','url'=>'t.me/$amrMr']],
]
])
]);
}
    if($data ==  'c1' ){
    bot('editMessageText',[
     chat_id =>$chat_id2,
     'message_id'=>$message_id,
     'text' => '➖بِسْمِ اللهِ الرَّحْمنِ الرَّحِيم
     
     ⏺قُلْ هُوَ ٱللَّهُ أَحَدٌ، ٱللَّهُ ٱلصَّمَدُ، لَمْ يَلِدْ وَلَمْ يُولَدْ، وَلَمْ يَكُن لَّهُۥ كُفُوًا أَحَدٌۢ.
     🔹3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌸' , callback_data => 'c2' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c2' ){
    bot('editMessageText',[
     chat_id =>$chat_id2,
     'message_id'=>$message_id,
     'text' => '➖بِسْمِ اللهِ الرَّحْمنِ الرَّحِيم
     
     ⏺قُلْ أَعُوذُ بِرَبِّ ٱلْفَلَقِ، مِن شَرِّ مَا خَلَقَ، وَمِن شَرِّ غَاسِقٍ إِذَا وَقَبَ، وَمِن شَرِّ ٱلنَّفَّٰثَٰتِ فِى ٱلْعُقَدِ، وَمِن شَرِّ حَاسِدٍ إِذَا حَسَدَ. 
     🔹3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌸' , callback_data => 'c3' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c3' ){
    bot('editMessageText',[
     chat_id =>$chat_id2,
     'message_id'=>$message_id,
     'text' => '➖بِسْمِ اللهِ الرَّحْمنِ الرَّحِيم
     
     ⏺قُلْ أَعُوذُ بِرَبِّ ٱلنَّاسِ، مَلِكِ ٱلنَّاسِ، إِلَٰهِ ٱلنَّاسِ، مِن شَرِّ ٱلْوَسْوَاسِ ٱلْخَنَّاسِ، ٱلَّذِى يُوَسْوِسُ فِى صُدُورِ ٱلنَّاسِ، مِنَ ٱلْجِنَّةِ وَٱلنَّاسِ.
     🔹3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌸' , callback_data => 'c4' ]]
    ]
    ])
    ]);
    }
    
    if($data ==  'c4' ){
    bot('editMessageText',[
     chat_id =>$chat_id2,
     'message_id'=>$message_id,
     'text' => '
     🔸أَصْـبَحْنا وَأَصْـبَحَ المُـلْكُ لله وَالحَمدُ لله ، لا إلهَ إلاّ اللّهُ وَحدَهُ لا شَريكَ لهُ، لهُ المُـلكُ ولهُ الحَمْـد، وهُوَ على كلّ شَيءٍ قدير ، رَبِّ أسْـأَلُـكَ خَـيرَ ما في هـذا اليوم وَخَـيرَ ما بَعْـدَه ، وَأَعـوذُ بِكَ مِنْ شَـرِّ ما في هـذا اليوم وَشَرِّ ما بَعْـدَه، رَبِّ أَعـوذُبِكَ مِنَ الْكَسَـلِ وَسـوءِ الْكِـبَر ، رَبِّ أَعـوذُ بِكَ مِنْ عَـذابٍ في النّـارِ وَعَـذابٍ في القَـبْر. ' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌸' , callback_data => 'c5' ]]
    ]
    ])
    ]);
    }
    
    if($data ==  'c5' ){
    bot('editMessageText',[
     chat_id =>$chat_id2,
     'message_id'=>$message_id,
     'text' => '
     🔸اللّهـمَّ أَنْتَ رَبِّـي لا إلهَ إلاّ أَنْتَ ، خَلَقْتَنـي وَأَنا عَبْـدُك ، وَأَنا عَلـى عَهْـدِكَ وَوَعْـدِكَ ما اسْتَـطَعْـت ، أَعـوذُبِكَ مِنْ شَـرِّ ما صَنَـعْت ، أَبـوءُ لَـكَ بِنِعْـمَتِـكَ عَلَـيَّ وَأَبـوءُ بِذَنْـبي فَاغْفـِرْ لي فَإِنَّـهُ لا يَغْـفِرُ الذُّنـوبَ إِلاّ أَنْتَ . ' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌸' , callback_data => 'c6' ]]
    ]
    ])
    ]);
    }
    
    if($data ==  'c6' ){
    bot('editMessageText',[
     chat_id =>$chat_id2,
     'message_id'=>$message_id,
     'text' => '🔸رَضيـتُ بِاللهِ رَبَّـاً وَبِالإسْلامِ ديـناً وَبِمُحَـمَّدٍ صلى الله عليه وسلم نَبِيّـاً. 
     🔹3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌸' , callback_data => 'c7' ]]
    ]
    ])
    ]);
    }
    
    
    
    if($data ==  'c7' ){
    bot('editMessageText',[
     chat_id =>$chat_id2,
     'message_id'=>$message_id,
     'text' => '
     🔸حَسْبِـيَ اللّهُ لا إلهَ إلاّ هُوَ عَلَـيهِ تَوَكَّـلتُ وَهُوَ رَبُّ العَرْشِ العَظـيم. 
     🔹7 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌸' , callback_data => 'c8' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c8' ){
    bot('editMessageText',[
     chat_id =>$chat_id2,
     'message_id'=>$message_id,
     'text' => '🔘بِسـمِ اللهِ الذي لا يَضُـرُّ مَعَ اسمِـهِ شَيءٌ في الأرْضِ وَلا في السّمـاءِ وَهـوَ السّمـيعُ العَلـيم.    
     🔹3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌸' , callback_data => 'c9' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c9' ){
    bot('editMessageText',[
     chat_id =>$chat_id2,
     'message_id'=>$message_id,
     'text' => '🔘اللّهُـمَّ بِكَ أَصْـبَحْنا وَبِكَ أَمْسَـينا ، وَبِكَ نَحْـيا وَبِكَ نَمُـوتُ وَإِلَـيْكَ النُّـشُور' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌸' , callback_data => 'c10' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c10' ){
    bot('editMessageText',[
     chat_id =>$chat_id2,
     'message_id'=>$message_id,
     'text' => '🔘أَصْبَـحْـنا عَلَى فِطْرَةِ الإسْلاَمِ، وَعَلَى كَلِمَةِ الإِخْلاَصِ، وَعَلَى دِينِ نَبِيِّنَا مُحَمَّدٍ صَلَّى اللهُ عَلَيْهِ وَسَلَّمَ، وَعَلَى مِلَّةِ أَبِينَا إبْرَاهِيمَ حَنِيفاً مُسْلِماً وَمَا كَانَ مِنَ المُشْرِكِينَ. ' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي' , callback_data => 'c11' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c11' ){
    bot('editMessageText',[
     chat_id =>$chat_id2,
     'message_id'=>$message_id,
     'text' => '
     🔘سُبْحـانَ اللهِ وَبِحَمْـدِهِ عَدَدَ خَلْـقِه ، وَرِضـا نَفْسِـه ، وَزِنَـةَ عَـرْشِـه ، وَمِـدادَ كَلِمـاتِـه.
     🔹3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌸' , callback_data => 'c12' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c12' ){
    bot('editMessageText',[
     chat_id =>$chat_id2,
     'message_id'=>$message_id,
     'text' => '🔘اللّهُـمَّ عافِـني في بَدَنـي ، اللّهُـمَّ عافِـني في سَمْـعي ، اللّهُـمَّ عافِـني في بَصَـري ، لا إلهَ إلاّ أَنْـتَ اللّهُـمَّ إِنّـي أَعـوذُ بِكَ مِنَ الْكُـفر ، وَالفَـقْر ، وَأَعـوذُ بِكَ مِنْ عَذابِ القَـبْر ، لا إلهَ إلاّ أَنْـتَ.
     🔹3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌸' , callback_data => 'c13' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c13' ){
    bot('editMessageText',[
     chat_id =>$chat_id2,
     'message_id'=>$message_id,
     'text' => '
     🔘اللّهُـمَّ إِنِّـي أسْـأَلُـكَ العَـفْوَ وَالعـافِـيةَ في الدُّنْـيا وَالآخِـرَة ، اللّهُـمَّ إِنِّـي أسْـأَلُـكَ العَـفْوَ وَالعـافِـيةَ في ديني وَدُنْـيايَ وَأهْـلي وَمالـي ، اللّهُـمَّ اسْتُـرْ عـوْراتي وَآمِـنْ رَوْعاتـي ، اللّهُـمَّ احْفَظْـني مِن بَـينِ يَدَيَّ وَمِن خَلْفـي وَعَن يَمـيني وَعَن شِمـالي ، وَمِن فَوْقـي ، وَأَعـوذُ بِعَظَمَـتِكَ أَن أُغْـتالَ مِن تَحْتـي. ' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌸' , callback_data => 'c14' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c14' ){
    bot('editMessageText',[
     chat_id =>$chat_id2,
     'message_id'=>$message_id,
     'text' => '🔘يَا حَيُّ يَا قيُّومُ بِرَحْمَتِكَ أسْتَغِيثُ أصْلِحْ لِي شَأنِي كُلَّهُ وَلاَ تَكِلُنِي إلَى نَفْسِي طَـرْفَةَ عَيْنٍ.' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌸' , callback_data => 'c15' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c15' ){
    bot('editMessageText',[
     chat_id =>$chat_id2,
     'message_id'=>$message_id,
     'text' => '🔘اللّهُـمَّ عالِـمَ الغَـيْبِ وَالشّـهادَةِ فاطِـرَ السّماواتِ وَالأرْضِ رَبَّ كـلِّ شَـيءٍ وَمَليـكَه ، أَشْهَـدُ أَنْ لا إِلـهَ إِلاّ أَنْت ، أَعـوذُ بِكَ مِن شَـرِّ نَفْسـي وَمِن شَـرِّ الشَّيْـطانِ وَشِـرْكِه ، وَأَنْ أَقْتَـرِفَ عَلـى نَفْسـي سوءاً أَوْ أَجُـرَّهُ إِلـى مُسْـلِم. ' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌸' , callback_data => 'c17' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c17' ){
    bot('editMessageText',[
     chat_id =>$chat_id2,
     'message_id'=>$message_id,
     'text' => '🔘أَعـوذُ بِكَلِمـاتِ اللّهِ التّـامّـاتِ مِنْ شَـرِّ ما خَلَـق.
     🔹3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌸' , callback_data => 'c18' ]]
    ]
    ])
    ]);
    }
    
    
    if($data ==  'c18' ){
    bot('editMessageText',[
     chat_id =>$chat_id2,
     'message_id'=>$message_id,
     'text' => '🔘اللَّهُمَّ صَلِّ وَسَلِّمْ وَبَارِكْ على نَبِيِّنَا مُحمَّد.
     ✔️غير مقيد بعدد' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌸' , callback_data => 'c19' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c19' ){
     bot('editMessageText',[
     chat_id =>$chat_id2,
     'message_id'=>$message_id,
     'text' => '🔘اللَّهُمَّ إِنَّا نَعُوذُ بِكَ مِنْ أَنْ نُشْرِكَ بِكَ شَيْئًا نَعْلَمُهُ ، وَنَسْتَغْفِرُكَ لِمَا لَا نَعْلَمُهُ' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'انـهـاء ❤' , callback_data => 'amr' ]]
    ]
    ])
    ]);
    }
    if($data ==  'amr4' ){
    bot('editMessageText',[
     chat_id =>$chat_id2,
     'message_id'=>$message_id,
     'text' => '▪️أَعُوذُ بِاللهِ مِنْ الشَّيْطَانِ الرَّجِيمِ
     
     ⏺اللّهُ لاَ إِلَـهَ إِلاَّ هُوَ الْحَيُّ الْقَيُّومُ لاَ تَأْخُذُهُ سِنَةٌ وَلاَ نَوْمٌ لَّهُ مَا فِي السَّمَاوَاتِ وَمَا فِي الأَرْضِ مَن ذَا الَّذِي يَشْفَعُ عِنْدَهُ إِلاَّ بِإِذْنِهِ يَعْلَمُ مَا بَيْنَ أَيْدِيهِمْ وَمَا خَلْفَهُمْ وَلاَ يُحِيطُونَ بِشَيْءٍ مِّنْ عِلْمِهِ إِلاَّ بِمَا شَاء وَسِعَ كُرْسِيُّهُ السَّمَاوَاتِ وَالأَرْضَ وَلاَ يَؤُودُهُ حِفْظُهُمَا وَهُوَ الْعَلِيُّ الْعَظِيمُ.[آية الكرسى - البقرة 255]. 
     🔹مرة واحدة ' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌸' , callback_data => 'c1' ]]
    ]
    ])
    ]);
    }
if($data == "amr1"){
    bot('editMessageText',[
     chat_id =>$chat_id2,
     'message_id'=>$message_id,
'text'=>"*
هلا بك عزيزي اكتب اسم الصوره للارسال

᥀︙ 1- سورة الفاتحه
᥀︙ 2- سورة البقرة
᥀︙ 3- سورة ال عمران
᥀︙ 4- سورة النساء
᥀︙ 5- سورة المائدة
᥀︙ 6- سورة الانعام
᥀︙ 7- سورة الأعراف
᥀︙ 8- سورة الأنفال
᥀︙ 9- سورة التوبة
᥀︙ 10- سورة يونس
᥀︙ 11- سورة هود
᥀︙ 12- سورة يوسف
᥀︙ 13- سورة الرعد
᥀︙ 14- سورة أبراهيم
᥀︙ 15- سورة الحجر
᥀︙ 16- سورة النحل
᥀︙ 17- سورة الاسراء
᥀︙ 18- سورة الكهف
᥀︙ 19- سورة مريم
᥀︙ 20- سورة طه
᥀︙ 21- سورة الأنبياء
᥀︙ 22- سورة الحج
᥀︙ 23- سورة المؤمنون
᥀︙ 24- سورة النور
᥀︙ 25- سورة الفرقان
᥀︙ 26- سورة الشعراء
᥀︙ 27- سورة النحل
᥀︙ 28- سورة القصص
᥀︙ 29- سورة العنكبوت
᥀︙ 30- سورة الروم
᥀︙ 31- سورة لقمان
᥀︙ 32- سورة السجدة
᥀︙ 33- سورة الاحزاب
᥀︙ 34- سورة سبأ
᥀︙ 35- سورة فاطر
᥀︙ 36- سورة يس
᥀︙ 37- سورة الصافات
᥀︙ 38- سورة ص
᥀︙ 39- سورة الزمر
᥀︙ 40- سورة غافر
᥀︙ 41- سورة فصلت
᥀︙ 42- سورة الشورئ
᥀︙ 43- سورة الزخرف
᥀︙ 44- سورة الدخان
᥀︙ 45- سورة الجاثيه
᥀︙ 46- سورة الاحقاف
᥀︙ 47- سورة محمد
᥀︙ 48- سورة الفتح
᥀︙ 49- سورة الحجرات
᥀︙ 50- سورة ق
᥀︙ 51- سورة الذاريات
᥀︙ 52- سورة الطور
᥀︙ 53- سورة النجم
᥀︙ 54- سورة القمر
᥀︙ 55- سورة الرحمن
᥀︙ 56- سورة الواقعه
᥀︙ 57- سورة الحديد
᥀︙ 58- سورة المجادلة
᥀︙ 59- سورة الحشر
᥀︙ 60- سورة الممتحنة
᥀︙ 61- سورة الصف*
ــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
",
         'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"عرض المزيد ",'callback_data'=>"amr2"]],
[['text'=>"رجوع ",'callback_data'=>"amr"]],
]])
]);
}
if($data == "amr2"){
    bot('editMessageText',[
     chat_id =>$chat_id2,
     'message_id'=>$message_id,
'text'=>"*
تم عرض المزيد لك الان 

᥀︙ 62- سورة الجمعة
᥀︙ 63- سورة المنافقون
᥀︙ 64- سورة التغابن
᥀︙ 65- سورة الطلاق
᥀︙ 66- سورة التحريم
᥀︙ 67- سورة الملك
᥀︙ 68- سورة القلم
᥀︙ 69- سورة الحاقة
᥀︙ 70- سورة المعارج
᥀︙ 71- سورة نوح
᥀︙ 72- سورة الجن
᥀︙ 73- سورة المزمل
᥀︙ 74- سورة المدثر
᥀︙ 75- سورة القيامة
᥀︙ 76- سورة الانسان
᥀︙ 77- سورة المرسلات
᥀︙ 78- سورة النبأ
᥀︙ 79- سورة النازعات
᥀︙ 80- سورة عبس
᥀︙ 81- سورة التكوير
᥀︙ 82- سورة الانفطار
᥀︙ 83- سورة المطففين
᥀︙ 84- سورة الانشقاق
᥀︙ 85- سورة البروج
᥀︙ 86- سورة الطارق
᥀︙ 87- سورة الاعلئ
᥀︙ 88- سورة الغاشية
᥀︙ 89- سورة الفجر
᥀︙ 90- سورة البلد
᥀︙ 91- سورة الشمس
᥀︙ 92- سورة الليل
᥀︙ 93- سورة الضحئ
᥀︙ 94- سورة الشرح
᥀︙ 95- سورة التين
᥀︙ 96-  سورة العلق  
᥀︙ 97-  سورة القدر
᥀︙ 98- سورة البينة
᥀︙ 99- سورة الزلزلة
᥀︙ 100- سورة العاديات
᥀︙ 101- سورة القارعة
᥀︙ 102- سورة التكاثر
᥀︙ 103- سورة العصر
᥀︙ 104- سورة الهمزة
᥀︙ 105- سورة الفيل
᥀︙ 106- سورة قريش
᥀︙ 107- سورة الماعون
᥀︙ 108- سورة الكوثر
᥀︙ 109- سورة الكافرون
᥀︙ 110- سورة النصر
᥀︙ 111- سورة المسد
᥀︙ 112- سورة الاخلاص
᥀︙ 113- سورة الفلق
᥀︙ 114- سورة الناس
ــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
*
",
         'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"عرض اقل ",'callback_data'=>"amr1"]],
[['text'=>"رجوع ",'callback_data'=>"amr"]],
]])
]);
}
if($data == "amr"){
    bot('editMessageText',[
     chat_id =>$chat_id2,
     'message_id'=>$message_id,
'text'=>"*
السلام عليكم ورحمة الله 👋
 
 هلا بكم في بوت القرآن الكريم 🌸
 
 يمكنك الاستمع القرآن و الاذكار من خلال البوت 
 
كل ما عليك تحديد خيارك ⬇️
 *
 ",
          'parse_mode'=>"markdown",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'صفحات من القرآن 🌻','callback_data'=>'amr7']],
[['text'=>'الاذكار 🌸','callback_data'=>'amr4'],['text'=>' الايات القرانيه 🤲','callback_data'=>'amr1']],
[['text'=>'اوامر البوت 💡','callback_data'=>'amr6'],['text'=>'شرح البوت ⭐','callback_data'=>'amr5']],
[['text'=>'تحديثات البوت 📢','url'=>'https://t.me/$amrq'],['text'=>'المطور 🇪🇬','url'=>'https://t.me/$amrMr']],
[['text'=>'الدعم الفني ✅','callback_data'=>'amrHg']],
]
])
]);
}
    if($data ==  'amrHg' ){
    bot('editMessageText',[
     chat_id =>$chat_id2,
     'message_id'=>$message_id,
     'text' => '*هلا بك عزيزي *
*     ــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــ*
المطور الاساسي : @$amrMr
قناة السورس : @amrakl
قناة البوت : $amrq
دعمي رقم ¹ :  $amrMr1
دعمي رقم ² : $amrMr2
دعمي رقم ³ : $amrMr3
*ــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓـــــ*",
          'parse_mode'=>"markdown",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
    [[ 'text' => 'رجوع 🌸' , callback_data => 'amr' ]]
    ]
    ])
    ]);
    }
if($data == "amr7"){
    bot('editMessageText',[
     chat_id =>$chat_id2,
     'message_id'=>$message_id,
'text'=>"*
هلا بك عزيزي 👋
 
الان ارسل كلمه صفحه و رقم الصفحه📝

مثل : صفحه 1 

سوف تظهر لك الصفحه 🇪🇬
 *
 ",
          'parse_mode'=>"markdown",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع','callback_data'=>'amr']],
]
])
]);
}
if($data == "amr5"){
    bot('editMessageText',[
     chat_id =>$chat_id2,
     'message_id'=>$message_id,
'text'=>"*
بسم الله والصلاة والسلام على رسول ♥️

صدقة علي كل ارواح ( اموات ) المسلمين 🤲

نرجا من الجميع قراء القرآن كل يوم ⬇️

ولصلاة والسلام علي رسول ( الله ) 🌸
 *
 ",
          'parse_mode'=>"markdown",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع','callback_data'=>'amr']],
]
])
]);
}
if($data == "amr6"){
    bot('editMessageText',[
     chat_id =>$chat_id2,
     'message_id'=>$message_id,
'text'=>"
*1- امر ارسل ( الايات )*

- لعرض الايات الموجودهمثال على ذالك ( سورة الفاتحه ) .

*2- امر ( قران )*

 يقوم البوت ب ارسال بصمه صوتيه .
- تحتوي على قرآن ويمكنك استماعه .

*3- امر  ( صفحه + رقم الصفحه )*

 يقوم البوت  .
- بجلب صفحه من القران مثال ( صفحه 1 ) سيرسل البوت صورة الصفحه .

 
 ",
          'parse_mode'=>"markdown",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع','callback_data'=>'amr']],
]
])
]);
}

if($text == "الايات" or $text == "ألايات" or $text == "amr1"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
᥀︙اهلا عزيزي ↫ $name
᥀︙في قائمة الآيات ⬇️ .
᥀︙ 1- سورة الفاتحه
᥀︙ 2- سورة البقرة
᥀︙ 3- سورة ال عمران
᥀︙ 4- سورة النساء
᥀︙ 5- سورة المائدة
᥀︙ 6- سورة الانعام
᥀︙ 7- سورة الأعراف
᥀︙ 8- سورة الأنفال
᥀︙ 9- سورة التوبة
᥀︙ 10- سورة يونس
᥀︙ 11- سورة هود
᥀︙ 12- سورة يوسف
᥀︙ 13- سورة الرعد
᥀︙ 14- سورة أبراهيم
᥀︙ 15- سورة الحجر
᥀︙ 16- سورة النحل
᥀︙ 17- سورة الاسراء
᥀︙ 18- سورة الكهف
᥀︙ 19- سورة مريم
᥀︙ 20- سورة طه
᥀︙ 21- سورة الأنبياء
᥀︙ 22- سورة الحج
᥀︙ 23- سورة المؤمنون
᥀︙ 24- سورة النور
᥀︙ 25- سورة الفرقان
᥀︙ 26- سورة الشعراء
᥀︙ 27- سورة النحل
᥀︙ 28- سورة القصص
᥀︙ 29- سورة العنكبوت
᥀︙ 30- سورة الروم
᥀︙ 31- سورة لقمان
᥀︙ 32- سورة السجدة
᥀︙ 33- سورة الاحزاب
᥀︙ 34- سورة سبأ
᥀︙ 35- سورة فاطر
᥀︙ 36- سورة يس
᥀︙ 37- سورة الصافات
᥀︙ 38- سورة ص
᥀︙ 39- سورة الزمر
᥀︙ 40- سورة غافر
᥀︙ 41- سورة فصلت
᥀︙ 42- سورة الشورئ
᥀︙ 43- سورة الزخرف
᥀︙ 44- سورة الدخان
᥀︙ 45- سورة الجاثيه
᥀︙ 46- سورة الاحقاف
᥀︙ 47- سورة محمد
᥀︙ 48- سورة الفتح
᥀︙ 49- سورة الحجرات
᥀︙ 50- سورة ق
᥀︙ 51- سورة الذاريات
᥀︙ 52- سورة الطور
᥀︙ 53- سورة النجم
᥀︙ 54- سورة القمر
᥀︙ 55- سورة الرحمن
᥀︙ 56- سورة الواقعه
᥀︙ 57- سورة الحديد
᥀︙ 58- سورة المجادلة
᥀︙ 59- سورة الحشر
᥀︙ 60- سورة الممتحنة
᥀︙ 61- سورة الصف
᥀︙ 62- سورة الجمعة
᥀︙ 63- سورة المنافقون
᥀︙ 64- سورة التغابن
᥀︙ 65- سورة الطلاق
᥀︙ 66- سورة التحريم
᥀︙ 67- سورة الملك
᥀︙ 68- سورة القلم
᥀︙ 69- سورة الحاقة
᥀︙ 70- سورة المعارج
᥀︙ 71- سورة نوح
᥀︙ 72- سورة الجن
᥀︙ 73- سورة المزمل
᥀︙ 74- سورة المدثر
᥀︙ 75- سورة القيامة
᥀︙ 76- سورة الانسان
᥀︙ 77- سورة المرسلات
᥀︙ 78- سورة النبأ
᥀︙ 79- سورة النازعات
᥀︙ 80- سورة عبس
᥀︙ 81- سورة التكوير
᥀︙ 82- سورة الانفطار
᥀︙ 83- سورة المطففين
᥀︙ 84- سورة الانشقاق
᥀︙ 85- سورة البروج
᥀︙ 86- سورة الطارق
᥀︙ 87- سورة الاعلئ
᥀︙ 88- سورة الغاشية
᥀︙ 89- سورة الفجر
᥀︙ 90- سورة البلد
᥀︙ 91- سورة الشمس
᥀︙ 92- سورة الليل
᥀︙ 93- سورة الضحئ
᥀︙ 94- سورة الشرح
᥀︙ 95- سورة التين
᥀︙ 96-  سورة العلق  
᥀︙ 97-  سورة القدر
᥀︙ 98- سورة البينة
᥀︙ 99- سورة الزلزلة
᥀︙ 100- سورة العاديات
᥀︙ 101- سورة القارعة
᥀︙ 102- سورة التكاثر
᥀︙ 103- سورة العصر
᥀︙ 104- سورة الهمزة
᥀︙ 105- سورة الفيل
᥀︙ 106- سورة قريش
᥀︙ 107- سورة الماعون
᥀︙ 108- سورة الكوثر
᥀︙ 109- سورة الكافرون
᥀︙ 110- سورة النصر
᥀︙ 111- سورة المسد
᥀︙ 112- سورة الاخلاص
᥀︙ 113- سورة الفلق
᥀︙ 114- سورة الناس
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
",
'reply_to_message_id'=>$message->message_id, 
]);
}
#####بدايات الايات#####
if($text == "سورة الفاتحه" or $text == "سوره الفاتحه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/15",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره البقره" or $text == "سورة البقره"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/4",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة ال عمران" or $text == "سوره ال عمران"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/5",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره النساء" or $text == "سورة النساء"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/7",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة المائده" or $text == "سوره المائده"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/8",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الانعام" or $text == "سورة الأنعام"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/9",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الانعام" or $text == "سورة الانعام"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/10",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الاعراف" or $text == "سوره الاعراف"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/11",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الانفال" or $text == "سوره الانفال"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/12",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره التوبه" or $text == "سورة التوبه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/13",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره يونس" or $text == "سورة يونس"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/14",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة هود" or $text == "سوره هود"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/17",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة يوسف" or $text == "سوره يوسف"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/18",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الرعد" or $text == "سوره الرعد"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/21",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره ابراهيم" or $text == "سورة ابراهيم"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/25",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الحجر" or $text == "سورة الحجر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/29",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة النحل" or $text == "سوره النحل"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/33",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الاسراء" or $text == "سورة الاسراء"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/37",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الكهف" or $text == "سوره الكهف"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/41",
 reply_to_message_id =>$message->message_id, 
]);
}if($text == "سورة مريم" or $text == "سوره مريم"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/45",
 reply_to_message_id =>$message->message_id, 
]);
}if($text == "سوره طه" or $text == "سورة طه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/47",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الانبياء" or $text == "سورة الانبياء"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/49",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الحج" or $text == "سوره الحج"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/51",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة المؤمنون" or $text == "سوره المؤمنون"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/53",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره النور" or $text == "سورة النور"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/56",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الفرقان" or $text == "سوره الفرقان"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/58",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الشعراء" or $text == "سوره الشعراء"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/60",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره القصص" or $text == "سورة القصص"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/62",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره العنكبوت" or $text == "سورة العنكبوت"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/66",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الروم" or $text == "سوره الروم"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/68",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة لقمان" or $text == "سوره لقمان"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/70",
 reply_to_message_id =>$message->message_id, 
]);
}if($text == "سورة السجده" or $text == "سوره السجده"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/72",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الاحزاب" or $text == "سوره الاحزاب"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/74",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة سبأ" or $text == "سوره سبأ"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/76",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره فاطر" or $text == "سورة فاطر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/78",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره يس" or $text == "سورة يس"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/80",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الصافات" or $text == "سوره الصافات"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/82",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة ص" or $text == "سوره ص"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/84",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الزمر" or $text == "سورة الزمر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/86",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة غافر" or $text == "سوره غافر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/88",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة فصلت" or $text == "سوره فصلت"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/91",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الشورئ" or $text == "سوره الشورئ"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/93",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الزحرف" or $text == "سوره الزحرف"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/95",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الدخان" or $text == "سوره الدخان"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/97",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الجاثية" or $text == "سوره الجاثيه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/99",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الاحقاف" or $text == "سوره الاحقاف"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/101",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة محمد" or $text == "سوره محمد"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/103",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الفتح" or $text == "سوره الفتح"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/105",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الحجرات" or $text == "سورة الحجرات"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/107",
 reply_to_message_id =>$message->message_id, 
]);
}if($text == "سورة ق" or $text == "سوره ق"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"",
 reply_to_message_id =>$message->message_id, 
]);
}if($text == "سورة الذاريات" or $text == "سوره الذاريات"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/111",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الطور" or $text == "سوره الطور"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/115",
 reply_to_message_id =>$message->message_id, 
]);
}if($text == "سورة القمر" or $text == "سوره القمر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/121",
 reply_to_message_id =>$message->message_id, 
]);
}if($text == "سورة الرحمن" or $text == "سوره الرحمن"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/123",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الواقعه" or $text == "سوره الواقعه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/125",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الحديد" or $text == "سوره الحديد"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/127",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورةه المجادله" or $text == "سوره المجادله"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/129",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الحشر" or $text == "سورة الحشر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/131",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الممتحنه" or $text == "سوره الممتحنه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/133",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الصف" or $text == "سوره الصف"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/135",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سوره الجمعه" or $text == "سورة الجمعه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/137",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة المنافقون" or $text == "سوره المنافقون"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/139",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة التغابن" or $text == "سوره التغابن"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/141",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة الطلاق" or $text == "سوره الطلاق"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/143",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة التحريم" or $text == "سوره التحريم"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/145",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة الملك" or $text == "سوره الملك"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/147",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سوره القلم" or $text == "سورة القلم"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/149",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة المعارج" or $text == "سوره المعارج"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/152",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة نوح" or $text == "سوره نوح"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/154",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة الجن" or $text == "سوره الجن"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/156",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة المزمل" or $text == "سوره المزمل"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/158",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة المدثر" or $text == "سوره المدثر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/160",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورةه القيامه" or $text == "سوره القيامه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/162",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة الانسان" or $text == "سوره الانسان"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/164",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة المرسلات" or $text == "سوره المرسلات"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/166",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة نبأ" or $text == "سوره نبأ"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/168",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة النازعات" or $text == "سوره النازعات"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/170",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره عبس" or $text == "سوره عبس"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/172",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة التكوير" or $text == "سوره التكوير"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/174",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الانفطار" or $text == "سورة الانفطار"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/176",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره المطففين" or $text == "سورة المطففين"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/178",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الانشقاق" or $text == "سورة الانشقاق"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/180",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة البروج" or $text == "سورة البروج"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/302",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الطارق" or $text == "سورة الطارق"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/304",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الاعلئ" or $text == "سورة الاعلئ"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/306",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الغاشيه" or $text == "سوره الغاشيه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/308",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الفجر" or $text == "سوره الفجر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/310",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة البلد" or $text == "سوره البلد"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/312",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الشمس" or $text == "سورة الشمس"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/314",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الليل" or $text == "سوره الليل"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/316",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الضحئ" or $text == "سوره الضحئ"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/318",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الشرح" or $text == "سوره الشرح"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/320",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة التين" or $text == "سوره التين"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/322",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة العلق" or $text == "سوره العلق"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/324",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره القدر" or $text == "سورة القدر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/326",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الزلزلة" or $text == "سورة الزلزله"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/328",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره البينة" or $text == "سورة البينة"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/330",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة العاديات" or $text == "سوره العاديات"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/332",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره القارعه" or $text == "سورة القارعه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/334",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره التكاثر" or $text == "سورة التكاثر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/336",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره العصر" or $text == "سورة العصر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/338",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الهمزة" or $text == "سورة الهمزة"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/340",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الفيل" or $text == "سوره الفيل"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/342",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة قريش" or $text == "سوره قريش"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/344",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الماعون" or $text == "سوره الماعون"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/346",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "" or $text == ""){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الكوثر" or $text == "سوره الكوثر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/348",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الكافرون" or $text == "سورة الكافرون"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/350",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة النصر" or $text == "سوره النصر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/352",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة المسد" or $text == "سوره المسد"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/354",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الاخلاص" or $text == "سوره الاخلاص"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/356",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الفلق" or $text == "سوره الفلق"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/358",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الناس" or $text == "سورة الناس"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/360",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الحاقة" or $text == "سورة الحاقة"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/364",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "اذكار" or $text == "دعاء"){ 
bot('sendmessage',[
'chat_id'=>$chat_id2,
"text"=>"$n1hrby",
'reply_to_message_id'=>$message->message_id,
 'message_id'=>$message->message_id,
 'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'- dev','url'=>'t.me/$amrMr']],
]
])
]);
}
if(strpos($text,'صفحه ') !== false){
$ex = explode(' ',$text);
$MR = $ex[1];
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://iuytiuyt.000webhostapp.com/newquran/$MR.gif",
'caption'=>"- تم جلب الصفحه بنجاح .",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'- dev','url'=>'t.me/$amrMr']],
]
])
]);
}