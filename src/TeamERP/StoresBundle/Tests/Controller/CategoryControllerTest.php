<?php

namespace TeamERP\StoresBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use TeamERP\StoresBundle\Controller\CategoryController;
//use Matthias\RegistrationBundle\Controller\RegistrationController;
use Symfony\Component\HttpFoundation\Request;

class CategoryControllerTest extends WebTestCase
{
    public function testNewCategoryRender(){
        $client = static::createClient();

        $crawler = $client->request('GET', '/stores/new/category');
        //Render basic test
        $this->assertTrue($crawler->filter('html:contains("Category name")')->count() > 0);
        $this->assertTrue($crawler->filter('html:contains("Description")')->count() > 0);
    }
}
class CategoryContollerTest extends \PHPUnit_Framework_TestCase {
    public function testNewCategoryPersist(){
        //test persistance.
        $controller = new CategoryController();
        $request = new Request();
        $request->setMethod('POST');

        $form = $this
            ->getMockBuilder('Symfony\Tests\Component\Form\FormInterface')
            ->setMethods(array('bindRequest', 'isValid'))
            ->getMock()
        ;
        $form
            ->expects($this->once())
            ->method('bindRequest')
            ->with($this->equalTo($request))
        ;
        $form
            ->expects($this->once())
            ->method('isValid')
            ->will($this->returnValue(true))
        ;
        $formFactory = $this->getMock('Symfony\Component\Form\FormFactoryInterface');
        $formFactory
            ->expects($this->once())
            ->method('create')
            ->will($this->returnValue($form))
        ;

        $controller->setFormFactory($formFactory);
        $controller->setTemplating($templating);
        $controller->newAction(new Request);        
    }   
}