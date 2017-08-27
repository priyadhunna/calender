<?php
// Bucket Name
// $bucket="BucketName";
// if (!class_exists('s3'))require_once('s3.php');

//     //AWS access info
   //if (!defined('awsAccessKey')) define('awsAccessKey', 'AKIAITL6PZBAJUOCH33Q');
    //if (!defined('awsSecretKey')) define('awsSecretKey', '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
// ');

//     $s3 = new s3(awsAccessKey, awsSecretKey);
//     $s3->putBucket($bucket, s3::helfisstoragebucket);
//     if($s3->putObjectFile($tmp, $bucket ,"../../dist/img/user2-160x160.jpg",s3::helfisstoragebucket) )
//     {
//         $message = "s3 Upload Successful.";
//         $s3file='http://'.$bucket.'.s3.amazonaws.com/'.$actual_image_name;
//         echo "<img src='../../dist/img/user2-160x160.jpg'/>";
//         echo 's3 File URL:\'. ../../dist/img/user2-160x160.jpg';
//     }
//     else{
//         $message = "s3 Upload Fail.";
//     }

$name = $_FILES['photo']['name'];
$size = $_FILES['photo']['size'];
$tmp = $_FILES['photo']['tmp_name'];

//////Upload Process


    // Bucket Name
    $bucket = 'helfisstoragebucket';
    require_once('profile.php');

    //AWS access info
    $awsAccessKey = 'AKIAITL6PZBAJUOCH33Q';
    $awsSecretKey = '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';

    //instantiate the class
    $s3 = new S3($awsAccessKey, $awsSecretKey);

    $s3->putBucket($bucket, S3::ACL_PUBLIC_READ);


    //Rename image name. 
    $actual_image_name = time();

        //Upload to S3
    if($s3->putObjectFile($tmp, $bucket , $actual_image_name, S3::ACL_PUBLIC_READ) )
    {
        $image='http://'.$bucket.'.s3.amazonaws.com/'.$actual_image_name;
    }else{
        echo 'error uploading to S3 Amazon';
    }

?>