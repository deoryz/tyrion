<?php

class HomeController extends Controller
{
	public $modelSearch;
	public $modelJaringan;
	public $modelProv;
	
	public function actionIndex()
	{
		$this->layout='//tampilan/home';
		$this->modelSearch = new SearchForm;
		$this->modelJaringan = new Jaringan;
		
		$this->modelProv = new MasterState;
		
		$this->render('index', array(
		));
	}

	public function actionStatic()
	{
		$this->menuTitle = 'Profil';
		$this->menu = array(
			array('label'=>'Sejarah Perusahaan', 'url'=>array('/home/static', 'view'=>'sejarah')),
			array('label'=>'Visi, Misi & Nilai', 'url'=>array('/home/static', 'view'=>'visi')),
			array('label'=>'Struktur Organisasi', 'url'=>array('/home/static', 'view'=>'struktur')),
		);
		$this->modelSearch = new SearchForm;
		if ($_GET['view']) {
			$this->render('static/'.$_GET['view'], array(
			));
		}else{
			$this->render('static', array(
			));
		}
	}
	public function actionArtikel()
	{
		$this->menuTitle = 'Artikel';
		$this->menu = array(
			array('label'=>'Januari', 'url'=>array('/home/artikel', 'tahun'=>'2013', 'bulan'=>'11'), 'items'=>array(
				array('label'=>'Awas virus influenza di musim hujan makin ganas', 'url'=>array('/home/artikel', 'tahun'=>'2013', 'bulan'=>'11', 'no'=>'2')),
				array('label'=>'5 Cara membasmi serangga Tom Cat', 'url'=>array('/home/artikel', 'tahun'=>'2013', 'bulan'=>'11', 'no'=>'1')),
			)),
			array('label'=>'Desember', 'url'=>array('/home/artikel', 'tahun'=>'2012', 'bulan'=>'12')),
			array('label'=>'November', 'url'=>array('/home/artikel', 'tahun'=>'2012', 'bulan'=>'11')),
		);
		
		$this->layout='//tampilan/artikel';
		$this->modelSearch = new SearchForm;
		
		$this->render('artikel', array(
		));
	}
	public function actionLokasi()
	{
		$this->menuTitle = 'Lokasi Kami';
		$this->menu = array(
			array('label'=>'Jakarta', 'url'=>array('/home/lokasi', 'kota'=>'jakarta')),
			array('label'=>'Surabaya', 'url'=>array('/home/lokasi', 'kota'=>'surabaya')),
			array('label'=>'Jogjakarta', 'url'=>array('/home/lokasi', 'kota'=>'jogjakarta')),
			array('label'=>'Solo', 'url'=>array('/home/lokasi', 'kota'=>'solo')),
			array('label'=>'Medan', 'url'=>array('/home/lokasi', 'kota'=>'medan')),
			array('label'=>'Denpasar', 'url'=>array('/home/lokasi', 'kota'=>'denpasar')),
		);
		$this->modelSearch = new SearchForm;
		
		$this->render('lokasi', array(
		));
	}
	public function actionLayanan()
	{
		$this->menuTitle = 'Jenis Layanan';
		$this->menu = array(
			array('label'=>'Member Platinum', 'url'=>array('/home/layanan', 'kota'=>'platinum'), 'itemOptions'=>array('onClick'=>$this->createWidget('application.extensions.scrollto.scrollto')->renderJs('platinum'))),
			array('label'=>'Member Gold', 'url'=>array('/home/layanan', 'kota'=>'gold'), 'itemOptions'=>array('onClick'=>$this->createWidget('application.extensions.scrollto.scrollto')->renderJs('gold'))),
		);
		$this->modelSearch = new SearchForm;
		
		$this->render('layanan', array(
		));
	}
	public function actionJaringan()
	{
		$this->menuTitle = 'Jaringan Rekan';
		$this->menu = array(
			array('label'=>'Jawa Timur', 'url'=>array('/home/jaringan', 'prov'=>'jatim')),
			array('label'=>'Jawa Barat', 'url'=>array('/home/jaringan', 'prov'=>'jabar')),
			array('label'=>'Jawa Tengah', 'url'=>array('/home/jaringan', 'prov'=>'jateng')),
		);
		$this->modelSearch = new SearchForm;
		$model = new Jaringan;

		$this->render('jaringan', array(
			'model'=>$model,
		));
	}
	public function actionContact()
	{
		$this->menuTitle = 'Hubungi Kami';
		$this->menu = array(
			array('label'=>'Jakarta', 'url'=>array('/home/lokasi', 'kota'=>'jakarta')),
			array('label'=>'Surabaya', 'url'=>array('/home/lokasi', 'kota'=>'surabaya')),
			array('label'=>'Jogjakarta', 'url'=>array('/home/lokasi', 'kota'=>'jogjakarta')),
			array('label'=>'Solo', 'url'=>array('/home/lokasi', 'kota'=>'solo')),
			array('label'=>'Medan', 'url'=>array('/home/lokasi', 'kota'=>'medan')),
			array('label'=>'Denpasar', 'url'=>array('/home/lokasi', 'kota'=>'denpasar')),
		);
		$this->modelSearch = new SearchForm;
		$model =  new ContactForm;
		$this->render('contact', array(
			'model'=>$model,
		));
	}
	public function actionEvent()
	{
		$this->menuTitle = 'Event Gallery';
		$this->menu = array(
			array('label'=>'Januari', 'url'=>array('/home/event', 'tahun'=>'2013', 'bulan'=>'1'), 'items'=>array(
				array('label'=>'Bakti Sosial Natal 2012', 'url'=>array('/home/event', 'tahun'=>'2013', 'bulan'=>'11', 'no'=>'2')),
				array('label'=>'Pengecekan kesehatan massal PT Wingsfood', 'url'=>array('/home/event', 'tahun'=>'2013', 'bulan'=>'11', 'no'=>'1')),
			)),
			array('label'=>'Desember', 'url'=>array('/home/event', 'tahun'=>'2012', 'bulan'=>'12')),
			array('label'=>'November', 'url'=>array('/home/event', 'tahun'=>'2012', 'bulan'=>'11')),
		);
		$this->modelSearch = new SearchForm;
		$this->layout='//tampilan/artikel';
		$model =  new ContactForm;
		$this->render('event', array(
			'model'=>$model,
		));
	}

	public function actionKeuntungan()
	{
		$this->menuTitle = 'Keuntungan';
		$this->menu = array(
			array('label'=>'Cepat', 'url'=>array('/home/keuntungan', 'view'=>'cepat')),
			array('label'=>'Pelayanan Ramah', 'url'=>array('/home/keuntungan', 'view'=>'ramah')),
			//array('label'=>'Struktur Organisasi', 'url'=>array('/home/static', 'view'=>'struktur')),
		);
		$this->modelSearch = new SearchForm;
		
		if ($_GET['view']) {
			$this->render('static/'.$_GET['view'], array(
			));
		}else{
			$this->render('static/cepat', array(//nilai default
			));
		}
	}
	public function actionKlaim()
	{
		$this->menuTitle = 'Prosedur Klaim';
		$this->menu = array(
			array('label'=>'Cepat', 'url'=>array('/home/klaim', 'view'=>'cepat')),
			array('label'=>'Pelayanan Ramah', 'url'=>array('/home/klaim', 'view'=>'ramah')),
			//array('label'=>'Struktur Organisasi', 'url'=>array('/home/static', 'view'=>'struktur')),
		);
		$this->modelSearch = new SearchForm;
		
		$this->render('static', array(
		));
	}
	public function actionKarir()
	{
		$this->menuTitle = 'Karir';
		$this->menu = array(
			array('label'=>'Admin', 'url'=>array('/home/karir', 'view'=>'admin')),
			array('label'=>'OB', 'url'=>array('/home/karir', 'view'=>'ob')),
			//array('label'=>'Struktur Organisasi', 'url'=>array('/home/static', 'view'=>'struktur')),
		);
		$this->modelSearch = new SearchForm;
		$model =  new Karir;
		
		$this->render('karir', array(
			'model'=>$model,
		));
	}
	public function actionLogin()
	{
		$this->menuTitle = 'Login';
		$this->menu = array(
			array('label'=>'Login', 'url'=>array('/home/login')),
		);
		$this->modelSearch = new SearchForm;
		$model =  new LoginForm;
		
		$this->render('login', array(
			'model'=>$model,
		));
	}

	public function actionGetdata()
	{
		if(Yii::app()->request->isAjaxRequest){
			$data = MasterCity::model()->findAll('city_state_id = :city_state_id',array(':city_state_id'=>$_POST['id']));
			$str = '';
			$str .= '<option value="All">Semua Kota</option>';
			foreach($data as $v){
				$str .= '<option value="'.$v['city_id'].'">'.$v['city_name'].'</option>';
			}
			echo $str;
		}
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