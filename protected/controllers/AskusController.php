<?php

class AskusController extends Controller
{
	public function actions()
	{
		return array(
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
		);
	}	

	public function actionIndex()
	{
		$this->layout='//layouts/content';
		$data = Page::model()->getPage('ask-us', $this->languageID);
		
		$page = $_GET['page'];
		$konten = Askus::model()->getNewAskus(2, $page);
		$pagination = Askus::model()->getNewAskusPagination($page);
		// inisialisasi model
		$model =  new ContactForm;
		$model->scenario = 'ask';
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];

			if($model->validate())
			{

				// config email
				$messaged = $this->renderPartial('//mail/ask',array(
					'model'=>$model,
				),TRUE);
				$config = array(
					'to'=>$this->setting['askus_email'],
					'subject'=>'Pertanyaan dari '.$model->email,
					'message'=>$messaged,
					'pesan'=>'',
				);
				// kirim email
				Common::mail($config);

				$config = array(
					'to'=>$model->email,
					'subject'=>'You have sent a message to bethesda',
					'message'=>$messaged,
					'pesan'=>'We will respond to your message shortly',
				);
				// kirim email
				Common::mail($config);

				Yii::app()->user->setFlash('success','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();

			}

		}


		$this->render('index', array(
			'model'=>$model,
			'data'=>$data,
			'konten'=>$konten,
			'pagination'=>$pagination,
		));
	}
	
	public function actionView($id)
	{
		$this->layout='//layouts/content';
		$data = Page::model()->getPage('ask-us', $this->languageID);
		$menu = Askus::model()->getSub(2);
		$konten = Askus::model()->getAskusById($id,2);

		// inisialisasi model
		$model =  new ContactForm;
		$model->scenario = 'ask';
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];

			if($model->validate())
			{

				// config email
				$messaged = $this->renderPartial('//mail/ask',array(
					'model'=>$model,
				),TRUE);
				$config = array(
					'to'=>$model->email,
					'subject'=>'Pertanyaan dari '.$model->email,
					'message'=>$messaged,
				);
				// kirim email
				Common::mail($config);

				Yii::app()->user->setFlash('success','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();

			}

		}

		$this->render('view', array(
			'data'=>$data,
			'menu'=>$menu,
			'konten'=>$konten,
			'model'=>$model,
		));
	}

}