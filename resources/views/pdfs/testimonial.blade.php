
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student's Testimonial</title>
    <style type="text/css">
    *{
        margin: 0;
        padding: 0;
    }
     
        body{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background-image: url(/uploads/bg1.png);
            /* background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            display: block;
            min-height: 100%;
            width: 100%;
            margin: 0 auto;

            padding: 0; */
            /* background-image:url(/uploads/bg.png); */
            background-repeat: no-repeat;
            background-attachment: relative;
            background-size: 810px 1050px;
            background-position: center center;
           
        }
        /* .container{
            background-image: url(/uploads/{{$school->username}}/{{$school->logo }});
            background-repeat: no-repeat;
            background-attachment: relative;
            background-size: 350px 350px;
            background-position: center center;
            padding-bottom: 15px;
            opacity: 0.2;
        } */
        html{

            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0 auto;
        }
    </style>
</head>
<body>

<div style="margin-top: 100px; text-align: center;">
    <h1>{{$school->name}}</h1>
    <h4 style="margin-top: 20px;">{{$school->address}}</h4>
</div>
<div style="text-align: center; margin-top: 20px;">
    <img  src="/uploads/{{$school->username}}/{{$school->logo }}" style="width: 100px; height: 100px;">
</div>

<div class="container">
<div style="text-align: center; margin-top: 20px;opacity: 1">
   <p style="font-family: Bradley Hand, cursive; font: 23px; font-style: italic; ">School Leaving Certificate & Testimonial</p>
   <p style="font-family: Arial; font: 15px; font-style: italic; margin-top: -10px;">This is to Certify that</p>
</div>


<div style="margin-top: 20px; opacity: 1">
    <p style="text-align: center; font-family: Bradley Hand, cursive; font: 23px; font-style: italic; border-bottom: 2px solid rgb(134, 130, 130); width: 75%; margin-left: 90px;">Umar Muhammd Katibu</p>
    <p style="margin: 0 70px; font-size: 17px; line-height: 1.8em;">Born on 19th January, 1989 was a student of this school from 1994 to 2000 and left in 2000 after passing his SSCE</p>
</div>

<div style="margin-top: 15px;opacity: 1">
    <p style="margin: 0 70px; font-size: 17px; line-height: 1.8em;">Academic Performance: <span style="border-bottom: 2px solid black;  padding: 10px 200px;">Average</span></p>
 </div>

 <div style="margin-top: 15px;opacity: 1">
    <p style="margin: 0 70px; font-size: 17px; line-height: 1.8em;">He offered the following Subjects:</p>
 </div>

 <div style="margin-top: -10px; margin: 0 70px; width:80%;">
    <p style=" font-size: 17px;line-height: 1.8em; "><span style="border-bottom: 2px solid black; padding-right: 150px;">English language, Mathematics, Biology, Chemistry, Physics, Agricultural Science, Geograhy, Economics, Civic Education</span></p>
 </div>

 <div style="margin-top: 15px;">
    <p style="margin: 0 70px; font-size: 17px; line-height: 1.8em;">Character: <span style="border-bottom: 2px solid black;  padding: 10px 220px;">Satisfactory</span></p>
 </div>
 <div style="margin-top: 15px;">
    <p style="margin: 0 70px; font-size: 17px; line-height: 1.8em;">Extra Corricular Activities: <span style="border-bottom: 2px solid black;  padding: 10px 180px;">Football</span></p>
 </div>
</div>
 <script>
    window.onload = function(){
        window.print();
    }
</script>
</body>
</html>

