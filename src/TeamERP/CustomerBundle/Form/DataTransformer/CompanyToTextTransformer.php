<?php
namespace TeamERP\CustomerBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
//use Symfony\Component\Form\Exception\TransformationFailedException;
use Doctrine\Common\Persistence\ObjectManager;
use TeamERP\CustomerBundle\Entity\Company;

/**
 * Description of CompanyToTextTransformer
 * @author Abel Guzman
 */
class CompanyToTextTransformer implements DataTransformerInterface {
    private $om;

    public function __construct(ObjectManager $om){
        $this->om = $om;
    }

    public function transform($company)
    {
        if (null === $company) {
            return "";
        }
        return $company->getCompanyName();
    }

    public function reverseTransform($text)
    {
        if (!$text) {
            return null;
        }
        $company = $this->om->getRepository('TeamERPCustomerBundle:Company')
                ->findOneBy(array('company_name' => $text));
        if (null === $company){
            /* Add new company */
            $company = new Company();
            $company->setCompanyName($text);
//            $this->om->persist($company);
//            $this->om->flush();
        } 
        return $company;
    } 
}
