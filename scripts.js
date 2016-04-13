/* Jonathan Sekela
 * 4/13/2016
 * csc2210 Spring 2016
 * ~/csc2210/practice/counterProject/scripts.js
 */

function incCount()
{
  $.post("phpcounter.php")
}

function getCount()
{
  count=post("getCount.php");
  $("#ctMsg").html("Count: "+count);
}
