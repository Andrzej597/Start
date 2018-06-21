<?php

/* @var $this yii\web\View */



$this->title = 'Smart Crypto Invest';
?>
<style>  option{color: #0A1327;}  option:hover{color: #fff; background: #0A1327;} .page-item.active .page-link {background: #0A1327;border-color:#0A1327;}.page-link{color: #0A1327;} .page-item.active .page-link:hover {background: #0A1327 ;border-color:#0A1327;color: #0A1327 ; }.page-link:focus{box-shadow: none;color: #0A1327 ;}</style>
<div id="content" style="padding-top: 100px;"><a name="content" href="#content"></a></div>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        <th>Name</th>
        <th>Position</th>
        <th>Office</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($users as $user ) {
        echo "<tr>";
//        echo "<th scope='row'>".$user->userid. "</th>";
        echo "<td>".$user->username. "</td>";
        echo "<td>".$user->email. "</td>";
        echo "<td>".$user->password. "</td>";
        echo "</tr>";
    }
    ?>
    <?php
    echo "


 
" ?>

    </tbody>
</table>