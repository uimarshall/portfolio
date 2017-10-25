
    <?php
$connection = mysqli_connect("localhost", "root", "", "contact");
if(!$connection){
    echo "please try again";
}else{

if($connection==true ){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];    
        $email = $_POST['email'];
        $house_address = $_POST['house_address'];
        $occupation = $_POST['occupation'];
        $next_of_kin= $_POST['next_of_kin'];
        $maiden_name = $_POST['maiden_name'];
        $phone_number = $_POST['phone_number'];
}
    
$sql="INSERT INTO banana_estate (firstname, lastname, email, house_address, occupation, next_of_kin, maiden_name, phone_number)
            VALUES ('$firstname', '$lastname', '$email', '$house_address', '$occupation' ,'$next_of_kin', '$maiden_name' ,'$phone_number')";


       if(mysqli_query($connection,$sql)){
        //redirect to anywhere
    echo "Registration successful!";
    }else{
                  echo "fail";
                  }
}


