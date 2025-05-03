<?php
	/*
    	Requires files_name.php
    */
	function imageExists(){
    	$files = scandir(getImagesDirectory());
		
		$check = false;
		
		foreach($files as $file){
          if(str_contains($file, camera_image_name)){
            $check = true;
          }
        }
        
        return $check;
    }
    
	function getImagesDirectory()
	{
		$imagesPath = './camera_image';
		return $imagesPath;
	}
	
	function getImagePath()
	{
		$imagesPath = getImagesDirectory().'/'.camera_image_name;
		return $imagesPath;
	}
	
	function saveBase64Image($base64_encoded_string)
	{
        $name = camera_image_name;
		$files = scandir(getImagesDirectory());
				
		$decodedImage = base64_decode($base64_encoded_string); 		
		
		file_put_contents(getImagePath(), $decodedImage);
		return $name;
	}
?>