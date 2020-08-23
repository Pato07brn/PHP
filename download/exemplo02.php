<form method="post" enctype="multipart/form-data">
	<input type="text" name="url">insira uma url de img para download
	<input type="submit">
</form>



<?php 

class Download{
	
	public $link;
	
	
	public function getLink(){
		return $this->link;
	}

	public function setLink($url){
		$this->link = $url;
	}

	public function downImg(){
		$url = $this->link;

		$content = file_get_contents($url);

		$parse = parse_url($url);

		$basename = basename($parse['path']);

		$file = fopen($basename, "w+");

		fwrite($file, $content);

		fclose($file);
	}

}




if ($_SERVER['REQUEST_METHOD'] === "POST"){
	$url = $_POST['url'];

	$site = new Download();

	$site->setLink($url);

	echo "vê no diretório";
}

 ?>
