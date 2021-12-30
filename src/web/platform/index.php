<?php
require_once __DIR__ . '/../../db/example_database.php';
?>
<ul>
    <li>Fancy LMS</li>
    <li>Users</li>
    <li>Courses</li>
        <li class="sub" onclick="document.getElementById('frame').src='http://10.3.0.88/enrol/lti/proxy.php/1/cd77918a7343bfcafff302dd8cab7453/'">Games 101</li>
    <li>Settings</li>
</ul>
<iframe id="frame" style="width:1200px; height:600px" >

</iframe>
<style>
ul {
    position:absolute;
    left:0;
    top:0;
    width:200px;
    bottom:0;
    background-color:darkslategray;
    color: white;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 28px;
    font-weight: bold;
    margin:0;
    list-style-type: none;
}
li {
    padding-top: 26px;

}
li.sub {
    padding-left:26px;
    font-size: 24px;
}
iframe {
    position: absolute;
    margin-left: 250px;
}
</style>
