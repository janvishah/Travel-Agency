var img = new Array(10); 
var start = null; 
var counter = 1; 
var delayTime = null;
	if(document.images) 
	{
		for(i = 1; i < 6; i++)
		{
			img[i] = new Image();
			img[i].src = "image/Home/pr" + i + ".jpg";
		}
	}

function getDelayTime(dlTime)
 {
   var temp = parseInt(dlTime);
   if(temp != NaN)
    delayTime = temp * 1000;
   else
    delayTime = 4000;
 }

function anim()
{
   counter++;
  document.images[0].src = img[counter].src;
   if(counter == 5)
    counter = 0; 
}

 function slide()
 {
   getDelayTime(5);
   with(document.form1)
   {
     start = setInterval("anim()", delayTime);         
   }
 }
