<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css?family=Varela+Round');
body{
    background: black;
}
b{
    font-size: 35px;
    color: white;
}
.dashed {
  background-image: linear-gradient(to right, black 10%, white 90%);
  background-position: 0 1.04em;
  background-repeat: repeat-x;
  background-size: 24px 3px;
}
.header-logo {
    position: absolute;
    top: -41px;
    left: 1166px;
    height: 150px;
}
.main {
    margin: 0 auto;
    display: block;
    height: 100%;
    margin-top: 60px;
}
.mainInner{
    display: table;
    height: 100%;
    width: 100%;
    text-align: center;
}
.mainInner div{
    display:table-cell;
    vertical-align: middle;
    font-size: 3em;
    font-weight: bold;
    letter-spacing: 1.25px;
}
#sidebarMenu {
    height: 100%;
    top: -14px;
    position: fixed;
    left: 0;
    width: 180px;
    margin-top: 60px;
    transform: translateX(-250px);
    transition: transform 250ms ease-in-out;
    background: black;
}
.sidebarMenuInner{
    margin:0;
    padding:0;
    border-top: 1px solid rgba(255, 255, 255, 0.10);
}
.sidebarMenuInner li{
    list-style: none;
    color: #fff;
    text-transform: uppercase;
    font-weight: bold;
    padding: 20px;
    cursor: pointer;
    border-bottom: 1px solid rgba(255, 255, 255, 0.10);
}
.sidebarMenuInner li span{
    display: block;
    font-size: 14px;
    color: rgba(255, 255, 255, 0.50);
}
.sidebarMenuInner li a{
    color: #fff;
    text-transform: uppercase;
    font-weight: bold;
    cursor: pointer;
    text-decoration: none;
}
input[type="checkbox"]:checked ~ #sidebarMenu {
    transform: translateX(0);
}

input[type=checkbox] {
    transition: all 0.3s;
    box-sizing: border-box;
    display: none;
}
.sidebarIconToggle {
    transition: all 0.3s;
    box-sizing: border-box;
    cursor: pointer;
    position: absolute;
    z-index: 99;
    height: 100%;
    width: 100%;
    top: 22px;
    left: 15px;
    height: 22px;
    width: 22px;
}
.spinner {
    transition: all 0.3s;
    box-sizing: border-box;
    position: absolute;
    height: 3px;
    width: 100%;
    background-color: #fff;
}
.horizontal {
    transition: all 0.3s;
    box-sizing: border-box;
    position: relative;
    float: left;
    margin-top: 3px;
}
.diagonal.part-1 {
    position: relative;
    transition: all 0.3s;
    box-sizing: border-box;
    float: left;
}
.diagonal.part-2 {
    transition: all 0.3s;
    box-sizing: border-box;
    position: relative;
    float: left;
    margin-top: 3px;
}
input[type=checkbox]:checked ~ .sidebarIconToggle > .horizontal {
    transition: all 0.3s;
    box-sizing: border-box;
    opacity: 0;
}
input[type=checkbox]:checked ~ .sidebarIconToggle > .diagonal.part-1 {
    transition: all 0.3s;
    box-sizing: border-box;
    transform: rotate(135deg);
    margin-top: 8px;
}
input[type=checkbox]:checked ~ .sidebarIconToggle > .diagonal.part-2 {
    transition: all 0.3s;
    box-sizing: border-box;
    transform: rotate(-135deg);
    margin-top: -9px;
}
@media only screen and (max-width: 600px) {
  body {
    background-color: lightblue;
  }
}
</style>
<body>
    <div class="header">
    <center>
        <b class="dashed">Indie Vibes Admin</b>
    </center>
    <div class="pic"><a href="../page/index.php"><img src="../img/logo.png" alt="Iv Logo" class="header-logo"></a></div>
</div>
  <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
  <label for="openSidebarMenu" class="sidebarIconToggle">
    <div class="spinner diagonal part-1"></div>
    <div class="spinner horizontal"></div>
    <div class="spinner diagonal part-2"></div>
  </label>
  <div id="sidebarMenu">
    <ul class="sidebarMenuInner">
      <li><a href="../admin/userdetails.php" target="_blank">User Details</a></li>
      <li><a href="../admin/album.php" target="_blank">Album Details</a></li>
      <li><a href="../admin/uploadmusic.php" target="_blank">Music Details</a></li>
      <li><a href="../admin/feedback.php" target="_blank">Feedback Management</a></li>
      <li><a href="../admin/../page/index.php" target="_blank">Logout</a></li>
    </ul>
  </div>
</body>
</html>