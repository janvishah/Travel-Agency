 var img = new Array(10); //array to hold the images
 var start = null; //start pointer
 var counter = 1; //counts the image sequences
 var delayTime = null; //user defined

 if(document.images) //pre-load all the images
 {
   for(i = 1; i < 6; i++)
   {
     img[i] = new Image();
     img[i].src = "image/Kashmir/pr" + i + ".jpg";
   }
 }
 //function for getting the user defined delay time

 function getDelayTime(dlTime)
 {
   var temp = parseInt(dlTime);
   if(temp != NaN)
    delayTime = temp * 1000;
   else
    delayTime = 4000;
 }

 //function for changing the images

 function anim()
 {
   counter++;
  document.images[0].src = img[counter].src;
   if(counter == 5)
    counter = 0; //sets the counter value to 0
 }

 //function for starting the slide show

 function slide()
 {
   getDelayTime(5);
   with(document.form1)
   {
     start = setInterval("anim()", delayTime);        
   }
 }
