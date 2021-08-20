<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        //return $this->render('index');

        return $this->redirect(['site/principal']);
    }




    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }



    /**
     * Displays principal.
     *
     * @return string
     */
    public function actionPrincipal()
    {
        return $this->render('principal');
    }

    /**
     * Displays actionConveyor1.
     *
     * @return string
     */
    public function actionConveyor1(
        $tag='Sin tag',
        $comp='Sin Comp',
        $alarma='Sin Alarma',
        $fecha='Sin fecha',
        $vi='0',
        $vf='0',
        $p='0'
    )
    {
        return $this->render('conveyor1',[
            'tag'=>$tag,
            'comp'=>$comp,
            'alarma'=>$alarma,
            'fecha'=>$fecha,
            'vi'=>$vi,
            'vf'=>$vf,
            'p'=>$p,
        ]);
    }

    /**
     * Displays actionConveyor2.
     *
     * @return string
     */
    public function actionConveyor2(
        $tag='Sin tag',
        $comp='Sin Comp',
        $alarma='Sin Alarma',
        $fecha='Sin fecha',
        $vi='0',
        $vf='0',
        $p='0'
    )
    {
        return $this->render('conveyor2',[
            'tag'=>$tag,
            'comp'=>$comp,
            'alarma'=>$alarma,
            'fecha'=>$fecha,
            'vi'=>$vi,
            'vf'=>$vf,
            'p'=>$p,
        ]);
    }

    /**
     * Displays actionConveyor3.
     *
     * @return string
     */
    public function actionConveyor3(

        $tag='Sin tag',
        $comp='Sin Comp',
        $alarma='Sin Alarma',
        $fecha='Sin fecha',
        $vi='0',
        $vf='0',
        $p='0'
    )
    {
        return $this->render('conveyor3',[
            'tag'=>$tag,
            'comp'=>$comp,
            'alarma'=>$alarma,
            'fecha'=>$fecha,
            'vi'=>$vi,
            'vf'=>$vf,
            'p'=>$p,
        ]);
    }
    /**
     * Displays actionConveyor4.
     *
     * @return string
     */
    public function actionConveyor4(
        $tag='Sin tag'
    )
    {
        return $this->render('conveyor4',[
            'tag'=>$tag,

        ]);
    }
}
