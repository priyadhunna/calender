<?php
// Bucket Name
$bucket="BucketName";
if (!class_exists('s3'))require_once('s3.php');

    //AWS access info
    if (!defined('awsAccessKey')) define('awsAccessKey', 'AKIAITL6PZBAJUOCH33Q');
    if (!defined('awsSecretKey')) define('awsSecretKey', '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
');

    $s3 = new s3(awsAccessKey, awsSecretKey);
    $s3->putBucket($bucket, s3::helfisstoragebucket);
    if($s3->putObjectFile($tmp, $bucket ,"../../dist/img/user2-160x160.jpg",s3::helfisstoragebucket) )
    {
        $message = "s3 Upload Successful.";
        $s3file='http://'.$bucket.'.s3.amazonaws.com/'.$actual_image_name;
        echo "<img src='../../dist/img/user2-160x160.jpg'/>";
        echo 's3 File URL:\'. ../../dist/img/user2-160x160.jpg';
    }
    else{
        $message = "s3 Upload Fail.";
    }

?>