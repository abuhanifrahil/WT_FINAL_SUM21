<html>
<head></head>
<body>
<form>
<input id="uname" onkeyup=viewOutput(this)" type="text" placeholder="username"><br>
<span id="op"></span><br>
<input type ="password" placeholder="password"><br>
</form>
<button id="btn_g" onclick="viewGoogle()">Login with google</button>
<form id="g_form" style="display:none">
<input type ="text" placeholder="gmail"><br>
<input type ="password" placeholder="gmail password"><br>
</form> 

<button onclick="turnOn()">Turn on</button>
<img id="bulb" src="pic_bulboff.gif">
<button onclick="turnOff()">Turn off</button><br>
<span onmouseover="showinfo()" onmouseout="hideinfo()">Aiub</span>
<p id="info" style="display:none">American International University-Bangladesh</p>
<script src="myjs.js"></script>
</body>
</html>

