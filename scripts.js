/* Jonathan Sekela
 * 4/13/2016
 * csc2210 Spring 2016
 * ~/csc2210/practice/counterProject/scripts.js
 */

setInterval(function() {
  count=$.post("getCount.php",function(count) {
    $("#ctMsg").html("Count: "+count);
  });
},
5000);

function incCount()
{
  $.post("phpcounter.php");
}
