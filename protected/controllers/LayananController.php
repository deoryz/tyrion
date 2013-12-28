<?php

class LayananController extends Controller
{

	public function actionIndex()
	{
		$this->layout='//layouts/content';
		$data = Page::model()->getPage('our-services', $this->languageID);
		$menu = Layanan::model()->getSub($this->languageID);
		$layanan = Layanan::model()->getLayanan($this->languageID);

		$this->render('index', array(
			'data'=>$data,
			'menu'=>$menu,
			'layanan'=>$layanan,
		));
	}
	public function actionView($id)
	{
		$this->layout='//layouts/content';
		$data = Page::model()->getPage('our-services', $this->languageID);
		$menu = Layanan::model()->getSub($this->languageID);
		$layanan = Layanan::model()->getLayananById($id, $this->languageID);

		$this->render('view', array(
			'data'=>$data,
			'menu'=>$menu,
			'layanan'=>$layanan,
		));
	}
}