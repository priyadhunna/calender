        <form name="newad" method="post" enctype="multipart/form-data"  action="uploader.php">
                <br/>
                <label for="file">Image 1:</label>
                <input type="file" name="file" id="file" />
                
                <label for="file">Image 2:</label>
                <input type="file" name="file2" id="file2" />

                <label for="file">Image 3:</label>
                <input type="file" name="file3" id="file3" />
                
                <label for="file">Image 4:</label>
                <input type="file" name="file4" id="file4" />
                <br/><br/>
                <input type="submit" class='upload-button' name="submit" value="Upload" />  
            </form>
        <br/><br/>
        
                <?php
        if($successfulUpload == 1){
            echo "Successfully Uploaded!";
        }else{
        }?>