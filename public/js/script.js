function getGreeting(){
   var curDateTime = new Date()
   var curHour = curDateTime.getHours()
   var greeting = "Good Night"
   if (curHour < 12  && curHour >= 0)
     greeting = "Good Morning"
   if (curHour >=12 && curHour < 15)
     greeting = "Good Afternoon"
   if (curHour >=15 && curHour < 18)
     greeting = "Good Evening"
   return greeting
}

var a=new Date()



