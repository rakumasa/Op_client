<?php
namespace app\models;

use yii;
use yii\base\Model;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;
use yii\data\ArrayDataProvider;

class APIModel extends APIModel
{
    public $baseUrl = 'http://localhost:8080';
    Public $uri;

    public function getAuthKey(){
        // Establish Session and Authkey Access
        $session = Yii::$app->session;
        // check if a session is already open
        if (!$session->isActive){
            $session->open();
        }

        return $session['auth_key'];
    }

    public function save(){
        // Create Guzzle Client
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => $this->baseUrl,
        ]);

        if($this->validate())
        {
            $authKey= $this->getAuthKey();
            // Attempt API Transmission
            try {
                $headers=[
                    'auth' => [$authKey, 'null'],
                    'headers'  => ['content-type' => 'application/json', 'Accept' => 'application/json','connection'=>'close',],
                    'json' => $this,
                ];

                $reBody=[
                    'json' => $this
                ];
                $response = $client->request('POST', $this->uri,$headers,$reBody);
                $body = $response->getBody();
                return $body;
            }
            catch (RequestException $e) {
                //echo "Exception...";
                //print_r($stream->getContents());
                //print_r($body);
                //echo Psr7\str($e->getRequest());
                if ($e->hasResponse()) {
                    $response = (string)$e->getResponse()->getBody();
                    //$stream = Psr7\str($response);
                    //var_dump($response);
                    $arrResponse = json_decode($response);
                    foreach($arrResponse as $idx => $errorData)
                    {
                        $this->addError($errorData->field,$errorData->message);
                    }

                }

            }

        }

    }

    public function getAllModels($pageSize=10){

        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => $this->baseUrl,
        ]);
        $authKey= $this->getAuthKey();
        //remove the try catch to view the actual error
        try {
            $headers=[
                'auth' => [$authKey, 'null'],
                'headers'  => ['connection'=>'close',],
            ];
            $body='';
            $response = $client->request('GET',  $this->uri,$headers, $body);
            $body = $response->getBody();
            $myBody=\GuzzleHttp\json_decode($body,true);

        } catch (RequestException $e)
        {
            $myBody= Psr7\str($e->getRequest());
            if ($e->hasResponse()) {
                $myBody= Psr7\str($e->getResponse());
            }
            $myBody= "code: '".$e->getCode()."'' request: '".$myBody."'";
        }

        if(is_array ($myBody)) {
            $dataProvider = new ArrayDataProvider([
                'allModels' => $myBody,
                'sort' => [
                    'attributes' => ['id', 'username', 'employee_id'],
                ],
                'pagination' => [
                    'pageSize' => $pageSize,
                ],
            ]);
        }else{
            $dataProvider=null;
        }

        return $dataProvider;
    }

    public function Search($query){

        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => $this->baseUrl,
        ]);
        $authKey= $this->getAuthKey();
        //remove the try catch to view the actual error
        try {
            $headers=[
                'auth' => [$authKey, 'null'],
                'headers'  => ['connection'=>'close',],
                'query' => $query,
            ];
            $body='';
            $response = $client->request('GET',  $this->uri,$headers, $body);
            $body = $response->getBody();
            $myBody=\GuzzleHttp\json_decode($body,true);

        } catch (RequestException $e)
        {
            $myBody= Psr7\str($e->getRequest());
            if ($e->hasResponse()) {
                $myBody= Psr7\str($e->getResponse());
            }
            $myBody= "code: '".$e->getCode()."'' request: '".$myBody."'";
        }

        //this was test data
        //$searchModel = new UserQuery();
        //$dataProvider = $searchModel->search(Yii::$app->request->queryParams, $this->_owner);
        if(is_array ($myBody)) {
            $dataProvider = new ArrayDataProvider([
                'allModels' => $myBody,
                'sort' => [
                    'attributes' => ['id', 'username', 'employee_id'],
                ],
                'pagination' => [
                    'pageSize' => $pageSize,
                ],
            ]);
        }else{
            $dataProvider=null;
        }

        return $dataProvider;
    }

    public function getByID($id){

        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => $this->baseUrl,
        ]);
        $authKey= $this->getAuthKey();
        $headers=[
            'auth' => [$authKey, 'null'],
            'headers'  => ['connection'=>'close',],
        ];
        $body='';
        $response = $client->request('GET', $this->uri.'/'.$id,$headers, $body);
        $body = $response->getBody();
        $body=\GuzzleHttp\json_decode($body,true);

        return $body;
    }

    public function update($id){

        // Create Guzzle Client
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => $this->baseUrl,
        ]);

        if($this->validate())
        {
            $authKey= $this->getAuthKey();
            // Attempt API Transmission
            try {
                $headers=[
                    'auth' => [$authKey, 'null'],
                    'headers'  => ['content-type' => 'application/json', 'Accept' => 'application/json','connection'=>'close',],
                    'json' => $this
                ];

                $reBody=[
                    'json' => $this
                ];
                $response = $client->request('PUT', $this->uri.'/'.$id,$headers,$reBody);
                $body = $response->getBody();
                return $body;
            }
            catch (RequestException $e) {
                //echo "Exception...";
                //print_r($stream->getContents());
                //print_r($body);
                //echo Psr7\str($e->getRequest());
                if ($e->hasResponse()) {
                    $response = (string)$e->getResponse()->getBody();
                    //$stream = Psr7\str($response);
                    //var_dump($response);
                    $arrResponse = json_decode($response);
                    foreach($arrResponse as $idx => $errorData)
                    {
                        $this->addError($errorData->field,$errorData->message);
                    }

                }

            }

        }

    }

}
