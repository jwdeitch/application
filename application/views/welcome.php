<extends:layouts.simple title="Welcome to Spiral Framework!"/>
<use namespace="spiral"/>

<block:content>
    <img src="@{basePath}resources/images/spiral.svg" width="120px"/>

    <spiral:markdown>
        Welcome To Spiral Application
        =======
    </spiral:markdown>

    <a href="${git|https://github.com/spiral-php/application}">GitHub</a>
    | <a href="https://github.com/spiral-php/documentation">Documentation (unfinished)</a>

    <br/><br/>

    <span style="font-size: 12px;">
        This view file located in
        <a href="${git}/blob/master/application/views/welcome.php">application/views/welcome.php</a>
        and called by Controllers\HomeController.
    </span>

</block:content>