<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Found;
use yii\helpers\Url;
class FoundController extends Controller{
	public function actionIndex(){
		$data=Found::find()->asArray()->all();
		//dd($data);

		$this->layout=false;
		return $this->render('index',['data'=>$data]);
	}
	public function actionAdd(){
		$request=\Yii::$app->request;
		if($request->isGet){
			//不用公共头尾
			$this->layout=false;
			return $this->render('add');
		}else if($request->isPost){
			$data=$request->post();
			//dd($data);
			$found=new Found;
			//遍历$data,字段名要和表单一致
			/*foreach ($data as $key => $value) {
				$found->$key=$value;
			}*/
			$found->type=$data['type'];
			$found->title=$data['title'];
			$found->pickupTime=strtotime($data['time']);
			$found->time=time();
			$found->description=$data['desc'];
			$found->address=$data['address'];
			$found->name=$data['name'];
			$found->tel=$data['tel'];
			$found->state=1;
			$res=$found->save();
			if($res){
				//添加成功
				$this->redirect(Url::to(['found/index']));
			}else{
				$this->redirect(Url::to(['site/index']));
			}
		}
	}
	public function actionDetail(){
		$request=\Yii::$app->request;
		if($request->isGet){
			$id=$request->get('id');
			$data=Found::find()->where(['id'=>$id])->asArray()->one();
			return $this->renderPartial('detail',['data'=>$data]);
		}else if($request->isPost){
			$data=$request->post();
			$found=new Found;
			$id=$data['id'];
			$found=Found::findOne($id);
			$found->type=$data['type'];
			$found->title=$data['title'];
			$found->pickupTime=strtotime($data['time']);
			$found->time=time();
			$found->description=$data['desc'];
			$found->address=$data['address'];
			$found->name=$data['name'];
			$found->tel=$data['tel'];
			$found->state=1;
			$res=$found->save();
			if($res){
				//添加成功
				$this->redirect(Url::to(['found/index']));
			}else{
				$this->redirect(Url::to(['site/index']));
			}

		}

	}
	public function actionDel(){
		$request=\Yii::$app->request;
		//获取id
		$id=$request->post('id');
		//取得整条数据
		$found=Found::findOne($id);
		$res=$found->delete();
		if($res){
			return 9999;
		}else{
			return 0;
		}
	}
}