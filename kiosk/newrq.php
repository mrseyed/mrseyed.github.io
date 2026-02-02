<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>

<meta id="mtKeywords" name="KEYWORDS" content="">

<meta property="og:type" content="article" />
<meta property="og:url" content="https;//mrseyed.github.io" />
<meta property="og:locale" content="fa_IR" />
<meta property="og:site_name" content="https://mrseyed.github.io" />
<meta property="og:title" content="آقاسیــد" />
<meta property="og:description" content="
ارائه کلیه خدمات تخصصی سیستم عامل اندروید و اینترنتی و فروسگاه اینترنتی محصولات مرتبط
" />
<meta property="og:image" content="https://mrseyed.github.io/media/mrseyed.jpg">
<title>آقــا  سـیـــد</title>


<meta http-equiv="Content-Type" content="text/html; charset:utf-8" />
<meta http-equiv="Content-language" content="fa" />



 <link rel="stylesheet" type="text/css" href="msdata/fonts/all.css">
 <link rel="stylesheet" type="text/css" href="msdata/fonts/bs icons/bootstrap-icons.min.css">
 <link rel="stylesheet" type="text/css" href="msdata/fonts/fa.min.css">
 <link rel="stylesheet" type="text/css" href="msdata/fonts/icofont.min.css">
 <link rel="stylesheet" type="text/css" href="msdata/fonts/fonts.css">
 <link rel="stylesheet" type="text/css" href="msdata/css/5/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="msdata/css/mrseyed.css">
</head>
<style type="text/css">
body {
width:800px;
direction:rtl;
text-align:center;
}
.title {
width:100%;
border:2px groove gray;
border-radius:10px 10px 2px 2px;
background-image:url("media/blue.ban1.jpg");
height:50px;
}

/* 📌FRM📌 */
.frm {
width:100%;
}
.frm-head {
width:95%;
background-image:url("media/png4.png");
height:35px;
border:1px solid gray;
border-radius: 10px 10px 2px 2px;
margin-top:20px;
}
.frm-body {
width:95%;
background-color:silver;
min-height:300px;
border-right:2px solid gray;
border-left:2px solid gray;
padding-top:10px;
}
.frm-foot {
width:95%;
background-image:url("media/png4.png");
min-height:15px;
border:1px solid gray;
border-radius:1px 1px 5px 5px;
}
.sub-head {
width:99%;
background-image:url("media/red.ban2.webp");
min-height:25px;
border-radius: 10px 10px 2px 2px;
border:1px solid black;
padding-right:10px;
}
.sub-head2 {
width:99%;
background-image:url("media/red.ban2.webp");
min-height:15px;
border-radius: 2px 2px 2px 2px;
border:1px solid black;
padding-right:10px;
}

.sub-body {
width:99%;
background-color:white;
min-height:50px;
border-right:1px solid black;
border-left:1px solid black;
border-bottom:1px solid black;
padding-top:5px;
padding-bottom:5px;
}
table {
font-family:saminbold;
width:99%;
}
table > tbody > tr > th {
background-color:black;
color:yellow;
font-family:irsblack;
border:0.5px solid white;
text-align:center;
}
table > tbody > tr > td {
border:0.5px solid silver;
font-family:shabnam;
text-align:center;
}
</style>
<body>
<center>
 
 <button onclick="sendGetRequest()">دریافت اطلاعات</button>
 <p id="demo"></p>
 
 <script type="text/javascript">
 const httpRequest = new XMLHttpRequest();
 
 function sendGetRequest() {
 httpRequest.onreadystatechange = writeContent;
 
 httpRequest.open('GET', 'https://127.0.0.1:3001/notes/newrq.php');
 httpRequest.send();
 }
 
 function writeContent() {
 if (httpRequest.readyState === 4) {
 if (httpRequest.status == 200) {
 const response = httpRequest.responseText;
 document.getElementById("demo").innerHTML = response;
 } else {
 alert('There was a problem with the request.');
 }
 } else {
 // response not ready yet
 }
 }
 </script>

 
 <div class="frm center">
  <div class="frm-head titr1 fs30">
 رزومه
  </div>
  
  <div class="sub-head2 right titr2 fs18 white w95">
   <img src="media/svg/lang.svg" width="15px" style="margin-top:3px" >
  مهارت‌های زبان‌های خارجه
  </div>
  <div class="sub-body" style="font-family:vazir" >
  
 
  نام <input class="w50"  type = "text" name = "name" id="name" >
  سن <input class="w20"  type = "text" name = "age" id="age" ><br>
  <button id="submit" class="bt bt-blue fs15"  onclick="submit()">ثبت</button>
   <p class="shabnambold fs17 center red"  id="msg" ></p>
  <script>
  function submit() {
   var name=document.getElementById("name").value;
   var age=document.getElementById("age").value;
   
   document.getElementById("msg").innerHTML= "سلام " + name + "  و سن شما " + age;
   }
  </script>
  
 </div></div>
  <div class="frm-body">
   <div class="sub-head right titr2 fs20 white">
    <img src="media/svg/idcard.svg" width="30px" style="margin-top:3px" >
    مشخصات فردی
   </div>
   <div class="sub-body">
    <table width="99%" style="text-align:center" >
     <tr>
      <th width="55%" bgcolor="black" class="gold right" >
       <img src="media/svg/svg2.svg" width="16px">
       نام و نام خانوادگی
      </th>
      <td rowspan="8" width="45%" style="border:1px solid black"  >
       <img src="media/mypic.jpg" width="100%" >
      </td>
     </tr>
     <tr>
      <td class="shabnam" >سیدمحمد موسوی</td>
     </tr>
     <tr>
      <th bgcolor="black" class="gold right" >
       <img src="media/svg/svg3.svg" width="16px">
       سال تولد  
      </th>
     </tr>
     <tr>
      <td class="shabnam" >۱۳۷۰</td>
     </tr>
     <tr>
      <th bgcolor="black" class="gold right" >
       <img src="media/svg/svg4.svg" width="16px">
تحصیلات
      </th>
     <tr>
      <td class="shabnam" >دیپلم ریاضی و فیزیک</td>
     </tr>
    <tr>
     <th bgcolor="black" class="gold right" >
      <img src="media/svg/mob.png" width="16px">
شماره همراه
     </th>
    <tr>
     <td class="shabnam" >۰۹۱۳۹۹۷۷۰۰۳</td>
    </tr>
    <tr>
     <th bgcolor="black" class="gold right" >
     <img src="media/svg/svg5.svg" width="16px">
     آدرس و محل سکونت
     </th>
     <td class="shabnam right" >استان کرمان، شهر کرمان</td>
    </tr>
    <tr>
     <td colspan="2"  class="shabnam right" >سرآسیاب فرسنگی، بلوارشهیدان‌ماهانی، کوچه۷</td>
    </tr>
    </table>
   </div>
  
   <div class="sub-head2 right titr2 fs18 white">
    <img src="media/svg/lang.svg" width="15px" style="margin-top:3px" >
مهارت‌های زبان‌های خارجه
   </div>
   <div class="sub-body">
    <table style="margin-top:10px" border="1" >
     <tbody>
     <tr>
      <th width="5%" >.</th>
      <th width="35%" >زبان</th>
      <th width="20%" >خواندن</th>
      <th width="20%" >نوشتن</th>
      <th width="20%" >مکالمه</th>
     </tr>
     <tr>
      <th>1</th>
      <th>انگلیسی</th>
      <td>عالی</td>
      <td>عالی</td>
      <td>عالی</td>
     </tr>
     <tr>
      <th>2</th>
      <th>عربی</th>
      <td>عالی</td>
      <td>عالی</td>
      <td>ضعیف</td>
     </tr>
     
    </tbody>
    </table>
   </div>
   
   <div class="sub-head2 right titr2 fs18 white">
    <img src="media/svg/lang.svg" width="15px" style="margin-top:3px" >
مهارت‌های انفرادی و فنی
   </div>
   <div class="sub-body">
   <table >
    <tbody>
     <tr>
      <th width="30%" >
       <i class="bi-mortarboard-fill" ></i>
       نـوع  مهـارت
      </th>
      <td>برق کشی ساختمان</td>
     </tr>
     <tr>
      <td colspan="2" class="justify" >
   برق‌کشی ساختمان را از ۱۰سالگی با کمک پدرم شروع کردم. بنده با توجه به اینکه خیلی کنجکاو بودم، خیلی دوست داشتم بدونم اینکه مثلا لامپ اتاق چجوری با زدن کلید روشن میشه. بنابراین اولین کارم با ساخت بک مدار لامپ با کلید تک پل شروع شد. بعد کم‌کم شد کلید دوپل و بعد تبدیل و ...  تا به امروز که تبدیل به یک برق‌کار ساختمان ماهر شدم.
   <br><b>برق نیمه صنعتی</b><br>
    برق نیمه صنعتی هم کار کردم. ولی نه به صورت حرفه ای. ولی میتوانم به جرات خودم را یک ماهرکار معرفی کنم.
      </td>
     </tr>
    </tbody>
   </table>
   <br>
   <table >
    <tbody>
     <tr>
      <th width="30%" >
       <i class="bi-mortarboard-fill" ></i>
       نـوع  مهـارت
      </th>
      <td>الکترونیک و لحیم‌کاری</td>
     </tr>
     <tr>
      <td colspan="2" class="justify" >
عموی بنده مهندس برق بود. وقتی در سن ۱۰سالگیم فهمید که من به برق علاقه دارم، بهم یه مولتی‌متر دیجیتال(آن زمان به آنها اهم‌متر میگفتند) داد. و همچنین یک هویه با دسته چوبی ۶۰وات ساده.علاقه من به الکترونیک خیلی بیشتر از برق‌کشی ساختمان بود. به همین دلیل خیلی خود جوش سعی میکردم وسایلی الکترونیکی منزل(وسایل مبتدی، نه درحد تلویزیون) را خودم باز کنم و اگر متوجه میشدم که قطعه‌ای از آن سوخته، خودم با پیدا کردن مشابه آن قطعه در بردهای اسقاطی دیگر، سعی میکردم که آن را تعویض و وسیله موردنظر رتا تعمیر کنم. و در بیشتر موارد موفق بودم. مگر مواردی که ایراد از جای عمیق‌تری بود، قادر له تشخیص آن نبودم.
<br>
در سال‌های ۱۳۸۳ تا ۱۳۸۴ شرکتی بنام مهران‌کیت برای آموزش الکترونیک، بردهایی وارد بازار کرد که هم جنبه آموزشی داشتند و هم جنبه سرگرمی. بنده ۷۰درصد بردهای این شرکت را خریدم و با لحیم کاری ساختم. این نقطه عطفی بود در پیشرفت من در لحیم کاری.

      </td>
     </tr>
    </tbody>
   </table>
    <br>
    <table >
     <tbody>
      <tr>
       <th width="30%" >
        <i class="bi-mortarboard-fill" ></i>
        نـوع  مهـارت
       </th>
       <td>تعمیرات تخصصی تلفن همراه</td>
      </tr>
      <tr>
       <td colspan="2" class="justify" >
در سال ۱۳۹۳ برای آموزس تعمیرات تلفن همراه به تهران رفتم و طی دوماه آموزش توانستم تمام دوره‌های تعمیرات موبایل را سپری کنم. بنابود که یک مغازه موبایل و تعمیراتی بزنم که بنا له دلایلی موفق به انجام آن نشدم. ولی از این مهارتم مدرک هم دارم.
       </td>
      </tr>
     </tbody>
    </table>
    <br>
    <table >
     <tbody>
      <tr>
       <th width="30%" >
        <i class="bi-mortarboard-fill" ></i>
        نـوع  مهـارت
       </th>
       <td>کامپیوتر(سخت‌افزار و نرم‌افزار)</td>
      </tr>
      <tr>
       <td colspan="2" class="justify" >
بنده از ۱۲سالگی به کامپیوتر علاقه پیدا کردم و از آن زمان تاکنون بدون هیچ کلاس آموزش توانستم مهارت‌های کامپی وتر را در سطح حرفه‌ای یاد بگیرم.
<br>
<b>
ویندوز، آفیس، برنامه نویسی، برنامه نویسی وب، فوتوشاپ، میکس فیلم و ... خیلی موارد دیگر
</b>
       </td>
      </tr>
     </tbody>
    </table>
    
   </table>
   
   </div>
   
   
  </div>
  
  <div class="frm-foot">
  
  </div>
 </div>
 
</center>
</body>
</html>

