<?php

class JaringanController extends Controller
{
	public $modelSearch;
	public $modelJaringan;
	public $modelProv;
	
	public function actionIndex()
	{
		$data = Page::model()->getPage('layanan');
		$this->menuTitle = Page::model()->getTitle($data['title'],$data['id'],$data['parent']);
		$this->menu = Jaringan::model()->getSub();
		$this->modelSearch = new SearchForm;
		if ($_GET['kota']) {
			$kota = Jaringan::model()->getJaringan($_GET['kota']);
		} else {
			$kota = Jaringan::model()->getKota($_GET['state']);
		}
		
		$model = new Jaringan;
		$this->render('index', array(
			'model'=>$model,
			'data'=>$data,
			'jaringan'=>$jaringan,
			'kota'=>$kota,
		));
	}

}