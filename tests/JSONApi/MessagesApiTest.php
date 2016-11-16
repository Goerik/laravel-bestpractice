<?php
namespace Tests\JSONApi;

use Illuminate\Http\UploadedFile;
use Tests\Common\ApiHelpersAsserts;
use Tests\Common\TestCase;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MessagesApiTest extends TestCase
{
    use ApiHelpersAsserts;
    use DatabaseTransactions;

    private $messageId = 2;

    public function setUp()
    {
        parent::setUp();
    }

    /**
     * Convert params to JSON structure
     * @param $params
     * @return array
     */
    protected function prepareParams($params)
    {
        $postData = [
            'data' => json_encode($params),
        ];

        return $postData;
    }

    /**
     * Test for success call UPDATE
     */
    public function testUpdateMessageSuccess()
    {
        $params = $this->prepareParams([
            "message" => "new message",
        ]);

        $this->call('PUT', route("messages-api.update", $this->messageId), $params);
        $this->assertResponseStatus(200);

        $result = json_decode($this->response->getContent());
        $this->assertSuccessResult($result);

        $data = $result->data;
        $this->assertTrue($data);
        $this->seeInDatabase('messages', [
            "id" => $this->messageId,
            "message" => "new message"
        ]);
    }

    /**
     * Test for validation fail for UPDATE
     */
    public function testUpdateMessageValidationFail()
    {
        $params = $this->prepareParams([
            "m2essage" => "new message",
        ]);

        $this->call('PUT', route("messages-api.update", $this->messageId), $params);
        $this->assertResponseStatus(200);

        $result = json_decode($this->response->getContent());
        $this->assertErrorResult($result);

        $data = $result->data;

        $this->assertEquals(["The message field is required."], $data);
        $this->dontSeeInDatabase('messages', [
            "id" => $this->messageId,
            "message" => "new message"
        ]);
    }

    /*
     * Test for success call STORE
     */
    public function testStoreMessageSuccess()
    {
        $params = $this->prepareParams([
            "message" => "new message123123123123",
            "from_user_id" => 1,
            "to_user_id" => 1,
        ]);

        $this->call('POST', route("messages-api.store", $this->messageId), $params);
        $this->assertResponseStatus(200);

        $result = json_decode($this->response->getContent());
        $this->assertSuccessResult($result);

        $data = $result->data;
        $this->assertTrue($data);
        $this->seeInDatabase('messages', [
            "message" => "new message123123123123"
        ]);
    }


    /**
     * Test for validation fail for STORE
     */
    public function testStoreMessageValidationFail()
    {
        $params = $this->prepareParams([
            "m2essage" => "new messageadsadsadasdsadsadsa",
            "from_user_id" => 1,
            "to_user_id" => 1,

        ]);

        $this->call('POST', route("messages-api.store", $this->messageId), $params);

        $this->assertResponseStatus(200);

        $result = json_decode($this->response->getContent());
        $this->assertErrorResult($result);

        $data = $result->data;

        $this->assertEquals(["The message field is required."], $data);
        $this->dontSeeInDatabase('messages', [
            "message" => "new messageadsadsadasdsadsadsa"
        ]);
    }

    /*
    * Test for success call DELETE
    */
    public function testDeleteMessageSuccess()
    {
        $this->seeInDatabase('messages', [
            "id" => $this->messageId,
            'deleted_at' => null
        ]);

        $this->call('DELETE', route("messages-api.destroy", $this->messageId));
        $this->assertResponseStatus(200);

        $result = json_decode($this->response->getContent());

        $this->assertSuccessResult($result);

        $data = $result->data;
        $this->assertTrue($data);
        $this->dontSeeInDatabase('messages', [
            "id" => $this->messageId,
            'deleted_at' => null
        ]);
    }

}

