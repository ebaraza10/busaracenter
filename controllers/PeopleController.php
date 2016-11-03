<?php

namespace app\controllers;

use Yii;
use app\models\PersonsDetails;
use app\models\PersonsDetailsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;

/**
 * PeopleController implements the CRUD actions for PersonsDetails model.
 */
class PeopleController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all PersonsDetails models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PersonsDetailsSearch();

       $dataProvider = new \yii\data\ArrayDataProvider([
           'allModels' => PersonsDetails::find()->all(),
            'pagination' =>['defaultPageSize' => 5],
        ]);
            
       return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PersonsDetails model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $id=  base64_decode($id);
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new PersonsDetails model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionRegistration()
    {
        $model = new PersonsDetails();

        if ($model->load(Yii::$app->request->post()) && $model->validate())
        {         
            if(filter_var($model->name,FILTER_VALIDATE_INT))
            {
                $model->addError('name','Enter a valid name');
                return $this->render('create', [
                'model' => $model,
                ]);
            }
                
                if(strlen($model->phone_number)<10 || strlen($model->phone_number)>10)
                {
                    $model->addError('phone_number','Enter a valid phone number');
                    return $this->render('create', [
                   'model' => $model,
                   ]);
                }
                if(!(filter_var($model->phone_number,FILTER_VALIDATE_FLOAT)))
                {
                    $model->addError('phone_number','Enter a valid phone number');
                    return $this->render('create', [
                    'model' => $model,
                    ]);
                }
                       
                $personExists=PersonsDetails::find()->where(['name'=>$model->name,'age'=>$model->age,'phone_number'=>$model->phone_number])->orWhere(['name'=>$model->name])->orWhere(['phone_number'=>$model->phone_number])->one();
                if(sizeof($personExists)>0)
                {
                    \Yii::$app->getSession()->setFlash('errorsavingrecord','Error saving person.The name or phone number is already registered!');
                    return $this->render('create', [
                    'model' => $model,
                    ]);
                }
                else
                {
                    $model->save();
                    \Yii::$app->getSession()->setFlash('successsavingrecord','User successfully registered.');
                    return $this->redirect(['view', 'id' => base64_encode($model->id)]); 
                }
            
            
        }
        else
        {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
    
    
    /**
     * Finds the PersonsDetails model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PersonsDetails the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PersonsDetails::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    public function actionError()
    {
        
        return $this->render('error');
    }
}
