<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\InsertForm;
use app\models\Users;
use app\models\MailerForm;

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
        $model = new InsertForm();
        if($model->load(Yii::$app->request->post())){
            if($model->save()){
                Yii::$app->session->setFlash('Ok','Okay');
                return $this->refresh();
            }
            else
            {
                Yii::$app->session->setFlash('error','nope');
            }
        }
        return $this->render('index', [
            'model' => $model,
        ]);
        $model = new MailerForm();
        if ($model->load(Yii::$app->request->post()) && $model->sendEmail()) {
            Yii::$app->session->setFlash('mailerFormSubmitted');
            return $this->refresh();
        }
        return $this->render('index', [
            'model' => $model,
        ]);
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
<<<<<<< HEAD
        return $this->render('singin', [
=======
        return $this->render('login', [
>>>>>>> 225243b8395fef5a4de64cec1700302d7f607a01
            'model' => $model,
        ]);
    }

      public function actionDatainsert()
    {
        $model = new InsertForm();
         if($model->load(Yii::$app->request->post())){
            if($model->save()){
                Yii::$app->session->setFlash('Ok','Okay');
                return $this->refresh();
            }
            else
            {
                Yii::$app->session->setFlash('error','nope');
            } 
         }
         return $this->render('singup', [
            'model' => $model,
        ]);
    }
     public function actionDataoutput(){
        $users = InsertForm::find()->all();
       return $this->render('dataoutput',['users'=>$users]);
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
    public function actionMailer()
    {
        $model = new MailerForm();
        if ($model->load(Yii::$app->request->post()) && $model->sendEmail()) {
            Yii::$app->session->setFlash('mailerFormSubmitted');
            return $this->refresh();
        }
        return $this->render('mailer', [
            'model' => $model,
        ]);
    }}
