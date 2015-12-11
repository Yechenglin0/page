<meta charset="UTF-8">
<?php
  session_start();
  if($_SESSION['yzm_code']==$_POST['yzm_code']){
  echo "验证码填写正确<br>";
  }
  else{
      
       die("<script>alert('验证码错误！！');history.go(-1);</script>");
  }

  if($_FILES["file"]["error"]>0){
   		echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
  }
  else
  {
   	if((file_exists("jpg/" . $_FILES["file"]["name"]))
   		||(file_exists("png/" . $_FILES["file"]["name"]))
			||(file_exists("gif/" . $_FILES["file"]["name"])))
    {
       // die("<script>alert('文件已存在！！');history.go(-1);</script>");
    }
       	else
        {
        	 if($_FILES["file"]["type"]=="image/jpeg")
        			{
          			move_uploaded_file($_FILES["file"]["tmp_name"],"jpg/". $_FILES["file"]["name"]);
        				echo"<h1>已保存".$_FILES["file"]["name"]."至文件夹jpg<h1>";
                $img=imagecreatefromjpeg("jpg/". $_FILES["file"]["name"]);
          		}
          	else if($_FILES["file"]["type"]=="image/png")
          	{
            		move_uploaded_file($_FILES["file"]["tmp_name"],"png/". $_FILES["file"]["name"]);
        				echo"<h1>已保存".$_FILES["file"]["name"]."至文件夹png<h1>";
                $img=imagecreatefrompng("png/". $_FILES["file"]["name"]);
          	}
        		else if($_FILES["file"]["type"]=="image/gif")
      			{
        		    move_uploaded_file($_FILES["file"]["tmp_name"],"gif/". $_FILES["file"]["name"]);
           			echo"<h1>已保存".$_FILES["file"]["name"]."至文件夹gif<h1>";
                $img=imagecreatefromgif("gif/". $_FILES["file"]["name"]);
            }
    			  else
            {
        				echo "<h1>不是gif，png或jpg文件<h1>";
            }
		    }
	  }   
  $_SESSION['width']=imagesx($img);
  $_SESSION['height']=imagesy($img);
  $_SESSION['type']=$_FILES['file']['type'];
  $_SESSION['name']=$_FILES['file']['name'];
  echo "<img src='smallimage.php'/>";
  $arr=getimagesize($img);
  echo "$arr[3]";
?>



