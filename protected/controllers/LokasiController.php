<?php

class LokasiController extends Controller
{
	public $modelSearch;
	public $modelJaringan;
	public $modelProv;
	
	public function actionIndex()
	{
		$data = Page::model()->getPage('layanan');
		$this->menuTitle = Page::model()->getTitle($data['title'],$data['id'],$data['parent']);
		$this->menu = Lokasi::model()->getSub();
		$this->modelSearch = new SearchForm;
		$kota = Lokasi::model()->getLokasi($_GET['kota']);
		
		$model = new Lokasi;
		$this->render('index', array(
			'model'=>$model,
			'data'=>$data,
			'jaringan'=>$jaringan,
			'kota'=>$kota,
		));
	}

}