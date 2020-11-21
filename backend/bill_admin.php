<?php
include('h.php');

include('condb.php');

$user_id = $_SESSION['user_id'];
$id = $_REQUEST["id"];

// print_r($id);exit();

$query = "SELECT * FROM tb_admin WHERE id = '$user_id'" or die("Error :" . mysqli_error());
$admin = mysqli_query($con , $query);

while($admins = mysqli_fetch_array($admin)){
    $branch_name = $admins['branch_id'];
    $user_print = $admins['user'];
    $level_print = $admins['level'];
    $name_print = $admins['name'];
}


$query = "SELECT * FROM tb_admin WHERE id = '$id'" or die("Error :" . mysqli_error());
$admin = mysqli_query($con , $query);

while($admins = mysqli_fetch_array($admin)){
    $branch_name = $admins['branch_id'];
    $user = $admins['user'];
    $level = $admins['level'];
    $name = $admins['name'];
}

$query = "SELECT * FROM tb_branch WHERE branch_name = '$branch_name'" or die("Error :" . mysqli_error());
$branch = mysqli_query($con , $query);
while($branchs = mysqli_fetch_array($branch)){
    $branch_name = $branchs['branch_name'];
    $branch_eng = $branchs['branch_eng'];
    $address = $branchs['address'];
    $tel = $branchs['tel'];
}

$w = 210;
$h = 297;
$html = "
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset='utf-8' />
            <style>
            @import url('https://fonts.googleapis.com/css2?family=Prompt:wght@400&display=swap');
            *{
                font-family: 'Prompt', sans-serif;
            }
            @media print {
                #printPageButton {
                  display: none;
                }
              }
                @page { size: {$w}mm {$h}mm;margin:0 } /* output size */
                @media print { width: {$w}mm; height: {$h}mm;margin:0 } /* fix for Chrome */
                body { width: {$w}mm; height: {$h}mm;margin:0;padding-left:5mm;padding-right:5mm;padding-top:5mm } /* sheet size */    
               
            </style>  
        </head>
        <body onload='window.print()'>
    ";

    $html .= "
        <style type='text/css' scoped>
            table.GeneratedTable {
            width:100%;
            background-color:#FFFFFF;
            border-collapse:collapse;border-width:0px;
            border-color:#000000;
            border-style:solid;
            color:#000000;
            }

            table.GeneratedTable td, table.GeneratedTable th {
            border-width:0px;
            border-color:#000000;
            border-style:solid;
            padding:1px;
            }

            table.GeneratedTable thead {
            background-color:#FFFFFF;
            }

            .box {
            float: left;
            width: 350px;
            border-style: solid;
            border-width: 0.5px;
            padding: 10px  	  
            }

            table.box2 {
                width:100%;
                background-color:#FFFFFF;
                border-collapse:collapse;border-width:1px;
                border-color:#000000;
                border-style:solid;
                color:#000000;
            }

            table.box2 tr{
                tr { border: none; }
            }

            table.box2 th {
                border-width:1px;
                border-color:#000000;
                border-style:solid;
                padding:3px;
            }

            table.box2 td {
            padding: 5px;
            border-right: solid 1px #000000; 
            border-left: solid 1px #000000;
            }	
            

        </style>

        <!-- HTML Code -->
        <table class='GeneratedTable'>
        <tbody>
        <button id='printPageButton' onClick='window.print();'>Print</button>
        <tr>
            <td align='center' style='font-size: 22px'><strong>{$branch_name}</strong></td>
            <td rowspan='4' width='120px'></td>
        </tr>
        <tr>
            <td align='center'><strong>{$branch_eng}</strong></td>
        </tr>
        ";
        $html .="
            <tr><td style='font-size: 25px; padding-top: 5px' align='center'><strong>รายชื่อ</strong></td></tr>
        </tbody>
        </table>
        ";


        $html .= "
        <div style='margin-top:10px' align='left'>
            <div class='box' style='margin: 5px; margin-left:20px'>

        <table>
            <tr>
                <td width='100px'><strong>คนสั่งพิมพ์</strong></td>
            </tr>
            <tr>
                <td width='100px'><strong>Admin</strong></td>
                <td>{$user_print}</td>
            </tr>
            <tr>
                <td><strong>LEVEL</strong></td>
                <td>{$level_print}</td>
            </tr>
            <tr>
                <td><strong>Name</strong></td>
                <td>{$name_print}</td>
            </tr>					
        </table>

            </div>
            <div class='box' style='margin: 5px'>

        <table>
            <tr>
                <td width='100px'><strong>Branch Name</strong></td>
                <td>{$branch_name}</td>
            </tr>	
            <tr>
                <td><strong>Branch Eng</strong></td>
                <td>{$branch_eng}</td>
            </tr>
            <tr>
                <td><strong>Address</strong></td>
                <td>{$address}</td>
            </tr>
            <tr>
                <td><strong>Tel</strong></td>
                <td>{$tel}</td>
            </tr>	
                    
        </table>

            </div>	
        </div>
        ";
        
        $html .="
        <table class='box2' style='margin-top:20px'>
            <tr>
                <th width='200'><strong>user</strong></th>
                <th width='300'><strong>name</strong></th>
                <th><strong>level</strong></th>			
            </tr>
        ";
        $html .= "
        <tr>
            <td>{$user}</td>
            <td>{$name}</td>
            <td>{$level}</td>										
        </tr>
";


        echo $html;
?>