<html>
	<head>
		<title>contact page</title>
	</head>
	<body>	
<br><br>
<div class ="formm">
<form method="post" action="send_form_email.php">
<div class="row half">
    <div class="6u">
        <input name="name" placeholder="Name" type="text" class="text" />
		
    </div><br>
    <div class="6u">
        <input name="email" placeholder="Email" type="text" class="text" />
		
    </div><br>
</div>
<div class="row half">
    <div class="12u">
        <textarea name="message" placeholder="Message"></textarea>
		
    </div><br>
</div>
<div class="row half">
    <div class="12u">

<input type="submit" value="Send Message" name="submit_button" class="button button-icon icon icon-envelope">

    </div>
</form>
</div></div>
<div>

</div>
<style>
input[type=text], select {
    width  		 : 100%;
    padding      : 12px 20px;
    margin 		 : 8px 0;
    display		 : inline-block;
    border 		 : 1px solid #ccc;
    border-radius: 4px;
    box-sizing	 : border-box;
}
.formm{
    border-radius	: 5px;
    background-color: #f2f2f2;
    padding			: 20px;
	width			: 50%;
	margin-left		: 10px;
	border-size		: 5px;
	border-style	: solid;
	float:left;

}
input[type=submit] {
    width			: 20%;
    background-color: #4CAF50;
    color			: white;
    padding			: 14px 20px;
    margin			: 8px 0;
    border			: none;
    border-radius	: 4px;
    cursor			: pointer;
	
}

input[type=submit]:hover {
    background-color: #45a049;
}

textarea {
    width			: 100%;
    height			: 150px;
    padding			: 12px 20px;
    box-sizing		: border-box;
    border			: 2px solid #ccc;
    border-radius	: 4px;
    background-color: #f8f8f8;
    font-size		: 16px;
    resize			: none;
}
</style>
</body>
</html>
