<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>I LOVE YOU CANDICE!</title>
        <style>
            body{
                background-color: #F0EBE6;
                margin: 0px;
            }
            
            header {
                font-family: sans-serif;
                font-size: 20pt;
                height: auto;
                color: #fff;
                position: relative;
                top: 0;
                left: 0;
                width: 100%;
                display: inline-block;
                padding: 20px 100px;
                font-weight: 600;
                box-shadow: 0px 5px 10px #888888;
            }
            
            main{
                padding: 20px 100px;
                
            }
            
            #mainMessage {
                width: 700px;
                font-family: sans-serif;
                font-size: 14pt;
                color: #000;
            } 
            
            h2{
                font-family: sans-serif;
                color: #339933;
            }
            h1 {
                color: #000;
                font-family: sans-serif;
            }
            
            p   {
                padding-left: 30px;
            }
            
            i   {
                color: darkgreen;
            }
            
            #sub-header{
                width: 100%;
                margin: 0;
                box-shadow: 0px 5px 10px #666666;
                height: 75px;
                padding: 25px 100px;
            }
        </style>
    </head>
    <body>
        <header>
            I LOVE YOU CANDICE x INFINITY!!!
        </header>
        <div id="sub-header">
        <h1>
        <?php
        date_default_timezone_set('America/Denver');
        $fullDate = date("M d, Y");
        echo "Today's Date is: " . $fullDate;
        ?>
        </h1>
        </div>
    <main>
        <br>
        <div id ='mainMessage'>
        <?php
        $day = date('d');
        $date = date("m") . "-$day";
switch ($date){
    
//case '':
//    $out .= "<i><b>May 10th 2014</b></i><br><p></p><br><br>";
default;
case '05-23':
    $out .= "<i><b>May 23rd 2014</b></i><br><p>It's the day!!!!! YAY!!  Today you will receive your own endowments!  I think that is enough said... I can't wait!!!  Challenge of the day: Give me a hug and kiss in the celestial room :)</p><br><br>";
    
case '05-22':
    $out .= "<i><b>May 22nd 2014</b></i><br><p>It's your last day not being endowed.  Weird huh!  I am so excited for you!  You are going to love the temple!  You want a place of peace and quiet... well now you will have it. :)  I love you more than words can say.  Have a great day!  I cannot wait to see you later! Good luck at work today. Challenge of the day: DONT SMILE AT ALL!  haha.  That would be horrible!  Besides, I love your smile :).</p><br><br>";
    
case '05-21':
    $out .= "<i><b>May 21st 2014</b></i><br><p>Sorry, I missed today :( I thought that I had it all caught up.  But now you can read tomorrow's :)...  I Love You!</p><br><br>";
    
case '5-20':
    $out .= "<i><b>May 20th 2014</b></i><br><p>Thank you for you strong determination to live the standards of the gospel.  I love you more than I can say.  I appreciate your testimony of the gospel, and of the atonement.  When I am with you, I always want to be better.  You know how people said that marriage will be 'hard'... well, I just want you to know that when we have those trials and it is 'hard,' I could not, go through those trials with anybody but YOU by my side.  I ONLY want to experience those trials with YOU Candice Franzen! :)  I LOVE YOU!  Challenge of the day: Go on a run with me :)</p><br><br>";

case '05-19':
    $out .= "<i><b>May 19th 2014</b></i><br><p>Thank you for suprising me this morning with a 'hug'... although, I am extremely happy that I was able to get a kiss as well! :)  I love you and I cannot wait to have our family home evening tonight! :)  Challenge of the day:  When you think of something negative, try to think of two things positive.</p><br><br>";   
    
case '05-18':
     $out .= "<i><b>May 18th 2014</b></i><br><p>This morning (Tuesday) I woke up to a text from you asking me to open the door, but I was still sleeping :/.  I wish I was awake so that I could have greeted you and gotten my kiss. :(  Thanks.  It's the thought that counts.  :D  Challenge of the day: Be at least 10 minutes early to church. I like it when we are early.  It is a good time to people watch. :D haha.</p><br><br>";

    
case '05-17':
    $out .= "<i><b>May 17th 2014</b></i><br><p>Good Morning... Yay! I get to be with you today!  We should do something fun. :)  I love you! Challenge of the day: Get a picture of you with a dog.</p><br><br>";
    
case '05-16':
    $out .= "<i><b>May 16th 2014</b></i><br><p>One wee until your endowments! YAY!!!!!! Challenge of the day: will you go to the temple with me tomorrow? Your challenge is to text me 'yes, i will go' or 'no :(' :)</p><br><br>";
    
case '05-15':
    $out .= "<i><b>May 15th 2014</b></i><br><p>Thank you for your high standards and desire to live the gospel.  I probably say this a lot, but it is something that I never get tired of and something that I admire about you.  Challenge of the day: Do my homework! haha. Just kidding.</p><br><br>";    
    
case '05-14':
    $out .= "<i><b>May 14th 2014</b></i><br><p>Enjoy your interview today with Madison.  I hope that it goes well!  You're in my prayers everyday.  :D  I love you!  Challenge of the day: pray for somebody you don't normally pray for.</p><br><br>";
    
case '05-13':
    $out .= "<i><b>May 13th 2014</b></i><br><p>I loved your text yesterday in the moring!  So you know, you always have 'dibs' on me, no matter what else is going on :).  I ALWAYS have 'dibs' on you too! :) haha.  I love you!  have a great day! Challenge of the day: Learn something about marriage. :D  Then share it with me. (I am doing this too).</p><br><br>";
  
case '05-12':
    $out .= "<i><b>May 12th 2014</b></i><br><p>You are the most beautiful woman I know.  I could sit staring at you the entire day and never get tired of it.  The best part is that you are not only beautiful on the outside, but you're magnificently beautiful on the inside as well.  I am so, so, so, so, so attracted to you!  More and more each day.  I love you with all my heart! Challenge of the day: write a scripture reference on a sticky note or piece paper and leave it where your roomates will see it.</p><br><br>";     
    
case '05-11':
    $out .= "<i><b>May 11th 2014</b></i><br><p>I get to go to church with you today! yay!  Stop reading this thing, and get ready so I can see you! :) haha.  Challenge for the day: Learn something more about the temple.</p><br><br>"; 
    
case '05-10':
    $out .= "<i><b>May 10th 2014</b></i><br><p>I love your smile and laugh so much.  I never thought that I would meet somebody like you in my life.  You are more than I had ever hoped for in a wife.  Thank you for being you.  I'll try to be more 'concrete' with writing on this website :).  hahahahaha.  I can't wait to see you tonight! Challenge for the day: Send me a random text :) haha, I love those :).</p><br><br>"; 
    
case '05-09':
    $out .= "<i><b>May 9th 2014</b></i><br><p>I am sorry that I didn't do as good at keeping this up to date as I wanted to.  Things got busy with school, and I just didn't have time.  But I figure this should be just as important as my journal, right!?  After all, who can say I was too busy to write a letter to my wife? lol.  I love you with all my heart!  Have a great day! Challenge for the day: Do something nice for your roomates.</p><br><br>"; 
    
case '05-08':
    $out .= "<i><b>May 8th 2014</b></i><br><p>Candice, I bet you thought it was going to be the second coming before I wrote on here again... lol. I just want to say thank you for everything that you have done for me. I know you may be thinking that you haven't done much, but you have.  I look forward to getting to see you everyday!  I get off of school, and I try to power through my homework so that I can have time with you.  I cannot wait until I can be married to you for all of time and eternity!  Have a great day!!! Challenge for the day: give somebody a compliment.</p><br><br>"; 
    
case '03-28':
    $out .= "<i><b>March 28th 2014</b></i><br><p>If I haven't typed anything yet, I am sorry... I will get to it soon.  I LOVE YOU!</p><br><br>"; 
    
case '03-27':
    $out .= "<i><b>March 27th 2014</b></i><br><p>I am so glad to have you up here in Rexburg!  It has been amazing!  This last weekend was not very productive to me when it came to homework; however, I loved every minute that I got to spend with you!  Thank you for your desire to share your life with me.  I love that we already act like we are married.  It makes me so happy.  I just cannot wait until we dont have to split ways in the evening.  That will be amazing!</p><br><br>"; 
    
case '03-26':
    $out .= "<i><b>March 26th 2014</b></i><br><p>Thank you for giving me the blessing of giving you a blessing today(sunday).  It meant so much to me.  I love giving blessings because of the spirit that I feel when I do so.  Yet, that spirit is always much stronger with you when I am giving you a blessing.  I just want to say that The Lord is mindful of our situation.  And will hasten the time that it may be as the blink of an eye.</p><br><br>"; 
    
case '03-25':
    $out .= "<i><b>March 25th 2014</b></i><br><p>It feels like I just finished writing these and getting caught up, but it is time to write more for another week again.  :/  Time is going by so fast!  Candice I love you with all my heart.  I respect you and honor you.  I cannot wait to have you as my 'wife'  :).</p><br><br>"; 
    
case '03-24':
    $out .= "<i><b>March 24th 2014</b></i><br><p>I just fell asleep while trying to think of something to write here. :/  go figure... haha.  I love you!  I am going to bed.  Just know that you are beautiful!  And that I cannot wait until you get to say 'yes' for time final time that counts :).</p><br><br>"; 
    
case '03-23':
    $out .= "<i><b>March 23rd 2014</b></i><br><p>This list is getting really long! It is fun to look back at all of the messages I have written to you! :)  It brings back great memories.  I cannot wait until we have several years behind us that will allow us to reminisce on our past. And anxiously anticipate our future.  Tonight (sunday-- last sunday) when you walked into the room with a pillow stuffed beneath your shirt, I couldn't help but laugh, yet at the same time, I am excited for when that time does come. :)</p><br><br>"; 
    
case '03-22':
    $out .= "<i><b>March 22nd 2014</b></i><br><p>I spy something brown... 'a tree'... haha.  Yeah, sorry thats really not that funny, I am just tired writing this...  Its just passed midnight, and I need to go to bed.  But, I needed to write something here for you first.  Just wanted to say that I LOVE YOU MORE THAN ANYTHING OR ANYBODY ELSE ON THIS PLANET.  Will that be adequate for a message today?  It's gunna have to be, because I am not writing anything else. lol</p><br><br>"; 
    
case '03-21':
    $out .= "<i><b>March 21st 2014</b></i><br><p>I wish that I could work more and bring in some money for us.  I will try and use my time better so that I can get some time in for work each day.  But, I want you to know how grateful I am for your help and willingness to provide for this short while.  Please know that this will not be permanent, I will get a job and provide for our family.  I want to, I need to. :)  But seriously, thank you!</p><br><br>"; 
    
case '03-20':
    $out .= "<i><b>March 20th 2014</b></i><br><p>I admire you desire for things to be clean.  I hope that I am not too messy for you at times :/.  But, I love having a clean apartment, it invites the spirit, and I can feel the change in your apartment since you have been cleaning it (since the first day).  But, that may just be that my nose hairs are not being singed off anymore when I walk into the apartment due to a rotten something or other.  haha.</p><br><br>"; 
    
case '03-19':
    $out .= "<i><b>March 19th 2014</b></i><br><p>Thank you for introducing me to bird feed.  It tastes delicious!  hahahahahaha.... ok, maybe not.  But still... :P  Thank you for EVERYTHING you do for me.  I really cannot wait to be married to you.  P.S.  Dont EVER feel bad about dragging me along to an 'on call visit.'  I am more happy to go with you, in fact, I like going with you! :)</p><br><br>"; 
    
case '03-18':
    $out .= "<i><b>March 18th 2014</b></i><br><p>Sorry to always be attracting the cops.  Saturday was pretty fun though.  I never cease to be amazed at how much you place your trust in the Lord.  I was so proud of you with your desire to pray and ask for protection and that everything would be ok.  But, I feel that the moment that I felt the most proud that you are my fiance is when you gave thanks immediately following the event with the cop.  You remembered the Lord and wanted to say 'thank you,' not just take his blessing for granted.  I really admire that about you.  </p><br><br>"; 
    
case '03-17':
    $out .= "<i><b>March 17th 2014</b></i><br><p>Thank you for the amazing day yesterday!  It was fun getting to go to church with you and spend the entire day with you.  I am proud of you, even though you didn't get the IV in, it is ok.  I have faith that you will learn, but I am proud of you for your willingness to go out of your way and try.  Never give up!  You are too smart to give up!  Thomas Edison once said, 'many of life’s failures are [people] who did not realize how close they were to success when they gave up.'  I LOVE YOU!</p><br><br>";
    
case '03-16':
    $out .= "<i><b>March 16th 2014</b></i><br><p>Wahoo!  I am a week ahead on my writing of these things! :)  This one will be short.  Read: <a href='https://www.lds.org/scriptures/nt/1-jn/4.12?lang=eng#11' target='_blank'>John 4:12</a>, '...If we <b>love</b> one another, God dwelleth in <b>us</b>, and <b>his love</b> is perfected in <b>us</b>.' I LOVE YOU CANDICE!</p><br><br>"; 
    
case '03-15':
    $out .= "<i><b>March 15th 2014</b></i><br><p>Thank you for making me chicken pot pie last week.  It was really good. I love it when you scratch my back when I am working on homework.  I love it when you smile at me.  I love how I can talk to you about literally anything.  Seriously, you are so good to me.  I dont know what I ever did to deserve it.  I LOVE YOU.  And I really mean it when I say, that I am the lucky one. :D</p><br><br>"; 
    
case '03-14':
    $out .= "<i><b>March 14th 2014</b></i><br><p>BTW, anytime that you want to run off with me to go on a hike away from the group, I ACCEPT! haha.  I really enjoyed watching fireworks with you from the mountain top.  It will be nice when we get to climb to the top of the Mountain of the Lord and be sealed together for all eternity.</p><br><br>"; 
    
case '03-13':
    $out .= "<i><b>March 13th 2014</b></i><br><p>You are right, my immune system must be pretty good if I still didn't get sick this time around either! haha.  I am glad that you are feeling better and that you have your hearing back.  I loved seeing you playing with my neice and nephew.  You will be such a great mother when that time comes.</p><br><br>"; 

case '03-12':
    $out .= "<i><b>March 12th 2014</b></i><br><p>Sorry if reading these is getting boring :/... I just like having somewhere that I can write about how much I love you and guarantee that you will get to read it. :)  I really enjoyed spending this last Saturday doing everything with you!  It really did feel like we were married-- It will be so nice when we actually are :D.  Then, when we share an apartment, we can share eachother's 'milk juices' too! hahahaha</p><br><br>";
    
case '03-11':
    $out .= "<i><b>March 11th 2014</b></i><br><p>Bro. Lindsey was right, there are a lot of 'cute girls' up here, but none of them even come close to comparing to you.  You are BEAUTIFUL on the outside, and on the inside.  I'm glad 'you didn't say yes'... haha.</p><br><br>";
    
case '03-10':
    $out .= "<i><b>March 10th 2014</b></i><br><p>concrete, bird, second coming, under my bed, 'motherly figure', 'wait you guys are married?' (little kid at your house), 'sorry i'm a coward' (me... haha), 'So, how is the family ward?' (Bryce [your cousin]), cop encounters, FHE companion, the infirmiry... I am sure the list could go on, and on... haha.</p><br><br>";
    
case '03-09':
    $out .= "<i><b>March 9th 2014</b></i><br><p>Just last night (from the time that I am typing this), you mentioned that your wedding dress came in!  I seriously cannot wait to see you all dressed up in white in the temple (other than a baptism jump suit)... haha.</p><br><br>";
    
case '03-08':
    $out .= "<i><b>March 8th 2014</b></i><br><p>Sorry its short... NDIYAKUTHANDA KAKHULU!!!!  In other words, I love you a lot!  (or 'I love you so much!' haha).  Today marks a week that you have been here :) FYI.</p><br><br>";
    
case '03-07':
    $out .= "<i><b>March 7th 2014</b></i><br><p>I know that you felt like you were a slow runner, but you're not... :)  Just thought that you would like to know that.  I had a companion on my mission that was a slow runner!!  I could literally walk next to him while we ran in the morning.  haha.  Thanks for letting me come and run with you, I enjoyed it! :)</p><br><br>";

case '03-06':
    $out .= "<i><b>March 6th 2014</b></i><br><p>I am so grateful for how much you know about the gospel!  When we went to mission prep class on sunday, I loved having you as my companion! :)  Your knowledge of the gospel is so great that I often am learning from you, and from your questions.  It makes me wonder if I need to as more questions, because I feel like I have kind of become complacent, if you know what I mean.  Needless to say, I love how much you know and how much you want to know.  You inspire me to want to know even more.</p><br><br>";
    
case '03-05':
    $out .= "<i><b>March 5th 2014</b></i><br><p>It is kind of weird writing this while you are sitting next to me and scratching my back :)  haha.  It feels so good though!  I am so happy that you are up here in Rexburg!  You make me so happy!  I have not been this happy in such a long time!!!  I cannot wait to be married to you!</p><br><br>";
    
case '03-04':
    $out .= "<i><b>March 4th 2014</b></i><br><p>I am sorry that you didnt have a message yesterday. :(  I thought that I was all caught up!  I promise!  But, lets just say that I was distracted by a very beautiful person that came into town. :) haha. Well, just wanted to let you know that I will try to do better!  I love you!</p><br><br>";
    
case '03-02':
    $out .= "<i><b>March 2nd 2014</b></i><br><p>Thank you for loving me for who I am.  I am sorry that I can be so weird sometimes.  But, I am grateful that I can feel free to be myself when I am around you.  You always seem to be able to make me smile. :)  Haha, please dont throw me on the concrete; even grass or carpet would be better!  lol.  Although it might be the second coming before that happens :/  haha, I just used both in the same paragraph!!! :) <br> Don't ever stop smiling, its your smile that makes the world bright :)</p><br><br>";
    
case '03-01':
    $out .= "<i><b>March 1st 2014</b></i><br><p>Thank you for your support in everything we do.  I have never heard you say, 'thats stupid, or why are we doing that?' Rather, you have been supportive and kind, thank you.  It means a lot.  Seriously though, dont be affraid to ask why, or suggest things as well-- I will be willing to do them too.  I always want you to know that I love you, and support you in every way.  I will always be there for you.</p><br><hr><br>";
    
case '02-28':
    $out .= "<i><b>February 28th 2014</b></i><br><p>Candice! Thank you so much for your thoughts of affirmation.  I got an email from you today expressing how much you love me.  It made me smile so much!  I LOVE YOU TOO!  You said in that email, 'I cannot wait to kneel across the alter from you and be sealed for time and all eternity,' I just want you to know that I CANNOT WAIT FOR THAT TIME EITHER!  You are my sunshine! :)</p><br><br>";
    
case '02-27':
    $out .= "<i><b>February 27th 2014</b></i><br><p>I am so happy that you enjoy reading about the experiences that happened on my mission.  It is fun to know that I can share that part of my life with you-- probably more than I know about it.  haha (as you can already tell, I need to read those again. lol)  But I am glad that you are enjoying it. :)  Although you did laugh about my liking for christmas the other night! :)  lol, but its ok.  I love you!</p><br><br>";
    
case '02-26':
    $out .= "<i><b>February 26th 2014</b></i><br><p>I love that I get to skype you every night!  It is the best part of my day!  I am sorry that we had complications with your car.  I hope that it gets fixed soon, so that you can be up here!  I love you, and I cannot wait to be with you!  I think of you all the time!!!! :)</p><br><br>";    
    
case '02-25':
    $out .= "<i><b>February 25th 2014</b></i><br><p>I love your little messages of love to me!  I love getting the text messages from you with nothing on but 'I love you!!!'  They make me smile! :)  It is just nice to get the periodic reminder that you are thinking about me. :)</p><br><br>";
    
case '02-24':
    $out .= "<i><b>February 24th 2014</b></i></b><br><p>I love how much you know about the scriptures- for example, I got a letter from you (in my email), and in that letter you referred me to the scriptures.  I loved it!  I admire how knowlegeable you are about the doctrine of the church.  I am so happy that you will be the mother of our children, they will be so blessed to be raised by a mother who is so firm in the gospel and has such a strong faith in our savior Jesus Christ.  Never Stop.  You are amazing!</p><br><br>";

case '02-23':
    $out .= "<i><b>February 23rd 2014</b></i></b><br><p>I love all of your random notes of affection to me.  They mean so much!  I guess the reason that I am typing this message this time is because I just got an email from you today that literally made my day!!!  I LOVE YOU SO MUCH!  I keep all of them and read them periodically!  I have a folder in my 'OneNote' journal for messages from you.  I don't know why you treat me so well, honestly, I dont feel like I deserve it, but you make me feel like I am on top of the world.  THANK YOU!</p><br><br>";
    
case '02-22':
    $out .= "<i><b>February 22nd 2014</b></i></b><br><p>You should be up here in Rexburg by this point!!!  At least I hope so, If you are not then something must have gone seriously wrong! :(  I am happy that you found a job up here.  I can testify to you that God does answer prayers!  He cares and he is mindful of every prayer we say-- that is the only reason you go that job... WE were praying hard!<br>Speaking of prayers, I had an experience on my mission where I prayed in the morning that not only we would have courage to confront people on the streets about the gosple, but that people would have the courage to confront us as well.  IT WORKED!  Throughout the duration of that day, we were approached 5 TIMES with people asking who we are and what we do.<br>God answers prayers and he is mindful of us and our situations.</p><br><br>";
    
case '02-21':
    $out .= "<i><b>February 21st 2014</b></i></b><br><p>We are in a world of hurting... This is only the 8th one of these that I have written, yet I am running out of ideas.  I may have to start making them shorter. haha.  Anyways, I seriously cannot wait to see you in white!  I do not know how I got to be so lucky as to have YOU for my wife.  I am litterally the luckiest man in the world!  I cannot wait to grow old with you and create our own worlds.</p><br><br>";
    
case '02-20':
    $out .= "<i><b>February 20th 2014</b></i></b><br><p>I was serious about wanting to name our kids 'henrietta' and 'ralf.'  Ok, I dont know if I said 'ralf' before, but it was the weirdest guys name I could think of right now.  haha.  NEVER would I actually name them that-- after all I need them to like me. :D  I love YOUR NAME it is so beautiful, just thought that you should know. :)</p><br><br>";
    
case '02-19': 
    $out .= "<i><b>February 19th 2014</b></i></b><br><p>Thank you for sticking with me even after my 'problems.'  It means the world to me that you still love me.  I am so grateful for the Atonement of Jesus Christ and for the blessings that it allows for us to have in our life.  I am so happy that I get to spend the rest of my life and eternity with YOU by my side.</p><br><br>";
    
case '02-18': 
    $out .= "<i><b>February 18th 2014</b></i></b><br><p> I love how you are always mindful of the blessings of the gospel and how you are constantly trying to be the best that you can be.  I just thought that you should know that to me, you are perfect in every way.  You make me smile, and feel happy.  I seriously cannot wait until I can call you 'my wife' for reals. :)  Until then calling you 'my most amazing, beautiful, funny, spiritual, sweet, and spectacular fiance' will have to do. haha</p><br><br>";
    
case '02-17': 
    $number = pow(1000000,10); $out .= "<i><b>February 17th 2014</b></i></b><br><p> I just want to say 'I love you $number times!'(that is close to infinity... it actually said infinity at first, which was kind of funny, but I had to make the number smaller so that it would display. :)  I am so grateful for how caring you are of others... you seem to always care about how other people feel and show genuine interest even when what they have to say seems kind of boring.  I need to do better at that.</p><br><br>";
    
case '02-16': 
    $out .= "<i><b>February 16th 2014</b></i></b><br><p>I am so grateful for your example to me and your desire to follow the gospel in your life.  You are always trying to be a better person, and that makes me want to be better.  THANK YOU.  Don't ever stop.  You are amazing just the way you are.</p><br><br>";
    
case '02-15': 
    $out .= "<i><b>February 15th 2014</b></i></b><br><p> I love you so much! and I still miss you... haha.  I dont know how I am going to come up with enough to write something every day.  But I will figure it out! :) (after-all you got 54 things to write down when you wrote on the deck of cards. :)  So technically I only have to come up with 160 things.  I can do that, right!? haha.  I am going to cheat becuase of that and count that as all you get to read for today :).</p><br><br>";
    
case '02-14': 
    $out .= "<i><b>February 14th 2014</b></i><br><p> It's valentines day... I LOVE YOU! Thank you for all that you do for me!  I love you and I wish that I could have you up here with me!  You mean everything to me!  And most importantly, thank you for being willing to listen to me and my problems-- I am so grateful that you understand and that you love me for who I am NOW.  You are amazing!<br><br> There will be a new message like this each day from now until I decide to stop.. haha.  I am going to try and do this through the day we get married, but I cannot promise.  We will see how things go once you are up here. :)  But Enjoy them until I run out of energy to do this... haha.  Just check back daily for the new message :)</p>";
}
        
// CHECK FOR OUTPUT OR NOT...
        
        if(isset($out)){
          echo $out;
          echo "<p style='text-align: right;'><br><br>With All My Love,<br> Your Future Husband,<br>"
                  . "Bryce</p>";
        } 
        else {
          echo "sorry there was an error";
        }
        
        ?>
        
        </div>
    </main>
    </body>
</html>
