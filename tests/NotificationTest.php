<?php

/*
 | @coder Melvin R. Zamora
 | 2015-6-15
 */

class NotificationTest extends TestCase {

        
    /**
     * save a notification in the database test
     *
     * @return void
     */
    public function testSaveNotification() {
        
        
        $method = 'POST';
        
        $uri = '/v1/notification';
        $data = array(
          'message_from' => 'person1',
          'message_to' => 'person2',
          'message' => 'warning message testing',
          'message_type' => 0,
          'message_status' => 0
        );
       
        
        $response = $this->call($method, $uri, $data);
        $view = $response->getContent();
        $obj = json_decode($view);
        
        $this->assertEquals($obj->{'message_from'}, 'person1');
        $this->assertEquals($obj->{'message_to'}, 'person2');
        $this->assertEquals($obj->{'message'}, 'warning message testing');
        $this->assertEquals($obj->{'message_type'}, 0);
        $this->assertEquals($obj->{'message_status'}, 0);
        $this->assertResponseOk();
        
        // shared id to testDeleteNotification
        $id = $obj->{'id'};
        
        return $id;
        
    }

    /**
     * retrieve all unread notifications from a database
     *
     * @return void
     */
    public function testRetrieveUnreadNotifications() {
        
        $method = 'GET';
        $uri = '/v1/notification/unread';
        
        $response = $this->call($method, $uri);
        
        $json = $response->getContent();
        $arr = json_decode($json, true);
        
        $this->assertTrue(isset($arr) && count($arr) > 0);
        
        
        $this->assertResponseOk();
       
    }
    
    /**
     * delete a notification from the database
     *
     * @return void
     * @depends testSaveNotification
     */
    public function testDeleteNotification($id) {
        
        
        $method = 'DELETE';
        $uri = '/v1/notification/'.$id;
   
        $response = $this->call($method, $uri);
        $view = $response->getContent();
    
    
        $obj = json_decode($view);
        
        $this->assertEquals($obj->{'message_from'}, 'person1');
        $this->assertEquals($obj->{'message_to'}, 'person2');
        $this->assertEquals($obj->{'message'}, 'warning message testing');
        $this->assertEquals($obj->{'message_type'}, 0);
        $this->assertEquals($obj->{'message_status'}, 0);
        $this->assertResponseOk();

    }
}
