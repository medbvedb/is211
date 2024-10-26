<?php 
namespace Test;

use PHPUnit\Framework\TestCase;
use Routers\Router;

class InviteTest extends TestCase {
    public function test_router() {
        $router = new Router();
        $html = $router->route( "http://localhost/" );
        $pos= mb_strpos($html, "Приглашаем в наш салон красоты");
        $this->assertNotEquals(false, $pos);
    }
}