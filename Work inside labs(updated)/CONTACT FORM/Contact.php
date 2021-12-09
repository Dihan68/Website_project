<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Contact Us</title>
<style type="text/css">
    body{
background-color:#f1f1f1;
    }
        .form-control {
    width:100px;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    color:#555;
    background-color:#fff;
    border: 1px solid #ccc;
    border-radius: 4px;

}

.btn-primary{
    padding: 6px 12px;
    font-size:14px;
    font-weight: 400;
    cursor: pointer;
    border: 1px solid transparent;
    border-radius: 4px;
    background-color: #337ab7;
    color: #fff;
}

text.area.form-control{
    height: auto;

}
.container
{
    margin-left: 30%;
    width: 400px;
    margin-top: 6%;
    background-color: #fff;
    padding:30px;
    padding-right: 60px;
    box-shadow: 10px 5px 5px grey;

}
label {
    font-size: 18px;

}
.success
{
margin: 5px auto;
border-radius:5px;
border: 3px solid #fff;
background:#33CC00;
color: #fff;
font-size: 20px;
padding:10px;
box-shadow: 10px 5px 5px grey;
}
    </style>
  
</head>
<body>
<div class= "container">
        <?php
        if(isset($_POST['submit_form']))
            {
           
                $name= $_POST['name'];
                $email= $_POST['email']
                $msg= $_POST['msg'];
                $phone= $_POST['phone'];
                    }            
        ?>
<form action= "" method="POST">
    <label> Name :-</label>    
        <input type= "text" name="name" class="form-control" requried>

        <label>Email :-</label>
        <input type= "email" name="email" class="form-control" requried>

        <label> Phone Number :-</label>
        <input type= "number" name="phone" class="form-control" requried>

        <label> Message :-</label>
        <textarea name= "msg" cols="10" rows="5" class="form-control" required></textarea>
        <input type= "submit" name="submit_form"  value="send" class="btn-primary">
</form>
</body>
</head>