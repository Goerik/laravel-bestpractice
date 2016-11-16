<?php

namespace Tests\Common;

trait ApiHelpersAsserts {

    /**
     * Assert for result are error
     * @param $data
     */
    public function assertErrorResult($data) {
        $this->assertTrue(isset($data->success));
        $this->assertFalse($data->success);
    }

    /**
     * Assert for result are success
     * @param $data
     */
    public function assertSuccessResult($data) {
        $this->assertTrue(isset($data->success));
        $this->assertTrue($data->success);
    }

}