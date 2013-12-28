<?php

class ArtikelController extends Controller
{

	public function actionIndex()
	{
		$this->layout='//layouts/content';
		$data = Page::model()->getPage('news-articles', $this->languageID);
		$menu = Artikel::model()->getSub($this->languageID);
		$konten = Artikel::model()->getNewArtikel($_GET['year'],$_GET['month'],$this->languageID);

		$this->render('index', array(
			'data'=>$data,
			'menu'=>$menu,
			'konten'=>$konten,
		));
	}
	public function actionView($id)
	{
		$this->layout='//layouts/content';
		$data = Page::model()->getPage('news-articles', $this->languageID);
		$menu = Artikel::model()->getSub($this->languageID);
		$konten = Artikel::model()->getArtikelById($id,$this->languageID);

		$this->render('view', array(
			'data'=>$data,
			'menu'=>$menu,
			'konten'=>$konten,
		));
	}
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}