function changeSelect(var1)
{
xhr = new XMLHttpRequest();

xhr.open('POST', 'testajax.php');
params="var="+var1;
xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhr.send(params);
xhr.onreadystatechange = function() {
 if(xhr.readyState == 4 && xhr.status == 200) {
   document.getElementById('reponse').innerHTML = xhr.responseText;
 }

};
};
