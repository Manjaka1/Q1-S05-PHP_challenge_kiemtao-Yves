
<?php
require 'data/mock.php';
require 'data/users.php';
?>
<section>
    <h2>#kiemtao <a href="" class="addmessage"><span>+</span><em>ajouter&nbsp;un&nbsp;message</em></a></h2>
    <ul id="messages-list">
        <li class="message">
            <h3 title="'plantes, piano, heptagones">Slobodan</h3>
            <p> La vie est belle les amis </p>
            <h4 class="date">30/03/2022</h4>
        </li>
    </ul>
</section>
<section>
    <h2>#kiemtao <a href="" class="addmessage"><span>+</span><em>ajouter&nbsp;un&nbsp;message</em></a></h2>
    <ul id="messages-list">
        <li class="message">
            <h3 title="Passions : disputer, massage, rire">Rahary</h3>
            <p> On s'en fou !</p>
            <p> on va manger !</p>
            <h4 class="date"><?php
$DateAndTime = date('m-d-Y h:i:s a', time());  
echo " $DateAndTime.";
?></h4>
        </li>
    </ul>
</section>
<ul id="messages-list">
        <li class="message">
            <h3 title="Passions : télé, internet, danser">Annicette</h3>
            <p> C'est magnifique !</p>
            <p> La vie est belle les enfants !</p>
            <h4 class="date"><?php
$DateAndTime = date('m-d-Y h:i:s a', time());  
echo " $DateAndTime.";
?></h4>
        </li>

    <ul id="messages-list">
        <li class="message">
            <h3 title="Passions : voyager, tchater, chanter">Helda</h3>
            <p>On va sortir profiter ce temps ?!</p>
            <h4 class="date"><?php
$DateAndTime = date('m-d-Y h:i:s a', time());  
echo " $DateAndTime.";
?></h4>
        </li>
    </ul>
</section>