<?php

    //File System
    
    //using this function we can read through all of the current directories and their contents
   function readDirectory(){
        $path = "./";
        if(is_dir($path))
        {
            $dir_handle = opendir($path);
            while( ($dirName = readdir($dir_handle) ) !== false )
            {
                if( is_dir($dirName))
                {
                    echo "directory: " . $dirName ."<br>";
                    if($dirName == "test")
                    {
                        $sub_dir_handle = opendir($dirName);
                        while(($sub_dir = readdir($sub_dir_handle)) !== false)
                        {
                            echo "--> --> contents = $sub_dir <br>";
                        }
                        closedir($sub_dir_handle);
                    }
                }
                elseif( is_file ($dirName))
                {
                    echo "file: " . $dirName . "<br>";
                }
            }
            closedir($dir_handle);
        }
        else
        {
          echo "not a directory";
        }
    }
   
        //making a directory object
        // $dir_obj = dir("./");
        // if($dir_obj)
        // {
        //     while( ( $entry = $dir_obj->read() ) !== false )
        //     {
        //     if(is_dir($entry))
        //     {
        //         echo "is a directory: ";
        //     }
        //     elseif(is_file($entry))
        //     {
        //         echo "is file: ";
        //     }
        //     echo $entry . "<br>";
        
        //     }
        // //close directory object
        // $dir_obj -> close();
        // }
    
    
    // //using fread($fp);
    // if(file_exists($path)){
    //     //r is for read
    //     //fp stands for file pointer
        
    //     $fp = fopen($path, "r");
    //     if($fp)
    //     {
    //         $header = null;
    //         $body = null;
            
    //         //read the first 9 bytes of data
    //         $header = fread($fp, 9);
    //         fseek($fp , 2 , SEEK_CUR);
    //         $body = fread($fp , filesize($path));
    //          echo $header . "<br>";
    //          echo "----<br>";
    //          echo $body;
            
    //         //close the file
    //         fclose($fp);
    //     }
    // }
    
    
    // //using fgets($fp);
    // if(file_exists($path))
    // {
        
    //     $fp = fopen($path , "r");
        
    //     if($fp)
    //     {
    //         while(!feof($fp))
    //         {
    //             $line = fgets($fp);
    //             echo trim($line) . "<br>";
    //         }
    //         fclose($fp);
    //     }
    // }
    
    //finding the end of a file
    // //fgetc($fp);
    // //feof($fp);
    
    // if(file_exists($path))
    // {
    //  $fp = fopen ($path , "r");
     
    //  if($fp)
    //  {
    //      //while file is not end of file
    //      while(!feof($fp))
    //      {
    //          //check for last char in the file
    //         $char = fgetc($fp);
    //         //last char of a file is normally '\n'
    //         if($char == "\n")
    //         {
    //             echo "<br>";
    //         }
    //         else
    //         {
    //             echo $char;
    //         }
    //      }
    //      //close file
    //      fclose($fp);
    //  }
    // }
    
    // if(file_exists($path))
    // {
    //     //open file place pointer at file without truncating (deleting)
    //     $fp = fopen($path, "c");
        
    //     if($fp)
    //     {
    //         //10 bytes in the file
    //         //123456789*
    //         //should look like 1234z6789
            
    //         //move cursor 4 bytes forward
    //         fseek($fp, -7, SEEK_END);
            
    //         fwrite($fp, "t");
            
    //         fclose($fp);
    //         echo "updated at: " . date('H:i:s');
    //     }
        
    // }
    
    
    // //appending data to a file using append or the "a" mode using fopen
    // if(file_exists($path))
    // {
    //     //used for appending
    //     $fp = fopen($path, "a");
        
    //     if($fp)
    //     {
    //         fwrite($fp, "This is the second line of text\n");
    //         fwrite($fp, "This is the third line of text\n");
    //         fclose($fp);
    //         echo "this has saved new data correctly " . date("H:i:s");
    //     }
        
    // }
    
    // //fopen and using fwrite to write to the file using the mode of w which truncates (erases the file and writes at the top)
    // if(file_exists($path))
    // {
    //     $fp = fopen($path, "w");
        
    //     if($fp)
    //     {
    //         echo "file pointer is okay, let's write to the file<br>";
    //         $data = "this is some data\n";
    //         $new_line = "this is then on a new line\n";
    //         $third_line = "this is on the third line\n";
            
    //         //write string data to a file
    //         fwrite($fp, $data);
    //         fwrite($fp, $new_line);
    //         fwrite($fp, $third_line);
            
    //         //close handle
    //         fclose($fp);
            
    //         echo "the file has been writen to and we have closed the file pointer";
    //     }
    // }
    
    // create empty file using fopen if the file does not exist and using w to truncate the file
    // and make the pointer go to the top of the file and clear out all previous data
    // if(file_exists($path))
    // {
    //     //allows for write to the file and open the file and set file pointer to top of file
    //     //w stands for write
    //     $handle = fopen( $path, "w");  
    //     //only check for fclose when we check for a file handle first
    //     if($handle)
    //     {
    //         //good practice to close a handle after opening it
    //         fclose($handle);
    //         if(file_exists($path))
    //         {
    //             echo "the file now exists<br>";
    //         }
    //     }
        
    // }else
    // {
    //     echo "the file already exists<br>";
    // }
    
    
    
    // using touch we can create a file
    // if(is_dir ($cwd . "test")){
    //     echo "yes test is a directory<br>";
        
    //     chdir($cwd. "test");
    //     echo "we are now in dir of: " . getcwd()."<br>";
    //     //check if the example.txt exists
    //     if(!file_exists("example.txt")){
    //         touch("example.txt");
    //     }
        
    //     if(file_exists("example.txt")){
    //         echo "yes now the file exists...";
    //     }
    // }
    
    
    
    
    //RENAMING DIRECTORY
    function renameDir($currentDir, $currentName, $newName){
        $cwd = getcwd();
        $currentDir = $cwd;
        $newName = $new_path;
        
        //check for not being the current directory
        if(!is_dir($currentName))
        {
            mkdir($currentName);
        }
        //RENAME THE DIRECTORY
        if(is_dir($currentName) && !is_dir($newName))
        {
            echo "this is the new path: $newName <br>";
            echo "this is the path: $currentName <br>";
            rename($currentName , $newName);
        }
        if(is_dir($newName) && !is_dir($currentName))
        {
            echo "the renaming was sucessful";
        }
    }
   
    
    //Creating and removing directories
    //creates the new directory
    function createDir(){
        $cwd = getcwd();
        $userInput = $dir;
        if(!is_dir($cwd . "/" . $dir)){
            echo "we will create the directory <br>";
            mkdir($cwd . "/" . $dir);
        }
    }
    
    
    function removeDir(){
        $currentDir = getcwd();
        //will delete the directory
        if(is_dir($new_path)){
            echo "this directory exists: $new_path<br>";
            echo "we will now remove the directory: $new_path<br>";
            rmdir($new_path);
        }
        if(!is_dir($new_path)){
            echo "the directory does not exist: $new_path <br>";
        }
    }
    
?>