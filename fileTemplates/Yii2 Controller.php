<?php
#parse("PHP File Header.php")

#if (${NAMESPACE})
namespace ${NAMESPACE};

use Yii;
use yii\filters\AccessControl;
#end

#parse("PHP Class Doc Comment.php")
class ${NAME}
{
    /**
     * Define as regras de controle de acesso as actions desse controller.
     *
     * @return array
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['admin', 'dir']
                    ],
                    /*[
                        'allow' => true,
                        'roles' => ['cobranca'],
                        'actions' => ['copia-dia-vencimento', 'carteira-boletos']
                    ],*/
                    [
                        'allow' => false,
                        'roles' => ['?']
                    ]
                ],
            ],
        ];
    }
    
    /**
     * Action index
     * @return string
     */
    public function actionIndex()
    {
    
    }
}