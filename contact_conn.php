
    <?php
$connection = mysqli_connect("localhost", "root", "", "contact");
if(!$connection){
    echo "please try again";
}else{

if($connection==true ){
  
        $name = $_POST["name"];
        $phone_number = $_POST["phone_number"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        
}

    $sql = "INSERT INTO contactus (name,email,phone_number,message) VALUES ('$name','$email','$phone_number','$message')";


    if(mysqli_query($connection,$sql)){
        //redirect to anywhere
        echo "Thanks for contacting us, your information has been received.";
    }else{
        echo 'failed! please try again';
    }
}
?>
